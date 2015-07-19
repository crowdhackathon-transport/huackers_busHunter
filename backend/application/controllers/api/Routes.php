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

class Routes extends REST_Controller
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


    function routes_get()
    {
        $routes = $this->routes_model->get_routes();
        if ($routes) {
            $this->response($routes, 200); // 200 being the HTTP response code
        } else {
            $this->response(array('error' => 'Routes could not be found'), 404);
        }

    }

    function routestops_get(){
        if (!$this->get('route') || !$this->get('dir')) {
            $message = array('success' => 'false');
            $this->response($message, 400);
        }

        $stops=$this->routes_model->get_stops_by_route($this->get('route'),$this->get('dir'));

        if ($stops) {
            $message = array('stops' => $stops, 'success' => 'true');
            $this->response($message, 200);
        }
    }

    function nearstops_get(){
        if (!$this->get('lat') || !$this->get('lon') ) {
            $message = array('success' => 'false');
            $this->response($message, 400);
        }

        if (!$this->get('dist')) {
            $dist='0.2';
        }
        else {
            $dist = $this->get('dist');
        }

        $stops=$this->routes_model->get_nearest_stops($this->get('lat'),$this->get('lon'),$dist);
        if ($stops) {
            $message = array('stops' => $stops, 'success' => 'true');
            $this->response($message, 200);
        }
    }

    function nearlines_get(){
        //@todo get tracked
        if (!$this->get('lat') || !$this->get('lon') ) {
            $message = array('success' => 'false');
            $this->response($message, 400);
        }

        if (!$this->get('dist')) {
            $dist='0.2';
        }
        else {
            $dist = $this->get('dist');
        }

        $stops=$this->routes_model->get_nearest_lines($this->get('lat'),$this->get('lon'),$dist);
        if ($stops) {
            $message = array('lines' => $stops, 'success' => 'true');
            $this->response($message, 200);
        }
    }

    function linesfromstop_get(){
        if (!$this->get('stop')) {
            $message = array('success' => 'false');
            $this->response($message, 400);
        }

        $lines=$this->routes_model->findbusfromstop($this->get('stop'));
        if ( $lines) {
            $message = array('lines' =>  $lines, 'success' => 'true');
            $this->response($message, 200);
        }
    }

    function timesforline_get(){
        if (!$this->get('line') || !$this->get('day') || !$this->get('dir')  ) {
            $message = array('success' => 'false');
            $this->response($message, 400);
        }

        $times=$this->routes_model->gettimes($this->get('line'),$this->get('dir'),$this->get('day'));
        if ($times) {
            $message = array('times' =>  $times, 'success' => 'true');
            $this->response($message, 200);
        }
    }

    /**
     * Gets origin, destination and waypoints from database. Calls google directions api with these params.
     * Checks if the points are stored in database and if not stores them for a specific route and direction.
     * Then returns these points to mobile.
     */
    function waypoints_get(){
        //@todo remove waypoints from line 1 which used as example
        if (!$this->get('route') || !$this->get('dir')  ) {
            $message = array('success' => 'false');
            $this->response($message, 400);
        }

        //get origin, destination and waypoints in order to call google directions api
        $waypoints=$this->routes_model->get_waypoints_from_route($this->get('route'),$this->get('dir'));
        //var_dump($waypoints);
        if ($waypoints['waypoints']) {//if waypoints found

            //implode lat,lon with "|" in order to send to google directions api
            $way = implode('|', array_map(function($a) {
                return $a->point;
            }, $waypoints['waypoints']));


            //var_dump($way);
            //check of waypoints exists in database
            $waypoints_db=$this->routes_model->check_route_waypoints($this->get('route'), $this->get('dir'));

            //var_dump($waypoints_db);
            if ($waypoints_db) {

                $points=$waypoints_db;

            }
            else {
                $d=directions_call($waypoints['origin']['0']->point, $waypoints['destination']['0']->point, $way,$this->get('route'),$this->get('dir'));
                //var_dump($d);
                $points=$this->routes_model->check_route_waypoints($this->get('route'), $this->get('dir'));
            }
            $message = array('points' =>  $points, 'success' => 'true');
            //$message = array('waypoints' =>  $waypoints['waypoints'], 'success' => 'true');
            $this->response($message, 200);
        }
        else { //if no waypoints defined
            $message = array('error' =>  "no waypoints defined for route and direction", 'success' => 'false');
            $this->response($message, 200);
        }
    }

    public function buslocation_get(){
        if (!$this->get('route') || !$this->get('dir')  ) {
            $message = array('success' => 'false');
            $this->response($message, 400);
        }
        $bus = $this->routes_model->get_bus_location($this->get('route'),$this->get('dir'));
        if ($bus) {
            $this->response($bus, 200); // 200 being the HTTP response code
        } else {
            $this->response(array('error' => 'Bus could not be found'), 404);
        }

    }

    public function check_poi_distance_get(){

        if (!$this->get('lat1') || !$this->get('lon1') || !$this->get('lat2') || !$this->get('lon2')  ) {
            $message = array('success' => 'false');
            $this->response($message, 400);
        }

        $poi_distance = $this->routes_model->distance($this->get('lat1'),$this->get('lon1'),$this->get('lat2'),$this->get('lon2'));
        if ($poi_distance) {
            if ($poi_distance < 1){
                $poi_distance = round($poi_distance * 1000);
                $message = array('distance' =>  $poi_distance . ' meters', 'success' => 'true');
                $this->response($message, 200);
            } else {
                $poi_distance = round($poi_distance, 2);
                $message = array('distance' =>  $poi_distance . 'Km', 'success' => 'true');
                $this->response($message, 200);
            }
        }
    }

    public function routerating_get(){
        if (!$this->get('route') || !$this->get('dir')  ) {
            $message = array('success' => 'false');
            $this->response($message, 400);
        }
        $ratings=$this->routes_model->route_ratings($this->get('route'),$this->get('dir'));
        if ($ratings) {
            $this->response($ratings, 200); // 200 being the HTTP response code
        } else {
            $this->response(array('error' => 'Ratings for this route could not be found'), 404);
        }
    }

}
