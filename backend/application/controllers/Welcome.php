<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . '/libraries/GooglePlaces.php';

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{

        $apiKey       = 'AIzaSyAOsnoaf7e53dR9iqyOyWvxcnrAMF088as';
        $googlePlaces = new GooglePlaces($apiKey);

// Set the longitude and the latitude of the location you want to search near for places
        $latitude   = '37.9839170';
        $longitude = '23.7293600';
        $googlePlaces->setLocation($latitude . ',' . $longitude);
        $googlePlaces->setKeyword('Museum');

        $googlePlaces->setRadius(5000);

        $results = $googlePlaces->Search();

        var_dump($results);



		//$this->load->view('welcome_message');
	}
    public function directions(){
        $origin='37.952955,23.711262';
        $destination='37.982998,23.729629';
        $waypoints='37.972410,23.734565|37.962362,23.724265';

        $waypoints=$this->routes_model->get_waypoints_from_route("021","1");

        var_dump($waypoints);
        //directions_call($origin,$destination,$waypoints);
    }

    public function  wps10()
    {
        $this->load->model('waypoints_model');
        $this->waypoints_model->set_waypoints_10();
    }

    public function wpsa10() {
        $this->load->model('waypoints_model');
        $this->waypoints_model->wp_10to20();
    }

    public function wpsb10() {
        $this->load->model('waypoints_model');
        $this->waypoints_model->wp_upto10();
    }

}
