<div class="container-fluid px-4">
    <div class="col-md-5 mx-auto mt-5">
        <div class="card shadow-md border-0 rounded-lg ">
            <div class="card-header">
                <h4 class="text-center text-muted">Identifier le Cursus </h4>
            </div>
            <div class="card-body">
                <form action="index.php?controller=cursus&task=save" method="POST">

                    <div class="form-group">
                        <input type="text" list="listEleve" name="matriEleve" id="matriEleve" placeholder="Eleve" class="form-control">
                        <datalist id="listEleve">
                            <?php foreach ($eleves as $key => $value) {
                            ?>
                                <option value="<?= $value->matricule ?>"><?= $value->nom . ' ' . $value->postNom ?></option>
                            <?php
                            } ?>
                        </datalist>
                    </div>

                    <div class="form-group">
                        <input type="text" list="listAnnee" name="anneSco" id="anneSco" placeholder="Année scolaire" class="form-control">
                        <datalist id="listAnnee">
                            <?php foreach ($annees as $key => $value) {
                            ?>
                                <option value="<?= $value->descriptionAnnee ?>"><?= $value->descriptionAnnee ?></option>
                            <?php
                            } ?>
                        </datalist>
                    </div>

                    <div class="form-group">
                        <input type="text" list="listProm" name="codePromotion" id="codePromotion" placeholder="Promotion" class="form-control">
                        <datalist id="listProm">
                            <?php foreach ($options as $key => $value) {
                            ?>
                                <option value="<?= $value->codePromotion ?>"><?= $value->designation ?></option>
                            <?php
                            } ?>
                        </datalist>
                    </div>

                    <div class="form-group">
                        <input type="text" name="montantPaiement" id="montantPaiement" placeholder="Montant à payer" class="form-control">
                    </div>

                    <div class="form-group">
                        <input type="date" name="dateTransaction" id="dateTransaction" class="form-control">
                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn btn-primary btn-block">Enregistrer</button>
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>