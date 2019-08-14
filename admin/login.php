<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Registration system PHP and MySQL</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <form method="post" action="register.php">
  <div class="header ">
  	<h2> Welcome Admin</h2>
  </div>
	 
  <form method="post" action="login.php">
  	<?php include('errors.php'); ?>
  	<div class="input-group">
  		<label>username</label>
  		<input type="text" name="username" required pattern="^[A-Za-z]+">
  	</div>
  	<div class="input-group">
  		<label>Password</label>
  		<input type="password" name="password"  required pattern="^[A-Za-z0-9]+">
  	</div>
  	<div class="input-group">
  		<button type="submit" class="btn" name="login_user">Login</button>
  	</div>
  	<p>
  		Not yet a member? <a href="register.php">Sign up</a><a href="../index.php ">&nbsp HOME</a>
  	</p>

    <p>
      Forgot Password? <a href="forgotPassword.php">Forgot Password</a>
    </p>
  </form>
 </form>
</body>
</html>