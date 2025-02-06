<?php require 'sessionStart.php' ?>
<?php $delay = 5000;?>
<?php if($langue === "français"){
    $succesEnvoieMessage = "Votre message à bine été envoyé, je vous répondrais dès que possible !";
    $title="Email envoyé avec succés";
    $messageBouton ="Accueil";
}
if($langue === "english"){
    $succesEnvoieMessage = "Your message has been succesfully sent, I'll respond you as soon as possible !.";
    $title="Echec de l'envoie de l'email";
    $messageBouton ="Home";
}
$titlePage = $title;
require 'head.php';?>
<head>
    <meta http-equiv="refresh" content="<?php echo $delay; ?>" url="index.php">
</head>
<body class="body-login">
<section class='section-succesInscription' id='succesInscription'>
    <?php require 'header.php';?>
    <div class="succesInscription">
        <div class="msg-succesInscription">
        <i class="fa-sharp fa-solid fa-shield-check fa-spin-pulse"></i>
        <p><?php echo $succesEnvoieMessage?></p>
        </div>
        <a href="index.php" class="btnRedirection"><?php echo $messageBouton;?></a>
    </div>
</section>
<?php require 'footer.php';?>
