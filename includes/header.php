<?php session_start(); ?>
<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rydr</title>
    <link rel="stylesheet" href="/assets/css/main.css">
    <link rel="stylesheet" href="/assets/css/cards.css">
    <link rel="icon" type="image/png" href="/assets/images/favicon.ico" sizes="32x32">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">
</head>
<body>
<div class="topbar">
    <div class="logo">
        <a href="/">
            Rydr.
        </a>
    </div>
    <form action="/zoeken" method="GET">
        <input type="search" name="brand" id="search" placeholder="Zoek op automerk..." required>
        <img src="/assets/images/icons/search-normal.svg" alt="" class="search-icon">
    </form>
    <nav>
        <ul>
            <li><a href="/home">Home</a></li>
            <li><a href="/ons-aanbod">Ons aanbod</a></li>
            <li><a href="/hulp-nodig">Hulp nodig?</a></li>
        </ul>
    </nav>
    <div class="menu">
        <?php if(isset($_SESSION['id'])){ ?>
        <div class="wishlist-icon">
            <a href="/wishlist" title="Mijn favorieten">
                ♥
                <?php if(isset($_SESSION['likes']) && count($_SESSION['likes']) > 0): ?>
                <span class="count"><?= count($_SESSION['likes']) ?></span>
                <?php endif; ?>
            </a>
        </div>
        <div class="account">
            <div class="profile-container">
                <img src="/assets/images/profil.png" alt="Profiel">
                <span class="dropdown-arrow">▼</span>
            </div>
            <div class="account-dropdown">
                <ul>
                    <li><img src="/assets/images/icons/setting.svg" alt=""><a href="/register-form">Naar account</a></li>
                    <li><img src="/assets/images/icons/logout.svg" alt=""><a href="/logout">Uitloggen</a></li>
                </ul>
            </div>
        </div>
        <?php }else{ ?>
            <a href="/register-form" class="button-primary">Start met huren</a>
        <?php } ?>

    </div>
</div>
<div class="content"></div>
