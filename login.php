<?php include('functions.php') ?>
<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="CSS/menu.css">
        <title></title>
        <link rel="stylesheet" type="text/css" href="CSS/style.css">
        <style>
            .footer{
                margin-top:70px;
            }
        </style>

    </head>
    <body>
        <?php include 'header.php'; ?>
        <div class="header">
            <h2>Login</h2>
        </div>
        <form method="post" action="login.php">

            <?php echo display_error(); ?>

            <div class="input-group">
                <label>Username</label>
                <input type="text" name="username" >
            </div>
            <div class="input-group">
                <label>Email</label>
                <input type="email" name="email" value="<?php echo $email; ?>">	</div>
            <div class="input-group">
                <label>Password</label>
                <input type="password" name="password">
            </div>
            <div class="input-group">
                <button type="submit" class="btn" name="login_btn">Login</button>
                <a href="reset.php" class="btn">Reset Password</a>
            </div>
            <p>
                Not yet a member? <a href="register.php">Sign up</a>
            </p>
        </form>
        <?php include 'footer.php'; ?>
    </body>
</html>