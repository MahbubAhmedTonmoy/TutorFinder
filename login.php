<!DOCTYPE html>
<html>
<head>

	<link rel="stylesheet" type="text/css" href="css/style.css">
	<script type="text/javascript" src="js/login.js"></script>
</head>
<body>
 
 <title>Tution finder</title>
  <div class="header">
  	<h2>Log in Tutor Finder</h2>
  </div>

  <form  name="login" method="post" action="login-handler.php" onsubmit="return(verify());">

	
	 <div class="input-group">
	 <lable>Login For (Please Click Below)</lable>
</div>
<div>
  <!-- <input type="radio"  id="r1" name="user" value="Student">Student -->
  <input type="radio" id="r2" name="user" value="Gaurdian">Gaurdian
  <input type="radio" id="r3" name="user" value="Tutor">Tutor
	<input type="radio" id="r4" name="user" value="Admin">Admin
	</div>

	<div class="input-group">
  	  <label>Contact Number</label>
		<input type="text" name="uname">
		<p id="uerror" style="color:red;"></p>
  	</div>

    <div class="input-group">
  	  <label>Password</label>
		<input type="password" name="pname">
		<p id="perror" style="color:red;"></p>
  	</div>

  	<div class="input-group">
  	  <button type="submit" class="btn" name="log_user">Log In</button>
	  
  	</div>
	<p class="border-top card-body text-center">Create an account? <a href="registration.php">Sign Up</a></p>
  
  </form>
  
</body>
</html>