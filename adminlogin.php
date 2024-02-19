<?php
include("connection.php");
error_reporting(0);
?>
<html>
<head>
	<title>Admin login</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">
	<link rel="stylesheet" href="adminlogin1.css">
</head>
<body>
<form action="mainhomepage.html" method="get">
	<div class="container">
		<div class="header">
			<h1>Admin Login</h1>
		</div>
		<div class="main">
			<form>
				<span>
					<i class="fa fa-user"></i>
					<input type="text" placeholder="Username" name="username">
				</span><br>	
				<span>
					<i class="fa fa-lock"></i>
					<input type="password" placeholder="Password" name="password">
				</span><br>	
				<input type="submit" name="submit" value="submit">
			</form>
		</div>
	</div>
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
          
        // Taking all 5 values from the form data(input)
        $username =  $_REQUEST['username'];
		$password = $_REQUEST['password'];
          
        // Performing insert query execution
        // here our table name is college
        $sql = "INSERT INTO alogin  VALUES ('$username','$password')";
          
        if(mysqli_query($conn, $sql)){
            echo ""; 
 
        } else{
            echo "ERROR: Hush! Sorry $sql. " 
                . mysqli_error($conn);
        }
          
        // Close connection
        mysqli_close($conn);
        ?>
</body>
</html>