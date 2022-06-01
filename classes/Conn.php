<?php
    class Conn {
        private $_host = "mysql70.unoeuro.com";
        private $_username = "hybridtech_dk";
        private $_password = "BkrmDxahgA65";
        private $_database = "hybridtech_dk_db_timera";

        public $connection;

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