<?php 
session_start();
include "db.php";

if(isset($_POST['login'])){

    $username = $_POST['username'];
    $password = $_POST['password'];

}

$sql = "SELECT uname, pword FROM admin WHERE uname = '$username' AND pword = '$password'";

$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result)>0){
    $user_data = mysqli_fetch_assoc($result);
    $db_user = $user_data['uname'];
    $db_pwd = $user_data['pword'];
    if ($username === $db_user && $password === $db_pwd){
        $_SESSION['loggedIn'] = 'true';
        $_SESSION['name'] = $db_user;
        $_SESSION['logUser'] = true;
        header("Location:index.php");
    }
    else {
        echo "please check your information";
    }
}
else {
    echo "Please Check your information";
}
mysqli_close($conn);
?>