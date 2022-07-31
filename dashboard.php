<?php
session_start();
if (!$_SESSION["username"]) {
    header('location:index.php');
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">

    <link rel="stylesheet" href="./CSS/dashboard.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="./CSS/navtest.css">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Dashboard</title>
</head>

<body>
    <div class="outer_container">
        <h1 style="text-align: center;">Welcome to Dashboard</h1>
         <div class="wrapper">
            <!-- <input type="checkbox" id="btn" hidden>
            <label for="btn" class="menu-btn">
                <i class="fas fa-bars"></i>
                <i class="fas fa-times"></i>
            </label> -->
            <nav id="sidebar">
                <ul class="list-items style" style="padding-left: 0px">
                    <li><a href="changepassword.php"><i class="fa fa-key"></i>Change Password</a></li>
                    <div class="icons">
                        <a href="./logout.php" id="logout"><b>Logout</b><i class="fa fa-sign-out" aria-hidden="true"></i></a>
                    </div>
                </ul>
            </nav>
        </div> 

        <div class="content mt-3">

            <div class="shadow-sm p-1 mb-1 bg-white rounded" id="card-item">
                <div class="row mb-3">
                    <div class="col-md-4 shadow-sm p-1 mb-1 bg-white rounded">
                        <div class="card-header bg-success text-white">
                            <h3 class="display-4">Add New Family<small class="text-warning"><?php echo ($student_count['total']); ?></small></h3>
                        </div>
                        <div class="card-footer">
                            <h6>
                                <a href="familyadd.php" class="text-primary">Add<i class="fas fa-arrow-alt-circle-right"></i></a>
                            </h6>
                        </div>
                    </div>
                    <div class="col-md-4 shadow-sm p-1 mb-1 bg-white rounded">
                        <div class="card-header bg-success text-white">
                            <h4 class="display-4">For Card<small class="text-warning"><?php echo ($student_count['total']); ?></small></h4>
                        </div>
                        <div class="card-footer">
                            <h6>
                                <a href="./features/search.php" class="text-primary">Search details <i class="fas fa-arrow-alt-circle-right"></i></a>
                            </h6>
                        </div>
                    </div>
                  
                    <div class="col-md-4 shadow-sm p-1 mb-1 bg-white rounded">
                        <div class="card-header bg-success text-white">
                            <h3 class="display-4">Edit Details<small class="text-warning"><?php echo ($student_count['total']); ?></small></h3>
                        </div>
                        <div class="card-footer">
                            <h6>
                                <a href="./features/editsdetail.php" class="text-primary">Edit family details<i class="fas fa-arrow-alt-circle-right"></i></a>
                            </h6>
                        </div>
                    </div>
                    <?php
                        if($_SESSION["role"]==2){
                    ?>
                      <div class="col-md-4 shadow-sm p-1 mb-1 bg-white rounded">
                        <div class="card-header bg-primary text-white">
                            <h3 class="display-4">Confirm Data Entered <small class="text-warning"><?php echo ($teacher_count['total']); ?></small></h3>
                        </div>
                        <div class="card-footer">
                            <h6>
                                <a href="./features/confirm.php" class="text-primary">Confimation<i class="fas fa-arrow-alt-circle-right"></i></a>
                            </h6>
                        </div>
                    </div>

                    <div class="col-md-4 shadow-sm p-1 mb-1 bg-white rounded">
                        <div class="card-header bg-primary text-white">
                            <h3 class="display-4">Confirm new registrations<small class="text-warning"><?php echo ($teacher_count['total']); ?></small></h3>
                        </div>
                        <div class="card-footer">
                            <h6>
                                <a href="./features/confirmation.php" class="text-primary">Confimation<i class="fas fa-arrow-alt-circle-right"></i></a>
                            </h6>
                        </div>
                    </div>

                    

                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</body>

</html>