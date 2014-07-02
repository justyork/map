<!doctype html>
<html class="no-js">
<head>
	<meta charset="UTF-8">
	<title><?=$this->title?></title>

	<!--IE Compatibility modes-->
	<meta http-equiv="X-UA-Compatible" content="IE=edge">

	<!--Mobile first-->
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Bootstrap -->
	<link rel="stylesheet" href="/assets/cp/lib/bootstrap/css/bootstrap.min.css">

	<!-- Font Awesome -->
	<link rel="stylesheet" href="/assets/cp/lib/font-awesome/css/font-awesome.min.css">

	<!-- Metis core stylesheet -->
	<link rel="stylesheet" href="/assets/cp/css/main.min.css">

	<!-- Metis Theme stylesheet -->
	<link rel="stylesheet" href="/assets/cp/lib/fullcalendar/fullcalendar.css">

	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->

	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->

	<!--[if lt IE 9]>
	<script src="/assets/cp/lib/html5shiv/html5shiv.js"></script>
	<script src="/assets/cp/lib/respond/respond.min.js"></script>
	<![endif]-->

	<!--For Development Only. Not required -->
	<script>
		less = {
			env: "development",
			relativeUrls: false,
			rootpath: "../assets/"
		};
	</script>
	<link rel="stylesheet" href="/assets/cp/css/style-switcher.css">
	<link rel="stylesheet/less" type="text/css" href="/assets/cp/css/less/theme.less">
	<script src="/assets/cp/lib/less/less-1.7.1.min.js"></script>

	<!--Modernizr 2.8.2-->
	<script src="/assets/cp/lib/modernizr/modernizr.min.js"></script>
</head>
<body class="  ">
<div class="bg-dark dk" id="wrap">
<div id="top">

	<!-- .navbar -->
	<nav class="navbar navbar-inverse navbar-static-top">
		<div class="container-fluid">

			<!-- Brand and toggle get grouped for better mobile display -->
			<header class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a href="index.html" class="navbar-brand">
					<img src="/assets/cp/img/logo.png" alt="">
				</a>
			</header>
			<div class="topnav">
				<div class="btn-group">
					<a data-placement="bottom" data-original-title="Fullscreen" data-toggle="tooltip" class="btn btn-default btn-sm" id="toggleFullScreen">
						<i class="glyphicon glyphicon-fullscreen"></i>
					</a>
				</div>
				<div class="btn-group">
					<a data-placement="bottom" data-original-title="E-mail" data-toggle="tooltip" class="btn btn-default btn-sm">
						<i class="fa fa-envelope"></i>
						<span class="label label-warning">5</span>
					</a>
					<a data-placement="bottom" data-original-title="Messages" href="#" data-toggle="tooltip" class="btn btn-default btn-sm">
						<i class="fa fa-comments"></i>
						<span class="label label-danger">4</span>
					</a>
					<a data-toggle="modal" data-original-title="Help" data-placement="bottom" class="btn btn-default btn-sm" href="#helpModal">
						<i class="fa fa-question"></i>
					</a>
				</div>
				<div class="btn-group">
					<a href="login.html" data-toggle="tooltip" data-original-title="Logout" data-placement="bottom" class="btn btn-metis-1 btn-sm">
						<i class="fa fa-power-off"></i>
					</a>
				</div>
				<div class="btn-group">
					<a data-placement="bottom" data-original-title="Show / Hide Left" data-toggle="tooltip" class="btn btn-primary btn-sm toggle-left" id="menu-toggle">
						<i class="fa fa-bars"></i>
					</a>
					<a data-placement="bottom" data-original-title="Show / Hide Right" data-toggle="tooltip" class="btn btn-default btn-sm toggle-right"> <span class="glyphicon glyphicon-comment"></span>  </a>
				</div>
			</div>
			<div class="collapse navbar-collapse navbar-ex1-collapse">

				<!-- .nav -->
				<ul class="nav navbar-nav">
					<li class="active">
						<a href="dashboard.html">Dashboard</a>
					</li>
					<li> <a href="table.html">Tables</a>  </li>
					<li> <a href="file.html">File Manager</a>  </li>
					<li class='dropdown '>
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">
							Form Elements
							<b class="caret"></b>
						</a>
						<ul class="dropdown-menu">
							<li> <a href="form-general.html">General</a>  </li>
							<li> <a href="form-validation.html">Validation</a>  </li>
							<li> <a href="form-wysiwyg.html">WYSIWYG</a>  </li>
							<li> <a href="form-wizard.html">Wizard &amp; File Upload</a>  </li>
						</ul>
					</li>
				</ul><!-- /.nav -->
			</div>
		</div><!-- /.container-fluid -->
	</nav><!-- /.navbar -->
	<header class="head">
		<div class="search-bar">
			<form class="main-search" action="">
				<div class="input-group">
					<input type="text" class="form-control" placeholder="Live Search ...">
                <span class="input-group-btn">
            <button class="btn btn-primary btn-sm text-muted" type="button">
	            <i class="fa fa-search"></i>
            </button>
        </span>
				</div>
			</form><!-- /.main-search -->
		</div><!-- /.search-bar -->
		<div class="main-bar">
			<h3>
				<i class="fa fa-dashboard"></i>&nbsp; Dashboard</h3>
		</div><!-- /.main-bar -->
	</header><!-- /.head -->
</div><!-- /#top -->
<div id="left">
<div class="media user-media bg-dark dker">
	<div class="user-media-toggleHover">
		<span class="fa fa-user"></span>
	</div>
	<div class="user-wrapper bg-dark">
		<a class="user-link" href="">
			<img class="media-object img-thumbnail user-img" alt="User Picture" src="/assets/cp/img/user.gif">
			<span class="label label-danger user-label">16</span>
		</a>
		<div class="media-body">
			<h5 class="media-heading">Archie</h5>
			<ul class="list-unstyled user-info">
				<li> <a href="">Administrator</a>  </li>
				<li>Last Access :
					<br>
					<small>
						<i class="fa fa-calendar"></i>&nbsp;16 Mar 16:32</small>
				</li>
			</ul>
		</div>
	</div>
</div>

<!-- #menu -->
<?$this->renderPartial('/common/left_menu');?>
</div><!-- /#left -->
<div id="content">
	<div class="outer">
		<div class="inner bg-light lter">
			<div class="text-center">
				<ul class="stats_box">
					<li>
						<div class="sparkline bar_week"></div>
						<div class="stat_text">
							<strong>2.345</strong> Weekly Visit
							<span class="percent down"> <i class="fa fa-caret-down"></i> -16%</span>
						</div>
					</li>
					<li>
						<div class="sparkline line_day"></div>
						<div class="stat_text">
							<strong>165</strong> Daily Visit
							<span class="percent up"> <i class="fa fa-caret-up"></i> +23%</span>
						</div>
					</li>
					<li>
						<div class="sparkline pie_week"></div>
						<div class="stat_text">
							<strong>$2 345.00</strong> Weekly Sale
							<span class="percent"> 0%</span>
						</div>
					</li>
					<li>
						<div class="sparkline stacked_month"></div>
						<div class="stat_text">
							<strong>$678.00</strong> Monthly Sale
							<span class="percent down"> <i class="fa fa-caret-down"></i> -10%</span>
						</div>
					</li>
				</ul>
			</div>
			<hr>
			<div class="text-center">
				<a class="quick-btn" href="#">
					<i class="fa fa-bolt fa-2x"></i>
					<span>default</span>
					<span class="label label-default">2</span>
				</a>
				<a class="quick-btn" href="#">
					<i class="fa fa-check fa-2x"></i>
					<span>danger</span>
					<span class="label label-danger">2</span>
				</a>
				<a class="quick-btn" href="#">
					<i class="fa fa-building-o fa-2x"></i>
					<span>No Label</span>
				</a>
				<a class="quick-btn" href="#">
					<i class="fa fa-envelope fa-2x"></i>
					<span>success</span>
					<span class="label label-success">-456</span>
				</a>
				<a class="quick-btn" href="#">
					<i class="fa fa-signal fa-2x"></i>
					<span>warning</span>
					<span class="label label-warning">+25</span>
				</a>
				<a class="quick-btn" href="#">
					<i class="fa fa-external-link fa-2x"></i>
					<span>π</span>
					<span class="label btn-metis-2">3.14159265</span>
				</a>
				<a class="quick-btn" href="#">
					<i class="fa fa-lemon-o fa-2x"></i>
					<span>é</span>
					<span class="label btn-metis-4">2.71828</span>
				</a>
				<a class="quick-btn" href="#">
					<i class="fa fa-glass fa-2x"></i>
					<span>φ</span>
					<span class="label btn-metis-3">1.618</span>
				</a>
			</div>
			<hr>
			<div class="col-lg-8">
				<div class="box">
					<header>
						<h5><?=$this->pageTitle?></h5>
					</header>
					<div class="body">
						<?=$content?>
					</div>
				</div>
			</div>
			<?if(!empty($this->altMenu)):?>
				<div class="col-lg-4">
					<div class="box">
						<header>
							<h5>Дополнительное меню</h5>
						</header>
						<div class="body">
							<?php $this->widget('zii.widgets.CMenu',array(
								'htmlOptions' => array(
								),
								'encodeLabel' => false,
								'submenuHtmlOptions' => array(
									'class' => 'btn',
								),
								//'linkLabelWrapper' => 'false',
								'items'=>$this->altMenu
							)); ?>
						</div>
					</div>
				</div>
			<?endif?>

		</div><!-- /.inner -->
	</div><!-- /.outer -->
</div><!-- /#content -->
<div id="right" class="bg-light lter">
	<div class="alert alert-danger">
		<button type="button" class="close" data-dismiss="alert">&times;</button>
		<strong>Warning!</strong>  Best check yo self, you're not looking too good.
	</div>

	<!-- .well well-small -->
	<div class="well well-small dark">
		<ul class="list-unstyled">
			<li>Visitor <span class="inlinesparkline pull-right">1,4,4,7,5,9,10</span>
			</li>
			<li>Online Visitor <span class="dynamicsparkline pull-right">Loading..</span>
			</li>
			<li>Popularity <span class="dynamicbar pull-right">Loading..</span>
			</li>
			<li>New Users <span class="inlinebar pull-right">1,3,4,5,3,5</span>
			</li>
		</ul>
	</div><!-- /.well well-small -->

	<!-- .well well-small -->
	<div class="well well-small dark">
		<button class="btn btn-block">Default</button>
		<button class="btn btn-primary btn-block">Primary</button>
		<button class="btn btn-info btn-block">Info</button>
		<button class="btn btn-success btn-block">Success</button>
		<button class="btn btn-danger btn-block">Danger</button>
		<button class="btn btn-warning btn-block">Warning</button>
		<button class="btn btn-inverse btn-block">Inverse</button>
		<button class="btn btn-metis-1 btn-block">btn-metis-1</button>
		<button class="btn btn-metis-2 btn-block">btn-metis-2</button>
		<button class="btn btn-metis-3 btn-block">btn-metis-3</button>
		<button class="btn btn-metis-4 btn-block">btn-metis-4</button>
		<button class="btn btn-metis-5 btn-block">btn-metis-5</button>
		<button class="btn btn-metis-6 btn-block">btn-metis-6</button>
	</div><!-- /.well well-small -->

	<!-- .well well-small -->
	<div class="well well-small dark">
		<span>Default</span> <span class="pull-right"><small>20%</small> </span>
		<div class="progress xs">
			<div class="progress-bar progress-bar-info" style="width: 20%"></div>
		</div>
		<span>Success</span> <span class="pull-right"><small>40%</small> </span>
		<div class="progress xs">
			<div class="progress-bar progress-bar-success" style="width: 40%"></div>
		</div>
		<span>warning</span> <span class="pull-right"><small>60%</small> </span>
		<div class="progress xs">
			<div class="progress-bar progress-bar-warning" style="width: 60%"></div>
		</div>
		<span>Danger</span> <span class="pull-right"><small>80%</small> </span>
		<div class="progress xs">
			<div class="progress-bar progress-bar-danger" style="width: 80%"></div>
		</div>
	</div>
</div><!-- /#right -->
</div><!-- /#wrap -->
<footer class="Footer bg-dark dker">
	<p>2014 &copy; Metis Bootstrap Admin Template</p>
</footer><!-- /#footer -->

<!-- #helpModal -->
<div id="helpModal" class="modal fade">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title">Modal title</h4>
			</div>
			<div class="modal-body">
				<p>
					Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor
					in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
				</p>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			</div>
		</div><!-- /.modal-content -->
	</div><!-- /.modal-dialog -->
</div><!-- /.modal --><!-- /#helpModal -->

<!--jQuery 2.1.1 -->
<script src="/assets/cp/lib/jquery/jquery.min.js"></script>

<!--Bootstrap -->
<script src="/assets/cp/lib/bootstrap/js/bootstrap.min.js"></script>
<script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script>

<!-- Screenfull -->
<script src="/assets/cp/lib/screenfull/screenfull.js"></script>
<script src="/assets/cp/lib/moment/moment.min.js"></script>
<script src="/assets/cp/lib/fullcalendar/fullcalendar.min.js"></script>
<script src="/assets/cp/lib/jquery.tablesorter/jquery.tablesorter.min.js"></script>
<script src="/assets/cp/lib/jquery.sparkline/jquery.sparkline.min.js"></script>
<script src="/assets/cp/lib/flot/jquery.flot.js"></script>
<script src="/assets/cp/lib/flot/jquery.flot.selection.js"></script>
<script src="/assets/cp/lib/flot/jquery.flot.resize.js"></script>

<!-- Metis core scripts -->
<script src="/assets/cp/js/core.min.js"></script>

<!-- Metis demo scripts -->
<script src="/assets/cp/js/app.min.js"></script>
<script>
	$(function() {
		Metis.dashboard();
	});
</script>
<script src="/assets/cp/js/style-switcher.min.js"></script>
</body>
</html>