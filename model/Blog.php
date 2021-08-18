<?php
/**
 * Created by PhpStorm.
 * User: tuan
 * Date: 25/09/2018
 * Time: 08:35
 */
namespace Model;

class Blog
{
    public $title;
    public $content;
    public $created;

    public function __construct($title, $content, $created)
    {
        $this->title = $title;
        $this->content = $content;
        $this->created = $created;
    }
}