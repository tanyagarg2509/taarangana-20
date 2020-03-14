<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>Taarangana'19</title>
  
  <meta name="description" content="Taarangana'19" />
        <meta name="keywords" content="Taarangana'19" />
        <meta name="author" content="Taarangana'19" />
      
        <meta property="og:site_name" content="Taarangana'19" />
       
    <meta property="og:description" content="Taarangana'19" />
    <meta property="og:title" content="Taarangana'19" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="http://taarangana.com/" />

    <meta property="twitter:card" content="summary" />
    <meta property="twitter:site" content="@taarangana.com" />
    <meta property="twitter:creator" content="@taarangana.com" />
    <meta property="twitter:url" content="http://taarangana.com/" />
    <!-- <meta property="twitter:image" content="avicon.png" /> -->
    <meta property="twitter:title" content="Taarangana 2019" />
    <meta property="twitter:description" content="Taaranagana'19" />
    <link rel="shortcut icon" href="../favicon1.png">

  
  <link href='https://fonts.googleapis.com/css?family=Emilys Candy' rel='stylesheet'>
  <link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,300,300italic' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <meta name="viewport" content="width=device-width,initial-scale=1.0">
      <link rel="stylesheet" href="css/style.css">
      <script src='https://www.google.com/recaptcha/api.js'></script>
                   
</head>
<style>
 *, div *, h1 *, a *,p *,span *{
  font-family: 'Emilys Candy';
}
body{
    background:url('tri.png');
}
	input, optgroup, select, textarea {
    font-family: sans-serif;
    font-size: 100%;
    line-height: 1.5;
    margin: 0;
	}
	.text-input, .button {
	    box-sizing: border-box;
	    padding: 0.2em 0.3em;
	    width:100%;
	    
	}
	select{

	  box-sizing: border-box;
	  padding: 0.2em 0.3em 0.2em;
	  margin-bottom: 0.5rem;
	  background: transparent;
	  border: none;
	  width: 100%;
	  border-radius: 2em;
	  outline: none;
	  background: rgba(98, 101, 127, 0.12);
    color: #886f37;
}
	
	@media screen and (max-width:440px){
		.paper{
		width:80%;
		
		}
	
	}
	@media screen and (max-width: 549px){
		#faq-register{
			font-size: calc(18px + (24 - 18) * ((100vw - 300px) / (1400 - 300)));
			font-family:sans-serif;
			color:white;
			margin-left:10%;
			margin-right:10%;
			margin-top:-80%;
		}
		#note-register{
			font-size: calc(18px + (24 - 18) * ((100vw - 300px) / (1400 - 300)));
			font-family:sans-serif;
			color:white;
			margin-left:10%;
			margin-top:2%;
		}
	}
	@media screen and (min-width: 550px){
		#faq-register{
			font-size: calc(18px + (24 - 18) * ((100vw - 300px) / (1400 - 300)));
			font-family:sans-serif;
			color:white;
			margin-left:15%;
			margin-right:10%;
			margin-top:-20%;
		}
		#note-register{
			font-size: calc(18px + (24 - 18) * ((100vw - 300px) / (1400 - 300)));
			font-family:sans-serif;
			color:white;
			margin-left:25%;
			margin-top:2%;
		}
	}
	
	@media screen and (min-width:450px){
		.paper{
		width:35%;
		}
	
	}
	
</style>
<body>
<button style="font-size: calc(18px + (24 - 18) * ((100vw - 300px) / (1400 - 300)));margin-left:2%;margin-top:5%; color:white; background:transparent;"><a href="http://www.taarangana.com" style="color:white"><i class="fa fa-home"></i></a></button>
<!-- <span style="font-size:30px;cursor:pointer; color:white; margin-left:2%;margin-top:5%; " >&#9776;</span> -->
<p style="font-size: calc(40px + (55 - 40) * ((100vw - 300px) / (1400 - 300)));font-weight:500;font-family:'Emilys Candy';color:white;margin-left:25%;margin-top:-5%"> Registration Closed For Comedy Night </p>
<p id="note-register">It's necessary to signup before registering for Comedy Night.<br> To signup,  


<a href="signup.php" style="text-decoration:none;color:red;font-family:sans-serif">Click here!</a>
<br>
FAQ's:  The Email ID and Contact No that you have used while<br> signing up are your Registered Email ID and Contact No.<br>
</p>
<div class="sign-up-container" style="margin-top:2em">
<div class="paper" style="align:inline; ">
<form action="#" name="firstSubmit" method="POST">

 <input class="text-input" type="text" pattern="^[a-zA-Z ]*$" name="fname" id="fname" placeholder="Name" required="" /><br>
        <input class="text-input" type="email" pattern="^[a-zA-Z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" name="email" placeholder="Registered Email ID" required="" /><br>
        <!--<input class="text-input" type="text" name="pass" placeholder="Password" required="" /><br>-->
        <input class="text-input" type="text" pattern="^[a-zA-Z ]*$" name="college" placeholder="College" required="" /><br>		 
		<input class="text-input" type="tel" maxlength="10" pattern="^[0-9]{10}$" name="contact" placeholder="Registered Contact No"required /><br>
        <span class="events-list">
								<!--<label>Events</label>-->
								<select name="ID_Proof" style="  font-style: italic;">
									<option value="none" selected="" disabled="">Select ID Proof</option>
									<!--<option value="Antraa">Antraa</option>-->
									<!--<option value="Anhad">Anhad</option>-->
									<!--<option value="Aaghaz">Aaghaz</option>-->
									<!--<option value="Lilac dreams">Lilac dreams</option>-->
									<!--<option value="Mr. & Ms. Taarangana">Mr. & Ms. Taarangana</option>-->
									<!--<option value="Knights of the fall">Knights of the fall</option>-->
									<!--<option value="Slam poetry">Slam poetry</option>-->
									<!--<option value="Pop art">Pop art</option>-->
									<option value="aadhar">Aadhar Card</option>
									<option value="pan_card">Pan Card</option>
									<option value="driving_license">Driving License</option>
									<option value="driving_license">Voter Id</option>
									<!--<option value="Quillography">Quillography</option>-->
									<!--<option value="Synnove">Synnove</option>-->
									<!--<option value="Urban thump">Urban thump</option>-->					
								</select>
							</span><!-- <br><br> -->
		
       <input class="text-input" type="text" name="ID_Proof_NO" placeholder="Id Proof Number" required /><br> 
       <div class="g-recaptcha" id="rc-imageselect" data-sitekey="6Le2h4gUAAAAAOMpJLaZczEm-cekGmtFSNeVINoj"></div>
       <input name="submit" type="submit" value="Register" style="margin-left:30%; margin-top:0.5em" disabled>
      </form>

    </div>
</div>
<p id="faq-register"> FAQ's:  The Email ID and Contact No that you have used while signing up are your registered email id and contact. </p>

  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

  

    <script  src="js/index.js"></script>




</body>

</html>
