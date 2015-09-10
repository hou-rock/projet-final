<?php

define('INCLUDE_CHECK',true);
error_reporting(E_ALL ^ E_NOTICE);
include ('connection.php');
// Those two files can be included only if INCLUDE_CHECK is defined


session_name('Login');
// Starting the session

session_set_cookie_params(2);
// Making the cookie live for 2 weeks

session_start();



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
	
	$err = array();
	// Will hold our errors
	
	
	if(!$_POST['nom_clt'] || !$_POST['password'])
		$err[] = 'Il faut remplir tous les champs!';
	
		
		// Escaping all input data
	if (!$err)
	{
		$nom = $_POST['nom_clt'];
		$pwd = $_POST['password'];
		$req = $bdd->query("Select *  from client where nom_clt='$nom' and password='$pwd' ");
		
		$row=$req->rowCount();

		if($row==1)
		{
    
		
			$_SESSION['id']=$row->id;
			$_SESSION['nom_clt']=$row->nom_clt;
			$_SESSION['password'] = $row->password;

			setcookie('client',$_POST['rememberme']);

			header("Location: admin/index.php");
		}
		
		
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
	
	$err = array();
	
	if(strlen($_POST['cin_clt'])<8 )
	{
		$err[]="Votre cin doit &ecirc;tre composé de 8 chiffres !";
	}
	
	if(strlen($_POST['nom_clt'])<3)
	{
		$err[]="Le nom d'utlisateur doit &ecirc;tre au moins compos&ecirc; de 3 caract&ecirc;res !";
	}
	
	if(preg_match('/[^a-zA-Z]+/i',$_POST['nom_clt']))
	{
		$err[]="Le nom d'utlisateur contient des caract&eacute;res invalides !";
	}
	
	if(strlen($_POST['prenom_clt'])<4)
	{
		$err[]="Le prenom d'utlisateur doit &ecirc;tre au moins compos&ecirc; de 4 caract&ecirc;res!";
	}
	
	if(preg_match('/[^a-zA-Z]+/i',$_POST['prenom_clt']))
	{
		$err[]="Le prenom d'utlisateur contient des caract&eacute;res invalides !";
	}
	
	if(strlen($_POST['password'])<6 || strlen($_POST['password'])>20)
	{
		$err[]="Le mot de passe doit &ecirc;tre entre 6 et 20 caract&eacute;res !";
	}
	
	if(preg_match('/[^a-zA-Z\-\_\.]+/i',$_POST['password']))
	{
		$err[]="Votre mot de passe contient des caract&eacute;res invalides !";
	}
	
	if($_POST['email']=='')
	{
		$err[]="Tu dois saisir votre email !";
	}
	
	if(preg_match("/^[\.A-z0-9_\-\+]+[@][A-z0-9_\-]+([.][A-z0-9_\-]+)+[A-z]{1,4}$/",$_POST['email']))
	{
		$err[]='Votre Email est invalide !';
	}
	
	if(strlen($_POST['adresse_clt'])<4 || strlen($_POST['adresse_clt'])>20)
	{
		$err[]="Votre adresse doit &ecirc;tre entre 3 et 20 caract&eacute;res !";
	}
	
	if(strlen($_POST['tel_clt'])<8)
	{
		$err[]="Votre tel doit &ecirc;tre au moins compos&ecirc; de 8 chiffres !";
	}
echo $err[1];
	if($err)
	{
		// If there are no errors
echo "bilel";
		$cin = $_POST['cin_clt'];
		$nom = $_POST['nom_clt'];
		$prenom = $_POST['prenom_clt'];
		$pwd = $_POST['password'];
		$email = $_POST['email'];
		$adresse = $_POST['adresse_clt'];
		$tel = $_POST['tel_clt'];

		$req=$bdd->prepare("INSERT INTO client(cin_clt,nom_clt,prenom_clt,password,email,adresse_clt,tel_clt)values(?,?,?,?,?,?,?)");
		$req->bindParam(1,$cin);
		$req->bindParam(2,$nom);
		$req->bindParam(3,$prenom);
		$req->bindParam(4,$pwd);
		$req->bindParam(5,$email);
		$req->bindParam(6,$adresse);
		$req->bindParam(7,$tel);
		$req->execute();


	if($err)
	$_SESSION['msg']['login-err'] = implode('<br>',$err);
	// Save the error messages in the session

	

		


}

}


?>