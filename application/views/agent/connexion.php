
    
		<nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header">
                    
                    <a class="navbar-brand" href="#">Place Market</a>
                </div>
                <div class="collapse navbar-collapse">
                    

                </div>
            </div>
        </nav>
    <div class="content" style="margin-left: 25%;width:50%; margin-bottom:20%;">
        <div class="container-fluid">
            <div class="row">
    <div class="col-lg-8 col-md-7">
        <div class="card">
            <div class="header" style="background-color: rgb(58, 55, 55);">
                <h4 class="title" style="font-size:30px; text-align:center; color:white; vertical-align:middle">Connexion en tant qu'Agent</h4>
            </div>
            <div class="content">
                <form method="POST" action="<?=site_url('agent/connexion')?>">
                    <div class="row">
                     
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="exampleInputText1" style="font-size: 24px">Login</label>
                                <input type="text" class="form-control border-input"  name="login" placeholder="Login" style="font-size: 18px;height:50px;">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        
                        <div class="col-md-12">
                            <div class="form-group">
                                <label style="font-size: 24px" >Mot de passe</label>
                                <input type="password" class="form-control border-input" placeholder="Mot de passe" name="pwd" style="font-size: 18px;height:50px;">
                            </div>
                        </div>
                    </div>

                    
                    
                    <div class="text-center">
                        <button type="submit" class="btn btn-primary btn-fill btn-wd" style="font-size:18px;">Connexion</button>
                    </div>
                    <div class="clearfix"></div>
                </form>
            </div>
        </div>
    </div>

</div>
</div>
</div>
   