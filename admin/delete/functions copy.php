<?php

require_once('sql_connect.php');

function generate_dashboard() {
    global $mysqli;

    $sql = "SELECT trucks.name AS truck, drivers.name AS driver
    FROM trucks
    INNER JOIN drivers
    ON trucks.driver_id = drivers.id;";

    $result = $mysqli->query($sql);

    $rows = $result->fetch_all(MYSQLI_ASSOC);

    return $rows;
       
}

function generate_table($param) {
    global $mysqli;

    if($param == "trucks") {
    
        $sql = "SELECT id, name FROM trucks";
    
    } else {
        $sql = "SELECT id, name FROM drivers";
    }
    $result = $mysqli->query($sql);

    $rows = $result->fetch_all(MYSQLI_ASSOC);

    return $rows;
}

function generate_cards($param){
    global $mysqli;
    
    if($param == "trucks") {
        $sql = "SELECT name, photo_url,description FROM trucks";
    } else {
        $sql = "SELECT name, photo_url,description FROM drivers";
    }

    $result = $mysqli->query($sql);
    $rows = $result->fetch_all(MYSQLI_ASSOC);

    return $rows;
}

c

}

?>