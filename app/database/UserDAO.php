<?php

require(/*ROOT .*/ "../classes/User.php");
require("Database.php");

class UserDAO
{
    private $con;
    private $insertUserString;
    private $updateUserString;
    private $deleteUserString;
    private $getUserByIdString;
    private $getAllUserString;

    public function __construct()
    {
        $this->con = Database::con();
        //INSERT INTO `users` (`ID`, `NAME`, `PASSWORD`, `ADDRESS`, `EMAIL`, `PHONE_NUMBER`, `RANK_ID`, `ISPREMIUMMEMBER`, `IMAGE`) VALUES (NULL, 'asdsad', 'sadsadasdsad', 'asdadasdadsadasd', 'asdasdadadasdsad', 'sadsadsadasdsa', '1', '1', 'sadsdwdasdafsgvdfgvscsad');
        $this->insertUserString = $this->con->prepare("INSERT INTO `USERS` (`ID`, `NAME`, `PASSWORD`, `ADDRESS`, `EMAIL`, `PHONE_NUMBER`, `RANK_ID`, `ISPREMIUMMEMBER`, `IMAGE`) VALUES (NULL, :name, :password, :address, :email, :phone_number, 1, :ispremiummember, :image);");
        
        $this->updateUserString = $this->con->prepare("UPDATE `USERS` SET `NAME`=:name, `PASSWORD`=:password, `ADDRESS`=:address, `EMAIL`=:email, `PHONE_NUMBER`=:phone, `RANK_ID`=:rank_id, `ISPREMIUMMEMBER`=:ispremiummember, `IMAGE`=:image WHERE `ID` = :id;");

        $this->deleteUserString = $this->con->prepare("DELETE FROM `USERS` WHERE `ID` = :id;");

        $this->getUserByIdString = $this->con->prepare("SELECT * FROM `USERS` WHERE `ID` = :id;");
        $this->getAllUserString = $this->con->prepare("SELECT * FROM `USERS`;");
    }

    public function createUser($user)
    {
        if($user instanceof User)
        {
            $this->insertUserString->execute([":name" => $user->getName(), ":password" => $user->getPassword(), ":address" => $user->getAddress(), ":email" => $user->getEmail(), ":phone_number" => $user->getPhone(), ":ispremiummember" => $user->getIsPremiumMember(), ":image" => $user->getImage()]);      
        }
    }

    public function updateUser($user)
    {
        $this->updateUserString->execute([":id" => $user->getID(), ":name" => $user->getName(), ":password" => $user->getPassword(), ":address" => $user->getAddress(), ":email" => $user->getEmail(), ":phone" => $user->getPhone(), ":rank_id" => $user->getRank(), ":ispremiummember" => $user->getIsPremiumMember(), ":image" => $user->getImage()]);
    }

    public function deleteUser($user)
    {
        $this->deleteUserString->execute([":id" => $user->getID()]);
    }

    public function getUserById($user)
    {
        $this->getUserByIdString->execute([":id" => $user->getID()]);
        //print_r($this->getUserByIdString->fetchAll());
    }

    public function getUsers()
    {
        $this->getAllUserString->execute();
        print_r($this->getAllUserString->fetchAll());
    }
}

$user = new User();
$user->Email("asd@asd.com")->Phone("123435435243")->Name("Kiss Pista")->Address("123 St Peter st, California")->Rank(1)->IsPremiumMember("asd")->Image("asdsadsadsadsad");
$userDAO = new UserDAO();

echo '<pre>';
$userDAO->createUser($user);
$userDAO->getUsers(); //THIS WORKS.
//$userDAO->getUserById($user); //works
//$userDAO->updateUser($user); //works
//$userDAO->deleteUser($user); //works

?>
