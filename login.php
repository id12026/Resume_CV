<?php
session_start();
if (isset($_SESSION["user"])) {
   header("Location: registration.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="lr.css">
    <body style="background-color:powderblue;">


    <div class="container">
        <?php
        if (isset($_POST["login"])) {
           $email = $_POST["email"];
           $password = $_POST["password"];
            require_once "database.php";
            $sql = "SELECT * FROM users WHERE email = '$email'";
            $result = mysqli_query($conn, $sql);
            $user = mysqli_fetch_array($result, MYSQLI_ASSOC);
            if ($user) {
                if (password_verify($password, $user["password"])) {
                    session_start();
                    $_SESSION["user"] = "yes";
                    header("Location: index.php");
                    die();
                }else{
                    echo "<div class='alert alert-danger'>Password does not match</div>";
                }
            }else{
                echo "<div class='alert alert-danger'>Email does not match</div>";
            }
        }
        ?>
      <form action="login.php" method="post">
        <div class="form-group">
            <input type="email" placeholder="Enter Email:" name="email" class="form-control">
        </div>
        <div class="form-group">
            <input type="password" placeholder="Enter Password:" name="password" class="form-control">
        </div>
        <div class="form-btn">
            <input type="submit" value="Login" name="login" class="btn btn-primary">
        </div>
      </form>
     <div><p>Not registered yet <a href="registration.php">Register Here</a></p></div>
    </div>
    
<style>
    body{
    min-height: 100vh;
    background: linear-gradient(to right top, #a1a1a1, #84b4d7, #00e7a2, #00e7a2, #a8eb12 );
}
form{
    background: #989898ce;
    width: 350px;
    height: 580px;
    padding: 75px 50px;
    position: absolute;
    left: 50%;
    top: 50%;
    transform: translate(-50%, -50%);
}
h1{
    text-align: center;
    margin-bottom: 45px;
    color: white;
    font-size: 40px;
}
.textBoxdiv{
    border-bottom: 2px solid white;
    position: relative;
    margin: 35px 0;
}

.textBoxdiv input{
    background: none;
    border: none;
    outline: none;
    width: 100px;

}

.loginBtn{
    transition: 0.5s;
    height:45px;
    width: 100%;
    border: none;
    outline: none;
    background: linear-gradient(to right top, #a1a1a1, #84b4d7, #00e7a2, #00e7a2, #a8eb12 );
    background-size: 200%;
    color: white;
    font-size: 16px;
}

.loginBtn:hover{
    background-position: right;
    font-size: 17px;
}

.signup{
    color: white;
    margin-top: 45px;
    text-align: center;
}

.signup a{
    color:black;
}
    </style>
        
</body>
</html>  


