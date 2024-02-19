<!DOCTYPE html>
<html>
<head>
</head>
<body>
<center>
<?php

// servername => localhost
// username => root
// password => empty
// database name => staff
$conn = mysqli_connect("localhost", "root", "", "smartcityapplications");

// Check connection
if($conn === false){
die("ERROR: Could not connect. "
. mysqli_connect_error());
}


$Fname = $_REQUEST['Fname'];
$Lname = $_REQUEST['Lname'];
$Username=$_POST['Username'];
$mnumber=$_POST['mnumber'];
$email = $_REQUEST['email'];
$password = $_REQUEST['password'];
$repassword = $_REQUEST['repassword'];


$sql = "INSERT INTO register VALUES ('$Fname','$Lname','$Username','$mnumber','$email','$password','$repassword')";

if(mysqli_query($conn, $sql)){
echo "<h3>Registered successfully.</h3>";
} else{
echo "ERROR: Hush! Sorry $sql. "
. mysqli_error($conn);
}

// Close connection
mysqli_close($conn);
?>
</center>
<button><a href="bootstraploginpage1.html">next</button>
</body>

</html>