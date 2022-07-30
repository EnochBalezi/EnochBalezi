<div class="content">
    <div class="col-md-11 mx-auto mt-4">
        <h4 class="text-muted text-center mb-2">Liste des Promotions</h4>
        <div class="card shadow">
            <div class="card-body">
                <div class="row ">
                    <div class="col-md-9">
                        <form action="index.php?controller=promotion&task=search" method="post" class="form-inline">
                            <input type="search" name="designation" id="designation" class="form-control" value="<?= $_POST['designation'] ?? "" ?>">
                            <button type="submit" class="btn btn-dark ml-2">
                                <i class="fa fa-search"></i>
                            </button>
                        </form>
                    </div>
                    <div class="col-md-3">
                        <a href="index.php?controller=promotion&task=new" class="btn btn-dark"><i class="fa fa-plus fa-lg"></i> Promotion</a>
                    </div>
                </div>

                <table class="table table-striped table-hover mt-3">
                    <thead>
                        <th>Code</th>
                        <th>Désignation</th>
                        <th>Date</th>
                        <th colspan="2">Actions</th>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($promotions as $key => $value) {
                        ?>
                            <tr>
                                <td><?= $value->codePromotion ?></td>
                                <td><?= $value->designation ?></td>
                                <td><?= $value->createdAt ?></td>
                                <td>
                                    <form action="index.php?controller=Promotion&task=editProm" method="post">
                                        <input type="hidden" name="codePromotion" id="codePromotion" value="<?= $value->codePromotion ?>">
                                        <button type="submit" class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></button>
                                    </form>
                                </td>
                                <?php if (@$_SESSION['autherized'] === "Admin") { ?>
                                    <td>
                                        <form action="index.php?controller=Promotion&task=delProm" method="post">
                                            <input type="hidden" name="codePromotion" id="codePromotion" value="<?= $value->codePromotion ?>">
                                            <button onclick="return confirm('Etes-vous sur de vouloir effectué l\'opération de suppression?')" type="submit" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></button>
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
</div>