<?php
    // *** Initialize the session for user authentication
    if(!isset($_SESSION)) {
        ini_set('session.gc_maxlifetime', 36000);
        session_set_cookie_params(36000);
        session_start();
    }

    // *** Database connection
    require_once dirname( __FILE__ ) . '/../' . 'classes/Conn.php';
    $db = new Conn();

    // *** Globals
    require_once dirname( __FILE__ ) . '/../' . 'assets/functions/global_functions.php';

    // *** Init global functions
    GlobalVariables();
    
    // *** User validation
    $url =  "//{$_SERVER['HTTP_HOST']}{$_SERVER['REQUEST_URI']}";
    if (strpos($url, "user/login_user.php") !== false) {
        // * Do nothing...
    } else {
        UserLoggedInStatusCheck();
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Planning Tool OOP</title>

    <!-- *** CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/foundation-sites@6.7.4/dist/css/foundation.min.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo $currentDirectory; ?>/assets/css/reset.css">
    <link rel="stylesheet" href="<?php echo $currentDirectory; ?>/assets/css/global.css">
    <link rel="stylesheet" href="<?php echo $currentDirectory; ?>/assets/css/breakpoints/_max1440px.css">

    <!-- *** JavaScript -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/foundation-sites@6.7.4/dist/js/foundation.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-bez@1.0.11/src/jquery.bez.js"></script>

    <!-- *** Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Sora:wght@100;200;300;400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lobster&family=Sora:wght@100;200;300;400;500;600;700;800&display=swap" rel="stylesheet">

    <!-- *** Icons  -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.2/font/bootstrap-icons.css">
</head>
<body>
    <div class="header-nav" data-aos="fade-down" data-aos-duration="300">
        <div class="header-nav-functions">
            <ul>
                <?php if(isset($_SESSION["loggedin"])): ?>
                    <li>
                        <div class="header-item header-item-buttons">
                            <a href="#"><i class="bi bi-calendar-x"></i>Register Offtime</a>
                        </div>
                    </li>

                    <li>
                        <div class="header-item header-item-buttons active-button">
                            <a href="#"><i class="bi bi-window-plus"></i>Create Task</a>
                        </div>
                    </li>

                    <li class="li-user">
                        <div class="header-item header-item-user">
                            <img class="profile-image" src="<?php echo $currentDirectory; ?>/assets/images/user_avatar_1.png">
                            <div class="header-item-inner">
                                <i class="bi bi-three-dots-vertical header-dots-icon"></i>
                                <div class="header-item-user-settings item-hidden">
                                    <div class="header-item-user-settings-inner">
                                        <div class="header-item-user-top">
                                            <p class="person-name"><?php echo $_SESSION["person_name"]; ?></p>
                                            <p class="person-email"><?php echo $_SESSION["person_email"]; ?></p>
                                        </div>
                                        <div class="header-item-user-bottom">
                                            <a href="#"><i class="bi bi-person-plus"></i> Profile</a>
                                            <a href="#"><i class="bi bi-gear"></i> Settings</a>
                                            <a href="#"><i class="bi bi-gear"></i> Feature Request</a>
                                            <a href="<?php echo $currentDirectory; ?>/user/logout_user.php"><i class="bi bi-arrow-bar-right"></i> Logout</a>
                                            <p>View your user dashboard</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                <?php else: ?>
                    <li><a href="<?php echo $currentDirectory; ?>/user/login_user.php">Login</a></li>
                <?php endif; ?>
            </ul>
        </div>
    </div>

    <?php require_once dirname( __FILE__ ) . '/../' . 'template-parts/fixed-menu-left.php'; ?>

    <div class="body-class">
        