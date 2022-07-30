<div class="container-fluid px-4">
    <div class='alert alert-danger" alert-dismissible fade show mb-0' role='alert'>
        <?php
        if (isset($validation)) {
            foreach ($validation as $key => $value) {
        ?>
                <ul>
                    <li><?= $value ?></li>
                </ul>

            <?php  } ?>

            <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                <span aria-hidden='true'>&times;</span>
            </button> <?php } ?>
    </div>
    <div class="row mb-5 mx-auto">

        <div class="col-md-7">
            <div class="card shadow-md border-0 rounded-lg">
                <div class="card-header">
                    <h4 class="text-center text-muted">Enregistrer un nouveau élève</h4>
                </div>
                <div class="card-body">
                    <form action="index.php?controller=eleve&task=create" method="post">

                        <div class="form-row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" name="nomEleve" id="nomEleve" placeholder="Entrez le Nom de l'élève" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">

                                    <input type="text" name="postNomEleve" id="postNomEleve" placeholder="Entrez le Post-Nom de l'élève" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" name="prenomEleve" id="prenomEleve" placeholder="Entrez le prénom de l'élève" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" list="listGenre" name="genreEleve" id="genreEleve" placeholder="Genre de l'élève" class="form-control">
                                    <datalist id="listGenre">
                                        <option value="">Choissir le genre de l'élève</option>
                                        <option value="M">Masculin</option>
                                        <option value="F">Féminin</option>
                                    </datalist>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="date" name="dateNaissEleve" id="dateNaissEleve" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" name="lieuNaissEleve" id="lieuNaissEleve" placeholder="Lieu de Naissance" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" placeholder="Nationalité de l'élève" name="nationaliteEleve" id="nationaliteEleve" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" name="nomPereEleve" id="nomPereEleve" placeholder="Nom du père de l'élève" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" name="nomMereEleve" id="nomMereEleve" placeholder="Nom de la mère de l'élève" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="tel" name="telePereEleve" id="telePereEleve" placeholder="Numèro téléphone du père de l'élève" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" name="teleMereEleve" id="teleMereEleve" placeholder="Numèro téléphone de la mère de l'élève" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" name="adresseEleve" id="adresseEleve" placeholder="Adresse de l'élève" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" name="profession" id="profession" placeholder="Entrez la profession" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="email" name="email" id="email" placeholder="Email" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" name="pourcentage" id="pourcentage" placeholder="Pourcentage de l'élève" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" name="ecoleProvenance" id="ecoleProvenance" placeholder="Ecole Provenance" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="">Observation</label>
                            <textarea type="text" name="observation" id="observation" placeholder="Observation" class="form-control">

                            </textarea>
                        </div>

                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card shadow-lg border-0 rounded-lg ">
                <div class="card-header">
                    <h4 class="text-center text-muted">Cursus Scolaire</h4>
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <input type="text" name="anneSco" id="anneSco" placeholder="Année scolaire" class="form-control">
                    </div>
                    <div class="form-group">
                        <input type="text" list="listProm" name="codePromotion" id="codePromotion" placeholder="Promotion" class="form-control">
                        <datalist id="listProm">
                            <option value="1">Première</option>
                            <option value="2">Deuxième</option>
                            <option value="3">Troisième</option>
                            <option value="4">Quatrième</option>
                        </datalist>
                    </div>
                    <div class="form-group">
                        <input type="text" name="montantPaiement" id="montantPaiement" placeholder="Montant à payer" class="form-control">
                    </div>
                    <div class="form-group">
                        <input type="date" name="dateTransaction" id="dateTransaction" placeholder="Montant à payer" class="form-control">
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary btn-block">Enregistrer</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>