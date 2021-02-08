<?php include './../include/server.php'; ?>

<?php

    //$userID = $_GET['id'];
    //$sql = "SELECT * FROM users WHERE id = $userID";

    $result= $conn->query("SELECT * FROM users WHERE id =". $_GET['id']);
    if ($result->num_rows > 0){
        $user = $result->fetch_assoc();    
    }else{
        //echo $conn->error;
        redirectError('./error.php');
    }

?>
<h1>Welcome<?php echo $user['email']; ?></h1>