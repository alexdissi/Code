<?php
include('controller/navBarController.php');
$navBar = new navBarController;
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Greta News</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
  <link rel="stylesheet" href="./assets/bootstrap-5.1.3-dist/css/bootstrap.css">
  <link rel="stylesheet" href="./assets/style.css">
  <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
  <script src="./assets/bootstrap-5.1.3-dist/js/bootstrap.js"></script>
  <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script src="https://kit.fontawesome.com/1d7a95b396.js" crossorigin="anonymous"></script>
</head>

<body>
  <header>
    <?php $navBar->navBar(); ?>
  </header>