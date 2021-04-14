<title>Mon Panier</title>

<body data-plugin-page-transition>

<div class="body">

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