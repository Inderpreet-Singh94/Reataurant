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

            /* The dropdown container */
            .dropdown {
                float: right;
                overflow: hidden;
            }

            /* Dropdown button */
            .dropdown .dropbtn {
                font-size: 16px;
                border: none;
                outline: none;

                padding: 14px 16px;

                font-family: inherit; /* Important for vertical align on mobile phones */
                margin: 0; /* Important for vertical align on mobile phones */
            }

            /* Add a red background color to navbar links on hover */
            .navbar a:hover, .dropdown:hover .dropbtn {
                background-color: red;
            }

            /* Dropdown content (hidden by default) */
            .dropdown-content {
                display: none;
                position: absolute;
                min-width: 160px;
                box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
                z-index: 1;
            }

            /* Links inside the dropdown */
            .dropdown-content a {
                float: none;
                color: black;
                padding: 12px 16px;
                text-decoration: none;
                display: block;

            }

            /* Add a grey background color to dropdown links on hover */
            .dropdown-content a:hover {
                background-color: #ddd;
            }

            /* Show the dropdown menu on hover */
            .dropdown:hover .dropdown-content {
                display: block;
            }
            
            .container>img{
                background-size: cover;
            }

        </style>
    </head>

    <body>
        <!--section header starts here-->

        <div class="navbar">
            <div class="logo_container">
                <h1><a href="main.php"> Restaurant<span>ELITE</span></a></h1>
            </div>
            <a href="register.php">Register Us</a>
            <a href="login.php">Login</a>
        </div>
