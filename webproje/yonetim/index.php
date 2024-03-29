<?php
if(($_POST["kadi"]=="admin")&&($_POST["ksifre"]=="1234")){
    session_start();
    $_SESSION["kadi"]=$_POST["kadi"];
    header("location: makale_listele.php");
}
else {
    echo '<h1 style="color: brown; text-align: center;" href="logout.php">Yetkili kullanıcı değilsiniz, Lutfen parola ve şifrenizi kontrol ediniz !</h1>';
    
}

?>