<?= view('layout.header'); ?>

<div class="wrapper">

    <section id="picture-break-free">
    </section>

    <section class="description-project">
        <div class="presentation-text-wrapper">

            <h1 class="presentation-title-oclock">Break Free</h1>
                <div class="project-info-line">
                    <div class="project-info-box">
                        <h2 class="presentation-subtitle">About</h2>
                        <p>I started this project because I was curious about basic videogames design. I first followed <a href='https://developer.mozilla.org/en-US/docs/Games/Tutorials/2D_Breakout_game_pure_JavaScript'>this mozilla tutorial</a>. Then I adapted the code to organize it differently, created variables enabling to design different levels quickly. And I added new functionalities : an input request to get the name of the player, 4 levels of difficulty, a connection to a database to send the score of the player and to display the top 20 scores for each level.</p>
                    </div>
                    <div class="project-info-box">
                        <h2 class="presentation-subtitle">Timing</h2>
                        <p>This is my second personal project. I worked on it during the month of November 2019.</p>
                    </div>
                </div>
                <div class="project-info-line">
                    <div class="project-info-box">
                        <h2 class="presentation-subtitle">Concepts used</h2>
                            <ul>
                                <li>JavaScript</li>
                                <li>Cookies</li>
                                <li>SQL - Databases</li>
                            </ul>
                    </div>
                    <div class="project-info-box">
                    <h2 class="presentation-subtitle">New concepts discovered</h2>
                            <ul>
                                <li>Canvas</li>
                                <li>2D animation</li>
                            </ul>
                    </div>
                </div>
                <div class="project-info-line">
                    <div class="project-info-box">
                        <button class="link-button project-button" onclick="window.location.href = '';">See the project</button>
                    </div>                    
                    <div class="project-info-box">
                        <button class="link-button project-button" onclick="window.location.href = '';">Access to the repository</button>
                    </div>
                </div>

        </div>

    </section>

</div>

<?= view('layout.footer'); ?>