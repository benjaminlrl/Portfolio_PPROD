<!-- LANGUES -->
<section class="section-langues" id="section-langues" >
    <div class="container-langues">
        <div class="title-langue">
            <i class="fa-solid fa-language"></i>
            <?php if($langue === "fr"){echo'<h3>Langues</h3>';}
                    if($langue === "en"){echo'<h3>Languages</h3>';}?>
        </div>
        <div class="competences">
            <div class="langue">
                <svg width="150" height="150" viewBox="-25 -25 250 250" version="1.1" xmlns="http://www.w3.org/2000/svg" style="transform:rotate(-90deg); background-color: transparent;">
                    <defs>
                        <linearGradient id="gradient" x1="40%" y1="40%" x2="80%" y2="0%">
                            <stop offset="0%" stop-color="#6a05a5" />
                            <stop offset="100%" stop-color="#fa67ff" />
                        </linearGradient>
                        <clipPath id="roundedImage">
                            <rect x="50" y="45" width="100" height="100" rx="5" ry="5"></rect>
                        </clipPath>
                    </defs>
                    <circle r="90" cx="100" cy="100" stroke="url(#gradient)" stroke-width="25px" stroke-linecap="round" fill="transparent" stroke-dasharray="565.48px" stroke-dashoffset="0px"></circle>
                    <image href="img/France_Flag.png" x="50" y="45" height="100px" width="100px" style="transform:rotate(90deg) translate(0px, -196px)" clip-path="url(#roundedImage)"></image>
                </svg>
                <p>C2</p>
            </div>
            <div class="langue">
                <svg width="150" height="150" viewBox="-25 -25 250 250" version="1.1" xmlns="http://www.w3.org/2000/svg" style="transform:rotate(-90deg); background-color: transparent;">
                    <circle r="90" cx="100" cy="100" stroke="url(#gradient)" stroke-width="25px" stroke-linecap="round" fill="transparent" stroke-dasharray="565.48px" stroke-dashoffset="260px"></circle>
                    <image href="img/English_Flag.jpg" x="50" y="45" height="100px" width="100px" style="transform:rotate(90deg) translate(0px, -196px)" clip-path="url(#roundedImage)"></image>
                </svg>
                <p>A2+</p>
            </div>
            <div class="langue">
                <svg width="150" height="150" viewBox="-25 -25 250 250" version="1.1" xmlns="http://www.w3.org/2000/svg" style="transform:rotate(-90deg); background-color: transparent;">
                    <circle r="90" cx="100" cy="100" stroke="url(#gradient)" stroke-width="25px" stroke-linecap="round" fill="transparent" stroke-dasharray="565.48px" stroke-dashoffset="226px"></circle>
                    <image href="img/Spain_Flag.jpg" x="50" y="45" height="100px" width="100px" style="transform:rotate(90deg) translate(0px, -196px)" clip-path="url(#roundedImage)"></image>
                </svg>
                <p>B1+</p>
            </div>
        </div>
    </div>
    <div class="icone-down"><a href="#section-certification"><i class="fa-solid fa-arrow-down fa-bounce fa-2xl"></i></a></div>
</section>