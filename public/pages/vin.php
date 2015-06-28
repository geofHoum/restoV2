<?php


/*
 * Restaurant V2
 * Geoffrey Houmaire
 */
$TAB_UNIQUE_VIN_TITRE = array();
?>
<section class="vin">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h2 class="heading font-smoothing">
                    La Carte des Vins
                </h2>
            </div>
        </div>
        <table class="table table-vins">
            <tbody>
                <?php


                foreach ($vins_par_famille as $titre_vin => $onsenfout) {
                    if(!empty($titre_vin)){
                        echo '<tr class="table-vins-tr '.utf8_encode($titre_vin).' panel"><th colspan=3><h3 class="table-vins-h3">'.utf8_encode($titre_vin).'</h3></th></tr>';
                        $TAB_UNIQUE_VIN[$titre_vin] = array();
                    }
                    
                    foreach ($onsenfout as $onsenfoutplus) {
                        echo '<tr class='.utf8_encode($titre_vin).'>';
                        foreach ($onsenfoutplus as $titre_values_vin => $values_vin) {
                            if($values_vin != $titre_vin){
                                if($titre_values_vin == 'prix')
                                {
                                    echo '<td>'.utf8_encode($values_vin).'€</td>';
                                }
                                else
                                {
                                    if($titre_values_vin=='nom' && in_array($values_vin,$TAB_UNIQUE_VIN[$titre_vin]))
                                    {
                                        echo '<td>&nbsp;</td>';
                                    }
                                    else
                                    {
                                        echo '<td>'.utf8_encode($values_vin).'</td>';
                                        $TAB_UNIQUE_VIN[$titre_vin][] = $values_vin;
                                    }
                                }
                            }
                            elseif($values_vin == $titre_vin && $titre_vin == ''){
                                echo '<td>&nbsp;</td>';
                            }
                                
                            
                            
                        }
                        echo '</tr>';
                    }
                    echo '</tr>';
                }
                ?>
            </tbody>
        </table>
    </div>
</section>
