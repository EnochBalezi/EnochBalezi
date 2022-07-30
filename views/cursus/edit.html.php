<div class="container-fluid px-4">
    <div class="col-md-5 mx-auto mt-5">
        <div class="card shadow-md border-0 rounded-lg ">
            <div class="card-header">
                <h4 class="text-center text-muted">Modifier le Cursus </h4>
            </div>
            <div class="card-body">
                <form action="index.php?controller=cursus&task=edit" method="POST">

                    <div class="form-group">
                        <input type="text" placeholder="Matricule de l'eleve" class="form-control" value="<?= $cursus->matricule ?>">
                        <input type="hidden" name="matriEleve" id="matriEleve" placeholder="Matricule de l'eleve" class="form-control" value="<?= $cursus->matricule ?>">
                    </div>
                    <div class="form-group">
                        <input type="text" list="listAnnee" name="anneSco" id="anneSco" placeholder="Année scolaire" class="form-control" value="<?= $cursus->annee ?>">
                        <datalist id="listAnnee">
                            <?php foreach ($annees as $key => $value) {
                            ?>
                                <option value="<?= $value->descriptionAnnee ?>"><?= $value->descriptionAnnee ?></option>
                            <?php
                            } ?>
                        </datalist>
                    </div>
                    <div class="form-group">
                        <input type="text" list="listProm" name="codePromotion" id="codePromotion" placeholder="Promotion" class="form-control" value="<?= $cursus->codePromotion ?>">
                        <datalist id="listProm">
                            <?php foreach ($options as $key => $value) {
                            ?>
                                <option value="<?= $value->codePromotion ?>"><?= $value->designation ?></option>
                            <?php
                            } ?>
                        </datalist>
                    </div>
                    <div class="form-group">
                        <input type="text" name="montantPaiement" id="montantPaiement" placeholder="Montant à payer" class="form-control" value="<?= $cursus->totalApayer ?>">
                    </div>
                    <div class="form-group">
                        <input type="date" name="dateTransaction" id="dateTransaction" class="form-control" value="<?= $cursus->transactionDate ?>">
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary btn-block">Modifier</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>