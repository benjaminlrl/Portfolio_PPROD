<?php require 'sessionStart.php';
    if(!isset($_SESSION["user_email"])){
    if($langue === "français") {$title="Se connecter";}
    if($langue === "english"){$title="Login";}
    $titlePage= $title;
}else{
    if($langue === "français"){ $title="Se déconnecter";}
    if($langue === "english"){$title="Logout";}
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
                    <?php if($langue ==="français"): ?>
                        <h1>Se connecter</h1>
                        <div class='input-box-login'>
                            <input type='email' placeholder='exemple@domaine.com' name='user_email'  value="<?php if(isset($_SESSION['bul_email']))echo $_SESSION['bul_email'];?>" required>
                            <i class='fa-solid fa-user' style='color: #fff;'></i>
                        </div>
                        <div class='input-box-login'>
                            <input type='password' placeholder='password' name='user_password'required>
                            <i class='fa-solid fa-lock-keyhole' style='color: #fff;'></i>
                        </div>
                        <button type='submit'class='btn-submit-login'>Se connecter<i class='fa-solid fa-right-to-bracket'></i></button>

                        <div class='register-link-login'>
                            <p>Vous n'avez pas de compte ? <a href='register.php'><span class="important">S'inscrire</span></a></p>
                        </div>
                    <?php endif; ?>
                    <?php if($langue ==="english"): ?>
                        <h1>Login</h1>
                        <div class='input-box-login'>
                            <input type='email' placeholder='exemple@domain.com' name='user_email'  value="<?php if(isset($_SESSION['bul_email'])){echo $_SESSION['bul_email'];}?>" required>
                            <i class='fa-solid fa-user' style='color: #fff;'></i>
                        </div>
                        <div class='input-box-login'>
                            <input type='password' placeholder='password' name='user_password'required>
                            <i class='fa-solid fa-lock-keyhole' style='color: #fff;'></i>
                        </div>

                        <div class='remember-forgot-login'>
                            <label><input type='checkbox'>Remember me</label>
                            <a href='#'>Forgot password ?</a>
                        </div>
                        <button type='submit'class='btn-submit-login'>Login<i class='fa-solid fa-right-to-bracket'></i></button>

                        <div class='register-link-login'>
                            <p>Don't have account ?<a href='register.php' class="important">Register</a></p>
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
            <?php if($langue ==="français"): ?>
                <h1>Se déconnecter</h1>
                <div class='input-box-login'>
                    <h3><?php echo $_SESSION['user_email'] ?></h3>
                    <i class='fa-solid fa-user' style='color: #fff;'></i>
                </div>
                <button type='submit'class='btn-submit-login'>Se déconnecter<i class='fa-solid fa-right-from-bracket'></i></button>
            <?php endif; ?>
            <?php if($langue ==="english"): ?>
                <h1>Logout</h1>
                <div class='input-box-login'>
                    <h3><?php echo $_SESSION['user_email'] ?></h3>
                    <i class='fa-solid fa-user' style='color: #fff;'></i>
                </div>
                <button type='submit'class='btn-submit-login'>Logout<i class='fa-solid fa-right-from-bracket'></i></button>
            <?php endif; ?>
            </form>
        </div>
    </main>
<?php endif; ?>
</section>

<?php require 'footer.php';?>


<div class="footer">
  <div class="content">
      <div class="container">
        <div class="footer__label">
          <h2 class="footer__title">Benjamin</h2>
            <span class="footer__subtitle">Lorieul</span>
        </div>
        
        <ul class="footer__links">
          <li>
            <?php if(isset($_SESSION['user_email'])) : ?>
            <a href='formContact.php' class='footer__link'>
                <?php
                if($langue === "français"){echo"Me contacter";}
                if($langue === "english"){echo"Contact me";} ?>
                </a>
            <?php endif; ?>
          </li>
          <li>
            <a href='doc/02012025_CV_Benjamin_Lorieul.pdf' target='_blank' class='footer__link'>
                <?php if($langue === "français"){echo"Mon CV <i class='fa-regular fa-arrow-up-right-from-square'></i></a>";}
                    if($langue === "english"){echo"My CV <i class='fa-regular fa-arrow-up-right-from-square'></i></a>";}?>
          </li>
          <li>
              <a href="https://www.iscb.fr/" class="footer__link" target="_blank" >iscb.fr <i class='fa-regular fa-arrow-up-right-from-square'></i></a>
              
          </li>
          <li>
              <a href="https://www.terre.defense.gouv.fr/drhat" class="footer__link" target="_blank">ministère des Armées <i class='fa-regular fa-arrow-up-right-from-square'></i></a>
          </li>
        </ul>
        <div class="footer__socials">
          <a href="https://github.com/benjaminlrl" target="_blank" class="footer__social">
            <i class="fa-brands fa-github"></i>
          </a>
          <a href="https://www.linkedin.com/in/benjamin-lorieul-15b5a32bb" target="_blank" class="footer__social">
            <i class="fa-brands fa-linkedin"></i>
          </a>
          <a href="https://www.strava.com/athletes/125066471" target="_blank" class="footer__social">
            <i class="fa-brands fa-strava"></i>
          </a>
        </div>
      </div>
    <p class="footer__copy"><?php if($langue === "français"){echo"Fait avec passion | 2025 Benjamin Lorieul";}if($langue === "english"){echo"Made with love | 2025 Benjamin Lorieul";}?></p>
  </div>
</div>
</body>
</html>