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
    <link href="<?php echo $site_url ?>/assets/css/app.css" rel="stylesheet"></head>
<body>

<header class="header">
    <div class="container">
        <section class="wrapper">
            <a href="<?php echo $site_url ?>" class="header-logo">
                <img src="<?php echo $site_url ?>/assets/image/icon/MicrosoftLogo.png" alt="">
            </a>
            <button type="button" class="opened-menu">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
            </button>
            <div class="overlay"></div>
            <nav class="navbar">
                <button type="button" class="closed-menu">
                    <div class="closed-icon">
                        <i class="fas fa-times"></i>
                    </div>

                </button>
                <ul class="menu">
                    <li class="menu-item"><a href="<?php echo $site_url ?>">Ana Səhifə (Blog)</a></li>
                    <li class="menu-item"><a href="<?php echo $site_url ?>/training.php">Təlim</a></li>
                    <li class="menu-item"><a href="<?php echo $site_url ?>/contact.php">Əlaqə</a></li>
                </ul>

                <div>
                    <div class="search search--desk">
                        <input type="text" class="searchTerm" placeholder="Axtar">
                        <button type="submit" class="searchButton">
                            <i class="fa fa-search"></i>
                        </button>
                    </div>
                </div>

            </nav>
        </section>


        <div class="search search--mob">
            <input type="text" class="searchTerm" placeholder="Axtar">
            <button type="submit" class="searchButton">
                <i class="fa fa-search"></i>
            </button>
        </div>

    </div>
</header>