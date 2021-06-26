<div class="content" style="margin-left:15%">
            <div class="container-fluid">
                
            <div class="container">
                    <button type="button" class="btn btn-danger btn-lg btn-block" data-toggle="modal" data-target="#exampleModalNew">
                    New Categorie
                    </button>
            </div>

                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="card">
                                                <div class="header">
                                                    <h4 class="title">Liste des Categories</h4>
                                                    <p class="category">Here is a subtitle for this table</p>
                                                </div>
                                                <div class="content table-responsive table-full-width">
                                                    <table class="table table-striped">
                                                        <thead>
                                                            <th>ID</th>
                                                            <th>Titre</th>
                                                            <th>Description</th>
                                                            
                                                            <th>Actions</th>
                                                        </thead>
                                                        <tbody><?php $a=0;$i=1;?>
                                                            <?php foreach ($categories  as $categ){?>
                                                                <tr>
                                                                    
                                                                    <td><?=$i?></td>
                                                                    <td><?=$categ->titre?></td>
                                                                    <td><?=$categ->descriptions?></td>
                                                                    
                                                                    <td>
                                                                        <a  data-toggle="modal" data-target="#exampleModalModif" style="color:#000; "><i class="ti-pencil" id="icone" style="font-size:22px;border:2px solid; border-radius:20%; padding:15px; "></i>
                                                                        </a>
                                                                        
                                                                        <a  data-toggle="modal" data-target="#exampleModalSupp" style="color:#000;"><i class="ti-trash" id="icone" style="font-size:24px;border:2px solid; border-radius:20%; padding:15px;"></i>
                                                                        </a>
                                                                        
                                                            
                                                                    </td>
                                                                </tr>
                                                                <?php $a=$categ->idcategorie;$i++?>
                                                        <?php }?>
                                                            
                                                        </tbody>
                                                    </table>

                                                </div>
                                            </div>
                                        </div>
                    </div>
                    <div class="modal fade" id="exampleModalModif" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                        <?php foreach ($categories as $agent){
                                            if($agent->idcategorie==$a){?>    
                                            <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Modifier Categorie</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                            <form method="post" action="<?= site_url('agent/majCategorie/'.$agent->idcategorie)?>">
                                                <input type="text" name="titre" placeholder="titre" value="<?=$agent->titre?>">
                                                <input type="text" name="desc" placeholder="description" value="<?=$agent->descriptions?>" />
                                                            
                                            </div>   
                                            <div class="modal-footer">
                                                            <input type="submit" value="Enregistrer" class="btn btn-primary">
                                                    </form>
                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Annuler</button>
                                            </div>
                                            </div>
                                        </div>
                                        <?php }}?>
                    </div>
                                        
                    <!-- New Modal -->
                        <div class="modal fade" id="exampleModalNew" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Nouvelle Categorie</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form method="post" action="<?= site_url('agent/newCategorie')?>">
                                        <input type="text" name="titre" placeholder="titre"/>
                                        <input type="text" name="desc" placeholder="description"/>
                                        
                            </div>   
                            <div class="modal-footer">
                                        <input type="submit" value="Enregistrer" class="btn btn-primary">
                                </form>
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Annuler</button>
                            </div>
                            </div>
                            
                        </div>
                        </div>

                    <!-- Supp Modal -->
                    <div class="modal fade" id="exampleModalSupp" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Suppression</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            Voulez vous vraiment supprimer la categorie <?= $categ->titre?> ?????
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Annuler</button>
                            <a type="button" class="btn btn-primary" href="<?= site_url('agent/suppCategorie/'.$categ->idcategorie)?>">Supprimer</a>
                        </div>
                        </div>
                    </div>
                    </div>


            </div>
</div>



