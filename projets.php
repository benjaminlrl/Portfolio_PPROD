<?php require 'sessionStart.php';
if (isset($_GET['langue'])) {
    $langue = htmlspecialchars($_GET['langue']); // Sécurisation de la donnée
}
$titlePage = 'A propos de moi';
require 'head.php';
?>
<body class="body-projets">
<?php require 'header.php'?>
    <section class="section-main-projects">
            <div class="container-projet">
                <div class="img-projet projetPortfolio"></div>
                <div class="icones-projet">
                    <div class="icone-projet icone-projetPortfolio_1"></div>
                    <div class="icone-projet icone-projetPortfolio_2"></div>
                    <div class="icone-projet icone-projetPortfolio_3"></div>
                    <div class="icone-projet icone-projetPortfolio_4"></div>
                    <div class="icone-projet icone-projetPortfolio_5"></div>
                    <div class="icone-projet icone-projetPortfolio_6"></div>
                </div>
                <div class="content-projet">
                    <div class="title-projet">
                        <i class="fa-regular fa-gamepad"></i>
                        <h3>Portfolio</h3>
                    </div>
                    <?php if($langue === "français"): ?>
                    <p>Comme tout bon développeur qui se respecte, je me devais d'avoir un portfolio reflétant ma personnalité, tant professionnelle que privée. J'ai donc confectionné mon portfolio de mes propres mains avec passion. Ce portfolio n'est, bien sûr, pas encore terminé : le responsive design, un formulaire de contact, mes expériences professionnelles, ainsi que certains détails restent à concevoir. Notamment, une fonctionnalité permettant d'accéder à mes projets avec plus de détails pour les plus curieux d'entre vous....</p>
                    <?php endif ?>
                    <?php if($langue === "english"): ?>
                    <p>As any self-respecting developer, I had to create a portfolio that reflects both my professional and personal personality. So, I crafted my portfolio with my own hands and a lot of passion. Of course, this portfolio is not yet complete: responsive design, a contact form, my professional experiences, and some details still need to be added. Notably, a feature to provide more detailed access to my projects for the most curious among you....</p>
                    <?php endif ?>
                    <a href="https://github.com/benjaminlrl/2024_memory_tp">En savoir plus <i class="fa-solid fa-arrow-right"></i></a>
                </div>
            </div>
            <div class="container-projet">
                <div class="img-projet projetMemory"></div>
                <div class="icones-projet">
                    <div class="icone-projet icone-Memory1"></div>
                </div>
                <div class="content-projet">
                    <div class="title-projet">
                        <i class="fa-regular fa-gamepad"></i>
                        <h3>Memory Game</h3>
                    </div>
                    <?php if($langue === "français"): ?>
                    <p>Dans le cadre d'un projet scolaire, à partir d'un code fourni par ma formatrice, j'ai eu pour mission d'optimiser le code ainsi que de l'améliorer en rajoutant un système de niveaux. Après avoir créer le système de niveaux, j'ai décidé de franchir un steps supérieur et d'implémenter un système permettant à l'utilisateur de sélectionner les cartes avec lesquelles il souhaite jouer.</p>
                    <?php endif ?>
                    <?php if($langue === "english"): ?>
                    <p>As part of a school project, based on a code provided by my teacher, I was tasked with optimizing the code and improving it by adding a level system. After creating the level system, I decided to take it a step further and implement a system that allows the user to select the cards they want to play with. Later, I plan to add various features such as a timer, a mode where the player can choose a card theme to play with, background music, and more....</p>
                    <?php endif ?>
                    <a href="https://github.com/benjaminlrl/2024_memory_tp">En savoir plus <i class="fa-solid fa-arrow-right"></i></a>
                </div>
            </div>
            <div class="container-projet">
                <div class="img-projet tdPython"></div>
                <div class="icones-projet">
                    <div class="icone-projet icone-tdPython"></div>
                </div>
                <div class="content-projet">
                    <div class="title-projet">
                        <i class="fa-regular fa-gamepad"></i>
                        <h3>TD Python</h3>
                    </div>
                    <?php if($langue === "français"): ?>
                    <p>Dans le cadre d'un devoir d'algorithmique, nous devions créer un algorithme qui vérifie si le numéro de carte Vitale saisi est correct.</p>
                    <?php endif ?>
                    <?php if($langue === "english"): ?>
                    <p>As part of an algorithmics assignment, we had to create an algorithm that checks if the entered Vitale card number is correct.</p>
                    <?php endif ?>
                    <a href="https://github.com/benjaminlrl/2024_memory_tp">En savoir plus <i class="fa-solid fa-arrow-right"></i></a>
                </div>
            </div>
            <div class="container-projet">
                <div class="img-projet projetPhishingNdlr"></div>
                <div class="icones-projet">
                    <div class="icone-projet icone-PhishingNdlr1"></div>
                    <div class="icone-projet icone-PhishingNdlr2"></div>
                    <div class="icone-projet icone-PhishingNdlr3"></div>
                    <div class="icone-projet icone-PhishingNdlr4"></div>
                    <div class="icone-projet icone-PhishingNdlr5"></div>
                    <div class="icone-projet icone-PhishingNdlr6"></div>
                </div>
                <div class="content-projet">
                    <div class="title-projet">
                        <i class="fa-regular fa-fishing-rod"></i>
                        <h3>Phishing notredamelariche.fr</h3>
                    </div>
                    <?php if($langue === "français"): ?>
                    <p>Dans le cadre d'un TP de cybersécurité et du consentement de mon établissement, j'avais un objectif: récupérer les coordonnées bancaires de ma victime travaillant à l'institut Notre dame la riche. Pour cela j'ai aspiré le site officiel de NDLR, modifié le site en ajoutant une page avec un formulaire, mis en place une base de données pour stocker les données du formulaire, installé un environnement pour héberger temporairement mon site sur une VM, et enfin pour pouvoir attrapé ma victime j'ai rédigé un email de phising.</p>
                    <?php endif ?>
                    <?php if($langue === "english"): ?>
                    <p>Creating a rock-paper-scissors game in console with C# involves implementing the rules of the game using user inputs and random choices for the computer. The game displays the results of each round and declares a winner based on the scores, while using loops and conditions to manage the game logic.</p>
                    <?php endif ?>
                    <a href="PhishingNdlrPresentation.php">En savoir plus <i class="fa-solid fa-arrow-right"></i></a>
                </div>
            </div>
            <div class="container-projet">
                <div class="img-projet projetChiffoumiGraphique"></div>
                <div class="icones-projet">
                    <div class="icone-projet icone-ChiffoumiGraphique1"></div>
                </div>
                <div class="content-projet">
                    <div class="title-projet">
                        <i class="fa-regular fa-hand-scissors"></i>
                        <h3>Chiffoumi</h3>
                    </div>
                    <?php if($langue === "français"): ?>
                    <p>Dans le cadre d'un projet scolaire, j'ai d'abord créé un jeu de chiffoumi en mode console pour aborder la logique de la programmation structurée. Le joueur affronte une machine qui choisit aléatoirement entre "Pierre", "Feuille" et "Ciseaux". Ensuite, j'ai ajouté une interface visuelle pour rendre le jeu plus interactif, avec des images représentant chaque choix et un affichage graphique des résultats.</p>
                    <?php endif ?>
                    <?php if($langue === "english"): ?>
                    <p>As part of a school project, I first created a rock-paper-scissors game in console mode to explore the logic of structured programming. The player faces a machine that randomly selects between "Rock," "Paper," and "Scissors." Later, I added a visual interface to make the game more interactive, with images representing each choice and a graphical display of the results.</p>
                    <?php endif ?>
                    <a href="https://github.com/benjaminlrl/2024_memory_tp">En savoir <i class="fa-solid fa-plus"></i></a>
                </div>
            </div>
            <div class="container-projet">
                <div class="img-projet projetChiffoumiConsole"></div>
                <div class="icones-projet">
                    <div class="icone-projet icone-ChiffoumiConsole1"></div>
                </div>
                <div class="content-projet">
                    <div class="title-projet">
                        <i class="fa-regular fa-hand-scissors"></i>
                        <h3>Chiffoumi_Console</h3>
                    </div>
                    <?php if($langue === "français"): ?>
                    <p>La création d'un jeu de chiffoumi en console avec C# consiste à implémenter les règles du jeu "Pierre, Feuille, Ciseaux" en utilisant des entrées utilisateurs et des choix aléatoires pour l'ordinateur. Le jeu affiche les résultats de chaque manche et déclare un gagnant en fonction des scores, tout en utilisant des boucles et des conditions pour gérer la logique.</p>
                    <?php endif ?>
                    <?php if($langue === "english"): ?>
                    <p>Creating a rock-paper-scissors game in console with C# involves implementing the rules of the game using user inputs and random choices for the computer. The game displays the results of each round and declares a winner based on the scores, while using loops and conditions to manage the game logic.</p>
                    <?php endif ?>
                    <a href="https://github.com/benjaminlrl/2024_memory_tp">En savoir plus <i class="fa-solid fa-arrow-right"></i></a>
                </div>
            </div>
            <div class="container-projet">
                <div class="img-projet ProjetExceptionalCarsMai2024"></div>
                <div class="icones-projet">
                    <div class="icone-projet icone-ProjetExceptionalCarsMai2024_1"></div>
                    <div class="icone-projet icone-ProjetExceptionalCarsMai2024_2"></div>
                </div>
                <div class="content-projet content-projet-ProjetExceptionalCarsMai2024">
                    <div class="title-projet">
                        <i class="fa-regular fa-boxes-stacked"></i>
                        <h3>Flex Cars</h3>
                    </div>
                    <?php if($langue === "français"): ?>
                    <p>Ce projet ma permis d'apprendre à utiliser les flexbox en CSS, une maitrise essentielle pour le developpement de page web. Le but de ce projet été de créer un site web de quelque page afin d'y ajouter du contenu pour utiliser les flexboxs. Afin de pouvoir maîtriser les flexboxs je vous conseille le jeu du site flexboxfroggy.com. C'est un super jeu pour comprendre et apprendre les proriétées des flexboxs.</p>
                    <?php endif ?>
                    <?php if($langue === "english"): ?>
                    <p>Creating a simple blog page in HTML and CSS involves designing a basic structure that includes a header, a section for the content of the articles, and a footer. In HTML, elements like are used to organize the page. CSS is applied to style the page, such as arranging the articles, adding colors, and selecting fonts. Users can then view a functional and aesthetically pleasing blog with a clear layout for reading the articles.</p>
                    <?php endif ?>
                    <a href="https://github.com/benjaminlrl/2024_memory_tp">En savoir plus <i class="fa-solid fa-arrow-right"></i></a>
                </div>
            </div>
            <div class="container-projet">
                <div class="img-projet ProjetreseauSocialAvril2024"></div>
                <div class="icones-projet">
                    <div class="icone-projet icone-ProjetreseauSocialAvril2024_1"></div>
                    <div class="icone-projet icone-ProjetreseauSocialAvril2024_2"></div>
                </div>
                <div class="content-projet">
                    <div class="title-projet">
                        <i class="fa-regular fa-messages"></i>
                        <h3>Page de réseau social</h3>
                    </div>
                    <?php if($langue === "français"): ?>
                    <p>La création d'une page de blog simple en HTML et CSS consiste à concevoir une structure de base comprenant un en-tête, une section pour le contenu des articles, et un pied de page. En HTML, on utilise des balises pour organiser la page. Le CSS est utilisé pour ajouter du style à la page, comme la mise en page des articles, les couleurs, et les polices. Les utilisateurs peuvent ainsi voir un blog fonctionnel et esthétiquement agréable, avec une disposition claire pour la lecture des articles.</p>
                    <?php endif ?>
                    <?php if($langue === "english"): ?>
                    <p>Creating a simple blog page in HTML and CSS involves designing a basic structure that includes a header, a section for the content of the articles, and a footer. In HTML, elements like are used to organize the page. CSS is applied to style the page, such as arranging the articles, adding colors, and selecting fonts. Users can then view a functional and aesthetically pleasing blog with a clear layout for reading the articles.</p>
                    <?php endif ?>
                    <a href="https://github.com/benjaminlrl/2024_memory_tp">En savoir plus <i class="fa-solid fa-arrow-right"></i></a>
                </div>
            </div>
            <div class="container-projet">
                <div class="img-projet ProjetBlogMars2024"></div>
                <div class="icones-projet">
                    <div class="icone-projet icone-ProjetBlogMars2024_1"></div>
                    <div class="icone-projet icone-ProjetBlogMars2024_2"></div>
                </div>
                <div class="content-projet">
                    <div class="title-projet">
                        <i class="fa-regular fa-messages"></i>
                        <h3>Page de Blog</h3>
                    </div>
                    <?php if($langue === "français"): ?>
                    <p>La création d'une page de blog simple en HTML et CSS consiste à concevoir une structure de base comprenant un en-tête, une section pour le contenu des articles, et un pied de page. En HTML, on utilise des balises pour organiser la page. Le CSS est utilisé pour ajouter du style à la page, comme la mise en page des articles, les couleurs, et les polices. Les utilisateurs peuvent ainsi voir un blog fonctionnel et esthétiquement agréable, avec une disposition claire pour la lecture des articles.</p>
                    <?php endif ?>
                    <?php if($langue === "english"): ?>
                    <p>Creating a simple blog page in HTML and CSS involves designing a basic structure that includes a header, a section for the content of the articles, and a footer. In HTML, elements like are used to organize the page. CSS is applied to style the page, such as arranging the articles, adding colors, and selecting fonts. Users can then view a functional and aesthetically pleasing blog with a clear layout for reading the articles.</p>
                    <?php endif ?>
                    <a href="https://github.com/benjaminlrl/2024_memory_tp">En savoir plus <i class="fa-solid fa-arrow-right"></i></a>
                </div>
            </div>
            
    </section>
<?php require 'footer.php';?>