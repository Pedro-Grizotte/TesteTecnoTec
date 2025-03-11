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
                    // Se a autenticação for bem sucedida, redireciona para
                    // a página de client.php
                    header("Location: ../views/index.php");
                } else {
                    die();
                }
            }
        } catch (Exception $e) {
            echo "Erro: " . $e->getMessage();
        }
    }
}
?>