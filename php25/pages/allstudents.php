<?php session_start();
if (!isset($_SESSION['id']))
{
    header('Location: action.php?pages=log_in');
}
?>

<?php include 'pages/include/header.php';?>

<section>
    <div class="container">
        <div class="row">
            <?php foreach ($students as $student) {?>
            <div class="col-md-4 mb-2">
                <div class="card">
                    <img src="<?php echo $student['image']?>" alt="image" class="card-img-top" style="height: 250px;">
                    <div class="card-body">
                        <h2><?php echo $student['name']?></h2>
                        <p><?php echo $student['email']?></p>
                        <p><?php echo $student['phone']?></p>
                    </div>
                </div>
            </div>
            <?php } ?>
        </div>
    </div>
</section>

<?php include 'pages/include/footer.php';?>
