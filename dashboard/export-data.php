<?php 
    session_start();
    if ($_SESSION['loggedIn'] === 'true'){
    $uname = $_SESSION['name'];
    include "db.php";
    // $conn = mysqli_connect("localhost", "root", "", "adminsys");
    $sql = "SELECT * FROM clints";
    $res = mysqli_query($conn, $sql);
    $html = "<table><tr><th>ID</th><th>Name</th><th>Email Address</th><th>Phone Number</th><th>Zip Code</th><th>Vehicle Make</th><th>Vehicle Model</th><th>Vehicle Year</th><th>Gender</th><th>Date</th><th>Time</th><th>Lead ID</th></tr>";
    while($row = mysqli_fetch_assoc($res)){
    $html.= '<tr><td>'.$row['id'].'</td><td>'.$row['name'].'</td><td>'.$row['email'].'</td><td>'.$row['phone'].'</td><td>'.$row['zip_code'].'</td><td>'.$row['v_maker'].'</td><td>'.$row['v_model'].'</td><td>'.$row['v_type'].'</td><td>'.$row['gender'].'</td><td>'.$row['dateAdded'].'</td><td>'.$row['timeAdded'].'</td><td>'.$row['leadiD'].'</td></tr>';
    }
    
    $html.='</table>';
    header('Content-Type:application/xls');
    header('Content-Disposition:attachment; filename=report.xls');
    echo $html;
    mysqli_close($conn);
    }
    else {
        header("location:login.php");
    }
?>