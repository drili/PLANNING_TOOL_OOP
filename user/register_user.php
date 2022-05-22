<?php
    // *** Set current directory
    $currentDirectory = "..";

    // *** Require global files (header)
    require_once dirname( __FILE__ ) . '/../' . 'template-parts/header.php';

    // *** Init UserHandler class
    require_once dirname( __FILE__ ) . '/../' . 'classes/UserHandler.php';
    $user_handler = new UserHandler($db);

    // *** Register User Form Handling
    if (isset($_POST['submit_register_form'])) {
        require_once dirname( __FILE__ ) . '/../' . 'assets/functions/register_user_handling.php';
        $result_user_registration = RegisterUserHandling($user_handler, $db);
    }
?>

<div class="grid-x">
    <div class="cell small-6">
        <h1>REGISTER_USER.PHP</h1>
    </div>

    <div class="cell small-6">
        <?php if(isset($result_user_registration) && $result_user_registration == 1):?>
            <div class="user-registration-successful">
                <h2>Your user has been registered successfully.</h2>

                <a href="#">
                    <button class="btn btn-login">Login here</button>
                </a>
            </div>
        <?php else: ?>
            <form action="" method="post" id="form_post_register">
                <div class="form-group">
                    <label for="form_username">Username</label>
                    <input name="form_username" type="text"  class="form-control" id="form_username" placeholder="" required="true">
                    <?php echo empty($sql_username_availability_message) ? "" : "<span class='error-message'>".$sql_username_availability_message."</span>"; ?>
                </div>

                <div class="form-group">
                    <label for="form_email">Email</label>
                    <input name="form_email" type="text"  class="form-control" id="form_email" placeholder="" required="true">
                    <?php echo empty($sql_user_email_availability_message) ? "" : "<span class='error-message'>".$sql_user_email_availability_message."</span>"; ?>
                </div>

                <div class="form-group">
                <label for="form_password">Password</label>
                <input type="password"  id="form_password" name="form_password" placeholder="" class="form-control"  required="true">
                </div>

                <div class="col-sm-12 text-right">
                <button class="btn" type="submit" id="submit" name="submit_register_form">Register User</button>
                </div>
            </form>
        <?php endif; ?>
    </div>
</div>

<?php
    // *** Require global files (footer)
    require_once dirname( __FILE__ ) . '/../' . 'template-parts/footer.php';
?>