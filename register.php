
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
	<style>
        * {
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

        }

        table {
            margin: auto;
            text-align: center;
            color: white;
            background-color: rgb(157, 211, 255);
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

        hover::register {
            color: red;
        }

        button:hover {
            color: white;
            background-color: rgb(172, 158, 255);
        }
    </style>
</head>

<body>
    <h1>Register here</h1>
    <div>
        <form action="#" method="post">
            <table>
			     <tr>
                    <td> FirstName</td>
                    <td><input type="text"name="fname" placeholder="Enter your first name"  class="register" >
					</td>
                </tr>
				
				<tr>
                    <td> LastName</td>
                    <td><input type="text"name="lname" placeholder="Enter your lastname" class="register" >
                    </td>
                </tr>
			
                <tr>
                    <td> Email :</td>
                    <td><input type="email" id="email" name="email" class="register" placeholder="Enter your email">
                    </td>
                </tr>

                <tr>
                    <td> password :</td>
                    <td><input type="password" id="password" name="password1"class="register" placeholder="Enter your password"></td>
                </tr>

                <tr>
                    <td> Collage Name :</td>
                    <td><input type="text" id="Name collage " name="Collagename" class="register"placeholder="Collage name"></td>
                </tr>
                <tr>
                    <td> Branch :</td>
                    <td><input type="text" id="branch " name="branch" class="register" placeholder="branch"></td>
                </tr>
                <tr>
                    <td>PassoutYeart</td>
                    <td><input type="text" id="passoutBatch " name="passoutyear" class="register" placeholder="passoutyear">
                </tr>

                <!-- <tr>
                    <td>Role :</td>
                    <td><input type="text" id="Role" name="Role" class="register" placeholder="Role "></td>
                </tr> -->
                <tr>
                    <td>Whatsapp No. :</td>
                    <td><input type="text" id="Whatsapp" name="Whatsapp" class="register" placeholder="Whatsapp "></td>
                </tr>
                <tr>
                    <td> Gender :</td>
                    <td><input type="radio" name="gender" class="register">Male</td>
                    <td><input type="radio" name="gender" class="register">Fe-Male</td>
                    <td><input type="radio" name="gender" class="register">Other</td>
                </tr>
                <tr>
                    <td>City :</td>
                    <td><input type="text" id="city" name="city" class="register" placeholder="city "></td>
                </tr>

                <tr>
                    <td align="center" colspan="2">
                        <button><input type="submit" class="btn" value="insert"></button>
                        <button><input type="submit" class="btn" value="reset"></button>
                    </td>
                </tr>

            </table>
            </form>
			 <?php
        if (isset($_POST['insert'])) {
           
			  $fname=$_POST['fname'];
           $lname=$_POST['lname'];
            $email = $_POST['email'];
            $password = $_POST['password'];
            $collage_name = $_POST['Collagename'];
            $branch = $_POST['branch'];
            $passoutbatch = $_POST['passoutBatch'];
            $role = $_POST['Role'];
            $whatsapp_no = $_POST['Whatsapp'];
            // $mail = $_POST['mail'];
            // $femail = $_POST['femail'];
            // $other = $_POST['other'];
            $city = $_POST['city'];
            // echo "$email";
            
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
            $qur="insert into userskill (EmailId,Password,CollageName,Branch,PassoutYear,Role ,WhatsappNo,City )
            values('$email','$password','$collage_name','$branch',$passoutbatch,'$role','$whatsapp_no','$city')";

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
            <!-- end main -->
           
    </div>
    
</body>
</html>


