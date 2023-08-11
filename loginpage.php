<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>loginpage</title>
</head>

<body>
    <home>
    <form action="#" method="POST">
        Emailid:<input type="text" name="email">
        </br>
        password:<input type="password" name="password">
        <br>
        <input type="submit" name="submit" value="submit">

    </form>
  <?php
if(isset($_POST['submit']))
{
    $server="localhost";
    $username="root";
    $password="123";
    $database="skill";
    $conn=mysqli_connect($server,$username,$password,$database);
    $qre="SELECT * FROM userskill";
    $result=mysqli_query($conn,$qre);
    while($row=mysqli_fetch_assoc($result)>0)
    {
        echo $row['FirstName'];
    }
}
?>   
</body>

</html>