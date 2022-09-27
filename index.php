<?php
    abstract class Customer {
        private $id;
        public $name;
        public $email;
        public $balance;

        public function __construct($id, $name, $email, $balance) {
            $this->id = $id;
            $this->name = $name;
            $this->email = $email;
            $this->balance = $balance;
        }

        public function getEmail() {
            return $this->email;
        }

        public function getName() {
            return $this->name;
        }

        public function getBalance() {
            return $this->balance;
        }
    }

    class Subscriber extends Customer{
        public $plan;

        public function __construct($id, $name, $email, $balance, $plan) {
            parent::__construct($id, $name, $email, $balance);

            $this->plan = $plan;
        }

        public function getPlan() {
            return $this->plan;
        }
    }


    $subscriber = new Subscriber(1,'mike','dad@gmail.om',50000, 'afsd');
    echo $subscriber->getEmail();
    echo $subscriber->getName();
    echo $subscriber->getBalance();
    echo $subscriber->getPlan();
?>