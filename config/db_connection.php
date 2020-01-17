<?php


//Database credentails
define('DB_HOST', 'localhost');
define('DB_NAME', 'listing');
define('DB_USERNAME','root');
define('DB_PASSWORD','');


$con = mysqli_connect(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_NAME);
if( mysqli_connect_error()) echo "Failed to connect to MySQL: " . mysqli_connect_error();


function getlists(){
	global $con;
	$data = [];
	$query = "SELECT * FROM lists limit 20";
	if ( $result = mysqli_query($con, $query) ){
		while($row = mysqli_fetch_assoc($result)) {
			array_push($data, $row);
		}
	} 
	return $data;
}
