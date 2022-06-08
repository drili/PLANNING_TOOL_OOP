<?php if(isset($_SESSION["loggedin"])): ?>
    <div class="fixed-menu-left" data-aos="fade-right" data-aos-duration="300" data-aos-delay="150">
        <div class="fixed-menu-left-inner">
            <div class="user-profile-info">
                <img class="profile-image-left" src="<?php echo $currentDirectory; ?>/assets/images/user_avatar_1.png">
                <div class="bio">
                    <h3><?php echo $_SESSION["person_name"]; ?></h3>
                    <p><?php echo $_SESSION["person_email"]; ?></p>
                </div>
            </div>

            <div class="left-menu-links">
                <a href="<?php echo $currentDirectory; ?>/index.php" class="active-dashboard" data-aos="fade-right" data-aos-duration="300" data-aos-delay="200"><i class="bi bi-grid-1x2"></i> Dashboard</a>
                <a href="<?php echo $currentDirectory; ?>/workflow.php" class="active-workflow" data-aos="fade-right" data-aos-duration="300" data-aos-delay="250"><i class="bi bi-bricks"></i> Workflow</a>
                <a href="#" class="active-sprintoverview" data-aos="fade-right" data-aos-duration="300" data-aos-delay="300"><i class="bi bi-calendar-event"></i> Sprint Overview</a>
                <a href="#" class="active-timeregistrations" data-aos="fade-right" data-aos-duration="300" data-aos-delay="350"><i class="bi bi-calendar-plus"></i> Time Registrations</a>
                <a href="#" class="active-customers" data-aos="fade-right" data-aos-duration="300" data-aos-delay="400"><i class="bi bi-people-fill"></i> Customers</a>
                <a href="<?php echo $currentDirectory; ?>/admin/index.php" class="active-admin" data-aos="fade-right" data-aos-duration="300" data-aos-delay="450"><i class="bi bi-gear"></i> Admin</a>
            </div>

            <div class="left-menu-bottom animate__animated animate__bounce">
                <a href="#"><i class="bi bi-bag-plus"></i> Add billable task</a>
            </div>
        </div>
    </div>

    <style>
        .left-menu-links a {
            opacity: 1 !important;
        }
        .left-menu-links <?php echo ".".$activePage; ?> {
            opacity: 1 !important;
            border-left: none;
            background-transparent;
            padding: 0;
            border-radius: 5px;
            color: #000;
            font-weight: 500;
        }
    </style>
<?php else: ?>
    <style>
        .body-class {
            margin-left: 0;
            margin-top: 0;
        }
        .header-nav {
            display: none;
        }
    </style>
<?php endif; ?>