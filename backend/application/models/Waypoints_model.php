<?php defined('BASEPATH') OR exit('No direct script access allowed');


class Waypoints_model extends CI_Model
{

public function __construct()
{
    // Call the CI_Model constructor
    parent::__construct();
}

public function set_waypoints_10()
{

    $sql1 = "select line_id, direction_flag, count(stop_id) as c, count(stop_id) DIV 8  from line_stops group by line_id,direction_flag having c<=10";

    $query1 = $this->db->query($sql1);
    foreach ($query1->result() as $row) {
        $line = $row->line_id;
        $dir = $row->direction_flag;
        echo 'line = ' . $line . ' direction  = ' . $dir . '<br/>';
        $sql2 = "select bus_stops.s_id, bus_stops.name_el, bus_stops.name_en, bus_stops.lat, bus_stops.lon, line_stops.direction_flag, waypoint
                  from bus_stops, line_stops, bus_lines
                  where bus_stops.s_id=line_stops.stop_id
                  and line_stops.direction_flag = " . $dir . "
                  and line_stops.line_id=bus_lines._id
                  and bus_lines._id='" . $line . "'
                  and waypoint=1";


        $query2 = $this->db->query($sql2);
        log_message('info', $this->db->last_query());
        foreach ($query2->result() as $row) {
            //var_dump($row);
            $stop = $row->s_id;
            $wp = $row->waypoint;
            echo 'line = ' . $line . ' direction  = ' . $dir . ' stop_id ' . $stop . ' waypoint ' . $wp . '<br/>';
            $sql3 = "update bus_stops set waypoint=1 where s_id=" . $stop;
            // $query3 = $this->db->query($sql3);

        }

    }


}


public function wp_upto10()
{
    $sql1 = "select line_id, direction_flag, count(stop_id) as c, count(stop_id) DIV 8  from line_stops group by line_id,direction_flag having c<=10";
    $query1 = $this->db->query($sql1);

    foreach ($query1->result() as $row) {
        $line = $row->line_id;
        $dir = $row->direction_flag;
        echo 'line = ' . $line . ' direction  = ' . $dir . '<br/>';
        $sql4 = "select line_id, line_waypoint, stop_id
                  from line_stops
                  where direction_flag = " . $dir . "
                  and line_id='" . $line . "'
                  and line_waypoint=1";

        $query4 = $this->db->query($sql4);
        $numOfStopsWithWp1 = $query4->num_rows();

        $sql2 = "select line_id, line_waypoint, stop_id
                  from line_stops
                  where direction_flag = " . $dir . "
                  and line_id='" . $line . "'
                  and line_waypoint=0";


        $query2 = $this->db->query($sql2);
        $counter = 0;
        $wp_counter = $numOfStopsWithWp1;
        if ($wp_counter > 8) {
            echo 'line = ' . $line . ' direction  = ' . $dir . '<br/>';
            echo $wp_counter . '<br>';
        }
        echo $query2->num_rows() . "<br>";

        $numOfStops = $query2->num_rows();
        $wp_step = round($numOfStops / 8);
        echo $wp_step . '<br>';
        foreach ($query2->result() as $row) {
//                $x = (count($query2->result()) / 8); $x < count($query2->result()); $x+=(count($query2->result()) / 8)
            $counter++;
            $stop = $row->stop_id;
            echo 'stop_id = ' . $stop . '<br>';
//                $bus_stop_id=$row->s_id;
            if ($counter == $wp_step AND $wp_counter < 8) {// AND $row->line_id == "021"
//                    $stop=$row->s_id;
                $wp = $row->line_waypoint;
                echo 'updated line = ' . $line . ' direction  = ' . $dir . ' stop_id ' . $stop . ' waypoint ' . $wp . '<br/>';
                $sql3 = "update line_stops set line_waypoint=1 where stop_id='" . $stop . "' AND line_id ='" . $line . "' AND direction_flag =" . $dir;
//                    $sql3="update bus_stops set waypoint=1 where s_id=" .$stop;
                $query3 = $this->db->query($sql3);
                $wp_counter++;
                $counter = 0;
            }
        }


    }
}

public function wp_10to20()
{

    $sql1 = "select line_id, direction_flag, count(stop_id) as c, count(stop_id) DIV 8  from line_stops group by line_id,direction_flag having c>10";

    $query1 = $this->db->query($sql1);

    $numOfRes = $query1->num_rows();
//        echo $numOfRes." lines found<br>";

    foreach ($query1->result() as $row) {
        $line = $row->line_id;
        $dir = $row->direction_flag;
        echo 'line = ' . $line . ' direction  = ' . $dir . '<br/>';
        $sql4 = "select line_id, line_waypoint, stop_id
                  from line_stops
                  where direction_flag = " . $dir . "
                  and line_id='" . $line . "'
                  and line_waypoint=1";
//            $sql4="select bus_stops.s_id, bus_stops.name_el, bus_stops.name_en, bus_stops.lat, bus_stops.lon, line_stops.direction_flag, waypoint
//                  from bus_stops, line_stops, bus_lines
//                  where bus_stops.s_id=line_stops.stop_id
//                  and line_stops.direction_flag = ". $dir. "
//                  and line_stops.line_id=bus_lines._id
//                  and bus_lines._id='" . $line . "'
//                  and waypoint=1";
        $query4 = $this->db->query($sql4);
        $numOfStopsWithWp1 = $query4->num_rows();

        $sql2 = "select line_id, line_waypoint, stop_id
                  from line_stops
                  where direction_flag = " . $dir . "
                  and line_id='" . $line . "'
                  and line_waypoint=0";
//            $sql2="select bus_stops.s_id, bus_stops.name_el, bus_stops.name_en, bus_stops.lat, bus_stops.lon, line_stops.direction_flag, waypoint
//                  from bus_stops, line_stops, bus_lines
//                  where bus_stops.s_id=line_stops.stop_id
//                  and line_stops.direction_flag = ". $dir. "
//                  and line_stops.line_id=bus_lines._id
//                  and bus_lines._id='" . $line . "'
//                  and waypoint=0";


        $query2 = $this->db->query($sql2);
//            log_message('info', $this->db->last_query());
        $counter = 0;
        $wp_counter = $numOfStopsWithWp1;
        if ($wp_counter > 8) {
            echo 'line = ' . $line . ' direction  = ' . $dir . '<br/>';
            echo $wp_counter . '<br>';
        }
        echo $query2->num_rows() . "<br>";

        $numOfStops = $query2->num_rows();
        $wp_step = round($numOfStops / 8);
        echo $wp_step . '<br>';
        foreach ($query2->result() as $row) {
//                $x = (count($query2->result()) / 8); $x < count($query2->result()); $x+=(count($query2->result()) / 8)
            $counter++;
            $stop = $row->stop_id;
            echo 'stop_id = ' . $stop . '<br>';
//                $bus_stop_id=$row->s_id;
            if ($counter == $wp_step AND $wp_counter < 8) {// AND $row->line_id == "021"
//                    $stop=$row->s_id;
                $wp = $row->line_waypoint;
                echo 'updated line = ' . $line . ' direction  = ' . $dir . ' stop_id ' . $stop . ' waypoint ' . $wp . '<br/>';
                $sql3 = "update line_stops set line_waypoint=1 where stop_id='" . $stop . "' AND line_id ='" . $line . "' AND direction_flag =" . $dir;
//                    $sql3="update bus_stops set waypoint=1 where s_id=" .$stop;
                $query3 = $this->db->query($sql3);
                $wp_counter++;
                $counter = 0;
            }
        }

    }
}



}