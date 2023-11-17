<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment Page</title>
    <style>
        /* Add or modify styles as needed */

        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        header {
            background-color: #333;
            color: #fff;
            text-align: center;
            padding: 1em;
        }

        .container {
            width: 80%;
            margin: 20px auto;
        }

        .product {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .product img {
            max-width: 100%;
            height: auto;
            border-radius: 4px;
            margin-bottom: 20px;
        }

        .product-info {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
        }

        .product-info h2 {
            margin: 0;
        }

        .price {
            font-size: 1.5em;
            color: #2ecc71;
        }

        .payment-form {
            margin-top: 20px;
        }

        .payment-form label {
            display: block;
            margin-bottom: 8px;
        }

        .payment-form input {
            width: 100%;
            padding: 8px;
            margin-bottom: 16px;
            box-sizing: border-box;
        }

        .payment-button {
            background-color: #2ecc71;
            color: #fff;
            padding: 10px 20px;
            font-size: 1em;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        .payment-button:hover {
            background-color: #27ae60;
        }
    </style>
</head>
<body>
    
    <header>
        <h1>Payment Page</h1>
    </header>

    <div class="container">
        <div class="product">
            <img src="product-image.jpg" alt="Product Image">
            <div class="product-info">
                <h2>Product Name</h2>
                <p class="price">$99.99</p>
            </div>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed ullamcorper bibendum est.</p>

            <!-- Payment Form -->
            <form class="payment-form">
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" required>

                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>

                <label for="cardNumber">Credit Card Number:</label>
                <input type="text" id="cardNumber" name="cardNumber" required>

                <label for="expirationDate">Expiration Date:</label>
                <input type="text" id="expirationDate" name="expirationDate" placeholder="MM/YYYY" required>

                <button class="payment-button">Make Payment</button>
            </form>
        </div>
    </div>

</body>
</html>
