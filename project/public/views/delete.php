<?php 

require_once "../../app/classes/VehicleManager.php";
 //Object of a vehicleManager class is created here 
$vehicleManagerObj = new vehicleManager('', '', '','');
$id = $_GET['id'] ?? null;
if($id === null){
    header("Location: ../index.php");
    exit;
}
$deleteVehicles = $vehicleManagerObj->getVehicles();
$deleteVehicle = $deleteVehicles[$id];

if(!$deleteVehicle){
    header("Location: ../index.php");
    exit;
}
if (isset($_POST['confirm']) && $_POST['confirm']==='yes'){
    $vehicleManagerObj->deleteVehicle($id);
    header("Location: ../index.php");
    exit;
}

require_once './header.php';
?>
<div class="container my-4">
    <h1>Delete Vehicle</h1>
    <p>Are you sure you want to delete <strong></strong>?</p>
    <form method="POST">
        <button type="submit" name="confirm" value="yes" class="btn btn-danger">Yes, Delete</button>
        <a href="../index.php" class="btn btn-secondary">Cancel</a>
    </form>
</div>

</body>
</html>