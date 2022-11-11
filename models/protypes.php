<?php
class Protypes extends DB{
    public function getAllprotypes ()
{
$sql = self::$connection->prepare("SELECT * FROM protypes ORDER BY 'id' DESC");
$sql->execute(); //return an object
$items = array();
$items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
return $items; //return an array
}
public function getAllprotypesById ($id)
{
$sql = self::$connection->prepare("SELECT * FROM protypes WHERE id = ?");
$sql->bind_param("i", $id);
}
}
?>
