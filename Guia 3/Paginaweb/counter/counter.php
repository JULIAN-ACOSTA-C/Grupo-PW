<?php 
$ip=$_SERVER['REMOTE_ADDR'];
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "visitors_db";

if(!$count_db = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname))
{

	die("failed to connect!");
}

$query="insert into visitors(ip) values ('$ip')";
mysqli_query($count_db,$query);
//counting ip
$q="select * from visitors";
$f=mysqli_query($count_db,$q);
$count=mysqli_num_rows($f);

?>