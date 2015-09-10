<?php include("../connection.php"); ?>

<style>
	.table1 {margin-top: 20px;border: 1px solid #D3D3D3;border-radius: 5px 5px 5px 5px;}

	.table1 th, td {padding:12px 19px 18px; text-align:center; }
	
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

<div class="produits" align="center" style="height:100%;width:100%;margin-left:0px;">
<div class="Arborescence">Liste d'Automobiles</div>
<div><a href="?page=3&op=ajout">ajout</a></div>
<?php if(!isset($_GET['op']) || $_GET['op']=='list' || $_GET['op']=='sup' )
{
	
	?><table class="table1" border="0" cellspacing="0" cellpadding="0" >
  <tr>
	<th class="first">Id</th>
	<th>Nom</th>
    <th>Photo</th>
    <th>Reference</th>
    <th>Designation</th>
    <th>Prix</th>
    <th>Information</th>
    <th>Modifier</th>
    <th class="last">Supprimer</th>
</tr>
  <?php	
		$req ="SELECT * FROM automobile ORDER BY id desc ";
        $res =mysql_query($req)or die(mysql_error());
		
	    if ($res)
        {
		$i=0;
            while ($tab=  mysql_fetch_array($res))
            {
				
				?><tr>		
    <td><?php echo $tab['id']; ?></a></td>
    <td><?php echo $tab['nom_prod']; ?></td>
    <td><img  src="../photo/<?php echo $tab['photo_prod']; ?>" width="50" />&nbsp;</td>
    <td><?php echo $tab['reference_prod']; ?></td>
    <td><?php echo $tab['designe_prod']; ?></td>
    <td><?php echo $tab['prix']; ?></td>    
    <td><?php echo $tab['info']; ?></td>
    <td><a href="?page=3&op=modif&id=<?php echo $tab['id']; ?>">modifer</a></td>
<td><a href="?page=3&op=sup&id=<?php echo $tab['id']; ?>">supprimer</a></td>

  </tr>
  <?php } } ?>
</table>

<?php } ?>

<?php if(isset($_GET['op']) and $_GET['op']=='ajout' )
{
?>
    <form action="?page=3&op=insert"  method="post" enctype="multipart/form-data">
 <input type="hidden" name="id"  value="" />
 <table>
 <tr><td>Nom:</td><td><input type="text" name="nom_prod" value="" /></td></tr>
<tr><td>Image:</td><td><input type="file" name="photo_prod"  value="" /></td></tr>
<tr><td>Reference:</td><td><input type="text" name="reference_prod" value="" /></td></tr>
<tr><td>Designiation:</td><td><input type="text" name="designe_prod" value="" /></td></tr>
<tr><td>Prix:</td><td><input type="text" name="prix" value="" /></td></tr>
<tr><td>Information:</td><td><textarea name="info" rows="4" cols="40" ></textarea></td></tr>
<tr align="center"><td><input type="submit" name="envoyer" /><input type="Reset" name="annuler" /></td></tr>
 </table>
    </form>

	<?php } ?>
    
    
    
    <?php if(isset($_GET['op']) and $_GET['op']=='modif' )
{
	?>
    <form action="?page=3&op=mise"  method="post" enctype="multipart/form-data">
    <?php $id=$_GET['id']; 
	
	$req ="SELECT * FROM automobile where id='$id' ";
        $res =mysql_query($req)or die(mysql_error());
		
	    $tab=  mysql_fetch_array($res);
          
	
	?>
      <input type="hidden" name="id"  value="<?php echo $tab['id']; ?>" />
 <table>
 <tr><td>Nom:</td><td><input type="text" name="nom_prod" value="<?php echo $tab['nom_prod']; ?>" /></td></tr>
<tr><td>Image:</td><td><input type="file" name="photo_prod"  value="<?php echo $tab['photo_prod']; ?>" /></td></tr>
<tr><td>Reference:</td><td><input type="text" name="reference_prod" value="<?php echo $tab['reference_prod']; ?>" /></td></tr>
<tr><td>Designiation:</td><td><input type="text" name="designe_prod" value="<?php echo $tab['designe_prod']; ?>" /></td></tr>
<tr><td>Prix:</td><td><input type="text" name="prix" value="<?php echo $tab['prix']; ?>" /></td></tr>
<tr><td>Information:</td><td><textarea name="info" rows="4" cols="40" > <?php echo $tab['info']; ?></textarea></td></tr>
<tr><td><input type="submit" name="envoyer" /><input type="Reset" name="annuler" /></td></tr>
 </table>

    </form>
	
	
	<?php } ?>
  
    <?php if(isset($_GET['op']) and $_GET['op']=='insert' )
{
	$nom_prod=$_POST['nom_prod'];
	$reference_prod=$_POST['reference_prod'];
	$designe_prod=$_POST['designe_prod'];
	$prix=$_POST['prix'];
	$info=$_POST['info'];
		
		$the_file_tmp = $_FILES['photo_prod']['tmp_name'];
		$the_file_name = $_FILES['photo_prod']['name'];

//		$error = validate_upload($the_file); 	// Teste la validité du document
//		$error = ""; 	// Teste la validité du document

	
$path="../photo/".$the_file_name."/";
//echo $path.$the_new_file_name."<br><br>";
		 # cool, we can continue
                if (!move_uploaded_file($the_file_tmp, $path )) {
                        //form("\n<b>Quelques choses ne fonctionnent pas : vérifier le chemin de la variable $path et les permissions du répertoire /upload (il doit être en CHMOD777</b>");
                } 
	
	$req0 ="insert into automobile values('','$nom_prod','$the_file_name','$reference_prod','$designe_prod','$prix','$info')";

$res0=mysql_query($req0);
	?>
    <script> window.location.href="index.php?page=3";
    </script>
    <?php
	
}


 if(isset($_GET['op']) and $_GET['op']=='mise' )
{
	$nom_prod=$_POST['nom_prod'];
	$reference_prod=$_POST['reference_prod'];
	$designe_prod=$_POST['designe_prod'];
	$prix=$_POST['prix'];
	$info=$_POST['info'];
		
		$the_file_tmp = $_FILES['photo_prod']['tmp_name'];
		$the_file_name = $_FILES['photo_prod']['name'];

//		$error = validate_upload($the_file); 	// Teste la validité du document
//		$error = ""; 	// Teste la validité du document

	
$path="../photo/".$the_file_name."/";
//echo $path.$the_new_file_name."<br><br>";
		 # cool, we can continue
                if (!move_uploaded_file($the_file_tmp, $path )) {
                        //form("\n<b>Quelques choses ne fonctionnent pas : vérifier le chemin de la variable $path et les permissions du répertoire /upload (il doit être en CHMOD777</b>");
                } 
	
	$id=$_POST['id'];
	
	$req0 ="UPDATE automobile  SET 
			nom_prod='$nom_prod' 
			, photo_prod='$the_file_name' 
			, reference_prod='$reference_prod' 
			, designe_prod='$designe_prod' 
			, prix='$prix' 
			, info='$info'

		where id= '$id'";

	

$res0=mysql_query($req0);
	?>
    <script> window.location.href="index.php?page=3";
    </script>
    <?php
	
}

    
    if(isset($_GET['op']) and $_GET['op']=='sup' )
{
	$id=$_GET['id'];
	$req ="SELECT * FROM automobile where id='$id' ";
        $res =mysql_query($req)or die(mysql_error());
		
	    $tab=  mysql_fetch_array($res);
          $image=$tab['photo_prod'];
		  if( file_exists( "../photo/" ) )
   				unlink("../photo/".$image.".png"); 
		else
   			echo "ce fichier n'existe pas";
		//  echo "delete from produit where id='$id'";
		 $req00=mysql_query("delete from automobile where id='$id'");
		 	?>
    <script> window.location.href="index.php?page=3";
    </script>
    <?php
}
    

	?>	