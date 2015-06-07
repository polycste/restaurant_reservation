<?php
require_once('header.php');
$customeremail = $_SESSION['user_email'];

?>

<?php

 $start = preg_replace('/-|:/', null, $_POST['startDate']);
 $end = preg_replace('/-|:/', null,$_POST["endDate"]);
$person = $_POST["persons"];

 $sql    = 'SELECT * FROM `table` WHERE `seats` >=' . $_POST["persons"]. ' ORDER BY seats ASC LIMIT 1';
$result = $conn->query($sql);
if (!$result) {
    $rowcount = 0;
} else {
    $rowcount = $result->num_rows;
}


if ($rowcount > 0) {
    // output data of each row
    while ($row = $result->fetch_assoc()) {
        $tableid = $row["id"];
     $sql1    = 'SELECT * FROM `reservation` WHERE table_id =' . $tableid . ' and reservation_start >=' . $start . ' AND reservation_end <= ' . $end;
        $result1 = $conn->query($sql1);
        
        if (!$result1) {
            $rowcount1 = 0;
        } else {
            $rowcount1 = $result1->num_rows;
        }
        if ($rowcount1 > 0) {
            // output data of each row
            echo "All table are booked. Please select another time";
        } else {

 $sql3 = 'SELECT * FROM `customer` WHERE email ="'.$customeremail.'"';
$result3 = $conn->query($sql3);

if ($result3->num_rows > 0) {
    // output data of each row
    while($row3 = $result3->fetch_assoc()) {
      echo  $customerid = $row3["customer_id"];
    }
} 
          
          $sql2 = "INSERT INTO `reservation` (`id`, `user_id`, `table_id`, `reservation_start`, `reservation_end`, `seats`, `active`) VALUES (NULL, '$customerid', '$tableid', '$start', '$end', '$person', '1')";

if ($conn->query($sql2) === TRUE) {
     echo "We have booked table serial no " . $tableid . " only for you. Please dont forget to come our restaurant";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
          
        }
    }
    
} else {
    echo "Sorry at this moment we have not so many table";
}



$conn->close();
?> 

<?php require_once('footer.php') ?>