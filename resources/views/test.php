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
         <!-- On ajoute ensuite text-center pour le comportement des éléments s'affichant lors du déploiement du menu burger -->
         <!-- https://getbootstrap.com/docs/4.3/utilities/text/#text-alignment -->
         <!-- Ici on ajoute la classe justify-content-md-end pour aligner les éléments de menu sur la droite -->
        <div class="collapse navbar-collapse justify-content-md-end text-center" id="navbarNavAltMarkup">
            <div class="navbar-nav">
            <a class="nav-item nav-link active" href="#">Teamback <span class="sr-only">(current)</span></a>
            <a class="nav-item nav-link" href="#">Teamfront</a>
            <a class="nav-item nav-link" href="#">Collaboration</a>
            <a class="nav-item nav-link" href="#">Ma vie de dev</a>
            <!--<a class="nav-item nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>-->
            </div>
        </div>
    </nav>


       
    </header>
    <main>

    </main>
    <footer>

    </footer>
</body>
</html>

<!-- < ?= view('layout.footer'); ?> -->
