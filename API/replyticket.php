
<?php

    require_once('connection.php');
    parse_str(file_get_contents('php://input'), $value);

    if (isset($value['TicketNum']) && isset($value['Message'])){
        $tn = $value['TicketNum'];
        $msg = $value['Message'];


        if (empty($tn) || empty($msg)){
          echo json_encode ("The value of parameter cannot be empty!");
          return;
        }

        $query = "SELECT * FROM ticketing WHERE TicketNum = '$tn'";
        $sqlTicketNum = mysqli_query($db_connect, $query);

        $count = 0;

        if($sqlTicketNum){
            $result = array();
            while($row = mysqli_fetch_array($sqlTicketNum)){
                $count += 1;
            }
        }

        if($count > 0){
            $query = "UPDATE ticketing SET Status = 'Answered', Message = '$msg', Update_Time = NOW() WHERE TicketNum = '$tn'";
            $sql = mysqli_query($db_connect, $query);

            $query = "INSERT INTO history VALUES ((SELECT ID FROM ticketing WHERE TicketNum = '$tn'), NOW(), '$msg')";
            $sql = mysqli_query($db_connect, $query);

            if($sql){
                echo json_encode(array('Message' => 'Success to update the data'));
            }else{
                echo json_encode(array('Message' => 'We are getting an error while updating the data!'));
            }
        }else{
            echo json_encode('Ticket Number is not found!');
        }


    } else{
        echo json_encode('The Parameter is not valid. Please input the valid Parameter');
    }



?>
