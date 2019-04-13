<?php

class Database
{
    // database connection variables
    private $host = "127.0.0.1";
    private $username = "homestead";
    private $password = "secret";
    private $database = "Bookings";
    private $port = "3306";

    public $conn;

    // database connection function
    public function connection()
    {
        $this->conn = null;

        try {

            $this->conn = mysqli_connect($this->host, $this->username, $this->password, $this->database, $this->port);

        } catch (mysqli_sql_exception $exception) {
            echo "Connection error: " . $exception->getMessage();
        }

        return $this->conn;
    }
}

?>
