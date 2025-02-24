<?php
class User {
    private $ID, $userTypeID, $firstName, $lastName, $password, $email, $userName,
            $phone, $isActive;
    
    public function __construct( $firstName, $lastName, $password, $email, $userName, $phone, $isActive) {
   
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->password = $password;
        $this->email = $email;
        $this->userName = $userName;
        $this->phone = $phone;
        $this->isActive = $isActive;
    }

    public function getID() {
        return $this->ID;
    }

    public function getUserTypeID() {
        return $this->userTypeID;
    }

    public function getFirstName() {
        return $this->firstName;
    }

    public function getLastName() {
        return $this->lastName;
    }

    public function getPassword() {
        return $this->password;
    }

    public function getEmail() {
        return $this->email;
    }

    public function getUserName() {
        return $this->userName;
    }

    public function getPhone() {
        return $this->phone;
    }

    public function getIsActive() {
        return $this->isActive;
    }

    public function setID($ID): void {
        $this->ID = $ID;
    }

    public function setUserTypeID($userTypeID): void {
        $this->userTypeID = $userTypeID;
    }

    public function setFirstName($firstName): void {
        $this->firstName = $firstName;
    }

    public function setLastName($lastName): void {
        $this->lastName = $lastName;
    }

    public function setPassword($password): void {
        $this->password = $password;
    }

    public function setEmail($email): void {
        $this->email = $email;
    }

    public function setUserName($userName): void {
        $this->userName = $userName;
    }

    public function setPhone($phone): void {
        $this->phone = $phone;
    }

    public function setIsActive($isActive): void {
        $this->isActive = $isActive;
    }


    
}

