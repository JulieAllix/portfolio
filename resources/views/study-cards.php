<?= view('layout.header'); ?>

<div class="wrapper">

    <section class="description-project">
        <div class="presentation-text-wrapper">

            <h1 class="presentation-title-oclock">Study cards</h1>
                <div class="project-info-line">
                    <div class="project-info-box">
                        <h2 class="presentation-subtitle">About</h2>
                        <p>The aim of this project was to help me learning the basics of html and css by mixing theory and practice. Those are study cards where I can find useful tips I learned in class (theory) in the shape of a website (practice).</p>
                        <p>I added a toggle switch giving the opportunity to the user to choose between two themes.</p>
                    </div>
                    <div class="project-info-box">
                        <h2 class="presentation-subtitle">Timing</h2>
                        <p>This was my first personal project. I worked on it during the very first weeks of my training (October 2019), and progressively updated it with the new knowledge I acquired.</p>
                    </div>
                </div>
                <div class="project-info-line">
                    <div class="project-info-box">
                        <h2 class="presentation-subtitle">Concepts used</h2>
                            <ul>
                                <li>Html</li>
                                <li>CSS</li>
                                <li>Flexbox</li>
                            </ul>
                    </div>
                    <div class="project-info-box">
                    <h2 class="presentation-subtitle">New concepts discovered</h2>
                            <ul>
                                <li>CSS variables</li>
                                <li>Theme switch</li>
                                <li>Toggle switch</li>
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

    <section id="picture-study-cards">
    </section>

</div>

<?= view('layout.footer'); ?>
