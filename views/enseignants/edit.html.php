<div class="container-fluid px-4  ">

    <h1 class="mt-4">Enseignants</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">Modification de l'enseignant</li>
    </ol>

    <div class="col-md-8 mx-auto">
        <div class="card shadow">
            <div class="card-body">
                <form action="index.php?controller=enseignant&task=edit" method="post">
                    <div class="form-group">
                        <input type="hidden" name="matricule" id="matricule" placeholder="Entrez le nom" value="<?= $enseignant->matricule ?>">
                        <input type="text" name="nom" id="nom" placeholder="Entrez le nom" class="form-control" value="<?= $enseignant->nom ?>">
                    </div>
                    <div class="form-group">
                        <input type="text" name="postnom" id="postnom" placeholder="Entrez le post-Nom" class="form-control" value="<?= $enseignant->postNom ?>">
                    </div>
                    <div class="form-group">
                        <input type="text" name="prenom" id="prenom" placeholder="Entrez le prénom" class="form-control" value="<?= $enseignant->prenom ?>">
                    </div>
                    <div class="form-row">
                        <div class="col-6">
                            <div class="form-group">
                                <input type="text" list="listGenre" name="genre" id="genre" class="form-control" value="<?= $enseignant->sexe ?>">
                                <datalist id="listGenre">
                                    <option value="M">Masculin</option>
                                    <option value="F">Féminin</option>
                                </datalist>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <input type="text" list="listNiveau" name="niveau" id="niveau" class="form-control" value="<?= $enseignant->niveau ?>">
                                <datalist id="listNiveau">
                                    <option value="Diplome">Diplome</option>
                                    <option value="Grade">Grade</option>
                                    <option value="Licence">Licence</option>
                                </datalist>
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-6">
                            <div class="form-group">
                                <input type="text" name="fonction" id="fonction" placeholder="Entrez le fonction" class="form-control" value="<?= $enseignant->fonction ?>">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <input type="text" name="telephone" id="telephone" placeholder="Entrez le numéro de téléphone" class="form-control" value="<?= $enseignant->telephone ?>">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <input type="email" name="email" id="email" placeholder="Entrez l'email" class="form-control" value="<?= $enseignant->email ?>">
                    </div>
                    <div class="form-group">
                        <textarea name="adresse" id="adresse" class="form-control"><?= $enseignant->adresse ?></textarea>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-dark btn-block"><i class="fa fa-edit"></i> Modifier</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>