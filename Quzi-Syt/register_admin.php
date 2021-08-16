<?php

$passwd = $_POST['passwd'];
$UserAdmin = $_POST['UserAdmin'];


require_once("db.php");





if($connection->connect_errno){
 
    die('connections failed:'.$connection->connect_errno);
} 



else{

    


    $stmt = $connection->prepare("insert into admin_login(UserAdmin,passwd)
     values(?,?)");
     
    $stmt->bind_param("ss", $UserAdmin, $passwd);
    $stmt->execute();
    {
        echo "registrations SuccessFully..";
    }
     
    $stmt->close();
    $connection->close();
}
    
?>





<!DOCTYPE html>
<html>
    <head>
        <title>Register Your self here</title>
        <style>
            body 
            {
                font-family: Arial, Helvetica, sans-serif;
                background-color:#6abadeba;
            }
            form 
            {
                border: 3px solid #f1f1f1;
            }
            input[type=text], input[type=password]
            {
                width: 100%;
                padding: 12px 20px;
                margin: 8px 0;
                display: inline-block;
                border: 1px solid #ccc;
                box-sizing: border-box;
            }
            #login
            {
                width: 382px;  
                overflow: hidden;  
                margin: auto;  
                margin: 20 0 0 450px;  
                padding: 80px;  
                background: #23463f;  
                border-radius: 15px ;  
            }
            button.LoginButton
            {
                background-color: #04AA6D;
                color: white;
                padding: 14px 20px;
                margin: 8px 0;
                border: none;
                cursor: pointer;
                width: 100%;
            }
            button:hover
            {
                opacity: 0.8;
            }
            .main
            {
                text-align: center;
                margin: 24px 0 12px 0;
            }
            h2
            { 
                text-align: center;  
                color: #277582;  
                padding: 20px;  
            }
            #register
            {
                color: darkgoldenrod;
            }
            label
            {
                color: darkgoldenrod;
            }
        </style>
    </head>
    <body>
        <h2>Admin Login</h2>
        
        <div class='main'>
            <div class="register">
                
                <form id="login" method="POST">
                    <label>Admin's Email</label> <br>
                    <input type="text" name="UserAdmin" id="name"> <br> <br>
    
                    <label>Admin's Password</> <br>
                    <input type="password" name="passwd" id="passwd"> <br> <br>

                    <button type="submit" class='LoginButton' name = "singUP">Login</button> <br> <br>
                    
                    <!--Bro If you want to remove this you can becaue it for registration in admis page
                    Since I have not sent you the href registration.html -->
                   
                </form>
                
            </div>
        </div>
    </body>
</html>
