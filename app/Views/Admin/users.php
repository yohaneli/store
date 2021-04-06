<h4>Liste des utilisateurs</h4>
<table class="table table-ecommerce-simple table-striped mb-0" id="datatable-ecommerce-list" style="min-width: 550px;">
	<thead>
		<tr>
			<th width="3%"><input type="checkbox" name="select-all" class="select-all checkbox-style-1 p-relative top-2" value="" /></th>
			<th width="8%">ID de l'utilisateur</th>
			<th width="24%">Adresse mail de l'utilisateur</th>
			<th width="14%">Date d'inscription de l'utilisateur</th>
		</tr>
	</thead>
	<tbody>
		<?php if (isset($tabUsers)) {  ?>
		
			<?php  foreach ($tabUsers as $tabUser) {  
		
				?>                                    
		
			<tr>
				<td width="30"><input type="checkbox" name="checkboxRow1" class="checkbox-style-1 p-relative top-2" value="" /></td>
				<td><strong><?php echo $tabUser['user_id'] ; ?></strong></td>
				<td><strong><?php echo $tabUser['user_email'] ; ?></strong></td>
				<td><strong><?php echo $tabUser['user_created_at'] ; ?></strong></td>
			</tr>
			<?php } ?>
		
		<?php } ?>
		
	</tbody>
</table>
