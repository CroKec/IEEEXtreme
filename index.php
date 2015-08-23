<?php require_once( 'xtreme_hood/cms.php' ); ?>
<cms:template title='Index Page' />
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="assets/img/logo.png">

    <title>IEEEXtreme</title>

    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">

 	<!-- Custom CSS -->
    <link href="assets/css/style.css" rel="stylesheet">

    <!-- Custots/css/font-awem styles for this template -->
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <link href='http://fonts.googleapis.com/css?family=Slabo+27px' rel='stylesheet' type='text/css'>

    <!-- CSS Animations-->
    <link href="assets/css/animation.css" rel="stylesheet">
  </head>

  <body>

    <!-- Fixed navbar -->
    <div class="navbar navbar-default navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.php"><img src="assets/img/logo.png" alt="Xtreme logo"></a>
        </div>
        <div class="navbar-collapse collapse navbar-right">
          <ul class="nav navbar-nav">
            <li><a class="scroll" href="#what_is_xtreme">What is Xtreme?</a></li>
            <li><a class="scroll" href="#sponsors">Sponsors</a></li>
            <li><a class="scroll" href="#stats">Stats</a></li>
            <li><a class="scroll" href="#contact_us">Contact</a></li>  
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>

	<!-- *****************************************************************************************************************
	 HEADERWRAP
	 ***************************************************************************************************************** -->
	<div id="headerwrap">
	    <div class="container">
			<div class="row">
				<div class="col-md-4 xtremeVideo">
					<iframe width="560" height="315" src="https://www.youtube.com/embed/1OJf3OV-3BQ" frameborder="0" allowfullscreen></iframe>
					<!-- <img src="./assets/img/coding.svg"> -->
				</div>
				<cms:editable name='header_xtreme_group' label='Xtreme header' type='group'/>
				<div id="head_text" class="col-md-8">
					<h3><cms:editable name='header_xtreme_uppertitle' label='Upper text' group='header_xtreme_group' type='textarea'/></h3>
					<h1><cms:editable name='header_xtreme_title' label='Main text' group='header_xtreme_group' type='textarea'/></h1>
					<h5><cms:editable name='header_xtreme_lowertitle' label='Lower text' group='header_xtreme_group' type='textarea'/></h5>
					<h5><cms:editable name='header_xtreme_lasttitle' label='Last text' group='header_xtreme_group' type='textarea'/></h5>				
				</div>
			</div>
	    </div>
	</div>


	<!-- *****************************************************************************************************************
	 Previous sponsors
	 ***************************************************************************************************************** -->

	 <div id="cwrap">
		 <div class="container">
		 	<cms:editable name='sponsor_xtreme_group' label='Our sponsors' type='group'/>
		 	<div class="row centered">
			 	<h2><cms:editable name='sponsor_xtreme_title' label='Section title' group='sponsor_xtreme_group' type='text'/></h2>
			 	<div id="spon_wrap">
				 	<div class="col-lg-3 col-md-3 col-sm-3 sponsors">
				 		<img src="<cms:editable name='sponsor_xtreme1_image' label='First sponsor' width='260' height='60' group='sponsor_xtreme_group' type='image'>assets/img/clients/client01.png</cms:editable>" />
				 	</div>
				 	<div class="col-lg-3 col-md-3 col-sm-3 sponsors">
				 		<img src="<cms:editable name='sponsor_xtreme2_image' label='Second sponsor' width='260' height='60' group='sponsor_xtreme_group' type='image'>assets/img/clients/client02.png</cms:editable>" />
				 	</div>
				 	<div class="col-lg-3 col-md-3 col-sm-3 sponsors">
				 		<img src="<cms:editable name='sponsor_xtreme3_image' label='Third sponsor' width='260' height='60' group='sponsor_xtreme_group' type='image'>assets/img/clients/client03.png</cms:editable>" />
				 	</div>
				 	<div class="col-lg-3 col-md-3 col-sm-3 sponsors">
				 		<img src="<cms:editable name='sponsor_xtreme4_image' label='Fourth sponsor' width='260' height='60' group='sponsor_xtreme_group' type='image'>assets/img/clients/client04.png</cms:editable>" />
				 	</div>
				 	<div class="col-lg-3 col-md-3 col-sm-3 sponsors">
				 		<img src="<cms:editable name='sponsor_xtreme5_image' label='Fifth sponsor' width='260' height='60' group='sponsor_xtreme_group' type='image'>assets/img/clients/client03.png</cms:editable>" />
				 	</div>
				 	<div class="col-lg-3 col-md-3 col-sm-3 sponsors">
				 		<img src="<cms:editable name='sponsor_xtreme6_image' label='Sixth sponsor' width='260' height='60' group='sponsor_xtreme_group' type='image'>assets/img/ieee_logo.png</cms:editable>" />
				 	</div>
				 	<div class="col-lg-3 col-md-3 col-sm-3 sponsors">
				 		<img src="<cms:editable name='sponsor_xtreme7_image' label='Seventh sponsor' width='260' height='60' group='sponsor_xtreme_group' type='image'>assets/img/clients/client01.png</cms:editable>" />
				 	</div>
				 	<div class="col-lg-3 col-md-3 col-sm-3 sponsors">
				 		<img src="<cms:editable name='sponsor_xtreme8_image' label='Eighth sponsor' width='260' height='60' group='sponsor_xtreme_group' type='image'>assets/img/clients/client02.png</cms:editable>" />
				 	</div>
				</div>
		 	</div>
		 </div>
	 </div>


	 <!-- *****************************************************************************************************************
	 What is IEEEXtreme?
	 ***************************************************************************************************************** -->
	 <section id="what_is_xtreme">
	 <div id="about_xtreme">
	 	<div class="container">
 			<div class="row centered about_center">
 				<cms:editable name='about_xtreme_group' label='About Xtreme' type='group'/>
 				<div id="anim_about" class="col-md-8">
 					<p id="ab_text"><cms:editable name='about_xtreme' label='About' group='about_xtreme_group' type='textarea'/></p>
 				</div>
 				<div class="col-md-4 xtreme_circle"></div>
	 		</div>
	 	</div>
	 </div>
	 </section>

	 	<!-- *****************************************************************************************************************
	 XTREME TIMELINE
	 ***************************************************************************************************************** -->
	 <div id="timeline">
	 	<div class="container">
	 		<h1>When is this year's IEEEXtreme Competition?</h1>
	 	</div>
	 	<div id="timeline_graphic">
	 		<cms:editable name='date_xtreme_group' label='Xtreme Date' type='group'/>
	 		<div id="xtreme_date">
	 			<p id="xt_te"><cms:editable name='date_xtreme' label='Date' group='date_xtreme_group' type='textarea'/></p>
	 			<div id="pic_back"></div>
	 		</div>
	 	</div>
	 </div>

	 <!-- *****************************************************************************************************************
	 Section Xtreme
	 ***************************************************************************************************************** -->
	 <div id="section_xtreme1">
	 	<div class="container">
 			<div class="row centered">
 				<cms:editable name='section_xtreme1_group' label='Section 1' type='group'/>
 				<h2 id="section_xtreme1_title"><cms:editable name='section_xtreme_title' label='Section Title' group='section_xtreme1_group' type='text'></cms:editable></h2>
 				<div class="col-md-4 pic_fix">
 					<img src="<cms:editable name='section_xtreme1_image' label='First Image' width='150' height='150' group='section_xtreme1_group' type='image'>assets/img/user_group.png</cms:editable>" />
 					<p class="sec_desc"><cms:editable name='section_xtreme1_desc' label='First item description' group='section_xtreme1_group' type='textarea'></cms:editable></p>
 				</div>
 				<div class="col-md-4 pic_fix">
 					<img src="<cms:editable name='section_xtreme2_image' label='Second Image' width='150' height='150' group='section_xtreme1_group' type='image'>assets/img/hand-shake.png</cms:editable>" />
 					<p class="sec_desc"><cms:editable name='section_xtreme2_desc' label='Second item description' group='section_xtreme1_group' type='textarea'></cms:editable></p>
 				</div>
 				<div class="col-md-4 pic_fix">
 					<img src="<cms:editable name='section_xtreme3_image' label='Third Image' width='150' height='150' group='section_xtreme1_group' type='image'>assets/img/team.png</cms:editable>" />
 					<p class="sec_desc"><cms:editable name='section_xtreme3_desc' label='Third item description' group='section_xtreme1_group' type='textarea'></cms:editable></p>
 				</div>		 				
	 		</div>
	 	</div>
	 </div>

	 <!-- *****************************************************************************************************************
	 Xtreme Data visualization
	 ***************************************************************************************************************** -->
	 <section id="stats">
	 	<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div id="map"></div>
				</div>
			</div>
	 	</div>
	 </section>
	 
	<!-- *****************************************************************************************************************
	 Sponsor desc section
	 ***************************************************************************************************************** -->
	 <section id="sponsors">
	 <div id="sponsor_desc_xtreme">
	 	<div class="container">
	 	<h2><cms:editable name='spon_des_xtreme_title' label='Section title' group='sponsor_desc_xtreme_group' type='text'/></h2>
 			<div class="row centered">
 				<cms:editable name='sponsor_desc_xtreme_group' label='Sponsor description Section' type='group'/>
 				<div id="anim_about" class="col-md-8">
 					<p id="ab_text"><cms:editable name='spon_des_xtreme' label='Description' group='sponsor_desc_xtreme_group' type='textarea'/></p>
 					<h4 class="SponsFlyer"><a href="<cms:editable name='sponsor_flyer_xtreme' label='Attach .pdf file' group='sponsor_desc_xtreme_group' type='file'/>" target="_blank"> View Xtreme Sponsorship Flyer </a></h4>
 				</div>
 				<div class="col-md-4"><img src="./assets/img/xtreme_logo.png"></div>
	 		</div>
	 	</div>
	 </div>
	 </section>

	 <!-- *****************************************************************************************************************
	 Sponsorship table
	 ***************************************************************************************************************** -->
	 <cms:editable name='tableSelection_xtreme_group' label='Tables' type='group'/>
	 <section id="pricePlans">
		<ul id="plans">
			<li class="plan">
				<ul class="planContainer">
					<li class="title"><h3 class="bestPlanTitle"><cms:editable name='leftTableHeader_xtreme' label='Left table header' group='tableSelection_xtreme_group' type='textarea'/></h3></li>
					<li>
						<ul class="options">
							<li><cms:editable name='leftTableFitstItem_xtreme' label='Left table first item' group='tableSelection_xtreme_group' type='textarea'/></li>
							<li><cms:editable name='leftTableSecondItem_xtreme' label='Left table second item' group='tableSelection_xtreme_group' type='textarea'/></li>
							<li><cms:editable name='leftTableThirdItem_xtreme' label='Left table third item' group='tableSelection_xtreme_group' type='textarea'/></li>
							<li><cms:editable name='leftTableFourthItem_xtreme' label='Left table fourth item' group='tableSelection_xtreme_group' type='textarea'/></li>
						</ul>
					</li>
					<li class="button"><a href="GlobalSponsorshipPackage.php">More info</a></li>
				</ul>
			</li>

			<li class="plan">
				<ul class="planContainer">
					<li class="title"><h3 class="bestPlanTitle"><cms:editable name='MiddleTableHeader_xtreme' label='Middle table header' group='tableSelection_xtreme_group' type='textarea'/></h3></li>
					<li>
						<ul class="options">
							<li><cms:editable name='MiddleTableFitstItem_xtreme' label='Middle table first item' group='tableSelection_xtreme_group' type='textarea'/></li>
							<li><cms:editable name='MiddleTableSecondItem_xtreme' label='Middle table second item' group='tableSelection_xtreme_group' type='textarea'/></li>
							<li><cms:editable name='MiddleTableThirdItem_xtreme' label='Middle table third item' group='tableSelection_xtreme_group' type='textarea'/></li>
							<li><cms:editable name='MiddleTableFourthItem_xtreme' label='Middle table fourht item' group='tableSelection_xtreme_group' type='textarea'/></li>
						</ul>
					</li>
					<li class="button"><a href="CountrySponsorshipPackage.php">More info</a></li>
				</ul>
			</li>

			<li class="plan">
				<ul class="planContainer">
					<li class="title"><h3 class="bestPlanTitle"><cms:editable name='RightTableHeader_xtreme' label='Right table header' group='tableSelection_xtreme_group' type='textarea'/></h3></li>
					<li>
						<ul class="options">
							<li><cms:editable name='RightTableFirstItem_xtreme' label='Right table first item' group='tableSelection_xtreme_group' type='textarea'/></li>
							<li><cms:editable name='RightTableSecondItem_xtreme' label='Right table second item' group='tableSelection_xtreme_group' type='textarea'/></li>
							<li><cms:editable name='RightTableThirdItem_xtreme' label='Right table third item' group='tableSelection_xtreme_group' type='textarea'/></li>
							<li><cms:editable name='RightTableFourthItem_xtreme' label='Right table fourth item' group='tableSelection_xtreme_group' type='textarea'/></li>
						</ul>
					</li>
					<li class="button"><a href="SpecialSponsorshipPackage.php">More info</a></li>
				</ul>
			</li>
		</ul> <!-- End ul#plans -->
	</section>


	<!-- *****************************************************************************************************************
	 GALLERY
	 ***************************************************************************************************************** -->

	 <div id="xtreme_gallery">
	 	<cms:editable name='gallery_xtreme_group' label='Gallery' type='group'/>
	 	<ul class="album">
	 		<li>
	 			<img src="<cms:editable name='gallery_xtreme_image1' label='First Picture' width='960' height='640' group='gallery_xtreme_group' type='image'>/assets/img/Gallery/gallery_1.jpg</cms:editable>" alt="image-1">
	 		</li>
	 		<li>
	 			<img src="<cms:editable name='gallery_xtreme_image2' label='Second Picture' width='960' height='640' group='gallery_xtreme_group' type='image'>/assets/img/Gallery/gallery_2.jpg</cms:editable>" alt="image-2">
	 		</li>
	 		<li>
	 			<img src="<cms:editable name='gallery_xtreme_image3' label='Third Picture' width='960' height='640' group='gallery_xtreme_group' type='image'>/assets/img/Gallery/gallery_3.jpg</cms:editable>" alt="image-3">
	 		</li>
	 	</ul>
	 </div>


	 <!-- *****************************************************************************************************************
	 TESTIMONIALS
	 ***************************************************************************************************************** -->
	 <div id="twrap">
	 	<cms:editable name='testimonial_xtreme1_group' label='Testimonial' type='group'/>
	 	<div class="container centered">
	 		<div class="row">
	 			<h2 id="test_title"><cms:editable name='test_xtreme_title' label='Testimonial title' group='testimonial_xtreme1_group' type='text'/></h2>
	 			<div class="col-md-4">
	 				<img id="test_pic" src="<cms:editable name='testimonial_xtreme_image' label='Image' width='256' height='256' group='testimonial_xtreme1_group' type='image'>assets/img/testimonial.png</cms:editable>" />
	 			</div>
	 			<div class="col-md-8">
	 				<p id="test_text"><cms:editable name='test_xtreme' label='Text' group='testimonial_xtreme1_group' type='textarea'/></p>
	 			</div>
	 		</div>
	 	</div>
	 </div>

	 <!-- *****************************************************************************************************************
	 Contact form
	 ***************************************************************************************************************** -->
	 <section id="contact_us">
	 	<div class="container contact-cont">
	 		<h2 id="contact_title">Contact us!</h2>
	 		<form id="forma" class="form-horizontal" role="form" method="post" action="index.php">
	 			<div class="form-group">
	 			 <?php echo $result; ?> 
	 				<label for="name" class="col-sm-2 control-label">Name</label>
	 				<div class="col-sm-10">
	 					<input type="text" class="form-control" id="name" name="name" placeholder="First & Last Name" value="<?php echo htmlspecialchars($_POST['name']); ?>">
	 					<?php echo "<p class='text-danger'>$errName</p>";?>
	 				</div>
	 			</div>
	 			<div class="form-group">
        			<label for="email" class="col-sm-2 control-label">Email</label>
        			<div class="col-sm-10">
            			<input type="email" class="form-control" id="email" name="email" placeholder="example@domain.com" value="<?php echo htmlspecialchars($_POST['email']); ?>">
            			<?php echo "<p class='text-danger'>$errEmail</p>";?>
        			</div>
    			</div>
    			<div class="form-group">
        			<label for="message" class="col-sm-2 control-label">Message</label>
        			<div class="col-sm-10">
            			<textarea class="form-control" rows="4" name="message"><?php echo htmlspecialchars($_POST['message']);?></textarea>
            			<?php echo "<p class='text-danger'>$errMessage</p>";?>
        			</div>
    			</div>
    			<div class="form-group">
        			<label for="human" class="col-sm-2 control-label">2 + 3 = ?</label>
        			<div class="col-sm-10">
            			<input type="text" class="form-control" id="human" name="human" placeholder="Your Answer">
            			<?php echo "<p class='text-danger'>$errHuman</p>";?>
        			</div>
        		</div>
        		<div class="form-group">
        			<div class="col-sm-10 col-sm-offset-2">
            			<input id="submit" name="submit" type="submit" value="Send" class="btn btn-primary">
        			</div>
    			</div>
	 		</form>
	 	</div>
	 </section>

	 <?php
    	if ($_POST["submit"]) {
        	$name = $_POST['name'];
        	$email = $_POST['email'];
        	$message = $_POST['message'];
        	$human = intval($_POST['human']);
        	$from = 'Contact:'; 
        	$to = 'p.bavishi@ieee.org,  m.pelham@ieee.org'; 
        	$subject = 'Message from Sponsorship Website';
        
        	$body = "This email came from: $name\n E-Mail: $email\n Message:\n $message";
 
        	// Check if name has been entered
        	if (!$_POST['name']) {
            	$errName = 'Please enter your name';
        	}
        
        	// Check if email has been entered and is valid
        	if (!$_POST['email'] || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
            	$errEmail = 'Please enter a valid email address';
        	}
        
        	//Check if message has been entered
        	if (!$_POST['message']) {
            	$errMessage = 'Please enter your message';
        	}
        	//Check if simple anti-bot test is correct
        	if ($human != 5) {
            	$errHuman = 'Your anti-spam is incorrect';
        	}
 
			// If there are no errors, send the email
			if (!$errName && !$errEmail && !$errMessage && !$errHuman) {
    			if (mail ($to, $subject, $body, $from)) {
        			$result='<div class="alert alert-success">Thank You! I will be in touch</div>';
    			} else {
        			$result='<div class="alert alert-danger">Sorry there was an error sending your message. Please try again later</div>';
    			}
			}
    	}
	?>

	<!-- *****************************************************************************************************************
	 FOOTER
	 ***************************************************************************************************************** -->
	 <div id="footerwrap">
	 	<div class="container">
		 	<div class="row">
		 		<div class="col-lg-4">
		 			<h4>Powered by</h4>
		 			<div class="hline-w"></div>
		 			<img id="logo_fix" src="./assets/img/ieee_logo.png">
		 		</div>
		 		<div class="col-lg-4">
		 			<h4>Where I can connect?</h4>
		 			<div class="hline-w"></div>
		 			<p>
		 				<a href="https://www.facebook.com/IEEEXtreme"><i class="fa fa-facebook"></i></a>
		 				<a href="https://twitter.com/ieeextreme"><i class="fa fa-twitter"></i></a>
		 				<a href="https://plus.google.com/u/1/communities/102571828013834800536"><i class="fa fa-google-plus"></i></a>
		 			</p>
		 		</div>
		 		<div class="col-lg-4">
		 			<h4>Our Bunker</h4>
		 			<div class="hline-w"></div>
		 			<p> 445 Hoes Ln, Piscataway Township,<br/>
		 				08854, New Jersey<br/>
		 				United States.<br/>
		 			</p>
		 		</div>
		 	
		 	</div>
	 	</div>
	 </div>
	 
    <!-- Placed at the end of the document so the pages load faster -->

    <!-- Visualization scripts -->
    <script src="assets/js/topojson.v1.min.js"></script>
  	<script src="assets/js/d3.min.js"></script>

  	<!-- Bootstrap core JavaScript =================================================== -->
  	
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
	<script src="assets/js/retina-1.1.0.js"></script>
  	<script src="assets/js/jquery.isotope.min.js"></script> 
  	<script src="assets/js/custom.js"></script>
  </body>
</html>
<?php COUCH::invoke(); ?>