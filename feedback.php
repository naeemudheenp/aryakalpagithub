<?php

//connecting to the database
$db="";
$user_name="";
$password="";
$server="localhost";
$db_info = mysql_connect($server,$user_name,$password,$db);
$db_test=mysql_select_db($db,$db_info);
if(!$db_test){
	die("Could not connect".mysql_error());
}

//checking inputted data
if(!isset($_GET['mobile'])){
	die("Please enter mobile number.");
}

//put inputed values to database

$phone=0;
$name=$_GET['username'];
$phone=$_GET['mobile'];
$email=$_GET['email'];

if($phone==0){
	die("Please enter mobile number.");
}
//inputing data to sql

$sql="INSERT INTO feedback(name,phone,email) VALUES('".$name."','".$phone."','".$email."')";
$sqlsync=mysql_query($sql,$db_info);
if(!$sqlsync){
	die("Unable to send message. please try again.".mysql_error());


}
else{
	die("Message sent. we will contact soon.");
}




 ?>
