<?php require "sessionStart.php";?>
<?php $delay = 5000;?>
<?php if($langue === "français"){
    $succesEnvoieMessage = "Votre message à bien était envoyé, je répondrais dès que possible !";
    $title="Email envoye avec succes";
    $messageBouton ="Accueil";
}
if($langue === "english"){
    $succesEnvoieMessage = "Your message has been succesfully sent, I'll respond you as soon as possible !.";
    $title="Email sent with succes";
    $messageBouton ="Home";
}?>
<?php $titlePage = $title; ?>
<?php require "head.php";?>
<head>
    <meta http-equiv="refresh" content="<?php echo $delay; ?>;url=index.php">
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
<?php require "footer.php";?>