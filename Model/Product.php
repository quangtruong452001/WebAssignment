<?php
//Use to fetch product data
class Product
{
    public $db = null;

    public function __construct(DBController $db)
    {
        if (!isset($db->con)) return null;
        $this->db = $db;
    }

    // fetch product data using getData Method
    public function getData($table = 'products', $brand='brand'){ // , $brand= "brand"
        $result = $this->db->con->query("SELECT * FROM {$table} WHERE brand = \"{$brand}\"; "); //WHERE LOWER(brand) = {$brand}
        if (!$result) {
            printf("Error: %s\n", mysqli_error($this->db->con));
            exit();
        }
        $resultArray = array();

        // fetch product data one by one
        while ($item = mysqli_fetch_array($result, MYSQLI_ASSOC)){
            $resultArray[] = $item;
        }

        return $resultArray;
    }
}