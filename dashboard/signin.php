<?php
    session_start();
if (isset($_SESSION['login'])){
    header("location:index.php");
}
?>
<?php
    include_once "autoload.php";
?>
<!DOCTYPE html>
<html lang="en" class=" ">
<!-- Mirrored from flatfull.com/themes/scale/signin.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 13 Jul 2019 15:15:07 GMT -->

<head>
    <meta charset="utf-8" />
    <title>Scale | Web Application</title>
    <meta name="description" content="app, web app, responsive, admin dashboard, admin, flat, flat ui, ui kit, off screen nav" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <link rel="stylesheet" href="css/app.v1.css" type="text/css" />
    <!--[if lt IE 9]> <script src="js/ie/html5shiv.js"></script> <script src="js/ie/respond.min.js"></script> <script src="js/ie/excanvas.js"></script> <![endif]-->
</head>

<body class="">
    <?php
        if (isset($_POST['login'])){
            $username = null;
            $password = null;
            $username = $_POST['username'];
            $pass = $_POST['password'];
            $sql = "SELECT * FROM users_info WHERE username = '$username'";

            $result = $config->query($sql);
            $row = $result->fetch_object();
            //print_r($row);
            echo $row->username;
            //echo "<br>";
            //echo "<br>";
            //echo $row->password;
            if ($username == $row->username){
                $password = encrypted($pass);
                if ($password == $row->password){
                        if ($row->status == 'Active'){
                            $_SESSION['login'] = $username;
                            header("Location:index.php");
                        }else{
                            $msg = validation("Your User Account Inactive");
                        }
                }else{
                    $msg = validation("Incorrect Your Password");
                }
            }else{
                $msg = validation("Invalid Your User Name");
            }

        }
    ?>
    <section id="content" class="m-t-lg wrapper-md animated fadeInUp">
        <div class="container aside-xl"> <a class="navbar-brand block" href="index.php">Scale</a>
            <section class="m-b-lg">
                <header class="wrapper text-center"> <strong>Sign in to get in touch</strong> </header>
                <?php if (isset($msg)){echo $msg;}?>
                <form action="" method="POST">
                    <div class="list-group">
                        <div class="list-group-item">
                            <input name="username" type="text" placeholder="User Name" class="form-control no-border"> </div>
                        <div class="list-group-item">
                            <input name="password" type="password" placeholder="Password" class="form-control no-border"> </div>
                    </div>
                    <div class="list-group-item">
                        <input name="login" value="Login" type="submit" class="btn btn-lg btn-primary btn-block">
                    </div>
                    <div class="text-center m-t m-b"><a href="#"><small>Forgot password?</small></a></div>
                    <div class="line line-dashed"></div>
                    <p class="text-muted text-center"><small>Do not have an account?</small></p> <a href="signup.php" class="btn btn-lg btn-default btn-block">Create an account</a> </form>
            </section>
        </div>
    </section>
    <!-- footer -->
    <footer id="footer">
        <div class="text-center padder">
            <p> <small>Web app Web app Shuvo e-commerce department by Moudut<br>&copy; 2021</small> </p>
        </div>
    </footer>
    <!-- / footer -->
    <!-- Bootstrap -->
    <!-- App -->
    <script src="js/app.v1.js"></script>
    <script src="js/app.plugin.js"></script>
</body>
<!-- Mirrored from flatfull.com/themes/scale/signin.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 13 Jul 2019 15:15:07 GMT -->

</html>