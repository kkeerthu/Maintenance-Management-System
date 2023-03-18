<!DOCTYPE html>
<html>

<head>
	<title>Insert Page page</title>
</head>

<body>
	<center>
		<?php

		// servername => localhost
		// username => root
		// password => empty
		// database name => complaint
		$conn = mysqli_connect("localhost", "root", "", "demo");
		
		// Check connection
		if($conn === false){
			die("ERROR: Could not connect. "
				. mysqli_connect_error());
		}
		
		//$sql = "SELECT * from `complaint` ";
		//$result = mysqli_query($conn, $sql);
		
		// Taking all 5 values from the form data(input)
		//$complaint = mysqli_fetch_assoc($result);
		
		$id = $_GET['id'];
		$worker= $_REQUEST['emps'];
			
				
			
		
		
		// Performing insert query execution
		// here our table name is college
		//$sql = "UPDATE `complaint` SET `worker`='$worker' WHERE id = $id ;";
		$result = mysqli_query($conn, "UPDATE `complaint` SET `worker`='$worker' WHERE id = $id ;");
		
		// Close connection
		mysqli_close($conn);
		
		
   include("viewComplaintSupAf.php");
 
		?>
	</center>
</body>
</html>
 