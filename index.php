<?php
require("inc/config.php");
require("inc/main.php");
?>
    <!DOCTYPE html>

    <html lang="ru" >

    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="referrer" content="no-referrer">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
        <meta name="description" content="Что такое DICE.24INVEST.BIZ? Сервис мгновенных игр, где шанс выигрыша указываете сами. Быстрые выплаты без комиссий и прочих сборов.">
        <meta name="keywords" content="">
        <meta name="author" content="Dice.24invest.biz">
        <title>DICE.24INVEST.BIZ - Сервис мгновенных игр, где шанс выигрыша указываете сами.
        </title>
        <link rel="stylesheet" type="text/css" href="./files/palette-climacon.css">
        <link rel="stylesheet" type="text/css" href="./files/style.min(1).css">
        <!-- END PAGE VENDOR JS-->
        <!-- BEGIN STACK JS-->
        <link rel="stylesheet" type="text/css" href="./files/css.css" >
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
        <!-- BEGIN VENDOR CSS-->
        <link rel="stylesheet" type="text/css" href="./files/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="./files/style.minn.css">
        <link rel="stylesheet" type="text/css" href="./files/font-awesome.min.css">
        <link rel="stylesheet" type="text/css" href="./files/flag-icon.min.css">
        <link rel="stylesheet" type="text/css" href="./files/morris.css">
        <link rel="stylesheet" type="text/css" href="./files/emoji.css">
		<script type="text/javascript" src="//vk.com/js/api/openapi.js?154"></script>

        <link rel="stylesheet" type="text/css" href="./files/climacons.min.css">
        <link rel="stylesheet" type="text/css" href="./files/loader-gg.css">
        <!-- END VENDOR CSS-->
        <!-- BEGIN STACK CSS-->
        <link rel="stylesheet" type="text/css" href="./files/bootstrap-extended.min.css">
        <link rel="stylesheet" type="text/css" href="./files/app.min.css">
        <link rel="stylesheet" type="text/css" href="./files/colors.min.css">
        <!-- END STACK CSS-->
        <!-- BEGIN Page Level CSS-->
        <link rel="stylesheet" type="text/css" href="./files/horizontal-menu.min.css">
		<link rel="stylesheet" href="./files/right-nav-style.css">
        <link rel="stylesheet" type="text/css" href="./files/vertical-overlay-menu.min.css">
        <!-- link(rel='stylesheet', type='text/css', href='../../../app-assets/css#{rtl}/pages/users.css')-->
        <!-- END Page Level CSS-->
        <!-- BEGIN Custom CSS-->
        <link rel="stylesheet" type="text/css" href="./files/style.css">
        <!-- END Custom CSS-->
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>		
<style> body { background: url(/files/tools.png); } </style>
	




	</head>
<script language="javascript" type="text/javascript">
window.onerror = myOnError;
function myOnError(msg, url, lno) {
return true;
}
</script>
<body class="horizontal-layout horizontal-menu 2-columns pace-running menu-collapsed"><div class="pace pace-active"><div class="pace-progress" data-progress-text="99%" data-progress="99" style="transform: translate3d(99.9979%, 0px, 0px);"> <div class="pace-progress-inner"></div></div><div class="pace-activity"></div></div>

 <nav class="header-navbar navbar navbar-with-menu navbar-static-top navbar-light navbar-border navbar-brand-center" data-nav="brand-center">
            <div class="navbar-wrapper">
                <div class="navbar-header">
                    <ul class="nav navbar-nav">
                        <li class="nav-item mobile-menu hidden-md-up float-xs-left"><a href="" class="nav-link nav-menu-main menu-toggle hidden-xs">
						<i class="ft-menu font-large-1"></i>
						</a></li>
                        <li class="nav-item">
                            <a href="" class="navbar-brand">
                                </center><h2 class=""><b>DICE.24INVEST.BIZ</b></h2></a></center>
                        </li>
                       
                    </ul>
                </div>

            </div>
        </nav>

													
        <div id="sticky-wrapper" class="sticky-wrapper h66" >
            <div role="navigation" data-menu="menu-wrapper" class="header-navbar navbar navbar-horizontal navbar-fixed navbar-light navbar-without-dd-arrow navbar-shadow menu-border navbar-brand-center" data-nav="brand-center">
                <!-- Horizontal menu content-->
<?php
echo $panel;
?>                
				</div>
        </div>

        <div class="app-content container center-layout mt-2">
            <div class="content-wrapper">

                <div class="content-body">
												
<?php
echo $go;
?>

                                                    
                                                        <div class="row dsec" id="lastBets" style="display:block">
                                        <div class="col-xs-12">
                                            <div class="card" style="border-radius:20px!important;">
                                                <div  class="card-header"   style="border-radius: 20px!important;-webkit-user-select: none;-moz-user-select: none;">
                                                    <h4 class="card-title" style=""><b>Последние игры</b></h4> <div  style="margin-top: -13px;margin-left: 177px;display: inline-block;position: absolute;" class="circle-online pulse-online" ></div> <span data-toggle="tooltip" data-placement="top" title="" data-original-title="Online " id="oe" style="margin-top: -19px;margin-left: 193px;display: inline-block;position: absolute;"><?php echo $online; ?></span>
                                                   
                                                     
													<div class="heading-elements">
                                                        <ul class="list-inline mb-0">
                                                            <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                                                            <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                                                        </ul>
                                                    </div>
													 
                                                </div>
                                                <div class="card-body collapse in" style="-webkit-user-select: none;-moz-user-select: none; box-shadow: rgb(210, 215, 222) 7px 10px 23px -11px;" >

                                                    <div class="table-responsive">
                                                        <table class="table mb-0">
                                                            <thead>
															
                                                                <tr style="cursor:default!important" class="polew">
                                                                    <th style="width:20%" >Игрок</th>
                                                                    <th>Число</th>
                                                                    <th>Цель</th>
                                                                    <th style="width:14%">Сумма</th>
                                                                    <th>Шанс</th>
                                                                    <th>Выигрыш</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody id="response">
																<tr><td class="text-xs-center font-small-2"><span><progress style="margin-top:8px;" class="progress progress-sm mb-0" value="0" max="100"></progress></span></td><td class="text-xs-center font-small-2"><span><progress style="margin-top:8px;" class="progress progress-sm mb-0" value="0" max="100"></progress></span></td><td class="text-xs-center font-small-2"><span><progress style="margin-top:8px;" class="progress progress-sm mb-0" value="0" max="100"></progress></span></td><td class="text-xs-center font-small-2"><span><progress style="margin-top:8px;" class="progress progress-sm mb-0" value="0" max="100"></progress></span></td><td class="text-xs-center font-small-2"><span><progress style="margin-top:8px;" class="progress progress-sm mb-0" value="0" max="100"></progress></span></td><td class="text-xs-center font-small-2"><span><progress style="margin-top:8px;" class="progress progress-sm mb-0" value="0" max="100"></progress></span></td></tr>
<tr><td class="text-xs-center font-small-2"><span><progress style="margin-top:8px;" class="progress progress-sm mb-0" value="0" max="100"></progress></span></td><td class="text-xs-center font-small-2"><span><progress style="margin-top:8px;" class="progress progress-sm mb-0" value="0" max="100"></progress></span></td><td class="text-xs-center font-small-2"><span><progress style="margin-top:8px;" class="progress progress-sm mb-0" value="0" max="100"></progress></span></td><td class="text-xs-center font-small-2"><span><progress style="margin-top:8px;" class="progress progress-sm mb-0" value="0" max="100"></progress></span></td><td class="text-xs-center font-small-2"><span><progress style="margin-top:8px;" class="progress progress-sm mb-0" value="0" max="100"></progress></span></td><td class="text-xs-center font-small-2"><span><progress style="margin-top:8px;" class="progress progress-sm mb-0" value="0" max="100"></progress></span></td></tr>
<tr><td class="text-xs-center font-small-2"><span><progress style="margin-top:8px;" class="progress progress-sm mb-0" value="0" max="100"></progress></span></td><td class="text-xs-center font-small-2"><span><progress style="margin-top:8px;" class="progress progress-sm mb-0" value="0" max="100"></progress></span></td><td class="text-xs-center font-small-2"><span><progress style="margin-top:8px;" class="progress progress-sm mb-0" value="0" max="100"></progress></span></td><td class="text-xs-center font-small-2"><span><progress style="margin-top:8px;" class="progress progress-sm mb-0" value="0" max="100"></progress></span></td><td class="text-xs-center font-small-2"><span><progress style="margin-top:8px;" class="progress progress-sm mb-0" value="0" max="100"></progress></span></td><td class="text-xs-center font-small-2"><span><progress style="margin-top:8px;" class="progress progress-sm mb-0" value="0" max="100"></progress></span></td></tr>
<tr><td class="text-xs-center font-small-2"><span><progress style="margin-top:8px;" class="progress progress-sm mb-0" value="0" max="100"></progress></span></td><td class="text-xs-center font-small-2"><span><progress style="margin-top:8px;" class="progress progress-sm mb-0" value="0" max="100"></progress></span></td><td class="text-xs-center font-small-2"><span><progress style="margin-top:8px;" class="progress progress-sm mb-0" value="0" max="100"></progress></span></td><td class="text-xs-center font-small-2"><span><progress style="margin-top:8px;" class="progress progress-sm mb-0" value="0" max="100"></progress></span></td><td class="text-xs-center font-small-2"><span><progress style="margin-top:8px;" class="progress progress-sm mb-0" value="0" max="100"></progress></span></td><td class="text-xs-center font-small-2"><span><progress style="margin-top:8px;" class="progress progress-sm mb-0" value="0" max="100"></progress></span></td></tr>
<tr><td class="text-xs-center font-small-2"><span><progress style="margin-top:8px;" class="progress progress-sm mb-0" value="0" max="100"></progress></span></td><td class="text-xs-center font-small-2"><span><progress style="margin-top:8px;" class="progress progress-sm mb-0" value="0" max="100"></progress></span></td><td class="text-xs-center font-small-2"><span><progress style="margin-top:8px;" class="progress progress-sm mb-0" value="0" max="100"></progress></span></td><td class="text-xs-center font-small-2"><span><progress style="margin-top:8px;" class="progress progress-sm mb-0" value="0" max="100"></progress></span></td><td class="text-xs-center font-small-2"><span><progress style="margin-top:8px;" class="progress progress-sm mb-0" value="0" max="100"></progress></span></td><td class="text-xs-center font-small-2"><span><progress style="margin-top:8px;" class="progress progress-sm mb-0" value="0" max="100"></progress></span></td></tr>
<tr><td class="text-xs-center font-small-2"><span><progress style="margin-top:8px;" class="progress progress-sm mb-0" value="0" max="100"></progress></span></td><td class="text-xs-center font-small-2"><span><progress style="margin-top:8px;" class="progress progress-sm mb-0" value="0" max="100"></progress></span></td><td class="text-xs-center font-small-2"><span><progress style="margin-top:8px;" class="progress progress-sm mb-0" value="0" max="100"></progress></span></td><td class="text-xs-center font-small-2"><span><progress style="margin-top:8px;" class="progress progress-sm mb-0" value="0" max="100"></progress></span></td><td class="text-xs-center font-small-2"><span><progress style="margin-top:8px;" class="progress progress-sm mb-0" value="0" max="100"></progress></span></td><td class="text-xs-center font-small-2"><span><progress style="margin-top:8px;" class="progress progress-sm mb-0" value="0" max="100"></progress></span></td></tr>
<tr><td class="text-xs-center font-small-2"><span><progress style="margin-top:8px;" class="progress progress-sm mb-0" value="0" max="100"></progress></span></td><td class="text-xs-center font-small-2"><span><progress style="margin-top:8px;" class="progress progress-sm mb-0" value="0" max="100"></progress></span></td><td class="text-xs-center font-small-2"><span><progress style="margin-top:8px;" class="progress progress-sm mb-0" value="0" max="100"></progress></span></td><td class="text-xs-center font-small-2"><span><progress style="margin-top:8px;" class="progress progress-sm mb-0" value="0" max="100"></progress></span></td><td class="text-xs-center font-small-2"><span><progress style="margin-top:8px;" class="progress progress-sm mb-0" value="0" max="100"></progress></span></td><td class="text-xs-center font-small-2"><span><progress style="margin-top:8px;" class="progress progress-sm mb-0" value="0" max="100"></progress></span></td></tr>
<tr><td class="text-xs-center font-small-2"><span><progress style="margin-top:8px;" class="progress progress-sm mb-0" value="0" max="100"></progress></span></td><td class="text-xs-center font-small-2"><span><progress style="margin-top:8px;" class="progress progress-sm mb-0" value="0" max="100"></progress></span></td><td class="text-xs-center font-small-2"><span><progress style="margin-top:8px;" class="progress progress-sm mb-0" value="0" max="100"></progress></span></td><td class="text-xs-center font-small-2"><span><progress style="margin-top:8px;" class="progress progress-sm mb-0" value="0" max="100"></progress></span></td><td class="text-xs-center font-small-2"><span><progress style="margin-top:8px;" class="progress progress-sm mb-0" value="0" max="100"></progress></span></td><td class="text-xs-center font-small-2"><span><progress style="margin-top:8px;" class="progress progress-sm mb-0" value="0" max="100"></progress></span></td></tr>
<tr><td class="text-xs-center font-small-2"><span><progress style="margin-top:8px;" class="progress progress-sm mb-0" value="0" max="100"></progress></span></td><td class="text-xs-center font-small-2"><span><progress style="margin-top:8px;" class="progress progress-sm mb-0" value="0" max="100"></progress></span></td><td class="text-xs-center font-small-2"><span><progress style="margin-top:8px;" class="progress progress-sm mb-0" value="0" max="100"></progress></span></td><td class="text-xs-center font-small-2"><span><progress style="margin-top:8px;" class="progress progress-sm mb-0" value="0" max="100"></progress></span></td><td class="text-xs-center font-small-2"><span><progress style="margin-top:8px;" class="progress progress-sm mb-0" value="0" max="100"></progress></span></td><td class="text-xs-center font-small-2"><span><progress style="margin-top:8px;" class="progress progress-sm mb-0" value="0" max="100"></progress></span></td></tr>
<tr><td class="text-xs-center font-small-2"><span><progress style="margin-top:8px;" class="progress progress-sm mb-0" value="0" max="100"></progress></span></td><td class="text-xs-center font-small-2"><span><progress style="margin-top:8px;" class="progress progress-sm mb-0" value="0" max="100"></progress></span></td><td class="text-xs-center font-small-2"><span><progress style="margin-top:8px;" class="progress progress-sm mb-0" value="0" max="100"></progress></span></td><td class="text-xs-center font-small-2"><span><progress style="margin-top:8px;" class="progress progress-sm mb-0" value="0" max="100"></progress></span></td><td class="text-xs-center font-small-2"><span><progress style="margin-top:8px;" class="progress progress-sm mb-0" value="0" max="100"></progress></span></td><td class="text-xs-center font-small-2"><span><progress style="margin-top:8px;" class="progress progress-sm mb-0" value="0" max="100"></progress></span></td></tr>
<tr><td class="text-xs-center font-small-2"><span><progress style="margin-top:8px;" class="progress progress-sm mb-0" value="0" max="100"></progress></span></td><td class="text-xs-center font-small-2"><span><progress style="margin-top:8px;" class="progress progress-sm mb-0" value="0" max="100"></progress></span></td><td class="text-xs-center font-small-2"><span><progress style="margin-top:8px;" class="progress progress-sm mb-0" value="0" max="100"></progress></span></td><td class="text-xs-center font-small-2"><span><progress style="margin-top:8px;" class="progress progress-sm mb-0" value="0" max="100"></progress></span></td><td class="text-xs-center font-small-2"><span><progress style="margin-top:8px;" class="progress progress-sm mb-0" value="0" max="100"></progress></span></td><td class="text-xs-center font-small-2"><span><progress style="margin-top:8px;" class="progress progress-sm mb-0" value="0" max="100"></progress></span></td></tr>
<tr><td class="text-xs-center font-small-2"><span><progress style="margin-top:8px;" class="progress progress-sm mb-0" value="0" max="100"></progress></span></td><td class="text-xs-center font-small-2"><span><progress style="margin-top:8px;" class="progress progress-sm mb-0" value="0" max="100"></progress></span></td><td class="text-xs-center font-small-2"><span><progress style="margin-top:8px;" class="progress progress-sm mb-0" value="0" max="100"></progress></span></td><td class="text-xs-center font-small-2"><span><progress style="margin-top:8px;" class="progress progress-sm mb-0" value="0" max="100"></progress></span></td><td class="text-xs-center font-small-2"><span><progress style="margin-top:8px;" class="progress progress-sm mb-0" value="0" max="100"></progress></span></td><td class="text-xs-center font-small-2"><span><progress style="margin-top:8px;" class="progress progress-sm mb-0" value="0" max="100"></progress></span></td></tr>
<tr><td class="text-xs-center font-small-2"><span><progress style="margin-top:8px;" class="progress progress-sm mb-0" value="0" max="100"></progress></span></td><td class="text-xs-center font-small-2"><span><progress style="margin-top:8px;" class="progress progress-sm mb-0" value="0" max="100"></progress></span></td><td class="text-xs-center font-small-2"><span><progress style="margin-top:8px;" class="progress progress-sm mb-0" value="0" max="100"></progress></span></td><td class="text-xs-center font-small-2"><span><progress style="margin-top:8px;" class="progress progress-sm mb-0" value="0" max="100"></progress></span></td><td class="text-xs-center font-small-2"><span><progress style="margin-top:8px;" class="progress progress-sm mb-0" value="0" max="100"></progress></span></td><td class="text-xs-center font-small-2"><span><progress style="margin-top:8px;" class="progress progress-sm mb-0" value="0" max="100"></progress></span></td></tr>
<tr><td class="text-xs-center font-small-2"><span><progress style="margin-top:8px;" class="progress progress-sm mb-0" value="0" max="100"></progress></span></td><td class="text-xs-center font-small-2"><span><progress style="margin-top:8px;" class="progress progress-sm mb-0" value="0" max="100"></progress></span></td><td class="text-xs-center font-small-2"><span><progress style="margin-top:8px;" class="progress progress-sm mb-0" value="0" max="100"></progress></span></td><td class="text-xs-center font-small-2"><span><progress style="margin-top:8px;" class="progress progress-sm mb-0" value="0" max="100"></progress></span></td><td class="text-xs-center font-small-2"><span><progress style="margin-top:8px;" class="progress progress-sm mb-0" value="0" max="100"></progress></span></td><td class="text-xs-center font-small-2"><span><progress style="margin-top:8px;" class="progress progress-sm mb-0" value="0" max="100"></progress></span></td></tr>
<tr><td class="text-xs-center font-small-2"><span><progress style="margin-top:8px;" class="progress progress-sm mb-0" value="0" max="100"></progress></span></td><td class="text-xs-center font-small-2"><span><progress style="margin-top:8px;" class="progress progress-sm mb-0" value="0" max="100"></progress></span></td><td class="text-xs-center font-small-2"><span><progress style="margin-top:8px;" class="progress progress-sm mb-0" value="0" max="100"></progress></span></td><td class="text-xs-center font-small-2"><span><progress style="margin-top:8px;" class="progress progress-sm mb-0" value="0" max="100"></progress></span></td><td class="text-xs-center font-small-2"><span><progress style="margin-top:8px;" class="progress progress-sm mb-0" value="0" max="100"></progress></span></td><td class="text-xs-center font-small-2"><span><progress style="margin-top:8px;" class="progress progress-sm mb-0" value="0" max="100"></progress></span></td></tr>
<tr><td class="text-xs-center font-small-2"><span><progress style="margin-top:8px;" class="progress progress-sm mb-0" value="0" max="100"></progress></span></td><td class="text-xs-center font-small-2"><span><progress style="margin-top:8px;" class="progress progress-sm mb-0" value="0" max="100"></progress></span></td><td class="text-xs-center font-small-2"><span><progress style="margin-top:8px;" class="progress progress-sm mb-0" value="0" max="100"></progress></span></td><td class="text-xs-center font-small-2"><span><progress style="margin-top:8px;" class="progress progress-sm mb-0" value="0" max="100"></progress></span></td><td class="text-xs-center font-small-2"><span><progress style="margin-top:8px;" class="progress progress-sm mb-0" value="0" max="100"></progress></span></td><td class="text-xs-center font-small-2"><span><progress style="margin-top:8px;" class="progress progress-sm mb-0" value="0" max="100"></progress></span></td></tr>
<tr><td class="text-xs-center font-small-2"><span><progress style="margin-top:8px;" class="progress progress-sm mb-0" value="0" max="100"></progress></span></td><td class="text-xs-center font-small-2"><span><progress style="margin-top:8px;" class="progress progress-sm mb-0" value="0" max="100"></progress></span></td><td class="text-xs-center font-small-2"><span><progress style="margin-top:8px;" class="progress progress-sm mb-0" value="0" max="100"></progress></span></td><td class="text-xs-center font-small-2"><span><progress style="margin-top:8px;" class="progress progress-sm mb-0" value="0" max="100"></progress></span></td><td class="text-xs-center font-small-2"><span><progress style="margin-top:8px;" class="progress progress-sm mb-0" value="0" max="100"></progress></span></td><td class="text-xs-center font-small-2"><span><progress style="margin-top:8px;" class="progress progress-sm mb-0" value="0" max="100"></progress></span></td></tr>
<tr><td class="text-xs-center font-small-2"><span><progress style="margin-top:8px;" class="progress progress-sm mb-0" value="0" max="100"></progress></span></td><td class="text-xs-center font-small-2"><span><progress style="margin-top:8px;" class="progress progress-sm mb-0" value="0" max="100"></progress></span></td><td class="text-xs-center font-small-2"><span><progress style="margin-top:8px;" class="progress progress-sm mb-0" value="0" max="100"></progress></span></td><td class="text-xs-center font-small-2"><span><progress style="margin-top:8px;" class="progress progress-sm mb-0" value="0" max="100"></progress></span></td><td class="text-xs-center font-small-2"><span><progress style="margin-top:8px;" class="progress progress-sm mb-0" value="0" max="100"></progress></span></td><td class="text-xs-center font-small-2"><span><progress style="margin-top:8px;" class="progress progress-sm mb-0" value="0" max="100"></progress></span></td></tr>
<tr><td class="text-xs-center font-small-2"><span><progress style="margin-top:8px;" class="progress progress-sm mb-0" value="0" max="100"></progress></span></td><td class="text-xs-center font-small-2"><span><progress style="margin-top:8px;" class="progress progress-sm mb-0" value="0" max="100"></progress></span></td><td class="text-xs-center font-small-2"><span><progress style="margin-top:8px;" class="progress progress-sm mb-0" value="0" max="100"></progress></span></td><td class="text-xs-center font-small-2"><span><progress style="margin-top:8px;" class="progress progress-sm mb-0" value="0" max="100"></progress></span></td><td class="text-xs-center font-small-2"><span><progress style="margin-top:8px;" class="progress progress-sm mb-0" value="0" max="100"></progress></span></td><td class="text-xs-center font-small-2"><span><progress style="margin-top:8px;" class="progress progress-sm mb-0" value="0" max="100"></progress></span></td></tr>
<tr><td class="text-xs-center font-small-2"><span><progress style="margin-top:8px;" class="progress progress-sm mb-0" value="0" max="100"></progress></span></td><td class="text-xs-center font-small-2"><span><progress style="margin-top:8px;" class="progress progress-sm mb-0" value="0" max="100"></progress></span></td><td class="text-xs-center font-small-2"><span><progress style="margin-top:8px;" class="progress progress-sm mb-0" value="0" max="100"></progress></span></td><td class="text-xs-center font-small-2"><span><progress style="margin-top:8px;" class="progress progress-sm mb-0" value="0" max="100"></progress></span></td><td class="text-xs-center font-small-2"><span><progress style="margin-top:8px;" class="progress progress-sm mb-0" value="0" max="100"></progress></span></td><td class="text-xs-center font-small-2"><span><progress style="margin-top:8px;" class="progress progress-sm mb-0" value="0" max="100"></progress></span></td></tr>
<tr><td class="text-xs-center font-small-2"><span><progress style="margin-top:8px;" class="progress progress-sm mb-0" value="0" max="100"></progress></span></td><td class="text-xs-center font-small-2"><span><progress style="margin-top:8px;" class="progress progress-sm mb-0" value="0" max="100"></progress></span></td><td class="text-xs-center font-small-2"><span><progress style="margin-top:8px;" class="progress progress-sm mb-0" value="0" max="100"></progress></span></td><td class="text-xs-center font-small-2"><span><progress style="margin-top:8px;" class="progress progress-sm mb-0" value="0" max="100"></progress></span></td><td class="text-xs-center font-small-2"><span><progress style="margin-top:8px;" class="progress progress-sm mb-0" value="0" max="100"></progress></span></td><td class="text-xs-center font-small-2"><span><progress style="margin-top:8px;" class="progress progress-sm mb-0" value="0" max="100"></progress></span></td></tr>
<tr><td class="text-xs-center font-small-2"><span><progress style="margin-top:8px;" class="progress progress-sm mb-0" value="0" max="100"></progress></span></td><td class="text-xs-center font-small-2"><span><progress style="margin-top:8px;" class="progress progress-sm mb-0" value="0" max="100"></progress></span></td><td class="text-xs-center font-small-2"><span><progress style="margin-top:8px;" class="progress progress-sm mb-0" value="0" max="100"></progress></span></td><td class="text-xs-center font-small-2"><span><progress style="margin-top:8px;" class="progress progress-sm mb-0" value="0" max="100"></progress></span></td><td class="text-xs-center font-small-2"><span><progress style="margin-top:8px;" class="progress progress-sm mb-0" value="0" max="100"></progress></span></td><td class="text-xs-center font-small-2"><span><progress style="margin-top:8px;" class="progress progress-sm mb-0" value="0" max="100"></progress></span></td></tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <section id="realGame" class="card dsec" style="display:none; border-radius:20px!important;" >
                                        <div  class="card-header"   style="border-radius: 20px!important;">
                                            <h4 class="card-title "><b>Абсолютно честно</b></h4>

                                        </div>
                                        <div class="card-body collapse in">
                                            <div class="card-block">
                                                <div class="card-text">
                                                    <p>Перед каждой игрой генерирутеся строка <a href="https://storegamer.ru/" target="_blank">алгоритмом SHA-512 </a> в которой содержится <a href="https://ru.wikipedia.org/wiki/%D0%A1%D0%BE%D0%BB%D1%8C_(%D0%BA%D1%80%D0%B8%D0%BF%D1%82%D0%BE%D0%B3%D1%80%D0%B0%D1%84%D0%B8%D1%8F)" target="_blank">соль</a> и победное число (от 0 до 999999). Можно сказать, что перед Вами зашифрованный исход данной игры. Метод гарантирует <b>100% честность</b>, так как результат игры Вы видите заранее, а при изменении победного числа приведет к изменению Hash.</p>

                                                    Проверяйте самостоятельно:
                                                    <ul>
                                                        <li>Скоприруйте Hash до начала игры</li>
                                                        <li>После окончания нажмите <code class="highlighter-rouge">"Проверить игру"</code></li>
                                                        <li>Откроется окно с результатом</li>
                                                        <li>Скопируйте вручную поля c Победным числом</li>
                                                        <li>Вставьте в любой независимый SHA-512 генератор (Например: <a href="https://emn178.github.io/online-tools/sha512.html" target="_blank">Ссылка 1</a> <a href="https://www.md5calc.com/sha512" target="_blank">Ссылка 2</a> <a href="https://passwordsgenerator.net/sha512-hash-generator/" target="_blank">Ссылка 3</a>)</li>
                                                        <li>Hash должен совпадать c Hash до начала игры</li>

                                                    </ul>
                                                    Например:
                                                    <ul>
                                                        <li>Hash до начала игры: 9008354d492a2678fb81a33464a06f06ab6639998d4be7864d04acf3d72921962ad42fd86a9b5d985abe607de4de1cfcef526eefd1ab0e5de6bba6b69b6813e4 </li>
                                                        <li>Победное число: 366209</li>
														<li>После окончания нажали на "Проверить игру", открылось <a>окно</a></li>
                                                        <li>Копируем значения Победного числа</li>
                                                        <li>Получаем строку <code class="highlighter-rouge">366209</code></li>
                                                        <li>Вставляем строку в <a href="https://emn178.github.io/online-tools/sha512.html" target="_blank">генератор</a> </li>
                                                        <li>Получили hash как и до начала игры</li>

                                                    </ul>

                                                </div>
                                            </div>
                                        </div>
                                    </section>
                                    <section id="rules" class="card dsec" style="display:none; border-radius:20px!important;">
                                        <div  class="card-header"   style="border-radius: 20px!important;">
                                            <h4 class="card-title "><b>Очень простая игра</b></h4>

                                        </div>
                                        <div class="card-body collapse in">
                                            <div class="card-block">
                                                <div class="card-text">

                                                    <ul>
                                                        <li>Укажите размер ставки и свой шанс выигрыша. Будет показан возможный (расчетный) выигрыш от вашей ставки.</li>
                                                        <li>Выбираете промежуток больше или меньше.</li>
                                                        <li><a style="color: #00A5A8;" onclick="$('.dsec').hide();$('#realGame').show();$('#main-menu-navigation  li').removeClass('active');$('#gg').addClass('active');">Заранее генерируется число от 0 до 999 999</a>. Если число находится в пределах диапазона больше/меньше , который вы выбрали,вы выигрываете.</li>

                                                    </ul>

                                                </div>
                                            </div>
                                        </div>
                                    </section> 
									<div class="row dsec" id="lastWithdraw" style="display:none; border-radius:20px!important;"">
                                        <div class="col-xs-12">
                                            <div class="card" style="border-radius:20px!important;">
                                                <div class="card-header" style="border-radius: 20px!important;">
                                                    <h4 class="card-title"><b>Последние выплаты</b></h4>
                                                   
                                                     
													
													 
                                                </div>
                                                <div class="card-body collapse in">

                                                    <div class="table-responsive">
                                                        <table class="table mb-0">
                                                            <thead>
															
                                                                <tr class="polew">
                                                                    <th>ID Игрока</th>
                                                                    <th>Сумма</th>
                                                                    <th>Система</th>
                                                                    <th>Кошелек</th>
                                                                </tr>
                                                            </thead>
                                                           
                                                            <tbody>
<?php
$sql_select22 = "SELECT * FROM dice_payout ORDER BY `data` DESC LIMIT 20";
$result22 = mysql_query($sql_select22);
$row22 = mysql_fetch_array($result22);
do
{
$num = substr_replace($row22['qiwi'],'****',-4);
echo <<<HERE
$payout
<tr style="cursor:default!important"><td>$row22[user_id]</td><td>$row22[suma] 💵</td><td><img src="files/qiwi.png"></td><td>$num</td></tr>
HERE;

$num = "";
}
while($row22 = mysql_fetch_array($result22));
?>
															</table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
									<noindex><section id="contacts" class="card dsec" style="display:none;border-radius:20px!important;">
                                        <div  class="card-header"   style="border-radius: 20px!important;">
                                            <h4 class="card-title "><b>Контакты</b></h4>

                                        </div>
                                        <div class="card-body collapse in">
                                            <div class="card-block">
                                                <div class="card-text">

                                                  
                                                        <h6>Для связи с администрацией пишите в <a href="https://vk.com/im?media=&sel=-164616685" target="_blank">сообщество Вконтакте</a></h6>
<h6> Системный администратор нашего сайта: <a href="https://vk.com/goodhomeca" target="_blank">только по очень Важным вопросам</a></h6>
                 

                                                 

                                                </div>
                                            </div>
                                        </div>
                                    </section> 
									<section id="comment" class="card dsec" style="display:none;border-radius:20px!important;">
                                        <div  class="card-header"   style="border-radius: 20px!important;">
                                            <h4 class="card-title "><b>Отзывы</b></h4>

                                        </div>
                                        <div class="card-body collapse in">
                                            <div class="card-block">
                                                <div class="card-text">
<script type="text/javascript">
  VK.init({apiId: 6482985, onlyWidgets: true});
</script>

<div id="vk_comments"></div>
<script type="text/javascript">
VK.Widgets.Comments("vk_comments", {limit: 10, attach: "*"});
</script>
                 

                                                 
</div>
                                                
                                            </div>
                                        </div>
                                    </section>
									<section id="referals" class="dsec"  style="display:none;border-radius:20px!important;">
                                	<div class="row ">
                                        <div class="col-xs-12">
                                            <div class="card" style="border-radius:20px!important;">
                                                <div  class="card-header"   style="border-radius: 20px!important;">
                                                    <h4 class="card-title "><b>Ваша реферальная ссылка: </b> <span style="text-transform:none!important">https://dice.24invest.biz/?i=<?php echo $idref; ?></span> <i id="sucCopy" style="display:none"class="ft-check"></i><i onclick="$(this).hide();$('#sucCopy').show()"class="ft-copy btn-clipboard" data-clipboard-text="http://Dice.24invest.biz/?i=<?php echo $idref; ?>" style="cursor:pointer" data-toggle="tooltip" data-placement="top" title="" data-original-title="Скопировать ссылку"></i></h4>

                                                </div>
                                                <div class="card-body collapse in">
												<div class="card-block card-dashboard">
                    Получайте 10% с каждого пополнения баланса реферала
                </div>
																	
                                                    <div class="table-responsive">
                                                        <table class="table mb-0">
                                                       <thead>
                            <tr >
<?php
$sql_select221 = "SELECT * FROM dice_users WHERE referer='$idref' ORDER BY `data_reg` DESC";
$result221 = mysql_query($sql_select221);
$row221 = mysql_fetch_array($result221);

$sql_select4 = "SELECT COUNT(*) FROM dice_users WHERE referer='$idref'";
$result4 = mysql_query($sql_select4);
$row4 = mysql_fetch_array($result4);	
$count = $row4['COUNT(*)'];
do
{
$sql_select423 = "SELECT SUM(suma) FROM dice_payments WHERE user_id=".$row221['id'];
$result423 = mysql_query($sql_select423);
$row423 = mysql_fetch_array($result423);
do
{   //$sumapey = $row423['SUM(suma)'];
	$sumapey = $sumapey + $row423['SUM(suma)'];
}
while($row423 = mysql_fetch_array($result423));

$sumapeys = ($sumapey / 100) * 10;
}
while($row221 = mysql_fetch_array($result221));
echo <<<HERE
		                                <th></th>
                                <th></th>
                                <th class="text-xs-center">Дата</th>
                                <th class="text-xs-center">Пользователь (Всего: $count)</th>
                                <th class="text-xs-center">Принес (Всего: $sumapeys  💵) </th>
                                <th></th>
                                <th></th>
                                
                            </tr>
                        </thead>
                        <tbody>
HERE;
$sql_select22 = "SELECT * FROM dice_users WHERE referer='$idref' ORDER BY `data_reg` DESC";
$result22 = mysql_query($sql_select22);
$row22 = mysql_fetch_array($result22);
do
{

$sql_select4232 = "SELECT SUM(suma) FROM dice_payments WHERE user_id=".$row22['id'];
$result4232 = mysql_query($sql_select4232);
$row4232 = mysql_fetch_array($result4232);

	$sumapey2 = $row4232['SUM(suma)'];

$sumapey2 = ($sumapey2 / 100) * 10;

echo <<<HERE
<tr style="cursor:default!important">
<td></td>
<td></td>
<td>$row22[data_reg]</td>
<td>$row22[login]</td>
<td>$sumapey2 💵</td>
<td></td>
<td></td>
</tr>
HERE;

$num = "";
$refbank = "";
}
while($row22 = mysql_fetch_array($result22));
?></tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    </section>
								

                </noindex>
				
				<div style="display:none">
				<h1>DICE.24INVEST.BIZ - Никаких комиссий и сборов, быстрые выводы, абсолютно честно и моментально. Получите бонус при первой регистрации!</h1>
				</div>
				</div>
            </div>
<center>
			<noindex><span style="cursor:default;margin-top:-13px;padding-bottom:14px;">
			© DICE.24INVEST.BIZ</span>
			
			<span data-toggle="modal" data-target="#large" style="cursor:pointer;margin-top:-15px;padding-bottom:14px;padding-left:10px;">
			Правила сервиса&nbsp;&nbsp;
			<a style="opacity:5" href="//www.free-kassa.ru/"><img src="//www.free-kassa.ru/img/fk_btn/7.png" style="height:25px"></a></span>

</div>
		</noindex>	</center>
        </div>
        

       
 	<noindex>
	
	<div class="modal fade text-xs-left in" id="large" tabindex="-1" role="dialog" aria-labelledby="myModalLabel17" style="display: none; ">
									  <div class="modal-dialog modal-lg" role="document">
										<div class="modal-content">
										  <div class="modal-header" style="background-color:#F5F7FA;border-radius:6px">
											<button type="button" class="close" data-dismiss="modal" aria-label="Close">
											  <span aria-hidden="true"><i class="ft-x"></i></span>
											</button>
											<h4 class="modal-title" id="myModalLabel17">Правила</h4>
										  </div>
										  <div class="modal-body">
											<h5>1. ОБЩИЕ ПОЛОЖЕНИЯ. ТЕРМИНЫ.</h5>
											<p>1.1. Настоящее соглашение – официальный договор на пользование услугами сервиса Dice.24invest.biz. Ниже приведены основные условия пользования услугами сервиса. Пожалуйста, прежде чем принять участие в проекте внимательно изучите правила.</p>
											<p>1.2. Услугами сервиса могут пользоваться исключительно лица, достигшие совершеннолетия (18 лет) и старше. </p>
											<p>1.3. On-line проект под названием Dice.24invest.biz представляет собой систему добровольных пожертвований, принадлежит его организатору и находится в сети Интернет непосредственно по адресу – Dice.24invest.biz. </p>
											<p>1.4. Участие пользователей в проекте является исключительно добровольным.</p>
											<hr>
											<h5>2. УЧЁТНАЯ ЗАПИСЬ УЧАСТНИКА ПРОЕКТА (ПОЛЬЗОВАТЕЛЯ СИСТЕМЫ).</h5>
											<p>2.1. Способом непосредственной регистрации учетной записи является авторизация участников проекта с помощью логина и пароля.</p>
											<p>2.3. Кроме того, участник проекта несет непосредственную ответственность за любые предпринятые им действия в рамках проекта. </p>
											<p>2.4. Участник проекта обязуется своевременно сообщить о противозаконном доступе к его учетной записи, противозаконном использовании его учетной записи, по средствам технической поддержки сервиса. </p>
											<p>2.5. Сервис, а также его правообладатель не несут ответственность за любые предпринятые действия участником проекта касательно третьих лиц. </p>
											<p>2.6. При использовании несколькими участниками проекта одно и тоже устройство или выход в интернет для игры, необходимо согласование с администрацией. </p>
											<hr>
											<h5>3. КОНФИДЕНЦИАЛЬНОСТЬ</h5>
											<p>3.1. В рамках проекта гарантируется абсолютная конфиденциальность информации, предоставленной участником проекта сервису. </p>
											<p>3.2. В рамках проекта гарантируется шифрование личных паролей участников. </p>
											<p>3.3	Личные данные участника проекта могут быть представлены третьим лицам исключительно в случаях непосредственного нарушения действующих законов РФ, в случаях оскорбительного поведения, клеветы в отношении третьих лиц. </p>
											<hr>
											<h5>4. УЧАСТНИК ПРОЕКТА (ПОЛЬЗОВАТЕЛЬ СИСТЕМЫ).</h5>
											<p>4.1. В случае непосредственного нарушения участником проекта изложенных условий и правил настоящего соглашения, а также действующих законов РФ, учетная запись может быть заблокирована. </p>
											<p>4.2. Недопустимы попытки противозаконного доступа, нанесения вреда работе системы сервиса. </p>
											<p>4.3. Недопустима любая агрессия, сообщения, запрограммированные на причинение ущерба сервису (вирусы), информация, способная повлечь за собой несущественный, или существенный вред третьим лицам.</p> 
											<hr>
											<h5>5. КАТЕГОРИЧЕСКИ ЗАПРЕЩЕНО</h5>
											<p>5.1. Размещение информации, содержащей поддельные (неправдивые) данные. 
											<p>5.2. Проводить попыток взлома сайта и использовать возможные ошибки в скриптах. Нарушители будут немедленно забанены и удалены. 
											<p>5.3. Регистрация более чем одной учетной записи индивидуального участника проекта. 
											<p>5.4. Передача информации иным, третьим лицам, содержащей данные для доступа к личной учетной записи участника проекта. 
											<p>5.5. Выплата на одинаковые реквизиты с разных аккаунтов. 
											<p>5.6. Махинации с реферальной системой.
											<p>5.7. Иметь больше 1 аккаунта.
											
											<hr>
											<h5>6. Выплаты.</h5>
											<p>6.1 Выплаты производятся в ручном режиме.</p>
											<p>6.2 Если сумма последних пополнений равна сумме вывода, комиссию оплачивает пользователь.</p>
											<p>6.3 При выводе бонусных рублей может быть отказано без всяких причин.</p>
											<p>6.4 Администрация сайта может потребовать скан или фото паспорта для верификации.</p>
											<p>6.5 При выводе средств, необходимо сыграть хотя бы 15 игр на сумму более 5% последнего пополения счета.</p>
											<p>6.6 При отказе предоставить дополнительную информацию или верификации кошелька аккаунт может быть заблокирован.</p>
											<p>6.7 При нарушении правил баланс аккаунта может быть заморожен.</p>
											<p>6.8 Если вы имеете больше 1 аккаунта Администрация в праве отказать в выплате.</p>
											<hr>
											<h5>7. ПРИНЯТИЕ ПОЛЬЗОВАТЕЛЬСКОГО СОГЛАШЕНИЯ.</h5>
											<p>7.1. Непосредственная регистрация в системе данного проекта предполагает полное принятие участником проекта условий и правил настоящего пользовательского соглашения.</p>
											<p>7.2. При нарушении правил учетная запись может быть заблокирована вместе с балансом.</p>
										  </div>
										  
										</div>
									  </div>
									</div></noindex>
									
<?php
echo $modal;
?>									
									
									<!-- JS -->
										 <script src='https://www.google.com/recaptcha/api.js'></script>
		 <script src="./files/js.cookie.js" type="text/javascript"></script>
        <script src="./files/jquery-latest.min.js"></script>
		<script src="https://www.google.com/recaptcha/api.js?onload=renderRecaptchas&render=explicit" async defer></script>
		<script src="./files/vendors.min.js" type="text/javascript"></script>
        <script src="./files/popover.min.js" type="text/javascript"></script>
        <script src="./files/raphael-min.js" type="text/javascript"></script>
        <script src="./files/morris.min.js" type="text/javascript"></script>
        <script src="./files/app-menu.min.js" type="text/javascript"></script>
        <script src="./files/app.min.js" type="text/javascript"></script>
        <script src="./files/odometer.js"></script>
        <script type="text/javascript" src="/files/script.js"></script>
        	 </body>
</html>