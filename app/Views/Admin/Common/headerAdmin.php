<!doctype html>
<html class="modern fixed has-top-menu has-left-sidebar-half" data-style-switcher-options="{'changeLogo': false}">
	<head>

		<!-- Basic -->

		<meta charset="UTF-8">

		<meta name="keywords" content="HTML5 Admin Template" />
		<meta name="description" content="Porto Admin - Responsive HTML5 Template">
		<meta name="author" content="okler.net">

		<!-- Mobile Metas -->

		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

		<!-- Web Fonts  -->
		
		<link href="https://fonts.googleapis.com/css?family=Poppins:100,300,400,600,700,800,900" rel="stylesheet" type="text/css">

		<!-- Vendor CSS -->
        
		<link rel="stylesheet"  href="<?php echo base_url('app-assets-admin/vendor/bootstrap/css/bootstrap.css') ; ?>">
		<link rel="stylesheet"  href="<?php echo base_url('app-assets-admin/vendor/bootstrap/css/bootstrap.min.css.map') ; ?>">
		<link rel="stylesheet"  href="<?php echo base_url('app-assets-admin/vendor/animate/animate.compat.css') ; ?>">
		<link rel="stylesheet"  href="<?php echo base_url('app-assets-admin/vendor/font-awesome/css/all.min.css') ; ?>" />
		<link rel="stylesheet"  href="<?php echo base_url('app-assets-admin/vendor/boxicons/css/boxicons.min.css') ; ?>" />
		<link rel="stylesheet"  href="<?php echo base_url('app-assets-admin/vendor/magnific-popup/magnific-popup.css') ; ?>" />
		<link rel="stylesheet"  href="<?php echo base_url('app-assets-admin/vendor/bootstrap-datepicker/css/bootstrap-datepicker3.css') ; ?>" />

		<!-- Specific Page Vendor CSS -->

		<link rel="stylesheet"  href="<?php echo base_url('app-assets-admin/vendor/jquery-ui/jquery-ui.css') ; ?>" />
		<link rel="stylesheet"  href="<?php echo base_url('app-assets-admin/vendor/jquery-ui/jquery-ui.theme.css') ; ?>" />
		<link rel="stylesheet"  href="<?php echo base_url('app-assets-admin/vendor/select2/css/select2.css') ; ?>" />
		<link rel="stylesheet"  href="<?php echo base_url('app-assets-admin/vendor/select2-bootstrap-theme/select2-bootstrap.min.css') ; ?>" />
		<link rel="stylesheet"  href="<?php echo base_url('app-assets-admin/vendor/dropzone/basic.css') ; ?>" />
		<link rel="stylesheet"  href="<?php echo base_url('app-assets-admin/vendor/dropzone/dropzone.css') ; ?>" />
		<link rel="stylesheet"  href="<?php echo base_url('app-assets-admin/vendor/bootstrap-markdown/css/bootstrap-markdown.min.css') ; ?>" />
		<link rel="stylesheet"  href="<?php echo base_url('app-assets-admin/vendor/pnotify/pnotify.custom.css') ; ?>" />

		<!--(remove-empty-lines-end)-->

		<!-- Theme CSS -->

		<link rel="stylesheet"  href="<?php echo base_url('app-assets-admin/css/theme.css') ; ?>">

		<!-- Theme Layout -->

		<link rel="stylesheet"  href="<?php echo base_url('app-assets-admin/css/layouts/modern.css') ; ?>" />

		<!--(remove-empty-lines-end)-->

		<!-- Theme Custom CSS -->

		<link rel="stylesheet"  href="<?php echo base_url('app-assets-admin/css/custom.css') ; ?>">

		<!-- Head Libs -->

		<script src="<?php echo base_url('app-assets-admin/vendor/modernizr/modernizr.js') ; ?>"></script>
		<script src="<?php echo base_url('app-assets-admin/master/style-switcher/style.switcher.localstorage.js') ; ?>"></script>
		<script src="<?php echo base_url('app-assets-admin/master/style-switcher/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js') ; ?>"></script>

	</head>

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
															<a class="dropdown-item dropdown-toggle" href="<?php echo base_url('admin/adminhome') ;?>">
																Accueil Admin
															</a>
														</li>

														<li class="dropdown">
															<a class="dropdown-item dropdown-toggle" href="<?php echo base_url('home') ;?>">
																Retour à la Boutique
															</a>
														</li>

														<li class="dropdown">
															<a class="dropdown-item dropdown-toggle" href="<?php echo base_url('admin/adminhome') ;?>">
																Produits
															</a>
															<ul class="dropdown-menu">
																<li>
																	<a class="dropdown-item" href="<?php echo base_url('admin/produit') ;?>">
																		Ajouter un produit
																	</a>
																</li>
															</ul>
														</li>

														<li class="dropdown">
															<a class="dropdown-item dropdown-toggle" href="<?php echo base_url('admin/categorie') ;?>">
																Catégories
															</a>
														</li>

														<li class="dropdown">
															<a class="dropdown-item dropdown-toggle" href="<?php echo base_url('admin/souscategorie') ;?>">
																Sous-catégories
															</a>
														</li>

														<li class="dropdown">
															<a class="dropdown-item dropdown-toggle" href="<?php echo base_url('admin/users') ;?>">
																Clients
															</a>
														</li>

														<li class="dropdown">
															<a class="dropdown-item dropdown-toggle" href="<?php echo base_url('commande/listeCommandes') ;?>">
																Commandes
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

			
