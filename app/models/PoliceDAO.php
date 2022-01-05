<?php

class PoliceDAO extends Database {
    
    public function getForces() {
        return $this->loadJSONData("https://data.police.uk/api/forces");
    }

    public function getForceByID($cForceID) {
        return $this->loadJSONData("https://data.police.uk/api/forces/".$cForceID);
    }

    public function getNeighbourhoods($cForceID) {
        return $this->loadJSONData("https://data.police.uk/api/".$cForceID."/neighbourhoods");
    }

    public function getNeighbourhoodByID($cForceID, $cNeighbourhoodID) {
        return $this->loadJSONData("https://data.police.uk/api/".$cForceID."/".$cNeighbourhoodID);
    }

    public function getNeighbourhoodEvents($cForceID, $cNeighbourhoodID) {
        return $this->loadJSONData("https://data.police.uk/api/".$cForceID."/".$cNeighbourhoodID."/events");
    }

    public function getCrimes($cForceID) {
        return $this->loadJSONData("https://data.police.uk/api/".$cForceID."/crimes-street-dates");
    }
}