<?php

require_once ('conn.php');
$sql = "SELECT * from `complaint` ";

//echo "$sql";
$result = mysqli_query($conn, $sql);

?>



<html>
<head>
	<title>ViewComplaint</title>
	<link rel="stylesheet" type="text/css" href="styleview.css">
</head>
<body>
	
	
	<div class="divider"></div>

		<table>
			<tr>

				<th align = "center">Division</th>
				<th align = "center">worklocation</th>
				<th align = "center">workstodone</th>
				<th align = "center">name</th>
				<th align = "center">contact_num</th>
				<th align = "center">Head Recommendation</th>
				<th align = "center">Engineer Approval</th>
			
			</tr>


			<?php
				while ($complaint = mysqli_fetch_assoc($result)) {
					echo "<tr>";
					echo "<td>".$complaint['division']."</td>";
					echo "<td>".$complaint['worklocation']."</td>";
					echo "<td>".$complaint['workstodone']."</td>";
					echo "<td>".$complaint['name']."</td>";
					echo "<td>".$complaint['contact_num']."</td>";
					echo "<td>".$complaint['hstatus']."</td>";
					
					echo "<td><a href=\"engapprove.php?id=$complaint[id]\"  onClick=\"return confirm('Are you sure you want to Approve the request?')\">Approve</a> | <a href=\"engcancel.php?id=$complaint[id]\" onClick=\"return confirm('Are you sure you want to Canel the request?')\">Cancel</a></td>";

			
				
				}


			?>

		</table>
		
	
</body>
</html>