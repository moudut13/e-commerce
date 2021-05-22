<?php
session_start();

include_once "autoload.php"?>
<!DOCTYPE html>
<html lang="en" class=" ">
<head>
    <meta charset="utf-8" />
    <title>Singup | Web Application</title>
    <meta name="description" content="app, web app, responsive, admin dashboard, admin, flat, flat ui, ui kit, off screen nav" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <link rel="stylesheet" href="css/app.v1.css" type="text/css" />
    <!--[if lt IE 9]> <script src="js/ie/html5shiv.js"></script> <script src="js/ie/respond.min.js"></script> <script src="js/ie/excanvas.js"></script> <![endif]-->
</head>

<body class="">
    <?php
        include_once "row-code-signup.php";
    ?>
    <section id="content" class="m-t-lg wrapper-md animated fadeInDown">
        <div class="container aside-xl"> <a class="navbar-brand block" href="index.php">Shuvo e-commerce</a>
            <section class="m-b-lg">
                <header class="wrapper text-center"> <strong>Sign up to find interesting thing</strong> </header>
                <?php if (isset($msg)){echo $msg;}?>
                <form action="#" method="POST" enctype="multipart/form-data">
                    <div class="list-group">
                        <div class="list-group-item">
                            <input name="name" type="text" placeholder="Name" class="form-control no-border" value="<?php if (isset($_POST['name'])){echo $data = $_POST['name'];}?>">
                        </div>
                        <div class="list-group-item">
                            <input name="username" type="text" placeholder="User Name" class="form-control no-border" value="<?php if (isset($_POST['username'])){echo $data = $_POST['username'];}?>">
                        </div>
                        <div class="list-group-item">
                            <input name="email" type="text" placeholder="Email" class="form-control no-border" value="<?php if (isset($_POST['email'])){echo $data = $_POST['email'];}?>">
                        </div>
                        <div class="list-group-item">
                            <input name="cell" type="text" placeholder="Phone Number" class="form-control no-border" value="<?php if (isset($_POST['cell'])){echo $data = $_POST['cell'];}?>">
                        </div>
                        <div class="list-group-item">
                            <input name="password" type="password" placeholder="Password" class="form-control no-border">
                        </div>
                        <div class="list-group-item">
                            <input name="gender" type="radio" checked value="Male" id="Male"> <label for="Male">Male</label>
                            <input name="gender" type="radio" value="Female" id="Female"> <label for="Female">Female</label>
                        </div>
                        <div class="list-group-item">
                            <img id="load_student_photo" style="max-width:100% ;" src="" alt="">
                            <br>
                            <label for="student_photo"> <img width="100px" id="view_photo" src="images/img/up.png" alt=""></label>
                            <input name="photo" id="student_photo" style="display:none;" class="form-control" type="file">
                        </div>
                    </div>
                    <div class="checkbox m-b">
                        <label>
                            <input name="check" type="checkbox"> Agree the <a href="#">terms and policy</a>
                        </label>
                    </div>
                    <button type="submit" class="btn btn-lg btn-primary btn-block" name="singup">Sign up</button>
                    <div class="line line-dashed"></div>
                    <p class="text-muted text-center"><small>Already have an account?</small></p> <a href="signin.php" class="btn btn-lg btn-default btn-block">Sign in</a>
                </form>
            </section>
        </div>
    </section>
    <!-- footer -->
    <footer id="footer">
        <div class="text-center padder clearfix">
            <p> <small>Web app Shuvo e-commerce department by Moudut<br>&copy; 2021</small> </p>
        </div>
    </footer>
    <!-- / footer -->
    <!-- Bootstrap -->
    <!-- App -->
    <script src="js/app.v1.js"></script>
    <script src="js/app.plugin.js"></script>
    <script>
        $('input[name="photo"]').change(function (e){
            let file_url = URL.createObjectURL(e.target.files[0]);
            $('img#view_photo').attr('src',file_url);
        });

    </script>
</body>
<!-- Mirrored from flatfull.com/themes/scale/signup.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 13 Jul 2019 15:15:07 GMT -->

</html>