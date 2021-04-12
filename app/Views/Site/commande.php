<?php //dd($tabCommandes); ?>

<title>Commande</title>

<header id="header" data-plugin-options="{'stickyEnabled': true, 'stickyEnableOnBoxed': true, 'stickyEnableOnMobile': true, 'stickyStartAt': 135, 'stickySetTop': '-135px', 'stickyChangeLogo': true}">
				<div class="header-body header-body-bottom-border-fixed box-shadow-none border-top-0">
					<div class="header-top header-top-small-minheight header-top-simple-border-bottom">
						<div class="container">
							<div class="header-row justify-content-between">
								<div class="header-column justify-content-end col-auto px-0">
									<div class="header-row">
										
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="header-container container">
						<div class="header-row py-2">
							<div class="header-column w-100">
								<div class="header-row justify-content-between">
									<div class="header-logo z-index-2 col-lg-2 px-0">
										<a href="index.html">
											<img alt="Porto" width="100" height="48" data-sticky-width="82" data-sticky-height="40" data-sticky-top="84" src="<?php echo base_url('images/baseimages/logo-default-slim.png') ; ?>">
										</a>
									</div>
									<div class="d-flex col-auto col-lg-2 pr-0 pl-0 pl-xl-3">
										<ul class="header-extra-info">
											<li class="ml-0 ml-xl-4">
												<div class="header-extra-info-icon">
													<a href="#" class="text-decoration-none text-color-dark text-color-hover-primary text-2">
														<i class="icons icon-user"></i>
													</a>
												</div>
											</li>
										</ul>
										
										
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

                                                <?php } ?>

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

            <div role="main" class="main shop pb-4">

<div class="container">

    <div class="row justify-content-center">
        <div class="col-lg-8">
            <ul class="breadcrumb breadcrumb-dividers-no-opacity font-weight-bold text-6 justify-content-center my-5">
                <li class="text-transform-none mr-2">
                    <a href="#" class="text-decoration-none text-color-dark text-color-hover-primary">Panier</a>
                </li>
               
                <li class="text-transform-none text-color-dark">
                    <a href="shop-order-complete.html" class="text-decoration-none text-color-primary">Validation de la commande</a>
                </li>
            </ul>
        </div>
    </div>

    <div class="row justify-content-center">
        <div class="col-lg-8">
            <div class="card border-width-3 border-radius-0 border-color-success">
                <div class="card-body text-center">
                    <p class="text-color-dark font-weight-bold text-4-5 mb-0"><i class="fas fa-check text-color-success mr-1"></i> Merci. Votre commande a été validée.</p>
                </div>
            </div>
            <div class="d-flex flex-column flex-md-row justify-content-between py-3 px-4 my-4">
                <div class="text-center">
                    <span>
                        ID Commande <br>
                        <strong class="text-color-dark">31891</strong>
                    </span>
                </div>
                <div class="text-center mt-4 mt-md-0">
                    <span>
                        Date <br>
                        <strong class="text-color-dark"> 17 Juin 2020</strong>
                    </span>
                </div>
                <div class="text-center mt-4 mt-md-0">
                    <span>
                        Adresse mail <br>
                        <strong class="text-color-dark">abc@abc.com</strong>
                    </span>
                </div>
                <div class="text-center mt-4 mt-md-0">
                    <span>
                        Total <br>
                        <strong class="text-color-dark">15€</strong>
                    </span>
                </div>
                <div class="text-center mt-4 mt-md-0">
                    <span>
                        Méthode de Paiement<br>
                        <strong class="text-color-dark">Paypal</strong>
                    </span>
                </div>
            </div>
            <div class="card border-width-3 border-radius-0 border-color-hover-dark mb-4">
                <div class="card-body">
                    <h4 class="font-weight-bold text-uppercase text-4 mb-3">Votre commande</h4>
                    <table class="shop_table cart-totals mb-0">
                        <tbody>
                            <tr>
                                <td colspan="2" class="border-top-0">
                                    <strong class="text-color-dark">Produit</strong>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <strong class="d-block text-color-dark line-height-1 font-weight-semibold">Black Porto Smartwatch <span class="product-qty">x1</span></strong>
                                    <span class="text-1">COLOR BLACK</span>
                                </td>
                                <td class="text-right align-top">
                                    <span class="amount font-weight-medium text-color-grey">15€</span>
                                </td>
                            </tr>

                            
                            <tr class="total">
                                <td>
                                    <strong class="text-color-dark text-3-5">Total</strong>
                                </td>
                                <td class="text-right">
                                    <strong class="text-color-dark"><span class="amount text-color-dark text-5">15€</span></strong>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="row pt-3">
                <div class="col-lg-6 mb-4 mb-lg-0">
                    <h2 class="text-color-dark font-weight-bold text-5-5 mb-1">Billing Address</h2>
                    <ul class="list list-unstyled text-2 mb-0">
                        <li class="mb-0">John Doe Junior</li>
                        <li class="mb-0">Street Name, City</li>
                        <li class="mb-0">State AL 85001</li>
                        <li class="mb-0">123 456 7890</li>
                        <li class="mt-3 mb-0">abc@abc.com</li>
                    </ul>
                </div>
                <div class="col-lg-6">
                    <h2 class="text-color-dark font-weight-bold text-5-5 mb-1">Shipping Address</h2>
                    <ul class="list list-unstyled text-2 mb-0">
                        <li class="mb-0">John Doe Junior</li>
                        <li class="mb-0">Street Name, City</li>
                        <li class="mb-0">State AL 85001</li>
                        <li class="mb-0">123 456 7890</li>
                        <li class="mt-3 mb-0">abc@abc.com</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

</div>

</div>