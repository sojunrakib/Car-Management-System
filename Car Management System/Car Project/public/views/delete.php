<?php
require_once "../../app/classes/VehicleManager.php";

$vehicleManager = new VehicleManager('', '', '', '');
$id = $_GET['id'] ?? null;

if($id === null){
    // print_r("HEllo");
    header("Location: ../index.php");
    exit;
}

$vehicles = $vehicleManager->getVehicles();
$vehicle = $vehicles[$id] ?? null;

if(!$vehicle){
    // print_r("HEllo");
    header("Location: ../index.php");
    exit;
}

if($_SERVER['REQUEST_METHOD'] === "POST"){
    if(isset($_POST['confirm']) && $_POST['confirm'] === 'yes'){
        $vehicleManager->deleteVehicle($id);
    }
    header("Location: ../index.php");
    exit;
}


include './header.php';
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