<?php
include 'database.php';
$result = mysqli_query($conn,"SELECT * FROM form");
?>
<!DOCTYPE html>
<link rel="stylesheet" type="text/css" href="style.css">
<html>
 <head>
 <title> Retrive data</title>
 </head>
<body>
<?php
if (mysqli_num_rows($result) > 0) {
?>
  <table>
  
  <tr>
    <td>Name</td>
    <td>Email</td>
    <td>Age</td>
    <td>Address</td>
  </tr>
<?php
$i=0;
while($row = mysqli_fetch_array($result)) {
?>
<tr>
    <td><?php echo $row["name"]; ?></td>
    <td><?php echo $row["email"]; ?></td>
    <td><?php echo $row["age"]; ?></td>
    <td><?php echo $row["address"]; ?></td>
</tr>
<?php
$i++;
}
?>
</table>
 <?php
}
else{
    echo "No result found";
}
?>
 </body>
</html>