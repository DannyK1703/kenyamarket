<div class="content" style="margin-left:15%">
            <div class="container-fluid">
            <a class="btn btn-primary" href="<?= site_url('agent/emplacements')?>" ><p>Retourner aux emplacement</p></a>
<div class="row">
                                        <div class="col-md-12">
                                            <div class="card">
                                                <div class="header">
                                                    <h4 class="title">Liste des Emplacements</h4>
                                                    <p class="category">Here is a subtitle for this table</p>
                                                </div>
                                                <div class="content table-responsive table-full-width">
                                                    <table class="table table-striped">
                                                        <thead>
                                                            <th>ID</th>
                                                            <th>Matricule</th>
                                                            <th>Vendeur</th>
                                                            <th>Categorie</th>
                                                            
                                                            <th>Emplacement</th>
                                                            <th>Place</th>
                                                            <th>Durée</th>
                                                            <th>Payement</th>
                                                            <th></th>
                                                    
                                                        </thead>
                                                        <tbody><?php $a=0;$i=1;?>
                                                            <?php foreach ($emplacements  as $categ){?>
                                                                <tr>
                                                                    
                                                                    <td><?=$i?></td>
                                                                    <td><?=$categ->matricule?></th>
                                                                    <td><?=$categ->nom?></td>
                                                                    <td><?=$categ->titre?></td>
                                                                    <td><?=$categ->definition?></td>
                                                                    <td><?=$categ->description?></td>
                                                                    <td>Du  <?=$categ->date_debut?> Au <?=$categ->date_fin?></td>
                                                                    <td>
                                                                        <?php if($categ->etat==1){?>
                                                                            Bon 
                                                                            <i class="ti-thumb-up" id="icone" style="font-size:24px;"></i>
                                                                    <?php } else{?>
                                                                            <a type="button" class="btn btn-success" href="<?= site_url('agent/payer/'.$categ->idattribution.'/'.$categ->idEmplacement)?>">Payer<i class="ti-check" id="icone" style="font-size:24px;"></i></button>
                                                                    <?php }?>
                                                                    </td>
                                                                </tr>
                                                                <?php $i++?>
                                                        <?php }?>
                                                            
                                                        </tbody>
                                                    </table>

                                                </div>
                                            </div>
                                        </div>
                    </div>
            </div>
</div>