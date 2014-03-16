<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
    // SHOW PHP ERRORS ON PAGE TURN OFF IN PRODUCTION
    ini_set('display_errors',1); 
    error_reporting(E_ALL);
    // TURN OFF IN PRODUCTION
    
    // start or resume the session
    SESSION_START();
    
    // initialization file for database connection and autoload function
    include_once '../sys/core/init.php'; 
    
    ?>
    <script>
        <?php include_once 'assets/js/jq_nav_and_login.js'; ?>
    </script>
    <?php include_once 'assets/process/login_form_hide_show.php'; ?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Financial Manager</title>
        <link rel="stylesheet" 
              type="text/css" href="assets/css/main_style.css" />
        <title>Financial Manager</title>
    </head>
    <body>
    <div id="bodyContainer">
        <!-- Entire page header file -->
        <?php include_once 'assets/partial/page_header.php'; ?>
        
        <!-- navigation -->
        <?php include_once 'assets/partial/navigation.php'; ?>
        
        <!-- body content -->
        <div class="constructionBlurb">
        <ul>
            <li>
                This web application is still under construction, but you can 
                login using the credentials listed below, and check out the
                few features that have been updated thus far. The MY ACCOUNT link
                on this page should work for you after you login,
                thank you for taking the time to visit my web application.
                <br />
                -- <a href="mailto:venyix@gmail.com">Admin Phillip</a>
                <br/><br/>
            </li>
        </ul>
        <ul style="font-size:14px;">
            <li>Username: guest1<ul><li>Password: testuser1</li></ul></li>
            <li>Username: guest2<ul><li>Password: testuser1</li></ul></li>
            <li>Username: guest3<ul><li>Password: testuser1</li></ul></li>
            <li>Username: guest4<ul><li>Password: testuser1</li></ul></li>
        </ul>
        </div>
        <div id="blurb">
            <p id="blurbContent">
                <ul>
                    <li id="blurbList">
                        <?php
                        echo "Did you know that if you saved 10% of your " .
                            "income ($" . getWeeklySavings() . ") each"
                            . " week you will have saved "
                                . "$" . (getWeeklySavings() * 52) . " in a ".
                            "year?";
                        ?>
                    </li>
                </ul>
            </p>
        </div>
    <div>
        <?php include_once 'assets/partial/footer.php'; ?>
    </body>
</html>
