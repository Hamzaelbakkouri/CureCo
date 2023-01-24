<?php require APPROOT . '/views/inc/header2.php'; ?>
<?php require APPROOT . '/views/inc/navbar.php'; ?>

<form action="<?php echo URLROOT; ?>/Users/register" method="post" id="form">
    <div class="container mt-5 mb-5">

        <div class="row d-flex align-items-center justify-content-center">

            <div class="col-md-6">


                <div class="card px-5 py-5">
                    <h1 class="text-white text-2xl">ADD A NEW ADMIN</h1>

                    <div class="form-input">


                        <i class="fa fa-envelope"></i>
                        <input type="text" id="email" class="form-control" placeholder="full name" name="nameuse" required>

                    </div>
                    <div class="form-input">


                        <i class="fa fa-envelope"></i>
                        <input type="text" id="email" class="form-control" placeholder="Email address" name="emailuse" required>

                    </div>


                    <div class="form-input">

                        <i class="fa fa-lock"></i>
                        <input type="password" id="password" class="form-control" placeholder="password" name="passuse" required>
                    </div>
                    <div id="small" class=" pl-2 text-red-500 "></div>


                    <button class="btn btn-primary mt-4 signup" name="submit">new admin</button>

                </div>



            </div>

        </div>

    </div>
</form>

<?php require APPROOT . '/views/inc/footer.php'; ?>