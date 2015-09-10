<?php
session_start();
include("connection1.php");

        if(isset($_POST['username']) and $_POST['username']!="" and isset($_POST['password']) and $_POST['password']!="" ) {
       $username=$_POST['username'];
        $password=md5($_POST['password']);  
		
		  $req="Select *  from authentification where username ='$username' and password ='$password'  ";
		// echo $req;
		  $res=mysql_query($req);
		  $tab1=mysql_fetch_array($res);
		  $nbr=mysql_num_rows($res);
		//  echo $nbr."yy";
            if (isset($nbr) and $nbr==1){
 			$_SESSION['id_clt']=$tab1['id'];
?>
<script> window.location.href="../index.php";</script>
<?php 
	}
	else{
?>
<script> window.location.href="admin/index.php";</script>
<?php		
        }
}
?>