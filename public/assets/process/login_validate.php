<?php

    // TURN OFF IN PRODUCTION
    ini_set('display_errors',1); 
    error_reporting(E_ALL);
    // TURN OFF
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
    function CheckLoginFields($username, $password) {
        if(empty($username)) {
            return false;
        }
        if(empty($password)) {
            return false;
        }
        return true;
    }
    
    function TrimUsername($username) {
        return trim($username);
    }
    
    function TrimPassword($password) {
        return trim($password);
    }
    
    function sanatizeSQL($string) {
        // $cleanString = mysql_real_escape_string($string);
        $cleanString = htmlentities($string);
        
        return $cleanString;
    }
    function attemptLogin($userObject, $dbo) {     
        $query = $dbo->prepare(
            "select USERS.id, USERS.username, USERS.first_name, USERS.last_name,"
                . " USERS.income, PAY_PERIOD.pay_period, USERS.email from USERS"
                . " join PAY_PERIOD on PAY_PERIOD.id = USERS.pay_period"
            . " where username = :user and password = md5(:pass)");
        $query->execute(array(
                'user' => $userObject->getUsername(),
                'pass' => $userObject->getPassword()
                ));
        
        $validUser = new user();
        foreach($query as $row) {
            $validUser->setUserId($row['id']);
            $validUser->setUsername($userObject->getUsername());
            $validUser->setPassword("Hidden");
            $validUser->setFirstName($row['first_name']);
            $validUser->setEmailAddress($row['email']);
            $validUser->setLastName($row['last_name']);
            $validUser->setIncome($row['income']);
            $validUser->setPayPeriod($row['pay_period']);
        }
        if($validUser->getUserId() > 0 && $validUser->getPassword() == 'Hidden') {
            return $validUser;
        } else {
            return false;
        }
        return false;
    }