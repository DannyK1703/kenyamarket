<div class="content" >
            <div class="container-fluid">
            <div class="row">
                                        <div class="col-md-12">
                                            <div class="card">
                                                <div class="header">
                                                    <h4 class="title">Liste des Emplacements Periodiques</h4>
                                                    <p class="category">Here is a subtitle for this table</p>
                                                </div>
                                                <div class="content table-responsive table-full-width">
                                                    <table class="table table-striped">
                                                        <thead>
                                                            <th>ID</th>
                                                            <th>Periode</th>
                                                           
                                                            <th>Categorie</th>
                                                            <td>Nbre Vendeurs</td>
                                                            <th>Emplacement</th>
                                                            
                                                            
                                                            <th></th>
                                                    
                                                        </thead>
                                                        <tbody><?php $a=0;$i=1;?>
                                                            <?php foreach ($emplacementsP  as $categ){?>
                                                                <tr>
                                                                    
                                                                    <td><?=$i?></td>
                                                                    <td>Du  <?=$categ->date_debut?> Au <?=$categ->date_fin?></td>
                                                                
                                                                    <td><?=$categ->titre?></td>
                                                                    <td><?=$nombres[$categ->idemplacement.$categ->idcategorie.$categ->date_debut]?></td>
                                                                    <td><?=$categ->definition?></td>
                                                                    
                                                                </tr>
                                                                <?php $a=$a+1; $i++?>
                                                        <?php }?>
                                                            
                                                        </tbody>
                                                    </table>

                                                </div>
                                            </div>
                                        </div>
                    </div>
            </div>
            </div>
        </div>