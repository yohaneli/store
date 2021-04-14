<section role="main" class="content-body content-body-modern mt-0">
					<header>
						<h2 class="font-weight-bold text-6">Liste des commandes</h2>
						
					</header>

					<!-- start: page -->
					<div class="row">
						<div class="col">
							
							<div class="card card-modern">
								<div class="card-body">
									<div class="datatables-header-footer-wrapper">
										<div class="datatable-header">
											
										</div>
										<table class="table table-ecommerce-simple table-striped mb-0" id="datatable-ecommerce-list" style="min-width: 640px;">
											<thead>
												<tr>
													<th width="3%"><input type="checkbox" name="select-all" class="select-all checkbox-style-1 p-relative top-2" value="" /></th>
													<th width="8%">ID</th>
													<th width="28%">Nom du CLient</th>
													<th width="18%">Date</th>
													<th width="18%">Total</th>
													<th width="15%">Statut</th>
												</tr>
											</thead>
											<tbody>

                                                <?php 
                                                
                                                
                                                foreach($tabCommandes as $commande) {
                                                    
                                                    $user = $usersModel->where('user_id',$commande['user_id'])->first();
                                                
                                                ?>
												<tr>
													<td width="30"><input type="checkbox" name="checkboxRow1" class="checkbox-style-1 p-relative top-2" value="" /></td>
													<td><a href="ecommerce-orders-detail.html"><strong><?php echo $commande['commande_id'] ; ?></strong></a></td>
													<td><a href="ecommerce-orders-detail.html"><strong><?php echo $user['user_email'] ; ?></strong></a></td>
													<td><?php echo $commande['commande_date'] ; ?></td>
													<td><?php echo $commande['commande_total'] ; ?></td>
													<td><span class="ecommerce-status on-hold"><?php echo $commande['etat'] ; ?></span></td>
												</tr>
												<?php } ?>
											</tbody>
										</table>										
									</table>
								</div>
							</div>

						</div>
					</div>
					<!-- end: page -->
				</section>
			</div>

		</section>