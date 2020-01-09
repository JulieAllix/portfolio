<?= view('layout.header', ['title' => 'Home']); ?>

    <div class="container-fluid" id="projects-container">
        <div class="row">
            <div class="projects col-xl-4 col-lg-12" id="study-cards">
            <a class="project-link" href="<?= route('study-cards'); ?>">Study cards</a>
            </div>
            <div class="projects col-xl-4 col-lg-12" id="break-free">
            <a class="project-link" href="<?= route('break-free'); ?>">Break Free : my first game in Js</a>
            </div>
            <div class="projects col-xl-4 col-lg-12" id="portfolio">
            <a class="project-link" href="<?= route('portfolio'); ?>">This Portfolio</a>
            </div>
        </div>
    </div>

<?= view('layout.footer'); ?>
