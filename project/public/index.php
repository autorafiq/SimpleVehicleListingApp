
<?php
require_once "./../app/classes/VehicleManager.php";
//Object of a vehicleManager class is created here
$vehicleManagerObj = new vehicleManager('', '', '', '');
// by using the $vehicleManagerObj, we call the getVehicles() method to get all the Vehicles data from the file
$showVehicles = $vehicleManagerObj->getVehicles();
// print_r($showVehicles);
require_once './views/header.php';
?>
<div class="container my-4">
    <h1>Vehicle Listing</h1>
    <a href="./../public/views/add.php" class="btn btn-success mb-4">Add Vehicle</a>
    <div class="row">
        <!-- Loop Go here -->
        <?php foreach($showVehicles as $id=>$vehicle): ?>
            <div class="col-md-4">
                <div class="card">
                    <img src="<?= $vehicle['image'] ?>" class="card-img-top" style="height: 200px; object-fit: cover;">
                    <div class="card-body">
                        <h5 class="card-title"><?= $vehicle['name'] ?></h5> 
                         <p class="card-text">Type: <?= $vehicle['type'] ?></p>
                        <p class="card-text">Price: $<?= $vehicle['price'] ?></p>
                        <a href="./views/edit.php?id=<?= $id ?>" class="btn btn-primary">Edit</a>
                        <a href="./views/delete.php?id=<?= $id ?>" class="btn btn-danger">Delete</a>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        <!-- Loop ends here -->
    </div>
</div>

</body>
</html>