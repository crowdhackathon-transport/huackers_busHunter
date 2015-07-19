<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * CAUTION: there are lines where the last stop is not called "ΤΕΡΜΑ" so you should manually set this stop waypoint = 3
 */
if ( ! function_exists('directions_call')) {
    require_once 'Polyline.php';
    function directions_call($origin,$dest, $waypoints,$route, $dir)
    {
        $url = "https://maps.googleapis.com/maps/api/directions/json?origin=".$origin."&destination=".$dest."&sensor=false&waypoints=".$waypoints;
        echo $url;

        // Will dump a beauty json :3
        $result = json_decode(file_get_contents($url));
        //var_dump($result);

        foreach($result->routes as $myroutes)
        {
            $CI =& get_instance();
            //var_dump($myroutes);
            //var_dump ($myroutes->overview_polyline);
            $str =  $myroutes->overview_polyline->points;
            //echo $str;
            $points = Polyline::Decode($str);
            $data=Polyline::Pair($points);
            //var_export($points);
            //var_dump($data);
            $CI->routes_model->save_points_from_google($route,$dir,$data);
            return $data;

            //save points to database


        }
    }
}
