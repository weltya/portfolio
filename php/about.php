<section class="about" id="about">
    <div class="section-left about">
        <div class="hand">
            < h2>
        </div>
        <h2 class="h2-red">A propos de moi</h2>
        <div class="hand">
            < h2>
        </div>
        <div class="section-content">
            <span class="trait">Qui suis-je</span>
        </div>
        <div class="hand">
            < p>
        </div>
        <p class="about-skills-text">
            Je m’appelle Alexandre Welty, j’ai 22 ans, j’habite en Alsace à Strasbourg.
            Je suis étudiant à l’école IRIS à Strasbourg, et je suis passionné par l’informatique depuis toujours.
        </p>
        <div class="hand">
            < p>
        </div>
    </div>

    <div class="section-right about">
        <div id="myCanvasContainer">
            <canvas width="600px" height="600px" id="myCanvas">
                <p>Anything in here will be replaced on browsers that support the canvas element</p>
                <ul>
                    <li><a href="#">Travail d'équipe</a></li>
                    <li><a href="#">Curieux</a></li>
                    <li><a href="#">Passionée</a></li>
                    <li><a href="#">athlétisme</a></li>
                    <li><a href="#">Cyclisme</a></li>
                    <li><a href="#">Cinéma</a></li>
                    <li><a href="#">Lecture</a></li>
                    <li><a href="#">Ponctuelle</a></li>
                    <li><a href="#">Attentif</a></li>
                    <li><a href="#">Autonome</a></li>
                    <li><a href="#">Organisation</a></li>
                </ul>
            </canvas>
        </div>
    </div>

</section>

<script type="text/javascript">
  window.onload = function() {
    try {
        TagCanvas.textColour = '#08FDD8';
        TagCanvas.outlineColour = '#FF0B56';
        TagCanvas.textHeight = 24;
        TagCanvas.Start('myCanvas');
    } catch(e) {
      // something went wrong, hide the canvas container
      document.getElementById('myCanvasContainer').style.display = 'none';
    }
  };
</script>