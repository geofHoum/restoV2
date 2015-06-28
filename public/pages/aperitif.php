<?php


/*
 * Restaurant V2
 * Geoffrey Houmaire
 */
$TAB_UNIQUE_APERITIF = array();
?>
<section class="boisson">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h2 class="heading font-smoothing">
                    Les Apéritifs
                </h2>
            </div>
        </div>
        <table class="table table-aperitif">
            <tbody>
                <?php


                foreach ($boissons_par_famille as $titre_boisson => $onsenfout) {
                    if(!empty($titre_boisson)){
                        echo '<tr class="table-aperitif-tr"><th colspan=3><h3 class="table-aperitif-h3">'.utf8_encode($titre_boisson).'</h3></th></tr>';
                        $TAB_UNIQUE_APERITIF[$titre_boisson] = array(); 
                    }else{
                        $titre_boisson='aperitif';
                        $TAB_UNIQUE_APERITIF[$titre_boisson] = array(); 
                    }
                    foreach ($onsenfout as $onsenfoutplus) {
                        echo '<tr>';
                        foreach ($onsenfoutplus as $titre_values_boisson => $values_boisson) {
                            if($values_boisson != $titre_boisson){
                                if($titre_values_boisson == 'prix')
                                {
                                    echo '<td>'.utf8_encode($values_boisson).'€</td>';
                                }
                                else
                                {
                                    if($titre_values_boisson=='nom' && in_array($values_boisson,$TAB_UNIQUE_APERITIF[$titre_boisson]))
                                    {
                                        echo '<td>&nbsp;</td>';
                                    }
                                    else
                                    {
                                        echo '<td>'.utf8_encode($values_boisson).'</td>';
                                        $TAB_UNIQUE_APERITIF[$titre_boisson][] = $values_boisson;
                                    }
                                }
                            }
                            elseif($values_boisson == $titre_boisson && $titre_boisson == ''){
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
