<?php include('functions.php') ?>


<!DOCTYPE html>
<html>
<head>
	<title></title>
         <link rel="stylesheet" type="text/css" href="CSS/menu.css">
        <style>
            .header{
                background:none;
            }
          
            .footer{
                margin-top:70px;
            }
        </style>
        <link rel="stylesheet" type="text/css" href="CSS/style.css">
       
</head>
<body>
    <?php include 'header.php'; ?>
<div class="header">
	<h2>Register</h2>
</div>
<form method="post" action="register.php">
    <?php echo display_error(); ?>

	<div class="input-group">
		<label>Username</label>
		<input type="text" name="username" value="<?php echo $username; ?>">

	</div>
	<div class="input-group">
		<label>Email</label>
		<input type="email" name="email" value="<?php echo $email; ?>">	</div>
	<div class="input-group">
		<label>Password</label>
		<input type="password" name="password_1">
	</div>
	<div class="input-group">
		<label>Confirm password</label>
		<input type="password" name="password_2">
	</div>
    
	<div class="input-group">
		<button type="submit" class="btn" name="register_btn">Register</button>
	</div>
	<p>
		Already a member? <a href="login.php">Log n</a>
	</p>
</form>
    <?php include 'footer.php'; ?>
</body>
</html>