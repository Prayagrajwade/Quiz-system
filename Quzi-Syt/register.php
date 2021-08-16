<?php

// require_once("config.php");'
include 'db.php';

require_once("db.php");
?>


<?php


if(isset($_POST['signup']))
{
    extract($_POST);
   if(strlen($fname)<3)
   {
         $error[] = 'Please enter frist name using 3 character atlest';    
   }
   if(strlen($fname)>20)
   {
       $error[] = 'Frisy Name: max Lenght 20 Characters';
   }
   if(!preg_match("/^[A-za-z][A-za-z]+[A-za-z _]$/",$fname))
   {
       $error[] = 'Invalid Entry Last Name . Please Enter Letters without any digits or special symbols like(1,2,3#,$,%,*,!,~,`,^)';
   }

if(strlen($lname)<3)
{
      $error[] = 'Please enter frist name using # character atlest';    
}
if(strlen($lname)>20)
{
    $error[] = 'Frisy Name: max Lenght 20 Characters';
}

if(!preg_match("/^[A-za-z][A-za-z]+[A-za-z _]$/",$lname))
   {
       $error[] = 'Invalid Entry Last Name . Please Enter Letters without any digits or special symbols like(1,2,3#,$,%,*,!,~,`,^)';
   }

   if(strlen($username)<3)
{
      $error[] = 'Please enter frist name using # character atlest';    
}
if(strlen($username)>50)
{
    $error[] = 'Frisy Name: max Lenght 20 Characters';
}
// if(!preg_match("/^^[^0-9][a_z0-9]+([_-]?[a-z0-9])*$/",$username))
//    {
//        $error[] = 'Invalid entry for username . entry lowercase letter without any space amd no number at the strat -Eg - myusername,okuniqu or myusername13';
//    }

   if(!strlen($Number)==10)
{
    $error[] = 'Phone number should be in 10 digits';
}



if(strlen($password)<5)
{
      $error[] = 'The password is 6 characters longs';    
}
if(strlen($username)>50)
{
    $error[] = 'password : max lenght 20 characters not allowed';
}




    if($passwordConfirm == '')
    {
        $error[] = 'Please confirm the password';
    }
    if($password != $passwordConfirm)
    {
        $error[] = 'password do not match';
    }

    $sql="select * from users where (username='$username' or email='$email'or number = '$Number');";

$res = mysqli_query($connection,$sql);

if(mysqli_num_rows($res)>0){
    $row = mysqli_fetch_assoc($res);

    if($username==$row['username'])
    {
        $error[] = 'username alredy Exist';
    }
    if($email==$row['email'])
    {
        $error[] = 'email alredy exist';
    }
    if($Number==$row['number'])
    {
        $error[] = 'number alreayd exist';
    }

    

   
   
}

if (!isset($error)) {
    $date=date('Y-m-d');
    $options = array("cost"=>4);
    $password = password_hash($password, PASSWORD_BCRYPT, $options);
    

    $result = mysqli_query($connection, "INSERT into users values('','$fname','$lname','$username','$Number','$email','$password','$date')");

    if ($result) {
        $done = 2; //here it can be any thing ..... we are jsut seeting it to 2 .... its means that done is set after submiting hte form
    } else {
        $error[] = 'Failed : Somethings went Wrong';
    }
}

}





// if(isset($error))
// {
//     foreach($error as $error)
//     {
//         echo '<p class = "errmsg">&#x2640;'.$error.'</p>';
//     }
// }

// $sql = "select * from users where (username = `$username` or email = `$email`);";

// 


// if(mysqli_num_rows($res)>0){
//     $row = mysqli_fetch_assoc($res);

//     if($username==$row['username'])
//     {
//         $error[] = 'username alredy Exist';
//     }
//     if($email==$row['email'])
//     {
//         $error[] = 'email alredy exist';
//     }

//     if(!isset($error))
//     {
//         $date=date('y-m-d');
//         $options = array("cost"=>4);
//         $password = password_hash($password,PASSWORD_BCRYPT,$options);
//     }

//     $result = mysqli_query($quiz,"INSERT into users values('','$fname','$lname','$username','$email','$password','$date')");
//     if($result)
//     {
//         $done = 2;

//     }
//     else{
//         $error[] = 'Failed : Somethings went Wrong';
//     }
// }
?>

<?php
  if(isset($error))
  {
      foreach($error as $error)
      {
          echo '<p class = "errmsg">&#x26A;'.$error.'</p>';
      }
  }
?>






<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Here</title>
</head>

<style>

  *{
      margin: 0;
      padding: 0;
  }

  body{
      background-image: url('back3.jpg');
      background-repeat: no-repeat;
             background-size: cover;
             background-attachment: fixed;
  }


.main{
    width: 400px;
    margin: 50px auto 0px auto;
     
}

h2{
    text-align: center;
    padding: 20px;
    font-family: sans-serif;
}

.register{
    background-color: rgba(0,0,0,0.5);
    width: 100%;
    font-size: 18px;
    border-radius: 10px;
    border: 1px solid ;
}

#register
{
    margin: 40px;

}

label{
    font-family: sans-serif;
    font-size: 18px;
    font-style: italic;
}

input#name{
    width: 300px;
    border: 1px solid #ddd;
    border-radius: 3px;
    outline: 0;
    padding: 7px;
    background-color: #fff;
}

button#submit{
    width: 200px;
    padding: 7px;
    font-size: 16px;
    font-family: sans-serif;
    font-weight: 600;
    border:none;
    border-radius: 3px;
    background-color:rgba(250,100,0,0,0.8);
    /* color: #fff; */
    cursor: pointer;
    /* border:1px solid rgba(255,255,255,0.3) */
}

button:hover{
  background-color: orange;
}

.errmsg{
    margin: 2px auto;
    border-radius: 5px;
    border:1px solid red;
    background: #33cc00;
    text-align: left;
    color: white;
    padding: 10px;
    width: 500px;
}

.successmsg{
    margin: 5px auto;
    border-radius: 5px;
    border: 1px solid green;
    background: green;
    text-align: left;
    color: white;
    padding: 10px;
}


</style>
<body>



<div class="main">




    <div class="register">

   

    <h2>Register Here</h2>






    <?php
    
    if(isset($done))
    { ?>

    <div class = "successmsg"><span style="font-size: 100px;">&#9989</span><br>
    you have registered successfully. <br> <a href="login.php" style="color:#fff;">Login here...</a></div>
    <?php } else { ?>
    
    


















    <form action="" method="post" id = "register">
     
     <label for="">Frist Name :</label>
 

     <br>
     
     <input type="text" name = "fname" id = "name" placeholder="Enter your Frist Name" value="<?php if (isset($error)) {
        echo $_POST['fname'];
    } ?>" required>
     <br><br>

     <label for="">Last Name :</label>

     <br>
     
     <input type="text" name = "lname" id = "name" placeholder="Enter your last Name" value="<?php if (isset($error)) {
        echo $_POST['lname'];
    } ?>"    required>
     <br><br>


     <label for="">User Name :</label>

     <br>
     
     <input type="text" name = "username" id = "name" placeholder="Enter your Frist Name" value="<?php if (isset($error)) {
        echo $_POST['username'];
    } ?>"  required>
     <br><br>


     <label for="">Password:</label>

     <br>
     
     <input type="password" name = "password" required>
     <br><br>

     <label for=""> Re enter your Password:</label>

       <br>
     <input type="password" name = "passwordConfirm" id = ""  required>
     <br><br>

     <label for="number">Enter your Number:</label>
     <br>
     <input type="phonenumber" name = "Number" id = "number" placeholder="Enter your Phone Number"  value="<?php if (isset($error)) {
        echo $Number;
    } ?>" required>

     <br><br>
     <label for="email">Enter your email:</label>
     <br>
     <input type="email" id="email" name="email" value="<?php if (isset($error)) {
        echo $email;
    } ?>" >
      <br><br>
    
    <!-- <input type="submit" id = "submit" > -->
    <button type = "submit" name = "signup" id = "submit">SignUp</button>
      
   

    </form>
    <?php } ?>
    </div>
</div>
    
</body>
</html>