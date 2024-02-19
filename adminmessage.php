
<?php

$db = mysqli_connect("localhost","root","","smartcityapplications");

if(!$db)
{
    die("Connection failed: " . mysqli_connect_error());
}

$records = mysqli_query($db,"select * from feedback");
?>

<html>
<head>
<title>Feed Back Details</title>
</head>
<body>
<center><h1>Feed Back Details of The User</h1></center>
<center><table border="2">
  <tr>
    <td>username</td>
    <td>comment</td>
    <td>rating</td>
  </tr>
<?php
while($data = mysqli_fetch_array($records))
{
?>
  <tr>
    <td><?php echo $data['username']; ?></td>
    <td><?php echo $data['comment']; ?></td>
    <td><?php echo $data['rating']; ?></td>
  </tr>	
<?php
}
?>
  </table></center>
<?php
mysqli_close($db);

?>

</body>
</html>