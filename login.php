<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
    <style>
        form{
    width: 300px;
    height: 300px;
    border: 2px solid#000;
    padding: 20px;
    margin: 100px;
    }
        body{
        background-color: lightsteelblue;
    }
        input[type="Submit"]{
        width: 60%;
        height: 50px;
        border: 1px solid;
        border-radius: 25px;
        font-size: 18px;
        font-weight: 700;
        cursor: pointer;
    }
    </style>
</head>
<body>
    <div align="center">
        <form action="/project/realestate/login.php" method="post">
            <h1>IP REALESTATES</h1>
            <H5>USER LOGIN</H5>
            <label>username:</label>
            <input type="text" name="username"><br><br><br>
            <label>password:</label>
            <input type="password" name="password"><br><br>
            <input type="submit" value="login" name="login">
        </form>
    </div>
</body>
</html>
<?php
     $db_server="localhost";
     $db_user="root";
     $db_pass="";
     $db_name="madhav";
     $conn="";

     $conn=mysqli_connect($db_server,$db_user,$db_pass,$db_name);

    if($_SERVER["REQUEST_METHOD"]=="POST"){

        $sql= "SELECT USER FROM `login`;";
        $result=mysqli_query($conn,$sql);
        $flag=0;
        $userInput = $_POST['username'];
        $password =$_POST['password'];
        if($result-> num_rows>0){
            while ($row = $result->fetch_assoc()) 
            {
                $dbValue = $row['USER'];
                if($dbValue==$userInput){
                    $flag=1;
                    break;
                }
         }
         if($flag==1){
            echo "valid username";
            $sql="SELECT pass FROM login WHERE USER='$userInput'";
            $row=$result->fetch_assoc();
            $dbValue=$row['pass'];
            echo "{$dbValue}";
            

         }
         else{
            echo "invalid username";
         }
        }
    }


              mysqli_close($conn);
?>










