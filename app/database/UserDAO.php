<?php

require(ROOT . "classes/User.php");

class UserDAO
{
    private static $con = Database::con();
    private static $insertUserString = "INSERT INTO `USERS` VALUES (NULL, :name, :password, :address, :email, :phone_number, :rank_id, :ispremiummumber, :image)";


    public function createUser($user)
    {
        if(instanceof($user, User))
        {
            
        }
    }
}

?>