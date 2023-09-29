<?php
class Database {
    private $host="127.0.0.1:3307";
    private $dbname='oop';
    private $user='root';
    private $pass='';
    public $pdo;

    public function __construct() {
        $this->host = "127.0.0.1:3307";
        $this->dbname = 'oop';
        $this->user = 'root';
        $this->pass = '';
        try {
            $this->pdo = new PDO("mysql:host={$this->host};dbname={$this->dbname}", $this->user, $this->pass);
            $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            
        } catch (PDOException $e) {
            die("Connection failed: " . $e->getMessage());
        }
    }

    public function connect() {
        
    }

    function insertWriter($name, $email, $contacts){
        try {
            $sql = "INSERT INTO writers(writer_Name,email_address,contacts) VALUES (?,?,?)";
            $stmt = $this -> pdo->prepare($sql);
            $stmt->execute([$name, $email, $contacts]);
            echo "Writer registered successfully!";
            header("Location: view.php");
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
    }

    //  function executeQuery($sql, $params = []) {
    //     try {
    //         $stmt = $this->pdo->prepare($sql);
    //         $stmt->execute($params);
    //         return $stmt;
    //     } catch (PDOException $e) {
    //         return false;
    //     }
    // }

}
?>
