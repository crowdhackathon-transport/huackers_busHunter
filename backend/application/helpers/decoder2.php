<? ob_start(); ?>

<html>
<head>
	<title> Json Creator for SMARTT </title>
</head>
<body>
<center> 

Choose bus destination:

<form name="myform" method="get">
  <select name='route' onclick="if(this.value != ''){ myform.submit(); }">

	<?php
	$username = "root";
	$password = "mysqladmin";
	$hostname = "localhost"; 

	//connection to the database
	$dbhandle = mysql_connect($hostname, $username, $password) 
	  or die("Unable to connect to MySQL");
	echo "Connected to MySQL<br>";


	$sql = 'SELECT DISTINCT route_short_name
	        FROM Final_routes';

	mysql_select_db('mart');
	$retval = mysql_query( $sql, $dbhandle );
	if(! $retval )
	{
	  die('Could not get data: ' . mysql_error());
	}
	while($row = mysql_fetch_array($retval, MYSQL_ASSOC))
	{
	    //echo "Route:{$row['route_short_name']}  <br> ".
	         //"--------------------------------<br>";

		echo "<option value='" . $row['route_short_name'] . "'>" . $row['route_short_name'] . "</option>";
	} 
	echo "Fetched data successfully\n";
	mysql_close($dbhandle);
	?>

	</select>
</form>


<br> <br>
<?php 

 if(isset($_GET['route'])){

 	$route = $_GET['route'];
    $username = "root";
	$password = "mysqladmin";
	$hostname = "localhost"; 

	//connection to the database
	$dbhandle = mysql_connect($hostname, $username, $password) 
	  or die("Unable to connect to MySQL");
	//echo "Connected to MySQL<br>";


	$sql = 'SELECT * FROM Final_routes WHERE route_short_name = "'.$_GET['route'].'"';
	$origin = "";
	$dest = "";
	$waypoints = "";

	mysql_select_db('mart');
	$retval = mysql_query( $sql, $dbhandle );
	if(! $retval )
	{
	  die('Could not get data: ' . mysql_error());
	}
	echo " JSON URI <br>";
	while($row = mysql_fetch_array($retval, MYSQL_ASSOC))
	{
		if ($row['waypoint'] == 1)
			$origin = $row['stop_lat'].','.$row['stop_lon'];
		else if ($row['waypoint'] == 2)
			$dest = $row['stop_lat'].','.$row['stop_lon'];
		else if ($row['waypoint'] == 3)
			$waypoints = $waypoints.$row['stop_lat'].','.$row['stop_lon']."|";


	} 

	$url = "https://maps.googleapis.com/maps/api/directions/json?origin=".$origin."&destination=".$dest."&sensor=false&waypoints=".$waypoints;
    echo $url;

    // Will dump a beauty json :3
    $result = json_decode(file_get_contents($url));
    //var_dump($result);

	foreach($result->routes as $myroutes)
	{
		echo "<br> <br>  Overview polyline <br> </br>";
		 //var_dump($myroutes);
         //var_dump ($myroutes->overview_polyline);
         $str =  $myroutes->overview_polyline->points;
         echo $str;
         header('http://83.212.116.102/tracker/decoder.php' );

    }  


	//found "Fetched data successfully\n";
	mysql_close($dbhandle);
 }

?>


</center> 
</body>
</html>
