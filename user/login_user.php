<?php
    // *** Initialize the session
    if(!isset($_SESSION)) {
        ini_set('session.gc_maxlifetime', 36000);
        session_set_cookie_params(36000);
        session_start();
    }
    // *** Checking if user is logged in, if true == redirect to hub.php
    if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
        header("location: ../index.php");
        exit;
    }

    // *** Set current directory
    $currentDirectory = "..";

    // *** Require global files (header)
    require_once dirname( __FILE__ ) . '/../' . 'template-parts/header.php';

    // *** Init UserHandler class
    require_once dirname( __FILE__ ) . '/../' . 'classes/UserHandler.php';
    $user_handler = new UserHandler($db);

    if (isset($_POST['submit_login_form'])) {
        $form_email = mysqli_real_escape_string($db->connection, $_POST["form_email"]);
        $form_password = trim($_POST["form_password"]);

        $user_handler->user_signin($form_email, $form_password);
    }
?>

<div class="grid-x grid-x-login">
    <div class="cell small-8 cell-video-element">
        <div class="video-element">
            <video playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop"><source src="https://www.kynetic.dk/wp-content/uploads/2022/05/iStock-kyneticbgvideo-compressed1.mp4" type="video/mp4"></video>
            <p class="logo-font">Planning Tool</p>
        </div>
    </div>

    <div class="cell small-4 cell-login-form">
        <div class="login-form">
            <div class="login-form-pre" data-aos="fade-left" data-aos-delay="0" ata-aos-duration="300">
                <h2>Login</h2>
                <p>Please fill in the credentials below to login.</p>
            </div>
            <form action="" method="post" id="form_post_login_user">
                <div class="form-group" data-aos="fade-left" data-aos-delay="100" data-aos-duration="300">
                    <label for="form_email">Email</label>
                    <input name="form_email" type="text"  class="form-control" id="form_email" placeholder="" required="true">
                    <?php echo empty($sql_user_email_availability_message) ? "" : "<span class='error-message'>".$sql_user_email_availability_message."</span>"; ?>
                </div>

                <div class="form-group" data-aos="fade-left" data-aos-delay="200" data-aos-duration="300">
                    <label for="form_password">Password</label>
                    <input type="password"  id="form_password" name="form_password" placeholder="" class="form-control"  required="true">
                </div>

                <div class="col-sm-12 text-right">
                <button class="btn btn-login-user" type="submit" id="submit" name="submit_login_form">Login</button>
                </div>
            </form>
            <div class="login-form-after">
                <p>By KYNETIC A/S</p>
            </div>
        </div>
    </div>
</div>

<?php
    // *** Require global files (footer)
    require_once dirname( __FILE__ ) . '/../' . 'template-parts/footer.php';
?>

<!-- <script src="<?php // echo $currentDirectory; ?>/assets/js/login_user.js"></script> -->