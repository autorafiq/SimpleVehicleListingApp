<?php
require_once 'VehicleBase.php';
require_once 'VehiclesActions.php';
require_once 'FileHandler.php';
class vehicleManager extends VehicleBase implements VehiclesActions{
    use FileHandler;

    function addVehicle($data){
        $vehicles = $this->readFile();
        $vehicles[]= $data;
        $this->writeFile($vehicles);
    }
    function editVehicle($id, $data){
        $vehicles = $this->readFile();
        if(isset($vehicles[$id])){
            $vehicles[$id] = $data;
            $this->writeFile(($vehicles));
        }
    }
    function deleteVehicle($id){
        $vehicles = $this->readFile();
        if(isset($vehicles[$id])){
            unset($vehicles[$id]);
            $this->writeFile(array_values($vehicles));
        }
    }
    function getVehicles(){
        return $this->readFile();

    }
     // Implement abstract method
    public function getDetails(){
        return [
            'name'=> $this->name,
            'type'=> $this->type,
            'price'=> $this->price,
            'image'=> $this->image
        ];
    }
}
?>