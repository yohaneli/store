
<!DOCTYPE html>
<html>
	<head>

		<!-- Basic -->

		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">	

		<meta name="keywords" content="HTML5 Template" />
		<meta name="description" content="Porto - Responsive HTML5 Template">
		<meta name="author" content="okler.net">

		<!-- Favicon -->

		<link rel="shortcut icon" href="<?php echo base_url('images/baseimages/favicon.ico') ;?>" type="image/x-icon" />
		<link rel="apple-touch-icon" href="<?php echo base_url('images/baseimages/apple-touch-icon.png') ;?>">

		<!-- Mobile Metas -->
		<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, shrink-to-fit=no">

		<link id="googleFonts" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800%7CShadows+Into+Light%7CPlayfair+Display:400&display=swap" rel="stylesheet" type="text/css">

		<!-- Vendor CSS -->

		<link rel="stylesheet" type="text/css" href="<?php echo base_url('app-assets/vendor/bootstrap/css/bootstrap.min.css') ; ?>">
		<link rel="stylesheet" type="text/css" href="<?php echo base_url('app-assets/vendor/fontawesome-free/css/all.min.css') ; ?>">
		<link rel="stylesheet" type="text/css" href="<?php echo base_url('app-assets/vendor/animate/animate.compat.css') ; ?>">
		<link rel="stylesheet" type="text/css" href="<?php echo base_url('app-assets/vendor/simple-line-icons/css/simple-line-icons.min.css') ; ?>">
		<link rel="stylesheet" type="text/css" href="<?php echo base_url('app-assets/vendor/owl.carousel/assets/owl.carousel.min.css') ; ?>">
		<link rel="stylesheet" type="text/css" href="<?php echo base_url('app-assets/vendor/owl.carousel/assets/owl.theme.default.min.css') ; ?>">
		<link rel="stylesheet" type="text/css" href="<?php echo base_url('app-assets/vendor/magnific-popup/magnific-popup.min.css') ; ?>">
		<link rel="stylesheet" type="text/css" href="<?php echo base_url('app-assets/vendor/bootstrap-star-rating/css/star-rating.min.css') ; ?>">
		<link rel="stylesheet" type="text/css" href="<?php echo base_url('app-assets/vendor/bootstrap-star-rating/themes/krajee-fas/theme.min.css') ; ?>">

		<!-- Theme CSS -->

		<link rel="stylesheet" type="text/css" href="<?php echo base_url('app-assets/css/theme.css') ; ?>">
		<link rel="stylesheet" type="text/css" href="<?php echo base_url('app-assets/css/theme-elements.css') ; ?>">
		<link rel="stylesheet" type="text/css" href="<?php echo base_url('app-assets/css/theme-blog.css') ; ?>">
		<link rel="stylesheet" type="text/css" href="<?php echo base_url('app-assets/css/theme-shop.css') ; ?>">

		<!-- Skin CSS -->

		<link id="skinCSS" rel="stylesheet" type="text/css" href="<?php echo base_url('app-assets/css/skins/default.css') ; ?>">

		<!-- Theme Custom CSS -->

		<link rel="stylesheet" type="text/css" href="<?php echo base_url('app-assets/css/custom.css') ; ?>">

		<!-- Head Libs -->
		
		<script src="<?php echo base_url('app-assets/vendor/modernizr/modernizr.min.js') ;?>"></script>

	</head>

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


