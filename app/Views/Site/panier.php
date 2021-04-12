<title>Mon Panier</title>

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

					<div class="row">
						<div class="col">
							<ul class="breadcrumb font-weight-bold text-6 justify-content-center my-5">
								<li class="text-transform-none mr-2">
									<a href="<?php echo base_url('panier') ;?>" class="text-decoration-none text-color-primary">Panier</a>
								</li>
								
								<li class="text-transform-none text-color-grey-lighten">
									<a href="<?php echo base_url('commande') ;?>" class="text-decoration-none text-color-grey-lighten text-color-hover-primary">Validation de la commande</a>
								</li>
							</ul>
						</div>
					</div>
					<div class="row pb-4 mb-5">
						<div class="col-lg-8 mb-5 mb-lg-0">
							<form method="post" action="">
								<div class="table-responsive">
									<table class="shop_table cart">
										<thead>
											<tr class="text-color-dark">
												<th class="product-thumbnail" width="15%">
													&nbsp;
												</th>
												<th class="product-name text-uppercase" width="30%">
													Produit
												</th>
												<th class="product-price text-uppercase" width="15%">
													Prix
												</th>
												
											</tr>
										</thead>
										<tbody>
                                                        <?php 

                                                        $total = 0;

                                                        if (isset($tabPaniers)) { 

                                                        ?>

                                                            <?php foreach($tabPaniers as $panier) { 
                                                            
                                                            $produit = $productsModel->where("product_id",$panier['product_id'])->first();                                                         

                                                            $total += $produit['price'] ;
                                                                
                                                            ?>


											<tr class="cart_table_item">
												<td class="product-thumbnail">
													<div class="product-thumbnail-wrapper">
														<a href="#" class="product-thumbnail-remove" title="Remove Product">
														</a>
														<a href="shop-product-sidebar-right.html" class="product-thumbnail-image" title="Photo Camera">
															<img width="90" height="90" alt="" class="img-fluid" src="/images-admin/baseimages/default.png">
														</a>
													</div>
												</td>
												<td class="product-name">
													<a href="shop-product-sidebar-right.html" class="font-weight-semi-bold text-color-dark text-color-hover-primary text-decoration-none"><?php echo $produit['product_name'] ; ?></a>
												</td>
												<td class="product-price">
													<span class="amount font-weight-medium text-color-grey"><?php echo $produit['price'] ; ?>€</span>
												</td>
												
											</tr>
                                                            <?php } ?>

                                                        <?php } ?>
											
										</tbody>
									</table>
								</div>
							</form>
						</div>
						<div class="col-lg-4">
							<div class="card border-width-3 border-radius-0 border-color-hover-dark" data-plugin-sticky data-plugin-options="{'minWidth': 991, 'containerSelector': '.row', 'padding': {'top': 85}}">
								<div class="card-body">
									<h4 class="font-weight-bold text-uppercase text-4 mb-3">Total Panier</h4>
									<table class="shop_table cart-totals mb-4">
										<tbody>
											
											<tr class="total">
												<td>
													<strong class="text-color-dark text-3-5">Total</strong>
												</td>
												<td class="text-right">
													<strong class="text-color-dark"><span class="amount text-color-dark text-5"><?php echo $total ?>€</span></strong>
												</td>
											</tr>
										</tbody>
									</table>
									<a href="<?php echo base_url('commande/createCommande') ;?>" class="btn btn-dark btn-modern btn-block text-uppercase bg-color-hover-primary border-color-hover-primary border-radius-0 text-3 py-3">Valider le panier</a>
								</div>
							</div>
						</div>
					</div>
					
				</div>

			</div>