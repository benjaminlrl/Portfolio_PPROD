<!-- MAIN -->
<div class="main-accueil">
    <?php if($langue === "fr"): ?>
        <h2>bonjour&nbsp;! <i class="fa-thin fa-hand-wave icone-hand-shake"></i><br>je suis Benjamin</h2>
            <div class="main-status" id="animatedText">&nbsp;</div>
    <?php elseif($langue === "en"): ?>
        <h2>hi&nbsp;! <i class="fa-regular fa-hand-wave"></i><br>I am Benjamin</h2>
            <div class="main-status" id="animatedText">&nbsp;</div>
    <?php endif; ?>
    <div class="icone-down icone-down-accueil">
        <a href="#section-presentation"><i class="fa-light fa-hand-point-down fa-flip-horizontal"></i><p>me découvrir</p></a>
    </div>
</div>
<script src="script.js"></script>
<script>
    const animatedTextElement = document.getElementById("animatedText");
    if (animatedTextElement) {
        const textList = <?php echo $langue === "fr" ?
            '["Étudiant en alternance...", "Athlète pour FreeRunAthlé37..."]' :
            '["I am an apprentice developer.", "Check out my portfolio!"]'; ?>;

        setTimeout(() => {
            animateTexts("animatedText", textList, 100, 1500);
        }, 100);
    }
</script>