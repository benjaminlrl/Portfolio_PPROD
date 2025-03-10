<!-- HEADER -->
<header>
    <div class="topbar-wrapper-accueil">
        <?php if ($langue === "fr"):?>
                <div class='items-link'>
                    <button class="theme-toggle" id="changeColorBtn"><i class="fa-solid fa-moon"></i></button>
                    <a href='index.php' class='item-link nav-link drop3'>Accueil</a>
                    <a href='projets.php' class='item-link nav-link drop3'>Projets</a>
                <?php if (isset($_SESSION['user_email'])): ?>
                    <a href='portefeuilledecompetences.php' class='item-link nav-link drop3'>Portefeuille de compétences</a>
                <?php endif ?>
                    <a href='experiences.php' class='item-link nav-link drop3'>Expériences professionnelles</a>
                    <a href='formContact.php' class='item-link nav-link drop4'>Me contacter</a>
                    <a href='login.php' class='item-link nav-link drop5'>
                <?php if (isset($_SESSION['user_email'])) {
                    echo "Se déconnecter";
                } else {
                    echo "Se connecter";
                }
                echo "</a>
                </div>";?>
        <?php endif ?>
        <?php if ($langue === "en"): ?>
                <div class='items-link'>
                    <button class="theme-toggle" id="changeColorBtn"><i class="fa-solid fa-moon"></i></button>
                    <a href='index.php' class='item-link nav-link drop3'>Home</a>
                    <a href='projets.php' class='item-link nav-link drop3'>Projects</a>
                <?php if (isset($_SESSION['user_email'])): ?>
                    <a href='portefeuilledecompetences.php' class='item-link nav-link drop3'>Skills portfolio</a>
                <?php endif ?>
                    <a href='experiences.php' class='item-link nav-link drop3'>Professionals experiences</a>
                    <a href='formContact.php' class='item-link nav-link drop4'>Contact me</a>
                    <a href='login.php' class='item-link nav-link drop4'>
                <?php if (isset($_SESSION['user_email'])) {
                    echo "Logout";
                } else {
                    echo "Login";
                }
                echo "</a>
                </div>";?>
        <?php endif ?>
        <div class='items-contact'>
            <a href='https://github.com/benjaminlrl' class='item-contact drop5' target='_blank'><i class='fa-brands fa-github'></i></a>
            <a href='https://www.linkedin.com/in/benjamin-lorieul-15b5a32bb' class='item-contact drop6' target='_blank'><i class='fa-brands fa-linkedin'></i></a>
            <span class="drop7"></span>
            <div class="language-selector">
                <button class="dropdown-btn drop8" id="dropdown-toggle"><i class="fa-solid fa-language"></i></button>
                <div class="dropdown-content" id="dropdown-menu">
                    <a href="?langue=fr">Français</a>
                    <a href="?langue=en">English</a>
                </div>
            </div>
        </div>
    </div>
</header>