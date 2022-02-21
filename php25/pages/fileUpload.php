<?php
session_start();if (!isset($_SESSION['id']))
{
    header('Location: action.php?pages=log_in');
}?>

<?php include 'pages/include/header.php';?>

<section class="py-3">
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <div class="card ">
                    <div class="card-header">
                        <h3 class="card-title"> Student Form</h3>
                    </div>
                    <div class="card-body ">
                        <?php if (isset($message)) {?>
                        <h6 class="text-success text-center"><?php echo $message;}?></h6>
                        <div >
                            <form action="action.php" method="post" enctype="multipart/form-data">
                                <div class="form-group row">
                                    <label for="" class="col-md-4 form-check-label">Student Name</label>
                                    <div class="col-md-8">
                                        <input type="text" name="s_name" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="" class="col-md-4 form-check-label">Student Email</label>
                                    <div class="col-md-8">
                                        <input type="email" name="s_email" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="" class="col-md-4 form-check-label">Phone</label>
                                    <div class="col-md-8">
                                        <input type="number" name="s_number" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="" class="col-md-4 form-check-label">Image</label>
                                    <div class="col-md-8">
                                        <input type="file" name="s_image" accept="image/*">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="" class="col-md-4 "></label>
                                    <div class="col-md-8">
                                        <input type="submit" name="btn" value="save Info" class="btn btn-outline-success btn-block">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>



<?php include 'pages/include/footer.php';?>
