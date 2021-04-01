
<div class="card-body">

    <h4 class="header">Créer une nouvelle catégorie</h4>

                    <?php if(isset($validation)):?>

                        <div class="alert alert-danger"><?= $validation->listErrors() ?></div>

                    <?php endif;?>	

        <form class="form-inline" action="/admin/categorie/createCategorie" method="post">

            <label class="sr-only" for="inlineFormInputName2">Name</label>

            Créer une nouvelle catégorie : <input type="text" name="name" class="form-control mb-2 mr-sm-2 mb-sm-0" id="inlineFormInputName2" placeholder="Nom de la catégorie">

            <button type="submit" class="btn btn-primary">Créer une catégorie</button>

        </form>

    <h4 class="header">Liste des catégories</h4>


        <?php if (isset($tabCategories)) {  ?>

            <?php  foreach ($tabCategories as $tabCategorie) {  

                ?>                                    

            <ul>
                <li>Nom de la catégorie : <?php echo $tabCategorie['category_name'] ; ?></li>

                <a href="<?php echo base_url('admin/categorie/editCategorie/'.$tabCategorie['category_id']) ; ?>"><button type="submit">Modifier</button></a>

                <a href="<?php echo base_url('admin/categorie/deleteCategorie/'.$tabCategorie['category_id']) ; ?>"><button type="submit">Supprimer</button></a>

            </ul>
        
            <?php } ?>

        <?php } ?>

</div>

