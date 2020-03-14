<!DOCTYPE html>
<html lang="en" >
<head>
  
<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
     <meta http-equiv="X-UA-Compatible" content="ie=edge"></meta>
     <meta name="description" content="Taarangana'20" />
  <meta name="keywords" content="Taarangana'20" />
  <meta name="author" content="Taarangana'20" />

  <meta property="og:site_name" content="Taarangana'20" />
       
  <meta property="og:description" content="Taarangana'20" />
  <meta property="og:title" content="Taarangana'20" />
  <meta property="og:type" content="website" />
  <meta property="og:url" content="http://taarangana.com/" />

  <meta property="twitter:card" content="summary" />
  <meta property="twitter:site" content="@taarangana.com" />
  <meta property="twitter:creator" content="@taarangana.com" />
  <meta property="twitter:url" content="http://taarangana.com/" />
  <!-- <meta property="twitter:image" content="avicon.png" /> -->
  <meta property="twitter:title" content="Taarangana 2020" />
  <meta property="twitter:description" content="Taaranagana'20" />
  <link rel="shortcut icon" href="../favicon1.png">
		 <link href="https://fonts.googleapis.com/css?family=Lobster&display=swap" rel="stylesheet">
		 <link href="https://fonts.googleapis.com/css?family=Cute+Font&display=swap" rel="stylesheet">
		 <link href='https://fonts.googleapis.com/css?family=Emilys Candy' rel='stylesheet'>
		    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <!--<link rel="stylesheet" type="text/css" href="../css/demo.css" />-->
  <!--<link rel="stylesheet" type="text/css" href="../css/game.css" />-->
  <!--<script type="text/javascript" src="../js/TweenMax.min.js"></script>-->
  <!--<script type="text/javascript" src="../js/three.min.js"></script>-->
  <!--<script type="text/javascript" src="../js/game.js" ></script>-->
  <!-- font awesome icons css -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">-->
  <!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>-->
  <!--<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>-->

  
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

</head>    
<body >
      <style>
      body{
          background:linear-gradient(to top, #2B7A78 35%, #78244C 100%);
          
      }
      *,
*:before,
*:after {
  box-sizing: border-box;
}
*, div *, h1 *, a *,p *,span *, .wrapper h1, .largewrapper h1{
  font-family: 'Emilys Candy';
}
.wrapper h1, .largewrapper h1{
  color:black;
}
/*body {
  margin: 40px;
  font-family: 'Open Sans', 'sans-serif';
  background-color:white;
  color: #444;
background-image: linear-gradient(-90deg,white,gray);
}*/
.TEXT {
    color: black;
    font-size: 60px;
    text-align: center;
    font-family: Emilys Candy;
  
}
@media (max-width: 768px) {
  .TEXT{
      font-size:25px;
  }
}
h1
 {
font-size: 1.3em;
text-align: center;
font-family: 'Playfair Display';

font-style: bolder;
}
.grid-container {
  margin: auto;
  display: grid;
  grid-template-columns: auto auto;
  padding: 10px;
}
.grid-item1 {
  /*background-color: rgba(255, 255, 255, 0.8);*/
  width: max-content;
  border: 2px solid white;
  border-radius: 5px;
  margin-left: auto;
  margin-right: 1%;
  padding: 2%;
  color: white;
  text-align: center;
  /*font-size: 30px;*/
}
.grid-item2 {
  /*background-color: rgba(255, 255, 255, 0.8);*/
  width: max-content;
  border: 2px solid white;
  border-radius: 5px;
  margin-left: 1%;
  margin-right: auto;
  padding: 2%;
  color: white;
  text-align: center;
  /*font-size: 30px;*/
}
.grid-item1:hover{
  background: #f1f1f1;
}
.grid-item2:hover{
  background: #f1f1f1;
}
.grid-container a{
  text-align: center;
}
.wrapper {
  max-width: 940px;
  margin: 0 20px;
  display: grid;
  grid-gap: 10px;
}
.largewrapper {
  max-width: 1140px;
  margin: 0 20px;
  display: grid;
  grid-gap: 10px;
  background : 
}


/* no grid support? */

.wrapper {
  display: flex;
  flex-wrap: wrap;
}
.largewrapper {
  display: flex;
  flex-wrap: wrap;
}
.wrapper {
  display: grid;
  margin:auto;
  grid-template-columns: repeat(auto-fill, minmax(200px, 1fr));
  grid-auto-rows: minmax(150px, auto);
}
.largewrapper {
  display: grid;
  margin:auto;
  grid-template-columns: auto;
  grid-auto-rows: minmax(150px, auto);
}

.card {
  /* needed for the flex layout*/
  padding:20px;
  flex: 1 1 200px;
}

.header {
 height:40%;
 width:100%;
  flex: 0 1 10%;
  grid-area: 1/1 /2/ -1;
  
 
}
.largewrapper > * {
  background-image: linear-gradient(-90deg,#DA789B,#7395AE);
  color: #fff;
  border-radius: 5px;
  padding: 20px;
  font-size: 130%;
  height: 400px;
  /*margin-bottom: 10px;*/
  margin: 10%;
}
.wrapper > * {
  background-image: linear-gradient(-90deg,#DA789B,#7395AE);
  color: #fff;
  border-radius: 5px;
  padding: 20px;
  font-size: 130%;
  /*margin-bottom: 10px;*/
  margin: 10%;
}
@media only screen and (min-width: 551px){
    body{
        background-size:cover;
    }
}
@media only screen and (max-width: 550px){
    body{
        background-size:auto;
    }
  .grid-container {
  margin: auto;
  display: grid;
  grid-template-columns: auto auto;
  padding: 5px;
}
.grid-item1 {
  /*background-color: rgba(255, 255, 255, 0.8);*/
  width: max-content;
  border: 1px solid white;
  border-radius: 5px;
  margin-right: 5px;
  padding: 1%;
  text-align: center;
  font-size: 0.8em;
}
.grid-item2 {
  /*background-color: rgba(255, 255, 255, 0.8);*/
  width: max-content;
  border: 1px solid white;
  border-radius: 5px;
  margin-right: 5px;
  padding: 1%;
  text-align: center;
  font-size: 0.8em;
}
.grid-container a{
  text-align: center;
}
}
@supports (display: grid) {
  /*.wrapper > * {
    margin: 0;
  }*/
}
      </style>

    
    <!-- <div class="spinner-wrapper">
   <div class="hameid-loader-overlay"></div>
<div class="sk-cube-grid">
  <div class="sk-cube sk-cube1"></div>
  <div class="sk-cube sk-cube2"></div>
  <div class="sk-cube sk-cube3"></div>
  <div class="sk-cube sk-cube4"></div>
  <div class="sk-cube sk-cube5"></div>
  <div class="sk-cube sk-cube6"></div>
  <div class="sk-cube sk-cube7"></div>
  <div class="sk-cube sk-cube8"></div>
  <div class="sk-cube sk-cube9"></div>
</div>
</div> -->
    
    
  <div class="game-holder" id="gameHolder" style="height:auto;background:none">
      <!-- <a href="../index.php"><img style="margin-left: 2%; float:right;margin-top:1%;" class="partisan__img" src="../img/favicon1.png" alt="logo"/></a> -->
      <br>
      <style>

.box {
  font-family: fantasy;
  text-align: center;
  width: 25%;
  left: 10%;
  min-width: 200px;
  display: block;
  height: 40px;
  position: relative;
  border-radius: 5px;
  background: linear-gradient(to right, #352020 35%, #da4545 100%);
  /*margin-bottom: 40px;
  padding: 15px 25px 0 40px;*/
  color: darkslategray;
  box-shadow: 1px 2px 1px -1px #777;
  transition: background 200ms ease-in-out;
  margin-bottom: 15px;
}

.shadow {
  position: relative;
}
.shadow:before {
  z-index: -1;
  position: absolute;
  content: "";
  bottom: 13px;
  right: 7px;
  width: 75%;
  top: 0;
  box-shadow: 0 15px 10px #777;
  -webkit-transform: rotate(4deg);
          transform: rotate(4deg);
  transition: all 150ms ease-in-out;
}

.box:hover {
  background: linear-gradient(to right, #da4545 0%, #da4545 100%);
}

.shadow:hover::before {
  -webkit-transform: rotate(0deg);
          transform: rotate(0deg);
  bottom: 20px;
  z-index: -10;
}
.sidenav {
  height: 100%;
  width: 0;
  position: fixed;
  z-index: 1;
  top: 0;
  left:0;
  background-color: #924f4f80;
  overflow-x: hidden;
  transition: 0.5s;
  padding-top: 60px;
}

.sidenav a {
  padding: 8px 8px 8px 32px;
  text-decoration: none;
  font-size: 25px;
  color: #d1b790;
  display: block;
  transition: 0.3s;
}

.sidenav a:hover {
  color: #f1f1f1;
}

.sidenav .closebtn {
  position: absolute;
  top: 0;
  right: 25px;
  font-size: 36px;
  margin-left: 50px;
}

@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}

@media screen and (min-width: 550px) {
  .game-holder{
    height: auto;
    
  }
  .grid-container{
      padding-top:6%;
      padding-left:2%;
  }
/*@media screen and (max-width: 540px) {
  .game-holder{
    height: 100%;
    position: fixed;
  }*/

}

</style>
    
      
      <?php 
      $color="black";
      include '../navbar.php';
    ?>
      
     <div class="TEXT">
       <h1 style="color: black;
    
    text-align: center;
    font-family: Emilys Candy;">SPONSORS</h1>
   </div>     
    <br>
    <br>
    <div class="grid-container">
  
      <div class="grid-item1" ><a style="text-decoration: none; color: black;outline: none;" href="sponsors.php">Current Sponsors</a></div>
      <div class="grid-item2" ><a style="text-decoration: none; color: black;outline: none;" href="sponsors2018.php">Previous Year Sponsors</a></div>
    </div>
    
    <h3 style="color:black; margin-bottom: -5%;text-align: center;">Current Year Sponsors</h3>
    <br><br>
	       

    <div class="largewrapper" style="max-width:800px;">
       <div class="card"><a href="#"><h1>Title Sponsor</h1><img src="sponsors2020/RIL-Growth-Horizontal-bkgd-Colour.jpg" style="width:100%; height:150px; "><br>
      <img src="sponsors2020/jio.png" style="width:100%; height:150px; "></a></div>
  </div>
  
  <br>
  <div class="largewrapper" style="max-width:640px;margin-top:-10%;">
      <div class="card"><a href="#"><h1>Co Sponsor</h1><img src="sponsors2020/FUSIAN LOGO-page-001.jpg" style="width:100%; height:200px; "></a></div>
  </div><br>
  <!-- <div class="largewrapper" style="max-width:640px;margin-top:-10%;">
      <div class="card"><a href="#"><h1>Swipe Right Partner</h1><img src="sponsors2020/tinder.png" style="width:100%; height:200px; "></a></div>
  </div><br> -->
 
        <div class="wrapper">
        <div class="card">
                <a href="#">
                    <h1> Event Partner</h1><img src="sponsors2020/tinder.png" style="width:100%">
                </a>
            </div>
            <div class="card">
                <a href="#">
                    <h1> Event Partner</h1><img src="sponsors2020/IMG-20180714-WA0007.png" style="width:100%">
                </a>
            </div>

            <div class="card">
                <a href="#">
                    <h1>Event  Partner</h1><img src="sponsors2020/logo-page0001.jpg" style="width:100%">
                </a>
            </div>

            <div class="card">
                <a href="#">
                    <h1> Event Partner</h1><img src="sponsors2020/IMG-20191218-WA0007.jpg" style="width:100%">
                </a>
            </div>

            <div class="card">
                <a href="#">
                    <h1> Event Partner</h1><img src="sponsors2020/TheVerb Full Logo (White Background).png" style="width:100%">
                </a>
            </div>

            <div class="card">
                <a href="#">
                    <h1> Event Partner</h1><img src="sponsors2020/PS.png" style="width:100%">
                </a>
            </div>

            <div class="card">
                <a href="#">
                    <h1>Event Partner </h1><img src="sponsors2020/Days of our lives.png" style="width:100%">
                </a>
            </div>

            <div class="card">
                <a href="#">
                    <h1>Hygiene Partner </h1><img src="sponsors2020/nine.png" style="width:100%">
                </a>
            </div>


            <div class="card">
                <a href="#">
                    <h1>Education Partner in IAS Category </h1><img src="sponsors2020/score.png" style="width:100%">
                </a>
            </div>

            <div class="card">
                <a href="#">
                    <h1>Education Partner in Coding Category </h1><img src="sponsors2020/images.png" style="width:100%">
                </a>
            </div>
            <div class="card">
                <a href="#">
                    <h1>Education Partner in Coding Category </h1><img src="sponsors2020/coding element.jpg" style="width:100%">
                </a>
            </div>

            <div class="card">
                <a href="#">
                    <h1>Travel Partner </h1><img src="sponsors2020/xeeders-white-backgroud-MobileApp-1024x500.jpg" style="width:100%">
                </a>
            </div>

            <div class="card">
                <a href="#">
                    <h1>Accessories Partner </h1><img src="sponsors2020/AYESHA LOGO.png" style="width:100%">
                </a>
            </div>

            <div class="card">
                <a href="#">
                    <h1>Fashion Partner </h1><img src="sponsors2020/Kazo transparent black.png" style="width:100%">
                </a>
            </div>

            <div class="card">
                <a href="#">
                    <h1>Vision Partner </h1><img src="sponsors2020/lensfit-couponspng-1537434355.png" style="width:100%">
                </a>
            </div>


            <div class="card">
                <a href="#">
                    <h1>Photography and After Movie Partner </h1><img src="sponsors2020/LRP (B) (1).png" style="width:100%">
                </a>
            </div>

            <div class="card">
                <a href="#">
                    <h1>Gift Partner </h1><img src="sponsors2020/RW Logo+Text-1.jpg" style="width:100%">
                </a>
            </div>

            <div class="card">
                <a href="#">
                    <h1>Gaming Partner </h1><img src="sponsors2020/smaash.png" style="width:100%">
                </a>
            </div>

            <div class="card">
                <a href="#">
                    <h1>Eco Friendly Partner </h1><img src="sponsors2020/TRISHULA FULL LOGO.png" style="width:100%">
                </a>
            </div>

            <div class="card">
                <a href="#">
                    <h1>Refreshment  Partner </h1><img src="sponsors2020/bikano.jpg" style="width:100%">
                </a>
            </div>

            <div class="card">
                <a href="#">
                    <h1> Ice Tea Partner</h1><img src="sponsors2020/Brewhouse Green (1).png" style="width:100%">
                </a>
            </div>

            <div class="card">
                <a href="#">
                    <h1> Publising  Partner</h1><img src="sponsors2020/srishti.png" style="width:100%">
                </a>
            </div>
            
            <div class="card">
                <a href="#">
                    <h1> Entertainment Partner</h1><img src="sponsors2020/comedy munch.jpg" style="width:100%">
                </a>
            </div>


            <div class="card">
                <a href="#">
                    <h1> Media Partner</h1><img src="sponsors2020/insightone.png" style="width:100%">
                </a>
            </div>
            <div class="card">
                <a href="#">
                    <h1> Digital Outreach Partner</h1><img src="sponsors2020/MintShint-Logo.png" style="width:100%">
                </a>
            </div>

            <div class="card">
                <a href="#">
                    <h1> Media Partner</h1><img src="sponsors2020/atkt.jpg" style="width:100%">
                </a>
            </div>
            <div class="card">
                <a href="#">
                    <h1> Digital Outreach Partner</h1><img src="sponsors2020/RW.png" style="width:100%">
                </a>
            </div>
            <div class="card">
                <a href="#">
                    <h1> Youth Media Partner</h1><img src="sponsors2020/the education tree.jpg" style="width:100%">
                </a>
            </div>
           
            <div class="card">
                <a href="#">
                    <h1> Testing Partner</h1><img src="sponsors2020/URS_LOGO.png" style="width:100%">
                </a>
            </div>
            <div class="card">
                <a href="#">
                    <h1> Banking Partner</h1><img src="sponsors2020/central-bank-of-india-logo.png" style="width:100%">
                </a>
            </div>


            <!--<div class="card"><a href="#"><h1> </h1><img -->
            <!--src="currentyear/iC4T6Eet.png" style="width:100%"></a></div>-->

         


            <div class="card">
                <a href="#">
                    <h1>Food Partner </h1><img src="sponsors2020/Main logo-1.jpg" style="width:100%">
                </a>
            </div>



            <div class="card">
                <a href="#">
                    <h1>Food Partner </h1><img src="sponsors2020/picture.png" style="width:100%">
                </a>
            </div>

            <div class="card">
                <a href="#">
                    <h1> Food Partner</h1><img src="sponsors2020/friends.png" style="width:100%">
                </a>
            </div>

            <div class="card">
                <a href="#">
                    <h1>Food Partner </h1><img src="sponsors2020/ChineseInn.jpg" style="width:100%">
                </a>
            </div>

            <div class="card">
                <a href="#">
                    <h1>Stationery Partner </h1><img src="sponsors2020/Fangled.jpg" style="width:100%">
                </a>
            </div>


            <div class="card">
                <a href="#">
                    <h1> Food Partner</h1><img src="sponsors2020/la glorium chariot.jpg" style="width:100%">
                </a>
            </div>


            <div class="card">
                <a href="#">
                    <h1>Steady Stationery Partner </h1><img src="sponsors2020/steady stationery.jpg" style="width:100%">
                </a>
            </div>


            <div class="card">
                <a href="#">
                    <h1>Food Partner </h1><img src="sponsors2020/F for fries.jpg" style="width:100%">
                </a>
            </div>


            <div class="card">
                <a href="#">
                    <h1>Handloom Partner </h1><img src="sponsors2020/sozy logo.png" style="width:100%">
                </a>
            </div>


            <div class="card">
                <a href="#">
                    <h1>Food Partner </h1><img src="sponsors2020/BabuManiCaterers.jpg" style="width:100%">
                </a>
            </div>


            <div class="card">
                <a href="#">
                    <h1>Tatoo Partner </h1><img src="sponsors2020/mickey ink tattoo.jpg" style="width:100%">
                </a>
            </div>

            <div class="card">
                <a href="#">
                    <h1>Cookie Partner </h1><img src="sponsors2020/the fat cookie club.jpg" style="width:100%">
                </a>
            </div>
            <div class="card">
                <a href="#">
                    <h1> Blogging Partner</h1><img src="sponsors2020/img.png" style="width:100% ">
                </a>
            </div>
            
            
            
            

            
            
          </div>
         
          





    <!-- <div class="partisan">
      <svg class="partisan__bg" viewBox="0 0 500 188" preserveAspectRatio="none" width="100%" height="100%" aria-hidden="true">
        <polygon points="0 154 123.39 0 235.78 14.79 365.6 28.9 436.24 114.93 500 188 0 188 0 154" fill="#bed730"/>
        <polygon points="0 188 108.84 18.17 347.91 26.79 500 188 365.6 28.9 123.39 0 0 154 0 188" fill="#dde465"/>
      </svg>
      <a class="partisan__link" href="#" rel="nofollow">
        <img class="partisan__img" src="img/favicon1.png" >
        <a href="https://www.facebook.com/taarangana/" ><i style="font-size:36px; margin-left: 9px; color:white" class="fa fa-facebook"></i></a>
        <a href="https://www.instagram.com/taarangana/?hl=en" ><i style="font-size:36px;margin-left: 8px;color:white" class="fa fa-instagram"></i></a>
        <a href="https://twitter.com/_taarangana?lang=en" ><i style="font-size:36px;margin-left: 8px;color:white" class="fa fa-twitter"></i></a>
        <a href="https://www.youtube.com/channel/UC_qCTCCcOK8eFATY791zCnw" ><i style="font-size:36px;margin-left: 8px;color:white" class="fa fa-youtube"></i></a>

        <h3 class="partisan__title">lorem</h3>
      </a>
    </div> -->
    </div>
    
    <!-- <script>
$(document).ready(function() {
//Preloader
$(window).on("load", function() {
preloaderFadeOutTime = 300;
function hidePreloader() {
var preloader = $('.spinner-wrapper');
preloader.fadeOut(preloaderFadeOutTime);
}
hidePreloader();
});
});
</script> -->

    </body>
</html>