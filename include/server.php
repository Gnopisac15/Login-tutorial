<?php

session_start();
$host = 'localhost';
$username = 'root';
$password = '';
$database ='tutorial';

$conn = new mysqli($host,$username,$password,$database);

if($conn->connect_errno){
    header('location: ./pages/error.php ');
}

//$_SESSION['users']=[];
//REGISTER

if(isset($_POST['register'])){

    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $sql = "INSERT INTO users(username,email,password) VALUES('$username','$email','$password')";
    
    if($conn->query($sql)){

        echo "Data Insert Succesfully";
     }else{
        header('location: ./pages/error.php ');
     }

   // array_push($_SESSION['users'],
    //[
      //  'username'=>$username,
        //'email'=>$email,
        //'password' =>$password,
    //]);

    //echo $_SESSION['users'][0]['username'];
}
//LOGIN

if(isset($_POST['login'])){

    $email     = $_POST['email'];
    $password   = $_POST['password'];

    $sql = "SELECT * FROM users WHERE   email = '$email' AND password = '$password'";
    $result = $conn->query($sql);
    if($result->num_rows > 0){
        
      $user = $result -> fetch_assoc();
        redirect("./../pages/dashboard.php?id=" .$user['id']);

    }else{
        //echo $conn->error;
        redirectError('./error.php');

    }
}


function redirectError(String $location)
{
    return header ('location: ' .$location);

}

function redirect(String $location)
{
    return header ("location: $location");

}