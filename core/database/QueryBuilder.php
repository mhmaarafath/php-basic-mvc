<?php
namespace Core\Database;
use PDO;

class QueryBuilder{
    protected $pdo;

    public function __construct($pdo){
        $this->pdo = $pdo;
    }

    public function all($table){
        $statement = $this->pdo->prepare("SELECT * FROM {$table}");
        $statement->execute();
        return $statement->fetchAll(PDO::FETCH_CLASS);
    }

    public function insert($table, $params){
        $sql = sprintf(
            'INSERT INTO %s (%s) values (%s)', 
            $table, 
            implode(',', array_keys($params)),
            ':'.implode(', :', array_keys($params)), 
        );
        try {
            $statement = $this->pdo->prepare($sql);
            $statement->execute($params);
        } catch (Exception $e){
            die($e->getMessage());
        }
        // var_dump($sql);
    }
}