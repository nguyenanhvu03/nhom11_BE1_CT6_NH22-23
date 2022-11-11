<?php
class Manufacture extends DB{
    public function getAllmanufacture ()
{
$sql = self::$connection->prepare("SELECT * FROM manufactures ORDER BY 'id' DESC");
$sql->execute(); //return an object
$items = array();
$items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
return $items; //return an array
}
public function getAllprotypesById ($id)
{
$sql = self::$connection->prepare("SELECT * FROM manufactures WHERE id = ?");
$sql->bind_param("i", $id);
}
}
?>