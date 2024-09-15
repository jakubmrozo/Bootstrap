<?php

require_once('sql_connect.php');

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

function delete($param, $id) {
    global $mysqli;
    
    if($param == "trucks"){
        $sql = "DELETE FROM trucks WHERE id = ?";
       // $sql_2 ="SELECT photo_url FROM trucks WHERE id = ?";
    } else {
        $sql = "DELETE FROM drivers WHERE id = ?";
       // $sql_2 ="SELECT photo_url FROM drivers WHERE id = ?";
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