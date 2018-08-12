<?php
//creted the connection to the database
$con= mysqli_connect("localhost","root","12345","shoutit");
// text the conction
if(mysqli_connect_errno()){
	echo"failed connection" .mysqli_connect_error();
} 



?>