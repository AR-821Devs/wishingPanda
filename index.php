<?php 
    session_start();
    error_reporting(0);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-17ZLNHBZX8"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-17ZLNHBZX8');
</script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="ScreenOrientation" content="autoRotate:disabled">
    <meta name="description" content="Send these beautiful Happy New Year 2021 wish to your friends and family.">
    <meta name="keywords" content="Happy new year 2021">
    <title>Happy New Year 2021</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="icon" href="images/favicon.ico" type="image/icon">
</head>
<body>
    <header>
        <div class="main_bg">
            <div class="main-container">
                <br><br>
            
            <div class="new-year">
                <h2>WISH YOU VERY</h2>
                <br><br>
                <h1 id="new_1">HAPPY</h1>
                <h1 id="new_2">NEW YEAR</h1>
            </div>

            <div class="gifs">
                <img class="firework firework-1 display-none" src="https://media.giphy.com/media/jO1l9K74yffSKDPW9P/giphy.gif" alt="fireworks">
                <img class="firework firework-2 display-none" src="https://media.giphy.com/media/jO1l9K74yffSKDPW9P/giphy.gif" alt="fireworks">
                <div class="petal-gif-container">
                    <img class="petal" src="gif/petal-slow-gif.gif" alt="fireworks">
                </div>
                
            </div>

            <div class="grid">
                    <div class= "twenty-twenty final-2020  display-none"><p class="twenty-1">202</p><img class="vaccine" src="images/vaccine.png" alt="vaccine as one">
                    </div>
                    <div class= "twenty-twenty initial-2020"><p class="twenty-1">202</p><img class="mask" src="images/zero-with-mask.PNG" alt="zero with mark">
                    </div> 
                    
                        
            </div>
            
            <div class="signature">
                <!-- <a  class= "my-wish" href="wish-you.html">CLICK HERE >></a> -->
                <?php
                $pass_random='A';
                $pass_random=htmlspecialchars($_GET['id']);
                // echo $pass_random;
                if($pass_random=='A'){
                    echo '<a class="my-wish" href="wish-you.php"><img src="https://media.giphy.com/media/j3gUBmZfpQF9spSert/giphy.gif" alt="Tap here"></a>';
                }
                else{
                    echo '<a class="my-wish" href="wish-you.php?id='.$pass_random.'"><img src="https://media.giphy.com/media/j3gUBmZfpQF9spSert/giphy.gif" alt="Tap here"></a>';
                }
                ?>

                <p>Developed with ❤️ by</p>
                <p>Ankush, Arunav & Rahul</p>
            </div>
            </div>
            
            
        </div>
        
    </header>
    


    <script src="fade-n-sound.js"></script>

    <script>

    </script>

    
</body>
</html>
