<div class="container-fluid px-4  ">

    <h1 class="mt-4">Périodes</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">Liste des périodes</li>
    </ol>

    <div class="card shadow">
        <div class="card-body">
            <div class="row mt-4 mb-3">
                <div class="col-md-6">
                    <form action="index.php?controller=periode&task=recherche" method="post" class="form-inline">
                        <input type="text" name="searchData" id="searchData" class="form-control" placeholder="Matricule" value="<?= $_POST['searchDate'] ?? "" ?>">
                        <button type="submit" class="btn btn-dark ml-2"><i class="fa fa-search"></i></button>
                    </form>
                    <table class="table table-striped table-hover table-responsive mt-3">
                        <thead>
                            <th>Code Période</th>
                            <th>Désignations</th>
                            <th colspan="2">Actions</th>
                        </thead>
                        <tbody>
                            <?php
                            foreach ($periodes as $key => $value) {
                            ?>
                                <tr>
                                    <td><?= $value->codePeriode ?></td>
                                    <td><?= $value->designation ?></td>
                                    <td>
                                        <form action="index.php?controller=periode&task=editPeriode" method="post">
                                            <input type="hidden" name="codePeriode" id="codePeriode" value="<?= $value->codePeriode ?>">
                                            <button type="submit" class="btn btn-primary btn-sm">
                                                <i class="fa fa-edit"></i>
                                            </button>
                                        </form>
                                    </td>
                                    <?php if (@$_SESSION['autherized'] === "Admin") { ?>
                                        <td>
                                            <form action="index.php?controller=periode&task=deletePeriode" method="post">
                                                <input type="hidden" name="codePeriode" id="codePeriode" value="<?= $value->codePeriode ?>">
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
                <div class="col-md-6">

                    <?php
                    if (isset($_GET['message']))
                        echo $_GET['message'];
                    ?>

                    <h4 class="text-muted text-center mb-3">Identification du période</h4>
                    <form action="index.php?controller=periode&task=save" method="post">
                        <div class="form-group">
                            <input type="text" name="designPeriode" id="designPeriode" class="form-control" placeholder="Désignation">
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-dark btn-block"><i class="fa fa-save"></i> Enregistrer</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>