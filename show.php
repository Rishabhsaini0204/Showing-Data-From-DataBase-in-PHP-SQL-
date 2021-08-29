<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Show Data</title>
</head>
<body>
    <h2>Details</h2>
    <div class="d-flex2">
         <div class="link"><a  href="index.php">Create Account</a> </div>
         
     </div>

<table border="1" class="table">
  <tr class="table-head">
    <td>Fisrt Name</td>
    <td>Last Name</td>
    <td>Email</td>
    <td>DOB</td>
    <td>Mobile</td>
    <td>Designation</td>
    <td>Gender</td>
    <td>Hobbies</td>
  </tr>

<?php

include "dbConn.php"; 
$records = mysqli_query($db,"select * from user_info"); 
$tablename='user_info';
while($data = mysqli_fetch_array($records))
{
?>
  <tr>
    <td><?php echo $data['FNAME']; ?></td>
    <td><?php echo $data['LNAME']; ?></td>
    <td><?php echo $data['EMAIL']; ?></td>
    <td><?php echo $data['DOB']; ?></td>
    <td><?php echo $data['MOBILE']; ?></td>
    <td><?php echo $data['DESIGNATION']; ?></td>
    <td><?php echo $data['GENDER']; ?></td>
    <td><?php echo $data['HOBBIES']; ?></td>
  </tr>	
<?php
}
echo "Data is showing from database -> $databasename and Table Name->  $tablename";
?>
</table>

<?php mysqli_close($db); ?>
</body>
</html>