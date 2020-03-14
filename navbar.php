<!DOCTYPE html>
<html lang="">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Cute+Font&display=swap" rel="stylesheet">
</head>


<body>
    <style>
        .logo {
            position: fixed;
            left: 5px;
            opacity: 1;

            z-index:1000;
        }
        
        .logo img {
            width: 75px;
        }
        
        .overlay {
            height: 0%;
            width: 100%;
            position: fixed;
            z-index: 1000;
            top: 0;
            left: 0;
            background-color: rgb(0, 0, 0);
            background-color: rgba(0, 0, 0, 0.9);
            overflow-y: hidden;
            transition: 0.5s;
        }
        
        .overlay-content {
            position: relative;
            width: 100%;
            text-align: center;
            margin-top: 20px;
        }
        
        .overlay a {
            padding: 5px;
            text-decoration: none;
            font-size: 2.5em;
            line-height: initial;
            color: #818181;
            display: block;
            transition: 0.3s;
            font-family: 'Emilys Candy';
        }
        
        .overlay a:hover,
        .overlay a:focus {
            color: #fff;
        }
        
        .hamburger {
            display: inline-block;
            cursor: pointer;
            position: fixed;
            right: 50px;
            z-index: 1000 !important;
            top: 40px;
        }
        
        .bar1,
        .bar2,
        .bar3 {
            width: 35px;
            height: 5px;
            background-color: <?php echo $color; ?>;
            margin: 6px 0;
            transition: 0.4s;
        }
        /* Rotate first bar */
        
        .change .bar1 {
            -webkit-transform: rotate(-45deg) translate(-9px, 6px);
            transform: rotate(-45deg) translate(-9px, 6px);
            background-color: white;
        }
        /* Fade out the second bar */
        
        .change .bar2 {
            opacity: 0;
        }
        /* Rotate last bar */
        
        .change .bar3 {
            background-color: white;
            -webkit-transform: rotate(45deg) translate(-8px, -8px);
            transform: rotate(45deg) translate(-8px, -8px);
        }
        
        @media only screen and (max-width: 768px) {
            /* For mobile phones: */
            .hamburger {
                right: 30px;
                top: 20px;
            }
            .overlay {
                overflow-y: auto;
            }
            .overlay-content{
                margin-top: 40px;
            }
            
        }
        
        
    </style>
    <a href="http://www.taarangana.com/" class="logo">
        <img src="../favicon1.png" />
    </a>

    <div id="myNav" class="overlay">

        <div class="overlay-content">
            <a href="../register/signup.php">REGISTER</a>
            <a href="../event/PrimeEvents.php">EVENTS</a>
            <a href="../pronight/pronight.php">PRONITE</a>
            <a href="../schedule/schedule.php">SCHEDULE</a>
            <a href="../Gallery/gallery.php">GALLERY</a>
            <a href="../sponsors/sponsors.php">SPONSORS</a>
            <a href="../comingsoon/comingsoon.php">TEAM</a>
            <a href="../aboutUs/aboutus.php">ABOUT US</a>
        </div>
    </div>
    <div class="hamburger" onclick="openNav(this)">
        <div class="bar1"></div>
        <div class="bar2"></div>
        <div class="bar3"></div>
    </div>

    <script>
        function openNav(x) {

            if ($('#myNav').height() == 0)
                $('#myNav').height('100%');
            else
                $('#myNav').height('0%');

            x.classList.toggle("change");
        }
    </script>



</body>

</html>