<?php
include "dbcon.php";
session_start();
?>
<html>
    <head>
        <title>Signup</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
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
    </head>
    
            </div>
        </nav>
        <div class="card" style="width:700px;height:1175px;margin-top:15px;margin-left:25%;box-shadow: 10px 10px 5px  lightgray;">
            <div class="card-body">
              <h5 class="card-title" style="text-align:center;font-size: 30px;">Signup Panel</h5>
              <p class="card-text">
              <form action="<?php echo $_SERVER['PHP_SELF']; ?>"method="POST">
                <div style="margin-top:15px;">
                    <label for="username" class="form-label">Username</label>
                    <input type="text" class="form-control" name="username" placeholder="username">
                </div> 
                <div style="margin-top:15px;">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" name="password" placeholder="password">
                </div>
                <div style="margin-top:15px;">
                    <label for="email" class="form-label">Email Address</label>
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" name="email1" style="width:250px;" id="username">
                        <span class="input-group-text">@</span>
                        <input type="text" class="form-control" name="email2" style="width:100px;" id="domain">
                    </div>
                </div>
                <div style="margin-top:20px;text-align: center;">
                <button class="btn btn-outline-primary" style="width:600px;" name="signup" type="submit">Signup</button>
                        </div>
                        </form>
              </p>
            </div>
          </div>
                <?php if(isset($_POST['signup'])){
                        $username = $_POST['username'];
                        $password = $_POST['password'];
                        $email = $_POST['email1'].'@'.$_POST['email2'];
                        $query = "SELECT username from registration WHERE email = '$email'";
                        $result = $con->query($query);
                        $num2 = $result->num_rows;
                        $query = "SELECT username from registration WHERE username = '$username'";
                        $result = $con->query($query);
                        $num4 = $result->num_rows;
                        if($num2 == 0 && $num4 == 0){
                          $query2 = "INSERT INTO registration (email,username,password) 
                          values ('$email','$username','$password')";
                          $result2 = $con->query($query2);
                          $query3 = "SELECT * FROM registration WHERE email = '$email' AND username = '$username' AND password = '$password' ";
                          $result3 = $con->query($query3);
                          $num2 = $result3->num_rows;
                          if($num2>0){
                            echo "<script type = \"text/javascript\">
                            window.location = (\"login.php\")
                            </script>";
                          }  
                        }
                        else{
                          if($num2 > 0){
                            echo "<div class='alert alert-danger' role='alert'>
                            Email already in use!
                            </div>";
                          }
                          elseif($num4 > 0){
                            echo "<div class='alert alert-danger' role='alert'>
                            Username already in use!
                            </div>";
                          }
                        }
                    }
                ?>
            </div>
        </div>
        
    </body>
</html> 

