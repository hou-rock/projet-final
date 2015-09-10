<?php

define('INCLUDE_CHECK',true);
error_reporting(E_ALL ^ E_NOTICE);
include ('connection.php');
// Those two files can be included only if INCLUDE_CHECK is defined


session_name('Login');
// Starting the session

session_set_cookie_params(2*7);
// Making the cookie live for 2 weeks

session_start();




if(isset($_GET['Se Deconnecter']))
{
	$_SESSION = array();
	session_destroy();
	
	header("Location: index.php");
	exit;
}

if(isset($_POST['valider']))
{
	

	
	if($_POST['username'] && $_POST['password'])
		
	{
	echo "belwafi";
		$nom = $_POST['username'];
		$pwd = $_POST['password'];
		$req = $bdd->query("Select *  from client where nom_clt='$nom' and password='$pwd' ");
		
		$row=$req->rowCount();
		if($row)
		{

			
			$_SESSION['id']=$row->id;
			$_SESSION['username']=$row->username;
			$_SESSION['password'] = $row->password;

			setcookie('client',$_POST['rememberme']);

			header("Location: admin/index.php");
		}
		?>
<script type="text/javascript">alert("bilel");</script>
		<?php
		
	}


	
}

/*********************************************Begin Insert*************************************************/
if(isset($_POST['ajouter']))
{
	// If the Register form has been submitted
	
?>

<script type="text/javascript">

alert("bilel");

</script>
<?php

/*********************************************submit data*************************************************/
	
	
		$cin = $_POST['cin_clt'];
		$nom = $_POST['username'];
		$prenom = $_POST['preusername'];
		$pwd = $_POST['password'];
		$email = $_POST['email'];
		$adresse = $_POST['adresse_clt'];
		$tel = $_POST['tel_clt'];

		
		$bdd->query("INSERT INTO client(cin_clt,nom_clt,prenom_clt,password,email,adresse_clt,tel_clt)
						VALUES(
							
							'$cin',
							'$nom',
							'$prenom',
							'$pwd',
							'$email',
							'$adresse',
							'$tel',
							
						)");
		
	
	

	
	
	header("Location: index.php");
	exit;
}

/*********************************************end Insert*************************************************/

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