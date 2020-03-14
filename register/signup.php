<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>Taarangana'20</title>
  <meta name="viewport" content="width=device-width,initial-scale=1.0">
  
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

  
  
  <link href='https://fonts.googleapis.com/css?family=Emilys Candy' rel='stylesheet'>
  <link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,300,300italic' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <link rel="stylesheet" href="css/style.css">
  <script src='https://www.google.com/recaptcha/api.js'></script>

</head>
<style>
body{
    background:url('tri.png');
}
 *, div *, h1 *, a *,p *,span *{
  font-family: 'Emilys Candy';
}
	input, optgroup, select, textarea {
    font-family: sans-serif;
    font-size: 100%;
    /*line-height: 1.15;*/
    margin: 0;
	}
	.text-input, .button {
	    box-sizing: border-box;
	    padding: 0.2em 0.3em;
	    width:100%;
	    
	}
	
	#rc-imageselect {
    transform:scale(0.66);
    -webkit-transform:scale(0.66);
    transform-origin:0 0;
    -webkit-transform-origin:0 0;
}

@media screen and (min-width: 551px){
	#signup-heading{
		margin-left:43%;
	}
	#note-signup{
  	font-size: calc(17px + (24 - 17) * ((100vw - 300px) / (1400 - 300)));
  	font-family:sans-serif;
  	color:white;
  	margin-left:15%;
 	}
  
}	
@media screen and (max-width: 550px) {
  .sign-up-container {
  	margin-top:1em;
  	margin-left:0.5em;
  }	
  .paper{
    margin: 70px auto;
  }
  .envelope {
    position: relative;
    width: 330px;
    height: 250px;
    margin-top: -5%;
    background: #ec613d;
    border-radius: 24px;
    
  }
  .envelope:before {
    content: '';
    display: block;
    position: absolute;
    top: -201px;
    
    z-index: -1;
    border-width: 100px 165px;
    border-color: transparent;
    border-style: solid;
    border-bottom-color: #ec613d;
    border-radius: 24px;
  }
  .envelope:after {
    content: '';
    display: block;
    position: absolute;
    bottom: 0;
    
    pointer-events: none;
    border-width: 100px 160px;
    border-style: solid;
    border-color: #ec613d;
    border-top-color: transparent;
    border-radius: 24px;
  }
  #signup-heading{
		margin-left:30%;
		font-family: 'Emilys Candy';
	}
  #note-signup{
  	font-size: calc(17px + (24 - 17) * ((100vw - 300px) / (1400 - 300)));
  	font-family:sans-serif;
  	color:white;
  	margin-left:8%;
  	margin-top:3%;
  }
  
    #rc-imageselect, .g-recaptcha {
        transform:scale(0.55, 0.77);
        -webkit-transform:scale(0.55,0.77);
        transform-origin:0 0;
        -webkit-transform-origin:0 0;
    }

}


</style>
<body>

    <?php 
      $color="black";
      include '../navbar.php';
    ?>
    <style>
      .overlay a
      {
        font-size: 2em;
      }
    </style>

<br>
<h1 style="font-size:40px;font-family:'Emilys Candy';text-align: center;color:black;"> Sign Up! </h1>

  <br>
<div class="sign-up-container submitted">
  <div class="envelope">
    <div class="paper">
        
<form  action="confirm.php" name="signup" method="POST">

 		<input class="text-input" type="name" pattern="^[a-zA-Z ]*$" name="name" id="name" placeholder="Name" required />
        <input class="text-input" type="email" pattern="^[a-zA-Z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" name="email" placeholder="Email ID" required />
        <input class="text-input" type="text" pattern="^[a-zA-Z ]*$" name="college" placeholder="College" required />
        <input class="text-input" type="text" maxlength="1" pattern="[1-5]{1}$" title="1/2/3/4/5" name="year" placeholder="Year" required />
        <input class="text-input" type="text" maxlength="10" pattern="^[6-9]{1}[0-9]{9}$" name="contact" placeholder="Contact No" required/>
        <input class="text-input" type="password" name="pass" placeholder="Password" required />
        <div class="g-recaptcha" id="rc-imageselect" data-sitekey="6Le2h4gUAAAAAOMpJLaZczEm-cekGmtFSNeVINoj"></div>
       <input name="submit" type="submit" value="Sign Up">
</form>
    </div>
  </div>
</div>

<br>
<p id="note-signup">
Note: Make sure to take a screenshot of the pass generated after signup!

</p>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

  <script  src="js/index.js"></script>
</body>
</html>
