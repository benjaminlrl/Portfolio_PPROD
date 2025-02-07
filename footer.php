<div class="footer">
  <div class="content">
      <div class="container">
        <div class="footer__label">
          <h2 class="footer__title">Benjamin</h2>
            <span class="footer__subtitle">Lorieul</span>
        </div>
        
        <ul class="footer__links">
          <li>
            <a href='formContact.php' class='footer__link'>
                <?php
                    if ($langue === "fr") {
                        echo "Me contacter";
                    } elseif ($langue === "en") {
                        echo "Contact me";
                    }
                ?>
            </a>
          </li>
          <?php if(isset($_SESSION['user_group']) && $_SESSION['user_group'] === "admin") :?>
          <li>
            <a href='doc/03022025_CV_Benjamin_Lorieul.pdf' target='_blank' class='footer__link'>
              <?php if($langue === "fr"){ echo"Mon CV ";}?>
              <?php if($langue === "en"){ echo"My CV ";} ?>
            <i class='fa-regular fa-arrow-up-right-from-square'></i></a>
          </li>
          <?php endif ?>
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
    <p class="footer__copy">
      <?php if($langue === "fr"){echo"Fait avec passion | 2025 Benjamin Lorieul";}
      if($langue === "en"){echo"Made with love | 2025 Benjamin Lorieul";}?>
    </p>
  </div>
</div>
</body>
</html>