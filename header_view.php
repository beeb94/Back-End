<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"> 
<title><?php echo (isset($title)) ? $title : "My CI Site" ?> </title>
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/css/style.css" />
<script type="text/javascript" src="http://code.jquery.com/jquery-1.10.1.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>/javascript/my_accordian.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>/javascript/jquery.js"></script>
<script src="<?php echo base_url();?>/javascript/jquery-1.6.3.min.js" type="text/javascript"></script>
		<script src="<?php echo base_url();?>/javascript/cufon-yui.js" type="text/javascript"></script>
		<script src="<?php echo base_url();?>/javascript/cufon-replace.js" type="text/javascript"></script>
		<script src="<?php echo base_url();?>/javascript/NewsGoth_BT_400.font.js" type="text/javascript"></script>
		<script src="<?php echo base_url();?>/javascript/FF-cash.js" type="text/javascript"></script>
		<script src="<?php echo base_url();?>/javascript/script.js" type="text/javascript"></script>
		<script src="<?php echo base_url();?>/javascript/jquery.equalheights.js" type="text/javascript"></script>
		<script src="<?php echo base_url();?>/javascript/jquery.easing.1.3.js" type="text/javascript"></script>
		<script src="<?php echo base_url();?>/javascript/tms-0.3.js" type="text/javascript"></script>
		<script src="<?php echo base_url();?>/javascript/tms_presets.js" type="text/javascript"></script>
		<script src="<?php echo base_url();?>/javascript/easyTooltip.js" type="text/javascript"></script>
		<script type="text/javascript" src="<?php echo base_url();?>/javascript/jquery-1.3.2.js"></script>
</head>
<body>
	<div class="extra">
			<div class="main">
	<div class="indent">
						<div class="row-top">
							<div class="wrapper">
								<h1><a href="user">Handyman Agency</a></h1>
								<strong class="support">07854365214</strong>
							</div>
						</div>
	<nav>
    <div class="header"></div>
        <div class="scroll"></div>
        <ul id="navigation">
            <li class="home"><a href="<?php echo site_url("user/");?>" title="Home"></a></li>
            <li class="customer"><a href="<?php echo site_url("user/home");?>" title="Customer"></a></li>
            <li class="handyman"><a href="<?php echo site_url("user/home1");?>" title="Handyman"></a></li>
	    <li class="details"><a href="<?php echo site_url("user/alljobs");?>" title="Details"></a></li>
            <li class="help"><a href="<?php echo site_url("user/help");?>" title="Help"></a></li>
        </ul>

        

        <script type="text/javascript">
            $(function() {
                $('#navigation a').stop().animate({'marginLeft':'-85px'},1000);

                $('#navigation > li').hover(
                    function () {
                        $('a',$(this)).stop().animate({'marginLeft':'-2px'},200);
                    },
                    function () {
                        $('a',$(this)).stop().animate({'marginLeft':'-85px'},200);
                    }
                );
            });
        </script>
 </nav>
	</div>
	<br>
	
			
	
	
		