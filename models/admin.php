<?php
class Admin extends DB{

public function getAdmin($x , $y)
{
    $sql = self::$connection->prepare("SELECT * FROM user where user = ? and  password = ?");
    $sql->bind_param("ss", $x , $y);
    $sql->execute(); //return an object
    $items = array();
    $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
    return $items; //return an array
}


}