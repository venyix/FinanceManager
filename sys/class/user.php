<?php

    // TURN OFF IN PRODUCTION
    ini_set('display_errors',1); 
    error_reporting(E_ALL);
    // TURN OFF
/*
 * User class -- add documentation
 */

/**
 * Description of user
 *
 * @author Phillip
 */
class user {    
    private $userId;
    private $username;
    private $password;
    private $firstName;
    private $lastName;
    private $income;
    private $payPeriod;
    private $email;
    
    public function __construct($userId=NULL, $username=NULL, $password=NULL,
            $firstName=NULL, $lastName=NULL, $income=NULL,
                $payPeriod=NULL, $email=NULL) {
        $this->userId = $userId;
        $this->username = $username;
        $this->password = $password;
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->income = $income;
        $this->payPeriod = $payPeriod;
        $this->email = $email;
    }
    
    public function setUserId($userId) {
        $this->userId = $userId;
    }
    public function getUserId() {
        return $this->userId;
    }
    
    public function setUsername($username) {
        $this->username = $username;
    }
    public function getUsername() {
        return $this->username;
    }
    
    public function setPassword($password) {
        $this->password = $password;
    }
    public function getPassword() {
        return $this->password;
    }
    
    public function setFirstName($firstName) {
        $this->firstName = $firstName;
    }
    public function getFirstName() {
        return $this->firstName;
    }
    
    public function setLastName($lastName) {
        $this->lastName = $lastName;
    }
    public function getLastName() {
        return $this->lastName;
    }
    
    public function setIncome($income) {
        $this->income = $income;
    }
    public function getIncome() {
        return $this->income;
    }
    
    public function setPayPeriod($payPeriod) {
        $this->payPeriod = $payPeriod;
    }
    public function getPayPeriod() {
        return $this->payPeriod;
    }
    
    public function setEmailAddress($email) {
        $this->email = $email;
    }
    public function getEmailAddress() {
        return $this->email;
    }
}
