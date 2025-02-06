<?php require "sessionStart.php";?>
<?php $titlePage="S'inscrire"?>
<?php require "head.php";?>
<body class="body-login">

<section class='section-login' id='section-login'>
    <?php require 'header.php';?>
    
    <main class='login-main'>
        <div class='wrapper-login'>
            <form action='submitInscription.php' method='POST' id='registerForm'>
                <?php if($langue === "français"): ?>
                <h1>S'inscrire</h1>
                <div class='input-box-login'>
                    <input type='email' placeholder='exemple@domain.com' name='user_email' required id='user_email'>
                    <i class='fa-solid fa-user'></i>
                </div>
                <div class='input-box-login'>
                    <input type='password' placeholder='password' id='user_password' name='user_password'required>
                    <i class='fa-solid fa-lock-keyhole' style='color: #fff;'></i>
                </div>
                <div class='input-box-login'>
                    <input type='password' placeholder='password_verify' id='user_password_check' name='user_password'required>
                    <i class='fa-solid fa-lock-keyhole' style='color: #fff;'></i>
                </div>
                    <p id='password-error' style='color: red; display: none;'>Les mots de passes ne correspondent pas.</p>
                    <button type='submit'class='btn-submit-login'>Sign up</button>
                <?php endif ?>
                <?php if($langue === "english"): ?>
                <h1>Sign up</h1>
                <div class='input-box-login'>
                    <input type='email' placeholder='exemple@domain.com' name='user_email' required id='user_email'>
                    <i class='fa-solid fa-user'></i>
                </div>
                <div class='input-box-login'>
                    <input type='password' placeholder='password' id='user_password' name='user_password'required>
                    <i class='fa-solid fa-lock-keyhole' style='color: #fff;'></i>
                </div>
                <div class='input-box-login'>
                    <input type='password' placeholder='password_verify' id='user_password_check' name='user_password'required>
                    <i class='fa-solid fa-lock-keyhole' style='color: #fff;'></i>
                </div>
                    <p id='password-error' style='color: red; display: none;'>Les mots de passes ne correspondent pas.</p>
                    <button type='submit'class='btn-submit-login'>Sign up</button>
                <?php endif ?>
            </form>
        </div>
    </main>
</section> 

<script>
    // Fonction de validation du formulaire
    document.getElementById('registerForm').addEventListener('submit', function(e) {
        // Récupérer les valeurs des champs email
        const userEmail = document.getElementById('user_password').value;
        const userEmailCheck = document.getElementById('user_password_check').value;
        
        // Vérifier si les emails correspondent
        if (userEmail !== userEmailCheck) {
            e.preventDefault(); // Empêcher la soumission du formulaire
            document.getElementById('password-error').style.display = 'block'; // Afficher le message d'erreur
        } else {
            document.getElementById('password-error').style.display = 'none'; // Cacher le message d'erreur
        }
    });
</script>


<?php require "footer.php";?>