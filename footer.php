
<div class="footer">
  <div class="content">
      <div class="container">
        <div class="footer__label">
          <h2 class="footer__title">Benjamin</h2>
            <span class="footer__subtitle">Lorieul</span>
        </div>
        
        <ul class="footer__links">
          <li>
            <?php if(isset($_SESSION['group']) && ($_SESSION['group']) === "admin"){echo("<a href='formContact.php' class='footer__link'>");
            if($langue === "français")echo("Me contacter</a>");if($langue === "english")echo("Contact me");echo("
          </li>
          <li>
            <a href='doc/02012025_CV_Benjamin_Lorieul.pdf' target='_blank' class='footer__link'>"); if($langue === "français")echo("Mon CV <i class='fa-regular fa-arrow-up-right-from-square'></i>");if($langue === "english")echo("My CV <i class='fa-regular fa-arrow-up-right-from-square'></i>");echo("</a>
          </li>");}?>
          <li>
              <a href="https://www.iscb.fr/" class="footer__link" target="_blank">iscb.fr</a>
          </li>
          <li>
              <a href="https://www.terre.defense.gouv.fr/drhat" class="footer__link" target="_blank">ministère des Armées</a>
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
    <p class="footer__copy"><?php if($langue === "français")echo("Fait avec passion | 2025 Benjamin Lorieul");if($langue === "english")echo("Made with love | 2025 Benjamin Lorieul")?></p>
  </div>
</div>
</body>
</html>