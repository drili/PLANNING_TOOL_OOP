<?php
    // *** Register User Form Handling
    function RegisterUserHandling($user_handler, $db) {
        $form_username = mysqli_real_escape_string($db->connection, $_POST["form_username"]);
        $form_email = mysqli_real_escape_string($db->connection, $_POST["form_email"]);
        $form_password = password_hash(trim($_POST["form_password"]), PASSWORD_DEFAULT);
        global $register_user_validation;
        global $sql_username_availability_message;
        global $sql_user_email_availability_message;
        global $register_user_validation;
        $register_user_validation = 1;

        try {
            // * Username check
            $sql_username_availability = $user_handler->username_availability($form_username);
            $sql_username_availability_rows = mysqli_num_rows($sql_username_availability);
            if ($sql_username_availability_rows > 0) {
                $register_user_validation = 0;
                $sql_username_availability_message = "Username already exists";
            } else {
                $sql_username_availability_message = "";
            }

            // * Email check
            $sql_user_email_availability = $user_handler->user_email_availability($form_email);
            $sql_user_email_availability_rows = mysqli_num_rows($sql_user_email_availability);
            if ($sql_user_email_availability_rows > 0) {
                $register_user_validation = 0;
                $sql_user_email_availability_message = "Email already exists";
            } else {
                $sql_user_email_availability_message = "";
            }
        } catch (\Exception $e) {
            echo 'Caught exception: ',  $e->getMessage(), "\n";
        } finally {
            if ($register_user_validation != 0) {
                // * Register user
                $sql_register_user = $user_handler->user_registration($form_username, $form_email, $form_password);
                if ($sql_register_user) {
                    $user_registration_successful = 1;
                    echo "<script>console.log('::: (register_user.php) - User has been registered... ".$sql_register_user."')</script>";
                    return $user_registration_successful;
                }
                
            }
        }
    }
?>