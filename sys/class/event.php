<?php
    // SHOW PHP ERRORS ON PAGE TURN OFF IN PRODUCTION
    ini_set('display_errors',1); 
    error_reporting(E_ALL);
    // TURN OFF IN PRODUCTION
    
    class event {
        private $id;
        private $userId;
        private $type;
        private $date;
        private $event;
        private $debt;
        private $amount;
        private $reoccurrence;
        
        public function __construct($id=NULL, $userId=NULL, $type=NULL,
                $date=NULL, $event=NULL, $debt=NULL, $amount=NULL, 
                $reoccurrence=NULL) {
            $this->id = $id;
            $this->userId = $userId;
            $this->type = $type;
            $this->date = $date;
            $this->event = $event;
            $this->debt = $debt;
            $this->amount = $amount;
            $this->reoccurrence = $reoccurrence;
        }
        
        public function setId($id) {
            $this->id = $id;
        }
        public function getId() {
            return $this->id;
        }
        
        public function setUserId($userId) {
            $this->userId = $userId;
        }
        public function getUserId() {
            return $this->userId;
        }
        
        public function setType($type) {
            $this->type = $type;
        }
        public function getType() {
            return $this->type;
        }
        
        public function setDate($date) {
            $this->date = $date;
        }
        public function getDate() {
            return $this->date;
        }
        
        public function setEvent($event) {
            $this->event = $event;
        }
        public function getEvent() {
            return $this->event;
        }
        
        public function setDebt($debt) {
            $this->debt = $debt;
        }
        public function getDebt() {
            return $this->debt;
        }
        
        public function setAmount($amount) {
            $this->amount = $amount;
        }
        public function getAmount() {
            return $this->amount;
        }
        
        public function setReoccurrence($reoccurrence) {
            $this->reoccurrence = $reoccurrence;
        }
        public function getReoccurrence() {
            return $this->reoccurrence;
        }
        
        public function addEvent($eventObject, $userObject, $dbObject) {
            $checkEventType = ''
                    . 'select * from EVENTS_TYPE'
                    . 'where user_id = :uid';
            $dbObject->prepare($checkEventType);
            $dbObject->execute(array(
                'uid' => $userObject->getUserId()
            ));
            
            
        }
    }
?>