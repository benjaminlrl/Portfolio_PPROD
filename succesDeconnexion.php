<?php require "sessionStart.php";?>
<?php $titlePage="Se connecter"?>
<?php
if($langue === 'français') {
    $message = "Vous êtes bien déconnecté !";
    $messageBouton = "Accueil";
}
if ($langue === 'english') {
    $message = "You have successfully logged out !";
    $messageBouton = "Home";
}
?>
<?php require "head.php";?>
<?php $delay = 3;?>
<head>
    <meta http-equiv="refresh" content="<?php echo $delay; ?>;url=index.php">
</head>
<body class="body-login">
<section class='section-succesInscription' id='section-succesInscription'>
    <?php require 'header.php';?>
    <div class="succesDeconnexion">
        <div class="msg-succesDeconnexion">
        <i class="fa-sharp fa-solid fa-shield-check fa-spin-pulse"></i>
        <p><?php echo $message?></p>
        </div>
        <a href="index.php" class="btnRedirection"><?php echo $messageBouton;?></a>
    </div>
</section>
<?php require "footer.php";?>

