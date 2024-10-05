<?php

namespace Framework;

use PDO;


class Database
{
    public $connection;


    /**
     * Constructor opens a Database connection
     *
     * @param array $config
     */
    public function __construct($config)
    {
        $dsn = "mysql: host={$config['host']};port={$config['port']};dbname={$config['dbname']};charset={$config['charset']}";


        $options = [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
        ];

        try {
            $this->connection = new PDO($dsn, $config['username'], $config['password'], $options);
        } catch (PDOException $exception) {
            throw new Exception("database connection failed:{$exception->getMessage()}");
        }
    }


    /**
     * Query the database
     *
     * @param string $query
     * @return PDOStatment
     * @throws PDOException
     */
    public function query($query, $params = [])
    {
        try {
            $stmt = $this->connection->prepare($query);
            $stmt->execute($params);

            return $stmt;
        } catch (PDOException $exception) {
            throw new Exception("Query failed to excute:{$exception->getMessage()}");
        }
    }
}
