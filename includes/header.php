<?php
    $companyName = "Franklin's Fine Dining";
    include "includes/arrays.php";
?>
<!DOCTYPE html>
<html lang="">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo TITLE; ?></title>
    <link rel="stylesheet" href="styles.css">
</head>

<body id="final-example">
<div class="wrapper">
    <div id="banner">
        <a herf="/" title="Return to Home">
            <img src="banner.png" alt="Franklin's Fine Dining">
        </a>
    </div><!-- banner -->
    <div id="nav">
        <?php include("includes/nav.php"); ?>
    </div><!-- nav -->
    <div class="content">
