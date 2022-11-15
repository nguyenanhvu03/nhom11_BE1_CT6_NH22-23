<?php
class Product extends DB{
    
public function getAllProducts ()
{
    $sql = self::$connection->prepare("SELECT * FROM products ORDER BY 'id' DESC");
    $sql->execute(); //return an object
    $items = array();
    $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
    return $items; //return an array
}
public function getAllProductsLimit($x , $y)
{
    $sql = self::$connection->prepare("SELECT * FROM products ORDER BY 'id' DESC  limit ?  offset ? ");
    $sql->bind_param("ii", $x , $y);
    $sql->execute(); //return an object
    $items = array();
    $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
    return $items; //return an array
}
public function getAllProductsById ($id)
{
    $sql = self::$connection->prepare("SELECT * FROM products WHERE id = ?");
    $sql->bind_param("i", $id);
}

public function getAllProductslimit4 ()
{
    $sql = self::$connection->prepare("SELECT * FROM products ORDER BY 'id' DESC limit 4");
    $sql->execute(); //return an object
    $items = array();
    $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
    return $items; //return an array
}

public function search($keyword)
{
    $sql = self::$connection->prepare("SELECT * FROM products  where 'description'  like %?%" );
    $sql->bind_param("s",$keyword);
    $sql->execute(); //return an object
    $items = array();
    $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
    return $items; //return an array
}

public function countProducts()
{
    $sql = self::$connection->prepare("SELECT count(id) as number from products");
    $sql->execute(); 
    $items = array();
    $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
    return $items; //return an array
}

public function paginationProducts($x)
{
    $sql = self::$connection->prepare("SELECT * FROM products  limit 8  offset ? ");
    $sql->bind_param("i", $x ,);
    $sql->execute(); //return an object
    $items = array();
    $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
    return $items; //return an array
}

}
?>