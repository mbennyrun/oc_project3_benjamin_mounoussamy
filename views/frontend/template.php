<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author" content="Sergey Pozhilov (GetTemplate.com)">
	
	<script src="/tinymce/js/tinymce/tinymce.min.js"></script>
  	<script type="text/javascript">
  	tinymce.init({
    	selector: '#content'
  	});
  	</script>

	<title>Billet simple pour l'Alaska - Jean Forteroche</title>
	<link rel="shortcut icon" href="public/themes/frontend/progressus/assets/images/alaska_favicon.png">
	<link rel="stylesheet" media="screen" href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700">
	<link rel="stylesheet" href="public/themes/frontend/progressus/assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="public/themes/frontend/progressus/assets/css/font-awesome.min.css">
    <!-- Custom styles for our template -->
	<link rel="stylesheet" href="public/themes/frontend/progressus/assets/css/bootstrap-theme.css" media="screen" >
	<link rel="stylesheet" href="public/themes/frontend/progressus/assets/css/main.css">
	<link rel="stylesheet" href="public/css/custom.css"/>
	<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
	<script src="public/themes/frontend/progressus/assets/js/html5shiv.js"></script>
	<script src="public/themes/frontend/progressus/assets/js/respond.min.js"></script>
	<![endif]-->
</head>

<body class="home">
	<!-- Fixed navbar -->
	<div class="navbar navbar-inverse navbar-fixed-top headroom" >
		<div class="container">
			<div class="navbar-header">
				<!-- Button for smallest screens -->
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"><span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
				<a class="navbar-brand" href="index.php"><img src="public/themes/frontend/progressus/assets/images/alaska_logo.png" alt="Logo alaska"></a>
			</div>
			<div class="navbar-collapse collapse">
				<ul class="nav navbar-nav pull-right">
					<li class="active"><a href="index.php">Accueil</a></li>
					<li><a href="index.php?action=listAllposts">Chapitres</a></li>
					<li><a class="btn" href="admin.php">CONNECTEZ-VOUS</a></li>
				</ul>
			</div><!--/.nav-collapse -->
		</div>
	</div> 
	<!-- /.navbar -->

	<!-- Header -->
	<header id="head">
		<div class="container">
			<div class="row">
				<h1 class="lead" style="font-family: lobster;font-size:50px;">Billet simple pour l'Alaska</h1>
				<p class="tagline">					
                    Un roman de Jean Forteroche.   
				</p>
			</div>
		</div>
	</header>
	<!-- /Header -->


	<div class="container">
		<br> <br>
			<?= $content ?>
		</p>
	</div>


</div>	<!-- /container -->
	
	<!-- Social links. @TODO: replace by link/instructions in template -->
	<section id="social">
		<div class="container">
			<div class="wrapper clearfix">
				<!-- AddThis Button BEGIN -->
				<div class="addthis_toolbox addthis_default_style">
				<a class="addthis_button_facebook_like" fb:like:layout="button_count"></a>
				<a class="addthis_button_tweet"></a>
				<a class="addthis_button_linkedin_counter"></a>
				<a class="addthis_button_google_plusone" g:plusone:size="medium"></a>
				</div>
				<!-- AddThis Button END -->
			</div>
		</div>
	</section>
	<!-- /social links -->


	<footer id="footer" class="top-space">

		<div class="footer1">
			<div class="container">
				<div class="row">
					
					<div class="col-md-3 widget">
						<h3 class="widget-title">Contact</h3>
						<div class="widget-body">
							<p>Adresse :<br />
							12 Rue du Général de Gaulle<br />
							97434 La Réunion<br /><br />
							Téléphone :<br />
							02 62 40 70 37
							</p>	
						</div>
					</div>

					<div class="col-md-3 widget">
						<h3 class="widget-title">Suivez-moi</h3>
						<div class="widget-body">
							<p class="follow-me-icons">
								<a href=""><i class="fa fa-twitter fa-2"></i></a>
								<a href=""><i class="fa fa-dribbble fa-2"></i></a>
								<a href=""><i class="fa fa-github fa-2"></i></a>
								<a href=""><i class="fa fa-facebook fa-2"></i></a>
							</p>	
						</div>
					</div>

					<div class="col-md-6 widget">
						<h3 class="widget-title">A propos</h3>
						<div class="widget-body">
							<p>Jean Forteroche, l'auteur et écrivain célèbre, vous présente son nouveau roman "Billet simple pour l'Alaska", un thriller hâletant et passionant qui vous fera froid dans le dos.</p>
							<p>Suivez l'évolution de l'histoire au fil des chapitres publiés exclusivement par l'auteur sur ce site.</p>
						</div>
					</div>

				</div> <!-- /row of widgets -->
			</div>
		</div>

		<div class="footer2">
			<div class="container">
				<div class="row">
					
					<div class="col-md-6 widget">
						<div class="widget-body">
							<p class="simplenav">
								<a href="index.php">Accueil</a> | 
								<a href="index.php?action=listAllposts">Chapitres</a> |
								<b><a href="admin.php">Connectez-vous</a></b>
							</p>
						</div>
					</div>

					<div class="col-md-6 widget">
						<div class="widget-body">
							<p class="text-right">
								Copyright &copy; 2018, Benjamin Mounoussamy. Designed by <a href="http://gettemplate.com/" rel="designer">gettemplate</a> 
							</p>
						</div>
					</div>

				</div> <!-- /row of widgets -->
			</div>
		</div>

	</footer>	
		




	<!-- JavaScript libs are placed at the end of the document so the pages load faster -->
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	<script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
	<script src="public/themes/frontend/progressus/assets/js/headroom.min.js"></script>
	<script src="public/themes/frontend/progressus/assets/js/jQuery.headroom.min.js"></script>
	<script src="public/themes/frontend/progressus/assets/js/template.js"></script>
	
	<style>
	   @font-face {
            font-family: lobster;
            src: url(public/themes/frontend/progressus/assets/fonts/lobster.otf);
        }
	</style>
	
	
</body>
</html>
