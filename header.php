<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/slick.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/slick-theme.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/reset.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/style.css">
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
    <script src="https://kit.fontawesome.com/1fa73797ae.js" crossorigin="anonymous"></script>
    <title>OJT</title>
    <?php wp_head(); ?>
</head>

<body>
    <header> 
        <div class=logo><img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt=""></div>
        <nav class="nav">
            
            <button type="button" class="menu-trigger">
                <span></span>
                <span></span>
                <span></span>
            </button>

            <ul class="nav-list">
                <li class="nav-item"><a href="#">Menu01</a></li>
                <li class="nav-item"><a href="#">Meun02</a></li>
                <li class="nav-item"><a href="#">Meun03</a></li>
                <li class="nav-item"><a href="#">Meun04</a></li>
            </ul>
        </nav>
    </header>