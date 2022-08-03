<div class="container-fluid px-4  ">

    <h1 class="mt-4">Cours</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">Modification du cours</li>
    </ol>

    <div class="col-md-5 mx-auto">
        <?php

        ?>

        <div class="card shadow">
            <div class="card-body">
                <form action="index.php?controller=cour&task=edit" method="post">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Designation" value="<?= $cours->codeCours ?>">
                        <input type="hidden" name="codeCours" id="codeCours" class="form-control" placeholder="Designation" value="<?= $cours->codeCours ?>">
                    </div>

                    <div class="form-group">
                        <input type="text" name="designCour" id="designCour" class="form-control" placeholder="Designation" value="<?= $cours->designationCours ?>">
                    </div>
                    <div class="form-group">
                        <input type="text" list="listProm" name="promotion" id="promotion" class="form-control" placeholder="Promotion" value="<?= $cours->promotion ?>">
                        <datalist id="listProm">
                            <?php
                            foreach ($promotions as $key => $value) {
                            ?>
                                <option value="<?= $value->codePromotion ?>"><?= $value->designation ?></option>
                            <?php }
                            ?>
                        </datalist>
                    </div>
                    <div class="form-group">
                        <input type="text" list="listEnseig" name="enseignants" id="enseignants" class="form-control" placeholder="Enseignant" value="<?= $cours->enseignant ?>">
                        <datalist id="listEnseig">
                            <?php
                            foreach ($enseignants as $key => $value) {
                            ?>
                                <option value="<?= $value->matricule ?>"><?= $value->nom . ' ' . $value->postNom ?></option>
                            <?php }
                            ?>
                        </datalist>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-dark btn-block"><i class="fa fa-save"></i>
                            Modifier
                        </button>
                    </div>
                </form>

            </div>
        </div>
    </div>
</div>