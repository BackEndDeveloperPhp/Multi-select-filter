<?php

include_once 'DBController.php';

// object DB
$database = new Connection();
$db_handle = $database->openConnection();

class Country {

    public $runQuery;
    public $countryResult;
    
    public function fetchCountry(){
        
        $runQuery = "SELECT DISTINCT Country FROM tbl_user ORDER BY Country ASC";

        $countryResult = $db_handle->query($runQuery);


        return $countryResult;

    }
}

?>