<?php
require_once "functions.php";
$baglanti=baglan();
$makale_id = $_GET["id"];
$makale_topic = addslashes( $_POST["topic"] );   
$makale_title = addslashes( $_POST["title"] );
$makale_content = addslashes( $_POST["content"] );
$makale_photo = addslashes( $_POST["photo"] );
$sorgu ="UPDATE devops_cloud SET topic='$makale_topic', title='$makale_title', content='$makale_content', photo='$makale_photo'
WHERE id=$makale_id";

$sonuc=mysqli_query($baglanti,$sorgu);
if($sonuc){
    header("location:makale_listele.php");
}else{
    echo "Problem var";
}





?>


