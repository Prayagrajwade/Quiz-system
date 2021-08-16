<?php

$user = $_POST['email'];
$password = $_POST['passwd'];

require_once("db.php");
if($connection->connect_errno)
{
    die("Failed to connect : ".$connection->connect_errno);

}else{
    $stmt = $connection->prepare("select * from admin_login where UserAdmin = ?");
    $stmt->bind_param("s",$user);
    $stmt->execute();
    $stmt_result = $stmt->get_result();
    if ($stmt_result->num_rows>0) {
        $data = $stmt_result->fetch_assoc();
        if ($data['passwd']==$password) {
            // echo "<h2>Login Successfully</h2>";
            header("location:add_questions.php");

        } else {
            echo "<h2>Invalid Email or Password</h2>";
        }
    
    }else{
        echo "<h2>Invalid Email or password </h2>";
    }

}






?>