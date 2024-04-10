<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Connecting Login and Registration Form to Database-----SeekCoding</title>
    <link rel="stylesheet" href="lr.css">
    <link href="https://fonts.googleapis.com/css2?family=Chilanka&family=Dancing+Script:wght@700&display=swap" rel="stylesheet">
</head>
<body>
    <div class="full-page">
        <div class='navbar'>
            <div class='logo'>
                <a href='#'><h1>Resume Builder</h1></a>
            </div>
            <nav>
                <ul id='MenuItems'>
                    <li><a href='#'>Home</a></li>
                    <li><a href='#'>About us</a></li>
                    <li><button class='loginbtn'onclick="document.getElementById('login-form').style.display='block'" style="width:auto;" >Login</button> </li>
                    <li><button class='loginbtn'onclick="document.getElementById('register-form').style.display='block'" style="width:auto;">Register</button> </li>
                </ul>
            </nav>
        </div>
        <div class="sub-page">
          <div class="overlay"></div>
           <div class="text">
                <p>"Welcome to our Resume Builder Website! , your one-stop destination for creating professional resumes effortlessly. Our user-friendly platform offers an intuitive<br> interface and a range of customization options,<br> allowing you to create a personalized resume that <br>highlights your unique skills and experiences.<br>Whether you're a recent graduate, seasoned professional, <br>or career changer,  that you can quickly and easily generate a <br>standout resume that impresses employers and  land your dream job. <br>Start building your resume today and take the <br>next step towards a successful career journey!"</p>
            </div>
        </div>
        <div id='login-form' class="login-page">
            <div class="form-box">
                <span onclick="document.getElementById('login-form').style.display='none'" class="close">&times;</span>
                <div class="form">
                    <form class='login-form', action="validate.php", method="post">
                        <center><h1 class="main-heading">Login Form</h1></center>
				        <input type="text"name='emailid' placeholder="Email ID", required/>
				        <input type="password" name='password' placeholder="password", required/>
				        <button>LOGIN</button>
				    </form>
                </div>
            </div>
        </div>
        <div id="register-form" class='register-page'>
            <div class="form-box1">
               <span onclick="document.getElementById('register-form').style.display='none'" class="close">&times;</span>
                <div class="form1">
                    <form class='register-form', action="registration.php", method="post">
                        <center><h1 class="main-heading">Register Form</h1></center>
				        <input type="text" name='user'placeholder="user name" required/>
				        <input type="text" name='emailid'placeholder="email-id" required/>
				        <input type="password"name='password' placeholder="password" required/>
				        <button>REGISTER</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>