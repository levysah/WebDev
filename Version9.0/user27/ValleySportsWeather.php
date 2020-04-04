<?php
$apiKey = "776ada0626f9d7e6ff966e75ae0cc003"; //You will need to add in the 
$cityId = "5046997"; //5046997 Shakopee City Id
$units = "imperial";//metric-Celcius  imperial-Farhenheit
if ($units == ' imperial'){//Changes the $temp varaible to match 
    $temp = "F";
}
else {
    $temp = "F";
}



$googleApiUrl = "http://api.openweathermap.org/data/2.5/weather?id=" . $cityId . "&lang=en&units=" . $units . "&APPID=" . $apiKey;

$ch = curl_init();

curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_URL, $googleApiUrl);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_VERBOSE, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
$response = curl_exec($ch);

curl_close($ch);
$data = json_decode($response);
$currentTime = time();


session_start();

?>

<!doctype html>
<html>

<head>
    <title></title>

    
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

    <link rel="stylesheet" href="ValleySportsJS.js">



    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="ValleySports.css">
    <link rel='icon' href="VSimage.png" type="image">


    
    
    
    <style>
        body {
            font-family: Arial;
            font-size: 0.95em;
            color: #929292;
        }

        .report-container {
            border: #E0E0E0 1px solid;
            padding: 20px 40px 40px 40px;
            border-radius: 2px;
            width: 550px;
            margin: 0 auto;
        }

        .weather-icon {
            vertical-align: middle;
            margin-right: 20px;
        }

        .weather-forecast {
            color: #212121;
            font-size: 1.2em;
            font-weight: bold;
            margin: 20px 0px;
        }

        span.min-temperature {
            margin-left: 15px;
            color: #929292;
        }

        .time {
            line-height: 25px;
        }
        
        
.footer-dark {
  padding:50px 0;
  color:#f0f9ff;
  background-color:#282d32;
}

.footer-dark h3 {
  margin-top:0;
  margin-bottom:12px;
  font-weight:bold;
  font-size:16px;
}

.footer-dark ul {
  padding:0;
  list-style:none;
  line-height:1.6;
  font-size:14px;
  margin-bottom:0;
}

.footer-dark ul a {
  color:inherit;
  text-decoration:none;
  opacity:0.6;
}

.footer-dark ul a:hover {
  opacity:0.8;
}

@media (max-width:767px) {
  .footer-dark .item:not(.social) {
    text-align:center;
    padding-bottom:20px;
  }
}

.footer-dark .item.text {
  margin-bottom:36px;
}

@media (max-width:767px) {
  .footer-dark .item.text {
    margin-bottom:0;
  }
}

.footer-dark .item.text p {
  opacity:0.6;
  margin-bottom:0;
}

.footer-dark .item.social {
  text-align:center;
}

@media (max-width:991px) {
  .footer-dark .item.social {
    text-align:center;
    margin-top:20px;
  }
}

.footer-dark .item.social > a {
  font-size:20px;
  width:36px;
  height:36px;
  line-height:36px;
  display:inline-block;
  text-align:center;
  border-radius:50%;
  box-shadow:0 0 0 1px rgba(255,255,255,0.4);
  margin:0 8px;
  color:#fff;
  opacity:0.75;
}

.footer-dark .item.social > a:hover {
  opacity:0.9;
}

.footer-dark .copyright {
  text-align:center;
  padding-top:24px;
  opacity:0.3;
  font-size:13px;
  margin-bottom:0;
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
                        <a href="ValleySportsApparel.html" class="nav-item nav-link active dropdown-toggle" id='navbardrop' data-toggle='dropdown' tabindex="-1" onmouseover="style.color='red'" onmouseout="style.color='white'">| Apparel |</a>
                        <div class="dropdown-menu color-black">
                            <a class="dropdown-item" href='ValleySportsApparel.php'>Men</a>
                            <a class="dropdown-item" href='ValleySportsApparel.php'>Women</a>
                            <a class="dropdown-item" href='ValleySportsApparel.php'>Kids</a>
                        </div>
                    </div>


                    <div class="dropdown">
                        <a href="ValleySportsEquipment.html" class="nav-item nav-link active dropdown-toggle" id='navbardrop' data-toggle='dropdown' tabindex="-1" onmouseover="style.color='red'" onmouseout="style.color='white'">| Equipment |</a>
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
                    <?php if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
                    echo "<a href='logout.php' class='nav-item nav-link btn-danger' onclick='return confirm(\"Are you sure?\");'> Logout </a>";
                    } else { echo "<a href='login.php' class='nav-item nav-link'> Login </a>";} ?>
                </div>
            </div>
        </nav>
    </div>

    <!---------------------------------- End the nav-bar ------------->



    <header>
        <h2> THE VALLEY WELCOMES <?php if(isset($_SESSION["loggedin"]) === false){
        echo YOU;
        } 
            else { echo  htmlspecialchars($_SESSION["username"]); }?>
             </h2>

    </header>
    
    

    <div class="report-container">
        <h2><?php echo $data->name; ?> Weather Status</h2>
        <div class="time">
            <div><?php echo date("l g:i a", $currentTime); ?></div>
            <div><?php echo date("jS F, Y",$currentTime); ?></div>
            <div><?php echo ucwords($data->weather[0]->description); ?></div>
        </div>
        <div class="weather-forecast">
            <img src="http://openweathermap.org/img/w/<?php echo $data->weather[0]->icon; ?>.png" class="weather-icon" /> <?php echo $data->main->temp_max; ?>&deg;<?php echo $temp; ?><span class="min-temperature"><?php echo $data->main->temp_min; ?>&deg;<?php echo $temp; ?></span>
        </div>
        <div class="time">
            <div>Humidity: <?php echo $data->main->humidity; ?> %</div>
            <div>Wind: <?php echo $data->wind->speed; ?> km/h</div>
        </div>
    </div>


</body>

</html>
