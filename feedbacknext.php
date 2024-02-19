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


$username = $_POST['username'];
$comment = $_POST['comment'];
$rating=$_POST['rating1'];

$sql = "INSERT INTO feedback VALUES ('$username','$comment','$rating')";

if(mysqli_query($conn, $sql)){
echo "<h3>Your Feedback stored successfully.</h3>";
} else{
echo "ERROR: Hush! Sorry $sql. "
. mysqli_error($conn);
}

// Close connection
mysqli_close($conn);
?>
</center>
<button><a href="thankyou.html">next</button>
</body>

</html>