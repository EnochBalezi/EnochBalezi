<div class="content">
    <div class="col-md-6 mx-auto mt-5">
        <div class="card shadow">
            <div class="card-header">
                <h4 class="text-center text-muted">Edition du promotion</h4>
            </div>
            <div class="card-body">
                <form action="index.php?controller=promotion&task=edit" method="post">
                    <div class="form-group">
                        <label for="codePromo">Code Promotion</label>
                        <input type="text" class="form-control" value="<?= $promotion->codePromotion ?>">
                        <input type="hidden" name="codePromo" id="codePromo" class="form-control" value="<?= $promotion->codePromotion ?>">
                    </div>
                    <div class="form-group">
                        <label for="designation">Désignation</label>
                        <input type="text" name="designation" id="designation" class="form-control" value="<?= $promotion->designation ?>">
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-block btn-primary">
                            <i class="fa fa-edit fa-lg"></i> Modifier
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>