<?php include('server.php') ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NETFLIX | Log In</title>
    <link rel="stylesheet" type="text/css" href="login.css">
    <link rel="stylesheet" href="login-media.css">
    <link rel="shortcut icon" type="x-icon" href="netflix-3271955-2738021.webp">
</head>
<body>
    <h1 class="netflix">NETFLIX</h1>

    <div class="container-1">
        <div class="fundal">
  <div class="header">
  	<h2>Log In</h2>
  </div>
	 
  <form method="post" action="login.php">
    <?php include('errors.php'); ?>
  	<div class="input-group">
  		<input type="text" name="username" placeholder="Username">
  	</div>
  	<div class="input-group">
  		<input type="password" name="password" placeholder="Password">
  	</div>
  	<div class="input-group">
  		<button type="submit" class="btn" name="login_user">Login</button>
  	</div>
  	<p class="p-1">
  		Not yet a member? <a href="register.php">Sign up</a>
  	</p>
  </form>

</div>
</div>

<footer>
    <div class="container-2">
      <span><a href="https://help.netflix.com/en/node/412">FAQ</a></span>
      <span><a href="https://help.netflix.com/en/">Help Center</a></span>
      <span><a href="https://help.netflix.com/legal/termsofuse">Terms of Use</a></span>
      <span><a href="https://help.netflix.com/legal/privacy">Privacy</a></span>
      <span><a href="https://help.netflix.com/legal/corpinfo">Corporate Information</a></span>
    </div>
  </footer>

</body>
</html>