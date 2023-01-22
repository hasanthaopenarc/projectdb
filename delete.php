<?php
require_once 'db.php';

if(isset($_POST['deletesend'])){
	
	$id=$_POST['deletesend'];
	
	$sql="DELETE FROM contactlist WHERE Id='$id'";
	$result=mysqli_query($conn,$sql);
}

?>