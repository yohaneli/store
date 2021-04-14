<title>Connexion / Inscription The Shop</title>	

<body data-plugin-page-transition>

<div class="body">

    <div role="main" class="main shop py-4">

        <div class="container py-4">

            <div class="row justify-content-center">
                <div class="col-md-6 col-lg-5 mb-5 mb-lg-0">
                    <h2 class="font-weight-bold text-5 mb-0">Se connecter</h2>
                    <?php if(session()->getFlashdata('msg')):?>
                    <div class="alert alert-danger"><?= session()->getFlashdata('msg') ?></div>
                <?php endif;?>
                    <form action="/login/auth" id="frmSignIn" method="post" class="needs-validation">
                        <div class="form-row">
                            <div class="form-group col">
                                <label class="text-color-dark text-3">Adresse email <span class="text-color-danger">*</span></label>
                                <input type="email" name="email" value="<?= set_value('email') ?>" class="form-control form-control-lg text-4" required>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col">
                                <label class="text-color-dark text-3">Mot de passe <span class="text-color-danger">*</span></label>
                                <input type="password" name="password" value="" class="form-control form-control-lg text-4" required>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col">
                                <button type="submit" class="btn btn-dark btn-modern btn-block text-uppercase rounded-0 font-weight-bold text-3 py-3" data-loading-text="Loading...">Login</button>

                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-md-6 col-lg-5">
                    <h2 class="font-weight-bold text-5 mb-0">S'incrire</h2>
                    <?php if(isset($validation)):?>
                    <div class="alert alert-danger"><?= $validation->listErrors() ?></div>
                <?php endif;?>
                    <form action="/register/save" id="frmSignUp" method="post">
                        <div class="form-row">
                            <div class="form-group col">
                                <label class="text-color-dark text-3">Adresse email <span class="text-color-danger">*</span></label>
                                <input type="email" name="email" value="<?= set_value('email') ?>" class="form-control form-control-lg text-4" required>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col">
                                <label class="text-color-dark text-3">Mot de passe <span class="text-color-danger">*</span></label>
                                <input type="password" name="password" value="" class="form-control form-control-lg text-4" required>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col">
                                <p class="text-2 mb-2">Vos données personnelles seront utilisées pour aider vôtre expérience sur The Shop, pour gérer les modalités d'accès à vôtre compte, ou toute autre informations voici nos <a href="#" class="text-decoration-none">Conditions générales de vente et de gestion de données personnelles.</a></p>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col">
                                <button type="submit" class="btn btn-dark btn-modern btn-block text-uppercase rounded-0 font-weight-bold text-3 py-3" data-loading-text="Loading...">S'inscrire</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

        </div>

    </div>
