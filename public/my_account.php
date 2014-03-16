<?php
    session_start();

    // SHOW PHP ERRORS ON PAGE TURN OFF IN PRODUCTION
    ini_set('display_errors',1); 
    error_reporting(E_ALL);
    // TURN OFF IN PRODUCTION
    include '../sys/core/init.php';
    
    if(!$_SESSION['user']['valid']) {
        // this page has been accessed without a proper session token
        ?>
        <script>
            $(function() {
                $("div").hide();
                alert("Please login first.");
                location.href = 'index.php';
            });
        </script>
        <?php
    }
?>
<html>
    <head>
        <link rel="stylesheet" type="text/css" 
              href="assets/css/main_style.css" />
        <link rel="stylesheet" type="text/css" 
              href="assets/css/my_account_style.css" />
        
        <title>FM - My Account</title>
        <script>
            // sets up onClick functionality for nav_bar
            <?php include_once 'assets/js/jq_nav_and_login.js'; ?>
        </script>
        <?php include_once 'assets/process/login_form_hide_show.php'; ?>
    </head>
    <body>
        <div id="bodyContainer">
        <!-- Entire page header file -->
        <?php include_once 'assets/partial/page_header.php'; ?>
        
        <!-- navigation -->
        <?php include_once 'assets/partial/navigation.php'; ?>
        
        <!-- body content -->
        <div id="blurb">
            <div id="pageHeader" style="color:#333">
                Manage My Account
            </div>
        </div>
        <div id="blurb">
            <p id="blurbContent">
                <span id="blurbList">
                    <?php include 'assets/process/my_account_table.php'; ?>
                </span>
            </p>
        </div>
        </div>
        <?php include_once 'assets/partial/footer.php'; ?>
    </body>
</html>