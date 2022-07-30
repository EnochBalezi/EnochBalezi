<div class="container-fluid px-4">
    <div class="col-md-7 mt-2 mx-auto">
        <div class="card shadow-md border-0 rounded-lg ">
            <div class="card-header">
                <h4 class="text-center text-muted">Modification de l'élève #<?= $eleve->matricule  ?></h4>
            </div>
            <div class="card-body">
                <form action="index.php?controller=eleve&task=edit" method="post">

                    <div class="form-row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="hidden" name="matricule" id="matricule" value="<?= $eleve->matricule ?>">
                                <input type="text" name="nomEleve" id="nomEleve" placeholder="Entrez le Nom de l'élève" class="form-control" value="<?= $eleve->nom ?>">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">

                                <input type="text" name="postNomEleve" id="postNomEleve" placeholder="Entrez le Post-Nom de l'élève" class="form-control" value="<?= $eleve->postNom ?>">
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="text" name="prenomEleve" id="prenomEleve" placeholder="Entrez le prénom de l'élève" class="form-control" value="<?= $eleve->prenom ?>">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <select type="text" list="listGenre" name="genreEleve" id="genreEleve" placeholder="Genre de l'élève" class="form-control" <?= $eleve->Sexe ?>>
                                    <?php if ($eleve->Sexe === 'M') ?>
                                    <option value="M">Masculin</option>
                                    <?php if ($eleve->Sexe === 'F') ?>
                                    <option value="F">Féminin</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="date" name="dateNaissEleve" id="dateNaissEleve" class="form-control" value="<?= $eleve->dateNaissance ?>">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="text" name="lieuNaissEleve" id="lieuNaissEleve" placeholder="Lieu de Naissance" class="form-control" value="<?= $eleve->lieuNaissance ?>">
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="text" placeholder="Nationalité de l'élève" name="nationaliteEleve" id="nationaliteEleve" class="form-control" value="<?= $eleve->nationalite ?>">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="text" name="nomPereEleve" id="nomPereEleve" placeholder="Nom du père de l'élève" class="form-control" value="<?= $eleve->nomPere ?>">
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="text" name="nomMereEleve" id="nomMereEleve" placeholder="Nom de la mère de l'élève" class="form-control" value="<?= $eleve->nomMere ?>">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="tel" name="telePereEleve" id="telePereEleve" placeholder="Numèro téléphone du père de l'élève" class="form-control" value="<?= $eleve->telPere ?>">
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="text" name="teleMereEleve" id="teleMereEleve" placeholder="Numèro téléphone de la mère de l'élève" class="form-control" value="<?= $eleve->telMere ?>">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="text" name="adresseEleve" id="adresseEleve" placeholder="Adresse de l'élève" class="form-control" value="<?= $eleve->adresse ?>">
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="text" name="profession" id="profession" placeholder="Entrez la profession" class="form-control" value="<?= $eleve->profession ?>">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="email" name="email" id="email" placeholder="Email" class="form-control" value="<?= $eleve->email ?>">
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="text" name="pourcentage" id="pourcentage" placeholder="Pourcentage de l'élève" class="form-control" value="<?= $eleve->pourcentage ?>">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="text" name="ecoleProvenance" id="ecoleProvenance" placeholder="Ecole Provenance" class="form-control" value="<?= $eleve->ecoleProvenance ?>">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="">Observation</label>
                        <textarea type="text" name="observation" id="observation" placeholder="Observation" class="form-control">
<?= $eleve->observation ?>
                            </textarea>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary btn-block">Modifier</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>