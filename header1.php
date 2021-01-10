<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Home</title>
        <style>
            *{
                margin:0;
                padding:0;
                list-style: none;
                text-decoration: none;
            }

            .navbar {
                overflow: hidden;
                background-color: #333;
                font-family: Arial;
                height: 50px;
            }

            .logo_container{
                height:100%;
                display:table;
            }

            .navbar >  h1{
                color:white;
                height:100%;

                font-size:50px;
                font-weight: 200;
                text-align: center;
            }

            .logo_container > h1 > span{
                font-weight:800;
            }

            /* Links inside the navbar */
            .navbar a {
                float: right;
                font-size: 16px;
                color: white;
                text-align: right;
                padding: 14px 16px;
                text-decoration: none;
            }
       </style>
    </head>
    <body>
        <div class="navbar">
            <div class="logo_container">
                <h1><a href="index.php"> Restaurant<span>ELITE</span></a></h1>
            </div>
            <a href="contact.php">Contact Us</a>
            <a href="about.php">About US</a>
            <a href="gallery.php">Gallery</a>
            <a href="menu.php">Menu</a>
        </div>
