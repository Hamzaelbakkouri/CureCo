<?php require APPROOT . '/views/inc/header2.php'; ?>
<?php require APPROOT . '/views/inc/navbar.php'; ?>

<form action="<?php echo URLROOT; ?>/Users/login" method="post">
    <div class="container mt-5 mb-5">

        <div class="row d-flex align-items-center justify-content-center">

            <div class="col-md-6">


                <div class="card px-5 py-5">
                    <h2>login</h2>

                    <div class="form-input">


                        <i class="fa fa-envelope"></i>
                        <input type="text" class="form-control" placeholder="Email address" name="emailuse" required>

                    </div>


                    <div class="form-input">

                        <i class="fa fa-lock"></i>
                        <input type="password" class="form-control" placeholder="password" name="passuse" required>

                    </div>


                    <button class="btn btn-primary mt-4 signup" name="submit">login</button>

                </div>



            </div>

        </div>

    </div>
</form>

<?php require APPROOT . '/views/inc/footer.php'; ?>