<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>registration page</title>
    <!-- <style>
        /* * {
            margin: 0%;
            padding: 0%;

        }

        h1 {
            margin-top: 10px;
            color: white;
            text-align: center;
            text-decoration: underline;
        }

        body {
            /* background-color: rgb(4, 29, 49); */
        }

        table {
            margin: auto;
            text-align: center;
            color: white;
            background-color: rgb(8, 48, 80);
            font-size: 19px;
            font-family: serif;
            padding: 96px;
            border: 3.2px solid white;
            text-align: center;
            align-items: center;


        }

        .register {
            width: 80.5%;
            padding: auto;
            border-radius: 5%;
            outline: 0;
            border: 1px solid lightgray;
            margin: 10px;
            text-align: center;
        }

        button {
            margin-top: 10px;
            margin-left: 84px;
            padding: 6px;
            width: 100px;
            color: black;
            cursor: pointer;
            border-radius: 20px;

        }

        .register:hover {
            color: rgb(56, 35, 35);
            background-color: rgb(233, 218, 216);
        }

        #city {
            margin-top: 19px;
        }



        button:hover {
            color: white;
            background-color: rgb(8, 48, 80);
        }  -->
    <!-- </style> -->
</head>

<body>
<?php

echo"!!!!!!!!!!!!!!!!!";

?>
    <h1>Register here</h1>
    <home>
    <div>
        <form action="#" method="POST">
            <table>
                <tr>
                    <td> Email :</td>
                    <td><input type="email"name="email" >
                    </td>
                </tr>

                <tr>
                    <td> password :</td>
                    <td><input type="password"  name="pass"></td>
                </tr>

                <tr>
                    <td> CollageName :</td>
                    <td><input type="text" id="collageName" name="Collagename" class="register" placeholder="Collage name"></td>
                </tr>
                <tr>
                    <td> Branch :</td>
                    <td><input type="text" id="branch " name="branch" class="register" placeholder="branch"></td>
                </tr>
                <tr>
                    <td>PassoutBatch :</td>
                    <td><input type="text" id="passoutBatch " name="passoutBatch" class="register" placeholder="passoutBatch "></td>
                </tr>
                <tr>
                    <td>WhatsappNo. :</td>
                    <td><input type="text" id="Whatsapp" name="Whatsapp" class="register" placeholder="Whatsapp "></td>
                </tr>
                
                <tr>
                    <td>City :</td>
                    <td><input type="text" id="city" name="city" class="register" placeholder="city "></td>
                </tr>

                <tr>
                    <td> Gender :</td>
                    <td><input type="radio" name="gender" value="male">Male
                    <td><input type="radio" name="gender" value="female">Fe-Male
                    <td><input type="radio" name="gender" value="other">Other</td>
                </tr>

                <tr>
                    <td align="center" colspan="2">
                        <button><input type="submit" class="btn" name="insert" value="insert"></button>
                        <button><input type="submit" class="btn" name="reset" value="reset"></button>
                    </td>
                </tr>

            </table>
        </form>
        <!-- end main -->
        <!-- </div> -->
        <?php
        if (isset($_POST['insert'])) {
            $email = $_POST['email'];
            $pass= $_POST['pass'];
            $collage_name = $_POST['Collagename'];
            $branch = $_POST['branch'];
            $passoutbatch = $_POST['passoutBatch'];
            $whatsappno = $_POST['Whatsapp'];
            $city = $_POST['city'];
            $gender=$_POST['gender'];
           
            $server="localhost";
            $username="root";
            $password="123";
            $database="skill";
            $conn=mysqli_connect($server,$username,$password,$database);
          
          

            if(!$conn)
            {
                echo"connection faild".mysqli_connect_error();
            }

            else
            {
                echo"sucessful !!!!!!!!!!!!";
            }
            $qur="insert into userskill (EmailId,Password,CollageName,Branch,PassoutYear,WhatsappNo,City,Gender )
            values('$email','$pass','$collage_name','$branch',$passoutbatch,'$whatsappno','$city','$gender')";

                mysqli_query($conn,$qur);
                if(mysqli_affected_rows($conn)>0)
                {
                    echo"inserted";
                }
                else{
                    echo"not inserted</br>$qur";
                }
        }

        ?>
        </home>
    </div>
</body>

</html>