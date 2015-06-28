<?php


/*
 * Restaurant V2
 * Geoffrey Houmaire
 */
?>
<section id="dejeuner">
    <div class="container">
        <div class="row">
            <h2 class="heading font-smoothing">
                La Carte
            </h2>
        
    <?php foreach ($cartes_par_type as $key => $value) { ?>
        <table class="table panel-primary table-dejeuner">
            <div class="panel panel-primary panel-dejeuner">
                <div class="panel-heading">
                    <h3 class="table-dejeuner-h3">
                        <?php echo utf8_encode($key); ?>
                    </h3>
                </div>
            </div>
            
            <tbody>
            
    <?php foreach ($value as $cartes_contenus) { ?>
                    <tr>


                        <?php


                        foreach ($cartes_contenus as $titre => $contenu) {
                            if ($contenu !== $key)
                            {
                                if($titre=='prix'){
                                    echo '<td>' . utf8_encode($contenu) . '€</td>';
                                }
                                else
                                {
                                    echo '<td>' . utf8_encode($contenu) . '</td>';
                                }
                                
                            }
                        }
                        ?>

                    </tr>
            <?php } ?>
                    
            </tbody>
            
                
<?php } ?>
    </table>
            </div>
    </div>
</section>