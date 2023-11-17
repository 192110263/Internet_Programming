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
$db_server = "localhost";
$db_user = "root";
$db_pass = "";
$db_name = "madhav";
$conn = "";

$conn = mysqli_connect($db_server, $db_user, $db_pass, $db_name);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $userInput = mysqli_real_escape_string($conn, $_POST['username']);
    $passwordInput = mysqli_real_escape_string($conn, $_POST['password']);

    // Check if the username exists
    $sql = "SELECT * FROM `login` WHERE USER = '$userInput'";
    $result = mysqli_query($conn, $sql);

    if (!$result) {
        die("Error: " . mysqli_error($conn));
    }

    if (mysqli_num_rows($result) > 0) {
        // Username exists, now check the password
        $row = mysqli_fetch_assoc($result);
        $dbPassword = $row['PASS'];

        // Verify the password
        if (password_verify($passwordInput, $dbPassword)) {
            echo "Login successful";
            header("location:home.php");
        } else {
            echo "Invalid password";
        }
    } else {
        echo "Invalid username";
    }
}

mysqli_close($conn);
?>
