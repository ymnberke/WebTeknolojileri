<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Yönlendirme Sayfası</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">
</head>

<body class="sayfa-body">
    <div id="icerik" class="container" align="center">
        <div align="center" class="row my-5">
            <div id="content-col"  class="col bg-warning my-5">
                <?php
                if ($_POST['email'] == 'g181210104@sakarya.edu.tr' && $_POST['sifre'] == '123') {
                    echo "<h2>Kullanıcı adınız ve şifreniz doğru.</h2> <h2>Hoşgeldiniz 'g181210104'</h2><h2>Anasayfaya yönlendiriliyorsunuz.</h2>";
                    header("refresh:3;url=hakkimda.html");
                }
                else {
                    echo '<script>alert("Kullanıcı adı veya şifre yanlış. 3 saniye içinde geri yönlendiriliyorsunuz")</script>';
                    header("refresh:3;url=giris.html"); 
                }
                ?>
            </div>
        </div>
    </div>
</body>
</html>