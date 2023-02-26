<?php

class Database{

    public $connection;

    public function __construct($config, $username = 'root', $password = '')
    {
        try {
            $dsn = "mysql:" . http_build_query($config, "", ";");

            $this->connection = new PDO($dsn,$username, $password, [
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
            ]);

        } catch(PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
        }

//        $dsn = "mysql:host=localhost;port3306;dbname=demoApp,user=root,password=diallo@gn94;charset=utf8mb4";
//        $this->connection = new PDO($dsn);
    }

    public function query($query, $params = []){


        $statement = $this->connection->prepare($query);
        $statement->execute($params);

        return $statement;

    }
}