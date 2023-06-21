<?php
	session_start();
	include "dbconnect.php";
	
	if(!isset($_SESSION['email'])){
		header('location:login.php');
		exit;
		}
	
	$s="SELECT * FROM product";
	$result=$conn->query($s);
	
	//echo "<h1>adhhd</h1>";
	/*
	while($r = $result->fetch_assoc())
	{
		$name=$r['name'];
		echo $name;
		echo "ajgdsdjk";
	}
	*/
	//echo $r['email'];
	//echo gettype($r);
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<style>
		table, td, th{
			border-collapse:collapse;
			border:2px solid black;
		}
		table{
			width:80%;
			margin: 0 auto;
		}
		td, th{
			padding:15px;
			text-align:center;
		}
		
	</style>
</head>
<body>	
		<h2 style="text-align:right;">Welcome <?php echo $_SESSION['name'];?></h2>
		<h4 style="text-align:right;"><a href='logout.php'>Logout </a></h2>
		<center>
			
			<h1> product List</h1>
			<table>
				<tr>
					<th>ID</th>
					<th>Name</th>
					<th>description</th>
					<th>Purchase-price</th>
					<th>quantity</th>
					<th>EDIT</th>
					<th>Delete</th>
				</tr>
				<?php
				//$i=1;
				while($r = $result->fetch_assoc())
				{
					$idd=$r['id'];
					$nam=$r['name'];
					$des=$r['description'];
					$pp=$r['purchase_price'];
					$q=$r['quantity'];
					echo "<tr>";
						echo "<td>". $idd . "</td>";
						echo "<td>". $nam . "</td>";
						echo "<td>". $des . "</td>";
						echo "<td>". $pp . "</td>";
						echo "<td>". $q . "</td>";
						echo "<td> <a href='editForm.php?edit_id=$idd'>Edit</a></td>";
						echo "<td> <a href='delete.php?del_id=$idd'>Delete</a></td>";
					echo "</tr>";
				}
				?>
				
				<tr>
					<td colspan="5"><a href="insertForm.php">Insert Record</a></td>
				</tr>
			</table>
		</center>
	
</body>
</html>




