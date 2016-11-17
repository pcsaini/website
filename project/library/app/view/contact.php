<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="apple-touch-icon" href="../dashboard/assets/image/logo.ico">
    <link rel="shortcut icon" type="image/x-icon" href="../dashboard/assets/image/logo.ico">
    <title>Library: Contact</title>
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="../dashboard/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../dashboard/assets/css/font-awesome.min.css">
</head>
<body>
<?php
include_once "../init.php";
include_once "navbar.php";
?>
<div class="main-content">
    <div class="container">
        <div class="contact-form">
            <h2 class="text-center">Contact Us</h2>
            <div class="row">
                <div class="col-lg-12 col-sm-12 col-md-12">
                    <div class="col-lg-2">
                    </div>
                    <div class="col-lg-8">
                        <h3 class="text-center">Any Question? Drop us a note</h3>
                        <form>
                            <input type="text" placeholder="Name">
                            <input type="email" placeholder="Email-id">
                            <input type="text" placeholder="Subject">
                            <textarea placeholder="Message" rows="6"></textarea>
                            <button class="btn-1" type="submit">Submit</button>
                        </form>
                    </div>
                    <div class="col-lg-2">
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
<?php
include_once "footer.php";
?>
<script src='../dashboard/assets/js/jquery-3.1.1.min.js'></script>
<script src='../dashboard/assets/js/bootstrap.min.js'></script>
</body>
</html>
