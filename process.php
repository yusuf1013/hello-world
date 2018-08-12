<?php 
include "Database.php";
?>
<?php
//check if form have been submit
if(isset($_POST["submit"])){
	$user1=mysqli_real_escape_string($con,$_POST["user"]);
	$message1=mysqli_real_escape_string($con,$_POST["message"]);
    $user=ucfirst ($user1);
    $message=ucfirst($message1);
//set timezone
date_default_timezone_set("Turkey"/"Ankara");
$time=date("h",time());

//valide input
if(!isset($user)|| $user=="" || !isset($message) || $message==""){

	header('location:first.php?error='.urlencode("please fill full the file"));
              exit();}
else{
$query="INSERT INTO shout(user,Message,Time) VALUES ('$user','$message','$time')";
// check if it have been insert into query
if(!mysqli_query($con,$query)){
die("error: " .mysqli_error($con));}
else{
   
	header('location:first.php');
	exit();
	}
}
}?>