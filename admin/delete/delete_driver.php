<?php
if(!empty($_GET)) {
    $driver_id = $_GET['id'];
    
    require_once('../functions.php');

    delete("drivers",$driver_id);
}
?>