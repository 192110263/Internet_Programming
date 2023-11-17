<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>IP realestate</title>
    <style>
    form{
        border-radius: 25px;
        background-image: "back.jpg";
        width: 300px;
        height: 300px;
        border: 2px solid#000;
        padding: 20px;
        margin: 100px;
        }
</style>
</head>
<body>
    <div align="center">
        <form action="signup.php" method="post">
            <h1>IP REALESTATES</h1>
            <H5>USER SIGNIN</H5>
            <label>username:</label>
            <input type="text" name="username"><br><br><br>
            <label>password:</label>
            <input type="password" name="password"><br><br>
            already have an account: <a href="login.php">login</a><br>
            <input type="submit" value="signin" name="signin">

        </form>
    </div>
</body>
</html>

<?php
    $conn=mysqli_connect("localhost","root","","madhav");
    if($_SERVER["REQUEST_METHOD"]=="POST"){
        $username=$_POST["username"];
        $password=$_POST["password"];
        if(empty("$username") && empty("$password")){
            echo "missing username or password";
        }
        else{
            $sql="INSERT INTO login (user,pass) values('$username','$password')";
            mysqli_query($conn,$sql);
            header("location:login.php");
        }
    }

    mysqli_close($conn);

?>