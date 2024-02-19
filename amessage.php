<?php

$db = mysqli_connect("localhost","root","","smartcityapplications");

if(!$db)
{
    die("Connection failed: " . mysqli_connect_error());
}
?>

<?php
if($_GET['submit'])
{
	$flag=0;
    $a=$_GET['username'];
    $b=$_GET['password'];
	$query ="select * from adminregister";
	$data = mysqli_query($conn, $query);
	while($result = mysqli_fetch_assoc($data))
	{
		if($result['username']==$a && $result['password']==$b)
		{
			$flag=1;
			exit();
		}	
	}
	if(flag==0)
	{
		echo "Username and Password not matched";
	}
}
?>


<?php
mysqli_close($db);

?>

</body>
</html>