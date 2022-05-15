<?php

if(isset($_POST["buton"])){
    $adisoyadi = $_POST["adsoyad"];
    $email = $_POST["email"];
    $konu = $_POST["konu"];
    $mesaj = $_POST["mesaj"];
}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Yönlendirme Bilgileri</title>
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
        <div align="center" class="row my-5 w-100 bg-warning">
           <div class="col-lg-12 my-3">
               <h2>İletişim Bilgileri</h2>
           </div>
            <div id="content-col"  class="col-lg-12">
                <?php
                  if(empty($adisoyadi) || empty($email) || empty($konu) || empty($mesaj)) {
                     echo "<script>alert('Lütfen boş alan bırakmayınız. İletişim formuna yönlendiriliyorsunuz.')</script>";
                     
                  } else { ?>
                     <h3>Kullanıcı Adı : <span class="lead"><?php echo $adisoyadi; ?></span></h3>
                     <h3>E-mail : <span class="lead"><?php echo $email; ?></span></h3>
                     <h3>Konu : <span class="lead"><?php echo $konu; ?></span></h3>
                     <h3>Mesaj : <span class="lead"><?php echo $mesaj; ?></span></h3>
                  <?php } ?>
            </div>
            <div class="col-lg-12 my-2">
               <a class="btn btn-danger btn-lg" href="iletisim.html" >Geri Dön</a>
            </div>
        </div>
    </div>
</body>
</html>