<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>registration page</title>
    <style>

        body{
            margin: 0%;
            padding: 0%;
            font-family: sans-serif;
            /* background-image: url(background.jpg); */
            background-size: cover;
            background-position: center;
        }
        .sign-up{
            width: 300px;
            box-shadow: 0 0 3px 0 rgba(0, 0, 0, 0.3);
            background: #fff;
            padding: 20px;
            margin: 8px auto 0;
            text-align: center;

        }
        .sign-up h1{
            color: #1c8adb;
            margin-bottom:30px;


        }
        .input-email{

            border-radius: 20px;
            padding: 10px;
            margin: 10px 0px;
            width: 90%;
            border: 1px solid #999;
            outline: none;
            

        }
        button{
            color: #fff;
            width: 100%;
            padding: 10px;
            border-radius: 20px;
            font-size: 15px;
            margin:10px 0;
            border: none;
            outline: none;
            cursor: pointer;
        }
        .sign-up-button{
         background-color: #1c8adb;

        }
        .facebook-button{
            background-color: #21afde;
        }
        a{
            text-decoration: none;
        }
        hr{
            margin-top: 20px;
            width:80%;

        }
        .or{
            background: #fff;
            width: 30px;
            margin:-19px auto 10px;

        }
        img{
            width: 70px;
            margin-top: -50px;
        }

    </style>
</head>
<body>
    <div class="sign-up">
        <img src="admin.png">
        <h1>Sign Up Now</h1>
        <form>
            <input type="email"class="input-email" placeholder="Your Email">
            <input type="password"class="input-email" placeholder="Your Password">
            <!-- <p><span><input type="checkbox"></span>I agree to the terms of condition</p> -->
            <button type="button" class="sign-up-button">Sign up</button>
            <!-- <hr> -->
            <!-- <p class="or">OR</p>
            <button type="button" class= "facebook-button">Login with facebook </button>
            <p>Do you have an account ? <a href="#">Sign in</a></p> -->
        </form>
    </div>
</body>
</html>