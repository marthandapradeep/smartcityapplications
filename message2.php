<html>
<head>
</head>
<body>
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
?>


<?php
if($_GET['submit'])
{
	$flag=0;
    $a=$_GET['username'];
    $b=$_GET['password'];
	$query ="select * from register";
	$data = mysqli_query($conn, $query);
	while($result = mysqli_fetch_assoc($data))
	{
		if($result['username']==$a && $result['password']==$b)
		{
			$flag=1;
			header("Location:message2.php");
			echo "Username and Password matched";
			exit();
		}	
	}
	if(flag==0)
	{
		echo "Username and Password not matched";
	}
}
?>
<button><a href="mainhomepage.html">next</button>
</body>
</html>