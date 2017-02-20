<?php
include_once "../register_controller/register-control.php";

$app = new Application();
if(isset($_REQUEST["event_name"])){
  $curr_event_name= $_REQUEST["event_name"];
  $query = "SELECT * from event_info Where event_name =".$curr_event_name;
  $get_event = $app->exec_query($query);
  //print_r($get_event);
}
else {
  header("Location:../");
}


function register(){
  //validating data

  //adding the user into the database
  $update_query = sprintf("INSERT INTO %s ('participant_name','college_name','roll_no','email','semester','mobile')
  Values(%s,%s,%s,%s,%s,%s,),$get_event[0]['register_in'],;
  ");

}
?>


<!DOCTYPE html>
<html>
<head>
	<title>AVESH | Event Register</title>
	<meta charset="utf-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1">
  	<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
  	<link rel="stylesheet" type="text/css" href="../main.css">
    <link rel="stylesheet" type="text/css" href="../css/register_page.css">
  	<script type="text/javascript" src="../js/bootstrap.min.js"></script>
  	<script src="../js/jquery_offline.js"></script>

	<style>


	</style>
	<script type="text/javascript">
		function showthis(toshow){

			 if(document.getElementById(toshow).style.display == "block")
			 {
			 	document.getElementById(toshow).style.display = "none";
			 }
			 else{
			 	document.getElementById(toshow).style.display = "block";
			 }

		}
	</script>
</head>
<body>

<?php print_r($get_event);
echo $query;?>
	<div class="reg_banner">
		<div style="">A</div>
	</div>

	<div id="bomb" class="cont">
		<div class="col-lg-4 col-md-4 col-sm-4">
			 <div class="event_links">
			 	<b><div class="event_label">Select your poison</div><b>
			 	<a href="#bomb" onclick="showthis('Robo');"><div class="event_li">Robotics ></div></a>
			 		<ul id="Robo" class="sub_link" style="display: none;">
			 			<li class="event_li"> Robo Socker</li>
			 			<li class="event_li"> Robo Drift</li>
			 			<li class="event_li"> Robo Wrestling</li>
			 		</ul>
			 	<a href="#bomb"><div class="event_li">Jugaad</div></a>
			 	<a href="#bomb"><div class="event_li">Model Presentation</div></a>
			 	<a href="#bomb" onclick="showthis('stratum');"><div class="event_li">Stratum ></div></a>
			 		<ul id="stratum" class="sub_link" style="display: none;">
			 			<li class="event_li">Nirman,</li>
			 			<li class="event_li">Setu</li>
			 		</ul>
			 	<a href="#bomb" onclick="showthis('hash');"><div class="event_li">Hashmap ></div></a>
			 		<ul id="hash" class="sub_link" style="display: none;">
			 			<li class="event_li">Graphic design</li>
			 			<li class="event_li">Front End</li>
			 			<li class="event_li">Code Creater</li>
			 		</ul>
			 	<a href="#bomb"><div class="event_li">E-strategy</div></a>
			 	<a href="#bomb"><div class="event_li">Quiz-Q</div></a>

			 </div>
		</div>
		<div class="col-lg-8 col-md-8 col-sm-8 r_panel">

			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="padding:5px; min-height: 70px;">

				<div class="event_title col-lg-10 col-md-10 col-sm-10 col-xs-10" style="background-color: #">
					<h4><?php echo $get_event[0]["event_name"]; ?></h4><p>&nbsp;&nbsp;&nbsp;&nbsp;
            <?php echo " at ".$get_event[0]["event_date"]." at ".$get_event[0]["venue"] ; ?>
          </p>
				</div>
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 price_decl">
					<p>1<sup>st</sup> Price : <?php echo $get_event[0]["first_price"]; ?>/- &nbsp;
            2<sup>nd</sup> Price : <?php echo $get_event[0]["second_price"]; ?>/-</p>
				</div>
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 event_desc">&nbsp;&nbsp;&nbsp;&nbsp;
            <?php echo $get_event[0]["event_desc"]; ?>
        </div>
			</div>

			<div class="form_panel col-lg-12 col-md-12 col-sm-12 col-xs-12" >
				<center>
					  	<form id="" class="" method="post" action=<?php register(); ?>>
					  		<!--hidden label -->
					  		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 demo demo_error ">
					  		 <label style="color: red">This label is for error mesage</label>
					  		</div>

					  		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 demo ">
					  		 	<!--<label>Participant's Name</label><br>-->
								<input type="text" name="name"  class="form-control" placeholder="Participent's Name">
					  		</div>
							<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 demo">
								<!--<label>College Name</label><br>-->
								<input type="text" name="clg_name"  class="form-control" placeholder="Your College Name">
							</div>
							<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 demo">
								<!--<label>Roll number</label><br>-->
								<input type="text" name="roll_no"  class="form-control" placeholder="Your Roll Number">
							</div>
							<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 demo">

								<input type="text" name="e_mail"  class="form-control" placeholder="Your e-mail">
							</div>
							<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 demo">

								<input type="text" name="mob"  class="form-control" placeholder="Contact Number">
							</div>

							<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 demo">

								<select class="form-control" name="sem">
								<optgroup>
									<option>2nd</option>
									<option>4th</option>
									<option>6th</option>
									<option>8th</option>
								</optgroup>
								</select>
							</div>
							<div class="col-lg-12 col-md-12 col-sm-12col-xs-12 demo_submit">
								<button class="btn btn-info" style="width: 40%">Submit</button>
							</div>
					  	</form>
				</center>

			</div>
		</div>

	</div>

	<div style="height: 50vh;">&nbsp;</div>

	<script type="text/javascript">
		$(function() {
	  $('a[href*="#"]:not([href="#"])').click(function() {
	    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
	      var target = $(this.hash);
	      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
	      if (target.length) {
	        $('html, body').animate({
	          scrollTop: target.offset().top
	        }, 800);
	        return false;
	      }
	    }
	  });
	});
	</script>
</body>
</html>
