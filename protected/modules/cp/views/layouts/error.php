<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>404</title>
	<meta name="msapplication-TileColor" content="#5bc0de" />
	<meta name="msapplication-TileImage" content="assets/img/metis-tile.png" />

	<!-- Bootstrap -->
	<link rel="stylesheet" href="/assets/cp/lib/bootstrap/css/bootstrap.min.css">

	<!-- Font Awesome -->
	<link rel="stylesheet" href="/assets/cp/lib/font-awesome/css/font-awesome.min.css">

	<!-- Metis core stylesheet -->
	<link rel="stylesheet" href="/assets/cp/css/main.min.css">
	<link rel="stylesheet" href="/assets/cp/lib/magic/magic.css">
	<script>
		(function(i, s, o, g, r, a, m) {
			i['GoogleAnalyticsObject'] = r;
			i[r] = i[r] || function() {
				(i[r].q = i[r].q || []).push(arguments)
			}, i[r].l = 1 * new Date();
			a = s.createElement(o),
				m = s.getElementsByTagName(o)[0];
			a.async = 1;
			a.src = g;
			m.parentNode.insertBefore(a, m)
		})(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');
		ga('create', 'UA-1669764-16', 'onokumus.com');
		ga('send', 'pageview');
	</script>
</head>
<body class="error">
<div class="container">
	<div class="col-lg-8 col-lg-offset-2 text-center">
		<?=$content?>
	</div><!-- /.col-lg-8 col-offset-2 -->
</div>
</body>
</html>
