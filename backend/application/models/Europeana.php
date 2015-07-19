<?php defined('BASEPATH') or exit('No direct script access allowed');

class Europeana extends CI_Model {
    
    public function api($town, $lat, $long, $categories){
        if ($categories != NULL) { 
            $finaljson = '{"results":';
            $final_array = array();
            $finaljson .= json_encode($final_array).'}';
            return $finaljson;
        } else if ($lat == NULL || $long == NULL) {
            $info = file_get_contents('http://europeana.eu/api/v2/search.json?wskey=qaVVXQUY6&query='.$town.'&profile=minimal');
            $decoded_info = json_decode($info);
            $items = $decoded_info->items;
            $finaljson = '{"results":';
            $final_array = array();
            foreach($items as $item) { 
                if (isset($item->edmPlaceLatitude) && isset($item->edmPlaceLongitude)) {
                    $final_array[] = array("name" => isset($item->title) ? $item->title : '',
                                           "lat" => isset($item->edmPlaceLatitude) ? $item->edmPlaceLatitude : '', 
                                           "long" => isset($item->edmPlaceLongitude) ? $item->edmPlaceLongitude : '',
                                           "address" => isset($item->edmIsShownAt) ? $item->edmIsShownAt : '',
                                           "category" => '',
                                           "source" => "Europeana");
                }
            }
            $finaljson .= json_encode($final_array).'}';
            return $finaljson;
        } else {
            $rlat = round($lat);
            $rlong = round($long);
            $info = file_get_contents('http://europeana.eu/api/v2/search.json?wskey=qaVVXQUY6&query=pl_wgs84_pos_lat:['.$rlat.'+TO+'.($rlat+0.01).']+AND+pl_wgs84_pos_long:['.$rlong.'+TO+'.($rlong+0.01).'].&profile=minimal');
            $decoded_info = json_decode($info);
            $items = $decoded_info->items;
            $finaljson = '{"results":';
            $final_array = array();
            foreach($items as $item) { 
                if (isset($item->edmPlaceLatitude) && isset($item->edmPlaceLongitude)) {
                    $final_array[] = array("name" => isset($item->title) ? $item->title : '',
                                           "lat" => isset($item->edmPlaceLatitude) ? $item->edmPlaceLatitude : '', 
                                           "long" => isset($item->edmPlaceLongitude) ? $item->edmPlaceLongitude : '',
                                           "address" => isset($item->edmIsShownAt) ? $item->edmIsShownAt : '',
                                           "category" => '',
                                           "source" => "Europeana");
                }
            }
            $finaljson .= json_encode($final_array).'}';
            return $finaljson;
        }
    }
    
    
    
}