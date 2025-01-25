<?php $langue = "français" ;?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Animation Scroll</title>
    <link rel="stylesheet" href="styleTest.css">
</head>
<body>
<!-- COMPETENCES -->
<section class="section-competences" id="section-competences">
        <div class="container-competences">
            <div class="title-competences">
                <i class="fa-solid fa-code"></i>
                <?php if($langue === "français")echo('
                <h3>Compétences :</h3>');
                    if($langue === "english")echo('
                <h3>Skills :</h3>')?>
            </div>
            <div class="competence-wrapper">
                <div class="competence up1">
                    <div class="competence-front">
                        <svg width="150" height="150" viewBox="-25 -25 250 250" xmlns="http://www.w3.org/2000/svg" style="transform:rotate(-90deg); background-color: #000;">
                            <circle r="90" cx="100" cy="100" fill="transparent" stroke="white" stroke-width="4px"></circle>
                            <circle r="90" cx="100" cy="100" stroke="url(#gradient)" stroke-width="25px" stroke-linecap="round" fill="transparent" stroke-dasharray="565.48px" stroke-dashoffset="452px"></circle>
                            <defs>
                                <linearGradient id="gradient" x1="40%" y1="40%" x2="80%" y2="0%">
                                    <stop offset="0%" stop-color="#6a05a5" />
                                    <stop offset="100%" stop-color="#fa67ff" />
                                </linearGradient>
                                <clipPath id="roundedImage">
                                    <rect x="50" y="45" width="100" height="100" rx="5" ry="5"></rect>
                                </clipPath>
                            </defs>
                            <image href="img/PHP_Logo.png" x="50" y="45" height="100px" width="100px" style="transform:rotate(90deg) translate(0px, -196px)" clip-path="url(#roundedImage)" class="logo"></image>
                        </svg>
                    </div>
                    <div class="competence-back-container">
                        <div class="competence-back">
                            <p>PHP<br><span>&lt;?php <span class="echo">echo</span> '<span class="important">75%</span>'; ?&gt;</span></p>
                        </div>
                    </div>
                </div>
                <div class="competence up2">
                    <div class="competence-front">
                        <svg width="150" height="150" viewBox="-25 -25 250 250" xmlns="http://www.w3.org/2000/svg" style="transform:rotate(-90deg); background-color: #000;">
                            <circle r="90" cx="100" cy="100" fill="transparent" stroke="white" stroke-width="4px"></circle>
                            <circle r="90" cx="100" cy="100" stroke="url(#gradient)" stroke-width="25px" stroke-linecap="round" fill="transparent" stroke-dasharray="565.48px" stroke-dashoffset="452px"></circle>
                            <defs>
                                <linearGradient id="gradient" x1="40%" y1="40%" x2="80%" y2="0%">
                                    <stop offset="0%" stop-color="#6a05a5" />
                                    <stop offset="100%" stop-color="#fa67ff" />
                                </linearGradient>
                                <clipPath id="roundedImage">
                                    <rect x="50" y="45" width="100" height="100" rx="5" ry="5"></rect>
                                </clipPath>
                            </defs>
                            <image href="img/PHP_Logo.png" x="50" y="45" height="100px" width="100px" style="transform:rotate(90deg) translate(0px, -196px)" clip-path="url(#roundedImage)" class="logo"></image>
                        </svg>
                    </div>
                    <div class="competence-back-container">
                        <div class="competence-back">
                            <p>PHP<br><span>&lt;?php <span class="echo">echo</span> '<span class="important">75%</span>'; ?&gt;</span></p>
                        </div>
                    </div>
                </div>
                <div class="competence up3">
                    <div class="competence-front">
                        <svg width="150" height="150" viewBox="-25 -25 250 250" xmlns="http://www.w3.org/2000/svg" style="transform:rotate(-90deg); background-color: #000;">
                            <circle r="90" cx="100" cy="100" fill="transparent" stroke="white" stroke-width="4px"></circle>
                            <circle r="90" cx="100" cy="100" stroke="url(#gradient)" stroke-width="25px" stroke-linecap="round" fill="transparent" stroke-dasharray="565.48px" stroke-dashoffset="452px"></circle>
                            <defs>
                                <linearGradient id="gradient" x1="40%" y1="40%" x2="80%" y2="0%">
                                    <stop offset="0%" stop-color="#6a05a5" />
                                    <stop offset="100%" stop-color="#fa67ff" />
                                </linearGradient>
                                <clipPath id="roundedImage">
                                    <rect x="50" y="45" width="100" height="100" rx="5" ry="5"></rect>
                                </clipPath>
                            </defs>
                            <image href="img/PHP_Logo.png" x="50" y="45" height="100px" width="100px" style="transform:rotate(90deg) translate(0px, -196px)" clip-path="url(#roundedImage)" class="logo"></image>
                        </svg>
                    </div>
                    <div class="competence-back-container">
                        <div class="competence-back">
                            <p>PHP<br><span>&lt;?php <span class="echo">echo</span> '<span class="important">75%</span>'; ?&gt;</span></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="icone-down"><a href="#section-langues"><i class="fa-solid fa-arrow-down fa-bounce fa-2xl"></i></a></div>        
        </div>
    </section>
</body>
</html>