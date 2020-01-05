<!-- < ?= view('layout.header'); ?> -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- <meta http-equiv="X-UA-Compatible" content="ie=edge"> -->
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

     <!-- Bonus : on inclut une librairie CSS permettant d'afficher des icônes :  -->
     <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href='../public/css/style.css'>
    <title>Julie Allix - Portfolio</title>
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-md navbar-light bg-light">
            <a class="navbar-brand" href="https://github.com/JulieAllix">Julie Allix</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-md-end text-center" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-item nav-link active" href="#">Projects <span class="sr-only">(current)</span></a>
                    <a class="nav-item nav-link" href="#">About</a>
                    <a class="nav-item nav-link" href="#">My training : O'clock</a>
                    <a class="nav-item nav-link" href="#">Contact</a>
                </div>
            </div>
        </nav>
    </header>

    <main>
        <div class="container-fluid" id="projects-container">
            <div class="row">
                <div class="projects col-xl-4 col-lg-12">
                Study cards
                </div>
                <div class="projects col-xl-4 col-lg-12">
                Break Free : my first game in Js
                </div>
                <div class="projects col-xl-4 col-lg-12">
                This Portfolio
                </div>
            </div>
        </div>
    </main>


<!-- < ?= view('layout.footer'); ?> -->

<footer>
    <ul class="nav">
        <li class="nav-item">
            <a class="nav-link" href="https://github.com/JulieAllix">Github</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="https://linkedin.com/in/julie-allix-391a7431">LinkedIn</a>
        </li>
    </ul>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </footer>
  </body>
</html>