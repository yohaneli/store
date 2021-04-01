<div class="card-body">

    <h4 class="header">Créer une nouvelle sous-catégorie</h4>

                <?php if(isset($validation)):?>

                    <div class="alert alert-danger"><?= $validation->listErrors() ?></div>

                <?php endif;?>	

        <form class="form-inline" action="/admin/sousCategorie/createSousCategorie" method="post">

            <label class="sr-only" for="inlineFormInputName2">Name</label>

            Créer une nouvelle sous-catégorie : <input type="text" name="name" class="form-control mb-2 mr-sm-2 mb-sm-0" id="inlineFormInputName2" placeholder="Nom sous-catégorie">

            <button type="submit" class="btn btn-primary">Créer une sous-catégorie</button>

        </form>

    <h4 class="header">Listes des sous-catégories</h4>

        <?php if (isset($tabSousCategories)) {  ?>

            <?php  foreach ($tabSousCategories as $tabSousCategorie) {  ?>                                    

        <ul>

            <li>Nom de la sous-catégorie : <?php echo $tabSousCategorie['sous_categorie_name'] ; ?></li>

            <a href="<?php echo base_url('admin/souscategorie/editSousCategorie/'.$tabSousCategorie['sous_categorie_id']) ; ?>"><button type="submit">Modifier</button></a>

            <a href="<?php echo base_url('admin/souscategorie/deleteSousCategorie/'.$tabSousCategorie['sous_categorie_id']) ; ?>"><button type="submit">Supprimer</button></a>

        </ul>

            <?php } ?>

        <?php } ?> 

</div>


