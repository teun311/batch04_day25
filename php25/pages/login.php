<?php include 'pages/include/header.php';?>
<section>
    <div class="container py-auto">
        <div class="row">
            <div class="col-md-6 mx-auto">
                <div class="card">
                    <h2 class="card-header">Login</h2>
                    <div class="card-body">
                        <?php if (isset($message)) {?>
                        <h6 class="text-success text-center"><?php echo $message;}?></h6>

                        <form action="action.php" method="post" enctype="multipart/form-data">
                            <div class="form-group row">
                                <label for="" class="col-md-4 col-form-label">User Email</label>
                                <div class="col-md-8">
                                    <input type="email"class="form-control" name="user_email">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="" class="col-md-4 col-form-label">Password</label>
                                <div class="col-md-8">
                                    <input type="password" class="form-control" name="user_pass">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-4"></label>
                                <div class="col-md-8">
                                    <input type="submit" name="log_btn" value="Login" class="btn btn-outline-success btn-block">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include 'pages/include/footer.php';?>
