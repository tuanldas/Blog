<?php
/**
 * Created by PhpStorm.
 * User: tuan
 * Date: 25/09/2018
 * Time: 08:49
 */

namespace Model;

class BlogDB
{
    public $connection;

    public function __construct($connection)
    {
        $this->connection = $connection;
    }

    public function getAll()
    {
        $sql = "SELECT * FROM posts";
        $statement = $this->connection->prepare($sql);
        $statement->execute();
        $result = $statement->fetchAll();
        $posts = [];
        foreach ($result as $row) {
            $post = new Blog($row['title'], $row['content'], $row['Created']);
            $post->id = $row['id'];
            $posts[] = $post;
        }
        return $posts;
    }

    public function insertBlog($title, $content, $created) {
        $sql = "INSERT INTO `posts`(`title`, `content`, `Created`) VALUES (?,?,?)";
        $query = $this->connection->prepare($sql);
        $query->execute(["$title", "$content", "$created"]);
        return $query;
    }
}
