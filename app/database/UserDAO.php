<?php

require(ROOT . "classes/User.php");
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
        $this->insertUserString = $this->con->prepare("INSERT INTO `USERS` (`ID`, `NAME`, `PASSWORD`, `ADDRESS`, `EMAIL`, `PHONE_NUMBER`, `RANK_ID`, `ISPREMIUMMEMBER`, `IMAGE`, `CARD`) VALUES (NULL, :name, :password, :address, :email, :phone_number, 1, :ispremiummember, :image, :card);");
        
        $this->updateUserString = $this->con->prepare("UPDATE `USERS` SET `NAME`=:name, `PASSWORD`=:password, `ADDRESS`=:address, `EMAIL`=:email, `PHONE_NUMBER`=:phone, `RANK_ID`=:rank_id, `ISPREMIUMMEMBER`=:ispremiummember, `IMAGE`=:image WHERE `ID` = :id;");

        $this->deleteUserString = $this->con->prepare("DELETE FROM `USERS` WHERE `ID` = :id;");

        $this->getUserByIdString = $this->con->prepare("SELECT * FROM `USERS` WHERE `ID` = :id;");
        $this->getAllUserString = $this->con->prepare("SELECT * FROM `USERS`;");
    }

    public function createUser($user)
    {
        $this->insertUserString->execute([":name" => $user->getName(), ":password" => $user->getPassword(), ":address" => $user->getAddress(), ":email" => $user->getEmail(), ":phone_number" => $user->getPhone(), ":ispremiummember" => $user->getIsPremiumMember(), ":image" => $user->getImage(), ":card" => $user->getCard()]);
        /*$this->con->query("INSERT INTO `USERS` (ID, NAME, PASSWORD, ADDRESS, EMAIL, PHONE_NUMBER, RANK_ID, ISPREMIUMMEMBER, IMAGE) VALUES (NULL, 'ASD','ASD','ASD','ASD','ASD',1,0,'ASD')");*/
    }

    public function updateUser($user)
    {
        $this->updateUserString->execute([":id" => $user->getID(), ":name" => $user->getName(), ":password" => $user->getPassword(), ":address" => $user->getAddress(), ":email" => $user->getEmail(), ":phone" => $user->getPhone(), ":rank_id" => $user->getRank(), ":ispremiummember" => $user->getIsPremiumMember(), ":image" => $user->getImage(), ":card" => $user->getCard()]);
    }

    public function deleteUser($user)
    {
        $this->deleteUserString->execute([":id" => $user->getID()]);
    }

    public function getUserById($id)
    {
        $this->getUserByIdString->execute([":id" => $id]);
        $fetched = $this->getUserByIdString->fetchAll();
        $user = new User();
        $user->Id($fetched[0][0])->Name($fetched[0][1])->Password($fetched[0][2])->Address($fetched[0][3])->Email($fetched[0][4])->Phone($fetched[0][5])->Rank($fetched[0][6])->IsPremiumMember($fetched[0][7])->Image($fetched[0][8])->Card($fetched[0][8]);
        return $user;
    }

    public function getUsers()
    {
        $this->getAllUserString->execute();
        $fetched = $this->getAllUserString->fetchAll();
        $users = [];
        for($i = 0; $i < count($fetched); $i++)
        {
            $user = new User();
            $user->Id($fetched[$i][0])->Name($fetched[$i][1])->Password($fetched[$i][2])->Address($fetched[$i][3])->Email($fetched[$i][4])->Phone($fetched[$i][5])->Rank($fetched[$i][6])->IsPremiumMember($fetched[$i][7])->Image($fetched[$i][8])->Card($fetched[$i][9]);
            $users[] = $user;
        }

        return $users;
    }
}

$user = new User();
$user->Email("asd@asd.com")->Phone("123435435243")->Name("Kiss Pista")->Address("123 St Peter st, California")->Rank(1)->IsPremiumMember("asd")->Image("asdsadsadsadsad");
$userDAO = new UserDAO();

echo '<pre>';
$userDAO->createUser($user);
//print_r($userDAO->getUsers()); //THIS WORKS.
//print_r( $userDAO->getUserById(3)); //works
//$userDAO->updateUser($user); //works
//$userDAO->deleteUser($user); //works

?>
