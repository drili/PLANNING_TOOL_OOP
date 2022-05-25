<?php
    // *** Set current directory
    $currentDirectory = ".";
    $activePage = "active-workflow";

    // *** Require global files (header)
    require_once dirname( __FILE__ ) . '/' . 'template-parts/header.php';
?>

<div class="grid-x grid-x-main animate__animated animate__slideInUp">
    <div class="cell small-6">
        <h1>WORKFLOW.PHP</h1>
    </div>

    <div class="cell small-6">
        <p>Test Widget Right</p>
    </div>
</div>

<?php
    // *** Require global files (footer)
    require_once dirname( __FILE__ ) . '/' . 'template-parts/footer.php';
?>