
<?php
include "dbconnect.php";

$name=$_POST['f_name'];
$phone=$_POST['f_phone'];
$email=$_POST['f_email'];


$sql = "INSERT INTO user (id, name,phone,email) 
		VALUES (NULL, '$name', '$phone', '$email')";

		
		if($conn->query($sql))
		{
			header('location:index.php');
			//echo "data inserted successfully";
			
		}
		else
		{
			echo "insertion failed";
		}
		
		
		$conn->close();
?>

