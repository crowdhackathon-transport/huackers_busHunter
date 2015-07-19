<?php defined('BASEPATH') OR exit('No direct script access allowed');


class Routes_model extends CI_Model
{

    public function __construct()
    {
        // Call the CI_Model constructor
        parent::__construct();
    }

    public function get_routes_deprecated()
    {
        $this->db->distinct();
        $this->db->select('route_short_name');
        $this->db->select('route_long_name');
        $query = $this->db->get('Final_routes');
        log_message('info', $this->db->last_query());
        return $query->result();
    }

    public function get_routes()
    {
        $query = $this->db->get('bus_lines');
        log_message('info', $this->db->last_query());
        return $query->result();
    }

    public function get_stops_by_route($route, $dir)
    {

        $sql = "select bus_stops.s_id, bus_stops.name_el, bus_stops.name_en, bus_stops.lat, bus_stops.lon, line_stops.direction_flag
                from bus_stops, line_stops, bus_lines
                where bus_stops.s_id=line_stops.stop_id  and line_stops.direction_flag = " . $dir . " and line_stops.line_id=bus_lines._id and bus_lines._id='" . $route . "'";


        $query_response = $this->db->query($sql);
        $result = $query_response->result();

        if ($query_response->num_rows() < 1) {
            return NULL;
        } else {
            return $result;
        }

        log_message('info', $this->db->last_query());
        return $query->result();

    }

    public function get_nearest_stops($lat, $lon, $dist)
    {

        $sql = "SELECT  s_id,  name_el, name_en, street_el, street_en, lat, lon, (
                    6371 * ACOS(COS(RADIANS(" . $lat . ")) * COS(RADIANS(lat)) * COS(RADIANS(lon) - RADIANS(" . $lon . ")) + SIN(RADIANS(" . $lat . ")) * SIN(RADIANS(lat)))
                ) AS distance
            FROM bus_stops
            HAVING distance < " . $dist . "
            ORDER BY distance";
        $query_response = $this->db->query($sql);
        log_message('info', $this->db->last_query());
        $result = $query_response->result();

        if ($query_response->num_rows() < 1) {
            return NULL;
        } else {
            return $result;
        }
        return $query->result();
    }

    public function get_nearest_lines($lat, $lon, $dist)
    {

        $sql = "SELECT   line_id, direction_flag, line_name_el, line_name_en, (
                    6371 * ACOS(COS(RADIANS(" . $lat . ")) * COS(RADIANS(lat)) * COS(RADIANS(lon) - RADIANS(" . $lon . ")) + SIN(RADIANS(" . $lat . ")) * SIN(RADIANS(lat)))
                ) AS distance
            FROM bus_stops, line_stops, bus_lines
            where bus_stops.s_id = line_stops.stop_id and line_stops.line_id = bus_lines._id
            HAVING distance < " . $dist . "
            ORDER BY distance";
        $query_response = $this->db->query($sql);
        log_message('info', $this->db->last_query());
        //$result = $query_response->result();
        $result = array();
        if ($query_response->num_rows() > 0) {
            foreach ($query_response->result() as $row) {
                $this->db->join('user_locations', 'bus_lines._id =  user_locations.routeid');
                $dir=$row->direction_flag;
                $this->db->where('direction',$dir);
                $query1 = $this->db->get_where('bus_lines', array('_id' => $row->line_id));

                $obj = new stdClass();

                $obj->line_id = $row->line_id;
                $obj->direction_flag = $row->direction_flag;
                $obj->line_name_el = $row->line_name_el;
                $obj->line_name_en = $row->line_name_en;
                $obj->distance = $row->distance;
                $obj->tracked = $query1->num_rows();

                array_push($result, $obj);
            }

            }
        return $result;


       /* if ($query_response->num_rows() < 1) {
            return NULL;
        } else {
            return $result;
        }
        return $query->result();*/
    }

    public function findbusfromstop($stop)
    {

        $result = array();
        $this->db->select('line_stops.line_id');
        $this->db->select('line_stops.direction_flag');
        $this->db->select('bus_lines.line_name_el');
        $this->db->select('bus_lines.line_name_en');
        $this->db->select('bus_lines.is_circular');
        $this->db->join('bus_lines', 'line_stops.line_id = bus_lines._id');
        //$this->db->join('user_locations','line_stops.line_id =  user_locations.routeid');
        $query = $this->db->get_where('line_stops', array('stop_id' => $stop));
        //log_message('info', $this->db->last_query());


        if ($query->num_rows() > 0) {
            foreach ($query->result() as $row) {

                $this->db->join('user_locations', 'bus_lines._id =  user_locations.routeid');
                $dir=$row->direction_flag;
                $this->db->where('direction',$dir);
                $query1 = $this->db->get_where('bus_lines', array('_id' => $row->line_id));

                $obj = new stdClass();

                $obj->line_id = $row->line_id;
                $obj->direction_flag = $row->direction_flag;
                $obj->line_name_el = $row->line_name_el;
                $obj->line_name_en = $row->line_name_en;
                $obj->is_circular = $row->is_circular;
                $obj->tracked = $query1->num_rows();

                array_push($result, $obj);


            }
        }

        //log_message('info', print_r($result));
        //return $query->result();
        return $result;
    }

    public function gettimes($line, $dir, $day)
    {
        $sql = "SELECT time(minute) as m
                FROM bus_times
                WHERE line_id = " . $line . "
                        AND day = " . $day . "
                        AND direction = " . $dir . "
                ORDER BY m";


        $query_response = $this->db->query($sql);
        log_message('info', $this->db->last_query());
        $result = $query_response->result();

        if ($query_response->num_rows() < 1) {
            return NULL;
        } else {
            return $result;
        }
        return $query->result();

    }

    public function save_points_from_google($route, $dir, $points)
    {
        //@todo create table to save routeid and lat,lon from returned points from google directions
        // echo 'lat = ' . $point['0'];
        // echo 'lon = ' .$point['1'];
        foreach ($points as $point) {

            $data = array(
                'route_id' => $route,
                'direction' => $dir,
                'waypoints_json' => $point['0'] . ',' . $point['1'],
                'lat' => $point['0'],
                'lon' => $point['1'],
            );
           // echo '***************' . $point['0'] . '---------' .$point['1'];
            $this->db->insert('route_waypoints', $data);
        }

    }

    public function check_route_waypoints($route, $dir)
    {
        $result = array();
        $this->db->select('lat,lon');
        $query = $this->db->get_where('route_waypoints', array('route_id' => $route, 'direction' => $dir));

        if ($query->num_rows() < 1) {
            return false;
        } else {
            //return $query->result();
            foreach ($query->result() as $row) {

                $obj = new stdClass();
                //$obj->point = $row->waypoints_json;
                $obj->lat = $row->lat;
                $obj->lon = $row->lon;


                array_push($result, $obj);

            }
            return $result;
        }


    }

    public function get_waypoints_from_route($route, $dir)
    {
        /**
         * Returns the defined waypoints (flag=1) for a specific route and direction
         * Moreover in route waypoints, fetches origin(flag=2) and destination(flag=3)
         * so results are array('waypoints'(array), 'origin', 'destination')
         */
        $sql = "select CONCAT_WS(',',bus_stops.lat, bus_stops.lon) as point
                from bus_stops, line_stops, bus_lines
                where bus_stops.s_id=line_stops.stop_id  and line_stops.direction_flag = " . $dir . " and line_stops.line_id=bus_lines._id and bus_lines._id='" . $route . "' and line_stops.line_waypoint=1";


        $query_response = $this->db->query($sql);
        $result = $query_response->result();
        log_message('info', $this->db->last_query());

        if ($query_response->num_rows() < 1) {
            $data['waypoints'] = null;
        } else {
            $data['waypoints'] = $result;
            //return $data;
        }

        $sql_o = "select CONCAT_WS(',',bus_stops.lat, bus_stops.lon) as point
                from bus_stops, line_stops, bus_lines
                where bus_stops.s_id=line_stops.stop_id  and line_stops.direction_flag = " . $dir . " and line_stops.line_id=bus_lines._id and bus_lines._id='" . $route . "' and line_stops.line_waypoint=2";


        $query_response_o = $this->db->query($sql_o);
        $result_o = $query_response_o->result();
        log_message('info', $this->db->last_query());

        if ($query_response_o->num_rows() < 1) {
            $data['origin'] = null;
        } else {
            $data['origin'] = $result_o;
            // return $data;
        }


        $sql_d = "select CONCAT_WS(',',bus_stops.lat, bus_stops.lon) as point
                from bus_stops, line_stops, bus_lines
                where bus_stops.s_id=line_stops.stop_id  and line_stops.direction_flag = " . $dir . " and line_stops.line_id=bus_lines._id and bus_lines._id='" . $route . "' and line_stops.line_waypoint=3";


        $query_response_d = $this->db->query($sql_d);
        $result_d = $query_response_d->result();
        log_message('info', $this->db->last_query());

        if ($query_response_d->num_rows() < 1) {
            $data['destination'] = null;
        } else {
            $data['destination'] = $result_d;
            // return $data;
        }


        return $data;

    }

    public function get_bus_location($route, $dir)
    {
        $query = $this->db->get_where('user_locations', array('routeid' => $route, 'direction' => $dir));

        return $query->result();

    }



//This routine calculates the distance between two points (given the
//latitude/longitude of those points). It is being used to calculate
//the distance between two locations using GeoDataSource(TM) Products
//Definitions:
//South latitudes are negative, east longitudes are positive
//Passed to function:
//lat1, lon1 = Latitude and Longitude of point 1 (in decimal degrees)
//lat2, lon2 = Latitude and Longitude of point 2 (in decimal degrees)
//unit = the unit you desire for results
//where: 'M' is statute miles (default)
//'K' is kilometers
//'N' is nautical miles
    public function distance($lat1, $lon1, $lat2, $lon2){
        $unit = "K";
        $theta = $lon1 - $lon2;
        $dist = sin(deg2rad($lat1)) * sin(deg2rad($lat2)) + cos(deg2rad($lat1)) * cos(deg2rad($lat2)) * cos(deg2rad($theta));
        $dist = acos($dist);
        $dist = rad2deg($dist);
        $miles = $dist * 60 * 1.1515;
        $unit = strtoupper($unit);

        if ($unit == "K") {
            return ($miles * 1.609344);
        } else if ($unit == "N") {
            return ($miles * 0.8684);
        } else {
            return $miles;
        }
//        echo $miles;
//echo distance(32.9697, -96.80322, 29.46786, -98.53506, "M") . " Miles<br>";
//
//echo distance(32.9697, -96.80322, 29.46786, -98.53506, "K") . " Kilometers<br>";
//echo distance(32.9697, -96.80322, 29.46786, -98.53506, "N") . " Nautical Miles<br>";

    }


    function route_ratings($route,$dir){
        $this->db->select('route_id, direction');
        $this->db->select_avg('comfort');
        $this->db->select_avg('route_duration');
        $this->db->select_avg('arrival_time');
        $this->db->select_avg('driver_rating');

        $query=$this->db->get_where('user_ratings',array('route_id'=>$route, 'direction'=>$dir));


        if ($query->num_rows() < 1) {
            return false;
        } else {
            $this->db->select('comment');
            $query_comments=$this->db->get_where('user_ratings',array('route_id'=>$route, 'direction'=>$dir, 'comment !=' => ""));

            $result['ratings']=$query->result();
            $result['comments']=$query_comments->result();
            //return $query->result();
            return $result;

        }


    }

}