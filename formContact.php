<?php
require 'sessionStart.php';
$titlePage='Me contacter';
require 'head.php';?>
<body class="body-meContacter">
<section class="section-meContacter" id="section-meContacter">
<?php require 'header.php';?>
    <main class="meContacter-main">
        <div class="wrapper-meContacter">
            <form action="submitMeContacter.php" method="POST">
                <h1>Me contacter</h1>
                <div class="container-input-box-meContacter">
                    <div class="input-box-meContacter email">
                        <input type="email" name="email" placeholder="votre@email.fr" value="<?php if(isset($_SESSION["user_email"])){echo $_SESSION["user_email"];}?>" required>
                        <i class="fa-solid fa-user"></i>
                    </div>
                    <div class="input-box-meContacter username">
                        <input type="text" name="userName" placeholder="Nom Prénom" required>
                        <i class="fa-solid fa-address-card"></i>
                    </div>
                </div>
                <div class="input-box-meContacter message">
                    <textarea name="message" placeholder="Votre message..." rows="8" required></textarea>
                </div>
                <input type="text" name="honeypot" style="display:none;">
                <div class="confidentialite-check">
                    <input type="checkbox" name="confidentialite-check" id="confidentialite-check">
                    <p>J'accepte que mon adresse email soit récupérée afin de pouvoir être contacté en retour.</p>
                </div>
                <button type="submit" class="btn-submit-meContacter">Envoyer  <i class="fa-solid fa-paper-plane"></i></button>
            </form>
        </div>
    </main>
</section>
<?php require 'footer.php';?>