<title>Connexion / Inscription The Shop</title>	

<body data-plugin-page-transition>

<div class="body">

    <div role="main" class="main shop py-4">

        <div class="container py-4">

            <div class="row justify-content-center">
                
                <div class="col-md-6 col-lg-5">
                    <h2 class="font-weight-bold text-5 mb-0"><?php echo "Bienvenue ".$login. " ! " ; ?></h2>

                    <br>

                    <?php if ($login == "Admin") { ?>

                    Si vous souhaitez accèder au module Adminstrateur, cliquez <a href="<?php echo base_url('admin/adminhome') ;?>">ici</a>
                    
                    <?php } ?>
                    
                    <br>


                                                <!-- <a class="btn btn-dark" href="<?php //echo base_url('moncompte/mailtest') ;?>">Send Mail</a> -->

                </div>
            </div>

        </div>

    </div>
