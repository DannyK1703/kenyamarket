<div class="content" style="margin-left:15%">
            <div class="container-fluid">
                
<div class="container">
                    <button type="button" class="btn btn-primary btn-lg btn-block" data-toggle="modal" data-target="#exampleModalNew">
                    New Emplacement
                    </button>

                   <!-- Extra large modal -->
<button type="button" class="btn btn-danger btn-lg btn-block" data-toggle="modal" data-target=".bd-example-modal-xl">Attribuer places</button>
</div>
<div class="modal fade bd-example-modal-xl" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl" >
      
    <div class="modal-content" >
    
        <h4>Attributions</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"> 
                                <span aria-hidden="true">&times;</span>Fermer
                                </button>
        <h5>Categories</h5>
    <div class="row">

        <?php foreach ($categories as $category){ ?>
                    <div class="col-lg-3 col-sm-6">
                        <div class="card">
                            <div class="content">
                                <div class="row">
                                    <div class="col-xs-2">
                                        
                                    </div>
                                    <div class="col-xs-6">
                                        <div class="numbers">
                                            <p><?= $category->titre?></p>
                                           <p> <?= $nbvendeursatt[$category->idcategorie]?>/
                                           
                                            <?=$nbvendeurs[$category->idcategorie]?></p>
                                        </div>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                    </div>
        <?php }?> <br>
                   
                         
    </div>
    <h5>Attribuer Places</h5> 



    <div class="row">
        
    <form method="post" action="<?= site_url('agent/attributionPlace/'.$this->session->idagent)?>">
    
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Categorie</label>
                                                
                                                <select class="form-control border-input" required  name='categorie' >

                                                <?php foreach($categories as $categ){
                                                echo' <option value="'.$categ->idcategorie.'">'.$categ->titre.'</option>';
                                                }?>
                                                </select>
                                            
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Nombre des vendeurs</label>
                                                
                                                <input type="text" class="form-control border-input" name="nbrevend" placeholder="nombre vendeurs a attribuer" class="input"/>
                                            </div>
                                        </div>
                                        </div>
                                        <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Date Debut</label>
                                                
                                                <input type="date" class="form-control border-input" name="datedebut" placeholder="nombre vendeurs a attribuer" class="input"/>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Date Fin</label>
                                                
                                                <input type="date" class="form-control border-input" name="datefin" placeholder="nombre vendeurs a attribuer" class="input"/>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Emplacement</label>
                                                
                                                <select class="form-control border-input" required name='emplacement'>
                                                    <?php foreach($emplacements as $categ){
                                                        echo' <option value="'.$categ->idEmplacement.'">'.$categ->definition.'</option>';
                                                    }?>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
   

<input class="btn btn-primary" type="submit" value="Valider"/>

    </form>
    </div>
  </div>
</div>


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
                                                            <th>Description</th>
                                                            <th>Nombre Maximal des Places</th>
                                                            
                                                            
                                                            <th>Actions</th>
                                                        </thead>
                                                        <tbody><?php $a=0;$i=1;?>
                                                            <?php foreach ($emplacements  as $categ){?>
                                                                <tr>
                                                                    
                                                                    <td><?=$i?></td>
                                                                    <td><?=$categ->definition?></td>
                                                                    <td><?=$categ->nbreMaxP?></td>
                                                                    
                                                                    <td>
                                                                        <a  data-toggle="modal" data-target="#exampleModalModifi<?=$i;?>" style="color:#000; "><i class="ti-pencil" id="icone" style="font-size:22px;border:2px solid; border-radius:20%; padding:15px; "></i>
                                                                        </a>
                                                                        
                                                                        <a  data-toggle="modal" data-target="#exampleModalSupp<?=$categ->idEmplacement?>" style="color:#000;"><i class="ti-trash" id="icone" style="font-size:24px;border:2px solid; border-radius:20%; padding:15px;"></i>
                                                                        </a>

                                                                        <a    style="color:#000;" href="<?=site_url('agent/listeVendeurEmplacement/'.$categ->idEmplacement)?>"><i class="ti-notepad" id="icone" style="font-size:24px;border:2px solid; border-radius:20%; padding:15px;"></i>
                                                                        </a>
                                                            
                                                                    </td>
                                                                </tr>
                                                                <?php $a=$categ->idEmplacement;$i++?>
                                                        <?php }?>
                                                            
                                                        </tbody>
                                                    </table>

                                                </div>
                                            </div>
                                        </div>
                    </div>
                    <?php $a=1; foreach ($emplacements  as $categ){?>
                       
                                            
                        <!-- New Modal -->
                            <div class="modal fade" id="exampleModalNew" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Nouvel Emplacement</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <form method="post" action="<?= site_url('agent/NewEmplacement')?>">
                                                <input type="text" name="definition" placeholder="description"/>
                                                <input type="text" name="nbrP" placeholder="Nombre Maximun des Places"/>
                                                
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
                        <div class="modal fade" id="exampleModalSupp<?=$categ->idEmplacement?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Suppression</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    Voulez vous vraiment supprimer  <?= $categ->definition?>  de la liste des emplacements?????
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Annuler</button>
                                    <a type="button" class="btn btn-primary" href="<?= site_url('agent/suppEmplacement/'.$categ->idEmplacement)?>">Supprimer</a>
                                </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal fade" id="exampleModalModifi<?=$a?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                            
                                            <?php foreach ($emplacements as $agent){
                                                if($agent->idEmplacement==$a){?>    
                                                <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Modifier Emplacement</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                <form method="post" action="<?= site_url('agent/majEmplacement/'.$agent->idEmplacement)?>">
                                                    <input type="text" name="definition" placeholder="titre" value="<?=$agent->definition?>">
                                                    <input type="text" name="nbrP" placeholder="description" value="<?=$agent->nbreMaxP?>" />
                                                                
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
                    <?php $a=$a+1; }?>

            </div>
</div>



