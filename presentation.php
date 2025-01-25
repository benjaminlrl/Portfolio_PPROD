<!-- PRESENTATION -->
<section class="section-presentation" id="section-presentation" style="<?= $sectionStyle; ?>">
        <div class="container-presentation">
            <div class="presentation">
                <?php if($langue === "français"): ?>
                    <div class='title-presentation'>
                        <i class="fa-solid fa-pen-line fa-flip-horizontal"></i>
                        <h3>Présentation</h3>
                    </div>
                    <p>Je m'appelle <span class='important'>Benjamin Lorieul</span>, salarié en <span class="important">alternance</span> pour le <a href="#"><span class='important'>ministère des Armées</span> / <span class='important'>DRHAT</span></a> à Tours.<br></p>
                    <p>J'adore coder des projets, construire des applications ou créer des algorithmes pour résoudre divers problèmes.</p>
                    <p>Je suis principalement axé sur la création de <span class='important'>sites web</span> ainsi que de <span class='important'>solutions logicielles et applications</span>.</p>
                    <p>J'ai débuté en auto-didacte avec <span class='important'>HTML5, CSS et PHP</span> et je suis aujourd'hui étudiant en 1ère année de <span class='important'>BTS SIO SLAM en Alternance</span> dans la ville de Tours.</p>
                <?php endif ?>
                <?php if($langue === "english"): ?>
                    <div class='title-presentation'>
                        <i class="fa-solid fa-pen-line fa-flip-horizontal"></i>
                        <h3>Introduction</h3>
                    </div>
                    <p>I am <span class='important'>Benjamin Lorieul</span>, a <span class="important">work-study</span> employee for the <a href="#"><span class='important'>ministery of Army</span> / <span class='important'>DRHAT</span></a> in Tours.<br></p>
                    <p>I love coding projects, building applications or creating algorithms to solve various problems.</p>
                    <p>I am mainly focused on the creation of <span class='important'>websites</span> as well as <span class='important'>software solutions and applications</span>.</p>
                    <p>I learned mostly in self-taught with <span class='important'>HTML5, CSS and PHP</span> and I am now a student in the 1st year of <span class='important'>BTS SIO SLAM</span> in the city of Tours.</p>
                <?php endif ?>
            </div>
        </div>
        <div class="icone-down"><a href="#section-parcours"><i class="fa-solid fa-arrow-down fa-bounce fa-2xl"></i></a></div>        
    </section>