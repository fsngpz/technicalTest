<?php

    require_once('connection.php');

    $Subject = $_POST['Subject'];
    $Message = $_POST['Message'];
    $Priority = $_POST['Priority'];
    $tn = strval(uniqid('TN-'));
    $uuid = strval(md5(('time') . mt_rand(1,400)));

    $query = "INSERT INTO ticketing VALUES ('$uuid','$tn','$Subject','$Message','Open','$Priority')";
    $sql = mysqli_query($db_connect, $query);

    if($sql){
        echo json_encode(array('Message' => 'Success to adding the ticket'));
    }else{
        echo json_encode(array('Message' => 'We are getting an error while adding the ticket!'));
    }

?>