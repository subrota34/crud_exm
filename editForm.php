<?php
	include "dbconnect.php";
	$id=$_GET['edit_id'];
	$sql="SELECT * FROM product where id='$id'";
	$result=$conn->query($sql);
	
	$arr=$result->fetch_assoc();
	
	$nam=$arr['name'];
	$des=$arr['description'];
	$pp=$arr['purchase_price'];
	$q=$arr['quantity'];
?>


<!DOCTYPE html>
<html lang="en">
<body>	
	<center>
		<h1>Edit Form</h1>
		<form method="POST" action="edit.php?d_id=<?php echo $id?>">
			<label>Name</label>
			<input type="text" value="<?php echo $nam ?>" name="f_name"> <br> <br>
			<label>description</label>
			<input type="text" value="<?php echo $des ?>" name="f_description"> <br> <br>
			<label>purchase_price</label>
			<input type="text"  value="<?php echo $pp ?>" name="f_purchase_price" > <br> <br>
			<label>quantity</label>
			<input type="text"  value="<?php echo $q ?>" name="f_quantity" > <br> <br>
			<input type="submit" value="update">
		</form>
	</center>	
	
</body>
