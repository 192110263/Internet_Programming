<!DOCTYPE html>
<html>
<head>
       <title>My Connectivity</title>

</head>
<body>
    <h1><center>TO Fetch Data From Table</center></h1><br><br>
    <form action="/project/fetch_table.php" method="POST">
        click me to fetch the table:<input type="submit" name="submit" value="click me" >
    </form>
    <?php
        if($_SERVER['REQUEST_METHOD']=='POST')
        {
            $servername="localhost";
            $username='root';
            $password='';
            $database="madhav"; 
            $con=mysqli_connect($servername,$username,$password,$database);
            $sql="SELECT * FROM login";
            $result=mysqli_query($con,$sql);
            if($result)
            {
                echo "<table border='1'>
                            <tr>
                                <th>User Name</th>
                                <th>Password</th>
                            <tr>";

                            while($row = $result->fetch_assoc())
                            {
                                echo "<tr>
                                        <td>".$row["user"]."</td>
                                        <td>".$row["pass"]."</td>
                                        </tr>";
                            }
                echo "</table>";
            }
            else{
                echo "0 results";
            }
            mysqli_close($con);
        }
    ?>