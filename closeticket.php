<?php

    require_once('connection.php');
    parse_str(file_get_contents('php://input'), $value);

    $tn = $value['TicketNum'];

    $query = "UPDATE ticketing SET Status = 'Closed' WHERE TicketNum = '$tn'";
    $sql = mysqli_query($db_connect, $query);

    if($sql){
        echo json_encode(array('Message' => 'Success to closed the ticket'));
    }else{
        echo json_encode(array('Message' => 'We are getting an error while closing the ticket!'));
    }

?>