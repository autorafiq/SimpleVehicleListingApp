<?php
// Define a VehicleActions interface with the following four methods
// Interface definition
interface VehiclesActions{
    // method definition
    function addVehicle($data);
    function editVehicle($id, $data);
    function deleteVehicle($id);
    function getVehicles();
    }

?>