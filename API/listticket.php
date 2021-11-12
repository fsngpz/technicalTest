<?php

    require_once('connection.php');

    $Limit = $_GET['Limit'];

    
    $query = "SELECT * FROM ticketing LIMIT $Limit";
    $sql = mysqli_query($db_connect, $query);

    if($sql){
        $result = array();
        while($row = mysqli_fetch_array($sql)){
            array_push($result, array(
                'ID' => $row['ID'],
                'Ticket Number' => $row['TicketNum'],
                'Subject' => $row['Subject'],
                'Message' => $row['Message'],
                'Status' => $row['Status'],
                'Priority' => $row['Priority']
            ));
        }
        echo json_encode(array('Showing '. $Limit .' tickets'  => $result));
    }

?>