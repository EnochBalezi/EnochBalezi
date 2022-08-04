<div class="container-fluid px-4  ">

    <h1 class="mt-4">Enseignants</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">Identification de l'enseignant</li>
    </ol>

    <div class="col-md-8 mx-auto">
        <div class="card shadow">
            <div class="card-body">
                <form action="index.php?controller=enseignant&task=save" method="post">
                    <div class="form-group">
                        <input type="text" name="nom" id="nom" placeholder="Entrez le nom" class="form-control">
                    </div>
                    <div class="form-group">
                        <input type="text" name="postnom" id="postnom" placeholder="Entrez le post-Nom" class="form-control">
                    </div>
                    <div class="form-group">
                        <input type="text" name="prenom" id="prenom" placeholder="Entrez le prénom" class="form-control">
                    </div>
                    <div class="form-row">
                        <div class="col-6">
                            <div class="form-group">
                                <select name="genre" id="genre" class="form-control">
                                    <option value="">Choisir le genre</option>
                                    <option value="M">Masculin</option>
                                    <option value="F">Féminin</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <select name="niveau" id="niveau" class="form-control">
                                    <option value="">Choisir le Niveau</option>
                                    <option value="Diplome">Diplome</option>
                                    <option value="Grade">Grade</option>
                                    <option value="Licence">Licence</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-6">
                            <div class="form-group">
                                <input type="text" name="fonction" id="fonction" placeholder="Entrez le fonction" class="form-control">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <input type="text" name="telephone" id="telephone" placeholder="Entrez le numéro de téléphone" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <input type="email" name="email" id="email" placeholder="Entrez l'email" class="form-control">
                    </div>
                    <div class="form-group">
                        <textarea name="adresse" id="adresse" class="form-control">Adresse</textarea>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-dark btn-block"><i class="fa fa-save"></i> Enregistrer</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>