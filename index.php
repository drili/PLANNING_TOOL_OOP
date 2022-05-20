<?php
    // *** Require global files (header)
    require_once dirname( __FILE__ ) . '/' . 'template-parts/header.php';
?>

<div class="grid-x">
    <div class="cell small-12">
        <h1>INDEX.PHP</h1>

        <p>Current URL: <?php echo $currentUrl; ?></p>
        <p>Curren Directory: <?php echo $currentDirectory; ?></p>
    </div>
</div>

<?php
    // *** Require global files (footer)
    require_once dirname( __FILE__ ) . '/' . 'template-parts/footer.php';
?>