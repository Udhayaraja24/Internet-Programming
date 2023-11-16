<?php
session_start();

// Function to get total cart value
function getTotalCartValue() {
    $total = 0;

    if (isset($_SESSION['cart'])) {
        foreach ($_SESSION['cart'] as $item) {
            $total += $item['price'] * $item['quantity'];
        }
    }

    return $total;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shopping Cart</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        #header {
            background-color: #333;
            color: white;
            padding: 10px;
            text-align: center;
        }

        #navigation {
            background-color: #ddd;
            overflow: hidden;
        }

        #navigation a {
            float: left;
            display: block;
            color: #333;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
            cursor: pointer;
        }

        #navigation a:hover {
            background-color: #555;
            color: white;
        }

        #main-content {
            padding: 20px;
        }

        #cart-items {
            margin-bottom: 20px;
        }

        #total {
            font-weight: bold;
        }
    </style>
</head>
<body>
    <div id="header">
        <h1>Shopping Cart</h1>
    </div>

    <div id="navigation">
        <a href="#home">HOME</a>
        <a href="gifts.php">GIFTS</a>
        <a href="flowers.php">FLOWERS</a>
        <a href="cart.php">CART</a>
        <a href="#logout">LOGOUT</a>
    </div>

    <div id="main-content">
        <h2>Your Shopping Cart</h2>

        <?php
        // Check if the cart is not empty
        if (!empty($_SESSION['cart'])) {
            echo '<div id="cart-items">';
            foreach ($_SESSION['cart'] as $item) {
                echo '<p>' . $item['name'] . ' - Quantity: ' . $item['quantity'] . ' - Price: $' . $item['price'] . '</p>';
            }
            echo '</div>';
        } else {
            echo '<p>Your cart is empty.</p>';
        }
        ?>

        <p id="total">Total: $<?php echo number_format(getTotalCartValue(), 2); ?></p>
    </div>
</body>
</html>
