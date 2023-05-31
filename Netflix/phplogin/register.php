<?php include('server.php') ?>
<!DOCTYPE html>
<html lang="en">
<head>
  	<title>NETFLIX | Sign Up</title>
    <link rel="stylesheet" href="register.css">
    <link rel="stylesheet" href="media-register.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="x-icon" href="netflix-3271955-2738021.webp">
</head>
<body>
	<h1 class="netflix">NETFLIX</h1>

	<div class="container-1">
  	<div class="fundal">
	<div class="header">
		<h2>Sign Up</h2>
	</div>
	
	<form method="post" action="register.php" class="form">
		<?php include('errors.php'); ?>
        <div class="input-group">
          <input type="text" name="username" placeholder="Username" value="<?php echo $username; ?>">
        </div>
        <div class="input-group">
          <input type="email" name="email" placeholder="Email" value="<?php echo $email; ?>">
        </div>
        <div class="input-group">
          <input type="password" name="password_1" placeholder="Password">
        </div>
        <div class="input-group">
          <input type="password" name="password_2" placeholder="Confirm password">
        </div>
        <div class="input-group">
          <button type="submit" class="btn" name="reg_user">Sign Up</button>
        </div>
        <p class="p-1">
            Already a member? <a href="login.php">Log In</a>
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