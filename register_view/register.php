<?php
include_once "../register_controller/register-manager.php";

$app = new Application();
session_start();
if(isset($_REQUEST["event_name"])){
  $_SESSION["curr_event"] = $_REQUEST["event_name"];
}
if(isset($_SESSION["curr_event"])){
  $curr_event_name= $_SESSION["curr_event"];
  $query = "SELECT * from event_info Where event_name =".$curr_event_name;
  $get_event = $app->exec_query($query);
  //print_r($get_event);
}

$participants_registry_error =array(1=>"Name not valid. Try full name",2=>"Roll number not valid",3=>"Invalid e-mail id",4=>"Invalid contact no.Try using a mobile no",99=>"Thank you for registering. Visit our fest",
90=>"Failed to register please try again.");

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
<body style="padding-bottom:100px;">

  <!-- navbar codding -->
  <nav class="navbar navbar-default navbar-fixed-top">
  	<div class="container" >
  	<div class="navbar-header">
         <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="#myPage" style="padding: 0px;"><img src="../logo.png" height="100%" width="100%"></a>
      </div>
  	 <div class="collapse navbar-collapse" id="myNavbar">
  		<ul class="nav navbar-nav navbar-right">
  	      <li><a href="../"><span class="glyphicon glyphicon-lamp"></span> Home</a></li>
  	      <li><a href="../#glimps"><span class="glyphicon glyphicon-picture"></span> Glimps</a></li>
  	      <li><a href="../#event"><span class="glyphicon glyphicon-flag"></span> Events</a></li>
  	     <!-- <li><a href="#workshop"><span class="glyphicon glyphicon-education"></span> Team</a></li>-->
  	       <li><a href="../#about_us"><span class="glyphicon glyphicon-sunglasses"></span> Credits</a></li>
  	      <li><a href="../#contact"><span class="glyphicon glyphicon-education"></span> Contact</a></li>
  	    </ul>
    	</div>
    	</div>
  </nav>
<?php //print_r($get_event);
//echo $query;?>
	<!--<div class="reg_banner">
		<div style=""></div>
	</div>-->
<!-- Sidebar coding starts here -->
	<div id="bomb" class="cont" style="padding-top:100px;margin-bottom:100px;">
		<div class="col-lg-4 col-md-4 col-sm-4">
			 <div class="event_links">
			 	<b><div class="event_label">Select your poison</div><b>

          <a href="#bomb" onclick="showthis('lan');"><div class="event_li">Lan Gaming ></div></a>
 			 		<ul id="lan" class="sub_link" style="display: none;">
 			 			<a href ="register.php?event_name='Counter Strike'"><li class="event_li">Counter Strike</li></a>
 			 			<a href ="register.php?event_name='NFS'"><li class="event_li">NFS</li></a>
 			 		</ul>

			 	<a href="#bomb" onclick="showthis('Robo');"><div class="event_li">Robotics ></div></a>
			 		<ul id="Robo" class="sub_link" style="display: none;">
			 			<a href ="register.php?event_name='Robo Soccer'"><li class="event_li"> Robo Soccer</li></a>
			 			<a href ="register.php?event_name='Robo Drift'"><li class="event_li"> Robo Drift</li></a>
			 			<a href ="register.php?event_name='Robo Dangal'"><li class="event_li"> Robo Dangal</li></a>
			 		</ul>
			 	<a href="register.php?event_name='Jugaad'"><div class="event_li">Jugaad</div></a>
			 	<!--<a href="register.php?event_name=''"><div class="event_li">Model Presentation</div></a>-->
			 	<a href="#bomb" onclick="showthis('stratum');"><div class="event_li">Stratum ></div></a>
			 		<ul id="stratum" class="sub_link" style="display: none;">
			 			<a href ="register.php?event_name='Nirmaan'"><li class="event_li">Nirman</li></a>
			 			<a href ="register.php?event_name='Setu'"><li class="event_li">Setu</li></a>
			 		</ul>

        <a href="#bomb" onclick="showthis('pari');"><div class="event_li">Parikalpana ></div></a>
        <ul id="pari" class="sub_link" style="display: none;">
          <a href ="register.php?event_name='Model Presentation'"><li class="event_li">Model Presentation</li></a>
          <a href="register.php?event_name='Project Exhibition'"><li class="event_li">Project Exhibition</li></a>
        </ul>

			 	<a href="#bomb" onclick="showthis('hash');"><div class="event_li">Hashmap ></div></a>
			 		<ul id="hash" class="sub_link" style="display: none;">
			 			<a href ="register.php?event_name='Graphic Designing'"><li class="event_li">Graphic design</li></a>
			 			<a href="register.php?event_name='Front End'"><li class="event_li">Front End</li></a>
			 			<a href="register.php?event_name='Code Creater'"><li class="event_li">Code Creater</li></a>
			 		</ul>
			 	<a href="register.php?event_name='E-Strategy'"><div class="event_li">E-strategy</div></a>
			 	<a href="register.php?event_name='Quiz'"><div class="event_li">Quiz-Q</div></a>

			 </div>
		</div>
    <!--sidebar endds here -->
    <!-- event details and registration form starts here -->
		<div class="col-lg-8 col-md-8 col-sm-8 r_panel"<?php if(!isset($_SESSION["curr_event"])){echo "style='display:none;'";}else{echo "style='display:block;'";}?>>

			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="padding:5px; min-height: 70px;">

				<div class="event_title col-lg-10 col-md-10 col-sm-10 col-xs-10" style="background-color: #">
					<h4><?php echo $get_event[0]["event_name"]; ?></h4><p>&nbsp;&nbsp;&nbsp;&nbsp;
            <?php echo $get_event[0]["event_date"]." at ".$get_event[0]["venue"] ; ?>
          </p>
				</div>
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 price_decl">
					<p>1<sup>st</sup> Price : <?php echo $get_event[0]["first_price"]; ?>/- &nbsp;
            <?php if($get_event[0]["second_price"]!=0){
              echo "  2<sup>nd</sup> Price :".$get_event[0]["second_price"]."/-";
            }?></p>
				</div>
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 event_desc">&nbsp;&nbsp;&nbsp;&nbsp;
            <?php echo $get_event[0]["event_desc"]; ?>
        </div>

        <!--<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <h1 class="price_decl">General Instruction</h1>
            <p class="event_desc">&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $get_event[0]["rules"]; ?></p>
        </div>-->
			</div>
      <!-- sidebar coding ends here -->

      <!--form section starts here -->

			<div class="form_panel col-lg-12 col-md-12 col-sm-12 col-xs-12" style="margin-top:50px">
				<center>
					  	<form id="" class="" method="post" action="<?php echo "../register_controller/register_controller.php?register_to=".$get_event[0]["register_in"]; ?>">
					  		<!--hidden label -->
					  		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 demo demo_error"<?php if(!isset($_REQUEST["registry_msg"])){echo "style='display:none;'";}else{echo "style='display:block;'";}?>>
					  		 <label style="color: red">
                  <?php
                    if(isset($_REQUEST["registry_msg"])){
                      echo $participants_registry_error[$_REQUEST["registry_msg"]];
                      $_SESSION["errer_flag"] = 1;
                    }
                 ?>
                </label>
					  		</div>

					  	<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 demo ">
					  		 	<!--<label>Participant's Name</label><br>-->
								<input type="text" name="name"  class="form-control" placeholder="Participent's Name" required>
					  		</div>
							<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 demo">
								<!--<label>College Name</label><br>-->
								<input type="text" name="clg_name"  class="form-control" placeholder="Your College Name" required>
							</div>
							<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 demo">
								<!--<label>Roll number</label><br>-->
								<input type="text" name="roll_no"  class="form-control" placeholder="Your Roll Number" required>
							</div>
							<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 demo">

								<input type="text" name="e_mail"  class="form-control" placeholder="Your e-mail" required>
							</div>
							<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 demo">

								<input type="text" name="mob"  class="form-control" placeholder="Contact Number" required>
							</div>

							<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 demo">

								<select class="form-control" name="sem">
								<optgroup style="background-color:#555;">
                  <option>-----Choose ur semester----</option>
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

      <!--<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
          <h1 class="price_decl">General Instruction</h1>
          <p class="event_desc">&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $get_event[0]["rules"]; ?></p>
      </div>-->

      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
          <h1 class="price_decl">For more details contact :</h1>
          <p class="event_desc">&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $get_event[0]["contact"]; ?></p>
      </div>
		</div>
    <!-- event registration ends here -->

	</div>

	<div  class="col-lg-12"style="height: 100px;">&nbsp;</div>

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
