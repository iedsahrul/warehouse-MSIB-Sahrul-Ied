<?php
class Database {
    private $host = "localhost"; 
    private $db_name = "warehouse_msib_cgs"; 
    private $username = "root"; 
    private $password = ""; 
    public $conn;

    public function getConnection() {
        $this->conn = null;

        try {
            // Membuat koneksi dengan PDO dan menambahkan parameter timeout
            $this->conn = new PDO("mysql:host={$this->host};dbname={$this->db_name}", $this->username, $this->password, array(
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_TIMEOUT => 30, // 30 detik timeout
            ));
        } catch (PDOException $exception) {
            echo "Connection error: " . $exception->getMessage();
        }

        return $this->conn;
    }
}
?>