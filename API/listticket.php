<?php

    require_once('connection.php');

    if(isset($_GET['Limit']) && isset($_GET['ID'])){
        $Limit = $_GET['Limit'];
        $ID = $_GET['ID'];
        
        
        if (is_numeric($Limit)){

            $query = "SELECT * FROM ticketing WHERE ID = '$ID'";
            $sqlID = mysqli_query($db_connect, $query);

            $count = 0;

            if ($sqlID){
                $result = array();
                while($row = mysqli_fetch_array($sqlID)){
                    $count += 1;
                }
            }

            if($count > 0){
                $query = "SELECT t.ID, t.TicketNum, t.Subject, t.Message, t.Status, t.Priority, t.Create_Time, 
                t.Update_Time, t2.History_Time, t2.Message FROM ticketing t INNER JOIN history t2 ON t.ID = t2.ID WHERE t.ID = '$ID' ORDER BY t2.History_Time ASC LIMIT $Limit";
    
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
                            'Priority' => $row['Priority'],
                            'Create_Time' => $row['Create_Time'],
                            'Update_Time' => $row['Update_Time'],
                            'History_Time' => $row['History_Time'],
                            'History Message' => $row['Message']
                            
                        ));
                    }
    
                    echo json_encode(array('Data'  => $result));
                }
            }else{
                echo json_encode('Ticket ID is not found!');
            }
            
        }else{
            echo json_encode('Please input the value in number!');
        }

    
    }elseif (isset($_GET['Limit'])) {
        $Limit = $_GET['Limit'];
        
        
        if (is_numeric($Limit)){
            $query = "SELECT * FROM ticketing";
            $sqlID = mysqli_query($db_connect, $query);

            $count = 0;

            if ($sqlID){
                $result = array();
                while($row = mysqli_fetch_array($sqlID)){
                    $count += 1;
                }
            }

            if($count > 0){
                $query = "SELECT t.ID, t.TicketNum, t.Subject, t.Message, t.Status, t.Priority FROM ticketing t LIMIT $Limit";
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
    
                    echo json_encode(array('Data'  => $result));
                }
            }else{
                echo json_encode('There is no ticket at all!');
            }
            
        }else{
            echo json_encode('Please input the value in number!');
        }

    }else{
        echo json_encode('The Parameter is not valid. Please input the valid Parameter');
    }

    

?>
