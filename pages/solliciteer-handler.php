<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    
    
    session_start();
    $_SESSION['sollicitatie'] = [
        'functie' => $_POST['functie'] ?? '',
        'naam' => $_POST['naam'] ?? '',
        'email' => $_POST['email'] ?? '',
        'motivatie' => $_POST['motivatie'] ?? ''
    ];
    header('Location: /pages/bedankt.php');
    exit;
} else {
    header('Location: /pages/vacatures.php');
    exit;
} 