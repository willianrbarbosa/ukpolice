<?php
// app/controllers/Pages.php
class Police extends Controller {
    
    public function forces(){
        $data = [
            "title" => "Police Forces Units",
            "forces" => $this->model("PoliceDAO")->getForces()
        ];
        $this->view('police/forces', $data);
    }

    public function force($cForceID){
        $data = [
            "title" => "Police Forces Unit Detail",
            "force" => $this->model("PoliceDAO")->getForceByID($cForceID)
        ];
        $this->view('police/forcedetail', $data);
    }
    
    public function neighbourhoods($cForceID){
        $PoliceDAO = $this->model("PoliceDAO");
        $data = [
            "title" => "Neighbourhoods",
            "force" => $PoliceDAO->getForceByID($cForceID),
            "neightbourhoods" => $PoliceDAO->getNeighbourhoods($cForceID)
        ];
        $this->view('police/neighbourhoods', $data);
    }

    public function neighbourhood($cForceID, $cNeighbourhoodID){
        $PoliceDAO = $this->model("PoliceDAO");
        $data = [
            "title" => "Neighbourhood Detail",
            "force" => $PoliceDAO->getForceByID($cForceID),
            "neighbourhood" => $PoliceDAO->getNeighbourhoodByID($cForceID, $cNeighbourhoodID)
        ];
        $this->view('police/neighbourhooddetail', $data);
    }

    public function neighbourhoodevents($cForceID, $cNeighbourhoodID){
        $PoliceDAO = $this->model("PoliceDAO");
        $data = [
            "title" => "Neighbourhood Events",
            "force" => $PoliceDAO->getForceByID($cForceID),
            "neighbourhood" => $PoliceDAO->getNeighbourhoodByID($cForceID, $cNeighbourhoodID),
            "events" => $PoliceDAO->getNeighbourhoodEvents($cForceID, $cNeighbourhoodID)
        ];
        $this->view('police/neighbourhoodevents', $data);
    }
}