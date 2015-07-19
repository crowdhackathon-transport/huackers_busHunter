<html>
<head>
	<title> Json Creator for SMARTT </title>
</head>
<body>
<center> 

<?php
// String to decode

if(isset($_GET['route']) && isset($_GET['str']))
{

	require_once 'Polyline.php';
	require("lib.php");

	$str    = $_GET['str'];
	$route    = $_GET['route'];

	$sql="SELECT * FROM mart.calculatedistance WHERE routename = '$route'";

	$result=mysql_query($sql);
	if(mysql_num_rows($result)!=0)
	{
	  echo "BUS STOPS ".$route." ALREADY EXIST IN DATABASE";
	}
	else
	{

		$points = Polyline::Decode($str);
		var_export($points);
		$counter = 0;

		foreach ($points as $arr) {


			    if ($counter % 2 == 0 ) // zugos arithmos 
				{
				$lat = $arr;
				//echo  "<br> Zugos : ".$counter." -> ".$arr;
				}
				else 
				{
					$lon = $arr;
					//echo  "<br> Monos : ".$counter." -> ".$arr;
					echo "<br> route: ".$route." lat: ".$lat." and lon: ".$lon;
					$sql="INSERT INTO mart.calculatedistance VALUES('$route', '$lat', '$lon')";
					$result=mysql_query($sql);
					
				}
				$counter++;
		}
		echo "BUS STOPS INSERTED IN DATABASE";

	}
		
}
else
	echo "NO ROUTE OR STRING";
?>

</center> 
</body>
</html>
