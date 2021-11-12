<?php

    require_once('connection.php');
    parse_str(file_get_contents('php://input'), $value);

    $ID = $value['ID'];

    $query = "DELETE FROM ticketing WHERE ID = '$ID'";
    $sql = mysqli_query($db_connect, $query);

    if($sql){
        echo json_encode(array('Message' => 'Success to delete the ticket'));
    }else{
        echo json_encode(array('Message' => 'We are getting an error while delete the ticket!'));
    }

?>