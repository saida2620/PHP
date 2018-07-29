<?php
$con=mysqli_connect("localhost","root","","login");
// Check connection
if (mysqli_connect_errno()) {
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
mysqli_query($con,"DELETE FROM indleag WHERE id='$id'");
mysqli_close($con);
header("Location: index.php");
?> 