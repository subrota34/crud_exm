
<?php
include "dbconnect.php";

$name=$_POST['f_name'];
$description=$_POST['f_description'];
$purchase_price=$_POST['f_purchase_price'];
$quantity=$_POST['f_quantity'];

$sql = "INSERT INTO product (id, name,description,purchase_price,quantity) 
		VALUES (NULL, '$name', '$description', '$purchase_price','$quantity')";

		
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

