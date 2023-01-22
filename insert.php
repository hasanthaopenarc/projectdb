<?php
require_once 'db.php';

extract($_POST);

if(isset($_POST['fnamesend']) && isset($_POST['lnamesend']) && isset($_POST['emailsend'])){
	
	$sql="INSERT INTO contactlist(FirstName,LastName,Email,Mobile)
			VALUES ('$fnamesend','$lnamesend','$emailsend','$mobilesend')";

	$reuslt=mysqli_query($conn,$sql);
	
}

?>