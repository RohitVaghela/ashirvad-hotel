<?php
require_once "constant.php";
require_once "function.php";
?>

<head>
    <?php
    $defaultMetaImage = FEVICON;
    $metaImage = (isset($metaImage) && $metaImage != '') ? $metaImage : $defaultMetaImage;
    $metaKeywords = (isset($metaKeywords) && $metaKeywords != '') ? $metaKeywords : '';
    $metaDescription = (isset($metaDescription) && $metaDescription != '') ? $metaDescription : '';
    $pageName = (isset($pageName) && $pageName != '') ? $pageName : '';
    $pageTitle = (isset($pageTitle) && $pageTitle != '') ? $pageTitle : $pageName;
    ?>

    <meta charset="UTF-8">
    <title> <?= (isset($pageName) && !empty($pageName)) ? $pageName . " | " . PROJECT_NAME : PROJECT_NAME;
            (isset($pageTitle) && !empty($pageTitle)) ? " | " . $pageTitle : '' ?> </title>
    <meta name="keywords" content="<?= $metaKeywords ?>">
    <meta name="description" content="<?= $metaDescription ?>" />
    <meta name="robots" content="index,follow" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <meta name="theme-color" content="#D4AF37"> -->
    <meta name="author" content="<?= PROJECT_NAME; ?>">
    <link rel="apple-touch-icon" href="assets/images/samarth-favicon.png">

    <!-- Twitter -->
    <meta content="summary_large_image" name="twitter:card" />
    <meta content="<?= $pageName ?> | <?= PROJECT_NAME; ?>" property="twitter:title" />
    <meta content="<?= $metaImage ?>" property="twitter:image" />
    <meta content="<?= $metaDescription ?>" property="twitter:description" />

    <!-- Schema.org markup for Google+ -->
    <meta itemprop="name" content="<?= $pageTitle ?>">
    <meta itemprop="description" content="<?= $metaDescription ?>">
    <meta itemprop="image" content="<?= $metaImage ?>">

    <!-- Twitter Card data -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:site" content="@<?= PROJECT_NAME ?>">
    <meta name="twitter:title" content="<?= $pageTitle ?>">
    <meta name="twitter:description" content="<?= limit_text($metaDescription, 200) ?>">
    <meta name="twitter:creator" content="@author_handle">
    <!-- Twitter summary card with large image must be at least 280x150px -->
    <meta name="twitter:image:src" content="<?= $metaImage ?>">

    <!-- Open Graph data -->
    <meta property="og:title" content="<?= $pageTitle ?>" />
    <meta property="og:image" content="<?= $defaultMetaImage ?>" />
    <meta property="og:type" content="article" />
    <meta property="og:url" content="<?= "https://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"; ?>" />
    <meta property="og:image" content="<?= $metaImage ?>" />
    <meta property="og:description" content="<?= $metaDescription ?>" />
    <meta property="og:site_name" content="<?= PROJECT_NAME ?>" />
    <meta property="article:published_time" content="<?= $publishTime ?? '' ?>" />
    <!-- <meta property="article:modified_time" content="2013-09-16T19:08:47+01:00" /> -->
    <meta property="article:section" content="<?= $articleSection ?? '' ?>" />
    <meta property="article:tag" content="<?= $articleTag ?? '' ?>" />
    <meta property="fb:admins" content="Facebook numberic ID" />

    <link rel="canonical" href="<?= "https://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"; ?>" />
    <!-- FAVICONS ICON -->
    <link rel="icon" href="<?= FEVICON ?>" type="image/x-icon" />
    <!-- Site Title -->
    <!-- <title>SaePearl - Resort & Hotel HTML Template</title> -->
    <!-- Stylesheets -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/fontawesome.min.css">
    <link rel="stylesheet" href="assets/css/animate.css">
    <link rel="stylesheet" href="assets/css/slick.min.css">
    <link rel="stylesheet" href="assets/css/swiper.min.css">
    <link rel="stylesheet" href="assets/css/daterangepicker.css">
    <link rel="stylesheet" href="assets/css/lightgallery.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/custom.css">
    <link rel="stylesheet" href="assets/css/responsive.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-...your-integrity-key..." crossorigin="anonymous" referrerpolicy="no-referrer" />
  </head>