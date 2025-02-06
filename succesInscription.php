<?php require "sessionStart.php";?>
<?php $delay = 5000;?>
<?php if($langue === "français"){
    $succesInscriptionMessage = "Votre inscription à bien été prise en compte.";
    $title="S'inscrire";
    $messageBouton ="Accueil";
}
if($langue === "english"){
    $succesInscriptionMessage = "Your registration has been successfully confirmed.";
    $title="Sign up";
    $messageBouton ="Home";
}?>
<?php $titlePage = $title; ?>
<?php require "head.php";?>
<head>
    <meta http-equiv="refresh" content="<?php echo $delay; ?>" url="index.php">
</head>
<body class="body-login">
<section class='section-succesInscription' id='succesInscription'>
    <?php require 'header.php';?>
    <div class="succesInscription">
        <div class="msg-succesInscription">
        <i class="fa-sharp fa-solid fa-shield-check fa-spin-pulse"></i>
        <p><?php echo $succesInscriptionMessage?></p>
        </div>
        <a href="index.php" class="btnRedirection"><?php echo $messageBouton;?></a>
    </div>
</section>
<?php require "footer.php";?>
