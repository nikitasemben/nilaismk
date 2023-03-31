<?php
session_start();
include('../template/header.php'); ?>

<div class="sidebar pe-6 pb-3">
    <?php include('../template/sidebar.php'); ?>
</div>

<div class="content">
    <?php include('../template/navbar.php'); ?>
    <?php include('../template/body.php'); ?>
</div>

<?php include('../template/footer.php'); ?>