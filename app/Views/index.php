<title>Accueil The Shop</title>	

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


														<li class="dropdown">
															<a class="dropdown-item dropdown-toggle" href="<?php echo base_url('admin/adminhome') ;?>">
																Admin
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

			<div role="main" class="main shop pt-4">

				<div class="container">

					<div class="masonry-loader masonry-loader-showing">
						<div class="row products product-thumb-info-list" data-plugin-masonry data-plugin-options="{'layoutMode': 'fitRows'}">
						

							<div class="col-12 col-sm-6 col-lg-3">
						
							<?php if (isset($tabProducts)) {  ?>

								<?php  foreach ($tabProducts as $tabProduct) {  

									$categories = $categoriesModel->where('category_id',$tabProduct['category_id'])->first();

									$sousCategories = $sousCategoriesModel->where('sous_categorie_id',$tabProduct['sous_categorie_id'])->first();

								?>       
								<div class="product mb-0">
									<div class="product-thumb-info border-0 mb-3">

										<div class="product-thumb-info-badges-wrapper">

										</div>

										<div class="addtocart-btn-wrapper">
											<a href="shop-cart.html" class="text-decoration-none addtocart-btn" data-tooltip data-original-title="Add to Cart">
												<i class="icons icon-bag"></i>
											</a>
										</div>

										<a href="shop-product-sidebar-left.html">
											<div class="product-thumb-info-image">

											<?php if(empty($tabProduct['product_image'])) {?>

											<img src="/images-admin/baseimages/default.png">

											<?php } ?>

											</div>
										</a>
									</div>

									<div class="d-flex justify-content-between">
										<div>
											<a href="#" class="d-block text-uppercase text-decoration-none text-color-default text-color-hover-primary line-height-1 text-0 mb-1"><?php echo $categories['category_name'] ; ?></a>
											<h3 class="text-3-5 font-weight-medium font-alternative text-transform-none line-height-3 mb-0"><a href="shop-product-sidebar-right.html" class="text-color-dark text-color-hover-primary"><?php echo $tabProduct['product_name'] ; ?></a></h3>

									<p class="price text-5 mb-3">
										<span class="amount"><?php echo $tabProduct['price']." euros " ; ?></span>
									</p>

									<button type="submit">Ajouter au panier</button>
									

								</div>

							</div>

							
						</div>
						<?php } ?>
	
						<?php } ?>
						
					</div>

				</div>

			</div>
