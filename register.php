<?php

define('INCLUDE_CHECK',true);
error_reporting(E_ALL ^ E_NOTICE);
include ('connection.php');
// Those two files can be included only if INCLUDE_CHECK is defined


session_name('Login');
// Starting the session

setcookie('resterco', NULL, -1); 
// Making the cookie live for 2 weeks

session_start();

if($_SESSION['id'])
{
	// If you are logged in

	$_SESSION = array();
	session_destroy();
	
	// Destroy the session
}


if(isset($_GET['logoff']))
{
	$_SESSION = array();
	session_destroy();
	
	header("Location: index.php");
	exit;
}

if(isset($_POST['valider']))
{
	// Checking whether the Login form has been submitted
	
	$err = "";
	// Will hold our errors
	
	
	if(!$_POST['nom_clt'] || !$_POST['password'])
		$err+= 'Il faut remplir tous les champs!';
	
		
		// Escaping all input data
	if (!$err)
	{
		$nom = $_POST['nom_clt'];
		$pwd = $_POST['password'];
		$req = $bdd->query("Select *  from client where nom_clt='$nom' and password='$pwd' ");

		$res=$req->fetch(PDo::FETCH_OBJ);
		$row=$req->rowCount();
		if($row==1)
		{
   
	
			$_SESSION['id']=$res->id;
			$_SESSION['nom_clt']=$res->nom_clt;
			$_SESSION['password'] = $res->password;
			

			setcookie('client',$_POST['rememberme'],time()-3600,'/');

			header("Location: admin/index.php");
		}else
		?><script type="text/javascript">
         alert("mot de passe ou client n'est pas valide");

		</script>
		<?php
		
	}
	if($err)
	$_SESSION['msg']['login-err'] = implode('<br>',$err);
	// Save the error messages in the session

	
	//header("Location: index.php");
	//exit;
}

if(isset($_POST['ajouter']))
{
	// If the Register form has been submitted
	
	$err = "ERREUR:";
	
	
	
	
	if(preg_match('/[^a-zA-Z]+/i',$_POST['nom_clt']))
	{
		$err.="Le nom d'utlisateur contient des caract&eacute;res invalides !<br>";
	}
	
	
	if(preg_match('/[^a-zA-Z]+/i',$_POST['prenom_clt']))
	{
		$err.="Le prenom d'utlisateur contient des caractere invalides !";
	}
	
	if(strlen($_POST['password'])<6 || strlen($_POST['password'])>20)
	{
		$err.="Le mot de passe doit étre entre 6 et 20 caracteres !";
	}
	
	if(preg_match('/[^a-zA-Z\-\_\.]+/i',$_POST['password']))
	{
		$err.="Votre mot de passe contient des caractéres invalides !";
	}
	
	if($_POST['email']=='')
	{
		$err.="Tu dois saisir votre email !";
	}
	
	if(!preg_match("/^[\.A-z0-9_\-\+]+[@][A-z0-9_\-]+([.][A-z0-9_\-]+)+[A-z]{1,4}$/",$_POST['email']))
	{
		$err.='Votre Email est invalide !';
	}
	
	if(strlen($_POST['adresse_clt'])<4 || strlen($_POST['adresse_clt'])>20)
	{
		$err.="Votre adresse non valide !";
	}
	
	if(strlen($_POST['tel_clt'])<10)
	{
		$err.="Votre tel doit avoir au moins  10 chiffres !";
	}
	

	if($err!="ERREUR:")
	{
		?>
<script type="text/javascript">alert("<?php echo $err;?>");</script>
<?php
	}

	else{
		// If there are no errors
?><script type="text/javascript">
alert("merci de votre inscreption");
</script> ;
	<?php
		$nom = $_POST['nom_clt'];
		$prenom = $_POST['prenom_clt'];
		$pwd = $_POST['password'];
		$email = $_POST['email'];
		$adresse = $_POST['adresse_clt'];
		$tel = $_POST['tel_clt'];

		$req=$bdd->prepare("INSERT INTO client(nom_clt,prenom_clt,password,email,adresse_clt,tel_clt)values(?,?,?,?,?,?)");
		$req->bindParam(1,$nom);
		$req->bindParam(2,$prenom);
		$req->bindParam(3,$pwd);
		$req->bindParam(4,$email);
		$req->bindParam(5,$adresse);
		$req->bindParam(6,$tel);
		$req->execute();



	//$_SESSION['msg']['login-err'] = implode('<br>',$err);
	// Save the error messages in the session

	

		


}

}


?>