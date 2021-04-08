<title>Connexion / Inscription The Shop</title>	

<body data-plugin-page-transition>

<div class="body">
    <div class="notice-top-bar bg-primary" data-sticky-start-at="180">
        <button class="hamburguer-btn hamburguer-btn-light notice-top-bar-close m-0 active" data-set-active="false">
            <span class="close">
                <span></span>
                <span></span>
            </span>
        </button>
    </div>
    <header id="header" data-plugin-options="{'stickyEnabled': true, 'stickyEnableOnBoxed': true, 'stickyEnableOnMobile': true, 'stickyStartAt': 135, 'stickySetTop': '-135px', 'stickyChangeLogo': true}">
        <div class="header-body header-body-bottom-border-fixed box-shadow-none border-top-0">
            <div class="header-container container">
                <div class="header-row py-2">
                    <div class="header-column w-100">
                        <div class="header-row justify-content-between">
                            <div class="header-logo z-index-2 col-lg-2 px-0">
                                <a href="index.html">
                                    <img alt="Porto" width="100" height="48" data-sticky-width="82" data-sticky-height="40" data-sticky-top="84" src="<?php echo base_url('images/baseimages/logo-default-slim.png') ;?>">
                                </a>
                            </div>
                            
                            <div class="d-flex col-auto col-lg-2 pr-0 pl-0 pl-xl-3">
                                <ul class="header-extra-info">
                                    <li class="ml-0 ml-xl-4">
                                        <div class="header-extra-info-icon">
                                            <a href="<?php echo base_url('moncompte') ;?>" class="text-decoration-none text-color-dark text-color-hover-primary text-2">
                                                <i class="icons icon-user"></i>
                                            </a>
                                        </div>
                                    </li>
                                </ul>
                                <div class="header-nav-features pl-0 ml-1">
                                    <div class="header-nav-feature header-nav-features-cart header-nav-features-cart-big d-inline-flex top-2 ml-2">
                                        <a href="#" class="header-nav-features-toggle">
                                        <img src="<?php echo base_url('images/baseimages/icons/icon-cart-big.svg');?>" height="30" alt="" class="header-nav-top-icon-img">
                                            <span class="cart-info">
                                                <span class="cart-qty">1</span>
                                            </span>
                                        </a>
                                        <div class="header-nav-features-dropdown" id="headerTopCartDropdown">

                                            <div class="actions">
                                                <a class="btn btn-dark" href="<?php echo base_url('panier') ;?>">Panier</a>
                                                <a class="btn btn-primary" href="#">Payer</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="header-column justify-content-end">
                        <div class="header-row">


                        </div>
                    </div>
                </div>
            </div>
            <div class="header-nav-bar header-nav-bar-top-border bg-light">
                <div class="header-container container">
                    <div class="header-row">
                        <div class="header-column">
                            <div class="header-row justify-content-end">
                                <div class="header-nav header-nav-line header-nav-top-line header-nav-top-line-with-border justify-content-start" data-sticky-header-style="{'minResolution': 991}" data-sticky-header-style-active="{'margin-left': '105px'}" data-sticky-header-style-deactive="{'margin-left': '0'}">
                                    <div class="header-nav-main header-nav-main-square header-nav-main-dropdown-no-borders header-nav-main-effect-3 header-nav-main-sub-effect-1 w-100">
                                        <nav class="collapse w-100">
                                            <ul class="nav nav-pills w-100" id="mainNav">

                                                <li class="dropdown">
                                                    <a class="dropdown-item dropdown-toggle" href="<?php echo base_url('home') ;?>">
                                                        Accueil
                                                    </a>
                                                </li>

                                                <?php  
                                                
                                                $userId = session()->get('user_id');

                                                    if (empty($userId)) {
                                                
                                                ?>


                                                <li class="dropdown">
                                                    <a class="dropdown-item dropdown-toggle" href="<?php echo base_url('login') ;?>">
                                                        Connexion
                                                    </a>
                                                </li>

                                                <li class="dropdown">
                                                    <a class="dropdown-item dropdown-toggle" href="<?php echo base_url('login') ;?>">
                                                        Inscription
                                                    </a>
                                                </li>

                                                <?php } else { ?>

                                                <li class="dropdown">
                                                    <a class="dropdown-item dropdown-toggle" href="<?php echo base_url('moncompte') ;?>">
                                                        Mon compte
                                                    </a>
                                                </li>

                                                <li class="dropdown">
                                                    <a class="dropdown-item dropdown-toggle" href="<?php echo base_url('login/logout') ;?>">
                                                        Déconnexion
                                                    </a>
                                                </li>

                                                <?php } ?>

                                            </ul>
                                        </nav>
                                    </div>
                                    <button class="btn header-btn-collapse-nav" data-toggle="collapse" data-target=".header-nav-main nav">
                                        <i class="fas fa-bars"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

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
