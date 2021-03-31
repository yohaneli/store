
                            <h4 class="header">Listes des produits</h4>
                                    <?php if (isset($tabProducts)) {  ?>

                                        <?php  foreach ($tabProducts as $tabProduct) {  
                                            
                                            $categories = $categoriesModel->where('category_id',$tabProduct['category_id'])->first();

                                            $sousCategories = $sousCategoriesModel->where('sous_categorie_id',$tabProduct['sous_categorie_id'])->first();

                                            ?>                                    

										<ul>
                                        	<li>Nom du produit : <?php echo $tabProduct['product_name'] ; ?></li>
                                        	<li>Catégorie du produit : <?php echo $categories['category_name'] ; ?></li>
											<li>Sous-Catégorie du produit : <?php echo $sousCategories['sous_categorie_name'] ; ?></li>
                                        	<li>Date du produit : <?php echo $tabProduct['product_date'] ; ?></li>
											<button type="submit">Modifier</button>
                                            <a href="<?php echo base_url('admin/adminhome/deleteProduct/'.$tabProduct['product_id']) ; ?>"><button type="submit">Supprimer</button></a>
										</ul>
                                    
                                    <?php } ?>

                                        <?php } ?> 

