<?php
//including the database connection file
include("conn.php");
include("viewComplaintSup.php");

//getting id of the data from url
$id = $_GET['id'];
//$emp=$_G['emps'];
//$division = $_GET['division'];



//deleting the row from table
$result = mysqli_query($conn, "UPDATE `complaint` SET `worker`='Mazon' WHERE id = $id ;");

//redirecting to the display page (index.php in our case)
//header("Location:empleave.php");
?>