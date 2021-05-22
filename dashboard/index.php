<?php
session_start();
if (!isset($_SESSION['login'])){
    header("location:signin.php");
}

?>
<!DOCTYPE html>
<html lang="en" class="app">
<head>
    <meta charset="utf-8" />
    <title>Scale | Web Application</title>
    <meta name="description" content="app, web app, responsive, admin dashboard, admin, flat, flat ui, ui kit, off screen nav" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <link rel="stylesheet" href="css/app.v1.css" type="text/css" />
    <link rel="stylesheet" href="css/switch.css" type="text/css" />
    <link rel="stylesheet" href="js/calendar/bootstrap_calendar.css" type="text/css" />
    <!--[if lt IE 9]> <script src="js/ie/html5shiv.js"></script> <script src="js/ie/respond.min.js"></script> <script src="js/ie/excanvas.js"></script> <![endif]-->
</head>

<body class="">

    <?php include_once "row-code-index.php"; ?>



    <section class="vbox">
        <header class="bg-white header header-md navbar navbar-fixed-top-xs box-shadow">
            <div class="navbar-header aside-md dk">
                <a class="btn btn-link visible-xs" data-toggle="class:nav-off-screen,open" data-target="#nav,html"> <i class="fa fa-bars"></i> </a>
                <a href="index.php" class="navbar-brand"> <img src="images/logo.png" class="m-r-sm" alt="scale"> <span class="hidden-nav-xs">Scale</span> </a>
                <a class="btn btn-link visible-xs" data-toggle="dropdown" data-target=".user"> <i class="fa fa-cog"></i> </a>
            </div>
            <ul class="nav navbar-nav hidden-xs">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"> <i class="i i-grid"></i> </a>
                    <section class="dropdown-menu aside-lg bg-white on animated fadeInLeft">
                        <div class="row m-l-none m-r-none m-t m-b text-center">
                            <div class="col-xs-4">
                                <div class="padder-v">
                                    <a href="#"> <span class="m-b-xs block"> <i class="i i-mail i-2x text-primary-lt"></i> </span> <small class="text-muted">Mailbox</small> </a>
                                </div>
                            </div>
                            <div class="col-xs-4">
                                <div class="padder-v">
                                    <a href="#"> <span class="m-b-xs block"> <i class="i i-calendar i-2x text-danger-lt"></i> </span> <small class="text-muted">Calendar</small> </a>
                                </div>
                            </div>
                            <div class="col-xs-4">
                                <div class="padder-v">
                                    <a href="#"> <span class="m-b-xs block"> <i class="i i-map i-2x text-success-lt"></i> </span> <small class="text-muted">Map</small> </a>
                                </div>
                            </div>
                            <div class="col-xs-4">
                                <div class="padder-v">
                                    <a href="#"> <span class="m-b-xs block"> <i class="i i-paperplane i-2x text-info-lt"></i> </span> <small class="text-muted">Trainning</small> </a>
                                </div>
                            </div>
                            <div class="col-xs-4">
                                <div class="padder-v">
                                    <a href="#"> <span class="m-b-xs block"> <i class="i i-images i-2x text-muted"></i> </span> <small class="text-muted">Photos</small> </a>
                                </div>
                            </div>
                            <div class="col-xs-4">
                                <div class="padder-v">
                                    <a href="#"> <span class="m-b-xs block"> <i class="i i-clock i-2x text-warning-lter"></i> </span> <small class="text-muted">Timeline</small> </a>
                                </div>
                            </div>
                        </div>
                    </section>
                </li>
            </ul>
            <form class="navbar-form navbar-left input-s-lg m-t m-l-n-xs hidden-xs" role="search">
                <div class="form-group">
                    <div class="input-group"> <span class="input-group-btn"> <button type="submit" class="btn btn-sm bg-white b-white btn-icon"><i class="fa fa-search"></i></button> </span>
                        <input type="text" class="form-control input-sm no-border" placeholder="Search apps, projects..."> </div>
                </div>
            </form>
            <ul class="nav navbar-nav navbar-right m-n hidden-xs nav-user user">
                <li class="hidden-xs">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"> <i class="i i-chat3"></i> <span class="badge badge-sm up bg-danger count">2</span> </a>
                    <section class="dropdown-menu aside-xl animated flipInY">
                        <section class="panel bg-white">
                            <div class="panel-heading b-light bg-light"> <strong>You have <span class="count">2</span> notifications</strong> </div>
                            <div class="list-group list-group-alt">
                                <a href="#" class="media list-group-item"> <span class="pull-left thumb-sm"> <img src="images/a0.png" alt="..." class="img-circle"> </span> <span class="media-body block m-b-none"> Use awesome animate.css<br> <small class="text-muted">10 minutes ago</small> </span> </a>
                                <a href="#" class="media list-group-item"> <span class="media-body block m-b-none"> 1.0 initial released<br> <small class="text-muted">1 hour ago</small> </span> </a>
                            </div>
                            <div class="panel-footer text-sm"> <a href="#" class="pull-right"><i class="fa fa-cog"></i></a> <a href="#notes" data-toggle="class:show animated fadeInRight">See all the notifications</a> </div>
                        </section>
                    </section>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"> <span class="thumb-sm avatar pull-left"> <img src="images/a0.png" alt="..."> </span> John.Smith <b class="caret"></b> </a>
                    <ul class="dropdown-menu animated fadeInRight">
                        <li> <span class="arrow top"></span> <a href="#">Settings</a> </li>
                        <li> <a href="#">Profile</a> </li>
                        <li>
                            <a href="#"> <span class="badge bg-danger pull-right">3</span> Notifications </a>
                        </li>
                        <li> <a href="#">Help</a> </li>
                        <li class="divider"></li>
                        <li> <a href="logout.php" data-toggle="ajaxModal">Logout</a> </li>
                    </ul>
                </li>
            </ul>
        </header>










        <section>
            <section class="hbox stretch">
                <!-- .aside -->
                <aside class="bg-black aside-md hidden-print hidden-xs" id="nav">
                    <section class="vbox">
                        <section class="w-f scrollable">
                            <div class="slim-scroll" data-height="auto" data-disable-fade-out="true" data-distance="0" data-size="10px" data-railOpacity="0.2">
                                <div class="clearfix wrapper dk nav-user hidden-xs">
                                    <div class="dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"> <span class="thumb avatar pull-left m-r"> <img src="images/a0.png" class="dker" alt="..."> <i class="on md b-black"></i> </span> <span class="hidden-nav-xs clear"> <span class="block m-t-xs"> <strong class="font-bold text-lt">Shuvo Khondoker</strong> <b class="caret"></b> </span> <span class="text-muted text-xs block">Art Director</span> </span>
                                        </a>
                                        <ul class="dropdown-menu animated fadeInRight m-t-xs">
                                            <li> <span class="arrow top hidden-nav-xs"></span> <a href="#">Settings</a> </li>
                                            <li> <a href="">Profile</a> </li>
                                            <li>
                                                <a href="#"> <span class="badge bg-danger pull-right">3</span> Notifications </a>
                                            </li>
                                            <li> <a href="">Help</a> </li>
                                            <li class="divider"></li>
                                            <li> <a href="logout.php" data-toggle="ajaxModal">Logout</a> </li>
                                        </ul>
                                    </div>
                                </div>












                                <!-- nav -->
                                <nav class="nav-primary hidden-xs">
                                    <div class="text-muted text-sm hidden-nav-xs padder m-t-sm m-b-sm">Start</div>
                                    <ul class="nav nav-main" data-ride="collapse">
                                        <li class="active">
                                            <a href="index.php" class="auto"> <i class="i i-statistics icon"> </i> <span class="font-bold">Overview</span> </a>
                                        </li>
                                    </ul>
                                    <div class="line dk hidden-nav-xs"></div>
                                    <div class="text-muted text-xs hidden-nav-xs padder m-t-sm m-b-sm">All Data</div>
                                    <ul class="nav">
                                        <li>
                                            <a href="users.php"> <i class="i i-circle-sm text-info-dk"></i> <span>All User</span> </a>
                                        </li>
                                        <li>
                                            <a href="categories.php"> <i class="i i-circle-sm text-danger-dk"></i> <span>All Categories</span> </a>
                                        </li>
                                        <li>
                                            <a href="product.php"> <i class="i i-circle-sm text-danger-dk"></i> <span>All Products</span> </a>
                                        </li>
                                        <li>
                                            <a href="media.php"> <i class="i i-circle-sm text-danger-dk"></i> <span>Media</span> </a>
                                        </li>
                                        <li>
                                            <a href="logout.php"> <i class="i i-circle-sm text-danger-dk"></i> <span>Logout</span> </a>
                                        </li>
                                    </ul>
                                </nav>
                                <!-- / nav -->
                            </div>
                        </section>













                        <footer class="footer hidden-xs no-padder text-center-nav-xs">
                            <a href="#" data-toggle="ajaxModal" class="btn btn-icon icon-muted btn-inactive pull-right m-l-xs m-r-xs hidden-nav-xs"> <i class="i i-logout"></i> </a>
                            <a href="#nav" data-toggle="class:nav-xs" class="btn btn-icon icon-muted btn-inactive m-l-xs m-r-xs"> <i class="i i-circleleft text"></i> <i class="i i-circleright text-active"></i> </a>
                        </footer>
                    </section>
                </aside>
                <!-- /.aside -->









				<!-- MAIN CONTENT  -->
                <section id="content">
                    <section class="hbox stretch">
                        <section>
                            <section class="vbox">
                                <section class="scrollable padder">



                                    <section class="row m-b-md">
                                        <div class="col-sm-6">
                                            <h3 class="m-b-xs text-black">Dashboard</h3> <small>Welcome back, Shuvo Khondoker, <i class="fa fa-map-marker fa-lg text-primary"></i> Sirajganj</small> </div>
                                        <div class="col-sm-6 text-right text-left-xs m-t-md">
                                            <div class="btn-group"> <a class="btn btn-rounded btn-default b-2x dropdown-toggle" data-toggle="dropdown">Widgets <span class="caret"></span></a>
                                                <ul class="dropdown-menu text-left pull-right">
                                                    <li><a href="#">Notification</a></li>
                                                    <li><a href="#">Messages</a></li>
                                                    <li><a href="#">Analysis</a></li>
                                                    <li class="divider"></li>
                                                    <li><a href="#">More settings</a></li>
                                                </ul>
                                            
                                    </section>







                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="panel b-a">
                                                <div class="row m-n">
                                                    <!--<div class="col-md-6 b-b b-r">
                                                      <a href="#" class="block padder-v hover"> <span class="i-s i-s-2x pull-left m-r-sm"> <i class="i i-hexagon2 i-s-base text-danger hover-rotate"></i> <i class="i i-plus2 i-1x text-white"></i> </span> <span class="clear"> <span class="h3 block m-t-xs text-danger">200</span> <small class="text-muted text-u-c">All Students</small> </span>
                                                       </a>
                                                   </div>-->
                                                    <div class="col-md-6 b-b">
                                                        <a href="#" class="block padder-v hover"> <span class="i-s i-s-2x pull-left m-r-sm"> <i class="i i-hexagon2 i-s-base text-success-lt hover-rotate"></i> <i class="i i-users2 i-sm text-white"></i> </span> <span class="clear"> <span class="h3 block m-t-xs text-success"><?php if (isset($all_user)){echo $all_user;}?></span> <small class="text-muted text-u-c">All User</small> </span>
                                                        </a>
                                                    </div>
                                                    <div class="col-md-6 b-b b-r">
                                                        <a href="#" class="block padder-v hover"> <span class="i-s i-s-2x pull-left m-r-sm"> <i class="i i-hexagon2 i-s-base text-info hover-rotate"></i> <i class="i i-location i-sm text-white"></i> </span> <span class="clear"> <span class="h3 block m-t-xs text-info"><?php if (isset($all_categories)){echo $all_categories;}?></span> <small class="text-muted text-u-c">All Categories</small> </span>
                                                        </a>
                                                    </div>
                                                    <div class="col-md-6 b-b">
                                                        <a href="#" class="block padder-v hover"> <span class="i-s i-s-2x pull-left m-r-sm"> <i class="i i-hexagon2 i-s-base text-primary hover-rotate"></i> <i class="i i-alarm i-sm text-white"></i> </span> <span class="clear"> <span class="h3 block m-t-xs text-primary"><?php if (isset($all_products)){echo $all_products;}?></span> <small class="text-muted text-u-c">All Products</small> </span>
                                                        </a>
                                                    </div>
                                                    <div class="col-md-6 b-b">
                                                        <a href="#" class="block padder-v hover"> <span class="i-s i-s-2x pull-left m-r-sm"> <i class="i i-hexagon2 i-s-base text-primary hover-rotate"></i> <i class="i i-alarm i-sm text-white"></i> </span> <span class="clear"> <span class="h3 block m-t-xs text-primary">3</span> <small class="text-muted text-u-c">Order Products</small> </span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3 col-sm-6">
                                            <div class="panel b-a">
                                                <div class="panel-heading no-border bg-primary lt text-center">
                                                    <a href="#"> <i class="fa fa-facebook fa fa-3x m-t m-b text-white"></i> </a>
                                                </div>
                                                <div class="padder-v text-center clearfix">
                                                    <div class="col-xs-6 b-r">
                                                        <div class="h3 font-bold">42k</div> <small class="text-muted">Friends</small> </div>
                                                    <div class="col-xs-6">
                                                        <div class="h3 font-bold">90</div> <small class="text-muted">Feeds</small> </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3 col-sm-6">
                                            <div class="panel b-a">
                                                <div class="panel-heading no-border bg-info lter text-center">
                                                    <a href="#"> <i class="fa fa-twitter fa fa-3x m-t m-b text-white"></i> </a>
                                                </div>
                                                <div class="padder-v text-center clearfix">
                                                    <div class="col-xs-6 b-r">
                                                        <div class="h3 font-bold">27k</div> <small class="text-muted">Tweets</small> </div>
                                                    <div class="col-xs-6">
                                                        <div class="h3 font-bold">15k</div> <small class="text-muted">Followers</small> </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-3 hide">
                                            <section class="panel b-a">
                                                <header class="panel-heading b-b b-light">
                                                    <ul class="nav nav-pills pull-right">
                                                        <li>
                                                            <a href="ajax.pie.html" class="text-muted" data-bjax data-target="#b-c"> <i class="i i-cycle"></i> </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="panel-toggle text-muted"> <i class="i i-plus text-active"></i> <i class="i i-minus text"></i> </a>
                                                        </li>
                                                    </ul> Connection </header>
                                                <div class="panel-body text-center bg-light lter" id="b-c">
                                                    <div class="easypiechart inline m-b m-t" data-percent="60" data-line-width="4" data-bar-Color="#23aa8c" data-track-Color="#c5d1da" data-color="#2a3844" data-scale-Color="false" data-size="120" data-line-cap='butt' data-animate="2000">
                                                        <div> <span class="h2 m-l-sm step"></span>%
                                                            <div class="text text-xs">completed</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </section>
                                        </div>
                                    </div>
                                    <br>
                                    <br>
                                    <br>


                                    <div class="row" id="allusers">
                                        <div class="col-sm-12">
                                            <div class="panel b-a">
                                                <div class="row m-n">
                                                    <div class="col-md-12 b-b b-r">
                                                        <div class="card shadow">
                                                            <div class="card-body">
                                                                <h2>All Users</h2>
                                                                <table class="table table-striped">
                                                                    <thead>
                                                                    <tr>
                                                                        <th>#</th>
                                                                        <th>Name</th>
                                                                        <th>User Name</th>
                                                                        <th>Email</th>
                                                                        <th>Cell</th>
                                                                        <th>Gender</th>
                                                                        <th>Photo</th>
                                                                        <th>Action</th>
                                                                    </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                    <?php
                                                                    /*
                                                                     * Show all Data of Users_info Table .
                                                                     */
                                                                    $result = showAllData('users_info');
                                                                    $n = 1;
                                                                    while ($row = $result->fetch_object()):
                                                                    ?>
                                                                    <tr>
                                                                        <td><?php if (isset($n)){$n;echo $n++;}?></td>
                                                                        <td><?php echo $row->name;?></td>
                                                                        <td><?php echo $row->username;?></td>
                                                                        <td><?php echo $row->email;?></td>
                                                                        <td><?php echo $row->phone;?></td>
                                                                        <td><?php echo $row->gender;?></td>
                                                                        <td><img style="width: 70px;" src="images/user_photo/<?php echo $row->image;?>"></td>
                                                                        <td>
                                                                            <a class="btn btn-sm btn-info" href="#">View</a>
                                                                            <a class="btn btn-sm btn-warning" href="">Edit</a>
                                                                            <a class="btn btn-sm btn-danger" id="delete_id" onclick="$('#delete_id').alert(window.alert('Are you sure to delete?'));"href="?delete=<?php echo $row->id;?>&&image=<?php echo $row->photo;?>">Delete</a>
                                                                        </td>
                                                                    </tr>
                                                                    <?php endwhile;?>
                                                                    </tbody>
                                                                </table>
                                                                <div>
                                                                    <nav aria-label="Page navigation example">
                                                                        <ul class="pagination">
                                                                            <li class="page-item">
                                                                                <a class="page-link" href="users.php" aria-label="more">
                                                                                    <span aria-hidden="true">More...</span>
                                                                                </a>
                                                                            </li>
                                                                        </ul>
                                                                    </nav>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row" id="allcategories">
                                        <div class="col-sm-12">
                                            <div class="panel b-a">
                                                <div class="row m-n">
                                                    <div class="col-md-12 b-b b-r">
                                                        <div class="card shadow">
                                                            <div class="card-body">
                                                                <h2>All Categories</h2>
                                                                <table class="table table-striped">
                                                                    <thead>
                                                                    <tr>
                                                                        <th>#</th>
                                                                        <th>Categories Name</th>
                                                                        <th>Categories Id</th>
                                                                        <th>Categories Photo</th>
                                                                        <th>Show</th>
                                                                        <th>Action</th>
                                                                    </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        <?php
                                                                            $results = showAllData('categories');
                                                                            $num = 1;
                                                                            while ($cat = $results -> fetch_object()):
                                                                        ?>
                                                                        <tr>
                                                                            <td><?php if ($num){$num;echo $num++;}?></td>
                                                                            <td><?php echo $cat->categories_name;?></td>
                                                                            <td><?php echo $cat->categories_id;?></td>
                                                                            <td><img style="width: 70px;" src="images/categories/<?php echo $cat->categories_photo;?>"></td>
                                                                            <td>
                                                                                <label class="switchs">
                                                                                    <input type="checkbox">
                                                                                    <span class="sliders round"></span>
                                                                                </label
                                                                            </td>
                                                                            <td>
                                                                                <a class="btn btn-sm btn-info" href="#">View</a>
                                                                                <a class="btn btn-sm btn-warning" href="#">Edit</a>
                                                                                <a class="btn btn-sm btn-danger" id="delete_id" onclick="$('#delete_id').alert(window.alert('Are you sure to delete?'));" href="?delete=<?php echo $cat->id;?>&&image=<?php echo $cat->categories_photo;?>">Delete</a>
                                                                            </td>
                                                                        </tr>
                                                                        <?php
                                                                            endwhile;
                                                                        ?>
                                                                    </tbody>
                                                                </table>
                                                                <div>
                                                                    <nav aria-label="Page navigation example">
                                                                        <ul class="pagination">
                                                                            <li class="page-item">
                                                                                <a class="page-link" href="categories.php" aria-label="more">
                                                                                    <span aria-hidden="true">More...</span>
                                                                                </a>
                                                                            </li>
                                                                        </ul>
                                                                    </nav>
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row" id="allproducts">
                                        <div class="col-sm-12">
                                            <div class="panel b-a">
                                                <div class="row m-n">
                                                    <div class="col-md-12 b-b b-r">
                                                        <div class="card shadow">
                                                            <div class="card-body">
                                                                <h2>All Products</h2>
                                                                <table class="table table-striped">
                                                                    <thead>
                                                                    <tr>
                                                                        <th>#</th>
                                                                        <th>Product Name</th>
                                                                        <th>Products Categorie</th>
                                                                        <th>Product Id</th>
                                                                        <th>Product Price Original</th>
                                                                        <th>Product Price Discount</th>
                                                                        <th>Photo</th>
                                                                        <th>Show</th>
                                                                        <th>Action</th>
                                                                    </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                    <?php
                                                                        $num = 1;
                                                                       $show_product = showAllData('products');
                                                                        while ($rows= $show_product->fetch_object()):
                                                                    ?>
                                                                    <tr>
                                                                        <td><?php $num;echo $num++;?></td>
                                                                        <td><?php echo $rows->productname;?></td>
                                                                        <td><?php echo $rows->productscategorie;?></td>
                                                                        <td><?php echo $rows->productid;?></td>
                                                                        <td><?php echo $rows->priceoriginal;?></td>
                                                                        <td><?php echo $rows->pricediscount;?></td>
                                                                        <td><img style="width: 70px;" src="images/products/<?php echo $rows->photo;?>"></td>
                                                                        <td>
                                                                            <label class="switchs">
                                                                                <input type="checkbox">
                                                                                <span class="sliders round"></span>
                                                                            </label
                                                                        </td>
                                                                        <td>
                                                                            <a class="btn btn-sm btn-info" href="#">View</a>
                                                                            <a class="btn btn-sm btn-warning" href="#">Edit</a>
                                                                            <a href="?delete=<?php echo $rows->id;?>&&image=<?php echo $rows->photo;?>" class="btn btn-sm btn-danger" id="delete_id" onclick="$('#delete_id').alert(window.alert('Are you sure to delete?'));">delete</a>
                                                                        </td>
                                                                    </tr>
                                                                    <?php endwhile;?>
                                                                    </tbody>
                                                                </table>
                                                                <div>
                                                                    <nav aria-label="Page navigation example">
                                                                        <ul class="pagination">
                                                                            <li class="page-item">
                                                                                <a class="page-link" href="product.php" aria-label="more">
                                                                                    <span aria-hidden="true">More...</span>
                                                                                </a>
                                                                            </li>
                                                                        </ul>
                                                                    </nav>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>





                                </section>
                            </section>
                        </section>

                    </section>
                    <a href="#" class="hide nav-off-screen-block" data-toggle="class:nav-off-screen,open" data-target="#nav,html"></a>
                </section>


















            </section>
        </section>
    </section>
    <!-- Bootstrap -->








    <!-- App -->
    <script src="js/app.v1.js"></script>
    <script src="js/charts/easypiechart/jquery.easy-pie-chart.js"></script>
    <script src="js/charts/sparkline/jquery.sparkline.min.js"></script>
    <script src="js/charts/flot/jquery.flot.min.js"></script>
    <script src="js/charts/flot/jquery.flot.tooltip.min.js"></script>
    <script src="js/charts/flot/jquery.flot.spline.js"></script>
    <script src="js/charts/flot/jquery.flot.pie.min.js"></script>
    <script src="js/charts/flot/jquery.flot.resize.js"></script>
    <script src="js/charts/flot/jquery.flot.grow.js"></script>
    <script src="js/charts/flot/demo.js"></script>
    <script src="js/calendar/bootstrap_calendar.js"></script>
    <script src="js/calendar/demo.js"></script>
    <script src="js/sortable/jquery.sortable.js"></script>
    <script src="js/app.plugin.js"></script>
</body>
<!-- Mirrored from flatfull.com/themes/scale/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 13 Jul 2019 15:14:15 GMT -->

</html>