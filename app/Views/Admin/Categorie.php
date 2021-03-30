
                            <h4 class="header">Listes des produits</h4>

                                    <?php if (isset($tabCategories)) {  ?>

                                        <?php  foreach ($tabCategories as $tabCategorie) {  

                                            ?>                                    

										<ul>
                                        	<li>Nom du produit : <?php echo $tabCategorie['category_name'] ; ?></li>
											<button type="submit">Modifier</button>
											<button type="submit">Supprimer</button>

										</ul>
                                    
                                    <?php } ?>

                                        <?php } ?> 

