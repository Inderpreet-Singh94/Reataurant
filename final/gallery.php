<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Gallery</title>
    <link rel="stylesheet" href="CSS/gallery.css">
    <style>
        .dropdown {
                        float: left;
                        overflow: hidden;
                      }

                      .dropdown .dropbtn {
                        font-size: 16px;  
                        border: none;
                        outline: none;
                        color: white;
                        padding: 14px 16px;
                        background-color: inherit;
                        font-family: inherit;
                        margin: 0;
                      }

                      .navbar a:hover, .dropdown:hover .dropbtn {
                        background-color: red;
                      }

                      .dropdown-content {
                        display: none;
                        position: absolute;
                        background-color: #f9f9f9;
                        min-width: 160px;
                        box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
                        z-index: 1;
                      }

                      .dropdown-content a {
                        float: none;
                        color: black;
                        padding: 12px 16px;
                        text-decoration: none;
                        display: block;
                        text-align: left;
                      }

                      .dropdown-content a:hover {
                        background-color: #ddd;
                      }

                      .dropdown:hover .dropdown-content {
                        display: block;
                      }
    </style>
</head>
 <?php
    include 'header1.php';
    ?>
<body>
    
        <!--section header ends here-->

    <!--Section pic gallery starts here-->
    <div class="section">
        <div class="image1">
            <figure>
                <img src="images/7.jpg" alt="photo">
                <p>Pizza &nbsp; Price: $10 <br> <a href = "order.php"><button type="button">order now</button></a> </p>
            </figure>
        </div>

        <div class="image2">
            <figure>
                <img src="images/8.jpg" alt="photo">
                <p>Masala Pizza &nbsp; Price: $10 <br> <a href = "order.php"><button type="button">order now</button></a> </p>
            </figure>
        </div>

        <div class="image3">
            <figure>
                <img src="images/9.jpg" alt="photo">
                <p>Pista Barfi &nbsp; Price: $10 <br> <a href = "order.php"><button type="button">order now</button></a> </p>
            </figure>
        </div>
        
        <div class="image4">
            <figure>
                <img src="images/10.jpg" alt="photo">
                <p>Cake  &nbsp; Price: $10 <br> <a href = "order.php"><button type="button">order now</button></a> </p>
            </figure>
        </div>

        <div class="image5">
            <figure>
                <img src="images/11.jpg" alt="photo">
                <p>Cheese Pizza &nbsp; Price: $10 <br> <a href = "order.php"><button type="button">order now</button></a> </p>
            </figure>
        </div>

        <div class="image6">
            <figure>
                <img src="images/12.jpg" alt="photo">
                <p>Veg. Pizza &nbsp; Price: $10 <br> <a href = "order.php"><button type="button">order now</button></a> </p>
            </figure>
        </div>
    </div>
    <!--Section pic gallery ends here-->
    <?php
include 'footer.php';
?>
  