<?php
//including the database connection file
include("conn.php");

//getting id of the data from url
//$division = $_GET['division'];
$id = $_GET['id'];

//deleting the row from table
$result = mysqli_query($conn, "UPDATE `complaint` SET `engstatus`='Cancelled' WHERE `id`=$id ;");
include("viewComplaintEng.php");
//redirecting to the display page (index.php in our case)
//header("Location:empleave.php");
?>

