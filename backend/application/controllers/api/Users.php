<?php defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Example
 *
 * This is an example of a few basic user interaction methods you could use
 * all done with a hardcoded array.
 *
 * @package        CodeIgniter
 * @subpackage    Rest Server
 * @category    Controller
 * @author        Phil Sturgeon
 * @link        http://philsturgeon.co.uk/code/
 */

// This can be removed if you use __autoload() in config.php OR use Modular Extensions
require APPPATH . '/libraries/REST_Controller.php';

class Users extends REST_Controller
{
    function __construct()
    {
        // Construct our parent class
        header('Access-Control-Allow-Origin: *');
        header("Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE");
        parent::__construct();

        // Configure limits on our controller methods. Ensure
        // you have created the 'limits' table and enabled 'limits'
        // within application/config/rest.php
        $this->methods['user_get']['limit'] = 500; //500 requests per hour per user/key
        $this->methods['user_post']['limit'] = 100; //100 requests per hour per user/key
        $this->methods['user_delete']['limit'] = 50; //50 requests per hour per user/key
    }


    function users_get()
    {
        $users = $this->users_model->get_users();
        if ($users) {
            $this->response($users, 200); // 200 being the HTTP response code
        } else {
            $this->response(array('error' => 'Routes could not be found'), 404);
        }

    }

    function userregister_post()
    {
        if ((!$this->post('email') || !$this->post('device_id') || !$this->post('password'))) {
            $message = array('success' => 'false');
            $this->response($message, 400);
        }

        $email = $this->post('email');


        // Remove all illegal characters from email
        $email = filter_var($email, FILTER_SANITIZE_EMAIL);

        if (!filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
            log_message('info', "$email is a valid email address");
        } else {
            log_message('info', "$email is not a valid email address");
            $message = array('error' => 'Not accepted email', 'success' => 'false');
            $this->response($message, 400);
        }


        if ($this->users_model->check_user_exists($email)) {
            $message = array('error' => 'User already registered', 'success' => 'false');
            $this->response($message, 200);
        }


        $user_id = $this->users_model->save_user($email, $this->post('device_id'), $this->post('password'));

        if (!$user_id) {
            $message = array('error' => 'DB error, user not inserted!', 'success' => 'false');
            $this->response($message, 409);
        }

        log_message('info', 'db returned userid ' . $user_id);


        $message = array('id' => $user_id, 'device_id' => $this->post('device_id'), 'email' => $this->post('email'), 'message' => 'user registered!', 'success' => 'true');

        $this->response($message, 200);
    }


    function userlogin_post()
    {
        if ((!$this->post('email') || !$this->post('device_id') || !$this->post('password'))) {
            $message = array('success' => 'false');
            $this->response($message, 400);
        }

        $email = $this->post('email');


        // Remove all illegal characters from email
        $email = filter_var($email, FILTER_SANITIZE_EMAIL);

        if (!filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
            log_message('info', "$email is a valid email address");
        } else {
            log_message('info', "$email is not a valid email address");
            $message = array('error' => 'Not accepted email', 'success' => 'false');
            $this->response($message, 400);
        }


        if ($this->users_model->check_user_exists($email)) {

            $dev_id = $this->users_model->check_user($email, $this->post('password'));
            if (empty($dev_id)) {
                $message = array('message' => 'User not authorized', 'success' => 'false');
                $this->response($message, 403);
            }
            if ($dev_id == $this->post('device_id')) {

                $message = array('message' => 'User login ok', 'success' => 'true');
                $this->response($message, 200);
            } else {
                $this->users_model->change_device_id($email, $this->post('device_id'));
                $message = array('message' => 'Device id changed', 'success' => 'true');
                $this->response($message, 200);
            }

        }


        $user_id = $this->users_model->save_user($email, $this->post('device_id'), $this->post('password'));

        if (!$user_id) {
            $message = array('error' => 'DB error, user not inserted!', 'success' => 'false');
            $this->response($message, 409);
        }

        log_message('info', 'db returned userid ' . $user_id);


        $message = array('id' => $user_id, 'device_id' => $this->post('device_id'), 'email' => $this->post('email'), 'message' => 'user registered!', 'success' => 'true');

        $this->response($message, 200);
    }


    public function userlocation_post()
    {

        //log_message('lat', $this->post('lat'));
        if (!$this->post('email') || !$this->post('lat') || !$this->post('lon') || !$this->post('route') || !$this->post('dir')) {
            $message = array('success' => 'false');
            $this->response($message, 400);
        }

        $user_id = $this->users_model->get_id_from_email($this->post('email'));
        if ($user_id) {
            if ($this->users_model->save_user_location($user_id, $this->post('lat'), $this->post('lon'), $this->post('route'), $this->post('dir'))) {
                $message = array('message' => 'User location saved', 'success' => 'true');
                $this->response($message, 200);

            } else {
                $message = array('error' => 'User data not saved', 'success' => 'false');
                $this->response($message, 400);
            }

        } else {
            $message = array('error' => 'User does not exist', 'success' => 'false');
            $this->response($message, 400);
        }
    }


    public function userprofile_get()
    {
        if (!$this->get('email')) {
            $message = array('success' => 'false');
            $this->response($message, 400);
        }
        $user = $this->users_model->get_user_profile($this->get('email'));

        if ($user) {
            $message = array('user' => $user, 'success' => 'true');
            $this->response($message, 200);
        } else {
            $message = array('error' => 'no user found', 'success' => 'false');
            $this->response($message, 200);
        }

    }


    public function userrating_post()
    {

        if (!$this->post('email') || !$this->post('route') || !$this->post('dir') || !$this->post('arrival_time') || !$this->post('comfort') || !$this->post('route_duration') || !$this->post('driver_rating')) {
            $message = array('success' => 'false');
            $this->response($message, 400);
        }

        $user_id = $this->users_model->get_id_from_email($this->post('email'));

        if ($user_id) {
            $comment = ($this->post('comment')) ? $this->post('comment') : "";

            if ($this->users_model->save_user_rating($user_id, $this->post('route'), $this->post('dir'), $this->post('arrival_time'), $this->post('comfort'), $this->post('route_duration'), $this->post('driver_rating'), $comment)) {
                $message = array('message' => 'User rating saved', 'success' => 'true');
                $this->response($message, 200);

            } else {
                $message = array('error' => 'User data not saved', 'success' => 'false');
                $this->response($message, 400);
            }

        } else {
            $message = array('error' => 'User does not exist', 'success' => 'false');
            $this->response($message, 400);
        }
    }


    public function savefav_post()
    {

        if (!$this->post('email') || !$this->post('route') || !$this->post('dir')) {
            $message = array('success' => 'false');
            $this->response($message, 400);
        }

        if ($this->users_model->save_favorites($this->post('email'), $this->post('route'), $this->post('dir'))) {
            $message = array('message' => 'User favorite saved', 'success' => 'true');
            $this->response($message, 200);
        } else {
            $message = array('error' => 'User favorite not saved', 'success' => 'false');
            $this->response($message, 400);
        }


    }

    public function getfav_get(){

        if (!$this->get('email')) {
            $message = array('success' => 'false');
            $this->response($message, 400);
        }

        $favs=$this->users_model->get_favorites($this->get('email'));


        if ($favs) {
            $message = array('favorites' => $favs, 'success' => 'true');
            $this->response($message, 200);
        } else {
            $message = array('error' => 'no favorites found for this user', 'success' => 'false');
            $this->response($message, 200);
        }

    }

    public function delfav_post(){
        if (!$this->post('fav_id')) {
            $message = array('success' => 'false');
            $this->response($message, 400);
        }

        if ($this->users_model->delete_favorite($this->post('fav_id'))){
            $message = array('message' => 'favorite deleted', 'success' => 'true');
            $this->response($message, 200);
        } else {
            $message = array('error' => 'no favorite found', 'success' => 'false');
            $this->response($message, 200);

        }


    }


}
