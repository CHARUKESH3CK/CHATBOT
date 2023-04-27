<!DOCTYPE html>
<html lang="en">
<?php
session_start();
$otp = rand(10,10000);
$_SESSION['otp'] = $otp;
?>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">  
    <meta charset="UTF-8">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CHATBOT</title>
    <!-- <link rel="stylesheet" href="style.css"> -->
    <script type="text/javascript"
        src="https://cdn.jsdelivr.net/npm/@emailjs/browser@3/dist/email.min.js">
</script>
<script type="text/javascript">
   (function(){
      emailjs.init("Xmi3lygH5l1XhKz28");
   })();
</script>
<style>
  .p{
    font-family: Bebas Neue ;
    font-size: 25px;
  }
  body{
    background-color: #5499C7;
  }
 
</style>
</head>

  
  
  <body>
  <nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <img src="img/PROBOT.png" height="105px">
    <a class="navbar-brand" href="#"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          
          <a class="nav-link active" style="font-size:25px;font-family: 'Bebas Neue'"  aria-current="page" href="home.php"> HOME </a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" style="font-size:25px;font-family: 'Bebas Neue'"  aria-current="page" href="about.html">ABOUT</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" style="font-size:25px;font-family: 'Bebas Neue'"  aria-current="page" href="subs.html"> SUBSCRIPTION </a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" style="font-size:25px;font-family: 'Bebas Neue'"  aria-current="page" href="login.php"> LOGIN</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" style="font-size:25px;font-family: 'Bebas Neue'"  aria-current="page" href="signup.php"> SIGNUP</a>
        </li>
        
    
        </li>
      
      </ul>
      
    </div>
  </div>
</nav>
<div class="container-fluid">
  <div class= "row">
    <div class="col-md-8 p" ><br><br><br><br>
      <p><b style="font-size:42px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Introducing CHATBOT</b><br><br>
      Hello! I'm Chatbot, a language model developed by OpenAI. As a chatbot, my main goal is to interact with you, answer your questions, and provide you with helpful information to the best of my abilities. I can understand natural language and respond in a conversational manner, just like a human would. Whether you're looking for general knowledge, advice, or just want to have a friendly chat, I'm here to assist you. Please feel free to ask me anything!</p>
  </div>
  <div class="col-md-4"><br><br><br><br><br>
<div class="box">
        <p style="font-family:verdana;">
          <h1 style="color:white; font-size: 30px;">
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PLEASE ENTER YOUR EMAIL : 
          </h1>
           <br>
           <br>
           <div class="form-group">
           <form role="form" action="<?php echo $_SERVER['PHP_SELF']; ?>"method="POST" enctype="multipart/form-data">
            <input
              type="email"
              class="form-control" size="50px" style="  height: 50px; "
              name="email" 
              placeholder="Enter email" 
            />
          
          </div>
          <br>
          <br>
        </p>
        <input type="text" value="" name="Checkbox" style="display:none" />
        <button name="sendmail" role="submit" class="btn btn-outline-light" > GENERATE OTP </button>
        
    </div>
    </div>
  </div>
  </div>
  </form>
</body>

</html>
<?php 
    if(isset($_POST['sendmail'])) {
      require 'PHPMailerAutoload.php';
      require 'credential.php';
      $mail = new PHPMailer;      
      $mail->isSMTP();                                      
      $mail->Host = 'smtp.gmail.com';  
      $mail->SMTPAuth = true;                              
      $mail->Username = EMAIL;                 
      $mail->Password = PASS;                         
      $mail->SMTPSecure = 'tls';                            
      $mail->Port = 587; 
      $mail->SMTPKeepAlive = true;   
      $mail->setFrom(EMAIL, 'NULLCLASS');
      $mail->addAddress($_POST['email']);   
      $mail->addReplyTo(EMAIL);
      $mail->isHTML(true);                                  
      $mail->Subject = 'OTP';
      $message = "Your OTP is ".$otp;
      $mail->Body    = $message;
            if(!$mail->send()) {
          echo 'Message could not be sent.';
          echo 'Mailer Error: ' . $mail->ErrorInfo;
      } else {
          echo "
              echo <script type = \"text/javascript\">
              window.location.href = (\"index.php\")
              </script>;
              ";
      }
    
  }

   ?>
   