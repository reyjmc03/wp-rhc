<html <?php language_attributes(); ?>>
	<head>
	  <meta charset="utf-8">
	  <meta http-equiv="X-UA-Compatible" content="IE=edge">
	  <meta name="vieport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" />
	  <meta name="application-name" content="<?php bloginfo('name')?>" />
	  <?php wp_head('rhctheme'); ?>
	  <title><?php bloginfo('name'); ?> | Sorry - File not Found! </title>
	  <link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.ico?<?php echo date('l js \of F Y h:i:s A'); ?>">
	  	<style type="text/css">
			body {
				background: #e2e2e2 !important;
			}

			.page .error-template {
				font-family: "Avenir Roman", Times, Serif !important;
				margin-top: 8%;
			}

			.page .error-template .fof h1 {
				font-size: 250px;
				color: #ff6600;
				text-align: center;
				margin-bottom: 1px;
				text-shadow: 4px 4px 1px white;
				font-weight: 1000 !important;
			}

			.page .error-template .desc p {
				text-align: center;
				font-size: 25px;
			}

			.page .error-template .link p a {
				font-size: 15px !important;
				font-style: normal !important;
			}

			.page .error-template .link p a:focus,
			.page .error-template .link p a:hover {
				text-decoration: none;
				cursor: pointer;
				color: #5a5a5a !important;
			}

		</style>
	</head>
 
	<?php ############################ START OF BODY AND HTML ############################ ?>
	<body>
		<div class="page animated fadein" id="page">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
						<div class="error-template">
						 	<div class="image animated pulse">
						 		<center>
		           	<a class="" href="<?php echo get_option('home'); ?>">
		           		<img class="img-responsive" src="<?php echo get_stylesheet_directory_uri(); ?>/images/logo.png">
		           	</a>
		           	</center>
		          </div>
		          <div class="fof animated tada">
		          	<h1>404</h1>
		          </div>
		          <div class="desc">
		          	<p>Sorry - File not Found!</p>
		          </div>
		          <div class="link">
		          	<center>
		          	<p>
		          		<a href="<?php echo get_option('home'); ?>">
		          			<i class="fa fa-arrow-left"></i>&nbsp;BACK TO HOME&nbsp;<i class="fa fa-arrow-right"></i>
		          		</a>
		          	</p>
		          	</center>
		          </div>
		        </div>
					</div>
				</div>
			</div>
		</div>	
	</body>
	<?php ############################ END OF BODY AND HTML ############################ ?>
</html>