<?php
session_start();
?>
<?php include ("register.php"); ?>
<!-- Panel -->
<div id="toppanel">
	<div id="panel">
		<div class="content clearfix">
			<div class="left">
				
			<?php
			
			if(!$_SESSION['id']):
			
			?>
			
				<form class="clearfix" action="" method="post">
					<h1>Se Connecter</h1>
					
					<?php
						
						if($_SESSION['msg']['login-err'])
						{
							echo '<div class="err" style="color:red;">'.$_SESSION['msg']['login-err'].'</div>';
							unset($_SESSION['msg']['login-err']);
						}
					?>
					
					<label class="grey" for="username">Client:</label>
					<input class="field" type="text" name="nom_clt"   size="23" value="" />
					<label class="grey" for="password">mot de passe:</label>
					<input class="field" type="password" name="password" id="password" size="23" value="" />
	            	<label><input name="rememberme" id="rememberme" type="checkbox" checked="checked" value="forever" /> &nbsp;Se souvenir de moi</label>
        			<div class="clear"></div>
					<input type="submit" name="valider" value="" class="bt_login" />
				</form>
			</div>
			<div class="left1">
				<!-- Login Form -->
				<form class="clearfix" action="" method="post">
					<h1>S'enregistrer</h1>	

					<?php
						
						if($_SESSION['msg']['reg-err'])
						{
							echo '<div class="err" style="color:red;>'.$_SESSION['msg']['reg-err'].'</div>';
							unset($_SESSION['msg']['reg-err']);
						}
						
						if($_SESSION['msg']['reg-success'])
						{
							echo '<div class="success">'.$_SESSION['msg']['reg-success'].'</div>';
							unset($_SESSION['msg']['reg-success']);
						}
					?>
					
					
					<label class="grey" for="nom">Nom:</label>
					<input class="field" type="text" name="nom_clt" id="nom" value="<?php echo "";?>" size="23" />
					
					<label class="grey" for="prenom">Pr&eacute;nom:</label>
					<input class="field" type="text" name="prenom_clt" id="prenom" value="<?php echo "";?>" size="23" />
					
					<input type="submit" name="ajouter" value="" class="bt_register" />
				
			</div>
			<div class="right">			
				<!-- Register Form -->

					<label class="grey" for="date">mot de passe</label>
					<input class="field" type="password" name="password" id="password" size="23" value=""  />
					
					<label class="grey" for="adr">Adresse:</label>
					<input class="field" type="text" name="adresse_clt" id="adr" value="" size="23" />
				
					<label class="grey" for="email">Email:</label>
					<input class="field" type="text" name="email" id="email" size="23" value="" />
					
					<label class="grey" for="email">T&eacute;l&eacute;phone:</label>
					<input class="field" type="text" name="tel_clt" id="tel" size="23" value="" />
					
					
				</form>
			</div>
			<?php
			
			else:
			
			?>
            
            <div class="left">
            <h1>Panneau membre</h1>
            
            <p>Controles utlisateur</p>
            <a href="php/registered.php">Exporter mes données sur PDF</a>
            <p>- ou -</p>
            <h1><a href="?logoff">Deconnexion</a><h1>
            </div>
            
            <div class="left right">
            </div>
            
            <?php
			endif;
			?>
		</div>
	</div> <!-- /login -->	

	<!-- The tab on top -->	
	<div class="tab">
		<ul class="login">
			<li class="left">&nbsp;</li>
			<li>Bonjour <?php echo $_SESSION['nom_clt'] ? $_SESSION['nom_clt'] : 'Invite';?>!</li>
			<li class="sep">|</li>
			<li id="toggle">
				<a id="open" class="open" href="#"><?php echo $_SESSION['id']?'Ouvrir Panneau':'Se connecter | Senregistrer';?></a>
				<a id="close" style="display: none;" class="close" href="#">Fermer Panneau</a>			
			</li>
			<li class="right">&nbsp;</li>
		</ul> 
	</div> <!-- / top -->
	
</div> <!--panel -->

