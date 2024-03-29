<?php
session_start();
require_once "functions.php";
if(isset($_SESSION["kadi"])){
    echo '<link rel="stylesheet" href="../css/admin.css">';
    $baglanti=baglan();
    $makale_id = $_GET["id"];
    $sorgu = "SELECT * FROM devops_cloud WHERE id=$makale_id";
    $sonuc = mysqli_query($baglanti,$sorgu);
    $satir = mysqli_fetch_assoc($sonuc);
    echo '<h1 style="color: brown; text-align: center;" href="logout.php">Makaleyi düzenliyorsunuz !</h1>';
    echo'
        <table class="tabloduzenle">
        <tr><th>ID</th><th>Topic</th><th>Title</th><th>Content</th><th>Photo</th>
        </tr>';
            echo '
            <tr>
            <td>'.$satir["id"].'</td>

            <form action="makale_guncelle.php?id='.$makale_id.'&topic=" method="POST">
            <td><input type="text" name="topic" value="'.$satir["topic"].'" ></td>
            <td><input type="text" name="title" value="'.$satir["title"].'"></td>
            <td><textarea name="content">'.$satir["content"].'</textarea></td>
            <td><input type="text" name="photo" value="'.$satir["photo"].'"></td>
            <td><input type="submit" style="background-color: brown; color: white;" name="kaydet" value="Kaydet"></td>
            </form>

            <td><a href="makale_sil.php?id='.$satir["id"].'">Sil</a></td>
            </tr>';
        echo '<tr><td><a style="background-color:brown; color: white;" href="logout.php">Çıkış</a></td></tr>';
        echo "</table>";
}else{
    header("location:index.php");
}
?>

<!-- <td><input type="text" name="content" value="'.$satir["content"].'"></td> -->