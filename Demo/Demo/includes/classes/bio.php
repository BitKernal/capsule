<?php 
		include 'header.php';

	if(isset($_SESSION['username'])) {
		$userData = getUserData(getId($_SESSION['username']));

 ?>

 <div id="menu">
 	<a href="logout.php">Logout</a>
 </div>
<?php  echo $userData['firstname']; ?>
 {Last Name's} Profile
 
 <div id="wrapper4">
 	<div id="profilePicture">
 		Profile Picture Here
 	</div>

 	<div id="About Me">
 		About Me Here
 	</div>

 	<div id="next">
 		Age, etc...
 	</div>
 <?php } ?>
 </div>