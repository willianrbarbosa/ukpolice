<?php
/**
 * app/libraries/Database.php
 * Database Class Library 
 * Loads data 
 */
class Database {

    //Load JSON data from URL
    public function loadJSONData($cURL){        
        $aData = file_get_contents($cURL);
        return json_decode($aData);
    }


}