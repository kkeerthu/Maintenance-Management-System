<!DOCTYPE html>
<html>

<head>
	<title>Insert Page page</title>
	<link rel="stylesheet" type="text/css" href="styleview.css">
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
		
		// Taking all 5 values from the form data(input)
			$division= $_REQUEST['division'];
			$worklocation	= $_REQUEST['worklocation'];
			$workstodone= $_REQUEST['work'];
			$name= $_REQUEST['name'];
			$contact_num= $_REQUEST['mobile'];
		
		
		// Performing insert query execution
		// here our table name is college
		$sql = "INSERT INTO complaint(division,worklocation,workstodone,name,contact_num)VALUES('$division','$worklocation','$workstodone','$name',$contact_num)";
		
		if(mysqli_query($conn, $sql)){
			echo "<p>data stored  successfully.";
				?>
			<table>
			<tr>

				<th align = "center">Division</th>
				<th align = "center">worklocation</th>
				<th align = "center">workstodone</th>
				<th align = "center">name</th>
				<th align = "center">contact_num</th>
				
			
			</tr>
			<?php
			echo "<tr>";
					echo "<td>".$division."</td>";
					echo "<td>".$worklocation."</td>";
					echo "<td>".$workstodone."</td>";
					echo "<td>".$name."</td>";
					echo "<td>".$contact_num."</td>";
				
			//echo nl2br("\n$division\n $worklocation\n $workstodone\n $name\n $contact_num");

			
			
		} else{
			echo "ERROR: Hush! Sorry $sql. "
				. mysqli_error($conn);
		}
		
		// Close connection
		mysqli_close($conn);
		
		?>
	</center>
</body>

</html>
 