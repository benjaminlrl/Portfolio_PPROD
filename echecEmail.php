<?php require "sessionStart.php";?>
<?php $delay = 5000;?>
<?php if($langue === "fr"){
    $echecMessage = "Echec de l'envoie de l'email veuillez réessayer.";
    $title="Echec de l'envoie de l'email";
    $messageBouton ="Recommencer";
}
if($langue === "en"){
    $echecMessage = "Error, email was not sent, please try again. ";
    $title="Error, email sent.";
    $messageBouton ="Try again";
}?>
<?php $titlePage = $title; ?>
<?php require "head.php";?>
<head>
    <meta http-equiv="refresh" content="<?php echo $delay; ?>;url=index.php">
</head>
<body class="body-login">
<section class='section-echecConnexion' id='section-echecConnexion'>
    <?php require 'header.php';?>
    <div class="echecConnexion">
        <div class="msg-echecConnexion">
        <i class="fa-solid fa-shield-xmark fa-beat"></i>
        <p><?php echo $echecMessage?></p>
        </div>
        <a href="formMeContacter.php" class="btnRedirection"><?php echo $messageBouton;?></a>
    </div>
</section>
<?php require "footer.php";?>