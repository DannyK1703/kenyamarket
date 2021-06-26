



        <div class="content" style="margin-left:15%">
            <div class="container-fluid">
                
            <button type="button" class="btn btn-danger btn-lg btn-block" data-toggle="modal" data-target="#exampleModal" style="width:50%; margin-left:25%;margin-top:20px;margin-bottom:20px;">
                Ajouter Vendeur</button>

                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                        <div class="modal-header">
                        
                                <h2 class="title">Nouveau Vendeur</h2>
                        
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                        
                            <div class="content" >
                                <form method="post" action="<?= site_url('agent/NewVendeur');?>" style="margin-left:20%">
                                <div class="row">
                                        <div class="col-md-8">
                                            <div class="form-group">
                                                <label>Matricule</label>
                                                <input type="text" class="form-control border-input"  placeholder="Matricule" name="matricule">
                                            </div>
                                        </div></div>
                                    <div class="row">
                                        <div class="col-md-8">
                                            <div class="form-group">
                                                <label>Nom Complet</label>
                                                <input type="text" class="form-control border-input"  placeholder="Nom Complet" name="nom">
                                            </div>
                                        </div></div><div class="row">
                                        <div class="col-md-8">
                                            <div class="form-group">
                                                <label>Adresse</label>
                                                <input type="text" class="form-control border-input" placeholder="Adresse" name="adresse">
                                            </div>
                                        </div></div><div class="row">
                                        <div class="col-md-8">
                                            <div class="form-group">
                                                <label>Numero Telephone</label>
                                                <input type="text" class="form-control border-input" placeholder="phone" name="phone">
                                            </div>
                                        </div></div>
                                        <div class="row">
                                        <div class="col-md-8">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Email address</label>
                                                <input type="email" class="form-control border-input" placeholder="Email" name="email">
                                            </div>
                                        </div>
                                    

                                   
                                        
                                      
                                        </div>
                                        <div class="row">
                                        <div class="form-group">
                                            <select class="custom-select" required name='categorie'>

                                            <?php foreach($categories as $categ){
                                               echo' <option value="'.$categ->idcategorie.'">'.$categ->titre.'</option>';
                                            }?>
                                            </select>
                                             </div>
                                        </div>
                                      

                                                                        
                                    <div class="text-center">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Annuler</button>
                                        <button type="submit" class="btn btn-info btn-fill btn-wd">Enregistrer</button>
                                    </div>
                                    <div class="clearfix"></div>
                                </form>
                            </div>
                        </div>
                        </div>
                        
                        </div>
                    
                    </div>
                
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Liste des Vendeurs</h4>
                                <p class="category">Here is a subtitle for this table</p>
                            </div>
                            <div class="content table-responsive table-full-width">
                                <table class="table table-striped">
                                    <thead>
                                        <th>ID</th>
                                        <th>Matricule</th>
                                        <th>Nom</th>
                                        
                                    	<th>Email</th>
                                    	<th>Adresse</th>
                                        <th>Phone</th>
                                        <th>Categorie</th>
                                        
                                        <th>Actions</th>
                                    </thead>
                                    <tbody><?php $a=0;$i=1; $ui=1;?>
                                        <?php foreach ($vendeurs  as $agent){?>
                                            <tr>
                                                
                                                <td><?=$i?></td>
                                                <td><?=$agent->matricule?></td>
                                                <td><?=$agent->nom?></td>
                                                <td><?=$agent->email?></td>
                                                <td><?=$agent->adresse?></td>
                                                <td><?=$agent->phone?></td>
                                                <td><?=$agent->titre?></td>
                                                
                                                
                                                <td>
                                                    <a  data-toggle="modal" data-target="#exampleModalModif<?=$agent->idVendeur?>" style="color:#000; "><i class="ti-pencil" id="icone" style="font-size:22px;border:2px solid; border-radius:20%; padding:15px; "></i>
                                                    </a>
                                                    
                                                    <a  data-toggle="modal" data-target="#exampleModalCenter<?=$agent->idVendeur?>" style="color:#000;"><i class="ti-trash" id="icone" style="font-size:24px;border:2px solid; border-radius:20%; padding:15px;"></i>
                                                    </a>
                                        
                                                </td>
                                            </tr>
                                            <?php $a=$agent->idVendeur;$i=$i+1;
                                            $ui=$i;?>
                                       <?php }?>
                                        
                                    </tbody>
                                </table>

                            </div>
                        </div>
                    </div>

                    <?php $n=1; foreach ($vendeurs  as $agent){ ?>
                <div class="modal fade" id="exampleModalModif<?=$agent->idVendeur?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                        
                    <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalCenterTitle">Modifier vendeur</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                           
                                <div class="modal-body">
                                    <div class="content" >
                                        <form method="post" action="<?= site_url('agent/updateVendeur/'.$agent->idVendeur);?>" style="margin-left:20%">
                                            <div class="row">
                                                    <div class="col-md-8">
                                                        <div class="form-group">
                                                            <label>Matricule</label>
                                                            <input type="text" class="form-control border-input"  placeholder="Matricule" name="matricule" value="<?= $agent->matricule?>">
                                                        </div>
                                                    </div>
                                            </div>    
                                            <div class="row">
                                                    <div class="col-md-8">
                                                        <div class="form-group">
                                                            <label>Nom Complet</label>
                                                            <input type="text" class="form-control border-input"  placeholder="Nom Complet" name="nom" value="<?= $agent->nom?>">
                                                        </div>
                                                    </div>
                                            </div>
                                            <div class="row">
                                                    <div class="col-md-8">
                                                        <div class="form-group">
                                                            <label>Adresse</label>
                                                            <input type="text" class="form-control border-input" placeholder="Adresse" name="adresse" value="<?= $agent->adresse?>">
                                                        </div>
                                                    </div>
                                            </div>
                                            <div class="row">
                                                    <div class="col-md-8">
                                                        <div class="form-group">
                                                            <label>Numero Telephone</label>
                                                            <input type="text" class="form-control border-input" placeholder="phone" name="phone"value="<?= $agent->phone?>">
                                                        </div>
                                                    </div>
                                            </div>
                                            <div class="row">
                                                    <div class="col-md-8">
                                                        <div class="form-group">
                                                            <label for="exampleInputEmail1">Email address</label>
                                                            <input type="email" class="form-control border-input" placeholder="Email" name="email" value="<?= $agent->email?>">
                                                        </div>
                                                    </div>
                                                    
                                            </div>
                                            <div class="row">
                                                    <div class="form-group">
                                                        <select class="custom-select" name='categorie' required>

                                                        <?php foreach($categories as $categ){
                                                            if($categ->idcategorie == $agent->categorie_idcategorie){
                                                                echo' <option value="'.$categ->idcategorie.'" selected>'.$categ->titre.'</option>';
                                                        
                                                            }else{

                                                        echo' <option value="'.$categ->idcategorie.'">'.$categ->titre.'</option>';
                                                        }}?>
                                                        </select>
                                                        </div>
                                            </div>
                                                
                                            <div class="text-center">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Annuler</button>
                                                    <button type="submit" class="btn btn-info btn-fill btn-wd">Enregistrer</button>
                                            </div>
                                            <div class="clearfix"></div>
                                        </form>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                </div>
                            </div>
                        </div>
                </div>
                        <?php }?>
                    


                        <?php $n=1; foreach ($vendeurs  as $agent){ ?>                  
                    <div class="modal fade" id="exampleModalCenter<?=$agent->idVendeur?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalCenterTitle">
                                                        
                                                        Suppression</h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <h4>Voulez vous vraiment Supprimer le vendeur <?= $agent->nom?> ???</h4>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                        <a type="button" class="btn btn-primary" href="<?= site_url('agent/suppVendeur/'.$agent->idVendeur)?>" >Supprimer</a>
                                                    </div>
                                                </div>
                                            </div>
                    </div>
                    <?php }?>
                    </div>

                
            </div>
        </div>

    


    </div>
</div>

