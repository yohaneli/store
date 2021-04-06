
<h4 class="header">Listes des produits</h4>                             
    <table class="table table-ecommerce-simple table-striped mb-0" id="datatable-ecommerce-list" style="min-width: 550px;">
        <thead>
            <tr>
                <th width="3%"><input type="checkbox" name="select-all" class="select-all checkbox-style-1 p-relative top-2" value="" /></th>
                <th width="8%">ID du produit</th>
                <th>Nom du produit</th>
                <th>Sous-catégorie du produit</th>
                <th>Catégorie du produit</th>
                <th>Description du produit</th>
                <th>Prix du produit</th>
                <th>Photo du produit</th>
                <th>Etat de stock du produit</th>
                <th>Date de création du produit</th>
                <th></th>
                <th></th>
		    </tr>
	    </thead>

	        <tbody>

                <?php if (isset($tabProducts)) {  ?>

                    <?php  foreach ($tabProducts as $tabProduct) {  
    
                        $categories = $categoriesModel->where('category_id',$tabProduct['category_id'])->first();

                        $sousCategories = $sousCategoriesModel->where('sous_categorie_id',$tabProduct['sous_categorie_id'])->first();

                    ?>                                          
		
                        <tr>

                            <td width="30"><input type="checkbox" name="checkboxRow1" class="checkbox-style-1 p-relative top-2" value="" /></td>

                            <td><strong><?php echo $tabProduct['product_id'] ; ?></strong></td>

                            <td><strong><?php echo $tabProduct['product_name'] ; ?>></strong></td>

                            <td><strong><?php echo $sousCategories['sous_categorie_name'] ; ?></strong></td>

                            <td><strong><?php echo $categories['category_name'] ; ?></strong></td>

                            <td><strong><?php echo $tabProduct['product_desc'] ; ?></strong></td>

                            <td><strong><?php echo $tabProduct['price'] ; ?></strong></td>

                            <td><strong>

                                <?php if(empty($tabProduct['product_image'])) {?>

                                <img src="/images-admin/baseimages/default.png">

                                <?php } ?>

                            </strong></td>

                            <td><strong>

                                <?php if($tabProduct['available'] == 1) {?>

                                DISPONIBLE

                                <?php } ?>

                            </strong></td>

                            <td><strong><?php echo $tabProduct['product_date'] ; ?></strong></td>

                            <td><a href="<?php echo base_url('admin/produit/editProduct/'.$tabProduct['product_id']) ; ?>"><button type="submit">Modifier</button></a></td>

                            <td><a href="<?php echo base_url('admin/adminhome/deleteProduct/'.$tabProduct['product_id']) ; ?>"><button type="submit">Supprimer</button></a></td>
                        
                        </tr>

			        <?php } ?>
		
		        <?php } ?>
		
	        </tbody>

    </table>