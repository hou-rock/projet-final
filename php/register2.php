<?php

define('INCLUDE_CHECK',true);
error_reporting(E_ALL ^ E_NOTICE);
require 'php/connect.php';
require 'php/functions.php';
// Those two files can be included only if INCLUDE_CHECK is defined

 
session_name('tzLogin');
// Starting the session

session_set_cookie_params(2*7*24*60*60);
// Making the cookie live for 2 weeks

session_start();

if($_SESSION['id'] && !isset($_COOKIE['tzRemember']) && !$_SESSION['rememberMe'])
{
	// If you are logged in, but you don't have the tzRemember cookie (browser restart)
	// and you have not checked the rememberMe checkbox:

	$_SESSION = array();
	session_destroy();
	
	// Destroy the session
}


if(isset($_GET['logoff']))
{
	$_SESSION = array();
	session_destroy();
	
	header("Location: Accueil.php");
	exit;
}

if($_POST['submit']=='Login')
{
	// Checking whether the Login form has been submitted
	
	$err = array();
	// Will hold our errors
	
	
	if(!$_POST['username'] || !$_POST['password'])
		$err[] = 'Il faut remplir tous les champs!';
	
	if(!count($err))
	{
		$_POST['username'] = mysql_real_escape_string($_POST['username']);
		$_POST['password'] = mysql_real_escape_string($_POST['password']);
		$_POST['rememberMe'] = (int)$_POST['rememberMe'];
		
		// Escaping all input data

		$row = mysql_fetch_assoc(mysql_query("SELECT id,usr FROM tz_members WHERE usr='{$_POST['username']}' AND pass='{$_POST['password']}'"));

		if($row['usr'])
		{
			// If everything is OK login
			
			$_SESSION['usr']=$row['usr'];
			$_SESSION['id'] = $row['id'];
			$_SESSION['rememberMe'] = $_POST['rememberMe'];
			
			// Store some data in the session
			
			setcookie('tzRemember',$_POST['rememberMe']);
		}
		else $err[]="Mauvais Nom d'utlisateur et/ou Mot de passe!";
	}
	
	if($err)
	$_SESSION['msg']['login-err'] = implode('<br />',$err);
	// Save the error messages in the session

	header("Location: Accueil.php");
	exit;
}
else if($_POST['submit']=='Register')
{
	// If the Register form has been submitted
	
	$err = array();
	
	if(strlen($_POST['username'])<4 || strlen($_POST['username'])>20)
	{
		$err[]="Le nom d'utlisateur doit &ecirc;tre entre 3 et 20 caract&eacute;res !";
	}
	
	if(preg_match('/[^a-z0-9\-\_\.]+/i',$_POST['username']))
	{
		$err[]="Votre nom d'utlisateur contient des caract&eacute;res invalides !";
	}
	
	if(strlen($_POST['password'])<6 || strlen($_POST['password'])>20)
	{
		$err[]="Le mot de passe doit &ecirc;tre entre 6 et 20 caract&eacute;res !";
	}
	
	if(preg_match('/[^a-z0-9\-\_\.]+/i',$_POST['password']))
	{
		$err[]="Votre mot de passe contient des caract&eacute;res invalides !";
	}
	
	if(strlen($_POST['ville'])<4 || strlen($_POST['ville'])>20)
	{
		$err[]="Le nom de ville doit &ecirc;tre entre 3 et 20 caract&eacute;res !";
	}
	
	if(!checkEmail($_POST['email']))
	{
		$err[]='Votre Email est invalide !';
	}
	
	if(!count($err))
	{
		// If there are no errors
		
		//$pass = substr(md5($_SERVER['REMOTE_ADDR'].microtime().rand(1,100000)),0,6);
		// Generate a random password
		
		$_POST['email'] = mysql_real_escape_string($_POST['email']);
		$_POST['username'] = mysql_real_escape_string($_POST['username']);
		$_POST['ville'] = mysql_real_escape_string($_POST['ville']);
		$_POST['password'] = mysql_real_escape_string($_POST['password']);
		// Escape the input data
		//'".md5($pass)."',
		
		mysql_query("	INSERT INTO tz_members(usr,pass,email,age,ville,regIP,dt)
						VALUES(
						
							'".$_POST['username']."',
							'".$_POST['password']."',
							'".$_POST['email']."',
							'".$_POST['age']."',
							'".$_POST['ville']."',
							'".$_SERVER['REMOTE_ADDR']."',
							NOW()
							
						)");
		
		if(mysql_affected_rows($link)==1)
		{

			$_SESSION['msg']['reg-success']="Vous avez Cr&eacute;e un compte avec succ&eacute;es";
		}
		else $err[]="Le Nom d'utlisateur choisi est d&eacute;ja pris !";
	}

	if(count($err))
	{
		$_SESSION['msg']['reg-err'] = implode('<br />',$err);
	}	
	
	header("Location: Accueil.php");
	exit;
}

$script = '';

if($_SESSION['msg'])
{
	// The script below shows the sliding panel on page load
	
	$script = '
	<script type="text/javascript">
	
		$(function(){
		
			$("div#panel").show();
			$("#toggle a").toggle();
		});
	
	</script>';
	
}
?>