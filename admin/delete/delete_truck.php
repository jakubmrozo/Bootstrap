<?php
if(!empty($_GET)) {
    $truck_id = $_GET['id'];
    
    require_once('../functions.php');

    delete("trucks",$truck_id);
}
?>