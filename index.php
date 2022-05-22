<?php
    // *** Set current directory
    $currentDirectory = ".";
    $activePage = "active-dashboard";

    // *** Require global files (header)
    require_once dirname( __FILE__ ) . '/' . 'template-parts/header.php';
?>

<div class="grid-x grid-x-main">
    <div class="cell small-6">
        <h1>INDEX.PHP</h1>
    </div>

    <div class="cell small-6">
        <p>Test Widget Right</p>
    </div>
</div>

<?php
    // *** Require global files (footer)
    require_once dirname( __FILE__ ) . '/' . 'template-parts/footer.php';
?>