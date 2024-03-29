<?php
session_start();
if(isset($_SESSION["kadi"])){
    echo '<link rel="stylesheet" href="../css/admin.css">';
    echo '<h1 style="color: brown; text-align: center;" href="logout.php">Yeni bir makale ekliyorsunuz !</h1>';
    echo'
        <table class="tabloduzenle">
        <tr><th>ID</th><th>Topic</th><th>Title</th><th>Content</th><th>Photo</th>
        </tr>';
            echo '
            <tr>
            <td></td>

            <form action="makale_kaydet.php" method="POST">
            <td><input type="text" name="topic" ></td>
            <td><input type="text" name="title" ></td>
            <td><textarea name="content" ></textarea></td>
            <td><input type="text" name="photo" value="../resimler/....."></td>
            <td><input type="submit" style="background-color: brown; color: white;" name="kaydet" value="Ekle"></td>
            </form>

            </tr>';
        echo '<tr><td><a style="background-color:brown; color: white;" href="logout.php">Çıkış</a></td></tr>';
        echo "</table>";
}else{
    header("location:index.php");
}