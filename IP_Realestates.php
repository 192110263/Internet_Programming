<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IP HOMES</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }

        header {
            background-color: lightskyblue;
            color: white;
            text-align: center;
            padding: 1em;
        }

        main {
            padding: 20px;
        }

        .property {
            border: 1px solid #ddd;
            width: 500px;
            margin: 10px;
            padding: 10px;
            background-color: white;
            border-radius: 5px;
            overflow: hidden;
        }

        .property img {
            width: 100%;
            height: auto;
        }

        h2 {
            color: #333;
        }

        nav {
            background-color: #444;
            overflow: hidden;
        }
        nav a {
            float: left;
            display: block;
            color: #fff;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
        }
        nav a:hover {
            background-color: #ddd;
            color: #333;
        }
        section {
            padding: 20px;
        }
        nav {
            background-color: #444;
            overflow: hidden;
        }
        nav a {
            float: left;
            display: block;
            color: #fff;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
        }
        nav a:hover {
            background-color: #ddd;
            color: #333;
        }
        section {
            padding: 20px;
        }
        .property{
            background-color: lightsalmon;
        }

        
    </style>
</head>
<body>
    <header >
        <h1>IP HOMES</h1>
    </header>
    <nav>
        <div align="left">
            <a href="home.php">Home</a>
            <a href="IP_Realestates.php">Properties</a>
            <a href="sell.php">Sell</a>
            <a href="contactus.php">Contact</a>
        </div>
        <div align="right">
            <a href="signup.php">signup</a>
            <a href="login.php">login</a>
        </div>
    </nav>

    <main>
        <div class="property">

            <img src="individualhouse.jpeg" alt="individual house.jpeg">
            <h2>Beautiful Home</h2>
            <p>A Individual house with a beautiful garden at the front </p>
            <p>Price: $300,000</p>
            <button>View Details</button>
            <button onclick="window.location.href='buy.php'">BUY</button>
        </div>

        <div class="property 2">
        
            <img src="download.jpeg" alt="apartment.jpeg">

            <h2>Modern Apartment</h2>
            <p>Perched high, this beach-view apartment features floor-to-ceiling windows revealing a 
            stunning panorama of sunlit waves. Modern elegance meets coastal charm in this tranquil retreat,
             a seamless blend of comfort and nature's beauty.</p>
            <p>Price: $200,000</p>
            <button>View Details</button>
            <button onclick="window.location.href='buy.php'">BUY</button>

        </div>
    </main>

</body>
</html>
