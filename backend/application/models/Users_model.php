<?php defined('BASEPATH') OR exit('No direct script access allowed');


class Users_model extends CI_Model
{

    public function __construct()
    {
        // Call the CI_Model constructor
        parent::__construct();
    }

    public function get_users()
    {
        $query = $this->db->get('users');
        return $query->result();
    }

    public function check_user_exists($email)
    {

        $query = $this->db->get_where('users', array('email' => $email));
        if ($query->num_rows() != 1) {
            return false;
        } else {
            return true;
        }
    }

    public function save_user($email, $dev, $pass)
    {
        $data = array(
            'email' => $email,
            'device_id' => $dev,
            'password' => md5($pass),
        );

        try {

            $this->db->insert('users', $data);
            $insert_id = $this->db->insert_id();
            if (!$insert_id) throw new Exception($this->db->_error_message(), $this->db->_error_number());
            $this->db->trans_complete();
            if ($insert_id > 0) {
                return $insert_id;
            }

        } catch (Exception $e) {
            log_message('error', sprintf('%s : %s : DB transaction failed. Error no: %s, Error msg:%s, Last query: %s', __CLASS__, __FUNCTION__, $e->getCode(), $e->getMessage(), print_r($this->db->last_query(), TRUE)));
            return false;
        }
    }

    public function save_user_location($id, $lat, $lon, $route, $dir)
    {

        $timestamp = date('Y-m-d H:i:s');
        $data = array(
            'lat' => $lat,
            'lon' => $lon,
            'userid' => $id,
            'routeid' => $route,
            'time' => $timestamp,
            'direction' => $dir
        );

        //log_message('info', $data);

        try {

            //check if exists a record with userid, routeid and insert or update

            $user_loc_id = $this->find_user_route($id, $route);

            if (!empty($user_loc_id)) { //found info about user and route
                log_message('info', $user_loc_id);
                $this->db->where(array('userid' => $id, 'routeid' => $route));
                $query = $this->db->update('user_locations', $data);
                //log_message('info', $this->db->last_query());
                //log_message('info', 'update ' . $id . ' ' . $route);
            } else {
                //log_message('info', $user_loc_id);
                $query = $this->db->insert('user_locations', $data);
                $insert_id = $this->db->insert_id();
                //log_message('info', 'insert ' . $id . ' ' . $route);

                if (!$insert_id) throw new Exception();
                $this->db->trans_complete();
                if ($insert_id > 0) {
                    return $insert_id;
                }

            }

            $count = $this->get_count_from_id($id);


            $data = array(
                'counter' => $count + 1,
            );
            $this->db->where('id', $id);
            $this->db->update('users', $data);

        } catch (Exception $e) {
            //log_message('error', sprintf('%s : %s : DB transaction failed. Error no: %s, Error msg:%s, Last query: %s', __CLASS__, __FUNCTION__, $e->getCode(), $e->getMessage(), print_r($this->db->last_query(), TRUE)));
            return false;
        }


        if ($this->db->affected_rows() > 0) {
            return true;
        } else {
            return false;
        }

    }

    public function get_id_from_email($email)
    {
        $data = array(
            'email' => $email,
        );

        $query = $this->db->get_where('users', $data);
        if ($query->num_rows() != 1) {
            return NULL;
        } else {
            $user_id = $query->result()[0]->id;
            return $user_id;
        }

    }

    public function get_count_from_id($id)
    {
        $data = array(
            'id' => $id,
        );

        $query = $this->db->get_where('users', $data);
        if ($query->num_rows() != 1) {
            return NULL;
        } else {
            $user_id = $query->result()[0]->counter;
            return $user_id;
        }

    }

    function check_user($email, $pass)
    {
        $data = array(
            'email' => $email,
            'password' => md5($pass),
        );
        $query = $this->db->get_where('users', $data);
        if ($query->num_rows() == 1) {
            return $query->result()[0]->device_id;
        } else {
            return "";
        }

    }

    function change_device_id($email, $dev_id)
    {
        $data = array(
            'device_id' => $dev_id,
        );

        $this->db->where('email', $email);
        $this->db->update('users', $data);
    }

    function find_user_route($userid, $routeid)
    {

        $this->db->select('id');
        $this->db->where(array('userid' => $userid, 'routeid' => $routeid));
        $query = $this->db->get('user_locations');
        //log_message('info', $this->db->last_query());

        if ($query->num_rows() == 1) {
            return $query->result()[0]->id;
        } else {
            return false;
        }

    }

    function get_user_profile($email)
    {
        $this->db->select('id,email,counter');
        $query_profile = $this->db->get_where('users', array('email' => $email));

        $user_id = $this->get_id_from_email($email);
        if ($user_id) {


            $query_rating = $this->db->get_where('user_ratings', array('user_id' => $user_id));


            if ($query_profile->num_rows() == 1) {
                $result['profile'] = $query_profile->result();
                $result['ratings'] = $query_rating->result();
                //return $query->result();
                return $result;
            } else {
                return false;
            }
        }

    }

    function save_user_rating($id, $route, $dir, $at, $cmf, $dur, $driver, $comment)
    {
        $this->db->insert('user_ratings', array('user_id' => $id, 'route_id' => $route,
            'direction' => $dir, 'arrival_time' => $at, 'comfort' => $cmf, 'route_duration' => $dur,
            'driver_rating' => $driver, 'comment' => $comment));
        //log_message('info', $this->db->last_query());
        $insert_id = $this->db->insert_id();
        if (!$insert_id) throw new Exception($this->db->_error_message(), $this->db->_error_number());
        if ($insert_id > 0) {
            return $insert_id;
        } else {
            return false;
        }

    }

    public function save_favorites($email, $route, $dir)
    {
        $user_id = $this->get_id_from_email($email);
        if ($user_id) {
            $this->db->insert('user_favs', array('user_id' => $user_id, 'route_id' => $route, 'dir' => $dir));
            $insert_id = $this->db->insert_id();
            if (!$insert_id) throw new Exception($this->db->_error_message(), $this->db->_error_number());
            if ($insert_id > 0) {
                return $insert_id;
            } else {
                return false;
            }

        }

    }

    public function get_favorites($email)
    {
        $user_id = $this->get_id_from_email($email);
        if ($user_id) {
            $query=$this->db->get_where('user_favs', array('user_id'=>$user_id));
            if ($query->num_rows() >= 1) {
                return $query->result();
            } else {
                return false;
            }

        }

    }

    public function delete_favorite($fav_id){
        $this->db->where('id',$fav_id);
        $this->db->delete('user_favs');

        if ($this->db->affected_rows() > 0) {
            return true;
        } else {
            return false;
        }

    }
}
