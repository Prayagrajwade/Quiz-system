<!DOCTYPE html>
<html>
    <head>
        <title>Admin's Login Page</title>
        <style>
            body 
            {
                font-family: Arial, Helvetica, sans-serif;
                background-image: url('back2.jpg');
                background-repeat: no-repeat; 
                
                background-size: cover;
             background-attachment: fixed;
                
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
                /* background: #23463f;   */
                background-color: rgba(0,0,0,0.5); 
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
            /* #register
            {
                background-color: rgba(0,0,0,0.5); 
            } */
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
                
                <form id="login" method="POST" action="admin_login_process.php">
                    <label style="color: black;">Admin Username</label> <br>
                    <input type="text" name="email" id="name"  >
                    
                     <br> <br>

    
                    <label style="color: black;">Admin's Password</label> <br>
                    <input type="password" name="passwd" id="passwd"> <br> <br>

                    <button type="submit" class='LoginButton' name="Sing">Login</button> <br> <br>
                    
                    <!--Bro If you want to remove this you can becaue it for registration in admis page
                    Since I have not sent you the href registration.html -->
                    <!-- <font id="register">If you have not registered</font> <a href="register_admin.php">
                        <button type="button">click here</button></a> -->
                </form>
            </div>
        </div>
    </body>
</html>
