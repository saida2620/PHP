<?php
$con=mysqli_connect("localhost","root","","login");
// Check connection
if (mysqli_connect_errno()) 
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
$result = mysqli_query($con,"SELECT * FROM indlaeg");
echo "<table class='table table-striped table-bordered table-hover'>
<thead>
<tr>
<th>ID</th>
<th>name</th>
<th>delete</th>   
</tr>
</thead>";
while($row = mysqli_fetch_array($result)) 
{
echo "<tbody data-link='row' class='rowlink'>";
echo "<tr>";
echo "<td>" . $row['id'] . "</td>";
echo "<td>" . $row['name'] . "</td>";
echo "<td><a href='delete.php'>Delete</a></td>";
echo "</tr>";
echo "</tbody>";    
}
echo "</table>";

mysqli_close($con);
?>