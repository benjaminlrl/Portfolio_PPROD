<?php require 'sessionStart.php';
    if(!isset($_SESSION["user_email"])){
    if($langue === "fr") {$title="Se connecter";}
    if($langue === "en"){$title="Login";}
    $titlePage= $title;
}else{
    if($langue === "fr"){ $title="Se déconnecter";}
    if($langue === "en"){$title="Logout";}
    $titlePage= $title;
}
require 'head.php' ;?>
<body class="body-login">

<section class='section-login' id='section-login'>
    <?php require 'header.php';
    if(!isset($_SESSION["user_email"])): ?>
        <main class='login-main'>
            <div class='wrapper-login'>
                <form action='submitLogin.php' method='POST'>
                    <?php if($langue ==="fr"): ?>
                        <h1>Se connecter</h1>
                        <div class='input-box-login'>
                            <input type='email' placeholder='exemple@domaine.com' name='user_email'  value="<?php if(isset($_SESSION['bul_email']))echo $_SESSION['bul_email'];?>" required>
                            <i class='fa-solid fa-user'></i>
                        </div>
                        <div class='input-box-login'>
                            <input type='password' placeholder='password' name='user_password'required>
                            <i class='fa-solid fa-lock-keyhole'></i>
                        </div>
                        <button type='submit'class='btn-submit-login'>Se connecter<i class='fa-solid fa-right-to-bracket'></i></button>

                        <div class='register-link-login'>
                            <p>Vous n'avez pas de compte ? <a href='inscription.php'><span class="important">S'inscrire</span></a></p>
                        </div>
                    <?php endif; ?>
                    <?php if($langue ==="en"): ?>
                        <h1>Login</h1>
                        <div class='input-box-login'>
                            <input type='email' placeholder='exemple@domain.com' name='user_email'  value="<?php if(isset($_SESSION['bul_email'])){echo $_SESSION['bul_email'];}?>" required>
                            <i class='fa-solid fa-user'></i>
                        </div>
                        <div class='input-box-login'>
                            <input type='password' placeholder='password' name='user_password'required>
                            <i class='fa-solid fa-lock-keyhole'></i>
                        </div>

                        <div class='remember-forgot-login'>
                            <label><input type='checkbox'>Remember me</label>
                            <a href='#'>Forgot password ?</a>
                        </div>
                        <button type='submit'class='btn-submit-login'>Login<i class='fa-solid fa-right-to-bracket'></i></button>

                        <div class='register-link-login'>
                            <p>Don't have account ?<a href='inscription.php' class="important">Register</a></p>
                        </div>
                    <?php endif; ?>
                </form>
            </div>
        </main>
</section>
<?php else: ?>
    <main class='login-main'>
        <div class='wrapper-login'>
            <form action='submitLogout.php' method='POST'>
            <?php if($langue ==="fr"): ?>
                <h1>Se déconnecter</h1>
                <div class='input-box-login'>
                    <h3><?php echo $_SESSION['user_email'] ?></h3>
                    <i class='fa-solid fa-user'></i>
                </div>
                <button type='submit'class='btn-submit-login'>Se déconnecter<i class='fa-solid fa-right-from-bracket'></i></button>
            <?php endif; ?>
            <?php if($langue ==="en"): ?>
                <h1>Logout</h1>
                <div class='input-box-login'>
                    <h3><?php echo $_SESSION['user_email'] ?></h3>
                    <i class='fa-solid fa-user'></i>
                </div>
                <button type='submit'class='btn-submit-login'>Logout<i class='fa-solid fa-right-from-bracket'></i></button>
            <?php endif; ?>
            </form>
        </div>
    </main>
<?php endif; ?>
</section>

<?php require 'footer.php';?>