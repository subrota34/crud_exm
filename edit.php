<?php
	include "dbconnect.php";
	
	$id=$_GET['d_id'];
	
	$nam=$_POST['f_name'];
	$des=$_POST['f_description'];
	$pp=$_POST['f_purchase_price'];
	$q=$_POST['f_quantity'];
	
	$sql="UPDATE product SET name='$nam', description='$des' ,
	purchase_price='$pp', quantity='$q' where id='$id'";
	
	if($conn->query($sql)){
		
		header('location:index.php');

		//echo "updated succesfully";
		}
	else 
	echo "update failed";

	$conn->close();
?>