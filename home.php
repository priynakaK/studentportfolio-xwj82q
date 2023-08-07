
<form action="#" method="post">
	<label for="lname">Email Id:</label><br>
  <input type="text" id="emailid" name="emailid" value=""><br><br>
  <label for="fname">First name:</label><br>
  <input type="text" id="fname" name="fname" value="John"><br>
  <label for="lname">Last name:</label><br>
  <input type="text" id="lname" name="lname" value="Doe"><br><br>
  <label for="lname">User Id:</label><br>
  <input type="text" id="userid" name="userid" value=""><br><br>
  <label for="lname">Password:</label><br>
  <input type="password" id="password" name="password" value=""><br><br>
  Uplaod your photo<input type="file"><br>
  Introduce yourself<textarea type="textarea" name="intro" id="intro"/></textarea><br>
  Uplaod your resume<input type="file"><br>
  Enter your skills with profeciency
  skill1<input type="text" id="sk1" name="sk1"><br>
  Profeciency<input type="number" max="100" min="0" id="prof1" name="prof1"><br>
  skill1<input type="text" id="sk2" name="sk2"><br>
  Profeciency<input type="number" max="100" min="0" id="prof2" name="prof2"><br>
  skill1<input type="text" id="sk3" name="sk3"><br>
  Profeciency<input type="number" max="100" min="0" id="prof3" name="prof3"><br>
  skill1<input type="text" id="sk4" name="sk4"><br>
  Profeciency<input type="number" max="100" min="0" id="prof4" name="prof4"><br>
  skill1<input type="text" id="sk5" name="sk5"><br>
  Profeciency<input type="number" max="100" min="0" id="prof5" name="prof5"><br>
  skill1<input type="text" id="sk6" name="sk6"><br>
  Profeciency<input type="number" max="100" min="0" id="prof6" name="prof6"><br>
  <input type="submit" value="Submit">
</form>
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
<script>
$email=document.getElementById('emailid').value;
$fname=$_post['fname'];
$lname=$_post['lname'];
$userid=$_post['userid'];
$password=$_post['password'];
</script>
echo $email, $fname, $lname, $userid, $password;
$mysqli->close();
?>

