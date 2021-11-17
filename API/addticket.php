<?php

    require_once('connection.php');


    if (isset ($_POST['Subject']) && isset ($_POST['Message']) && isset($_POST['Priority'])){
        $Subject = $_POST['Subject'];
        $Message = $_POST['Message'];
        $Priority = $_POST['Priority'];
        $tn = strval(uniqid('TN-'));
        $uuid = strval(md5(('time') . mt_rand(1,400)));

        if (empty($Subject) || empty($Message) || empty($Priority)){
          echo json_encode ("The value of parameter cannot be empty!");
          return;
        }

        if ($Priority != 'Low' && $Priority != 'Medium' && $Priority != 'High'){
            echo json_encode('Please input the Priority with Low, Medium or High');
        }else{

            $query = "INSERT INTO ticketing(ID,TicketNum,Subject,Message,Status,Priority,Create_Time,Update_Time) VALUES
            ('$uuid','$tn','$Subject','$Message','Open','$Priority', NOW(), NOW())";
            $sql = mysqli_query($db_connect, $query);

            $query = "INSERT INTO history VALUES('$uuid',NOW(),'$Message')";
            $sql = mysqli_query($db_connect, $query);

            if($sql){
                echo json_encode(array('Message' => 'Success to adding the ticket'));
            }else{
                echo json_encode(array('Message' => 'We are getting an error while adding the ticket!'));
            }

        }


    } else{
        echo json_encode('The Parameter is not valid. Please input the valid Parameter');
    }



?>
