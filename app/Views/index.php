<title>Accueil The Shop</title>	

<body data-plugin-page-transition>

		<div class="body">
			
			<div role="main" class="main shop pt-4">

				<div class="container">

					<div class="masonry-loader masonry-loader-showing">

						<div class="row products product-thumb-info-list" data-plugin-masonry data-plugin-options="{'layoutMode': 'fitRows'}">
									
							<div class="row">
						
								<?php if (isset($tabProducts)) {  ?>

								<?php  foreach ($tabProducts as $tabProduct) {  
									
									$categories = $categoriesModel->where('category_id',$tabProduct['category_id'])->first();
									
									$sousCategories = $sousCategoriesModel->where('sous_categorie_id',$tabProduct['sous_categorie_id'])->first();
									
									?>       
								<div class="col-12 col-sm-6 col-lg-3">

								<a href="<?php echo base_url('product/index/'.$tabProduct['product_id']) ;?>">

								<div class="product mb-0">

									<div class="product-thumb-info border-0 mb-3">


											<div class="product-thumb-info-image">

											<?php if(empty($tabProduct['product_image'])) {?>

											<img class="img-fluid" alt="" src="/images-admin/baseimages/products/product-1.jpg">

											<?php } ?>

											</div>
										</a>
									</div>

									<div class="d-flex justify-content-between">

										<div>

											<h3 class="text-3-5 font-weight-medium font-alternative text-transform-none line-height-3 mb-0"><a href="<?php echo base_url('product/index/'.$tabProduct['product_id']) ;?>"><?php echo $tabProduct['product_name'] ; ?></a></h3>
										
										</div>

										<p class="price text-5 mb-3">

											<span class="amount"><?php echo $tabProduct['price']." € " ; ?></span>

										</p>

										<a href="<?php echo base_url('panier/createPanier/'.$tabProduct['product_id']) ; ?>"><button type="submit" class="btn btn-dark btn-modern text-uppercase bg-color-hover-primary border-color-hover-primary" >Ajouter au panier</button></a>

									</div>	

								</div>

							</div>

							
						<?php } ?>
	
						<?php } ?>
						</div>
						
					</div>

				</div>

			</div>
