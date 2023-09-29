<?php
class Writer {
    private $db;

    public function __construct($db) {
        $this->db = $db;
    }

    public function insertWriter($writer_id,$writer_name, $email, $contact) {
        $sql = "INSERT INTO writers (w_Name, email_address, contacts) VALUES (?, ?, ?)";
        $params = [$writer_id,$writer_name, $email, $contact];
        return $this->db->executeQuery($sql, $params);
    }

    public function getAllWriters() {
        $sql = "SELECT * FROM writers";
        return $this->db->executeQuery($sql);
    }
}
?>
