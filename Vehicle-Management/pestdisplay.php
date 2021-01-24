<!DOCTYPE html>
<html>
<head>
  <title>Crop Pesticides </title>
</head>
<body>

<h2>Pests </h2>

<table border="2">
  <tr>
    <td>Name</td>
    <td>used for</td>
    <td>Images</td>
  </tr>

<?php

$db = mysqli_connect("localhost","root","","vehicle management");  // database connection

if(!$db)
{
    die("Connection failed: " . mysqli_connect_error());
}
//include "dbConn.php"; // Using database connection file here

$records = mysqli_query($db,"select * from pest"); // fetch data from database

while($data = mysqli_fetch_array($records))
{
?>
  <tr>
    <td><?php echo $data['type']; ?></td>
    <td><?php echo $data['action']; ?></td>
    <td><img src="images/<?php echo $data['pic']; ?>" width="150" height="150"></td>
  </tr> 
<?php
}
?>

</table>

<?php mysqli_close($db);  // close connection ?>

</body>
</html>