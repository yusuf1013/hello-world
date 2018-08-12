<?php 
include "Database.php";
?>
<?php
//let creat the query celecteur
$query="SELECT *FROM shout";
$result=mysqli_query($con,$query)
?>
<!doctype html>
<html>
<head>
<tiltle></tiltle>
 <!--Import Google Icon Font-->
 <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
         <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-rc.2/css/materialize.min.css">

      <!--Let browser know website is optimized for mobile-->
     

<link rel="stylesheet" href="style.css" type="text/css"/>
</head>
<body>
<?php include '..\quo\nav.php';?>
<div id="container" class='container'>
<header>
<h1>chatbox</h1>
</header>

<div id="shouts">
<ul>
<?php while($row=mysqli_fetch_assoc($result)):?>
<li class="shout"><span><?php echo $row["Time"] ?>-</span> <strong><?php echo $row["user"]; ?> </strong>:<?php echo $row["Message"] ?></li>
<?php endwhile; ?>
</ul>
</div>
<div id=input>
 
 <?php if(isset($_GET['error'])): ?>

  <div id="erro"> <?php echo $_GET['error']; ?> </div>
   <?php endif;?>

<form method="post" action="process.php">
<input type="text" name="user" placeholder="Enter your Name">
<input type="text"  name="message" placeholder="Enter a message"><br>
<input type="submit" class="shout-btn" name="submit" value= shout it>
</div>
</div>
<?php include '..\quo\footer.php';?>
</body>
</html>
