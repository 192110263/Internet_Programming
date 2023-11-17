<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Real Estate Business</title>
    <style>
        /* Styles from the previous example remain unchanged */

        section.sell {
            background-color: #fff;
            border: 1px solid #ddd;
            border-radius: 8px;
            padding: 20px;
            margin-top: 20px;
        }

        form {
            margin-top: 20px;
        }

        label {
            display: block;
            margin-bottom: 8px;
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
        textarea {
            width: 100%;
            padding: 8px;
            margin-bottom: 16px;
            box-sizing: border-box;
        }
        header {
            background-color: lightskyblue;
            color: white;
            text-align: center;
            padding: 1em;
        }
    </style>
</head>

<body>

    <header>
        <h1>IP REALESTATES</h1>
    </header>

    <nav>
        <div>
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
        <section>
            <h2>Welcome to Your Real Estate Portal</h2>
            <p>Find your dream home or sell your property with ease.</p>
            <!-- Add more content as needed -->
        </section>
        <section class="sell">
            <h2>Sell Your Property</h2>
            <p>If you're looking to sell your property, we're here to help. Fill out the form below, and one of our agents will contact you shortly.</p>
            <form action="/submit_sell_form" method="post">
                <label for="propertyType">Property Type:</label>
                <input type="text" id="propertyType" name="propertyType" required>
                <label for="location">Location:</label>
                <input type="text" id="location" name="location" required>
                <label for="numberOfBedrooms">Number of Bedrooms:</label>
                <input type="number" id="numberOfBedrooms" name="numberOfBedrooms" required>
                <label for="numberOfBathrooms">Number of Bathrooms:</label>
                <input type="number" id="numberOfBathrooms" name="numberOfBathrooms" required>
                <label for="price">Expected Price:</label>
                <input type="text" id="price" name="price" required>
                <label for="additionalDetails">Additional Details:</label>
                <textarea id="additionalDetails" name="additionalDetails" rows="4"></textarea>
                <button type="submit">Submit</button>
            </form>
        </section>
    </main>
    <footer>
        <p>&copy; 2023 Your Real Estate Business. All rights reserved.</p>
    </footer>

</body>

</html>
