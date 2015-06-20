<?php
/*
 * Restaurant V2
 * Geoffrey Houmaire
 */
?>
<section id="menus">
    <div class="container">
        <div class="row">
            <h2 class="heading font-smoothing custom-menu-title-panel">Nos Menus</h2>
        </div>
    </div>    
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <?php foreach ($menus_tab as $value) { ?>
                    <div class="col-lg-4 ">
                        <div class="panel panel-info custom-panel-border">
                            <div class="panel  custom-menu-panel">
                                <h3 class="heading font-smoothing"><?= utf8_encode($value['name']); ?>  <?= ($value['prix']); ?>€</h3>
                            </div><div class="panel-body cabin lead">
                                <?php foreach ($menu_tab[$value['id']] as $contenu) { ?>
                                <div class="panel-body cabin lead  custom-panel-body"><p> <?= utf8_encode($contenu['name']); ?></p><hr/></div> <?php } ?> 
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
</section>