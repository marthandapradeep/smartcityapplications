<?php      
    include('connect.php');  
    $Username = $_POST['username'];  
    $email = $_POST['email']; 
    $password = $_POST['password']; 
      
        //to prevent from mysqli injection  
        $username = stripcslashes($Username);  
		$email = stripcslashes($email); 
        $password = stripcslashes($password);  
        $Username = mysqli_real_escape_string($con, $Username);
		$email = mysqli_real_escape_string($con, $email);   
        $password = mysqli_real_escape_string($con, $password);  
      
        $sql = "select *from register where Username = '$Username' , email = '$email' , password = '$password'";  
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