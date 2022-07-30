<div class="content">
    <div class="col-md-5 mx-auto mt-5">
        <div class="card shadow-md">
            <div class="card-body">
                <h4 class="text-muted text-center">Se connecter</h4>

                <p style="padding:0 30px; font-size:14px; color:darkgrey;text-align:center;">
                    Démarrer votre session en vous connectant</p>
                <hr>
                <form action="index.php?controller=Login&task=connexion" method="POST">
                    <div class="input-group mb-4">
                        <input type="text" class="form-control" id="user_name" name="userName" placeholder="Enter your Email">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fa fa-envelope"></span>
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-4">
                        <input type="password" class="form-control" id="user_password" name="userPassword" placeholder="Enter your Password">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fa fa-lock"></span>
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-4">
                        <div class="form-check">
                            <input type="checkbox" name="remember_me" class="form-check-input" id="remember_me">
                            <label class="form-check-label" for="remember_me">
                                Remember me
                            </label>
                        </div>
                    </div>

                    <button type="submit" name="submit" class=" btn btn-primary btn-block">
                        Se connecter
                    </button>
                </form>

            </div>
        </div>
    </div>
</div>