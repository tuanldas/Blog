<?php
/**
 * Created by PhpStorm.
 * User: tuan
 * Date: 25/09/2018
 * Time: 09:15
 */


namespace Controller;

use \Model\Blog;
use \Model\BlogDB;
use \Model\Database;

class BlogController
{
    public $blogDB;

    public function __construct()
    {
        $database = new Database("mysql:host=localhost;dbname=blog", "root", "123456");
        $this->blogDB = new BlogDB($database->connect());
    }

    public function index()
    {
        $posts = $this->blogDB->getAll();
        include 'view/list.php';
    }

    public function insert()
    {
        if ($_SERVER['REQUEST_METHOD'] == "GET") {
            include "view/insertBlog.php";
        } else {
            $date = date('Y-m-d H:i:s');
            $insert = $this->blogDB->insertBlog($_POST['title'], $_POST['content'], $date);
            header("Location: index.php?page=list");
        }
    }
}
