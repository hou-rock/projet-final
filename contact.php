<style type="text/css">
*{font-size:12px;}

td{color:#7b7b7b;}

.champs,textarea{
	margin-right:13px;
	margin-top:0px;
	z-index:62;
	border:1px solid #fff;
	padding:8px 8px 4px;
	border-radius: 5px 5px 5px 5px;
	-moz-border-radius: 5px;
	-webkit-border-radius: 5px;
	box-shadow:1px 0px 3px gray inset;
	-moz-box-shadow:1px 0px 3px gray inset;
	-webkit-box-shadow:1px 0px 3px gray inset;
	background:#f0f0f0;
	color:#676767;"
}

#envoi{
	width:80px;
	height:30px;
	background:url('img/envoi.png') no-repeat;
	border:none;
	cursor:pointer;
	float:right;
	margin-top:10px;
	margin-right:15px;
}

.link1 {
    background: url("img/agrandir.png") no-repeat scroll 0 0 transparent;
    border: 0 none;
    font-weight: bold;
    height: 30px;
    line-height: 27px;
    margin-left: 5px;
    text-align: center;
    text-indent: -5px;
    width: 80px;
}

</style>

<?php
//connection base
include("connection.php");
$err="ERREUR:";
if(isset($_POST['Envoyer']))
{
	
	if(preg_match('/[^a-zA-Z]+/i',$_POST['nom']))
	{
		$err.="Le nom d'utlisateur contient des caract&eacute;res invalides !<br>";
	}
	if(preg_match('/[^a-zA-Z]+/i',$_POST['prenom']))
	{
		$err.="Le prenom d'utlisateur contient des caractere invalides !";
	}
	if($_POST['email']=='')
	{
		$err.="Tu dois saisir votre email !";
	}
	
	if(!preg_match("/^[\.A-z0-9_\-\+]+[@][A-z0-9_\-]+([.][A-z0-9_\-]+)+[A-z]{1,4}$/",$_POST['email']))
	{
		$err.='Votre Email est invalide !';
	}
	if(strlen($_POST['phone'])<10)
	{
		$err.="Votre tel doit avoir au moins  10 chiffres !";
	}
	if($err!="ERREUR:")
	{
		?>
<script type="text/javascript">alert("<?php echo $err;?>");</script>
<?php

	}
	else
	{
	$nom=$_POST['nom'];
	$prenom = $_POST['prenom'];
	$email = $_POST['email'];
	$phone = $_POST['phone'];
	$raison = $_POST['raison'];
	$message = $_POST['message'];
 
	$req=$bdd->prepare("INSERT INTO contact(Nom,prenom,email,phone,raison,message)values(?,?,?,?,?,?)");
		$req->bindParam(1,$nom);
		$req->bindParam(2,$prenom);
		
		$req->bindParam(3,$email);
		$req->bindParam(4,$phone);
		$req->bindParam(5,$raison);
		$req->bindParam(6,$message);
		$req->execute();
		

	}
}
?>

<div class="Arborescence">Contact</div>
<div class="divleft">
<form name="f1" method="post" action="">
	<table>
		<tr>
			<td>Nom</td>
			<td>:</td>
			<td><input class="champs" type="text" name="nom" size="30" value=""></td>
		</tr>
		<tr>
			<td>Prenom</td>
			<td>:</td>
			<td><input class="champs" type="text" name="prenom" size="30" value=""></td>
		</tr>
		<tr>
			<td>E-Mail</td>
			<td>:</td>
			<td><input class="champs" type="text" name="email" size="30" value=""></td>
		</tr>
		<tr>
			<td>Phone</td>
			<td>:</td>
			<td><input class="champs" type="text" name="phone" size="30" value=""></td>
		</tr>
		<tr>
			<td>Raison</td>
			<td>:</td>
			<td><input class="champs" type="text" name="raison" size="30" value=""></td>
		</tr>
		<tr>
			<td>Message</td>
			<td>:</td>
			<td><textarea name="message" cols="23" style="width: 171px; height: 72px;"></textarea></td>
		</tr>
		<tr>
			<td></td>
			<td></td>
			<td><input id='envoi' type="submit"  name="Envoyer" value="" /></td>
		</tr>
	</table>
</form>
</div>
<div class="divmiddle">
	<table cellspacing="15">
		<tr>
			<td><span style="color:#00adef;font-weight:bold;">Adresse :</span><br>
			2245 Rue belanger <br>
			 H2G 1C5  Montreal Quebec, canada</td>
		</tr>
		<tr>
			<td><span style="color:#00adef;font-weight:bold;">E-Mail :</span><br>
			BMW-CARS@gmail.com</td>
		</tr>
		<tr>
			<td><span style="color:#00adef;font-weight:bold;">Tel :</span><br>
			(+1)514 740 2600<br>
			(+1)438 883 2712</td>
		</tr>
	</table>
</div>
<div class="divright">
<iframe width="310" height="187" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d178784.81868726882!2d-73.71205035!3d45.56012565!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4cc91a541c64b70d%3A0x654e3138211fefef!2zTW9udHLDqWFsLCBRQywgQ2FuYWRh!5e0!3m2!1sfr!2sus!4v1441735874111" output=embed></iframe><br /><small><a href="https://www.google.ca/maps/place/2245+Rue+B%C3%A9langer,+Montr%C3%A9al,+QC+H2G+1C5/@45.5497194,-73.6007529,17z/data=!3m1!4b1!4m2!3m1!1s0x4cc9194884ae21d5:0xa5ae4ce0579708f7!6m1!1e1" style="color:#0000FF;text-align:left"><p class="link1"></p></a></small></div>
</div>