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
				<th align = "center">Id</th>
				<th align = "center">Division</th>
				<th align = "center">worklocation</th>
				<th align = "center">workstodone</th>
				<th align = "center">name</th>
				<th align = "center">contact_num</th>
				<th align = "center">Head Recommendation</th>
				<th align = "center">Engineer Approval</th>
				<th align = "center">Job Card</th>
			
			</tr>


			<?php
				while ($complaint = mysqli_fetch_assoc($result)) {
					echo "<tr>";
					echo "<td>".$complaint['id']."</td>";
					echo "<td>".$complaint['division']."</td>";
					echo "<td>".$complaint['worklocation']."</td>";
					echo "<td>".$complaint['workstodone']."</td>";
					echo "<td>".$complaint['name']."</td>";
					echo "<td>".$complaint['contact_num']."</td>";
					echo "<td>".$complaint['hstatus']."</td>";
					echo "<td>".$complaint['engstatus']."</td>";
					echo "<td>
					<select name=\"emps\">
 <option>Curator</option>
	<option>Electrician</option>
	<option>Mazon</option>
	<option>Carpentor</option>
	<option>Plumber</option>
	<option>Works Aid</option>
	<option>Pump Operator</option>
</select>
<input type=\"submit\" name=\"select\"><a href=\"jobcard.php?id=$complaint[id]\"  onClick=\"return confirm('Are you sure you want to Select?')\"></a>
					
					
					</td>";
;
					
	
			
				
				}


			?>

		</table>
		
	
</body>
</html>