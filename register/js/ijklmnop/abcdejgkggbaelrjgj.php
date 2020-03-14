<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">
  <title>Taarangana'19</title>
  
  <meta name="description" content="Taarangana'19" />
        <meta name="keywords" content="Taarangana'19" />
        <meta name="author" content="Taarangana'19" />
      
        <meta property="og:site_name" content="Taarangana'19" />
       
    <meta property="og:description" content="Taarangana'19" />
    <meta property="og:title" content="Taarangana'19" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="http://taarangana.com/" />
    <link rel="shortcut icon" href="../favicon1.png">
  <link rel="stylesheet" href="css/styleModal.css">  
</head>
<body>
<?php
error_reporting('E_ALL ^ E_NOTICE');

$servername = "localhost";
$username = "taarangana";
$password = "@WeAllR1";
$db = "taaranganadb";

$conn = mysqli_connect($servername, $username, $password, $db);

if (mysqli_connect_errno()){
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

if(isset($_POST['submit'])){

	$name = mysqli_real_escape_string($conn,$_POST['fname']);
	$email = mysqli_real_escape_string($conn,$_POST['email']);
	$college= mysqli_real_escape_string($conn,$_POST['college']);	
	$contactNo= mysqli_real_escape_string($conn,$_POST['contact']);
	$event = mysqli_real_escape_string($conn,$_POST['ID_Proof']);
	$noOfParti = mysqli_real_escape_string($conn,$_POST['ID_Proof_NO']);

	$q=mysqli_query($conn,"select * from signup where Email='".$email."' and Contact='".$contactNo."' ") or die(mysqli_error());
	$n=mysqli_fetch_row($q);

	if($n>0){
		$sql = mysqli_query($conn, "select * from egiste where Email='" .$email. "' and ID_Proof_NO='" .$noOfParti. "'") or die(mysqli_error());

		if(mysqli_fetch_row($sql)>0){
			$er='You have already registered for Zakir Khan Show using the given ID and password';
			echo "<script>alert('$er')</script>";
			header("refresh:0,pronight.php");
		}else{
		    
			$insert=mysqli_query($conn,"insert into egiste(Name,Email,College,Contact,ID_Proof,ID_Proof_NO) values('".$name."','".$email."','".$college."','".$contactNo."','".$event."','".$noOfParti."')") or die(mysqli_error());

			if($insert){
				$er='Thank You! You have successfully registered for Zakir Khan Show. Take screenshot of the Pass.';
				echo "<script>alert('$er')</script>";
				
?>
				<!-- Modal screen for event register -->

		<div id="modal-guess" class="modal-guess">
	        <div class="modal-guess__inner">
	            <div class="modal-guess__inner-border">
	                <div class="modal-guess__top">
	                    <span id="modal-guess__close"><a href="pronight.php" style="font-size: calc(14px + (22 - 14) * ((100vw - 300px) / (1400 - 300)));;color:white;text-decoration:none" >X</a></span>
	                </div>
	                <div class="modal-guess__middle">
	                    <p class="modal-guess__text"><?php 
	                	$result =mysqli_query($conn,"select Sno from egiste where Email='" .$email. "' and ID_Proof_NO='" .$noOfParti. "'") or die(mysqli_error());;
						$row = mysqli_fetch_array($result);		
	                	echo $row['Sno']; ?></p>
	                    
	                    
	                    <h2 class="modal-guess__title">TAARANGANA 2k19</h2>
	                    <h2 class="modal-guess__title" id="sub-title">Rewind: Back to 90s</h2>
	                    <p class="modal-guess__text">31st Jan 2019<br>
	                    	<span class="event-name" style="color:yellow;font-style:underline;font-weight:bolder;"><u>Pass For Comedy Night</u></span><br>
	                    	<p id="student-detail-phone">
	                    	Name: <span style="word-break: break-all"><?php echo $name ?></span><br>
	                    	Email ID: <span style="word-break: break-all"><?php echo $email ?></span><br>
	                    	Contact No: <?php echo $contactNo ?><br>
	                    	College: <span style="word-break: break-all"><?php echo $college ?></span><br>
	                    	ID Proof: <?php echo $event ?><br>
	                    	ID Proof No: <?php echo $noOfParti ?><br>
	                    	</p>
	                    	<span class="note">NOTE: PLEASE TAKE A SCREENSHOT OF THIS. <b>BRING YOUR ID PROOF AND COLLEGE ID AT THE TIME OF ENTRY, FOR VERIFICATION.</b></span>
	                                        	
	                    </p>
	                </div>
	            </div>
	        </div>
	    </div>  

	    <script  src="js/indexModal.js"></script>

	<!-- modal screen end -->

<?php
	
			}
		        
		    else{
				$er='Registration for Zakir Khan Show unsuccessful. Please try again.';
				echo "<script>alert('$er')</script>";
				header("refresh:0,pronight.php");
			}
		  
		}
	}else{
		
		$er='Sign up before registration for the Zakir Khan Show.';
		echo "<script>alert('$er')</script>";									
		header("refresh:0,signup.php");		
	}
}else{
		$er='Please try again later';
		echo "<script>alert('$er')</script> ";
		header("refresh:0,pronight.php");
}

?>

</body>
</html>