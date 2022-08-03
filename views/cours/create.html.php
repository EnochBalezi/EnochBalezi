<div class="container-fluid px-4  ">

    <h1 class="mt-4">Cours</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">Création du cours</li>
    </ol>

    <div class="col-md-5 mx-auto">
        <?php
        $outPut = "<div class='alert alert-warning mb-2'>";

        if (isset($_SESSION['message'])) {

            foreach ($_SESSION['message'] as $key => $value) {
                $outPut .= " 
                 <ul>
                    <li><strong>" .  $value . "</strong></li>
                </ul>
                ";
            }
            $outPut .= "</div>";
            echo $outPut;
        }

        ?>

        <div class="card shadow">
            <div class="card-body">
                <form action="index.php?controller=cour&task=save" method="post">
                    <div class="form-group">
                        <input type="text" name="designCour" id="designCour" class="form-control" placeholder="Designation">
                    </div>
                    <div class="form-group">
                        <input type="text" list="listProm" name="promotion" id="promotion" class="form-control" placeholder="Promotion">
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
                        <input type="text" list="listEnseig" name="enseignants" id="enseignants" class="form-control" placeholder="Enseignant">
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
                            Enregistrer
                        </button>
                    </div>
                </form>

            </div>
        </div>
    </div>
</div>