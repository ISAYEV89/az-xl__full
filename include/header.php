<?php
require_once __DIR__ .  '/../inc/config.php';

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
    <title>Webpack</title>
    <link href="./assets/css/app.css" rel="stylesheet"></head>
<body>

<header class="header">
    <div class="container">
        <div class="row row-center">
            <a href="" class="header-logo">
                <img src="./assets/image/icon/MicrosoftLogo.png" alt="">
            </a>
            <nav>
                <ul class="menu">
                    <li class="menu__item"><a class="menu__link" href="">Blog</a></li>
                    <li class="menu__item"><a class="menu__link" href="">Telim</a></li>
                    <li class="menu__item"><a class="menu__link" href="">Elaqe</a></li>
                </ul>
            </nav>

            <div>
                <div class="search">
                    <input type="text" class="searchTerm" placeholder="Axtar">
                    <button type="submit" class="searchButton">
                        <i class="fa fa-search"></i>
                    </button>
                </div>
            </div>
        </div>


    </div>

</header>
