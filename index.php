<?php

 session_start();
include ('core/config.php');

// if(isset($_POST) and $_SERVER['REQUEST_METHOD'] == "POST")
// //IF request method is successful submit
// {
//     $username = $_POST['username']; 
//     $password = $_POST['password']; 
//     //will input them from the input files and save them on the variable

//     $q = "select * from Login where 'username' = '$username' and 'password' = '$password'";
//     $result = mysqli_query($dbc, $q);
//     // will allow you to acess the sytem if password and username are correct.

//     if (mysqli_num_rows($result) == 1)
//         {
            
//             //if(row = mysqli_fetch_array($result))
//         {
//                 $_SESSION['role'] = $row['role'];
//                 if(row['role'] == 'parent'){
//             echo"<meta http-equiv = 'refresh' content = '0; url = parent.php>";
//                 }
//                 elseif(row['role'] == 'baby sitter'){
//                     echo"<meta http-equiv = 'refresh' content = '0; url = babysitter.php>";
//                 }
//                 else{
//                     echo"<meta http-equiv = 'refresh' content = '0; url = log.php>";
//                 }
//         }
//     }
   

   
// }

if(isset($_POST['logged'])){
    $email=$_POST['email'];
    $pass = md5($_POST['password']);


    $result =$db->query("SELECT * FROM `signup` WHERE `femail` = '$email' AND `password`='$pass'");
    $row_cnt = mysqli_num_rows($result);

    if($row_cnt>0){

        //echo"<h1><font color=green>You are registered</font></h1>";
        //1. 
        $_SESSION['email'] =$email;
        header("Location:chat.php");

    }else{
        echo"<h1><font color=red>You are not registered</font></h1>";
    }



}else{

}
?>


<!DOCTYPE <!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>WATER</title>
    <link rel="stylesheet" type="text/css" media="screen" href="assets/css/log.css"/>
</head>
<body>

       
    <div class="box">
            <h2>LOGIN</h2>
            <div id="app">
            <form action= "" method="POST"> 
                    
                     <input type="radio" name="role" value="babysitter" checked > Baby Sitter<br>
                    <input type="radio" name="role" value="parent" > Parent <br><br>
                    
                <div class="inputBox">
                     <label>Email</label>
                    <input type = "text" name ="email" required="">
                   
                    
                </div>
                <div class="inputBox">
                     <label>Password</label>
                     <input type = "password" name = "password" required="">

                <br>
                    
                    
                </div>
                <input type="submit" value="Login" name="logged" value="Submit"> <br><br>
                </form>
                <br>

                <label>
                        <input type = "checkbox"
                        checked = "checked"
                        name = "remember"> Remember Password
                 </label>
                 <br>
                
       
                <div class = "container">
                    <span class= "psw"> Forgot <a href = "#">password? </a></span> <br>
                    <span class= "psw"> Don't have an account?? <a href = "signup.html" class = "signup">Sign-up</a> </span>
                   
                       
             
             
   
     
    
</body>
</html>


