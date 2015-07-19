<?php

if (!defined('BASEPATH')) {
	exit('No direct script access allowed');
}

class Foursquaremodel extends CI_Model {

	//map for REST to foursquare categories' ids
	private $foursquareCategories = array("Museum" => array("Museum" => "4bf58dd8d48988d181941735"),
		"Sightseeing" => array("Historic Site" => "4deefb944765f83613cdba6e", "Monument / Landmark" => "4bf58dd8d48988d12d941735"),
		"Theaters" => array("Theater" => "4bf58dd8d48988d137941735", "Opera House" => "4bf58dd8d48988d136941735"),
		"Art" => array("Art Gallery" => "4bf58dd8d48988d1e2931735", "Concert Hall" => "5032792091d4c4b30a586d5c", "Outdoor Sculpture" => "52e81612bcbc57f1066b79ed", "Public Art" => "507c8c4091d498d9fc8c67a9"),
		"Spiritual Monuments" => array("Spiritual Center" => "4bf58dd8d48988d131941735"),
		"Education" => array("Cultural Center" => "52e81612bcbc57f1066b7a32", "Library" => "4bf58dd8d48988d12f941735"),
		"Enterrtainment" => array("Aquarium" => "4fceea171983d5d06c3e9823", "General Entertainment" => "4bf58dd8d48988d1f1931735"),
		"Parks" => array("National Park" => "52e81612bcbc57f1066b7a21"),
		"General" => array("Bus Station" => "4bf58dd8d48988d1fe931735", "Subway" => "4bf58dd8d48988d1fd931735"));

	private $constructorParams = array("client_id" => "P2ZXCLYA23YUGKUDQN15Q3RCU1SJDONYAPSZ0RVUGXDDPNXK",
			"client_secret" => "XZMBGVHELDAFS20DBRTEKDKUNLSTYX52TOB0YQ1GACI4EI1L");

	// gets the results from foursquare API and returns them as an object to use
	private function get_results_obj($params) {
		$response = $this->foursquareapi->GetPublic("venues/search", $params);
		return json_decode($response);
	}

	// maps the given categories to their ids and returns a string with them separated with commas
	private function categoryToId($categories) {
		// return all categories
		$ids = '';
		if ($categories == NULL) {
			foreach ($this->foursquareCategories as $subcategory) {
				foreach ($subcategory as $id) {
					$ids .= $id . ",";
				}
			}
		} else {
			// select a few
			foreach ($categories as $category) {
				if (isset($this->foursquareCategories["$category"])) {
					foreach ($this->foursquareCategories["$category"] as $id) {
						$ids .= $id . ",";
					}
				}
			}
		}
		$ids[strlen($ids) - 1] = "\0";// get rid of the last comma
		return $ids;
	}

	//returns an assosiative array with extra info about a venue
	public function get_extra_info($venue_id) {
		$this->load->library('Foursquareapi', $this->constructorParams);// use the php library to get data from foursquare
		$extra = json_decode($this->foursquareapi->GetPublic("venues/" . $venue_id));

        $data['description']=isset($extra->response->venue->description) ? $extra->response->venue->description : '';
        $data['url']=isset($extra->response->venue->shortUrl) ? $extra->response->venue->shortUrl : '';

		return $data;
        //return '{"description":"'.(isset($extra->response->venue->description) ? $extra->response->venue->description : '').'", "url":"'.(isset($extra->response->venue->shortUrl) ? $extra->response->venue->shortUrl : '').'"} ';
	}

	public function foursquare($town = "Athens", $lat = NULL, $long = NULL, $categories = NULL) {

		$this->load->library('Foursquareapi', $this->constructorParams);// use the php library to get data from foursquare

		if (!empty($lat) && !empty($long)) {
			$place = array("ll" => "$lat,$long");// search by geodata
		} else {
			$place = array("near" => "$town");// search by town name
		}
		$categoryIds = $this->categoryToId($categories);
		$params = array_merge($place, array("categoryId" => $categoryIds), array("radius" => 1000));
		$places = $this->get_results_obj($params);

		//format the returned json string
		$finaljson = '{"results":';
		$final_array = array();
		foreach ($places->response->venues as $place) {
			$final_array[] = array("name" => isset($place->name) ? $place->name : "",
				"lat" => isset($place->location->lat) ? $place->location->lat : "",
				"long" => isset($place->location->lng) ? $place->location->lng : "",
				"address" => (isset($place->location->formattedAddress[0]) ? $place->location->formattedAddress[0] : "") . (isset($place->location->formattedAddress[1]) ? ", " . $place->location->formattedAddress[1] : ""),
				"category" => isset($place->categories[0]->name) ? $place->categories[0]->name : "",
				"id" => isset($place->id) ? $place->id : "",
				"source" => "Foursquare");
		}
		$finaljson .= json_encode($final_array) . '}';
		return $finaljson;
	}

}
