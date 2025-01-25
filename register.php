<?php require "sessionStart.php";?>
<?php $titlePage="S'inscrire"?>
<?php require "head.php";?>
<body class="body-login">

<section class='section-login' id='section-login'>
    <?php require 'header.php';?>
    
    <main class='login-main'>
        <div class='wrapper-login'>
            <form action='submitInscription.php' method='POST' id='registerForm'>
                <?php if($langue === "français"){echo("
                <h1>S'inscrire</h1>
                <div class='input-box-login'>
                <input type='email' placeholder='exemple@domaine.com' name='user_email' required id='user_email'>
                <i class='fa-solid fa-user'></i>
            </div>
            <div class='input-box-login'>
                <input type='email' placeholder='exemple@domaine.com' name='user_email_check' required id='user_email_check'>
                <i class='fa-solid fa-user'></i>
            </div>
            <div class='input-box-login'>
                <input type='password' placeholder='password' name='user_password'required>
                <i class='fa-solid fa-lock-keyhole' style='color: #fff;'></i>
            </div>
                <p id='email-error' style='color: red; display: none;'>Les adresses email ne correspondent pas.</p>
                <button type='submit'class='btn-submit-login'>S'inscrire</button>");}
                if($langue === "english"){echo("
                    <h1>Sign up</h1>
                    <div class='input-box-login'>
                    <input type='email' placeholder='exemple@domain.com' name='user_email' required id='user_email'>
                    <i class='fa-solid fa-user'></i>
                </div>
                <div class='input-box-login'>
                    <input type='email' placeholder='exemple@domain.com' name='user_email_check' required id='user_email_check'>
                    <i class='fa-solid fa-user'></i>
                </div>
                <div class='input-box-login'>
                    <input type='password' placeholder='password' name='user_password'required>
                    <i class='fa-solid fa-lock-keyhole' style='color: #fff;'></i>
                </div>
                    <p id='email-error' style='color: red; display: none;'>Les adresses email ne correspondent pas.</p>
                    <button type='submit'class='btn-submit-login'>Sign up</button>");}?>
            </form>
        </div>
    </main>
</section> 

<script>
    // Fonction de validation du formulaire
    document.getElementById('registerForm').addEventListener('submit', function(e) {
        // Récupérer les valeurs des champs email
        const userEmail = document.getElementById('user_email').value;
        const userEmailCheck = document.getElementById('user_email_check').value;
        
        // Vérifier si les emails correspondent
        if (userEmail !== userEmailCheck) {
            e.preventDefault(); // Empêcher la soumission du formulaire
            document.getElementById('email-error').style.display = 'block'; // Afficher le message d'erreur
        } else {
            document.getElementById('email-error').style.display = 'none'; // Cacher le message d'erreur
        }
    });
</script>


<?php require "footer.php";?>