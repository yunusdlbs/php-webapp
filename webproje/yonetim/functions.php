<?php


function baglan(){
    //$dbPass = getenv('PASSWD');
    $baglanti = mysqli_connect("db","admin","1234","devops_cloud");
    if($baglanti){
        //echo "Bağlandık ";
    }else{
        echo "Problem var ";
    }
    return $baglanti;
}
?>