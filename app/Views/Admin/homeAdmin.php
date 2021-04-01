
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
                                            
                                            <li>Description du produit : <?php echo $tabProduct['product_desc'] ; ?></li>

                                        	<li>Prix du produit : <?php echo $tabProduct['price'] ; ?></li>

                                            <li>Photo du produit : <?php if(empty($tabProduct['product_image'])) {?>

                                            <img src="/images-admin/baseimages/default.png">

                                            <?php } ?></li>

                                            <li>Etat du stock du produit : <?php if($tabProduct['available'] == 1) {?>

                                             DISPONIBLE

                                            <?php } ?></li>
                                            
                                        	<li>Date de création du produit : <?php echo $tabProduct['product_date'] ; ?></li>

                                            <a href="<?php echo base_url('admin/produit/editProduct/'.$tabProduct['product_id']) ; ?>"><button type="submit">Modifier</button></a>

                                            <a href="<?php echo base_url('admin/adminhome/deleteProduct/'.$tabProduct['product_id']) ; ?>"><button type="submit">Supprimer</button></a>
                                            
										</ul>
                                    
                                    <?php } ?>

                                        <?php } ?> 

