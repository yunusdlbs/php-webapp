<?php
require_once("functions.php");
$baglanti= baglan();
$makale_id=$_GET["id"];
$sorgu = "DELETE FROM devops_cloud WHERE id=$makale_id";
$sonuc = mysqli_query($baglanti,$sorgu);
echo '<link rel="stylesheet" href="../css/admin.css">';
if($sonuc){
    if($sonuc){
        echo '<h1 style="color: brown; text-align: center;" href="logout.php">Kayıt başarılı şekilde silinmiştir!!!</h1>';
        $sorgu = "SELECT * FROM devops_cloud";
        $sonuc = mysqli_query($baglanti,$sorgu);
        if($sonuc){
            echo'
            <table>
            <tr><th>ID</th><th>Topic</th><th>Title</th><th>Content</th><th>Photo</th>
            </tr>';
            while($satir = mysqli_fetch_assoc($sonuc))
            {
                echo '
                <tr>
                <td>'.$satir["id"].'</td>
                <td>'.$satir["topic"].'</td>
                <td>'.$satir["title"].'</td>
                <td>'.$satir["content"].'</td>
                <td>'.$satir["photo"].'</td>
                <td><a href="makale_duzenle.php?id='.$satir["id"].'">Düzenle</a></td>
                <td><a href="makale_sil.php?id='.$satir["id"].'">Sil</a></td>
                </tr>';
            }
            echo '<tr><td><a style="background-color:brown; color: white;" href="logout.php">Çıkış</a></td><td><a href="makale_ekle.php">Ekle</a></td></tr>';
            echo "</table>";
        }
}
}
else{
    echo "Kayıt silinmemiştir.";
}

?>