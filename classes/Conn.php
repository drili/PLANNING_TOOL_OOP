<?php
    class Conn {
        private $_host = "localhost";
        private $_username = "root";
        private $_password = "";
        private $_database = "kynetic_pt_oop";

        protected $connection;

        public function __construct() {
            if (!isset($this->connection)) {
                $this->connection = new mysqli($this->_host, $this->_username, $this->_password, $this->_database);

                if (!$this->connection) {
                    echo "<script>console.log('::: (Conn.php) - Error connecting to database.');</script>";
                    exit;
                } else {
                    echo "<script>console.log('::: (Conn.php) - Database connection successful.');</script>";
                }
            }

            return $this->connection;
        }
    }
?>