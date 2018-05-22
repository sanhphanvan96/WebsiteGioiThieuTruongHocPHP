<?php require_once "../utils/session.php"; ?>
<div class="flash">
    <?php
    $success = getSuccessFlash();
    $error = getErrorFlash();
    $warning = getWarningFlash();
    if ($success) {
        echo '<p class="alert alert-success">'.$success.'</p>';
    }
    if ($error) {
        echo '<p class="alert alert-danger">'.$error.'</p>';
    }
    if ($warning) {
        echo '<p class="alert alert-warning">'.$warning.'</p>';
    }?>
</div>