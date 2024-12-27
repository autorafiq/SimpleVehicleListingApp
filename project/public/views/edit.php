<?php 
require_once "../../app/classes/VehicleManager.php";
 //Object of a vehicleManager class is created here
$vehicleManagerObj = new vehicleManager('', '', '', '');

$id = $_GET['id'] ?? null;
if($id === null){
    header("Location: ../index.php");
    exit;
}

$editVehicles = $vehicleManagerObj->getVehicles();
$editVehicle = $editVehicles[$id];
// print_r($editVehicle);

if(!$editVehicle){
    header("Location: ../index.php");
    exit;
}
if($_SERVER['REQUEST_METHOD']=== "POST"){
    $vehicleManagerObj-> editVehicle($id,[
        'name' => $_POST['name'],
        'type' => $_POST['type'],
        'price' => $_POST['price'],
        'image' => $_POST['image']
    ]);
    header("Location: ../index.php");
    exit;
}




require_once './header.php';
?>
<div class="container my-4">
    <h1>Edit Vehicle</h1>
    <form method="POST">
        <div class="mb-3">
            <label class="form-label">Vehicle Name</label>
            <input type="text" name="name" class="form-control" value="<?= htmlspecialchars($editVehicle['name']) ?>" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Vehicle Type</label>
            <input type="text" name="type" class="form-control" value="<?= htmlspecialchars($editVehicle['type']) ?>" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Price</label>
            <input type="number" name="price" class="form-control" value="<?= htmlspecialchars($editVehicle['price']) ?>" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Image URL</label>
            <input type="text" name="image" class="form-control" value="<?= htmlspecialchars($editVehicle['image']) ?>" required>
        </div>
        <button type="submit" class="btn btn-primary">Update Vehicle</button>
        <a href="../index.php" class="btn btn-secondary">Cancel</a>
    </form>
</div>

</body>
</html>