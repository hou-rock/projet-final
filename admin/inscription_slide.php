

<?php
session_start();
?>

<!-- Panel -->
<div id="toppanel">
	
	<!-- The tab on top -->	
	<div class="tab">
		<ul class="login">
			<li class="left">&nbsp;</li>
			<li>Bonjour <?php echo $_SESSION['nom_clt'];?>!</li>
			<li class="sep">|</li>
			<li id="toggle">
				
				<a class="open" href="..">Deconnexion</a>			
			</li>
			<li class="right">&nbsp;</li> 
		</ul> 
	</div> <!-- / top -->
	
</div> <!--panel -->

