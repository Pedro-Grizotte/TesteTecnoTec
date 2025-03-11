<?php
require_once '../Configuration/connect.php';

class LoginDados {
    private $database;

    public function __construct() {
        $this->database = Connect::getInstance()->getConnection();
    }

    public function verifyCredentials($email) {
        try {
            // Querry que busca o usuário no banco de dados
            $stmt = $this->database->prepare("SELECT * FROM clients WHERE Email = ?");
            $stmt->bindValue(1, $email);
            $stmt->execute();
            return $stmt->fetch(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
            return false;
        }
    }
}
?>