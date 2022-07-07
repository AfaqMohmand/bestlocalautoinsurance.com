<?php 

include "db.php";

$sql = "DROP TABLE appointments";

if (mysqli_query($conn, $sql)){
    echo "Successfully Deleted All Records";
}
else {
    echo "Problem with this thing";
}
?>