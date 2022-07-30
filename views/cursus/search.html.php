<div class="container-fluid px-4 mx-auto">

    <h3 class="text-center mt-4">Liste des cursus </h3>

    <div class="row mt-4 mb-3">
        <div class="col-md-9">
            <form action="index.php?controller=cursus&task=recherche" method="post" class="form-inline">
                <input type="text" name="searchDate" id="searchDate" class="form-control" style="width:400px" value="<?= $_POST['searchDate'] ?? "" ?>">
                <button type="submit" class="btn btn-dark ml-2-" style="margin-left:5px ;"><i class="fa fa-search"></i></button>
            </form>
        </div>
        <div class="col-md-3">
            <a href="index.php?controller=cursus&task=new" class="ml-2 btn btn-dark">
                <i class="fa fa-plus fa-lg"></i> Cursus</a>
        </div>
    </div>
    <div class="col-md-12 mx-auto">
        <table class="table table-striped table-hover table-responsive">
            <thead>
                <th>Matricule</th>
                <th>Elèves</th>
                <th>Promotion</th>
                <th>Année Scolaire</th>
                <th>Montant</th>
                <th>Date Transaction</th>
                <th colspan="2">Actions</th>
            </thead>
            <tbody>
                <?php
                foreach ($searchData as $key => $value) {
                ?>
                    <tr>
                        <td><?= $value->matricule ?></td>
                        <td><?= $value->identite ?></td>
                        <td><?= $value->designation ?></td>
                        <td><?= $value->annee ?></td>
                        <td><?= $value->totalApayer ?></td>
                        <td><?= $value->transactionDate ?></td>
                        <td>
                            <form action="index.php?controller=cursus&task=editCursus" method="post">
                                <input type="hidden" name="matricule" id="matricule" value="<?= $value->matricule ?>">
                                <button type="submit" class="btn btn-primary btn-sm">
                                    <i class="fa fa-edit"></i>
                                </button>
                            </form>
                        </td>
                        <?php if (@$_SESSION['autherized'] === "Admin") { ?>
                            <td>
                                <form action="index.php?controller=cursus&task=deleteCursus" method="post">
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