
<?php
    include_once "autoload.php";
    /*
     * All User Show
     */
    $all_user = allUser('users_info');
    $all_categories = allUser('categories');
    $all_products = allUser('products');

    if (isset($_GET['delete'])) {
        $delete = $_GET['delete'];


        deleteFuncation($delete,'users_info',$img= ['file-name'=> 'images/user_photo/']);
        deleteFuncation($delete,'categories',$img= ['file-name'=> 'images/categories/']);
        deleteFuncation($delete, 'products', $img = ['file-name' => 'images/products/']);
    }






