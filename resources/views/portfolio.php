<?= view('layout.header', ['title' => $title]); ?>

<div class="wrapper">

    <section id="picture-?">
    </section>

    <section class="description-project">
        <div class="presentation-text-wrapper">

            <h1 class="presentation-title-oclock">Portfolio</h1>
                <div class="project-info-line">
                    <div class="project-info-box">
                        <h2 class="presentation-subtitle">About</h2>
                        <p>I started this project because I wanted to put all my personal projects online and gather them in one single place. The aim is to better communicate about them and give an overall idea of who I am and what I learned as a Web Developer.</p>
                    </div>
                    <div class="project-info-box">
                        <h2 class="presentation-subtitle">Timing</h2>
                        <p>This is my third personal project. I worked on it in January 2020.</p>
                    </div>
                </div>
                <div class="project-info-line">
                    <div class="project-info-box">
                        <h2 class="presentation-subtitle">Concepts used</h2>
                            <ul>
                                <li class="check-list"><i class="fas fa-check-circle"></i>Micro-framework : Lumen</li>
                                <li class="check-list"><i class="fas fa-check-circle"></i>Html</li>
                                <li class="check-list"><i class="fas fa-check-circle"></i>CSS</li>
                            </ul>
                    </div>
                    <div class="project-info-box">
                    <h2 class="presentation-subtitle">New concepts discovered</h2>
                            <ul>
                                <li class="check-list"><i class="fas fa-check-circle"></i>Sass</li>
                            </ul>
                    </div>
                </div>
                <div class="project-info-line">
                    <div class="project-info-box">
                        <button class="link-button project-button" onclick="window.location.href = '';">See the project</button>
                    </div>                    
                    <div class="project-info-box">
                        <button class="link-button project-button" onclick="window.location.href = 'https://github.com/JulieAllix/Portfolio';">Access to the repository</button>
                    </div>
                </div>

        </div>

    </section>

</div>

<?= view('layout.footer'); ?>