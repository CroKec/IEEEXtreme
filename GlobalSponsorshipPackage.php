<?php require_once( 'xtreme_hood/cms.php' ); ?>
<cms:template title='Global Sponsorship Package' />
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
    <cms:editable name='GlobalSponsorship_xtreme_group' label='Global Sponsorship' type='group'/>
    <div class="container">
      <h2><cms:editable name='GlobalSponsorship_xtreme_Title' label='Table title' group='GlobalSponsorship_xtreme_group' type='text'/></h2>
      <div class="table-responsive">
          <table class="table-bordered SponsTable">
            <thead>
              <tr>
                <th><cms:editable name='GlobalSponsorship_xtreme_Table_0_0' label='Table header[0,0]' group='GlobalSponsorship_xtreme_group' type='text'/></th>
                <th><cms:editable name='GlobalSponsorship_xtreme_Table_0_1' label='Table header[0,1]' group='GlobalSponsorship_xtreme_group' type='text'/></th>
                <th><cms:editable name='GlobalSponsorship_xtreme_Table_0_2' label='Table header[0,2]' group='GlobalSponsorship_xtreme_group' type='text'/></th>
                <th><cms:editable name='GlobalSponsorship_xtreme_Table_0_3' label='Table header[0,3]' group='GlobalSponsorship_xtreme_group' type='text'/></th>
                <th><cms:editable name='GlobalSponsorship_xtreme_Table_0_4' label='Table header[0,4]' group='GlobalSponsorship_xtreme_group' type='text'/></th>
                <th><cms:editable name='GlobalSponsorship_xtreme_Table_0_5' label='Table header[0,5]' group='GlobalSponsorship_xtreme_group' type='text'/></th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td><cms:editable name='GlobalSponsorship_xtreme_Table_1_0' label='Table [1,0]' group='GlobalSponsorship_xtreme_group' type='textarea'/></td>
                <td><cms:editable name='GlobalSponsorship_xtreme_Table_1_1' label='Table [1,1]' group='GlobalSponsorship_xtreme_group' type='text'/></td>
                <td><cms:editable name='GlobalSponsorship_xtreme_Table_1_2' label='Table [1,2]' group='GlobalSponsorship_xtreme_group' type='text'/></td>
                <td><cms:editable name='GlobalSponsorship_xtreme_Table_1_3' label='Table [1,3]' group='GlobalSponsorship_xtreme_group' type='text'/></td>
                <td><cms:editable name='GlobalSponsorship_xtreme_Table_1_4' label='Table [1,4]' group='GlobalSponsorship_xtreme_group' type='text'/></td>
                <td><cms:editable name='GlobalSponsorship_xtreme_Table_1_5' label='Table [1,5]' group='GlobalSponsorship_xtreme_group' type='text'/></td>
              </tr>
              <tr>
                <td><cms:editable name='GlobalSponsorship_xtreme_Table_2_0' label='Table [2,0]' group='GlobalSponsorship_xtreme_group' type='textarea'/></td>
                <td><cms:editable name='GlobalSponsorship_xtreme_Table_2_1' label='Table [2,1]' group='GlobalSponsorship_xtreme_group' type='text'/></td>
                <td><cms:editable name='GlobalSponsorship_xtreme_Table_2_2' label='Table [2,2]' group='GlobalSponsorship_xtreme_group' type='text'/></td>
                <td><cms:editable name='GlobalSponsorship_xtreme_Table_2_3' label='Table [2,3]' group='GlobalSponsorship_xtreme_group' type='text'/></td>
                <td><cms:editable name='GlobalSponsorship_xtreme_Table_2_4' label='Table [2,4]' group='GlobalSponsorship_xtreme_group' type='text'/></td>
                <td><cms:editable name='GlobalSponsorship_xtreme_Table_2_5' label='Table [2,5]' group='GlobalSponsorship_xtreme_group' type='text'/></td>
              </tr>
              <tr>
                <td><cms:editable name='GlobalSponsorship_xtreme_Table_3_0' label='Table [3,0]' group='GlobalSponsorship_xtreme_group' type='textarea'/></td>
                <td><cms:editable name='GlobalSponsorship_xtreme_Table_3_1' label='Table [3,1]' group='GlobalSponsorship_xtreme_group' type='text'/></td>
                <td><cms:editable name='GlobalSponsorship_xtreme_Table_3_2' label='Table [3,2]' group='GlobalSponsorship_xtreme_group' type='text'/></td>
                <td><cms:editable name='GlobalSponsorship_xtreme_Table_3_3' label='Table [3,3]' group='GlobalSponsorship_xtreme_group' type='text'/></td>
                <td><cms:editable name='GlobalSponsorship_xtreme_Table_3_4' label='Table [3,4]' group='GlobalSponsorship_xtreme_group' type='text'/></td>
                <td><cms:editable name='GlobalSponsorship_xtreme_Table_3_5' label='Table [3,5]' group='GlobalSponsorship_xtreme_group' type='text'/></td>
              </tr>
              <tr>
                <td><cms:editable name='GlobalSponsorship_xtreme_Table_4_0' label='Table [4,0]' group='GlobalSponsorship_xtreme_group' type='textarea'/></td>
                <td><cms:editable name='GlobalSponsorship_xtreme_Table_4_1' label='Table [4,1]' group='GlobalSponsorship_xtreme_group' type='text'/></td>
                <td><cms:editable name='GlobalSponsorship_xtreme_Table_4_2' label='Table [4,2]' group='GlobalSponsorship_xtreme_group' type='text'/></td>
                <td><cms:editable name='GlobalSponsorship_xtreme_Table_4_3' label='Table [4,3]' group='GlobalSponsorship_xtreme_group' type='text'/></td>
                <td><cms:editable name='GlobalSponsorship_xtreme_Table_4_4' label='Table [4,4]' group='GlobalSponsorship_xtreme_group' type='text'/></td>
                <td><cms:editable name='GlobalSponsorship_xtreme_Table_4_5' label='Table [4,5]' group='GlobalSponsorship_xtreme_group' type='text'/></td>
              </tr>
              <tr>
                <td><cms:editable name='GlobalSponsorship_xtreme_Table_5_0' label='Table [5,0]' group='GlobalSponsorship_xtreme_group' type='textarea'/></td>
                <td><cms:editable name='GlobalSponsorship_xtreme_Table_5_1' label='Table [5,1]' group='GlobalSponsorship_xtreme_group' type='text'/></td>
                <td><cms:editable name='GlobalSponsorship_xtreme_Table_5_2' label='Table [5,2]' group='GlobalSponsorship_xtreme_group' type='text'/></td>
                <td><cms:editable name='GlobalSponsorship_xtreme_Table_5_3' label='Table [5,3]' group='GlobalSponsorship_xtreme_group' type='text'/></td>
                <td><cms:editable name='GlobalSponsorship_xtreme_Table_5_4' label='Table [5,4]' group='GlobalSponsorship_xtreme_group' type='text'/></td>
                <td><cms:editable name='GlobalSponsorship_xtreme_Table_5_5' label='Table [5,5]' group='GlobalSponsorship_xtreme_group' type='text'/></td>
              </tr>
              <tr>
                <td><cms:editable name='GlobalSponsorship_xtreme_Table_6_0' label='Table [6,0]' group='GlobalSponsorship_xtreme_group' type='textarea'/></td>
                <td><cms:editable name='GlobalSponsorship_xtreme_Table_6_1' label='Table [6,1]' group='GlobalSponsorship_xtreme_group' type='text'/></td>
                <td><cms:editable name='GlobalSponsorship_xtreme_Table_6_2' label='Table [6,2]' group='GlobalSponsorship_xtreme_group' type='text'/></td>
                <td><cms:editable name='GlobalSponsorship_xtreme_Table_6_3' label='Table [6,3]' group='GlobalSponsorship_xtreme_group' type='text'/></td>
                <td><cms:editable name='GlobalSponsorship_xtreme_Table_6_4' label='Table [6,4]' group='GlobalSponsorship_xtreme_group' type='text'/></td>
                <td><cms:editable name='GlobalSponsorship_xtreme_Table_6_5' label='Table [6,5]' group='GlobalSponsorship_xtreme_group' type='text'/></td>
              </tr>
              <tr>
                <td><cms:editable name='GlobalSponsorship_xtreme_Table_7_0' label='Table [7,0]' group='GlobalSponsorship_xtreme_group' type='textarea'/></td>
                <td><cms:editable name='GlobalSponsorship_xtreme_Table_7_1' label='Table [7,1]' group='GlobalSponsorship_xtreme_group' type='text'/></td>
                <td><cms:editable name='GlobalSponsorship_xtreme_Table_7_2' label='Table [7,2]' group='GlobalSponsorship_xtreme_group' type='text'/></td>
                <td><cms:editable name='GlobalSponsorship_xtreme_Table_7_3' label='Table [7,3]' group='GlobalSponsorship_xtreme_group' type='text'/></td>
                <td><cms:editable name='GlobalSponsorship_xtreme_Table_7_4' label='Table [7,4]' group='GlobalSponsorship_xtreme_group' type='text'/></td>
                <td><cms:editable name='GlobalSponsorship_xtreme_Table_7_5' label='Table [7,5]' group='GlobalSponsorship_xtreme_group' type='text'/></td>
              </tr>
              <tr>
                <td><cms:editable name='GlobalSponsorship_xtreme_Table_8_0' label='Table [8,0]' group='GlobalSponsorship_xtreme_group' type='textarea'/></td>
                <td><cms:editable name='GlobalSponsorship_xtreme_Table_8_1' label='Table [8,1]' group='GlobalSponsorship_xtreme_group' type='text'/></td>
                <td><cms:editable name='GlobalSponsorship_xtreme_Table_8_2' label='Table [8,2]' group='GlobalSponsorship_xtreme_group' type='text'/></td>
                <td><cms:editable name='GlobalSponsorship_xtreme_Table_8_3' label='Table [8,3]' group='GlobalSponsorship_xtreme_group' type='text'/></td>
                <td><cms:editable name='GlobalSponsorship_xtreme_Table_8_4' label='Table [8,4]' group='GlobalSponsorship_xtreme_group' type='text'/></td>
                <td><cms:editable name='GlobalSponsorship_xtreme_Table_8_5' label='Table [8,5]' group='GlobalSponsorship_xtreme_group' type='text'/></td>
              </tr>
              <tr>
                <th><cms:editable name='GlobalSponsorship_xtreme_Table_9_0' label='Table header[9,0]' group='GlobalSponsorship_xtreme_group' type='text'/></th>
                <th><cms:editable name='GlobalSponsorship_xtreme_Table_9_1' label='Table header[9,1]' group='GlobalSponsorship_xtreme_group' type='text'/></th>
                <th><cms:editable name='GlobalSponsorship_xtreme_Table_9_2' label='Table header[9,2]' group='GlobalSponsorship_xtreme_group' type='text'/></th>
                <th><cms:editable name='GlobalSponsorship_xtreme_Table_9_3' label='Table header[9,3]' group='GlobalSponsorship_xtreme_group' type='text'/></th>
                <th><cms:editable name='GlobalSponsorship_xtreme_Table_9_4' label='Table header[9,4]' group='GlobalSponsorship_xtreme_group' type='text'/></th>
                <th><cms:editable name='GlobalSponsorship_xtreme_Table_9_5' label='Table header[9,5]' group='GlobalSponsorship_xtreme_group' type='text'/></th>
              </tr>
              <tr>
                <td><cms:editable name='GlobalSponsorship_xtreme_Table_10_0' label='Table [10,0]' group='GlobalSponsorship_xtreme_group' type='textarea'/></td>
                <td><cms:editable name='GlobalSponsorship_xtreme_Table_10_1' label='Table [10,1]' group='GlobalSponsorship_xtreme_group' type='text'/></td>
                <td><cms:editable name='GlobalSponsorship_xtreme_Table_10_2' label='Table [10,2]' group='GlobalSponsorship_xtreme_group' type='text'/></td>
                <td><cms:editable name='GlobalSponsorship_xtreme_Table_10_3' label='Table [10,3]' group='GlobalSponsorship_xtreme_group' type='text'/></td>
                <td><cms:editable name='GlobalSponsorship_xtreme_Table_10_4' label='Table [10,4]' group='GlobalSponsorship_xtreme_group' type='text'/></td>
              <td><cms:editable name='GlobalSponsorship_xtreme_Table_10_5' label='Table [10,5]' group='GlobalSponsorship_xtreme_group' type='text'/></td>
              </tr>
              <tr>
                <td><cms:editable name='GlobalSponsorship_xtreme_Table_11_0' label='Table [11,0]' group='GlobalSponsorship_xtreme_group' type='textarea'/></th>
                <td><cms:editable name='GlobalSponsorship_xtreme_Table_11_1' label='Table [11,1]' group='GlobalSponsorship_xtreme_group' type='text'/></th>
                <td><cms:editable name='GlobalSponsorship_xtreme_Table_11_2' label='Table [11,2]' group='GlobalSponsorship_xtreme_group' type='text'/></th>
                <td><cms:editable name='GlobalSponsorship_xtreme_Table_11_3' label='Table [11,3]' group='GlobalSponsorship_xtreme_group' type='text'/></th>
                <td><cms:editable name='GlobalSponsorship_xtreme_Table_11_4' label='Table [11,4]' group='GlobalSponsorship_xtreme_group' type='text'/></th>
                <td><cms:editable name='GlobalSponsorship_xtreme_Table_11_5' label='Table [11,5]' group='GlobalSponsorship_xtreme_group' type='text'/></th>
              </tr>
              <tr>
                <td><cms:editable name='GlobalSponsorship_xtreme_Table_12_0' label='Table [12,0]' group='GlobalSponsorship_xtreme_group' type='textarea'/></th>
                <td><cms:editable name='GlobalSponsorship_xtreme_Table_12_1' label='Table [12,1]' group='GlobalSponsorship_xtreme_group' type='text'/></th>
                <td><cms:editable name='GlobalSponsorship_xtreme_Table_12_2' label='Table [12,2]' group='GlobalSponsorship_xtreme_group' type='text'/></th>
                <td><cms:editable name='GlobalSponsorship_xtreme_Table_12_3' label='Table [12,3]' group='GlobalSponsorship_xtreme_group' type='text'/></th>
                <td><cms:editable name='GlobalSponsorship_xtreme_Table_12_4' label='Table [12,4]' group='GlobalSponsorship_xtreme_group' type='text'/></th>
                <td><cms:editable name='GlobalSponsorship_xtreme_Table_12_5' label='Table [12,5]' group='GlobalSponsorship_xtreme_group' type='text'/></th>
              </tr>
              <tr>
                <td><cms:editable name='GlobalSponsorship_xtreme_Table_13_0' label='Table [13,0]' group='GlobalSponsorship_xtreme_group' type='textarea'/></th>
                <td><cms:editable name='GlobalSponsorship_xtreme_Table_13_1' label='Table [13,1]' group='GlobalSponsorship_xtreme_group' type='text'/></th>
                <td><cms:editable name='GlobalSponsorship_xtreme_Table_13_2' label='Table [13,2]' group='GlobalSponsorship_xtreme_group' type='text'/></th>
                <td><cms:editable name='GlobalSponsorship_xtreme_Table_13_3' label='Table [13,3]' group='GlobalSponsorship_xtreme_group' type='text'/></th>
                <td><cms:editable name='GlobalSponsorship_xtreme_Table_13_4' label='Table [13,4]' group='GlobalSponsorship_xtreme_group' type='text'/></th>
                <td><cms:editable name='GlobalSponsorship_xtreme_Table_13_5' label='Table [13,5]' group='GlobalSponsorship_xtreme_group' type='text'/></th>
              </tr>
              <tr>
                <td><cms:editable name='GlobalSponsorship_xtreme_Table_14_0' label='Table [14,0]' group='GlobalSponsorship_xtreme_group' type='textarea'/></th>
                <td><cms:editable name='GlobalSponsorship_xtreme_Table_14_1' label='Table [14,1]' group='GlobalSponsorship_xtreme_group' type='text'/></th>
                <td><cms:editable name='GlobalSponsorship_xtreme_Table_14_2' label='Table [14,2]' group='GlobalSponsorship_xtreme_group' type='text'/></th>
                <td><cms:editable name='GlobalSponsorship_xtreme_Table_14_3' label='Table [14,3]' group='GlobalSponsorship_xtreme_group' type='text'/></th>
                <td><cms:editable name='GlobalSponsorship_xtreme_Table_14_4' label='Table [14,4]' group='GlobalSponsorship_xtreme_group' type='text'/></th>
                <td><cms:editable name='GlobalSponsorship_xtreme_Table_14_5' label='Table [14,5]' group='GlobalSponsorship_xtreme_group' type='text'/></th>
              </tr>
              <tr>
                <th><cms:editable name='GlobalSponsorship_xtreme_Table_15_0' label='Table header [15,0]' group='GlobalSponsorship_xtreme_group' type='textarea'/></th>
                <th><cms:editable name='GlobalSponsorship_xtreme_Table_15_1' label='Table header [15,1]' group='GlobalSponsorship_xtreme_group' type='text'/></th>
                <th><cms:editable name='GlobalSponsorship_xtreme_Table_15_2' label='Table header [15,2]' group='GlobalSponsorship_xtreme_group' type='text'/></th>
                <th><cms:editable name='GlobalSponsorship_xtreme_Table_15_3' label='Table header [15,3]' group='GlobalSponsorship_xtreme_group' type='text'/></th>
                <th><cms:editable name='GlobalSponsorship_xtreme_Table_15_4' label='Table header [15,4]' group='GlobalSponsorship_xtreme_group' type='text'/></th>
                <th><cms:editable name='GlobalSponsorship_xtreme_Table_15_5' label='Table header [15,5]' group='GlobalSponsorship_xtreme_group' type='text'/></th>
              </tr>
              <tr>
                <td><cms:editable name='GlobalSponsorship_xtreme_Table_16_0' label='Table [16,0]' group='GlobalSponsorship_xtreme_group' type='textarea'/></th>
                <td><cms:editable name='GlobalSponsorship_xtreme_Table_16_1' label='Table [16,1]' group='GlobalSponsorship_xtreme_group' type='text'/></th>
                <td><cms:editable name='GlobalSponsorship_xtreme_Table_16_2' label='Table [16,2]' group='GlobalSponsorship_xtreme_group' type='text'/></th>
                <td><cms:editable name='GlobalSponsorship_xtreme_Table_16_3' label='Table [16,3]' group='GlobalSponsorship_xtreme_group' type='text'/></th>
                <td><cms:editable name='GlobalSponsorship_xtreme_Table_16_4' label='Table [16,4]' group='GlobalSponsorship_xtreme_group' type='text'/></th>
                <td><cms:editable name='GlobalSponsorship_xtreme_Table_16_5' label='Table [16,5]' group='GlobalSponsorship_xtreme_group' type='text'/></th>
              </tr>
              <tr>
                <td><cms:editable name='GlobalSponsorship_xtreme_Table_17_0' label='Table [17,0]' group='GlobalSponsorship_xtreme_group' type='textarea'/></th>
                <td><cms:editable name='GlobalSponsorship_xtreme_Table_17_1' label='Table [17,1]' group='GlobalSponsorship_xtreme_group' type='text'/></th>
                <td><cms:editable name='GlobalSponsorship_xtreme_Table_17_2' label='Table [17,2]' group='GlobalSponsorship_xtreme_group' type='text'/></th>
                <td><cms:editable name='GlobalSponsorship_xtreme_Table_17_3' label='Table [17,3]' group='GlobalSponsorship_xtreme_group' type='text'/></th>
                <td><cms:editable name='GlobalSponsorship_xtreme_Table_17_4' label='Table [17,4]' group='GlobalSponsorship_xtreme_group' type='text'/></th>
                <td><cms:editable name='GlobalSponsorship_xtreme_Table_17_5' label='Table [17,5]' group='GlobalSponsorship_xtreme_group' type='text'/></th>
              </tr>
              <tr>
                <td><cms:editable name='GlobalSponsorship_xtreme_Table_18_0' label='Table [18,0]' group='GlobalSponsorship_xtreme_group' type='textarea'/></th>
                <td><cms:editable name='GlobalSponsorship_xtreme_Table_18_1' label='Table [18,1]' group='GlobalSponsorship_xtreme_group' type='text'/></th>
                <td><cms:editable name='GlobalSponsorship_xtreme_Table_18_2' label='Table [18,2]' group='GlobalSponsorship_xtreme_group' type='text'/></th>
                <td><cms:editable name='GlobalSponsorship_xtreme_Table_18_3' label='Table [18,3]' group='GlobalSponsorship_xtreme_group' type='text'/></th>
                <td><cms:editable name='GlobalSponsorship_xtreme_Table_18_4' label='Table [18,4]' group='GlobalSponsorship_xtreme_group' type='text'/></th>
                <td><cms:editable name='GlobalSponsorship_xtreme_Table_18_5' label='Table [18,5]' group='GlobalSponsorship_xtreme_group' type='text'/></th>
              </tr>
              <tr>
                <td><cms:editable name='GlobalSponsorship_xtreme_Table_22_0' label='Table [19,0]' group='GlobalSponsorship_xtreme_group' type='textarea'/></th>
                <td><cms:editable name='GlobalSponsorship_xtreme_Table_22_1' label='Table [19,1]' group='GlobalSponsorship_xtreme_group' type='text'/></th>
                <td><cms:editable name='GlobalSponsorship_xtreme_Table_22_2' label='Table [19,2]' group='GlobalSponsorship_xtreme_group' type='text'/></th>
                <td><cms:editable name='GlobalSponsorship_xtreme_Table_22_3' label='Table [19,3]' group='GlobalSponsorship_xtreme_group' type='text'/></th>
                <td><cms:editable name='GlobalSponsorship_xtreme_Table_22_4' label='Table [19,4]' group='GlobalSponsorship_xtreme_group' type='text'/></th>
                <td><cms:editable name='GlobalSponsorship_xtreme_Table_22_5' label='Table [19,5]' group='GlobalSponsorship_xtreme_group' type='text'/></th>
              </tr>
              <tr>
                <td><cms:editable name='GlobalSponsorship_xtreme_Table_23_0' label='Table [20,0]' group='GlobalSponsorship_xtreme_group' type='textarea'/></th>
                <td><cms:editable name='GlobalSponsorship_xtreme_Table_23_1' label='Table [20,1]' group='GlobalSponsorship_xtreme_group' type='text'/></th>
                <td><cms:editable name='GlobalSponsorship_xtreme_Table_23_2' label='Table [20,2]' group='GlobalSponsorship_xtreme_group' type='text'/></th>
                <td><cms:editable name='GlobalSponsorship_xtreme_Table_23_3' label='Table [20,3]' group='GlobalSponsorship_xtreme_group' type='text'/></th>
                <td><cms:editable name='GlobalSponsorship_xtreme_Table_23_4' label='Table [20,4]' group='GlobalSponsorship_xtreme_group' type='text'/></th>
                <td><cms:editable name='GlobalSponsorship_xtreme_Table_23_5' label='Table [20,5]' group='GlobalSponsorship_xtreme_group' type='text'/></th>
              </tr>
              <tr>
                <td><cms:editable name='GlobalSponsorship_xtreme_Table_24_0' label='Table [21,0]' group='GlobalSponsorship_xtreme_group' type='textarea'/></th>
                <td><cms:editable name='GlobalSponsorship_xtreme_Table_24_1' label='Table [21,1]' group='GlobalSponsorship_xtreme_group' type='text'/></th>
                <td><cms:editable name='GlobalSponsorship_xtreme_Table_24_2' label='Table [21,2]' group='GlobalSponsorship_xtreme_group' type='text'/></th>
                <td><cms:editable name='GlobalSponsorship_xtreme_Table_24_3' label='Table [21,3]' group='GlobalSponsorship_xtreme_group' type='text'/></th>
                <td><cms:editable name='GlobalSponsorship_xtreme_Table_24_4' label='Table [21,4]' group='GlobalSponsorship_xtreme_group' type='text'/></th>
                <td><cms:editable name='GlobalSponsorship_xtreme_Table_24_5' label='Table [21,5]' group='GlobalSponsorship_xtreme_group' type='text'/></th>
              </tr>
              <tr>
                <td><cms:editable name='GlobalSponsorship_xtreme_Table_25_0' label='Table [22,0]' group='GlobalSponsorship_xtreme_group' type='textarea'/></th>
                <td><cms:editable name='GlobalSponsorship_xtreme_Table_25_1' label='Table [22,1]' group='GlobalSponsorship_xtreme_group' type='text'/></th>
                <td><cms:editable name='GlobalSponsorship_xtreme_Table_25_2' label='Table [22,2]' group='GlobalSponsorship_xtreme_group' type='text'/></th>
                <td><cms:editable name='GlobalSponsorship_xtreme_Table_25_3' label='Table [22,3]' group='GlobalSponsorship_xtreme_group' type='text'/></th>
                <td><cms:editable name='GlobalSponsorship_xtreme_Table_25_4' label='Table [22,4]' group='GlobalSponsorship_xtreme_group' type='text'/></th>
                <td><cms:editable name='GlobalSponsorship_xtreme_Table_25_5' label='Table [22,5]' group='GlobalSponsorship_xtreme_group' type='text'/></th>
              </tr>
              <tr>
                <td><cms:editable name='GlobalSponsorship_xtreme_Table_26_0' label='Table [23,0]' group='GlobalSponsorship_xtreme_group' type='textarea'/></th>
                <td><cms:editable name='GlobalSponsorship_xtreme_Table_26_1' label='Table [23,1]' group='GlobalSponsorship_xtreme_group' type='text'/></th>
                <td><cms:editable name='GlobalSponsorship_xtreme_Table_26_2' label='Table [23,2]' group='GlobalSponsorship_xtreme_group' type='text'/></th>
                <td><cms:editable name='GlobalSponsorship_xtreme_Table_26_3' label='Table [23,3]' group='GlobalSponsorship_xtreme_group' type='text'/></th>
                <td><cms:editable name='GlobalSponsorship_xtreme_Table_26_4' label='Table [23,4]' group='GlobalSponsorship_xtreme_group' type='text'/></th>
                <td><cms:editable name='GlobalSponsorship_xtreme_Table_26_5' label='Table [23,5]' group='GlobalSponsorship_xtreme_group' type='text'/></th>
              </tr>
              <tr>
                <td><cms:editable name='GlobalSponsorship_xtreme_Table_27_0' label='Table [24,0]' group='GlobalSponsorship_xtreme_group' type='textarea'/></th>
                <td><cms:editable name='GlobalSponsorship_xtreme_Table_27_1' label='Table [24,1]' group='GlobalSponsorship_xtreme_group' type='text'/></th>
                <td><cms:editable name='GlobalSponsorship_xtreme_Table_27_2' label='Table [24,2]' group='GlobalSponsorship_xtreme_group' type='text'/></th>
                <td><cms:editable name='GlobalSponsorship_xtreme_Table_27_3' label='Table [24,3]' group='GlobalSponsorship_xtreme_group' type='text'/></th>
                <td><cms:editable name='GlobalSponsorship_xtreme_Table_27_4' label='Table [24,4]' group='GlobalSponsorship_xtreme_group' type='text'/></th>
                <td><cms:editable name='GlobalSponsorship_xtreme_Table_27_5' label='Table [24,5]' group='GlobalSponsorship_xtreme_group' type='text'/></th>
              </tr>
            </tbody>
          </table>
      </div>
      <h4><cms:editable name='GlobalSponsorship_xtreme_Table_19_0' label='Table legend' group='GlobalSponsorship_xtreme_group' type='textarea'/></h4>
      <h4><cms:editable name='GlobalSponsorship_xtreme_Table_20_0' label='Table legend' group='GlobalSponsorship_xtreme_group' type='textarea'/></h4>
      <h4><a href="<cms:editable name='GlobalSponsorship_xtreme_Table_21_0' label='Attach .pdf file' group='GlobalSponsorship_xtreme_group' type='file'/>" target="_blank">Download .pdf version</h4>
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