<?php
include('functions.php');
if (!isLoggedIn()) {
    $_SESSION['msg'] = "You must log in first";
    header('location: login.php');
}
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Home</title>
        <link rel="stylesheet" type="text/css" href="CSS/menu.css">
        <link rel="stylesheet" type="text/css" href="CSS/style.css">
        <style>
            .footer{
                margin-top:70px;
            }
        </style>
    </head>
    <body>
        <?php include 'header1.php'; ?>
        <div class="header">
            <h2>Welcome to Our Website</h2>
        </div>
        <div class="content">
            <img src="images/user.jpg" width="400px" height="400px">
            <br>
            <!-- notification message -->
            <?php if (isset($_SESSION['success'])) : ?>
                <div class="error success" >
                    <h3>
                        <?php
                        echo $_SESSION['success'];
                        unset($_SESSION['success']);
                        ?>
                    </h3>
                </div>
            <?php endif ?>
            <!-- logged in user information -->
            <?php if (isset($_SESSION['user'])) : ?>
                <strong><?php echo $_SESSION['user']['username']; ?></strong>

                <small>
                    <i  style="color: #888;">(<?php echo ucfirst($_SESSION['user']['user_type']); ?>)</i> 
                    <br>
                    <a href="index.php?logout='1'" style="color: red;">logout</a>
                </small>

            <?php endif ?>
        </div>
    </div>
</div>
<?php include 'footer.php'; ?>
</body>
</html>