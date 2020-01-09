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
     <link href="https://fonts.googleapis.com/css?family=Fugaz+One|Galada|Kaushan+Script|Kulim+Park|Lobster|Open+Sans|Oswald|Public+Sans|Righteous&display=swap" rel="stylesheet">
    <link rel="stylesheet" href='../public/css/style.css'>
    <title>Julie Allix - <?= $title ?></title>
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-md navbar-light bg-light">
            <a class="navbar-brand" id="my-name" href="<?= route('home'); ?>">Julie Allix</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-md-end text-center" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <li class="nav-item dropdown">
                        <a id="projects-button" class="nav-item nav-link dropdown-toggle active" href="" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Projects <span class="sr-only">(current)</a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="<?= route('study-cards'); ?>">Study cards</a>
                            <a class="dropdown-item" href="<?= route('break-free'); ?>">Break Free</a>
                            <a class="dropdown-item" href="<?= route('portfolio'); ?>">Portfolio</a>
                        </div>
                    </li>
                        <a class="nav-item nav-link" href="<?= route('home'); ?>">Home</a>
                        <a class="nav-item nav-link" href="<?= route('about'); ?>">About</a>
                        <a class="nav-item nav-link" href="<?= route('training'); ?>">My training : O'clock</a>
                        <a class="nav-item nav-link" href="">Contact</a>

                        <!--
                    <li class="nav-item dropleft">
                        <a id="projects-button" class="nav-item nav-link dropdown-toggle" href="" id="navbarDropleft" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Contact</a>
                        <div id="contact-form" class="dropdown-menu" aria-labelledby="navbarDropleft">
                            <form class="px-4 py-3" method="post" action="">
                            <div class="form-group">
                                < ?php $nameHasErrors = isset($errors) && ! empty($errors['name']);?>
                                <label for="exampleInputPassword1">Name</label>
                                <input name="name" type="name" class="form-control< ?= ($nameHasErrors ? ' is-invalid' : ''); ?>" 
                                required
                                    < ?php if (! empty($formData['name'])) : ?>
                                    value="< ?= $formData['name']; ?>"
                                    < ?php endif; ?>
                                >
                                < ?php if ($nameHasErrors) :?>
                                    <div class="invalid-feedback">
                                    < ?php foreach ($errors['name'] as $errorMessage) :?>
                                        <p>< ?= $errorMessage; ?></p>
                                    < ?php endforeach;?>
                                    </div>
                                < ?php endif;?>
                            </div>
                            <div class="form-group">
                            < ?php $firstNameHasErrors = isset($errors) && ! empty($errors['first-name']);?>
                                <label for="exampleInputPassword1">First Name</label>
                                <input name="first-name" type="name" class="form-control< ?= ($firstNameHasErrors ? ' is-invalid' : ''); ?>" 
                                required
                                    < ?php if (! empty($formData['first-name'])) : ?>
                                    value="< ?= $formData['first-name']; ?>"
                                    < ?php endif; ?>
                                >
                                < ?php if ($firstNameHasErrors) :?>
                                    <div class="invalid-feedback">
                                    < ?php foreach ($errors['first-name'] as $errorMessage) :?>
                                        <p>< ?= $errorMessage; ?></p>
                                    < ?php endforeach;?>
                                    </div>
                                < ?php endif;?>
                            </div>
                                <div class="form-group">
                                <label for="exampleDropleftFormEmail1">Email address</label>
                                <input type="email" class="form-control" id="exampleDropleftFormEmail1" placeholder="email@example.com">
                                </div>
                                <div id="contact-message" class="form-group">
                                <label for="msg">Message:</label>
                                <textarea id="msg" name="user_message"></textarea>
                                </div>
                                <button type="submit" class="btn btn-primary">Send</button>
                            </form>
                            </div>
                        </div>
                    </li>
                                    -->
                        




                </div>
            </div>
        </nav>
    </header>
    <main>