<?php

class BDD extends PDO
{
    public function __construct()
    {
        //parent::__construct('mysql:host=sql2.redheberg.com;dbname=xpqhepxe_pointeuse' , 'xpqhepxe_point', 'Nicolas230139', array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
        parent::__construct('mysql:host=localhost;dbname=tableau' , 'root', 'root', array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
    }
    
    
}

?>
