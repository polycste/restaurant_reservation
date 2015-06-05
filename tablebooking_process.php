<?php
require_once('header.php');
?>

<?php

echo $sql    = 'SELECT * FROM `table` WHERE `seats` >=' . $_POST["persons"]. ' ORDER BY seats ASC LIMIT 1';
$result = $conn->query($sql);
if (!$result) {
    $rowcount = 0;
} else {
   echo $rowcount = $result->num_rows;
}


if ($rowcount > 0) {
    // output data of each row
    while ($row = $result->fetch_assoc()) {
        $tableid = $row["id"];
        $sql1    = 'SELECT * FROM `reservation` WHERE table_id =' . $tableid . ' and ' . $_POST["startDate"] . ' between ' . $_POST["endDate"];
        $result1 = $conn->query($sql1);
        
        if (!$result1) {
            $rowcount1 = 0;
        } else {
            $rowcount1 = $result1->num_rows;
        }
        if ($rowcount1 > 0) {
            // output data of each row
            while ($row1 = $result1->fetch_assoc()) {
            }
        } else {
            echo "You can book " . $tableid . " table";
        }
    }
    
} else {
    echo "Sorry No table";
}



$conn->close();
?> 