<?php if (!defined('BASEPATH')) {exit('No direct script access allowed');
}

//require(APPPATH'.libraries/REST_Controller.php');

class Googleplus extends CI_Model {

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
	 *
	 */

	public function index($town, $lat, $long, $categories)
	//public function index()
	{

		///inputs ////////
		//$lat=37.987216;
		//$long=23.763428;
		// $lat=null;
		// $long=null;
		//  $town="athens";
		//$town=null;
		//$categories=null;
		//   $categories=["Spiritual Monuments","Art"];
		//$categories=null;

		if (($long != null) && ($lat != null)) {
			return $this->get_latlong($lat, $long, $categories);
		} else if ($town != null) {
			return $this->get_town($town, $categories);
		}

	}

	///////////////////****** function pou dexetai san orisma sintetagmenes kai string topothesia px "museum" . ***********************/////////

	public function get_latlong($lat, $long, $categories) {

		$ar_category = null;
		if ($categories != null) {
			foreach ($categories as $category) {
				switch ($category) {

					case "Museum":
						$ar_category[] = "museum";
						break;
					case "Sightseeing":
						$ar_category[] = "zoo";
						break;
					case "Theaters":
						$ar_category[] = "movie_theater";
						break;
					case "Art":
						$ar_category[] = "art_gallery";
						break;
					case "Spiritual Monuments":
						$ar_category[] = "church|mosque";
						break;
					case "Education":
						$ar_category[] = "book_store|library";
						break;
					case "Entertainment":
						$ar_category[] = "amusement_park|aquarium|casino|night_club";
						break;
					case "Parks":
						$ar_category[] = "park";
						break;
					case "General":
						$ar_category[] = "airport|atm|bank|embassy|grocery_or_supermarket|gas_station|hospital|pharmacy|subway_station|taxi_stand|train_station";
						break;
				}
			}
			$category1 = implode("|", $ar_category);

		} else {
			$category1 = "airport|amusement_park|aquarium|art_gallery|park|atm|bank|bar|book_store|bus_station|casino|church|embassy|gas_station|grocery_or_supermarket|hospital|library|mosque|movie_theater|museum|night_club|park|pharmacy|subway_station|taxi_stand|train_station|travel_agency|zoo";
		}

		$data_array = array();

		$glg_link = "https://maps.googleapis.com/maps/api/place/nearbysearch/json?location=";
		$latlong = $lat . "," . $long;
		$radius = "radius=1000";
		$place_type = "types=" . $category1;
		$key = "key=AIzaSyCrK4Fhjr3PssBnKSEs82sgFrQI2S9X4VE";//server api key

		$final_url = $glg_link . $latlong . "&" . $radius . "&" . $place_type . "&" . $key;
		$response = file_get_contents($final_url);

		$jsonContent = json_decode($response, true);

		foreach ($jsonContent['results'] as $result) {
			$data_array[] = array('name' => $result['name'],
				'lat' => $result['geometry']['location']['lat'],
				'long' => $result['geometry']['location']['lng'],
				'address' => $result['vicinity'],
				'category' => $result['types'][0],
                'id' => $result['place_id'],
				'source' => "Google Plus",

			);
		}
		//echo '{"results":' . json_encode($data_array) . '}';
		return '{"results":' . json_encode($data_array) . '}';
	}

///////////////////////////************ function pou dexetai san orisma string , px "museum in athens**********************************/
	public function get_town($town, $categories) {

		$data_array1 = array();
		$ar_category = array();//=null

		if ($categories != null) {
			foreach ($categories as $category) {
				switch ($category) {
					case "Museum":
						$ar_category[] = "museum";
						break;
					case "Sightseeing":
						$ar_category[] = "zoo";
						break;
					case "Theaters":
						$ar_category[] = "movie_theater";
						break;
					case "Art":
						$ar_category[] = "art_gallery";
						break;
					case "Spiritual Monuments":
						$ar_category[] = "church mosque";
						break;
					case "Education":
						$ar_category[] = "book_store library";
						break;
					case "Entertainment":
						$ar_category[] = "amusement";
						break;
					case "Parks":
						$ar_category[] = "park";
						break;
					case "General":
						$ar_category[] = "transport";
						break;
				}
			}$category1 = implode(" ", $ar_category);
		} else {
			$category1 = "tourist info";
		}

		$query = ' " ' . $town . ' ' . $category1 . ' ' . ' " ';
		$query_utf = rawurlencode(utf8_encode($query));
		$glg_link = "https://maps.googleapis.com/maps/api/place/textsearch/json?query=";
		$key = "key=AIzaSyCrK4Fhjr3PssBnKSEs82sgFrQI2S9X4VE";
		$final_url1 = $glg_link . $query_utf . "&" . $key;
		//  echo $final_url1;
		$response1 = file_get_contents($final_url1);
		$jsonContent1 = json_decode($response1, true);
		foreach ($jsonContent1['results'] as $result) {
			$data_array1[] = array('name' => $result['name'],
				'lat' => $result['geometry']['location']['lat'],
				'lng' => $result['geometry']['location']['lng'],
				'address' => $result['formatted_address'],
				'category' => $result['types'][0],
                'id' => $result['place_id'],
				'source' => "Google Plus");
		}

		//echo '{"results":' .json_encode($data_array1).'}';
		return '{"results":' . json_encode($data_array1) . '}';
	}

	public function getUrlandDescription($placeid) {

		$final_url = "https://maps.googleapis.com/maps/api/place/details/json?placeid=" . $placeid . "&key=AIzaSyCoRWnFCMwoHfFdMG58tx55mQx_KYXwlwQ";

		$response = file_get_contents($final_url);
		$jsonContent = json_decode($response, true);

        $data['description']=isset($jsonContent['result']['name']) ? $jsonContent['result']['name'] : "";
        $data['url']=isset($jsonContent['result']['url']) ? $jsonContent['result']['url'] : "";

        return $data;

		//return '{"description":"", "url":"'.(isset($jsonContent['result']['url']) ? $jsonContent['result']['url'] : '').'"}';
	}

}
