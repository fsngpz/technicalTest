<?php

    require_once('connection.php');
    parse_str(file_get_contents('php://input'), $value);


    if(isset($value['ID'])){
        $ID = $value['ID'];

        $query = "SELECT * FROM ticketing WHERE ID = '$ID'";
        $sqlID = mysqli_query($db_connect, $query);

        $count = 0;

        if ($sqlID) {
            $result = array();
            while($row = mysqli_fetch_array($sqlID)){
                $count += 1;
            }
        }

        if ($count > 0) {
            $query = "DELETE FROM ticketing WHERE ID = '$ID'";
            $sql = mysqli_query($db_connect, $query);

            $query = "DELETE FROM history WHERE ID = '$ID'";
            $sql = mysqli_query($db_connect, $query);
        
            if($sql){
                echo json_encode(array('Message' => 'Success to delete the ticket'));
            }else{
                echo json_encode(array('Message' => 'We are getting an error while delete the ticket!'));
            }
        } else {
            echo json_encode('Ticket ID is not found!');
        }
        

        

    }else{
        echo json_encode('The Parameter is not valid. Please input the valid Parameter');
    }
    

?>
