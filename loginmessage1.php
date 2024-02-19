<?php      
    $host = "localhost";  
    $user = "root";  
    $password = '';  
    $db_name = "smartcityapplications";  
      
    $con = mysqli_connect($host, $user, $password, $db_name);  
    if(mysqli_connect_errno()) {  
        die("Failed to connect with MySQL: ". mysqli_connect_error());  
    }  
?>


<?php        
    $username = $_POST['username'];  
	$email = $_POST['email'];
    $password = $_POST['password'];  
      
        //to prevent from mysqli injection  
        $username = stripcslashes($username);
		$email = stripcslashes($email);
        $password = stripcslashes($password);  
        $username = mysqli_real_escape_string($con, $username); 
		$email = mysqli_real_escape_string($con, $email);
        $password = mysqli_real_escape_string($con, $password);  
      
        $sql = "select *from register where username = '$username'  email = '$email'  password = '$password'";  
        $result = mysqli_query($con, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  
          
        if($count == 1){  
            echo "<h1><center> Login successful </center></h1>";  
        }  
        else{  
            echo "<h1> Login failed. Invalid username or password.</h1>";  
        }     
?>    