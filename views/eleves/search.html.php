<div class="container-fluid px-4">

    <h1 class="mt-4">Elèves</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">Liste des élèves</li>
    </ol>
    <div class="row mt-4 mb-3">
        <div class="col-md-9">
            <form action="index.php?controller=eleve&task=recherche" method="post" class="form-inline">
                <input type="text" name="searchDate" id="searchDate" class="form-control" placeholder="Matricule" value="<?= $_POST['searchDate'] ?? "" ?>">
                <button type="submit" class="btn btn-dark ml-2"><i class="fa fa-search"></i></button>
            </form>
        </div>
        <div class="col-md-3">
            <a href="index.php?controller=eleve&task=new" class="ml-2 btn btn-dark">
                <i class="fa fa-plus fa-lg"></i> <i class="fa fa-plus fa-lg"></i> Elève</a>
        </div>
    </div>

    <table class="table table-striped table-hover table-responsive">
        <thead>
            <th>Matricule</th>
            <th>Nom</th>
            <th>Post-Nom</th>
            <th>Prénom</th>
            <th>Genre</th>
            <th>Date Naiss</th>
            <th>Lieu Naiss</th>
            <th>Nationalité</th>
            <th>Nom-Père</th>
            <th>Nom-Mère</th>
            <th>Tél-Père</th>
            <th>Tél-Mère</th>
            <th>Profession</th>
            <th>Email</th>
            <th>Observation</th>
            <th>Ecole-Prov</th>
            <th>Pourcentage</th>
            <th colspan="2">Actions</th>
        </thead>
        <tbody>
            <?php
            foreach ($dataSearch as $key => $value) {
            ?>
                <tr>
                    <td><?= $value->matricule ?></td>
                    <td><?= $value->nom ?></td>
                    <td><?= $value->postNom ?></td>
                    <td><?= $value->prenom ?></td>
                    <td><?= $value->Sexe ?></td>
                    <td><?= $value->dateNaissance ?></td>
                    <td><?= $value->lieuNaissance ?></td>
                    <td><?= $value->nationalite ?></td>
                    <td><?= $value->nomPere ?></td>
                    <td><?= $value->nomMere ?></td>
                    <td><?= $value->telPere ?></td>
                    <td><?= $value->telMere ?></td>
                    <td><?= $value->profession ?></td>
                    <td><?= $value->email ?></td>
                    <td><?= $value->observation ?></td>
                    <td><?= $value->ecoleProvenance ?></td>
                    <td><?= $value->pourcentage ?></td>

                    <td>
                        <form action="index.php?controller=eleve&task=editEleve" method="post">
                            <input type="hidden" name="matricule" id="matricule" value="<?= $value->matricule ?>">
                            <button type="submit" class="btn btn-primary btn-sm">
                                <i class="fa fa-edit"></i>
                            </button>
                        </form>
                    </td>
                    <?php if (@$_SESSION['autherized'] === "Admin") { ?>
                        <td>
                            <form action="index.php?controller=eleve&task=deleteEleve" method="post">
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