<?php
    if(($_POST["mail"] == "b211210023@sakarya.edu.tr") && ($_POST["pass"] == "b211210023")){    
        echo "<!DOCTYPE html>
        <html>
        <head>
            <meta charset=\"UTF-8\">
            <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
            <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css\">
            <script src=\"https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js\" integrity=\"sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB\" crossorigin=\"anonymous\"></script>
            <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js\" integrity=\"sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13\" crossorigin=\"anonymous\"></script>
            <link rel=\"stylesheet\" type=\"text/css\" href=\"css/style.css\">
        </head>

            <body style=\"background-color: #f5f5f5;\">
                <nav class=\"navbar sticky-top navbar-dark bg-dark navbar-expand-lg text-white\">
                    <div class=\"container\">
                        <h5 class=\"navbar-brand\">Soner Özcan</h5>

                        <button type=\"button\" class=\"navbar-toggler\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbar-menu\" aria-controls=\"navbar-menu\">
                            <span class=\"navbar-toggler-icon\"></span>
                        </button>

                        <div class=\"collapse navbar-collapse\" id=\"navbar-menu\">
                            <ul class=\"navbar-nav ml-auto\">
                                <li class=\"nav-item px-1\">
                                    <a href=\"../index.html\" class=\"nav-link\" id=\"link\">Ana sayfa</a>
                                </li>
                                <li class=\"nav-item px-1\">
                                    <a href=\"ilgialanlari.html\" class=\"nav-link\" id=\"link\">İlgi alanlarım</a>
                                </li>
                                <li class=\"nav-item px-1\">
                                    <a href=\"sehrim.html\" class=\"nav-link\" id=\"link\">Memleketim</a>
                                </li>
                                <li class=\"nav-item px-1\">
                                    <a href=\"takimimiz.html\" class=\"nav-link\" id=\"link\">Takımımız</a>
                                </li>
                                <li class=\"nav-item px-1\">
                                    <a href=\"ozgecmis.html\" class=\"nav-link\" id=\"link\">Özgeçmiş</a>
                                </li>
                                <li class=\"nav-item px-1\">
                                    <a href=\"iletisim.html\" class=\"nav-link\" id=\"link\">İletişim</a>
                                </li>
                                <li class=\"nav-item pl-1\">
                                    <a href=\"login.html\" class=\"nav-link\" id=\"link\">Giriş</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
                
                <div class=\"container py-5\">
                        <h5>Hoşgeldiniz b211210023</h5>
						<br>
                        <p class=\"m-auto\">Yönlendiriliyorsunuz...</p>
                </div>
                
            </body>
        </html>";
        ob_start();
        header("Refresh:2;url=../index.html");
        ob_end_flush();
    }
    else{
        echo "<!DOCTYPE html>
        <html>
        <head>
            <meta charset=\"UTF-8\">
            <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
            <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css\">
            <script src=\"https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js\" integrity=\"sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB\" crossorigin=\"anonymous\"></script>
            <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js\" integrity=\"sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13\" crossorigin=\"anonymous\"></script>
            <link rel=\"stylesheet\" type=\"text/css\" href=\"css/style.css\">
        </head>

            <body>
                <nav class=\"navbar sticky-top navbar-dark bg-dark navbar-expand-lg text-white\">
                    <div class=\"container\">
                        <h5 class=\"navbar-brand\">Soner Özcan</h5>

                        <button type=\"button\" class=\"navbar-toggler\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbar-menu\" aria-controls=\"navbar-menu\">
                            <span class=\"navbar-toggler-icon\"></span>
                        </button>

                        <div class=\"collapse navbar-collapse\" id=\"navbar-menu\">
                            <ul class=\"navbar-nav ml-auto\">
                                <li class=\"nav-item px-1\">
                                    <a href=\"../index.html\" class=\"nav-link\" id=\"link\">Ana sayfa</a>
                                </li>
                                <li class=\"nav-item px-1\">
                                    <a href=\"ilgialanlari.html\" class=\"nav-link\" id=\"link\">İlgi alanlarım</a>
                                </li>
                                <li class=\"nav-item px-1\">
                                    <a href=\"sehrim.html\" class=\"nav-link\" id=\"link\">Memleketim</a>
                                </li>
                                <li class=\"nav-item px-1\">
                                    <a href=\"takimimiz.html\" class=\"nav-link\" id=\"link\">Takımımız</a>
                                </li>
                                <li class=\"nav-item px-1\">
                                    <a href=\"ozgecmis.html\" class=\"nav-link\" id=\"link\">Özgeçmiş</a>
                                </li>
                                <li class=\"nav-item px-1\">
                                    <a href=\"iletisim.html\" class=\"nav-link\" id=\"link\">İletişim</a>
                                </li>
                                <li class=\"nav-item pl-1\">
                                    <a href=\"login.html\" class=\"nav-link\" id=\"link\">Giriş</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
                
                <div class=\"container py-5\">
                        <h5>Giriş başarısız!</h5>
						<br>
                        <p class=\"m-auto\">Yönlendiriliyorsunuz...</p>

                </div>
                
            </body>
        </html>";
        ob_start();
        header("Refresh:2;url=login.html");
        ob_end_flush();
    }
?>