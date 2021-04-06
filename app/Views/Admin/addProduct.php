                        <div class="row">
							<div class="col">
								<section class="card">
									<header class="card-header">
										<div class="row justify-content-center">
										
											<br>

											<h2 class="card-title">Créer un produit</h2>
										
											<br>

										</div>  

									</header>
									<div class="card-body">
                                        
                                        <?php if(isset($validation)):?>

                                            <div class="alert alert-danger"><?= $validation->listErrors() ?></div>

                                        <?php endif;?>


										<form class="form-horizontal form-bordered" method="post" action="/admin/produit/createProduct" enctype="multipart/form-data">
											<div class="form-group row">
												<label class="col-lg-3 control-label text-lg-right pt-2" for="inputDefault">Nom du produit</label>
												<div class="col-lg-6">
													<input type="text" name="name" class="form-control" id="inputDefault">
												</div>
											</div>

                                            <div class="form-group row">
                                                <label class="col-sm-3 control-label text-sm-right pt-2">Sous-Catégorie</label>
                                                <div class="col-sm-9">
                                                    <select id="company" class="form-control" name="souscategorie" title="Choisissez une sous-catégorie" required>
                                                        <option value="">Choisissez une sous-catégorie</option>
														
															<?php if (isset($tabSousCategories)) {  ?>

															<?php  foreach ($tabSousCategories as $tabSousCategorie) {  ?>

														<option  value="<?php echo $tabSousCategorie['sous_categorie_id'] ; ?>"><?php echo $tabSousCategorie['sous_categorie_name'] ; ?></option>

															<?php } } ?>

                                                    </select>
                                                </div>
										    </div>

                                            <div class="form-group row">
                                                <label class="col-sm-3 control-label text-sm-right pt-2">Catégorie</label>
                                                <div class="col-sm-9">
                                                    <select id="company" class="form-control" name="categorie" title="Choisissez une catégorie" required>
                                                        <option value="">Choisissez une catégorie</option>

															<?php if (isset($tabCategories)) {  ?>

															<?php  foreach ($tabCategories as $tabCategorie) {  ?>

														<option  value="<?php echo $tabCategorie['category_id'] ; ?>"><?php echo $tabCategorie['category_name'] ; ?></option>

															<?php } } ?>

                                                    </select>
                                                </div>
										    </div>

                                            <div class="form-group row">
												<label class="col-lg-3 control-label text-lg-right pt-2" for="textareaDefault">Description</label>
												<div class="col-lg-6">
													<textarea class="form-control" name="description" rows="3" id="textareaDefault"></textarea>
												</div>
											</div>

                                            <div class="form-group row">
												<label class="col-lg-3 control-label text-lg-right pt-2" for="inputDefault">Prix du produit</label>
												<div class="col-lg-6">
													<input type="number"  name="price" class="form-control" id="inputDefault">
												</div>
											</div>

											<!-- <div class="form-group row">
												<label class="col-lg-3 control-label text-lg-right pt-2">Photo du produit</label>
												<div class="col-lg-6">
													<div class="fileupload fileupload-new" data-provides="fileupload">
														<div class="input-append">
															<div class="uneditable-input">
																<span class="fileupload-preview"></span>
															</div>
															<span class="btn btn-default btn-file">
																<input type="file" name="photo" />
															</span>
														</div>
													</div>
												</div>
											</div> -->

                                                <div class="row justify-content-end">
                                                    <div class="col-sm-9">
                                                        <button class="btn btn-primary">Créer</button>
                                                    </div>
                                                </div>
											
										</form>
									</div>
								</section>
							</div>
						</div>