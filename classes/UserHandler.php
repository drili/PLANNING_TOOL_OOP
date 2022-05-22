<?php
    class UserHandler {
        public $db;

        public function __construct($db) {
            $this->db = $db;
            
            if (mysqli_connect_errno()) {
                echo "<script>console.log('::: (UserHandler.php) - Error constructing UserHandler DB')</script>";
            } else {
                echo "<script>console.log('::: (UserHandler.php) - Successful attempt at constructing UserHandler DB')</script>";
            }
        }

        public function username_availability($username) {
            $query = "SELECT person_name FROM persons WHERE person_name='$username'";
            $result = mysqli_query($this->db->connection, $query);
            return $result;
        }

        public function user_email_availability($email) {
            $query = "SELECT person_email FROM persons WHERE person_email='$email'";
            $result = mysqli_query($this->db->connection, $query);
            return $result;
        }

        public function user_registration($person_name, $person_email, $person_password) {
            $query = "INSERT INTO persons (person_name, person_email, person_password) 
            VALUES ('".$person_name."', '".$person_email."', '".$person_password."')";
            $result = mysqli_query($this->db->connection, $query);
            return $result;
        }

        public function user_signin($email, $password) {
            $query = "SELECT person_id, person_name, person_email, person_password, person_image FROM persons WHERE person_email='$email'";
            $query_results = mysqli_query($this->db->connection, $query);

            if (mysqli_num_rows($query_results) == 0) {
                echo "<script>console.log('::: (UserHandler.php - user_signin()) - EMAIL INCORRECT')</script>";
            } else {
                while ($row = $query_results->fetch_assoc()) {
                    $person_password = $row["person_password"];
                    $person_email = $row["person_email"];
                    $person_id = $row["person_id"];
                    $person_name = $row["person_name"];
                    $person_image = $row["person_image"];
    
                    if (password_verify($password, $person_password)) {
                        echo "<script>console.log('::: (UserHandler.php - user_signin()) - EMAIL & PASSWORD CORRECT')</script>";
                        if(!isset($_SESSION)) {
                            ini_set('session.gc_maxlifetime', 36000);
                            session_set_cookie_params(36000);
                            session_start();
                        }

                        // * Storing data in session variables
                        $_SESSION["loggedin"] = true;
                        $_SESSION["person_id"] = $person_id;
                        $_SESSION["person_email"] = $person_email;
                        $_SESSION["person_name"] = $person_name;
                        $_SESSION["person_image"] = $person_image;

                        header("location: ../index.php");
                    } else {
                        echo "<script>console.log('::: (UserHandler.php - user_signin()) - EMAIL & PASSWORD INCORRECT')</script>";
                    }
                    
                    echo "<script>console.log('::: (UserHandler.php - user_signin()) - ".$row["person_id"]."')</script>";
                }
            }
        }
    }
?>
