<!DOCTYPE html>
        <html>
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
            <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
            <link rel="stylesheet" type="text/css" href="css/style.css">
        </head>

            <body>
                <nav class="navbar sticky-top navbar-dark bg-dark navbar-expand-lg text-white">
                    <div class="container">
                        <h5 class="navbar-brand">Soner Özcan</h5>

                        <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbar-menu" aria-controls="navbar-menu">
                            <span class="navbar-toggler-icon"></span>
                        </button>

                        <div class="collapse navbar-collapse" id="navbar-menu">
                            <ul class="navbar-nav ml-auto">
                                <li class="nav-item px-1">
                                    <a href="../index.html" class="nav-link" id="link">Ana sayfa</a>
                                </li>
                                <li class="nav-item px-1">
                                    <a href="ilgialanlari.html" class="nav-link" id="link">İlgi alanlarım</a>
                                </li>
                                <li class="nav-item px-1">
                                    <a href="sehrim.html" class="nav-link" id="link">Memleketim</a>
                                </li>
                                <li class="nav-item px-1">
                                    <a href="takimimiz.html" class="nav-link" id="link">Takımımız</a>
                                </li>
                                <li class="nav-item px-1">
                                    <a href="ozgecmis.html" class="nav-link" id="link">Özgeçmiş</a>
                                </li>
                                <li class="nav-item px-1">
                                    <a href="iletisim.html" class="nav-link" id="link">İletişim</a>
                                </li>
                                <li class="nav-item pl-1">
                                    <a href="login.html" class="nav-link" id="link">Giriş</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
                
                <div class="container py-5">
                    <div class="row">
                        <h5 class="m-auto">Form başarılı bir şekilde gönderildi.</h5>
                        
                        <div class="table-responsive py-4">
                            <table class="table">
                            <tbody>
                                <tr>
                                <th scope="row">İsim-soyisim:</th>
                                <td><?php ob_start(); echo $_POST["inputName"]; ?></td>
                                </tr>
                                <tr>
                                <th scope="row">Email:</th>
                                <td><?php ob_start(); echo $_POST["inputEmail"]; ?></td>
                                </tr>
                                <tr>
                                <th scope="row">Mesaj:</th>
                                <td><?php ob_start(); echo $_POST["textarea"]; ?></td>                                
                                </tr>
                            </tbody>
                            </table>
                        </div>
                        
                        <p class="m-auto">Yönlendiriliyorsunuz...</p>
                        <?php 
                            ob_start();
                            header("Refresh:2;url=iletisim.html");
                        ?>
                    </div>
                </div>
                
            </body>
        </html>