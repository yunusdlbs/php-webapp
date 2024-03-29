<?php
function head_ustkismi($title){
    echo
    '<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/stilim.css">
        <title>'.$title.'</title>
    </head>
    <body>
    <section class="ana">';
}
function sol_menu(){
    echo'<aside class="sol-menu">
    <nav>
        <h3>DevOps Tools</h3>
        <ul>
            <li><a href="index.php?topic=Docker">Docker</a></li>
            <li><a href="index.php?topic=Kubernetes">Kubernetes</a></li>
            <li><a href="index.php?topic=Terraform">Terraform</a></li>
            <li><a href="index.php?topic=Ansible">Ansible</a></li>
            <li><a href="index.php?topic=GitLab">GitLab</a></li>
            <li><a href="index.php?topic=Jenkins">Jenkins</a></li>
            
        </ul>
    </nav>
    <nav>
        <h3>Cloud Tools</h3>
        <ul>
            <li><a href="index.php?topic=AWS">AWS</a></li>
            <li><a href="index.php?topic=Azure">Azure</a></li>
            <li><a href="index.php?topic=Google Cloud">Google Cloud</a></li>
            <li><a href="index.php?topic=Ali Baba Cloud">Ali Baba Cloud</a></li>
            <li><a href="index.php?topic=IBM">IBM</a></li>
            <li><a href="index.php?topic=Digital Ocean">Digital Ocean</a></li>
            
        </ul>
    </nav>
</aside>';
}
function banner(){
    echo'<section class="orta">
    <header>
        <div>
            <img src="resimler/devops.png">
            <img style="float:right";  src="resimler/cloud.png"> 
            <h1 class="slogan">How To Use DevOps & Cloud?</h1>     
            <div class="clearfix"></div>
        </div>
        <div class="topnav">
            <a href="index.php">Home</a>
            <a href="about.php">About</a>
            <a href="#">Contact</a>
            <a href="#">Link</a>
            <a href="#">Videos</a>
            <div class="search-container">
              <form action="yonetim/index.php" method="POST">
                <input type="text" placeholder="Username" name="kadi">
                <input type="password" placeholder="Password" name="ksifre">
                <button type="submit">Login</button>
              </form>
            </div>
          </div>
        <div class="clearfix"></div>
    </header>';
}    
function ana_icerik_coklu($content_d,$baslik_d,$resim_d,$id_d){

    if( count($content_d) == 0 ){
        echo "<div style='padding:2em;'>Aradığınız konuda içerikler bulunamadı</div>";
    }

    echo'
    <main>
        <section>';
        for($i=0;$i<count($content_d);$i++){
            echo'
            <article class="kutu">
                <img src="resimler/'.$resim_d[$i].'">
                <h1>'.$baslik_d[$i].'</h1>'.
                $content_d[$i].
                '<a href="makale.php?id='.$id_d[$i].'">Detaylar</a>
                <div class="clearfix"></div>
            </article>
            ';

        }

            echo'
        </section>
    </main>';
}
function ana_icerik_tekli($content,$baslik,$resim){
    echo'
    <main>
        <section>
            <article class="kutu">
                <img src="resimler/'.$resim.'">
                <h1>'.$baslik.'</h1>
                '.$content.'
                <div class="clearfix"></div>
            </article>
            
        </section>
    </main>';
}   
function alt_kisim(){
    echo'<footer>
    <section>
        <div>
            <h4>COMPANY NAME</h4>
            <p><b>DevDevOps</b> is a is a non-profit organization.</p>
        </div>
        <div>
            <h4>USEFUL LINKS</h4>
            Pricing<br>Settings<br>Orders<br>Help
        </div>
        <div>
            <h4>CONTACT</h4>
            Kastamonu, KS 37000, TR<br>
            yunusdelibas@eoutlook.com<br>              
            + 01 234 567 88<br>             
            + 01 234 567 89
        </div>
        <p class="clearfix"></p>
    </section>
</footer>
</section>

</body>
</html>';
}    
?>