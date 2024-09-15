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

function delete($param, $id) {
    global $mysqli;
    
    if($param == "trucks"){
        $sql = "DELETE FROM trucks WHERE id = ?";
        $sql_2 ="SELECT photo_url FROM trucks WHERE id = ?";
    } else {
        $sql = "DELETE FROM drivers WHERE id = ?";
        $sql_2 ="SELECT photo_url FROM drivers WHERE id = ?";
    }

    if($statement_2 = $mysqli->prepare($sql_2)){
        if($statement_2->bind_param('i',$id)){
            $statement_2->execute();
            $result = $statement_2->get_result();
            $row = $result->fetch_row();
            
            unlink('../../assets/'.$row[0]);
        }
    }
    if($statement = $mysqli->prepare($sql)) {
        if($statement->bind_param('i',$id)) {
            $statement->execute();
            header("Location: ../dashboard.php");
        } else{
            die('Param binding error');
        }
    } else {
        die('Incorrect Query!');
    }
 

}

?>