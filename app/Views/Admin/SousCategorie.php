
                <?php if(isset($validation)):?>

                    <div class="alert alert-danger"><?= $validation->listErrors() ?></div>

                <?php endif;?>	

        <form class="form-inline" action="/admin/sousCategorie/createSousCategorie" method="post">

            <label class="sr-only" for="inlineFormInputName2">Name</label>

            Créer une nouvelle sous-catégorie : <input type="text" name="name" class="form-control mb-2 mr-sm-2 mb-sm-0" id="inlineFormInputName2" placeholder="Nom sous-catégorie">

            <button type="submit" class="btn btn-primary">Créer une sous-catégorie</button>

        </form>
		<div class="row justify-content-center">

<br>
<h4 class="header">Listes des sous-catégories</h4>
<br>
</div>  


<table class="table table-ecommerce-simple table-striped mb-0" id="datatable-ecommerce-list" style="min-width: 550px;">
	<thead>
		<tr>
			<th width="3%"><input type="checkbox" name="select-all" class="select-all checkbox-style-1 p-relative top-2" value="" /></th>
			<th width="8%">ID de la sous-catégorie</th>
			<th width="24%">Nom de la sous-catégorie</th>
			<th width="14%"></th>
			<th width="14%"></th>
		</tr>
	</thead>
	<tbody>
    <?php if (isset($tabSousCategories)) {  ?>

<?php  foreach ($tabSousCategories as $tabSousCategorie) {  ?>                                      
		
			<tr>
				<td width="30"><input type="checkbox" name="checkboxRow1" class="checkbox-style-1 p-relative top-2" value="" /></td>
				<td><strong><?php echo $tabSousCategorie['sous_categorie_id'] ; ?></strong></td>
				<td><strong><?php echo $tabSousCategorie['sous_categorie_name'] ; ?></strong></td>
				<th><a href="<?php echo base_url('admin/souscategorie/editSousCategorie/'.$tabSousCategorie['sous_categorie_id']) ; ?>"><button type="submit">Modifier</button></a></th>
				<th><a href="<?php echo base_url('admin/souscategorie/deleteSousCategorie/'.$tabSousCategorie['sous_categorie_id']) ; ?>"><button type="submit">Supprimer</button></a></th>
			</tr>
			<?php } ?>
		
		<?php } ?>
		
	</tbody>
</table>

