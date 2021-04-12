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

														<li class="dropdown">
															<a class="dropdown-item dropdown-toggle" href="index.html">
																Catégories
															</a>
															<ul class="dropdown-menu">

																<?php if(isset($tabCategories)) {
																
																		foreach ($tabCategories as $tabCategorie) {
																?>


																<li>
																	<a class="dropdown-item" href="index.html">
																		<?php echo $tabCategorie['category_name'] ; ?>
																	</a>
																</li>

																<?php }} ?>
																
															</ul>
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

                    <?php 
                    
                    $categorie = $categoriesModel->where('category_id',$produit['category_id'])->first();

                    $sousCategorie = $sousCategoriesModel->where('sous_categorie_id',$produit['sous_categorie_id'])->first();

                    ?>

			<div role="main" class="main shop pt-4">

				<div class="container">

					<div class="row">
						<div class="col">
							<ul class="breadcrumb breadcrumb-style-2 d-block text-4 mb-4">
								<li><a href="<?php echo base_url('home') ;?>" class="text-color-default text-color-hover-primary text-decoration-none">Accueil</a></li>
								<li><?php echo $categorie['category_name'] ; ?></li>
								<li><?php echo $sousCategorie['sous_categorie_name'] ; ?></li>
							</ul>
						</div>
					</div>
					<div class="row">
						<div class="col-md-5 mb-5 mb-md-0">



						</div>

						<div class="col-md-7">

							<div class="summary entry-summary position-relative">

								<div class="position-absolute top-0 right-0">
									<div class="products-navigation d-flex">
										<a href="#" class="prev text-decoration-none text-color-dark text-color-hover-primary border-color-hover-primary" data-tooltip data-original-title="Red Ladies Handbag"><i class="fas fa-chevron-left"></i></a>
										<a href="#" class="next text-decoration-none text-color-dark text-color-hover-primary border-color-hover-primary" data-tooltip data-original-title="Green Ladies Handbag"><i class="fas fa-chevron-right"></i></a>
									</div>
								</div>

								<h1 class="mb-0 font-weight-bold text-7"><?php echo $produit['product_name'] ; ?></h1>

								<div class="pb-0 clearfix d-flex align-items-center">
									<div title="Rated 3 out of 5" class="float-left">
										<input type="text" class="d-none" value="3" title="" data-plugin-star-rating data-plugin-options="{'displayOnly': true, 'color': 'primary', 'size':'xs'}">
									</div>

								</div>

								<div class="divider divider-small">
									<hr class="bg-color-grey-scale-4">
								</div>

								<p class="price mb-3">
									<span class="sale text-color-dark"><?php echo $produit['price'] ; ?>€</span>
								</p>

								<p class="text-3-5 mb-3">

                                        <?php 

                                            if (!empty($produit['product_desc'])) {

                                                echo $produit['product_desc'] ; 
                                            
                                            } else { 
                                                
                                                echo $produit['product_name'] ;

                                            }
                                        ?>
                                </p>

								<ul class="list list-unstyled text-2">
									<li class="mb-0">Disponibilité : <strong class="text-color-dark">

                                            <?php if ($produit['product_name']==0) { 
                                                
                                                    echo "Disponible" ;
                                                    
                                                    } else {
                                                        
                                                    echo "Indisponible" ;
                                                    
                                                    } 
                                                    
                                            ?>
                                    </strong>
                                    </li>
								</ul>


								<form enctype="multipart/form-data" method="post" class="cart" action="shop-cart.html">
								
									<hr>
									
									<button type="submit" class="btn btn-dark btn-modern text-uppercase bg-color-hover-primary border-color-hover-primary">Add to cart</button>
									<hr>
								</form>

							</div>

						</div>
					</div>

					<hr class="my-5">
					
				</div>

			</div>