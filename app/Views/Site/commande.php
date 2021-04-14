
<title>Commande</title>

            <div role="main" class="main shop pb-4">

<div class="container">

    <div class="row justify-content-center">
        <div class="col-lg-8">
            <ul class="breadcrumb breadcrumb-dividers-no-opacity font-weight-bold text-6 justify-content-center my-5">
                <li class="text-transform-none mr-2">
                    <a href="#" class="text-decoration-none text-color-dark text-color-hover-primary">Panier</a>
                </li>
               
                <li class="text-transform-none text-color-dark">
                    <a href="#" class="text-decoration-none text-color-primary">Validation de la commande</a>
                </li>
            </ul>
        </div>
    </div>

    <?php 
    
    $user = $usersModel->where('user_id',$tabCommandes['user_id'])->first();
    
    ?>

    <div class="row justify-content-center">
        <div class="col-lg-8">
            <div class="card border-width-3 border-radius-0 border-color-success">
                <div class="card-body text-center">
                    <p class="text-color-dark font-weight-bold text-4-5 mb-0"> Merci. Votre commande a été validée.</p>
                </div>
            </div>
            <div class="d-flex flex-column flex-md-row justify-content-between py-3 px-4 my-4">
                <div class="text-center">
                    <span>
                        ID Commande <br>
                        <strong class="text-color-dark"><?php echo $tabCommandes['commande_id'] ; ?></strong>
                    </span>
                </div>
                <div class="text-center mt-4 mt-md-0">
                    <span>
                        Date <br>
                        <strong class="text-color-dark"><?php echo $tabCommandes['commande_date'] ; ?></strong>
                    </span>
                </div>
                <div class="text-center mt-4 mt-md-0">
                    <span>
                        Adresse mail <br>
                        <strong class="text-color-dark"><?php echo $user['user_email'] ; ?></strong>
                    </span>
                </div>
                <div class="text-center mt-4 mt-md-0">
                    <span>
                        Total <br>
                        <strong class="text-color-dark"><?php echo $tabCommandes['commande_total'] ; ?>€</strong>
                    </span>
                </div>
                <div class="text-center mt-4 mt-md-0">
                    <span>
                        Statut <br>
                        <strong class="text-color-dark"><?php echo $tabCommandes['etat'] ; ?></strong>
                    </span>
                </div>
                <div class="text-center mt-4 mt-md-0">
                    <span>
                        Méthode de Paiement<br>
                        <strong class="text-color-dark"><?php echo $tabCommandes['commande_mode_paiement'] ; ?></strong>
                    </span>
                </div>
            </div>
            <div class="card border-width-3 border-radius-0 border-color-hover-dark mb-4">
                <div class="card-body">
                    <h4 class="font-weight-bold text-uppercase text-4 mb-3">Votre commande</h4>
                    <table class="shop_table cart-totals mb-0">

                        <tbody>

                        <?php foreach ($panier as $panierFinal) {
                            
                            $produit = $productsModel->where('product_id',$panierFinal['product_id'])->first();

                            $categories = $categoriesModel->where('category_id',$produit['category_id'])->first();
									
                        ?>

                            <tr>
                                <td colspan="2" class="border-top-0">
                                    <strong class="text-color-dark">Produit</strong>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <strong class="d-block text-color-dark line-height-1 font-weight-semibold"><?php echo $produit['product_name'] ;?><span class="product-qty"></span></strong>
                                    <span class="text-1"><?php echo $categories['category_name'] ;?></span>
                                </td>
                                <td class="text-right align-top">
                                    <span class="amount font-weight-medium text-color-grey"><?php echo $panierFinal['prix_elem_panier'] ;?>€</span>
                                </td>
                            </tr>

                        <?php } ?>

                            <tr class="total">
                                <td>
                                    <strong class="text-color-dark text-3-5">Total</strong>
                                </td>
                                <td class="text-right">
                                    <strong class="text-color-dark"><span class="amount text-color-dark text-5"><?php echo $tabCommandes['commande_total'] ; ?>€</span></strong>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

        </div>
    </div>

</div>

</div>