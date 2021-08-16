<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
     

    <style>
        body{
             
             margin: 0px;
             padding: 0px;
             font-family: sans-serif;
             background-image: url('back1.jpg');
             background-repeat: no-repeat;
             background-size: cover;
             background-attachment: fixed;

        }


        .loginbox{
            width: 320px;
            height: 470px;
            background:#000;
            color: #fff;
            top: 50%;
            left: 50%;
            position: absolute;
            transform: translate(-50%,-50%);
            box-sizing: border-box;
            padding: 70px 30px;

        }




        .avatar{
            width: 100px;
            height: 100px;
            border-radius:50% ;
            position: absolute;
            top: -50px;
            left: calc(50% - 50px);

        }


        h1{
            margin: 0;
            padding: 0 0 20px;
            text-align: center;
            font-size: 22px;
        }

        .loginbox p{
          margin: 0;
          padding: 0;

        }

        .loginbox input{
            width: 100%;
            margin-bottom: 20px;
        }

        .loginbox input[type = "text" ] , input[type = "password"]
        {
            /* border: none;
            border-bottom: 1px solid #fff;
            background: transparen;
            height: 40px;
            color: #ffff;
            font-size: 16px;
            outline: none;
            color: black; */
            border: none;
        border-bottom: 1px solid #fff;
        background: transparent;
        outline: none;
        height: 35px;
        font-size: 14px;
        color: white;
            
        }

        input[type = "submit"]
        {
            border : none;
            outline: none;
            height: 40px;
            background: #fb2525;
            font-size: 18px;
            border-radius: 20px;
        }

        .loginbox input[type = "submit"]:hover
        {
            cursor: pointer;
            background: #ffc107;
            color: #000;

        }

        .loginbox a{
            text-decoration: none;
            font-size: 12px;
            line-height: 20px;
            color: darkgray;
        }

        .loginbox a:hover
        {
            color:#ffc107;
        }

        .errmsg{
    margin: 2px auto;
    border-radius: 5px;
    border:1px solid red;
    background: orange;
    text-align: left;
    color: white;
    padding: 10px;
    width: 200px;
    overflow: auto;
}

    </style>
</head>






<div class = "loginbox">
   <img src="123.jpg.jpg" alt="" class = "avatar">

       <h1>Login Here</h1>

      
      
 
       
 





       <form action="login_process.php" method="POST">
           <p>Username or Email</p>
           <input type="text" placeholder="UserName/Email" name = "login_var"  value = "<?php if(!empty($loginerror)){echo $loginerror;} ?>" required>



           <?php
        
        if(isset($_GET['loginerror']))
        {
            $loginerror = $_GET['loginerror'];
        }

        if(!empty($loginerror)){ 
            echo '<p class = "errmsg">Invalid login credentials, Please Try Again..</p>';
        }

   
              
        ?>

        <br>
















           <p>Password</p>
           <input type="password"  placeholder="Enter Password" name = "password" required>

           <input type="submit" value = "Login" name="sublogin" required>
           <!-- <button type="submit" name = "sublogin">Login</button> -->
           <a href="">Lost Your Password?</a>
           <br>
           <a href="register.php">Dont Have a account</a>
           <br>
           <a href="admin_login.php">Login as Admin</a>
       </form>
</div>


<body>
    
</body>
</html>