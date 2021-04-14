
				<!-- end: sidebar -->
				<?php var_dump($commande); ?>
				<section role="main" class="content-body content-body-modern mt-0">
                    <header>
                        <div>
						<h2 class="font-weight-bold text-6">Commande numéro 1</h2>
                        </div>
					</header>

					<!-- start: page -->
					<form class="order-details action-buttons-fixed" method="post">
						<div class="row">

							<div class="col-12">
								
								<div class="card card-modern">
									<div class="card-header">
										<h2 class="card-title">Infos Commande</h2>
									</div>
									<div class="card-body">
										<div class="row">
											<div class="col-12">
												<strong class="d-block text-color-dark">Statut</strong>
												<?php echo $commande['etat'] ; ?>
											</div>

											<div class="col-12">
												<strong class="d-block text-color-dark">Date de création:</strong>
												<?php echo $commande['commande_date'] ; ?>
											</div>

											<div class="col-12">
												<strong class="d-block text-color-dark">Adresse mail du client:</strong>
												<?php echo $commande['user_id'] ; ?>
											</div>

											<div class="col-12">
												
												<strong class="d-block text-color-dark">Total de la commande :</strong>
												<?php echo $commande['commande_total'] ; ?>€
											</div>

										</div>
									</div>
								</div>

							</div>
						</div>
						<div class="row">
							<div class="col">
								
								<div class="card card-modern">
									<div class="card-header">
										<h2 class="card-title">Produits</h2>
									</div>
									<div class="card-body">
										<div class="table-responsive">
											<table class="table table-ecommerce-simple table-ecommerce-simple-border-bottom table-striped mb-0" style="min-width: 380px;">
												<thead>
													<tr>
														<th width="8%" class="pl-4">ID</th>
														<th width="65%">Nom</th>
														<th width="5%" class="text-right">Prix</th>
													</tr>
												</thead>
												<tbody>
													<tr>
														<td class="pl-4"><a href="ecommerce-products-form.html"><strong>191</strong></a></td>
														<td><a href="ecommerce-products-form.html"><strong>Product Name Example</strong></a></td>
														<td class="text-right">$99</td>
													</tr>
													
												</tbody>
											</table>
										</div>

										<div class="row justify-content-end flex-column flex-lg-row my-3">
											
											<div class="col-auto">
												<h3 class="font-weight-bold text-color-dark text-4 mb-3">Total de la commande</h3>
												<span class="d-flex align-items-center justify-content-lg-end">
													<strong class="text-color-dark text-5">318.00€</strong>
												</span>
											</div>
										</div>
									</div>
								</div>

							</div>
						</div>
					</form>
					<!-- end: page -->
				</section>
			</div>

		</section>