<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Feed Admin</title>
        <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">

        <link rel='stylesheet' type='text/css' href='http://fonts.googleapis.com/css?family=Open+Sans:400,700'>
        <link rel="stylesheet" type="text/css" href="/assets/plugins/bootstrap/css/bootstrap.css">
        <link rel="stylesheet" type="text/css" href="/assets/plugins/font-awesome/css/font-awesome.css">
        <link rel="stylesheet" type="text/css" href="/assets/css/theme.css">
        <link rel="stylesheet" type="text/css" href="/assets/css/premium.css">

        <script src="/assets/plugins/jquery-1.11.1.min.js" type="text/javascript"></script>
        <script src="/assets/plugins/bootstrap/js/bootstrap.js"></script>
        <script src="/assets/plugins/moment.js"></script>
        <script src="/assets/plugins/bootstrap-datetimepicker.js"></script>
        <script src="/assets/plugins/jquery-validation/dist/jquery.validate.min.js"></script>
    </head>

    <body class=" theme-blue">
        <script type="text/javascript">
            $(function () {
                var match = document.cookie.match(new RegExp('color=([^;]+)'));
                if (match)
                    var color = match[1];
                if (color) {
                    $('body').removeClass(function (index, css) {
                        return (css.match(/\btheme-\S+/g) || []).join(' ')
                    })
                    $('body').addClass('theme-' + color);
                }

                $('[data-popover="true"]').popover({html: true});

            });
        </script>
        <style type="text/css">
            #line-chart { height:300px; width:800px; margin: 0px auto; margin-top: 1em; }
            .navbar-default .navbar-brand, .navbar-default .navbar-brand:hover { color: #fff;}
        </style>

        <script type="text/javascript">
            $(function () {
                var uls = $('.sidebar-nav > ul > *').clone();
                uls.addClass('visible-xs');
                $('#main-menu').append(uls.clone());
            });
        </script>

        <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
        <!--[if lt IE 9]>
          <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->

        <!--[if lt IE 7 ]> <body class="ie ie6"> <![endif]-->
        <!--[if IE 7 ]> <body class="ie ie7 "> <![endif]-->
        <!--[if IE 8 ]> <body class="ie ie8 "> <![endif]-->
        <!--[if IE 9 ]> <body class="ie ie9 "> <![endif]-->
        <!--[if (gt IE 9)|!(IE)]><!--> 

        <!--<![endif]-->

        <div class="navbar navbar-default" role="navigation">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="" href="index.html"><span class="navbar-brand"><span class="fa fa-paper-plane"></span> Feed Admin Panel</span></a>
            </div>

            <div class="navbar-collapse collapse" style="height: 1px;">
                <ul id="main-menu" class="nav navbar-nav navbar-right">
                    <li class="dropdown hidden-xs">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <span class="glyphicon glyphicon-user padding-right-small" style="position:relative;top: 3px;"></span> MB
                            <i class="fa fa-caret-down"></i>
                        </a>

                        <ul class="dropdown-menu">
                            <li><a href="./">My Account</a></li>
                            <li class="divider"></li>                           
                            <li><a tabindex="-1" href="sign-in.html">Logout</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>

        <div class="sidebar-nav">
            <ul>
                <li><a href="#" data-target=".dashboard-menu" class="nav-header" data-toggle="collapse"><i class="fa fa-fw fa-dashboard"></i> Dashboard<i class="fa fa-collapse"></i></a></li>
                <li>
                    <ul class="dashboard-menu nav nav-list collapse in">
                        <li class="<?php echo ($this->uri->segment(1)=="main"? "active":""); ?>"><a href="/"><span class="fa fa-caret-right"></span> Main</a></li>
                        <li class="<?php echo ($this->uri->segment(1)=="agency"? "active":""); ?>"><a href="/agency"><span class="fa fa-caret-right"></span> Agency</a></li>
                        <li class="<?php echo ($this->uri->segment(1)=="routes"? "active":""); ?>"><a href="/routes"><span class="fa fa-caret-right"></span> Routes</a></li>
                        <li class="<?php echo ($this->uri->segment(1)=="calendar"? "active":""); ?>"><a href="/calendar"><span class="fa fa-caret-right"></span> Calendar</a></li>
                        <li class="<?php echo ($this->uri->segment(1)=="stops"? "active":""); ?>"><a href="/stops"><span class="fa fa-caret-right"></span> Stops</a></li>
                        <li class="<?php echo ($this->uri->segment(1)=="stoptimes"? "active":""); ?>"><a href="/stoptimes"><span class="fa fa-caret-right"></span> Stop times</a></li>
                        <li class="<?php echo ($this->uri->segment(1)=="trips"? "active":""); ?>"><a href="/trips"><span class="fa fa-caret-right"></span> Trips</a></li>
                    </ul>
                </li>

                <li><a href="#" data-target=".accounts-menu" class="nav-header" data-toggle="collapse"><i class="fa fa-fw fa-briefcase"></i> Settings<i class="fa fa-collapse"></i><!--<span class="label label-info">+3</span>--></a></li>
                <li><ul class="accounts-menu nav nav-list collapse in">
                        <li ><a href="#"><span class="fa fa-caret-right"></span> My Account</a></li>
                        <li class="<?php echo ($this->uri->segment(1)=="trips"? "active":""); ?>"><a href="/export"><span class="fa fa-caret-right"></span> Export to zip</a></li>                  
                    </ul>
                </li>
            </ul>
        </div>

        <div class="content">
            <div class="header">
                <div class="stats">
                    <p class="stat"><span class="label label-info">1</span> Agency</p>
                    <p class="stat"><span class="label label-success">1</span> Routes</p>
                </div>

                <h1 class="page-title"><?php echo !empty($title) ? $title:""; ?></h1>
                <ul class="breadcrumb">
                    <li><a href="index.html">Home</a> </li>
                    <li class="active"><?php echo !empty($title) ? $title:""; ?></li>
                </ul>
            </div>

            <?php echo Message::display(); ?>