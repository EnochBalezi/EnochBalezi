<div class="container-fluid px-4  ">

    <h1 class="mt-4">Cours</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">Liste des cours</li>
    </ol>

    <div class="card shadow">
        <div class="card-body">
            <div class="row mt-4 mb-3">
                <div class="col-md-9">
                    <form action="index.php?controller=cour&task=recherche" method="post" class="form-inline">
                        <input type="text" name="searchData" id="searchData" class="form-control" placeholder="Matricule" value="<?= $_POST['searchDate'] ?? "" ?>">
                        <button type="submit" class="btn btn-dark ml-2"><i class="fa fa-search"></i></button>
                    </form>
                </div>
                <div class="col-md-3">
                    <a href="index.php?controller=cour&task=new" class="ml-2 btn btn-dark">
                        <i class="fa fa-plus fa-lg"></i> Cours</a>
                </div>
            </div>

            <table class="table table-striped table-hover table-responsive">
                <thead>
                    <th>Code Cours</th>
                    <th>Désignations</th>
                    <th>Promotions</th>
                    <th>Enseignants</th>
                    <th colspan="2">Actions</th>
                </thead>
                <tbody>
                    <?php
                    foreach ($search as $key => $value) {
                    ?>
                        <tr>
                            <td><?= $value->codeCours ?></td>
                            <td><?= $value->designationCours ?></td>
                            <td><?= $value->designation ?></td>
                            <td><?= $value->enseignan ?></td>
                            <td>
                                <form action="index.php?controller=cour&task=editCour" method="post">
                                    <input type="hidden" name="codeCours" id="codeCours" value="<?= $value->codeCours ?>">
                                    <button type="submit" class="btn btn-primary btn-sm">
                                        <i class="fa fa-edit"></i>
                                    </button>
                                </form>
                            </td>
                            <?php if (@$_SESSION['autherized'] === "Admin") { ?>
                                <td>
                                    <form action="index.php?controller=cour&task=deleteCour" method="post">
                                        <input type="hidden" name="codeCours" id="codeCours" value="<?= $value->codeCours ?>">
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