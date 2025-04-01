<?php

class MySQLDatabase
{
    private $host = "localhost";
    private $username = "root";
    private $password = "root@1248";
    private $database = "khushiyon-ka-angan";

    private $connection;

    public function __construct()
    {
        $this->connection = $this->connect();
    }

    private function connect()
    {
        $conn = mysqli_connect($this->host, $this->username, $this->password, $this->database);

        if (mysqli_connect_errno()) {
            die("Database connection failed: " . mysqli_connect_error());
        }

        return $conn;
    }

    public function query($sql)
    {
        $result = mysqli_query($this->connection, $sql);
        if (!$result) {
            die("Database query failed: " . mysqli_error($this->connection));
        }
        return $result;
    }

    public function escapeString($string)
    {
        return mysqli_real_escape_string($this->connection, $string);
    }

    public function closeConnection()
    {
        if ($this->connection) {
            mysqli_close($this->connection);
        }
    }
}
