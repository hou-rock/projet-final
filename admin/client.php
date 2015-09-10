<style>
	.table1 th, td {padding:18px 28px 18px; text-align:center; }
	
	.table1 th {padding-top:22px; text-shadow: 1px 1px 1px #fff; background:#e8eaeb;}
	
	.table1 td {border-top:1px solid #e0e0e0; border-right:1px solid #e0e0e0;}
	
	.table1 tr.odd-row td {background:#f6f6f6;}
	
	.table1 td.first, th.first {text-align:left}
	
	.table1 td.last {border-right:none;}
	
	.table1 td {
		background: -moz-linear-gradient(100% 25% 90deg, #fefefe, #f9f9f9);
		background: -webkit-gradient(linear, 0% 0%, 0% 25%, from(#f9f9f9), to(#fefefe));
	}
	
	.table1 tr.odd-row td {
		background: -moz-linear-gradient(100% 25% 90deg, #f6f6f6, #f1f1f1);
		background: -webkit-gradient(linear, 0% 0%, 0% 25%, from(#f1f1f1), to(#f6f6f6));
	}
	
	.table1 th {
		background: -moz-linear-gradient(100% 20% 90deg, #e8eaeb, #ededed);
		background: -webkit-gradient(linear, 0% 0%, 0% 20%, from(#ededed), to(#e8eaeb));
	}

</style>


<?php include("connection1.php"); ?><head>
<link href="css/style.css" rel="stylesheet" type="text/css">
</head>

<div class="produits" align="center" style="height:100%;width:100%;margin-left:0px;">
<div class="Arborescence">Liste de Client</div>
<div><a href="?page=7&op=ajout">ajout</a></div>
<?php if(!isset($_GET['op']) || $_GET['op']=='list' || $_GET['op']=='sup' )
{	
?><table class="table1" width="100" border="0" cellspacing="0" cellpadding="0" style="margin-top: 20px;border: 1px solid #D3D3D3;border-radius: 5px 5px 5px 5px;">
  <tr>
	<th class="first">Id</th>
	<th>Cin</th>
    <th>Nom & Prenom</th>
    <th>Age</th>
    <th>Email</th>
    <th>Adresse</th>
    <th>Telephone</th>
    <th>Modifier</th>
    <th class="last">Supprimer</th>
</tr>
  <?php	
		$req ="SELECT * FROM client ORDER BY id ";
        $res =mysql_query($req)or die(mysql_error());
		
	    if ($res)
        {
		$i=0;
            while ($tab=  mysql_fetch_array($res))
            {
				
				?><tr>		
    <td><?php echo $tab['id']; ?></a></td>
    <td><?php echo $tab['cin_clt']; ?></td>
    <td><?php echo $tab['nom_clt']."&nbsp;".$tab['prenom_clt']; ?></td>
    <td><?php echo $tab['age_clt']; ?></td>
    <td><?php echo $tab['email']; ?></td>
    <td><?php echo $tab['adresse_clt']; ?></td>    
    <td><?php echo $tab['tel_clt']; ?></td>
    <td><a href="?page=7&op=modif&id=<?php echo $tab['id']; ?>">modifer</a></td>
<td><a href="?page=7&op=sup&id=<?php echo $tab['id']; ?>">supprimer</a></td>

  </tr>
  <?php } } ?>
</table>

<?php } ?>

<?php if(isset($_GET['op']) and $_GET['op']=='ajout' )
{
?>
    <form action="?page=7&op=insert"  method="post" enctype="multipart/form-data">
 <input type="hidden" name="id"  value="" />
    	Cin:
    <input type="text" name="cin_clt" value="" /><br />
       	Nom:
    <input type="text" name="nom_clt"  value="" /><br />
      	Prenom:
    <input type="text" name="prenom_clt" value="" /><br />
    	Age:
    <input type="text" name="age_clt" value="" /><br />
    	Email:
    <input type="text" name="email" value="" /><br />
    	Adresse:
    <input type="text" name="adresse_clt" value="" /><br />
     	Telphone:
    <input type="text" name="tel_clt" value="" /><br />
    <input type="submit" name="envoyer" /><input type="Reset" name="annuler" />
    </form>
	
	
	<?php } ?>
    
    
    
    <?php if(isset($_GET['op']) and $_GET['op']=='modif' )
{
	?>
    <form action="?page=7&op=mise"  method="post" enctype="multipart/form-data">
    <?php $id=$_GET['id']; 
	
	$req ="SELECT * FROM client where id='$id' ";
        $res =mysql_query($req)or die(mysql_error());
		
	    $tab=  mysql_fetch_array($res);
          
	
	?>
      <input type="hidden" name="id"  value="<?php echo $tab['id']; ?>" />
    	Cin:
    <input type="text" name="cin_clt" value="<?php echo $tab['cin_clt']; ?>" /><br />
       	Nom:
    <input type="text" name="nom_clt"  value="<?php echo $tab['nom_clt']; ?>" /><br />
      	Prenom:
    <input type="text" name="prenom_clt" value="<?php echo $tab['prenom_clt']; ?>" /><br />
    	Age:
    <input type="text" name="age_clt" value="<?php echo $tab['age_clt']; ?>" /><br />
    	Email:
    <input type="text" name="email" value="<?php echo $tab['email']; ?>" /><br />
    	Adresse:
    <input type="text" name="adresse_clt" value="<?php echo $tab['adresse_clt']; ?>" /><br />
    	Telphone:
    <input type="text" name="tel_clt" value="<?php echo $tab['tel_clt']; ?>" /><br />
    <input type="submit" name="envoyer" /><input type="Reset" name="annuler" />

    </form>
	
	
	<?php } ?>
  
    <?php if(isset($_GET['op']) and $_GET['op']=='insert' )
{
	$cin_clt=$_POST['cin_clt'];
	$nom_clt=$_POST['nom_clt'];
	$prenom_clt=$_POST['prenom_clt'];
	$age_clt=$_POST['age_clt'];
	$email=$_POST['email'];
	$adresse_clt=$_POST['adresse_clt'];
	$tel_clt=$_POST['tel_clt'];
	
	$req0 ="insert into client values('','$cin_clt','$nom_clt','$prenom_clt','$age_clt','$email','$adresse_clt','$tel_clt')";

$res0=mysql_query($req0);
	?>
    <script> window.location.href="index.php?page=7";
    </script>
    <?php
	
}


 if(isset($_GET['op']) and $_GET['op']=='mise' )
{
	$cin_clt=$_POST['cin_clt'];
	$nom_clt=$_POST['nom_clt'];
	$prenom_clt=$_POST['prenom_clt'];
	$age_clt=$_POST['age_clt'];
	$email=$_POST['email'];
	$adresse_clt=$_POST['adresse_clt'];
	$tel_clt=$_POST['tel_clt'];
	
	$id=$_POST['id'];
	
	$req0 ="UPDATE client SET 
			cin_clt='$cin_clt' 
			, nom_clt='$nom_clt' 
			, prenom_clt='$prenom_clt' 
			, age_clt='$age_clt' 
			, email='$email' 
			, adresse_clt='$adresse_clt'
			, tel_clt='$tel_clt'

		where id= '$id'";

	

$res0=mysql_query($req0);
	?>
    <script> window.location.href="index.php?page=7";
    </script>
    <?php
	
}

    
    if(isset($_GET['op']) and $_GET['op']=='sup' )
{
if(!empty($_GET['id']))
$id=$_GET['id'];

mysql_query("delete From client where id='$id'");
		 
}
    

	?>	