<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    <title>Welcome to RumahWeb</title>

    <!-- Bootstrap CSS -->
    <link href="<?= base_url() . 'assets/css/bootstrap.min.css' ?>" rel="stylesheet">
    <!-- styles -->
    <link href="<?php echo base_url() . 'assets/css/style.css' ?>" rel="stylesheet">
</head>

<body>

    <!-- Sign in -->
    <div class="container">
        <div class="row content">
            <div class="col-md-6 mb-3">
                <img src="<?= base_url() . 'assets/img/undraw_enter_uhqk.svg' ?>" class="img-fluid" alt="image">
            </div>
            <div class="col-md-6">
                <form action="<?= base_url() ?>index.php/register/create_account" method="POST">
                    <h2 class="card-title">Sign up</h2>
                    <h6 class="card-subtitle text-muted mb-5">Please sign up to use this site!</h6>
                    <?php echo $this->session->flashdata('msg'); ?>
                    <div class="form-group">
                        <div class="mb-3">
                            <label for="Fullname" class="form-label">Fullname</label>
                            <input name="fullname" type="text" class="form-control" id="fullname" placeholder="Fullname" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="mb-3">
                            <label for="Birthday" class="form-label">Birthday</label>
                            <input name="birthday" type="date" class="form-control" id="birthday" placeholder="Birthday" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <!-- <div class="col-md-5 mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input name="email" type="email" class="form-control" id="email" required>
                        </div> -->
                        <div class="row  mb-3">
                            <label class="form-label">Email</label>
                            <div class="col">
                                <input type="text" class="form-control" name="email" required>
                            </div>
                            <div class="col">
                                <input type="text" class="form-control" name="rumah" value="@rumahweb.co.id" readonly>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" name="password" class="form-control" id="myInput2" placeholder="password" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="mb-3">
                            <label class="form-label">Confirm Password</label>
                            <input type="password" name="confirm_password" class="form-control" id="myInput3" placeholder="password" required>
                        </div>
                    </div>
                    <div class="form-group form-check">
                        <input type="checkbox" name="checkbox" onclick="myFunction2()" class="form-check-input" id="checkbox">
                        <label class="form-check-label">show password</label>
                    </div>
                    <div class="form-group">
                        <div class="d-grid mt-5">
                            <button type="submit" class="btn btn-class">Create Account</button>
                        </div>
                    </div>
                    <div class="mt-4 text-center">
                        <h6 class="card-subtitle text-muted mb-5">Already have an account?<a href="<?= base_url() ?>index.php/welcome">Sign In</a></h6>
                        <h6 class="card-subtitle text-muted mb-5">@2022 Putu Eka Purnama Sari</h6>
                    </div>
                </form>
            </div>
        </div>
        <script src="<?= base_url() . 'assets/js/main.js' ?>"></script>
        <script src="<?= base_url() . 'assets/js//bootstrap.bundle.min.js' ?>"></script>

        <script>
            function myFunction2() {
                var x = document.getElementById("myInput2");
                var y = document.getElementById("myInput3");
                if (x.type === "password" && y.type === "password") {
                    x.type = "text";
                    y.type = "text";
                } else {
                    x.type = "password";
                    y.type = "password";
                }
            }
        </script>

</body>

</html>