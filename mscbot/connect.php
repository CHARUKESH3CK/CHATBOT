<?php
$username = $_POST['username'];
$password = $_POST['password'];
$signupUsername = $_POST['signupUsername'];
$email = $_POST['email'];
$Pass = $_POST['Pass'];
$confirmpassword = $_POST['confirmpassword'];

//database connection
$conn = new mysqli('localhost','root','','test');
if($conn->connect_error){
    die('connection Failed : '.$conn->connect_error);
}else{
    echo "helllo";
    $stmt = $conn-> prepare("insert into registration(username, password, signupUsername, email, Pass, confirmpassword)
    values(?,?,?,?,?,?)");
    $stmt-> bind_param("ssssss",$username, $password, $signupUsername, $email, $Pass, $confirmpassword);
    $stmt->execute();
    echo "SIGNED UP SUCCESSFULLY";
    $stmt->close(); 
    $conn->close();
}
?>