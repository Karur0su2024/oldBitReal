<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Super e-shop</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="icon" type="image/x-icon" href="<?php image('icon') ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
    <link rel="stylesheet" href="css/paralax.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/js/all.min.js" integrity="sha512-QNdiTfT7wNvnsAC1sW2OKlY9trPFfz/HvklxJiW8A87/vu/w84Tf1vSgS7V8ntYtCz7V3D/x4/T4+yV0Z0Rg1w==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</head>

<body class="bg-light bg-gradient">
    <?php component('navbar');  ?>

    <section class="parallax">
        <div class="parallax-inner">
            <div class="row mx-3">
                <div class="col-lg-2 col-sm-12">
                    <?php component('sidebar'); ?>
                </div>


                <div class="col-lg-8 col-sm-12 bg-light bg-gradient shadow-lg" >