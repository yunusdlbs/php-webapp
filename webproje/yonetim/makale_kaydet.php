<?php
require_once "functions.php";
$baglanti = baglan();

$topic= $_POST["topic"];
$title =$_POST["title"];
$content = $_POST["content"];
$photo = $_POST["photo"];
$sorgu = "INSERT INTO devops_cloud (topic,title,content,photo)
VALUES ('$topic','$title','$content','$photo')
";

$sonuc = mysqli_query($baglanti,$sorgu);
if($sonuc){
    header("location:kayit-eklendi.php");
}else{
    echo "Kayıt eklenemedi";
}

echo $sorgu;
?>