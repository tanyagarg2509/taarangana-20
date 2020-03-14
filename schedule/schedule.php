<!DOCTYPE html>
<html>
    <head>
        <title>SCHEDULE</title>
       
      	<meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    		<link href='https://fonts.googleapis.com/css?family=Emilys Candy&effect=shadow-multiple' rel='stylesheet'/>
    		<script src="./scripts/schedule.js"></script>
        <link rel="stylesheet" type="text/css" href="mySchedule.css">
    </head>
	
    <body>
      <?php 
        $color="black";
        include '../navbar.php';
      ?>
	  
      <div class="container">
        
        <div class="heading font-effect-shadow-multiple">
          SCHEDULE
        </div>
        <div class="row">
              <div class="col-sm-6">
                      <div id="day1">
                        <div class="heading1 font-effect-shadow-multiple">
                         Day 1
                        </div>
                        <br>
                          <ul style="list-style-type: none">
                              <li><b>10AM  -  12PM :Anhad</b></li>
                              <li><b>10AM  -  1PM  :Lilac Dreams</b></li>
                              <li><b>10AM  -  1PM  :Pop Art</b></li>
                              <li><b>12.30PM  - 2.30PM :Rangmanch</b></li>
                              <li><b>2PM  -  5PM :MR & MS Taarangana</b></li>
                              <li><b>2PM   - 5PM :Pitch Perfect</b></li>
                              <li><b>3PM   - 5PM :Synnove</b></li>
                          </ul>
                        
                      </div>
            
                </div>
                <div class="col-sm-6">
                  <div id="day1">
                    <div class="heading1 font-effect-shadow-multiple">
                     Day 2
                    </div>
                    <br>
                      <ul style="list-style-type: none">
                          <li><b>10AM - 1PM :Knights Of The Fall </b></li>
                          <li><b>10AM - 1PM :Antraa</b></li>
                          <li><b>10AM - 1PM :Moodle-Doodle</b></li>
                          <li><b>10AM - 4PM :Aaghaz</b></li>
                          <li><b>2PM -  4PM :Campus Princess</b></li>
                          <li><b>2PM -  5PM :Slam Poetry</b></li>
                          <li><b>2PM - 5PM :Urban Thump</b></li>
                      </ul>
                    
                    </div>
                </div>
        </div>
      </div>
      
	</body>
</html>
