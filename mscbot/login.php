<?php
include "dbcon.php";
session_start();
?>
<html>
    <style>
          body{
    background-color: #5499C7;
  }
  </style>
    <head>
        <title>Login</title>
        
    <meta charset="UTF-8">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CHATBOT</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
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
    
        <div class="card" style="width: 500px;height:420px;margin-left:30%;margin-top:70px;box-shadow: 10px 10px 5px lightgrey;">
            <div class="card-body">
                <form action="<?php echo $_SERVER['PHP_SELF']; ?>"method="POST">
                <h5 class="card-title" align="center" style="font-size:30px">Login Panel</h5>
                <p class="card-text">
                <div style="margin-top:35px;">
                <div style="margin-top:35px;">
                    <label for="username" class="form-label">Username</label>
                    <input type="text" class="form-control" name="username" placeholder="username">
                </div> 
                <div style="margin-top:35px;">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" name="password" placeholder="password">
                </div>  
                <div style="margin-top:35px;">
                    <button type="submit" class="btn btn-outline-primary" style="min-width:465px;" name="login" type="submit" value="login">Login</button>
                </div>
                <div align="center" style="margin-top:35px;">
                    <a href="forgotpwd.php">Forgot Password</a>
                </div>
</form>
                <?php if(isset($_POST['login'])){
                        $username = $_POST['username'];
                        $password = $_POST['password'];

                          $query = "SELECT * FROM registration WHERE username = '$username' AND password = '$password'";
                          $result = $con->query($query);
                          $num = $result->num_rows;
                          $final = $result->fetch_assoc();
                    
                          if($num > 0){
                

                            echo "<script type = \"text/javascript\">
                          window.location = (\"index.php\")
                          </script>";
                    
                          }
                    
                          else{
                    
                            echo "<div class='alert alert-danger' role='alert' style='margin-top: 50px;'>
                            Invalid Username/Password!
                            </div>";
                    
                          }
                        
                    }
                ?>
            </div>
        </div>
        
    </body>
</html> 


