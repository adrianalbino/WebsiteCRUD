<!doctype html>
<html lang="en">
  <head>
    
    <?php include "websiteTheme/headerAndLinks.php" ?>

    <style>
        * {box-sizing: border-box}

        
        .two-forms{
            width: 100%;
            padding-bottom: 100px;
            margin-top: 10%;
        }

        .signup-and-login-form{
            margin: 3%;
            width: 44%;
            color: rgba(255, 255, 255, 0.759);
            float: left;
        }
        

        input[type=text], input[type=password] {
            width: 100%;
            padding: 15px;
            margin: 5px 0 22px 0;
            display: inline-block;
            border: none;
            background: #f1f1f1;
        }

        input[type=text]:focus, input[type=password]:focus {
            background-color: #ddd;
            outline: none;
        }

        hr {
            border: 1px solid #f1f1f1;
            margin-bottom: 25px;
        }

        .cancelbtn {
            background-color: #fbf8f80a;
            color: white;
            padding: 14px 20px;
            margin: 8px 0;
            border: none;
            cursor: pointer;
            width: 100%;
            opacity: 0.9;
        }

        .signupbtn {
            background-color: #fbf8f80a;
            color: white;
            padding: 14px 20px;
            margin: 8px 0;
            border: none;
            cursor: pointer;
            width: 100%;
            opacity: 0.9;
        }

        button:hover {
            opacity:1;
        }

        .cancelbtn {
            padding: 14px 20px;
            background-color: #fbf8f80a;
        }

        .cancelbtn, .signupbtn {
            float: left;
            width: 50%;
        }

        .container-signup {
            padding: 16px;
        }

        .clearfix::after {
            content: "";
            clear: both;
            display: table;
        }

        @media only screen and (max-width: 420px) {
            .signup-and-login-form{
                width: 80%;
                margin-top: 30%;
                margin-left: auto;
                margin-right: auto;
                float: none;
            }

            .cancelbtn, .signupbtn {
                width: 100%;
            }
        }
    </style>

    <title>Signup & Login Page</title>
  </head>
  <body id="page-top">

    <?php include "websiteTheme/navbar.php" ?>

    <div class="two-forms">
        <form class="signup-and-login-form" action="/action_page.php" style="border:1px solid #ccc">
            <div class="container-signup">
                <h1>Create an Account</h1>
                <p>Please fill in this form to create an account.</p>
                <hr>
            
                <label for="email"><b>Email</b></label>
                <input type="text" placeholder="Enter Email" name="email" required>
            
                <label for="psw"><b>Password</b></label>
                <input type="password" placeholder="Enter Password" name="psw" required>
            
                <label for="psw-repeat"><b>Repeat Password</b></label>
                <input type="password" placeholder="Repeat Password" name="psw-repeat" required>
                
                <label>
                    <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me
                </label>
                
                <p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>
            
                <div class="clearfix">
                    <button type="button" class="cancelbtn">Cancel</button>
                    <button type="submit" class="signupbtn">Sign Up</button>
                </div>
            </div>
        </form>

        <form class="signup-and-login-form" action="/action_page.php" style="border:1px solid #ccc">
            <div class="container-signup">
                <h1>Login</h1>
                <p>Please fill in this form to log in to your existing account.</p>
                <hr>
            
                <label for="email"><b>Email</b></label>
                <input type="text" placeholder="Enter Email" name="email" required>
            
                <label for="psw"><b>Password</b></label>
                <input type="password" placeholder="Enter Password" name="psw" required>
            
                <label>
                    <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me
                </label>
            
                <div class="clearfix">
                    <button type="button" class="cancelbtn">Cancel</button>
                    <button type="submit" class="signupbtn">Sign Up</button>
                </div>
            </div>
        </form>
    </div>

    <?php include "websiteTheme/footerAndScript.php" ?>
    
  </body>
</html>