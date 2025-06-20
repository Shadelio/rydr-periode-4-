<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $subject = htmlspecialchars($_POST['subject']);
    $message = htmlspecialchars($_POST['message']);
    session_start();
    $_SESSION['feedback_message'] = "Bedankt voor uw bericht, $name! We nemen zo spoedig mogelijk contact met u op.";
    header("Location: /pages/bedankt-help.php");
    exit();
} else {
    // If the file is accessed directly, redirect to the help page.
    header("Location: /pages/hulp-nodig.php");
    exit();
}
?>
