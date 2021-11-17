<?php

    require_once('connection.php');
    parse_str(file_get_contents('php://input'), $value);
    if(isset($value['TicketNum'])){
        $tn = $value['TicketNum'];

        $query = "SELECT * FROM ticketing WHERE TicketNum = '$tn'";
        $sqlTicketNum = mysqli_query($db_connect, $query);

        $count = 0;

        if ($sqlTicketNum) {
            $result = array();
            while($row = mysqli_fetch_array($sqlTicketNum)){
                $count += 1;
            }
        }

        if ($count > 0) {
            $query = "UPDATE ticketing SET Status = 'Closed' WHERE TicketNum = '$tn'";
            $sql = mysqli_query($db_connect, $query);

            if($sql){
                echo json_encode(array('Message' => 'Success to closed the ticket'));
            }else{
                echo json_encode(array('Message' => 'We are getting an error while closing the ticket!'));
            }
        } else {
            echo json_encode('Ticket Number is not found!');
        }

    }else{
        echo json_encode('The Parameter is not valid. Please input the valid Parameter');
    }


?>
