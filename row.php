<?php

include_once "dashboard/autoload.php";

$rows = totalRows('products');
$page = 1;
if (isset($_GET['page'])){
    $page = $_GET['page'];
}
$limit = 6;
$offset = $page * $limit - $limit;
$total = ceil($rows/$limit);
$sql = "SELECT * FROM products LIMIT $limit OFFSET $offset";
$show_product = $config->query($sql);

$categories = showAllData('categories');
$result = showAllData('products');
$Trending = showAllDataLimit('products','3');