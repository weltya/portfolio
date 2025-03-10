<section class="about" id="about">
    <div class="section-left about">
        <div class="hand">
            < h2>
        </div>
        <h2 class="h2-red">About me</h2>
        <div class="hand">
            < h2>
        </div>
        <div class="section-content">
            <span class="trait">Who am I</span>
        </div>
        <div class="hand">
            < p>
        </div>
        <p class="about-skills-text">
            My name is Alexandre, and I am a student following an unconventional path in a computer science program
            through a work-study arrangement. I am passionate about exploring innovative solutions in technology and
            have gained practical experience through various projects. I enjoy tackling new challenges and continuously
            learning about the latest advancements in the field.<br />

            When I'm not coding or brainstorming ideas, I keep active with sports like athletics, cycling, and
            swimming. These activities not only help me maintain a balanced lifestyle but also fuel my creativity and
            drive.
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
                    <li><a href="#">Teamwork</a></li>
                    <li><a href="#">Curious</a></li>
                    <li><a href="#">Passionate</a></li>
                    <li><a href="#">Athletics</a></li>
                    <li><a href="#">Cycling</a></li>
                    <li><a href="#">Cinema</a></li>
                    <li><a href="#">Reading</a></li>
                    <li><a href="#">Ponctual</a></li>
                    <li><a href="#">Attentive</a></li>
                    <li><a href="#">Autonomous</a></li>
                    <li><a href="#">Organization</a></li>
                </ul>
            </canvas>
        </div>
    </div>

</section>

<script type="text/javascript">
    window.onload = function () {
        try {
            TagCanvas.textColour = '#08FDD8';
            TagCanvas.outlineColour = '#FF0B56';
            TagCanvas.textHeight = 24;
            TagCanvas.Start('myCanvas');
        } catch (e) {
            // something went wrong, hide the canvas container
            document.getElementById('myCanvasContainer').style.display = 'none';
        }
    };
</script>