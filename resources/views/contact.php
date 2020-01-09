<?= view('layout.header', ['title' => $title]); ?>

<div class="wrapper">
    <section id="picture-JA-contact">

    </section>
    <section id="presentation-JA">
        <div class="presentation-text-wrapper">
            <h1 class="presentation-title-JA">Contact</h1>
                <article class="presentation-text">
                    <ul>
                        <li>allixjulie@gmail.com</li>
                        <li><a href='https://www.linkedin.com/in/julie-allix-391a7431/'>LinkedIn</a></li>
                    </ul>

                    <div class="contact-form">
                        <form method="post" action="">
                            <div class="form-group">
                                <?php $nameHasErrors = isset($errors) && ! empty($errors['name']);?>
                                <label for="exampleInputPassword1">Nom</label>
                                <input name="name" type="name" class="form-control<?= ($nameHasErrors ? ' is-invalid' : ''); ?>" 
                                required
                                    <?php if (! empty($formData['name'])) : ?>
                                    value="<?= $formData['name']; ?>"
                                    <?php endif; ?>
                                >
                                <?php if ($nameHasErrors) :?>
                                    <div class="invalid-feedback">
                                    <?php foreach ($errors['name'] as $errorMessage) :?>
                                        <p><?= $errorMessage; ?></p>
                                    <?php endforeach;?>
                                    </div>
                                <?php endif;?>
                            </div>
                            <div class="form-group">
                            <?php $firstNameHasErrors = isset($errors) && ! empty($errors['first-name']);?>
                                <label for="exampleInputPassword1">Prénom</label>
                                <input name="first-name" type="name" class="form-control<?= ($firstNameHasErrors ? ' is-invalid' : ''); ?>" 
                                required
                                    <?php if (! empty($formData['first-name'])) : ?>
                                    value="<?= $formData['first-name']; ?>"
                                    <?php endif; ?>
                                >
                                <?php if ($firstNameHasErrors) :?>
                                    <div class="invalid-feedback">
                                    <?php foreach ($errors['first-name'] as $errorMessage) :?>
                                        <p><?= $errorMessage; ?></p>
                                    <?php endforeach;?>
                                    </div>
                                <?php endif;?>
                            </div>
                            <div class="form-group">
                            <?php $emailHasErrors = isset($errors) && ! empty($errors['email']);?>
                                <label for="email">E-mail</label>
                                <input name="email" type="email" id="email" placeholder="name@example.com" pattern="[^@\s]+@[^@\s]+\.[^@\s]+" class="form-control<?= ($emailHasErrors ? ' is-invalid' : ''); ?>" 
                                required
                                    <?php if (! empty($formData['email'])) : ?>
                                    value="<?= $formData['email']; ?>"
                                    <?php endif; ?>
                                >
                                <?php if ($emailHasErrors) :?>
                                    <div class="invalid-feedback">
                                    <?php foreach ($errors['email'] as $errorMessage) :?>
                                        <p><?= $errorMessage; ?></p>
                                    <?php endforeach;?>
                                    </div>
                                <?php endif;?>
                            </div>
                            <div class="form-group">
                            <?php $passwordHasErrors = isset($errors) && ! empty($errors['password']);?>
                                <label for="password">Message</label>
                                <input name="password" id="password" type="password" id="password" class="form-control<?= ($passwordHasErrors ? ' is-invalid' : ''); ?>" 
                                required
                                    <?php if (! empty($formData['password'])) : ?>
                                    value="<?= $formData['password']; ?>"
                                    <?php endif; ?>
                                >
                                <?php if ($passwordHasErrors) :?>
                                    <div class="invalid-feedback">
                                    <?php foreach ($errors['password'] as $errorMessage) :?>
                                        <p><?= $errorMessage; ?></p>
                                    <?php endforeach;?>
                                    </div>
                                <?php endif;?>
                            </div>


                            <button type="submit" class="btn btn-primary">Envoyer</button>
                        </form>
                    </div>

                </article>
            <div>
    </section>
</div>

<?= view('layout.footer'); ?>