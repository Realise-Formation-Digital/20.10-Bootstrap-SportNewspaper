<!-- Modal Login-->
<form action="action.php">
    <div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="ModalLogin" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Login</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Username or email</label>
                            <input type="text" class="form-control" id="recipient-name">
                        </div>
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Password</label>
                            <input type="text" class="form-control" id="recipient-name">
                        </div>

                    </form>
                    <button type="button" class="btn btn-primary btn-lg btn-block"
                        data-dismiss="modal">Connexion</button>
                    <p><a href="#" class="tooltip-test" title="Tooltip">Mot de passe oublié ?</a></p>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-success btn-lg btn-block" data-dismiss="modal"
                        data-toggle="modal" data-target="#ModalInscription">Creer une compte</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Login Inscription-->
    <div class="modal fade" id="ModalInscription" tabindex="-1" role="dialog" aria-labelledby="ModalInscription"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Inscription</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <div class="modal-body">
                    <form>
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Username:</label>
                            <input type="text" class="form-control" id="recipient-name">
                        </div>
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Email:</label>
                            <input type="text" class="form-control" id="recipient-name">
                        </div>
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Password:</label>
                            <input type="text" class="form-control" id="recipient-name">
                        </div>
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Repeat Password:</label>
                            <input type="text" class="form-control" id="recipient-name">
                        </div>

                    </form>
                    <!-- <button type="button" class="btn btn-primary btn-lg btn-block"
                            data-dismiss="modal">Connexion</button>
                        <p><a href="#" class="tooltip-test" title="Tooltip">Mot de passe oublié ?</a></p> -->
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-success btn-lg btn-block" data-dismiss="modal"
                        data-toggle="modal" data-target="#ModalLogin">Save</button>
                    <button type="button" class="btn btn-secondary btn-lg btn-block"
                        data-dismiss="modal">Annuler</button>
                </div>
            </div>
        </div>
    </div>
</form>