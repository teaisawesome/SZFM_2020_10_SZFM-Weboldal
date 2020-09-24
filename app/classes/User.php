<?php

/**
 * Osztály a felhasználó adatainak "csomagolására"
 */
class User{
    private $id;
    private $name;
    private $address;
    private $email;
    private $phone;
    private $card;
    private $isPremiumMember;
    private $image;

    /**
     * Konstruktor
     */
    public function __construct($id = NULL, $name = NULL, $address = NULL, $email = NULL, $phone = NULL, $card = NULL, $isPremiumMember = NULL, $image = NULL)
    {
        $this->id = $id;
        $this->name = $name;
        $this->address = $address;
        $this->email = $email;
        $this->phone = $phone;
        $this->card = $card;
        $this->isPremiumMember = $isPremiumMember;
        $this->image = $image;
    }
    /**
     * Getterek/Setterek
     */
    public function getID(){ return $this->id; }
    public function setID($id){ $this->id = $id; }
    public function getName(){ return $this->name; }
    public function setName($name){ $this->name = $name; }
    public function getAddress(){ return $this->address; }
    public function setAddress($address){ $this->address = $address; }
    public function getEmail(){ return $this->email; }
    public function setEmail($email){ $this->email = $email; }
    public function getPhone(){ return $this->phone; }
    public function setPhone($phone){ $this->phone = $phone; }
    public function getCard(){ return $this->card; }
    public function setCard($card){ $this->card = $card; }
    public function getIsPremiumMember(){ return $this->isPremiumMember; }
    public function setIsPremiumMember($isPremiumMember){ $this->isPremiumMember = $isPremiumMember; }
    public function getImage(){ return $this->image; }
    public function setImage($image){ $this->image = $image; }

    /**
     * Builder pattern szerűség
     */
    public function Id($id){
        $this->id = $id;
        return $this;
    }
    public function Name($name){
        $this->name = $name;
        return $this;
    }
    public function Email($email)
    {
        $this->email = $email;
        return $this;
    }
    public function Address($address){
        $this->address = $address;
        return $this;
    }
    public function Phone($phone){
        $this->phone = $phone;
        return $this;
    }
    public function Card($card){
        $this->card = $card;
        return $this;
    }
    public function IsPremiumMember($isPremiumMember){
        $this->isPremiumMember = $isPremiumMember;
        return $this;
    }
    public function Image($image){
        $this->image = $image;
        return $this;
    }
    

}

?>