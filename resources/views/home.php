<?= view('layout.header'); ?>

    <div class="container-fluid" id="projects-container">
        <div class="row">
            <div class="projects col-xl-4 col-lg-12" id="study-cards">
            <a href="<?= route('study-cards'); ?>">Study cards</a>
            </div>
            <div class="projects col-xl-4 col-lg-12" id="break-free">
            <a href="<?= route('break-free'); ?>">Break Free : my first game in Js</a>
            </div>
            <div class="projects col-xl-4 col-lg-12" id="portfolio">
            <a href="<?= route('home'); ?>">This Portfolio</a>
            </div>
        </div>
    </div>

<?= view('layout.footer'); ?>
