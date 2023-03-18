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
			
			</tr>


			<?php
				while ($complaint = mysqli_fetch_assoc($result)) {
					echo "<tr>";
					echo "<td>".$complaint['division']."</td>";
					echo "<td>".$complaint['worklocation']."</td>";
					echo "<td>".$complaint['workstodone']."</td>";
					echo "<td>".$complaint['name']."</td>";
					echo "<td>".$complaint['contact_num']."</td>";
					
					
				}


			?>

		</table>
		
	
</body>
</html>