<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");

		include"config.php";

    $id=$_GET["id"];
		$username=$_GET["user"];
		$password=$_GET["password"];

    $sql="update  tb_admin set
          admin_user='$username',
          admin_password='$password'

          where admin_id='$id'
    ";
    $res=mysqli_query($conn,$sql);
    if($res){
      echo true;
    }else{
      echo false;
    }

?>
