<?php
$uri = $_SERVER['REQUEST_URI'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title><?php echo $title; ?></title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+TC:wght@100..900&display=swap" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Space+Mono:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="<?= base_url('assets/css/style.css') ?>">
</head>

<body class="min-vh-100 d-flex flex-column">
  <!-- <nav class="navbar navbar-expand-lg navbar-light bg-primary">
        <div class="container-fluid">
            <div class="row">
                <div class="col-2">
                    <a href="<?= base_url('/') ?>">
                        <img src="<?= base_url('assets/Logo.jpg') ?>" alt="China town BBQ Logo" class="w-75" >
                    </a>
                </div>
                
            </div>
            <div class="text-center position-absolute start-50 translate-middle-x fw-medium">
                <div>
                    <a class="text-danger fs-4 mx-3 text-decoration-none nav-header-font border-bottom border-danger border-3  <?= url_is('/') ? '' : 'border-bottom-0' ?>" href="/">About</a>
                    <a class="text-danger fs-4 mx-3 text-decoration-none nav-header-font border-bottom border-danger border-3 <?= url_is('/reservation') ? '' : 'border-bottom-0' ?>" href="/reservation">Reservation</a>
                    <a class="text-danger fs-4 mx-3 text-decoration-none nav-header-font border-bottom border-danger border-3 <?= url_is('/menu') ? '' : 'border-bottom-0' ?>" href="/menu">Menu</a>
                </div>  
                <h4 class="text-danger fs-2">东北烧烤</h4>
            </div>
            changed to something
        </div>
    </nav> -->

  <nav class="navbar navbar-expand-lg bg-transparent">
    <div class="container-fluid">
      <a class="navbar-brand" href="<?= base_url('/') ?>">
        <img src="<?= base_url('assets/Logo.jpg') ?>" alt="China town BBQ Logo" class="logo">
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link text-danger fw-medium fs-4 border-bottom border-danger border-3 <?= url_is('/') ? '' : 'border-bottom-0' ?>" aria-current="page" href="/">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-danger fw-medium fs-4 border-bottom border-danger border-3 <?= url_is('/reservation') ? '' : 'border-bottom-0' ?>" href="/reservation">Reservation</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-danger fw-medium fs-4 border-bottom border-danger border-3 <?= url_is('/menu') ? '' : 'border-bottom-0' ?>" href="/menu" role="button" aria-expanded="false">
              Menu
            </a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <div class="bg-primary mt-4">