<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="ScreenOrientation" content="autoRotate:disabled">
    <title>✨2021✨</title>
    <link rel="stylesheet" href="style-wish.css">
    <link rel="icon" href="images/favicon.ico" type="image/icon">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@400;700&display=swap" rel="stylesheet">
</head>
<body>
    
    <div class="main-container">
        <br>
        <h1>Happy New Year</h1>
        <p id="name">2021</p>

        <div class="message-box">
            <!-- <p class="message"> A basket full of smile, joy and warm wishes sent to you from thousand miles away for you my dear Friend! A very Happy New Year.</p> -->
            <p class="message"> New is the year, new are the hopes, new is the resolution, new are the spirits, and new are my warm wishes just for you. Have a promising and fulfilling New Year❣</p>
            <br>
            <div class="cat-container">
                <img class="cute-cat" src="https://media.giphy.com/media/JoaeMGYYkHpC/giphy.gif" alt="Cute cat">
                    <?php
                    include './conn.php';
                    if ($conn->connect_error) {
                    die("Connection failed: ");
                    }
                    else{
                    $pass_random=0;
                    $pass_random=htmlspecialchars($_GET['id']);
                    $sql ="SELECT * FROM `sender` WHERE  `id`='$pass_random'";
                        $result = $conn->query($sql);
                        $row=$result->fetch_assoc();
                        if ($result->num_rows > 0){
                            echo '<div class="message "><br>From '.$row["name"].'</div>';
                        }
                    }

                    ?>

                    
            </div>
            
        </div>
        <button class="send-button" disabled>Send to Someone</button>
        <div class="signature ">
        <a class="contact-us-link" href="contact-us.html" target="_blank">
                <p>Developed with ❤️ by</p>
                <p>Ankush, Arunav & Rahul</p>
            </a>
        </div>



        <!-- Dialog box for Sharing to Someone -->

        <div class="share-dialog-box-container">
            <p class="close-dialog">X</p>
            <div class="share-dialog-box">
                <form  class="form" method="POST"  action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>">
                    <p class="sender-name">YOUR NAME  <input id="senderName" name="name" type="text" placeholder="Name" autocomplete="off" required><button type="submit" class="submit">Share</button></p>
                    
                </form>
                
                <br>
                <?php
                if($_SERVER["REQUEST_METHOD"]=="POST"){
                    $name=$_POST['name'];
                    $str=rand(); 
                    $id2=md5($str);
                    $sqlInsert="INSERT INTO `sender`(`name`, `id`) VALUES ('$name','$id2');";
                    if ($conn->query($sqlInsert) === TRUE) {
                    
                     echo '<style type="text/css">.share-dialog-box-container{display:flex;}</style>
                    <div class="send-via-box">
                    <p class="send-via-text">Send via :</p>

                    <!-- Whatsapp -->
                    <a class="share-buttons" href= 
                    "whatsapp://send?text=https://infinitysource.ml/index.php?id='.$id2.'"
                            data-action="share/whatsapp/share"
                            target="_blank"> 
                            <img src="images/whatsapp.png" alt="whatsapp icon">
                        </a> 
                    

                      <!-- Facebook -->
                    <a class="share-buttons" href="https://www.facebook.com/sharer.php?u=https://infinitysource.ml/index.php?id='.$id2.'" target="_blank">
        <img src="https://simplesharebuttons.com/images/somacro/facebook.png" alt="Facebook" />
    </a>

                    <!-- Reddit -->
                     <a class="share-buttons" href="http://reddit.com/submit?url=https://infinitysource.ml/index.php?id='.$id2.'/&amp;title=My%20Wish%20For%20YOU" target="_blank">
        <img src="https://simplesharebuttons.com/images/somacro/reddit.png" alt="Reddit" />
    </a>

                    <!-- Twitter -->
                    <a class="share-buttons" href="https://twitter.com/share?url=https://infinitysource.ml/index.php?id='.$id2.'/&amp;text=My%20Wish%20For%20YOU&amp;hashtags=happyNewYear" target="_blank">
        <img src="https://simplesharebuttons.com/images/somacro/twitter.png" alt="Twitter" />
    </a>

                   <!-- Email -->
                   <a class="share-buttons" href="mailto:?Subject=My%20Wish%20For%20YOU&amp;Body=https://infinitysource.ml/index.php?id='.$id2.'">
                    <img src="https://simplesharebuttons.com/images/somacro/email.png" alt="Email" />
                                  </a> 

                </div>';
                }
            }

                ?>
                
            </div>
        </div>
        
    </div>

    <script src="wish-you.js"></script>
    
</body>
</html>
