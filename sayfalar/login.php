<?php
    if(($_POST["mail"] == "b211210023@sakarya.edu.tr") && ($_POST["pass"] == "b211210023")){    
        echo "Hoşgeldiniz \"b211210023\"<br>";
        echo "Ana sayfaya yönlendiriliyorsunuz...";
        header("Refresh:2;url=../index.html");
    }
    else{
        echo "Giriş başarısız!<br>";
        echo "Giriş sayfasına yönlendiriliyorsunuz...";
        header("Refresh:2;url=login.html");
    }
?>