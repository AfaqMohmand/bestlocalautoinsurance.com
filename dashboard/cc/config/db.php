<?php
    $conn = mysqli_connect("localhost:3306", "wwwaffordablemed_nextgentech", "nextGenTech2022", "wwwaffordablemed_beAutoInsurance");
    if (!$conn){
        echo "Error Connecting With Database";
    }
?>