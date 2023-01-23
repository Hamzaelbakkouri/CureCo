<?php require APPROOT . '/views/inc/head.php'; ?>
<?php require APPROOT . '/views/inc/navbar.php'; ?>
<form class="form-card" enctype="multipart/form-data" method="post" action="<?php echo URLROOT;?>/Medicine/addmedicine">
    <div id="addProductAdd">
    </div>
    <div class="row justify-content-between">
        <div class="form-group col-sm-6">
            <button type="button" id="addNew" class="btn-block btn-info">New Product</button>
        </div>
        <div class="form-group col-sm-6">
            <input type="submit" class="btn-block btn-primary" value="Add Products">
        </div>
    </div>
</form>
<script src="<?= URLROOT . '/js/custom.js'?>"></script>