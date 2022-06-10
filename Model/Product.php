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

    // get product using brand name
    public function getDataBrand($table = 'products', $brand='Apple'){ // , $brand= "brand"
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
    // fetch product data using getData Method
    public function getData($table = 'products'){ // , $brand= "brand"
        $result = $this->db->con->query("SELECT * FROM {$table};");
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

    // get product using item id
    public function getProduct($item_id = null, $table= 'products'){
        if (isset($item_id)){
            $result = $this->db->con->query("SELECT * FROM {$table} WHERE item_id={$item_id}");

            $resultArray = array();

            // fetch product data one by one
            while ($item = mysqli_fetch_array($result, MYSQLI_ASSOC)){
                $resultArray[] = $item;
            }

            return $resultArray;
        }
    }
    // get product history using user_id
    public function getHistory($user_id = 1, $table= 'purposing_history'){
        if (isset($user_id)){
            $result = $this->db->con->query("SELECT * FROM {$table} WHERE user_id={$user_id};");
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
}