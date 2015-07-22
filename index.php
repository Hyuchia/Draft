<?php include_once("Draft.php"); ?>

<!DOCTYPE html>

<!--Aegis Framework | MIT License | http://www.aegisframework.com/ -->

<html lang="en" itemscope itemtype="http://schema.org/WebPage"> <!--Change the lang property to your web's language-->

	<head prefix="og: http://ogp.me/ns#">

		<title></title><!--Up to 60-70 Characters. Optimal Format: Primary Keyword - Secondary Keyword | Brand Name-->

		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
		<meta name="description" content=""><!--Page description. No longer than 155 characters.-->
		<meta name="keywords" content="">
		<meta name="author" content=""><!--Name of the author.-->

		<!--Facebook Meta Tags-->
		<meta property="og:image" content="http://"/> <!--URL of Image to show-->
		<meta property="og:description" content=""/> <!--Page Description-->
		<meta property="og:site_name" content=""/> <!--The Name Here-->
		<meta property="og:url" content="http://"/> <!--The Web main URL-->
		<meta property="og:title" content=""/><!--The Title Here-->

		<!--Google Meta Tags-->
		<meta itemprop="name" content=""><!--The Name or Title Here-->
		<meta itemprop="description" content=""><!--Page Description-->
		<meta itemprop="image" content="http://"><!--URL of Image to show-->

		<!--Twitter Meta Tags - You'll have to validate your website here: https://dev.twitter.com/docs/cards/validation/validator-->
		<meta name="twitter:card" content="summary_large_image"> <!--Content type:summary, summary_large_image, photo, gallery, product, app, player-->
        <meta name="twitter:domain" content=""> <!--Your web's domain-->
		<meta name="twitter:site" content="@"> <!--@publisher-->
		<meta name="twitter:title" content=""> <!--Page Title-->
		<meta name="twitter:description" content=""> <!--Page description less than 200 characters-->
		<meta name="twitter:creator" content="@"> <!--@author-->
		<meta name="twitter:image:src" content="http://"><!--URL of Image to show-->

		<!--START of Web Apps Tags (Delete if not necessary)-->

			<!--Android Meta Tags-->
			<meta name="mobile-web-app-capable" content="yes">

			<!--Apple Meta Tags-->
			<meta name="apple-mobile-web-app-capable" content="yes">
			<meta name="apple-mobile-web-app-title" content=""> <!--App Title or Name-->

			<!--Microsoft Tags-->
			<meta name="msapplication-TileColor" content=""><!--Color of the tile on Windows. In hexadecimal format-->
			<meta name="application-name" content=""/> <!-- App Title -->
			<meta name="msapplication-tooltip" content=""/> <!--Small text on hover-->
			<meta name="msapplication-starturl" content="http://"/> <!-- URL to start in -->
			<meta name="msapplication-square70x70logo" content="img/msapplication-square70x70logo.png" /><!--Image for Tile 70x70-->
			<meta name="msapplication-square150x150logo" content="img/msapplication-square150x150logo.png" /><!--Image for Tile 150x150-->
			<meta name="msapplication-wide310x150logo" content="img/msapplication-wide310x150logo.png" /><!--Image for Tile 310x150-->
			<meta name="msapplication-square310x310logo" content="img/msapplication-square310x310logo.png" /><!--Image for Tile 310x310-->

		<!--END of Web Apps Tags-->

		<link rel="publisher" href=""><!--Publisher's Google+ URL-->

		<!-- Android Mobile Icons-->
		<link rel="icon" sizes="192x192" href="img/icon_192x192.png">
		<link rel="icon" sizes="128x128" href="img/icon_128x128.png">

		<!--Apple mobile icons-->
		<link rel="apple-touch-icon" href="img/touch-icon-iphone.png"><!--60 x 60-->
		<link rel="apple-touch-icon" sizes="76x76" href="img/touch-icon-ipad.png"><!--76 x 76-->
		<link rel="apple-touch-icon" sizes="120x120" href="img/touch-icon-iphone-retina.png"><!--120 x 120-->
		<link rel="apple-touch-icon" sizes="152x152" href="img/touch-icon-ipad-retina.png"><!--152 x 152-->

		<link rel="shortcut icon" href="img/favicon.ico"/><!--Favicon. Good tool for creating one: http://xiconeditor.com/ Create all sizes.-->
		<link rel="canonical" href=""><!--Canonical URL of your webpage-->

		<link rel="stylesheet" href="style/normalize.min.css">
		<link rel="stylesheet" href="style/animate.min.css">
		<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="style/aegis.css">
		<link rel="stylesheet" href="style/draft.css">
		<link rel="stylesheet" href="style/prism.css">
		<link rel="stylesheet" href="style/main.css">

		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
		<script type="text/javascript" src="https://cdn.mathjax.org/mathjax/latest/MathJax.js?config=TeX-AMS-MML_HTMLorMML"></script>
		<script type="text/x-mathjax-config">
			MathJax.Hub.Config({
			  tex2jax: {inlineMath: [['$','$'], ['\\(','\\)']]}
			});
		</script>
		<script src="js/prism.js"></script>
		<script src="js/plugins.js"></script>
		<script src="js/draft.js"></script>
		<script src="js/main.js"></script>

	</head>
	<body>
			<nav class="clearfix">
				<!-- Place your home URL in the href attribute-->
				<a href="" class="home-icon"><i class="fa fa-home"></i> <span>Home</span></a>
				<span class="fa fa-bars menu-icon" ></span>
				<ul data-menu="main">
					<!-- This link will take you to your main page. Change text if needed.-->
					<li data-show='main'>Welcome</li>
					<?php echo $content[0]; ?>
				</ul>
			</nav>
			<div class="documentation">
				<section class="doc active" data-doc="main">
					<?php echo buildMain(); ?>
				</section>
				<?php echo $content[1]; ?>
			</div>
	</body>
</html>