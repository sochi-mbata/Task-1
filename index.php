<?php
include "config.php";


if ($connect) {
    $query = "SELECT * FROM users ORDER BY id";
    $result = mysqli_query($connect, $query);
    $user = mysqli_fetch_assoc($result);
    
    $mydata = array();



    $mydata['slackUsername'] = $user['slackUsername'];
    $backend = $user['backend'];
    if ($backend ==1) {
        $mydata['backend'] = "true";
    } else {
        $mydata['backend'] = "false";
    }
    $mydata['age'] = $user['age'];
    $mydata['bio'] = $user['bio'];

    echo json_encode($mydata, JSON_PRETTY_PRINT);
    die();
}

?>