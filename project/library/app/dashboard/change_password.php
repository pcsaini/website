<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="apple-touch-icon" href="assets/image/logo.ico">
    <link rel="shortcut icon" type="image/x-icon" href="../dashboard/assets/image/logo.ico">
    <title>Admin Login</title>
    <link rel="stylesheet" href="../view/css/reset.css">
    <link rel="stylesheet" href="../view/css/style.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
</head>

<body>
<?php
include_once "init.php";
admin_login_redirect()
?>
<div class="login-logo">
    <img src="assets/image/logo.png">
</div>
<div class="form-content">
    <div class="form">
        <h2>Change Password</h2>
        <?php
        if (isset($_GET['errors']) == true) {
            $errors = $_GET['errors'];
            ?>
            <p class="errors">
                <?php
                print_r($errors);
                ?>
            </p>
            <?php
        }
        if (isset($_GET['success']) && empty($_GET['success'])) {
            echo "<p style='text-align: center;'>Password Changed Suceessfully.</p>";
        }
        ?>
        <form action="../controller/admin_auth.php" method="post">
            <input type="password" placeholder="Current Password" id="password" name="current_password" required/>
            <input type="password" placeholder="New Password" id="password" name="new_password" required/>
            <input type="password" placeholder="Confirm Password" id="password" name="new_password_again" required/>
            <button name="change_password"><i class="fa fa-arrow-circle-right" aria-hidden="true"></i>
                Change Password
            </button>
        </form>
    </div>
</div>
<script src='assets/js/jquery-3.1.1.min.js'></script>
<script src='assets/js/bootstrap.min.js'></script>
<script src="../view/js/main.js"></script>
</body>
</html>
