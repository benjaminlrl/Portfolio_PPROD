<?php require "sessionStart.php";?>
<?php $delay = 5000;?>
<?php if($langue === "français"){
    $echecMessage = "Adresse email ou mot de passe invalide";
    $title="État connexion";
    $messageBouton ="Recommencer";
}
if($langue === "english"){
    $echecMessage = "Invalid email or password ";
    $title="Conexion Status";
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
        <a href="login.php" class="btnRedirection"><?php echo $messageBouton;?></a>
    </div>
</section>
<?php require "footer.php";?>