<?php
    require_once '../Models/clientModel.php';
    require_once '../Configuration/connect.php';
    class RegisterDados {
        private $database;

        public function __construct() {
            $this->database = Connect::getInstance()->getConnection();
        }
        public function insert(ClientModel $usuario) {
            try {
                // Realiza o insert do usuário ao Banco de Dados.
                $stmt = $this->database->prepare("INSERT INTO clients (Usuario, Email, Password) VALUES(?,?,?)");
                $stmt->bindValue(1, $usuario->getUsername());
                $stmt->bindValue(2, $usuario->getEmail());
                $stmt->bindValue(3, $usuario->getPassword());
                $stmt->execute();
            } catch (PDOException $e) {
                echo "Error : " . $e->getMessage();
            }
        }
        public function verify($username, $email) {
            try {
                // Função de verificação se o usuario já existe
                // no Banco de Dados.
                $stmt = $this->database->query("SELECT COUNT(*) FROM clients WHERE Usuario = '".$username. "' OR Email  = '".$email. "'");
                return $stmt->fetchColumn();
            } catch (PDOException $e) {
                echo "Error : " . $e->getMessage();
            }
        }
    }
?>
