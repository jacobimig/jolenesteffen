<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
</head>

<body>
    <header>
        <nav>
            <div class="hamburger" id="js-navbar-toggle">
                <span></span>
                <span></span>
                <span></span>
            </div>
            <h1>Jolene Steffen</h1>
            <div class="mainNav" id="js-menu">
                <a href="<?php echo site_url(''); ?>" <?php if (is_front_page()) echo 'class="active"' ?>>Home</a>
                <a href="<?php echo site_url('/gallery'); ?>" <?php if (is_page('gallery')) echo 'class="active"' ?>>Gallery</a>
                <a href="<?php echo site_url('/show-schedule'); ?>" <?php if (is_page('show-schedule')) echo 'class="active"' ?>>Show Schedule</a>
                <a href="<?php echo site_url('/about'); ?>" <?php if (is_page('about')) echo 'class="active"' ?>>About</a>
                <a href="<?php echo site_url('/archive'); ?>" <?php if (is_page('archive')) echo 'class="active"' ?>>Archive</a>
            </div>
        </nav>
    </header>