<div class="container-fluid px-4  ">

    <h1 class="mt-4">Enseignants</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">Recherche des enseignants</li>
    </ol>

    <div class="card shadow">
        <div class="card-body">
            <div class="row mt-4 mb-3">
                <div class="col-md-9">
                    <form action="index.php?controller=enseignant&task=recherche" method="post" class="form-inline">
                        <input type="text" name="searchData" id="searchData" class="form-control" placeholder="Recherche" value="<?= $_POST['searchDate'] ?? "" ?>">
                        <button type="submit" class="btn btn-dark ml-2"><i class="fa fa-search"></i></button>
                    </form>
                </div>
                <div class="col-md-3">
                    <a href="index.php?controller=enseignant&task=new" class="btn btn-dark"><i class="fa fa-plus"></i> Enseignant</a>
                </div>
            </div>

            <table class="table table-striped table-hover table-responsive mt-3">
                <thead>
                    <th>Code</th>
                    <th>Nom</th>
                    <th>Post-Nom</th>
                    <th>Prénom</th>
                    <th>Sexe</th>
                    <th>Niveau</th>
                    <th>Fonction</th>
                    <th>Téléphone</th>
                    <th>Email</th>
                    <th colspan="2">Actions</th>
                </thead>
                <tbody>
                    <?php
                    foreach ($enseignants as $key => $value) {
                    ?>
                        <tr>
                            <td><?= $value->matricule ?></td>
                            <td><?= $value->nom ?></td>
                            <td><?= $value->postNom ?></td>
                            <td><?= $value->prenom ?></td>
                            <td><?= $value->sexe ?></td>
                            <td><?= $value->niveau ?></td>
                            <td><?= $value->fonction ?></td>
                            <td><?= $value->telephone ?></td>
                            <td><?= $value->email ?></td>
                            <td>
                                <form action="index.php?controller=enseignant&task=editEnseign" method="post">
                                    <input type="hidden" name="matricule" id="matricule" value="<?= $value->matricule ?>">
                                    <button type="submit" class="btn btn-primary btn-sm">
                                        <i class="fa fa-edit"></i>
                                    </button>
                                </form>
                            </td>
                            <?php if (@$_SESSION['autherized'] === "Admin") { ?>
                                <td>
                                    <form action="index.php?controller=enseignant&task=delete" method="post">
                                        <input type="hidden" name="matricule" id="matricule" value="<?= $value->matricule ?>">
                                        <button type="submit" onclick="return confirm('Etes-vous sur de vouloir supprimer?')" class="btn btn-danger btn-sm">
                                            <i class="fa fa-trash"></i>
                                        </button>
                                    </form>
                                </td>
                            <?php } ?>
                        </tr>
                    <?php
                    }

                    ?>
                </tbody>
            </table>

        </div>
    </div>
</div>