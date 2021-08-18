<?php
/**
 * Created by PhpStorm.
 * User: nhat
 * Date: 12/19/17
 * Time: 7:21 PM
 */
require __DIR__ . "/model/Database.php";
require __DIR__ . "/model/BlogDB.php";
require __DIR__ . "/model/Blog.php";
require __DIR__ . "/controller/BlogController.php";

use \Controller\BlogController;

?>
<html>
<head>
    <meta charset="utf-8">
    <title>Personal Blog</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">

</head>
<body>
<div class="container">
    <div class="navbar navbar-default">
        <?php f ?>
        <a class="navbar-brand" href="index.php">My Blog</a><?php f ?>
    </div>

    <?php
    $controller = new \Controller\BlogController();
    $page = isset($_REQUEST['page']) ? $_REQUEST['page'] : NULL;

    switch ($page) {
        case 'insert':
            $controller->insert();
            break;
        default:
            $controller->index();
            break;
    }
    ?>
</div>
</body>
</html>