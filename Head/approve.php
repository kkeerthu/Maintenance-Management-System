<?php
//including the database connection file
include("conn.php");

//getting id of the data from url
$id = $_GET['id'];
//$division = $_GET['division'];



//deleting the row from table
$result = mysqli_query($conn, "UPDATE `complaint` SET `hstatus`='Approved' WHERE id = $id ;");
include("viewComplaintHead.php");
//redirecting to the display page (index.php in our case)
//header("Location:empleave.php");
?>

