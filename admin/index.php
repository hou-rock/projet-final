<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" lang="fr">
<head>
<meta http-equiv="Content-Type" content="text/html; charset="utf-8">
<title>BMW Tunis</title>
	<link rel="shortcut icon" href="img/favicon.ico">

	<link href="css/style.css" rel="stylesheet" type="text/css">
	<link href="css/stylemenu.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" href="css/demo.css" type="text/css">
	<link rel="stylesheet" href="css/bjqs.css" type="text/css">
	<link rel="stylesheet" href="css/form.css" type="text/css">
	<link rel="stylesheet" href="css/form2.css" type="text/css">
	<link rel="stylesheet" href="css/form3.css" type="text/css">
	<link rel="stylesheet" href="css/stylepres.css" type="text/css" media="screen" />
	<link rel="stylesheet" href="css/slide.css" type="text/css" media="screen" />
	
	<link rel="stylesheet" type="text/css" href="css/jquery.fancybox.css?v=2.1.2" media="screen" />
	<link rel="stylesheet" type="text/css" href="css/jquery.fancybox-buttons.css?v=1.0.5" />
	<link rel="stylesheet" type="text/css" href="css/jquery.fancybox-thumbs.css?v=1.0.7" />
	
	<script src="js/jquery-1.8.2.min.js"></script>
    <script src="js/bjqs-1.3.min.js"></script>
	<script src="js/fade.js"></script>
	<script src="js/features.js"></script>
	<script src="js/form.js"></script>
	<script src="js/form2.js"></script>
	<script src="js/form3.js"></script>
	<script type="text/javascript" src="js/script.js"></script>
	<script src="js/labelcontain.js"></script>
	<script src="js/slide.js" type="text/javascript"></script>
	
	<script type="text/javascript" src="js/jquery.mousewheel-3.0.6.pack.js"></script>
	<script type="text/javascript" src="js/jquery.fancybox.js?v=2.1.3"></script>
	<script type="text/javascript" src="js/jquery.fancybox-buttons.js?v=1.0.5"></script>
	<script type="text/javascript" src="js/jquery.fancybox-thumbs.js?v=1.0.7"></script>
	<script type="text/javascript" src="js/jquery.fancybox-media.js?v=1.0.5"></script>
	
	<?php if(!isset($_GET['page']))  $_GET['page']="1";?> 	
</head>

<body>
<?php include ("inscription_slide.php") ?>
<?php include("header.php") ?>
<div class="content">		
	<div class="corp">
			<?php if(isset($_GET['page']) and $_GET['page']==1)
					{ include("accueil.php");
					}
					?>
					<?php if(isset($_GET['page']) and $_GET['page']==2)
					{ include("automobiles.php");
					}
					?>
					<?php if(isset($_GET['page']) and $_GET['page']==3)
					{ include("presentation.php");
					}
					?>
					<?php if(isset($_GET['page']) and $_GET['page']==4)
					{ include("gallery.php");
					}
					?>
					<?php if(isset($_GET['page']) and $_GET['page']==5)
					{ include("panier.php");
					}
					?>
						
					<?php if(isset($_GET['page']) and $_GET['page']==6)
					{ include("contact.php");
					}
					?>	
					
	</div>
</div>	

<?php include("footer.php") ?>

</body>
</html>