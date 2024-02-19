<!DOCTYPE html>

<html>
<head>
  <title>Display all records from Database</title>
</head>
<body>
<h2>Employee Details</h2>
<table border="2">
  <tr>
    <td>Sr.No.</td>
    <td>Full Name</td>
    <td>Age</td>
  </tr>

<?php

$db = mysqli_connect("localhost","root","","smartcityapplications");
if(!$db)
{
    die("Connection failed: " . mysqli_connect_error());
	echo error; 
}
?>
 
<?php
$sql = "INSERT INTO login (username,email,password) VALUES ('pradeep','maru@2002','Pradeep@1103')";
if(mysqli_query($db, $sql)){
    echo "Records inserted successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($db);
}
echo 'hi';
?>

   
</table>  
</body>
</html>