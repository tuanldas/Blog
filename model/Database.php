<?php
/**
 * Created by PhpStorm.
 * User: tuan
 * Date: 25/09/2018
 * Time: 08:41
 */

namespace Model;
use PDO;

class Database
{
    public $dbname;
    public $username;
    public $password;

    public function __construct($dbname, $username, $password)
    {
        $this->dsn = $dbname;
        $this->password = $password;
        $this->user = $username;
    }

    public function connect(){
        try {
            $datebase =  new PDO($this->dsn, $this->user, $this->password);
            return $datebase;
        } catch (\Exception $exception) {
            echo "loi";
            die();
        }

    }

}

