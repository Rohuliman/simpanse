
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="fontawesome/css/all.min.css">
    <link rel="stylesheet" href="http://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <meta charset="UTF-8">
    <title> Halaman <?=$data['judul'];?> </title>
    <link rel="stylesheet" href="<?=BASEURL;?>/css/bootstrap.css">
</head>
<body>
  
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand fw-bold" href="<?=BASEURL;?>">
    <img src="img/download2.png" alt="" width="30" height="24"> Sistem Monitoring Sensor Gempa </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

        <div class="collapse navbar-collapse" id="navbarNav">
          <div class="mx-auto"></div>
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link text-black fw-bold" href="<?=BASEURL;?>">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-black fw-bold" href="<?=BASEURL;?>/about">Data Sensor</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-black fw-bold" href="<?=BASEURL;?>/pengaduan">Pengaduan</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-black fw-bold" href="<?=BASEURL;?>/login">Logout</a></a>
            </li>
          </ul>
        </div>
      </div>
</nav>
