<?

//setup db connection
$link=mysql_connect("83.212.116.102:3306","root","mysqladmin");


mysql_select_db("soul");
mysql_query("SET NAMES 'utf8';", $link);
//executes a given sql query with the params and returns an array as result
function query() {
  global $link;
  $debug = false;
  
  //get the sql query
  $args = func_get_args();
  $sql = array_shift($args);

  //secure the input
  for ($i=0;$i<count($args);$i++) {
    $args[$i] = urldecode($args[$i]);
    //$args[$i] = mysql_real_escape_string($link, $args[$i]);
                $args[$i] = mysql_real_escape_string($args[$i] , $link);
  }
  
  //build the final query
  $sql = vsprintf($sql, $args);
  
  if ($debug) print $sql;
  
  //execute and fetch the results
  //$result = mysql_query($link, $sql);
        $result = mysql_query($sql, $link);
  if (mysql_errno($link)==0 && $result) {
    
    $rows = array();

    if ($result!==true)
    while ($d = mysql_fetch_assoc($result)) {
      array_push($rows,$d);
    }
    
    //return json
    return array('result'=>$rows);
    
  } else {
  
    //error
    return array('error'=>'Database error');
  }
}

?>
