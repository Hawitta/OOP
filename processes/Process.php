<?php
class Process {
    public function process_register($db) {
        if (isset($_POST['submit'])) {
            $username = $_POST['writer_name'];
            $email = $_POST['email'];
            $contacts = $_POST['contact'];

            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                die("Invalid email format");
            }else{
                
                $db -> insertWriter($username, $email, $contacts);
                header("Location: view.php");
                exit();

            }
        }
        
    }
}