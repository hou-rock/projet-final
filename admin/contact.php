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

if(isset($_POST['Envoyer']))
{
	$nom = $_POST['nom'];
	$prenom = $_POST['prenom'];
	$email = $_POST['email'];
	$phone = $_POST['phone'];
	$raison = $_POST['raison'];
	$message = $_POST['message'];
	mysql_query("insert into contact values ('','$nom','$email','$phone','$raison','$message')");
}
?>

<div class="Arborescence">Contact</div>
<div class="divleft">
<form name="f1" method="post" action="contact.php">
	<table>
		<tr>
			<td>Nom</td>
			<td>:</td>
			<td><input class="champs" type="text" name="nom" size="30" value=""></td>
		</tr>
		<tr>
			<td>Prénom</td>
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
			 H2G1C5  Montréal Quebec, canada</td>
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
<div class="divright"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d178784.81868726882!2d-73.71205035!3d45.56012565!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4cc91a541c64b70d%3A0x654e3138211fefef!2zTW9udHLDqWFsLCBRQywgQ2FuYWRh!5e0!3m2!1sfr!2sus!4v1441735874111" width="250" height="250" frameborder="0" style="border:0" allowfullscreen></iframe><br /><small><a href="https://www.google.com/maps/place/Montr%C3%A9al,+QC,+Canada/@45.560126,-73.71205,9z/data=!4m2!3m1!1s0x4cc91a541c64b70d:0x654e3138211fefef?hl=fr-FR"><p class="link1"></p></a></small></div>
</div>