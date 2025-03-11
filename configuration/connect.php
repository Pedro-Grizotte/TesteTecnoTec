<?php
    define('HOST', 'localhost:3306');
    define('DATABASENAME', 'Dashboard');
    define('USER', 'root');
    define('PASSWORD', 'boreal11');

    class Connect {
        protected $connection;

        private static $instance = null;

        function __construct() {
            $this->connectDatabase();
        }

        function connectDatabase() {
            try {
                $this->connection = new PDO('mysql:host='.HOST.';dbname='.DATABASENAME, USER, PASSWORD);
            } catch (PDOException $e) {
                echo "Error!".$e->getMessage();
                die();
            }
        }

        public static function getInstance() {
            if (self::$instance == null) {
                self::$instance = new Connect();
            }
            return self::$instance;
        }

        public function getConnection() {
            return $this->connection;
        }
    }
?>