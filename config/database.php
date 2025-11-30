<?php
class Database {
    private $host = "localhost";
    private $dbname = "malaika_ranch";
    private $username = "root";
    private $password = "";
    public $conn;

    public function connect() {
        try {
            $this->conn = new PDO(
                "mysql:host=".$this->host.";dbname=".$this->dbname.";charset=utf8",
                $this->username,
                $this->password
            );

            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        } catch (PDOException $e) {
            die("Database Connection Error: " . $e->getMessage());
        }

        return $this->conn;
    }
}
?>
