<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");


		include"config.php";

		$news_title=$_GET["news_title"];
		$news_img=$_GET["news_img"];
		$news_detail=$_GET["news_detail"];
		$admin_id=$_GET["admin_id"];

    $sql="insert into tb_news(news_title,news_img,news_detail,admin_id)
          values('$news_title','$news_img','$news_detail','$admin_id')
    ";
    $res=mysqli_query($conn,$sql);
    if($res){
      echo true;
    }else{
      echo false;
    }

?>
