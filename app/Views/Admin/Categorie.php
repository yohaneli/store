
<div>

	<?php if(isset($validation)):?>

	<div class="alert alert-danger">

	<?= $validation->listErrors() ?>

	</div>

	<?php endif;?>	

		<form class="form-inline" action="/admin/categorie/createCategorie" method="post">

			<label class="sr-only" for="inlineFormInputName2">Name</label>

			Créer une nouvelle catégorie : <input type="text" name="name" class="form-control mb-2 mr-sm-2 mb-sm-0" id="inlineFormInputName2" placeholder="Nom de la catégorie">

			<button type="submit" class="btn btn-primary">Créer une catégorie</button>

		</form>
		
</div>

	<div class="row justify-content-center">

		<br>

		<h4 class="header">Listes des catégories</h4>

		<br>

	</div>  

		<table class="table table-ecommerce-simple table-striped mb-0" id="datatable-ecommerce-list" style="min-width: 550px;">
			<thead>
				<tr>
					<th width="3%"><input type="checkbox" name="select-all" class="select-all checkbox-style-1 p-relative top-2" value="" /></th>
					<th width="8%">ID de la catégorie</th>
					<th width="24%">Nom de la catégorie</th>
					<th width="14%"></th>
					<th width="14%"></th>
				</tr>
			</thead>
			<tbody>
				<?php if (isset($tabCategories)) {  ?>
				
					<?php  foreach ($tabCategories as $tabCategorie) {  
				
						?>                                    
				
					<tr>
						<td width="30"><input type="checkbox" name="checkboxRow1" class="checkbox-style-1 p-relative top-2" value="" /></td>
						<td><strong><?php echo $tabCategorie['category_id'] ; ?></strong></td>
						<td><strong><?php echo $tabCategorie['category_name'] ; ?></strong></td>
						<td><a href="<?php echo base_url('admin/categorie/editCategorie/'.$tabCategorie['category_id']) ; ?>"><button type="submit">Modifier</button></a></td>
						<td><a href="<?php echo base_url('admin/categorie/deleteCategorie/'.$tabCategorie['category_id']) ; ?>"><button type="submit">Supprimer</button></a></td>
					</tr>
					<?php } ?>
				
				<?php } ?>
				
			</tbody>
		</table>

