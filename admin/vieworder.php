<?php
 $credintial = $_POST['user'].$_POST['pass'];

if($credintial == "adminadmin")
  { ?>

<?php require_once('connection.php');

  $conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
<h1>View Orders </h1>
<?php
$sql = "SELECT * FROM customer, reservation WHERE customer.customer_id = reservation.user_id";
$result = $conn->query($sql);


if ($result->num_rows > 0) {
  
  echo '<table border="1" style="width:100%">
  <tr>
    <td>ID</td>
    <td>UserID</td>		
    <td>TableID</td>
    <td>Start Date</td>		
    <td>End Date</td>
    <td>Booking Seat</td>
    <td>Active</td>
  </tr>';
    // output data of each row
    while($row = $result->fetch_assoc()) {
      
$reservation_start = $row["reservation_start"];
$customer_name = $row["customer_name"];
$table_id = $row["table_id"] ;
$id = $row["id"];
$reservation_end = $row["reservation_end"]; 
$seats = $row["seats"];
$active = $row["active"];

      
      echo '
  <tr>
    <td>'.$id.'</td>
    <td>'.$customer_name.'</td>		
    <td>'.$table_id.'</td>
    <td>'.$reservation_start.'</td>		
    <td>'.$reservation_end.'</td>
    <td>'.$seats.'</td>
    <td>'.$active.'</td>
  </tr>

';

    }
  echo '</table>';
  
} else {
    echo "0 results";
}
$conn->close();
?>
  
<?php
  
  } else
{
  echo 'You are not authorize on this page';
}
?>
