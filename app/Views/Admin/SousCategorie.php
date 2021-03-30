
                            <h4 class="header">Listes des produits</h4>

<?php if (isset($tabSousCategories)) {  ?>

    <?php  foreach ($tabSousCategories as $tabSousCategorie) {  

        ?>                                    

    <ul>
        <li>Nom du produit : <?php echo $tabSousCategorie['sous_categorie_name'] ; ?></li>
        <button type="submit">Modifier</button>
        <button type="submit">Supprimer</button>

    </ul>

<?php } ?>

    <?php } ?> 

