
<html>
<head>
	<title>Registration form</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">
	<link rel="stylesheet" href="styles.css">
<script>
function validate()
{
  
  var fname= document.registration1.Fname.value;
  var lname= document.registration1.Lname.value;
  var pass= document.registration1.password.value;
  var repass= document.registration1.repassword.value;
  var mob= document.registration1.mnumber.value;
  
  if (!validatePassword()){
    document.registration1.password.focus();
	 return false;
  }else if(!validateUserName()){
    document.registration1.Username.focus();
	 return false;
  }else{
    alert("ready to submit...........")
    return true;
  }

  
}

function validatePassword(){
  var pass= document.registration1.password;
  var repass= document.registration1.repassword;
  var re;
      
      if(pass.value != "" && !(pass.value.length >= 8 && pass.value.length <=20)) {
        alert("Error: Password must contain at least 8 characters and Max of 20!");
        return false;
      }
      re = /[A-Z]/;
      if(!re.test(pass.value)) {
        alert("Error: password must contain at least one uppercase letter (A-Z)!");
        return false;
      }
      if(pass.value != repass.value){
      alert("Error: Both Passwords should match!");
      return false;
    }
    
    return true;
}
function validateUserName(){
  var uname= document.registration1.Username;

  if(uname.value != "" && !(uname.value.charAt(0) == uname.value.charAt(0).toUpperCase())) {
      alert("Error: Username first letter should be Uppercase !");
      return false;
    }
    return true;
  
}
function validateMobile(){
	var mob= document.registration1.mnumber;
	
	if(mnumber.value != "" && !(mnumber.value.length >= 8 && mnumber.value.length <=15)) {
		alert("Error: Mobile number must contain at least 8 digits and Max of 15!");
        return false;
      }
	  return true;
}
</script> 

</head>
<body>
<form action="message1.php" method="post" name="registration1">
	<div class="container">
		<div class="myCard">
			<div class="row">
				<div class="col-md-6">
					<div class="myLeftCtn">
					<form class="myForm text-center">
					<header>If already a user</header>
					<input type="submit" class="butt" <a href="bootstraploginpage1.html" value="OPEN ACCOUNT"></a></input><br>
					<header>Create new account</header>
					<div class="form-group">
						<i class="fas fa-user"></i>
						<input class="myInput" type="text" placeholder="First Name" name="Fname" required>
						<div class="invalid-feedback">Please fill out this feild.</div>
					</div>
					
					<div class="form-group">
						<i class="fas fa-user"></i>
						<input class="myInput" type="text" placeholder="Last Name" name="Lname" required>
						<div class="invalid-feedback">Please fill out this feild.</div>
					</div>
					
					<div class="form-group">
						<i class="fas fa-user"></i>
						<input class="myInput" type="text" placeholder="Username" name="Username" required>
						<div class="invalid-feedback">Please fill out this feild.</div>
					</div>
					
					<div class="form-group">
						<i class="fas fa-phone"></i>
						<input class="myInput" type="text" placeholder="Mobile number" name="mnumber" required>
						<div class="invalid-feedback">Please fill out this feild.</div>
					</div>
					
					<div class="form-group">
						<i class="fas fa-envelope"></i>
						<input class="myInput" type="text" placeholder="Email" name="email" required>	
						<div class="invalid-feedback">Please fill out this feild.</div>
					</div>	
						
					<div class="form-group">
						<i class="fas fa-lock"></i>
						<input class="myInput" type="password" placeholder="Password" name="password" required>
					</div>
					
					<div class="form-group">
						<i class="fas fa-lock"></i>
						<input class="myInput" type="password" placeholder="Confirm Password" name="repassword" required>
					</div>
							
					<div class="form-group">
						<label>
							<input id="check_1" name="check_1" type="checkbox" required><small>  I agree all the Terms & Conditions</small></input>
							
						</label>
					</div>
					<input type="submit" name="submit" class="butt" value="CREATE ACCOUNT" onclick="javascript:validate();"/>
				</form>
				</div>
			</div>			
			
				

			<div class="col-md-6">
				<div class="myRightCtn">
					<div class="box"><header>Hello User!!!</header>
					<p>This application gives you beter understanding about a particular city about the places here and what to visit where to stay and where to eat........so on like this information. If you are ver much instrested ones you create an account and have a look on this application.</p>
					<p><center>!! Thank you !!</center></p>
					<p>-team
					Smart City Applications lead</p>
						<input type="button" class="butt_out" value="Learn More"/>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>	
				

							
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

</body>
</form>
</html>