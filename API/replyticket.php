<?php

    require_once('connection.php');
    parse_str(file_get_contents('php://input'), $value);

    $tn = $value['TicketNum'];
    $msg = $value['Message'];

    $query = "UPDATE ticketing SET Status = 'Answered', Message = '$msg' WHERE TicketNum = '$tn'";
    $sql = mysqli_query($db_connect, $query);

    if($sql){
        echo json_encode(array('Message' => 'Success to update the data'));
    }else{
        echo json_encode(array('Message' => 'We are getting an error while updating the data!'));
    }

?>
