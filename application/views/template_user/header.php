<!DOCTYPE html>
<html class="no-js" lang="zxx">
<head>
<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Move title -->
	<script language='javascript'>
	var txt="	Q & A | Uji Coba	|";
	var speed=300;
	var refresh=null;
	function action(){
	document.title=txt;
	txt=txt.substring(1,txt.length)+txt.charAt(0);
	refresh=setTimeout("action()",speed);}action();
	</script><!-- End -->
	
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/assets_shop/css/bootstrap.min.css">

	<!-- Goggle Font -->
	<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Roboto:400,100,300,500">

	<!-- Font Css -->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/assets_shop/css/font-awesome.min.css">

	<!-- Custom CSS -->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/assets_shop/css/style.css">

	<!-- Animation Css -->
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/assets_shop/css/animate.css">
	<link rel="shortcut icon" href="<?php echo base_url() ?>assets/assets_shop/images/logo1.png" type="image/x-icon">
	   
	<!--[if lt IE 9]>
        <script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
    <![endif]-->
</head>