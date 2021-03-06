<?php require_once( 'xtreme_hood/cms.php' ); ?>
<cms:template title='Special Sponsorship Package' />
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

    <!-- Custots/css/font-awem styles for this template -->
    <link href="assets/css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <link href='http://fonts.googleapis.com/css?family=Slabo+27px' rel='stylesheet' type='text/css'>

    <!-- CSS Animations-->
    <link href="assets/css/animation.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy this line! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    
  </head>

  <body>

    <!-- Fixed navbar -->
    <div class="navbar navbar-default navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <a class="navbar-brand" href="index.php"><img class="back_button" src="assets/img/previous11.svg" alt="back button"></a>
        </div>
      </div>
    </div>

	 <!-- *****************************************************************************************************************
	 What is IEEEXtreme?
	 ***************************************************************************************************************** -->
	 <div id="GlobalSponsorshipPackageTable">
	 	<cms:editable name='SpecialSponsorship_xtreme_group' label='Special Sponsorship' type='group'/>
	 	<div class="container">
	 		<h2><cms:editable name='SpecialSponsorship_xtreme_Title' label='Table title' group='SpecialSponsorship_xtreme_group' type='text'/></h2>
 			<div class="table-responsive">
  				<table class="table-bordered SponsTableSpecial">
   					<thead>
   						<tr>
   							<th><cms:editable name='SpecialSponsorship_xtreme_Table_0_0' label='Table header[0,0]' group='SpecialSponsorship_xtreme_group' type='text'/></th>
   							<th><cms:editable name='SpecialSponsorship_xtreme_Table_0_1' label='Table header[0,1]' group='SpecialSponsorship_xtreme_group' type='text'/></th>
   							<th><cms:editable name='SpecialSponsorship_xtreme_Table_0_2' label='Table header[0,2]' group='SpecialSponsorship_xtreme_group' type='text'/></th>
   						</tr>
   					</thead>
   					<tbody>
   						<tr>
   							<td><cms:editable name='SpecialSponsorship_xtreme_Table_1_0' label='Table [1,0]' group='SpecialSponsorship_xtreme_group' type='textarea'/></td>
   							<td><cms:editable name='SpecialSponsorship_xtreme_Table_1_1' label='Table [1,1]' group='SpecialSponsorship_xtreme_group' type='text'/></td>
   							<td><cms:editable name='SpecialSponsorship_xtreme_Table_1_2' label='Table [1,2]' group='SpecialSponsorship_xtreme_group' type='textarea'/></td>
   						</tr>
   						<tr>
   							<td><cms:editable name='SpecialSponsorship_xtreme_Table_2_0' label='Table [2,0]' group='SpecialSponsorship_xtreme_group' type='textarea'/></td>
   							<td><cms:editable name='SpecialSponsorship_xtreme_Table_2_1' label='Table [2,1]' group='SpecialSponsorship_xtreme_group' type='text'/></td>
   							<td><cms:editable name='SpecialSponsorship_xtreme_Table_2_2' label='Table [2,2]' group='SpecialSponsorship_xtreme_group' type='textarea'/></td>
   						</tr>
   						<tr>
   							<td><cms:editable name='SpecialSponsorship_xtreme_Table_3_0' label='Table [3,0]' group='SpecialSponsorship_xtreme_group' type='textarea'/></td>
   							<td><cms:editable name='SpecialSponsorship_xtreme_Table_3_1' label='Table [3,1]' group='SpecialSponsorship_xtreme_group' type='text'/></td>
   							<td><cms:editable name='SpecialSponsorship_xtreme_Table_3_2' label='Table [3,2]' group='SpecialSponsorship_xtreme_group' type='textarea'/></td>
   						</tr>
   						<tr>
   							<td><cms:editable name='SpecialSponsorship_xtreme_Table_4_0' label='Table [4,0]' group='SpecialSponsorship_xtreme_group' type='textarea'/></td>
   							<td><cms:editable name='SpecialSponsorship_xtreme_Table_4_1' label='Table [4,1]' group='SpecialSponsorship_xtreme_group' type='text'/></td>
   							<td><cms:editable name='SpecialSponsorship_xtreme_Table_4_2' label='Table [4,2]' group='SpecialSponsorship_xtreme_group' type='textarea'/></td>
   						</tr>
   					</tbody>
  				</table>
			</div>
			<h4><cms:editable name='SpecialSponsorship_xtreme_Table_5_0' label='Table legend' group='SpecialSponsorship_xtreme_group' type='textarea'/></h4>
			<h4><a href="<cms:editable name='SpecialSponsorship_xtreme_Table_6_0' label='Attach .pdf file' group='SpecialSponsorship_xtreme_group' type='file'/>" target="_blank"> Download .pdf version</h4>
	 	</div>
	 </div>

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

  	<!-- Bootstrap core JavaScript ================================================== -->
  	
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
	  <script src="assets/js/retina-1.1.0.js"></script>
	  <script src="assets/js/jquery.hoverdir.js"></script>
	  <script src="assets/js/jquery.hoverex.min.js"></script>
  	<script src="assets/js/jquery.isotope.min.js"></script>
  	<script src="assets/js/custom.js"></script>
  </body>
</html>
<?php COUCH::invoke(); ?>