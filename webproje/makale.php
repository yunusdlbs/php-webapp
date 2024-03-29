<?php

/*
$content_d=array("<p>Pellentesque aliquam accumsan pharetra. Cras maximus odio in malesuada tincidunt. Proin vehicula, sapien sit amet ornare commodo, urna odio bibendum mi, vel euismod eros neque eget tellus. Nulla facilisi. Nullam in nulla vitae elit vulputate eleifend. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Proin elementum vitae diam vel venenatis. Vestibulum molestie ut est sit amet tempor. Aliquam vel tempor lacus, id auctor orci. Sed suscipit venenatis mi vitae placerat. Quisque orci est, vehicula ut auctor quis, pharetra eget urna. Cras justo ante, volutpat sed mauris a, aliquet facilisis purus. Maecenas ultrices libero tempor leo commodo tincidunt. Nulla venenatis at lorem a elementum. Sed vel libero ac dolor congue semper. Maecenas nunc mauris, rutrum at nunc vel, elementum tempor sem</p>",
"<p>Pellentesque aliquam accumsan pharetra. Cras maximus odio in malesuada tincidunt. Proin vehicula, sapien sit amet ornare commodo, urna odio bibendum mi, vel euismod eros neque eget tellus. Nulla facilisi. Nullam in nulla vitae elit vulputate eleifend. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Proin elementum vitae diam vel venenatis. Vestibulum molestie ut est sit amet tempor. Aliquam vel tempor lacus, id auctor orci. Sed suscipit venenatis mi vitae placerat. Quisque orci est, vehicula ut auctor quis, pharetra eget urna. Cras justo ante, volutpat sed mauris a, aliquet facilisis purus. Maecenas ultrices libero tempor leo commodo tincidunt. Nulla venenatis at lorem a elementum. Sed vel libero ac dolor congue semper. Maecenas nunc mauris, rutrum at nunc vel, elementum tempor sem
</p>","<p>Pellentesque aliquam accumsan pharetra. Cras maximus odio in malesuada tincidunt. Proin vehicula, sapien sit amet ornare commodo, urna odio bibendum mi, vel euismod eros neque eget tellus. Nulla facilisi. Nullam in nulla vitae elit vulputate eleifend. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Proin elementum vitae diam vel venenatis. Vestibulum molestie ut est sit amet tempor. Aliquam vel tempor lacus, id auctor orci. Sed suscipit venenatis mi vitae placerat. Quisque orci est, vehicula ut auctor quis, pharetra eget urna. Cras justo ante, volutpat sed mauris a, aliquet facilisis purus. Maecenas ultrices libero tempor leo commodo tincidunt. Nulla venenatis at lorem a elementum. Sed vel libero ac dolor congue semper. Maecenas nunc mauris, rutrum at nunc vel, elementum tempor sem
</p>","<p>Yeni Kayıt</p>");
$baslik_d=array("What is Kubernetes?","Why Docker?","GitHub or GitLab?","Why Shuld I Use DevOps?", "How Terraform Works?", "Basically AWS Explained", "How To Create Insrance In AWS?", "Shortly Microsoft Azure Explained");
$resim_d=array("kubernetes.png","docker.png","github-gitlab.png","devops-2.png", "terraform.png", "aws.png", "aws-instance.png", "azure.png"); 

$content=$content_d[$id-1];
$resim=$resim_d[$id-1];
$baslik=$baslik_d[$id-1];
*/




require_once("temam.php");
head_ustkismi("Anasayfa");
sol_menu();
banner();




$id=$_GET["id"];


require_once 'yonetim/functions.php';
$baglanti = baglan();
$sorgu = "SELECT * FROM devops_cloud WHERE id=$id";

$sonuc = mysqli_query($baglanti,$sorgu);
if($sonuc){
    while($satir = mysqli_fetch_assoc($sonuc)){
        $id_d      = $satir["id"];
        $content_d = $satir["content"];
        $resim_d     = $satir["photo"];
        $baslik_d  = $satir["title"];
        $topic_d  = $satir["topic"];
    }
}

ana_icerik_tekli($content_d,$baslik_d,$resim_d);

//sag_menu();
alt_kisim();

?>