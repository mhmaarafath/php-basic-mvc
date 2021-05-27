<?php
namespace Core\Database;
use PDO;

class Connection{
    public static function make($config){
        try {
            return new PDO(
                $config['type'].":host=".$config['host'].";dbname=".$config['name'], 
                $config['username'], 
                $config['password'],
            );
        } catch(PDOException $e) {
            die('could not connect');
        }    
    }
}