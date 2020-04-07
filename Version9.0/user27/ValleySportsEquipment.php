<?php
// Initialize the session
session_start();
 
?>




<html lang="en">
<!--Version 7.0 
	Name:
	Date Completed:
    -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="SHS WebDev Menu Sample">

    <title> Valley Sports - Official Site - Proud Partner and Sponser of the Shakopee Sabers </title>

    <!-- Bootstrap core JS -->
    <!-- These are needed to get the responsive menu to work -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="JS/SampleJS.js">


    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="ValleySports.css">
    <link rel='icon' href="favicon.ico" type="image/x-icon" sizes="16x16">



    <!-- Custom styles for this template -->
    <style type="text/css">
        .menu {
            margin: 0px;
        }

        .wideMargin {
            margin: 15px;
        }

        #footer {
            font-size: 12px;
            text-align: center;

        }

        .footer-dark {
            padding: 50px 0;
            color: #f0f9ff;
            background-color: #282d32;
        }

        .footer-dark h3 {
            margin-top: 0;
            margin-bottom: 12px;
            font-weight: bold;
            font-size: 16px;
        }

        .footer-dark ul {
            padding: 0;
            list-style: none;
            line-height: 1.6;
            font-size: 14px;
            margin-bottom: 0;
        }

        .footer-dark ul a {
            color: inherit;
            text-decoration: none;
            opacity: 0.6;
        }

        .footer-dark ul a:hover {
            opacity: 0.8;
        }

        @media (max-width:767px) {
            .footer-dark .item:not(.social) {
                text-align: center;
                padding-bottom: 20px;
            }
        }

        .footer-dark .item.text {
            margin-bottom: 36px;
        }

        @media (max-width:767px) {
            .footer-dark .item.text {
                margin-bottom: 0;
            }
        }

        .footer-dark .item.text p {
            opacity: 0.6;
            margin-bottom: 0;
        }

        .footer-dark .item.social {
            text-align: center;
        }

        @media (max-width:991px) {
            .footer-dark .item.social {
                text-align: center;
                margin-top: 20px;
            }
        }

        .footer-dark .item.social>a {
            font-size: 20px;
            width: 36px;
            height: 36px;
            line-height: 36px;
            display: inline-block;
            text-align: center;
            border-radius: 50%;
            box-shadow: 0 0 0 1px rgba(255, 255, 255, 0.4);
            margin: 0 8px;
            color: #fff;
            opacity: 0.75;
        }

        .footer-dark .item.social>a:hover {
            opacity: 0.9;
        }

        .footer-dark .copyright {
            text-align: center;
            padding-top: 24px;
            opacity: 0.3;
            font-size: 13px;
            margin-bottom: 0;
        }

    </style>
</head>


<body>

    <!---------------------------------- Begin the nav-bar ------------->
    <div class="menu">
        <nav class="navbar navbar-expand-md navbar-dark bg-dark">
            <a href="index.php">
                <img src="VSimage.png" height="52" width="102" alt='ValleySports'>
            </a>

            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav">
                    <!--↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓ Edit These Items in your Menu ↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓-->
                    <div class="dropdown">
                        <a href="ValleySportsApparel.php" class="nav-item nav-link active dropdown-toggle" id='navbardrop' data-toggle='dropdown' tabindex="-1" onmouseover="style.color='red'" onmouseout="style.color='white'">| Apparel |</a>
                        <div class="dropdown-menu color-black">
                            <a class="dropdown-item" href='ValleySportsApparel.php'>Men</a>
                            <a class="dropdown-item" href='ValleySportsApparel.php'>Women</a>
                            <a class="dropdown-item" href='ValleySportsApparel.php'>Kids</a>
                        </div>
                    </div>


                    <div class="dropdown">
                        <a href="ValleySportsEquipment.php" class="nav-item nav-link active dropdown-toggle" id='navbardrop' data-toggle='dropdown' tabindex="-1" onmouseover="style.color='red'" onmouseout="style.color='white'">| Equipment |</a>
                        <div class="dropdown-menu color-black">
                            <a class="dropdown-item" href='ValleySportsEquipment.php'>Football</a>
                            <a class="dropdown-item" href='ValleySportsEquipment.php'>Soccer</a>
                            <a class="dropdown-item" href='ValleySportsEquipment.php'>Basketball</a>
                            <a class="dropdown-item" href='ValleySportsEquipment.php'>Baseball</a>
                        </div>
                    </div>


                    <div class="dropdown">
                        <a href="ValleySportsSeasonal.php" class="nav-item nav-link active dropdown-toggle" id='navbardrop' data-toggle='dropdown' tabindex="-1" onmouseover="style.color='red'" onmouseout="style.color='white'">| Seasonal |</a>
                        <div class="dropdown-menu color-black">
                            <a class="dropdown-item" href='ValleySportsSeasonal.php'>Winter</a>
                            <a class="dropdown-item" href='ValleySportsSeasonal.php'>Spring</a>
                            <a class="dropdown-item" href='ValleySportsSeasonal.php'>Summer</a>
                            <a class="dropdown-item" href='ValleySportsSeasonal.php'>Fall</a>
                        </div>
                    </div>


                    <a href="ValleySportsContact.php" class="nav-item nav-link active" tabindex="-1" onmouseover="style.color='red'" onmouseout="style.color='white'">| Contact |</a>

                    <a href="ValleySportsAbout.php" class="nav-item nav-link active" tabindex="-1" onmouseover="style.color='red'" onmouseout="style.color='white'">| About |</a>

                    <a href="ValleySportsWeather.php" class="nav-item nav-link active" tabindex="-1" onmouseover="style.color='red'" onmouseout="style.color='white'">| Weather |</a>



                    <!----------------------------------^ Edit These Items in your Menu ^ ------------->


                    <div class="topnav">

                        <div class="search-container">
                            <form action="/action_page.php">
                                <input type="text" placeholder="Search.." name="search">
                                <button type="submit"><i class="fa fa-search"></i></button>
                            </form>
                        </div>
                    </div>



                </div>
                <div class="navbar-nav ml-auto">
                    <a href="#" class="nav-item nav-link active">Help</a>
                </div>
            </div>
        </nav>
    </div>
    <!---------------------------------- End the nav-bar ------------->

    <header>
        <h2> SHOP BY SPORT</h2>
    </header>

    <img src="SaberSoccer.jpeg" height=300 width=300>

    <img src="FallSport.jpeg" height=300 width=375>

    <img src="ShakoBasketball.jpg" height=300 width=350>

    <img src="SaberBaseball.jpg" height=300 width=400>


    <hr>

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-2">

                <div>

                    <h3> Shop by Sport: </h3>
                    <div class="dropdown">
                        <a href="#" class="nav-item nav-link active dropdown-toggle" id='navbardrop' data-toggle='dropdown' tabindex="-1" onmouseover="style.color='red'" onmouseout="style.color='blue'"> Sports </a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href='#'>Football</a>
                            <a class="dropdown-item" href='#'>Baseball</a>
                            <a class="dropdown-item" href='#'>Softball</a>
                            <a class="dropdown-item" href='#'>Golf</a>
                            <a class="dropdown-item" href='#'>Boy's Soccer</a>
                            <a class="dropdown-item" href='#'>Girl's Soccer</a>
                            <a class="dropdown-item" href='#'>Boy's Basketball</a>
                            <a class="dropdown-item" href='#'>Girl's Basketball</a>
                            <a class="dropdown-item" href='#'>Boy's Hockey</a>
                            <a class="dropdown-item" href='#'>Girl's Hockey</a>
                            <a class="dropdown-item" href='#'>Boy's Tennis</a>
                            <a class="dropdown-item" href='#'>Girl's Tennis</a>



                        </div>
                    </div>

                </div>
            </div>

            <div class="col-md-10">
                <div class="row">
                    <div class="col-md-3">
                        <img src="Football.png" height=300 width=300>

                        <thead>

                            <tr>‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ </tr>

                            <tr>‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ </tr>

                            <tr>
                                <th> ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ Football </th>
                                <th> ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎‎ ‎ ‎ </th>
                                <th> $20 </th>
                            </tr>
                        </thead>

                        <hr>

                        <img src="Shinpad.webp" height=300 width=300>
                        <td>

                            <tr>‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ </tr>

                            <tr>‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ </tr>

                            <tr>
                                <th> ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ Men's Shin Guards </th>
                                <th> ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ </th>
                                <th> $15 </th>
                            </tr>


                        </td>

                        <hr>

                        <img src="TennisBallPack.jpg" height=300 width=300>
                        <td>

                            <tr>‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ </tr>

                            <tr>‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ </tr>

                            <tr>
                                <th> ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ Premium Tennis Balls </th>
                                <th> ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ </th>
                                <th> $10 </th>
                            </tr>


                        </td>

                        <hr>





                    </div>
                    <div class="col-md-1">
                    </div>
                    <div class="col-md-4">
                        <img src="HockeyPuck.png" height=300 width=300>


                        <thead>

                            <tr>‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ </tr>

                            <tr>‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ </tr>

                            <tr>‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ </tr>



                            <tr>‎ ‎ ‎ </tr>

                            <tr>

                            <tr>‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ </tr>

                            <th> Ice Hockey Puck </th>
                            <th> ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎</th>
                            <th> $20 </th>
                            </tr>
                        </thead>

                        <hr>

                        <img src="MensBasketball.jpg" height=300 width=300>

                        <td>

                            <tr>‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ </tr>

                            <tr>‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ </tr>

                            <tr>‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ </tr>



                            <tr>‎ ‎ ‎ </tr>

                            <tr>

                            <tr>‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ </tr>

                        <th> Men's Basketball </th>
                        <th> ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎</th>
                        <th> $14 </th>
                        </tr>

                        </td>

                        <hr>

                        <img src="LaxStickHead.jpg" height=300 width=300>

                        <td>

                            <tr>‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ </tr>

                            <tr>‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ </tr>

                            <tr>‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ </tr>



                            <tr>‎ ‎ ‎ </tr>

                            <tr>

                            <tr>‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ </tr>

                        <th>Lax Stick Head </th>
                        <th> ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ </th>
                        <th> $45 </th>
                        </tr>

                        </td>

                        <hr>


                    </div>
                    <div class="col-md-4">
                        <img src="FootballHelmet.png" height=300 width=300>


                        <thead>

                            <tr>‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ </tr>

                            <tr>‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ </tr>

                            <tr>‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ </tr>



                            <tr>‎ ‎ ‎ </tr>

                            <tr>

                            <tr>‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ </tr>

                            <th> Football Helmet </th>
                            <th> ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎</th>
                            <th> $65 </th>

                        </thead>

                        <hr>

                        <img src="LaxHelmet.png" height=300 width=300>

                        <td>

                            <tr>‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ </tr>

                            <tr>‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ </tr>

                            <tr>‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ </tr>



                            <tr>‎ ‎ ‎ </tr>

                            <tr>

                            <tr>‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ </tr>

                        <th> Men's Lax Helmet </th>
                        <th> ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎</th>
                        <th> $75 </th>


                        </td>

                        <hr>


                        <img src="BaseballBat.jpg" height=300 width=300>

                        <td>

                            <tr>‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ </tr>

                            <tr>‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ </tr>

                            <tr>‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ </tr>



                            <tr>‎ ‎ ‎ </tr>

                            <tr>

                            <tr>‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ </tr>

                        <th> Men's Baseball Bat </th>
                        <th> ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎</th>
                        <th> $40 </th>

                        <hr>


                        </td>




                    </div>
                </div>
            </div>
        </div>
    </div>
    <table border="0.0000001">


        <hr>

        <div class="footer-dark">
            <footer>
                <div class="container">
                    <div class="row">
                        <div class="col-sm-6 col-md-3 item">
                            <h3>Services</h3>
                            <ul>
                                <li><a href="#">Web design</a></li>
                                <li><a href="#">Development</a></li>
                                <li><a href="#">Hosting</a></li>
                            </ul>
                        </div>
                        <div class="col-sm-6 col-md-3 item">
                            <h3>About</h3>
                            <ul>
                                <li><a hrefs="#">Company</a></li>
                                <li><a href="#">Team</a></li>
                                <li><a href="#">Careers</a></li>
                            </ul>
                        </div>
                        <div class="col-md-6 item text">
                            <h3> Valley Sports </h3>
                            <p> Valley Sports is a small local self proprietorship located within the heart of downtown Shakopee, Minnesota which specializes in providing essential athletic goods and products for the shakopee sabers and the community </p>
                        </div>
                        <div class="col item social"><a href="#"><i class="icon ion-social-facebook"></i></a><a href="#"><i class="icon ion-social-twitter"></i></a><a href="#"><i class="icon ion-social-snapchat"></i></a><a href="#"><i class="icon ion-social-instagram"></i></a></div>
                    </div>
                    <p class="copyright"> ValleySports © 2019</p>
                </div>
            </footer>
        </div>






</body>










</html>
