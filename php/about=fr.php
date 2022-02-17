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
            <span class="trait">qui je suis</span>
        </div>
        <div class="hand">
            < p>
        </div>
        <p class="about-skills-text">
        Je m'appelle Alexandre Welty, j'ai 23 ans, j'habite en Alsace à Strasbourg. Je suis étudiant à l'IUT de Saint-Die-des-Vosges, et je suis passionné par l'informatique.
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
                    <li><a href="#">travail d'équipe</a></li>
                    <li><a href="#">Curieux</a></li>
                    <li><a href="#">passionné</a></li>
                    <li><a href="#">Athlétisme</a></li>
                    <li><a href="#">Cyclisme</a></li>
                    <li><a href="#">Cinema</a></li>
                    <li><a href="#">Lecture</a></li>
                    <li><a href="#">Ponctuel</a></li>
                    <li><a href="#">Attentif</a></li>
                    <li><a href="#">Autonome</a></li>
                    <li><a href="#">organisation</a></li>
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