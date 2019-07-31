
<?php
include ('core/config.php');
    session_start();
    $user = $_SESSION['email'];
  
    $users = "SELECT * FROM `signup`";
    $runusers = $db->query($users);

        $msgs = "SELECT * FROM `posts` WHERE `receiver` = '$user'";
        $runmsgs = $db->query($msgs);


    if(isset($_POST['posts'])){
        $message = mysqli_real_escape_string($db,$_POST['msg']);
        $receiver = $_POST['userss'];
        $sender = $user;

        $query = "INSERT INTO `posts`(`Id`, `msg`, `sender`, `receiver`) VALUES (NULL,'$message','$sender','$receiver')";

        $runq = $db->query($query);

        if($runq){
            echo "Sent";
        }
    }

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Chat</title>
    <link rel="stylesheet" type="text/css" media="screen" href="assets/css/chat.css" />
    <script src="main.js"></script>

    </head>
    <body>
    <div class="box">
    <div id="main">
    <h1 style = "background-color:palevioletred; color: white;">-online</h1>
        <div class="output">
            <ul style="color:black;padding:0px;font-size:18px;">
            <?php while($chat = mysqli_fetch_assoc($runmsgs)){ ?>
           <li> Sent from: <?=$chat['sender']?></li>
           <li style="color:red;"><?=$chat['msg']?></li>
            <?php } ?>
            </ul>
        </div>
    <form action="" method= "post">
    <textarea name="msg" placeholder="Type your message ..." class="form-control"></textarea><br><br><br>
    <select name="userss" id="" class="form-control">
        <?php while($list = mysqli_fetch_assoc($runusers)){ ?>
        <option value="<?=$list['femail']?>"><?=$list['femail'] ?></option>
        <?php } ?>
    </select>
        <input type="submit" value="Send" name="posts">
        </form>
        <br>
        <form action="logout.php">

        
        
        <input style="width: 100%; background-color: palevioletred; color:white; font-size:20px;" type="submit" value="Logout">
    

</form>
</div>
</div>
</body>
</html>