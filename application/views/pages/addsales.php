<!DOCTYPE html>
<!--
   _____   _____   _____   ____   _   _   _____     ___ __  __  ___
  |  _  | |  _  | |  _  | |  __| | | / | |  _  |   |_  )  \/  \| __|
  | |_| | | |_| | | |_| | | |__  | |/ /  | |_| |    / / ()  () ||_ \
  |  _/_  | | | | |  _/_  | |__| |   |   | | | |   /___\__/\__/|___/
  | |_| | | | | | | |_| | | |__  | |\ \  | | | |
  |_____| |_| |_| |_____| |____| |_| \_| |_| |_|
  
    
  !-->
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>ASK techno LLC</title>
<meta name="description" content="ASK techno LLC">
<meta name="author" content="Babeka | Susano LLC">
<meta name="keywords" content="モンゴルオフショア開発,スサノテクノロジ,受託開発,ソフトウェア開発,CADカスタマイズ開発,CADプログラミング,AR/VR開発,ウェブシステム開発,ASK TECHNO,ASK TECHNO">

<!-- Favicons
    ================================================== -->
<link rel="shortcut icon" href="<?php echo base_url()?>img/favicon.ico" type="image/x-icon">
<link rel="apple-touch-icon" href="<?php echo base_url()?>img/apple-touch-icon.png">
<link rel="apple-touch-icon" sizes="72x72" href="<?php echo base_url()?>img/apple-touch-icon-72x72.png">
<link rel="apple-touch-icon" sizes="114x114" href="<?php echo base_url()?>img/apple-touch-icon-114x114.png">

<!-- Bootstrap -->
<link rel="stylesheet" type="text/css"  href="<?php echo base_url()?>css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>fonts/font-awesome/css/font-awesome.css">

<!-- Stylesheet
    ================================================== -->
<link rel="stylesheet" type="text/css"  href="<?php echo base_url()?>css/style.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>css/prettyPhoto.css">
<link href='http://fonts.googleapis.com/css?family=Lato:400,700,900,300' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800,600,300' rel='stylesheet' type='text/css'>
<script type="text/javascript" src="<?php echo base_url()?>js/modernizr.custom.js"></script>
<link rel="icon" type="image/x-icon" class="js-site-favicon" href="<?php echo base_url()?>img/logo1.png">

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<body>
    <!-- Navigation
    ==========================================-->
    <nav id="menu" class="navbar navbar-default navbar-fixed-top" style="background: #b5b0b0 !important">
  <div class="container"> 
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
      <!-- <a  class="navbar-brand" href="">ASK TECHNO</a> -->
      <a class="navbar-brand" href=""><img src="<?php echo base_url()?>img/ask.gif" height="74" width="116" style="margin-top: -30px;"> <strong></strong></a>
    </div>
	  <div class="language-switcher-language-url" id="block-languageswitcher" role="navigation">
      <ul class="links">
      </ul>
  </div>
    
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="/index.php/pages/view#" class="page-scroll"><?php echo $this->lang->line("nuur");?></a></li>   
        <li><a href="/index.php/pages/view#about-section" class="page-scroll"><?php echo $this->lang->line("taniltsuulga");?></a></li>          
        <li><a href="/index.php/pages/view#services-section" class="page-scroll"><?php echo $this->lang->line("uilchilgee");?></a></li>
        <li><a href="/index.php/pages/view#works-section" class="page-scroll"><?php echo $this->lang->line("company_medeelel");?></a></li>
        <li><a href="/index.php/pages/view#team-section" class="page-scroll"><?php echo $this->lang->line("ajilchid");?></a></li>
        <li><a href="/index.php/pages/view#company-section" class="page-scroll"><?php echo $this->lang->line("company_section");?></a></li>
        <li><a href="privacy_policy" class="page-scroll"><?php echo $this->lang->line("privacy_policy");?></a></li>
        <li><a href="/index.php/pages/view#contact-section" class="page-scroll"><?php echo $this->lang->line("holboo_barih");?></a></li>
      </ul>
    </div>
    <!-- /.navbar-collapse --> 
  </div>
  <!-- /.container-fluid --> 
</nav>
        
        <?php include 'sales.php';?>
        <?php include 'footer.php';?>
    </body>
</html>