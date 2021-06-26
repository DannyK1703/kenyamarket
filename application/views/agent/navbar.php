<div class="sidebar" data-background-color="white" data-active-color="danger">

    	<div class="sidebar-wrapper">
            <div class="logo">
                <a href="http://www.creative-tim.com" class="simple-text">
                    Creative Tim
                </a>
            </div>

            <ul class="nav">
                <li>
                    <a href="<?= site_url('admin/accueil')?>" >
                        <i class="ti-panel"></i>
                        <a href="<?= site_url('agent/accueil')?>" ><p>Vendeurs</p></a>
                        <a href="<?= site_url('agent/categories')?>" ><p>categories</p></a>
                        <a href="<?= site_url('agent/emplacements')?>" ><p>emplacement</p>
                    </a>
                </li>
                
            </ul>
    	</div>
    </div>

    <div class="main-panel" >
		<nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar bar1"></span>
                        <span class="icon-bar bar2"></span>
                        <span class="icon-bar bar3"></span>
                    </button>
                    <a class="navbar-brand" href="#">User Profile</a>
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li>
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalLong">
                            <p><i class="ti-user"></i>
                                </p>
                            </button>                
                            
                            <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLongTitle"><?=$this->session->matricule?></h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                    <div class="content">
                        <div class="container-fluid">
                            
                            <div class="row">
                                
                                <div class="col-lg-12 col-md-12">
                                    <div class="card card-user">
                                        <div class="image">
                                            <img src="assets/img/background.jpg" alt="..."/>
                                        </div>
                                        <div class="content">
                                            <div class="author">
                                              <img class="avatar border-white" src="assets/img/faces/face-2.jpg" alt="..."/>
                                              
                                              <h4 class="title">Nom :<br />
                                                 <p><?=$this->session->nom?></p>
                                              </h4>
                                            </div>
                                            <p class="description text-center">
                                                Numero: <br>
                                                 <?=$this->session->phone?> <br>
                                                Email:<br/>
                                                <?=$this->session->email?>
                                               
                                            </p>
                                        </div>
                                        <hr>
                                        <div class="text-center">
                                            <div class="row">
                                                <div class="col-md-3 col-md-offset-1">
                                                    <h5>12<br /><small>Files</small></h5>
                                                </div>
                                                <div class="col-md-4">
                                                    <h5>2GB<br /><small>Used</small></h5>
                                                </div>
                                                <div class="col-md-3">
                                                    <h5>24,6$<br /><small>Spent</small></h5>
                                                </div>
                                            </div>
                                        </div>
                                        </div>
                                    
                                </div>
                                
            
            
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal1">Changer mot de passe</button>
                <div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Changer mot de passe</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form method="post" action="<?= site_url('agent/majAgent/'.$this->session->idagent)?>">
                            <label>Nouveau Mot de passe</label>    
                            <input type="text" name="pwd">
                                                            
                        </div>
                        <div class="modal-footer">
                                <input type="submit" class="btn btn-primary" value="Enregistrer">
                            </form>  
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            
                        </div>
                        </div>
                    </div>
                    </div>
                    <a type="button" class="btn btn-lg btn-primary" href="<?= site_url('agent/deconnexion')?>">Se deconnecter</a>
                                    
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                  
                </div>
              </div>
            </div>
          </div>
                        </li>
                    </ul>

                </div>
            </div>
        </nav>
    </div>
</div>