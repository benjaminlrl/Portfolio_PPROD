<?php require 'sessionStart.php';
if (isset($_GET['langue'])) {
    $langue = htmlspecialchars($_GET['langue']); // Sécurisation de la donnée
}
$titlePage = 'A propos de moi';
require 'head.php';
?>
<body class="body-projets">
<?php require 'header.php'?>
    <section class="section-main-apropos">
        <div class="apropos-wrapper">
            <div class="grid-container-apropos">
                <div class="content-apropos informatique">
                    <div class="title-content-horizontal"><p>INFORMATIQUE</p></div>
                </div>
                <div class="content-apropos title">
                    <div class="title-content-vertical">
                            <span>S</span>
                            <span>P</span>
                            <span>O</span>
                            <span>R</span>
                            <span>T</span>
                            <span>S</span>
                    </div>
                </div>
                <div class="content-apropos running">
                    <div class="title-running running-content"><p>RUNNING</p></div>
                    <div class="chrono running-content">
                        <div class="chrono-distance"><p>5km&nbsp;:</p><span>0:20:00</span></div>
                        <div class="chrono-distance"><p>10km&nbsp;:</p><span>0:40:00</span></div>
                        <div class="chrono-distance"><p>21km&nbsp;:</p><span>1:30:00</span></div>
                    </div>
                    <div class="km-running running-content"><p>Distance parcourus&nbsp;:</p><span>1103.85 km</span></div>
                    <div class="title-club-name running-content"><p>Club&nbsp;:</p><span>FreeRunAthlé37</span></div>
                </div>
                <div class="content-apropos natation">
                    <div class="title-content-vertical"><p>NATATION</p></div>
                </div>
                <div class="content-apropos velo">
                    <div class="title-content-vertical"><p>CYCLISME</p></div>
                </div>
            </div>
        </div>
</section>
<?php require 'footer.php';?>