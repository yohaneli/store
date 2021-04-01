<div class="card-body">

    <?php if (isset($categorie['category_id'])) { ?>

    <h4 class="header">Modifier une nouvelle catégorie</h4>

                    <?php if(isset($validation)):?>

                        <div class="alert alert-danger"><?= $validation->listErrors() ?></div>

                    <?php endif;?>	

        <form class="form-inline" action="<?php echo base_url('admin/categorie/editCategorie/'.$categorie['category_id']) ; ?>" method="post">

            <label class="sr-only" for="inlineFormInputName2">Name</label>

            Modifier une catégorie : <input type="text" name="name" class="form-control mb-2 mr-sm-2 mb-sm-0" id="inlineFormInputName2" value="<?php echo $categorie['category_name'] ; ?>">

            <button type="submit" class="btn btn-primary">Modifier une catégorie</button>

        </form>

    <?php } ?>

<div class="card-body">

    <?php if (isset($sousCategorie['sous_categorie_id'])) { ?>

    <h4 class="header">Modifier une sous-catégorie</h4>

                    <?php if(isset($validation)):?>

                        <div class="alert alert-danger"><?= $validation->listErrors() ?></div>

                    <?php endif;?>	

        <form class="form-inline" action="<?php echo base_url('admin/sousCategorie/editSousCategorie/'.$sousCategorie['sous_categorie_id']) ; ?>" method="post">

            <label class="sr-only" for="inlineFormInputName2">Name</label>

            Modifier une sous-catégorie : <input type="text" name="name" class="form-control mb-2 mr-sm-2 mb-sm-0" id="inlineFormInputName2" value="<?php echo $sousCategorie['sous_categorie_name'] ; ?>">

            <button type="submit" class="btn btn-primary">Modifier une sous-catégorie</button>

        </form>

    <?php } ?>

    <div class="row">

    <?php if (isset($produit['product_id'])) { ?>

							<div class="col">
								<section class="card">
									<header class="card-header">
						
										<h2 class="card-title">Modifier un produit</h2>
									</header>
									<div class="card-body">
                                        
                                        <?php if(isset($validation)):?>

                                            <div class="alert alert-danger"><?= $validation->listErrors() ?></div>

                                        <?php endif;?>


										<form class="form-horizontal form-bordered" method="post" action="/admin/produit/createProduct" enctype="multipart/form-data">
											<div class="form-group row">
												<label class="col-lg-3 control-label text-lg-right pt-2" for="inputDefault">Nom du produit</label>
												<div class="col-lg-6">
													<input type="text" name="name" class="form-control" id="inputDefault" value="<?php echo $produit['product_name'] ; ?>">
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
													<textarea class="form-control" name="description" rows="3" id="textareaDefault"value="<?php echo $produit['product_desc'] ; ?>"></textarea>
												</div>
											</div>

                                            <div class="form-group row">
												<label class="col-lg-3 control-label text-lg-right pt-2" for="inputDefault">Prix du produit</label>
												<div class="col-lg-6">
													<input type="number"  name="price" class="form-control" id="inputDefault" value="<?php echo $produit['price'] ; ?>">
												</div>
											</div>

											<div class="form-group row">
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
											</div>

                                                <div class="row justify-content-end">
                                                    <div class="col-sm-9">
                                                        <button class="btn btn-primary">Modifier</button>
                                                    </div>
                                                </div>
											<?php } ?>
										</form>
									</div>
								</section>
							</div>
						</div>
