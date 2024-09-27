<?php
if (!empty($_POST)) {

    //uruchamiamy sesje
    session_start();

    if (isset($_SESSION['logged']) && $_SESSION['logged'] === true) {
        header("Location: dashboard.php");
    }

    require_once("sql_connect.php");



    $nick = trim($_POST['nick']);
    $password = hash('whirlpool', trim($_POST['password']));

    if ($nick == '' || $password == '') {
        die('Your nick or password is empty!');
    }

    // przygotowanie zapytania

    $sql = "SELECT password FROM users WHERE name = ?";
    if ($statement = $mysqli->prepare($sql)) {
        if ($statement->bind_param('s', $nick)) {
            $statement->execute();
            $result = $statement->get_result();
            $row = $result->fetch_row();
            $user_password = $row[0];

            if ($password == $user_password) {
                session_start();
                $_SESSION['logged'] = true;
                header("Location: dashboard.php");
            } else {
                die('Password incorrect');
            }
        }
    } else {
        die('Incorrect query!');
    }
    $mysqli->close();
} else {
    die('No data sent');
}
