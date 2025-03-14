<?php
require_once '../Negocio/loginNegocio.php';

class LoginController {
    private $loginNegocio;

    public function __construct() {
        $this->loginNegocio = new LoginNegocio();
    }

    public function login() {
        try {
            // Recebe os dados do formulario
            // Envia esses dados para a authenticação pela função
            // authenticate() na camada de Negocio.
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $email = $_POST['email'];
                $password = $_POST['password'];
                if ($this->loginNegocio->authenticate($email, $password)) {
                    $user = $this->loginNegocio->getUserByEmail($email);
                    session_start();
                    $_SESSION['user_id'] = $user['IDCliente'];
                    $_SESSION['usuario'] = $user['Usuario'];
                    $_SESSION['admin'] = $user['SuperUser'];
                    header("Location: ../views/index.php?username=" . urlencode($user['Usuario']));
                } else {
                    die('Login falhou');
                }
            }
        } catch (Exception $e) {
            echo "Erro: " . $e->getMessage();
        }
    }
}
?>