<div class="content">

    <div class="col-md-12 shadow mt-4">
        <h4 class="text-center text-muted mb-4">Liste des élèves par promotion</h4>
        <div class="card shadow-lg">
            <div class="card-body">
                <form action="index.php?controller=rapports&task=rapportEleve" method="post" class="form-inline mb-3">
                    <input type="text" list="listPromotion" name="promotion" id="promotion" class="form-control ml-2" placeholder="Promotions">
                    <datalist id="listPromotion">
                        <?php foreach ($options as $key => $value) {
                        ?>
                            <option value="<?= $value->designation ?>"><?= $value->designation ?></option>
                        <?php
                        } ?>
                    </datalist>
                    <input type="text" list="listAnnee" name="annee" id="annee" class="form-control ml-2" placeholder="Années">
                    <datalist id="listAnnee">
                        <?php foreach ($annees as $key => $value) {
                        ?>
                            <option value="<?= $value->descriptionAnnee ?>"><?= $value->descriptionAnnee ?></option>
                        <?php
                        } ?>
                    </datalist>
                    <button type="submit" class="btn btn-dark ml-2"><i class="fa fa-search fa-lg"></i></button>
                </form>
                <?php if (isset($rapports)) {
                ?>
                    <button class="btn btn-primary btn-dark mb-2">Exporter en Excel</button>
                    <table class="table table-striped table-hover">
                        <thead>
                            <th>Matricule</th>
                            <th>Elèves</th>
                            <th>Promotions</th>
                            <th>Années</th>
                        </thead>
                        <tbody>
                            <?php

                            foreach ($rapports as $key => $value) {
                            ?>
                                <tr>
                                    <td><?= $value->matricule ?></td>
                                    <td><?= $value->identite ?></td>
                                    <td><?= $value->designation ?></td>
                                    <td><?= $value->annee ?></td>
                                </tr>
                            <?php

                            } ?>

                        </tbody>
                    </table>
                <?php } ?>
            </div>
        </div>
    </div>
</div>