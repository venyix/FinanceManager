<?php
    // TURN OFF IN PRODUCTION
    ini_set('display_errors',1); 
    error_reporting(E_ALL);
    // TURN OFF
    
    SESSION_START();
    
    // check if data has been sent to login page
    if($_SERVER['REQUEST_METHOD'] != 'POST') {
        // if no data sent, redirect to index
        header("Location:index.php");
    } else {
        if(isset($_POST['logout'])){
            session_unset();
            session_destroy();
            header("Location:index.php");
        }
    }
    // include initialization files and form processing files
    include_once '../sys/core/init.php';
    include_once 'assets/process/login_validate.php';
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
    
    // grab username/password from POST
    $username = $_POST['username'];
    $password = $_POST['password'];
    
    // remove any spaces before and after user-input
    $username = TrimUsername($username);
    $password = TrimUsername($password);
    
    // make sure the fields aren't empty
    if(!CheckLoginFields($username, $password)) {
        $_SESSION['valid'] = false;
    }
    
    // check for SQL injection
    $sanatizedUsername = sanatizeSQL($username);
    $sanatizedPassword = sanatizeSQL($password);
    
    $userLogin = new user();
    $userLogin->setUsername($sanatizedUsername);
    $userLogin->setPassword($sanatizedPassword);
    
    $validLogin = attemptLogin($userLogin, $dbo);
    
    if(is_object($validLogin)) {
        // successful login
        $_SESSION['user']['valid'] = true;
        $_SESSION['user']['id'] = $validLogin->getUserId();
        $_SESSION['user']['username'] = $validLogin->getUsername();
        $_SESSION['user']['password'] = $validLogin->getPassword();
        $_SESSION['user']['first_name'] = $validLogin->getFirstName();
        $_SESSION['user']['last_name'] = $validLogin->getLastName();
        $_SESSION['user']['income'] = $validLogin->getIncome();
        $_SESSION['user']['pay_period'] = $validLogin->getPayPeriod();
        $_SESSION['user']['email'] = $validLogin->getEmailAddress();
    } else {
        // bad login credentials
        unset($_SESSION['user']);
        session_unset();
        session_destroy();
        $_SESSION['user']['valid'] = false;
    }    
 ?>