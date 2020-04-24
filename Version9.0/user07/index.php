
<?php
$apiKey = "c6c392094e20cc3529492dce4f650f39"; //You will need to add in the 
$cityId = "5046997"; //5046997 Shakopee City Id
$units = "imperial";//metric-Celcius  imperial-Farhenheit
if ($units == 'metric'){//Changes the $temp varaible to match 
    $temp = "C";
    

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
?>

<html lang="en">
<!--Version 7.0 
	Name:
	Date Completed:
    -->

<head>

    <!-- Bootstrap meta data -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="SHS WebDev Bootstrap sample">

    <!-- Bootstrap core JS -->
    <!-- These are needed to get the responsive menu to work -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        td {
            color: #FF0000;
        }

    </style>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="SHS WebDev Menu Sample">

    <title>Elena Gause Web Page </title>

    <!-- Bootstrap core JS -->
    <!-- These are needed to get the responsive menu to work -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script src="jquery-1.7.1.js"></script>
    <script>
        jQuery('ul li h1').addClass('emphasis');
        $('ul li').addClass('emphasis');

    </script>
    <script src="https://ajax.googleliapis.com/ajax/libs/jquery/1.7.1/jquery.js"></script>


    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="CSS/SampleCSS.css" rel="stylesheet" type="text/css">



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

        .demo-content {
            padding: 15px;
            font-size: 18px;
            background: #dbdfe5;
            margin-bottom: 15px;
        }

        .demo-content.bg-alt {
            background: #abb1b8;
        }

        .bs-example {
            margin: 20px;
        }

        .table-striped tbody tr:nth-of-type(odd) {
            background-color: rgba(255, 0, 0, 0.5);
        }

    </style>
</head>
<font color="pink"></font>

<body style="background-image: url(https://www.xmple.com/wallpaper/single-one-colour-red-solid-color-plain-1125x2436-c-fac2b5-f-24.svg)">
    <div class="menu">

        <nav class="navbar navbar-expand-md navbar-dark bg-dark">
            <a href="http://shakonet.isd720.com" class="navbar-brand">Cooking 101</a>
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav">
                    <!---------------------------------- Edit These Items in your Menu ------------->
                    <a href="index.html" class="nav-item nav-link active">Home</a>
                    <a href="recipes.html" class="nav-item nav-link " tabindex="-1">Recipes</a>
                    <a href="sources.html" class="nav-item nav-link" tabindex="-2">Sources</a>
                    <a href="ingredients.html" class="nav-item nav-link" tabindex="-2">Ingredients</a>
                    <a href="measurements.html" class="nav-item nav-link" tabindex="-2">Measurements</a>
                    <a href="display.html" class="nav-item nav-link" tabindex="-2">Food Display</a>
        
                    <a href="aboutme.html" class="nav-item nav-link">About Me</a>
                    <!----------------------------------^ Edit These Items in your Menu ^ ------------->
                </div>
                <div class="navbar-nav ml-auto">
                     <a href="login.php" class="nav-item nav-link">Login</a>
                    <a href="logout.php" class="nav-item nav-link">Log out</a>
                </div>
            </div>
        </nav>
    </div>

    <div class="wideMargin" id="content">

    <style>
img {
  border-radius: 10%;
}
</style>
<body>
    
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
    
    

</body>    <center><h1> All about Cooking and Baking! Check the weather above to see if you should have a picnic!</h1></center>

<side><image src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcTn4BKUhbwPaNR5XJX57NqwFGFxZkEyBDv-mHuaS5kBuXHTJO0%3Ahttps%3A%2F%2Fpreviews.123rf.com%2Fimages%2Fzakiroff%2Fzakiroff1509%2Fzakiroff150900129%2F45327869-food-collage-from-photos-of-different-breakfast.jpg&usqp=CAU" width="500" height="300" alt="Food Collage" image>
  
    <div>



        <a href='recipes.html'><button class="buttonimg">Click Here To Find Recipes</button></a>
    </div>
    <div>
  

    </div>
    <div>
        <div>
            <a href='ingredients.html'><button class="buttonimg">Click Here for Info on Ingredients</button></a>
        </div>
        <div>
              <a href='measurements.html'><button class="buttonimg">Click Here to Learn about Measurements</button></a>
            <a href='display.html'><button class="buttonimg">Click Here To Learn About Food Display</button></a>
        </div>

        <a href='aboutme.html'><button class="buttonimg">Click Here to Learn More About Me</button></a>
    </div>


<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Footer Example</title>


    <!-- JavaScript -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

</head>

<body>
   




     


    <footer class="footer">
        <div class="container">
            <p>© Cooking101 | Privacy Policy | Terms of Service</p>
        </div>
    </footer>


</body>
