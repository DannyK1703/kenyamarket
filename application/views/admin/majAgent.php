
<div  style="margin-left:15%">
                        <div class="card">
                            <div class="header">
                                <h2 class="title">Mettre a Jour Agent</h2><br/><br/><br/><br/>
                            </div>
                            <div class="content" >
                                <form method="post" action="<?= site_url('admin/NewAgent');?>" style="margin-left:20%">
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
                                        <div class="col-md-8">
                                            <div class="form-group">
                                                <label>Types</label>
                                                <input type="text" class="form-control border-input" disabled placeholder="Last Name" value="agent">
                                            </div>
                                        </div>
                                    
                                        </div>
                                        <div class="row">                                    
                                        <div class="col-md-8">
                                            <div class="form-group">
                                                <label>login</label>
                                                <input type="text" class="form-control border-input" placeholder="login" name="login">
                                            </div>
                                        </div>
                                        <div class="col-md-8">
                                            <div class="form-group">
                                                
                                                <input type="hidden" class="form-control border-input" placeholder="password" value="Agnt00X" name="pwd">
                                            </div>
                                        </div>
                                        </div>

                                                                        
                                    <div class="text-center">
                                        <button type="submit" class="btn btn-info btn-fill btn-wd">Enregistrer</button>
                                    </div>
                                    <div class="clearfix"></div>
                                </form>
                            </div>
                        </div>
</div>