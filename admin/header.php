<style>
.correct {
  border-color: rgba(68, 191, 68, 0.75);
}

.correct:focus {
  border-color: rgba(68, 191, 68, 0.75);
  -moz-box-shadow: 0 0 8px rgba(68, 191, 68, 0.5);
  -webkit-box-shadow: 0 0 8px rgba(68, 191, 68, 0.5);
  box-shadow: 0 0 8px rgba(68, 191, 68, 0.5);
}

.incorrect {
  border-color: rgba(191, 68, 68, 0.75);
}

.incorrect:focus {
  border-color: rgba(191, 68, 68, 0.75);
  -moz-box-shadow: 0 0 8px rgba(191, 68, 68, 0.5);
  -webkit-box-shadow: 0 0 8px rgba(191, 68, 68, 0.5);
  box-shadow: 0 0 8px rgba(191, 68, 68, 0.5);
}

.tooltip {
  display: inline-block;
  margin-left: 20px;
  padding: 2px 4px;
  border: 1px solid #555;
  background-color: #CCC;
  -moz-border-radius: 4px;
  -webkit-border-radius: 4px;
  border-radius: 4px;
}
</style>

<div class="header">
	<div class="banner">
		<div id="container">
			<div id="banner-fade">
					<ul class="bjqs">
				  <li><img src="img/BMW1.jpg" title="<br><span style=font-size:50px;font-weight:normal;padding:1%;margin-left:41px;color:#fff;></span><br>"> </li>
				  	 <li><img src="img/BMW2.jpg" title="<br><span style=font-size:50px;font-weight:normal;padding:1%;margin-left:41px;color:#fff;></span><br>"> </li>
				   <li><img src="img/BMW3.jpg" title="<br><span style=font-size:50px;font-weight:normal;padding:1%;margin-left:41px;color:#fff;></span><br>"> </li>
				   <li><img src="img/BMW4.jpg" title="<br><span style=font-size:50px;font-weight:normal;padding:1%;margin-left:41px;color:#fff;></span><br>"> </li>
				   <li><img src="img/BMW5.jpg" title="<br><span style=font-size:50px;font-weight:normal;padding:1%;margin-left:41px;color:#fff;></span><br>"> </li>
				   <li><img src="img/BMW7.jpg" title="<br><span style=font-size:50px;font-weight:normal;padding:1%;margin-left:41px;color:#fff;></span><br>"> </li>
				   <li><img src="img/BMW8.jpg" title="<br><span style=font-size:50px;font-weight:normal;padding:1%;margin-left:41px;color:#fff;></span><br>"> </li>
				  </ul>
		  </div>
		  <script class="secret-source">
			jQuery(document).ready(function($) {

			  $('#banner-fade').bjqs({
				height      : 484,
				width       : 960,
				responsive  : true
			  });

			});
		  </script>
			
			<div class="login"></div>
				
			<div class="menu">
				<div id="container">
					<div id="menuwrap">
						<div id="logo">
							<a href="?page=1"><img src="img/logo.png" width="46" height="46" style="margin-left:35px;margin-top:1px;border:0px;" target="bilel"></a>
						</div>
						<div style="clear:both"></div>
						<ul id="menu1">
							<li id="home"><a href="?page=1" <?php if($_GET['page']=="1") echo 'class="current"';?>>Accueil</a></li>
							<li id="articles"><a href="?page=3" <?php if($_GET['page']=="3") echo 'class="current"';?>>Gallery</a></li>
							<li id="videos"><a href="?page=4" <?php if($_GET['page']=="4") echo 'class="current"';?>>Présentation</a></li>
							<li id="services"><a href="?page=2" <?php if($_GET['page']=="2") echo 'class="current"';?>>Automobiles</a></li>
							<li id="panier"><a href="?page=5" <?php if($_GET['page']=="5") echo 'class="current"';?>>Panier</a></li>
							<li id="contact"><a href="?page=6" <?php if($_GET['page']=="6") echo 'class="current"';?>>contact</a></li>
						</ul>
						<div id="search">		
							<input type="text" id="rechercher" autocomplete="on"  style="float:right;margin-right:15px;margin-top:-36px;border:1px solid #fff;padding:6px 6px 4px;border-radius: 5px 5px 5px 5px;-moz-border-radius: 5px;-webkit-border-radius: 5px;box-shadow:1px 0px 3px gray inset;-moz-box-shadow:1px 0px 3px gray inset;-webkit-box-shadow:1px 0px 3px gray inset;background:#f0f0f0; color:#676767; " value="" size=29>
							<input type="submit" id="search-submit" value="" />
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>