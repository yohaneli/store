<body data-plugin-page-transition>

		<div class="body">

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