<?php

$user = 'root';
$password = ''; 
$database = ''; 
$port = NULL; 
$mysqli = new mysqli('127.0.0.1', $user, $password, $database, $port);

if ($mysqli->connect_error) {
    die('Connect Error (' . $mysqli->connect_errno . ') '
            . $mysqli->connect_error);
}
echo '<p>Connection OK '. $mysqli->host_info.'</p>';
echo '<p>Server '.$mysqli->server_info.'</p>';
echo '<p>Initial charset: '.$mysqli->character_set_name().'</p>';
$dbname='Portfolio1';
$sql="create database ".$dbname;
if($mysqli->query($sql)==TRUE){
	echo $dbname." created successfully";
}
else{
	echo "Error".$mysqli->error;
}
$connCheck=mysqli_select_db($mysqli, $dbname);
$sql="create table home(email varchar(30) not null, fname varchar(30) not null, lname varchar(30) not null,userid varchar(30) not null, password varchar(30) not null)";
if($mysqli->query($sql)==TRUE){
	echo "Table created successfully";
}
else{
	echo "Error".$mysqli->error;
}

$mysqli->close();
?>
