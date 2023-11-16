<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gifts Page</title>
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

        .product {
            margin-bottom: 20px;
        }

        .product img {
            max-width: 100%;
            height: auto;
        }
    </style>
</head>
<body>
    <div id="header">
        <h1>Gifts Page</h1>
    </div>

    <div id="navigation">
        <a href="#home">HOME</a>
        <a href="gifts.php">GIFTS</a>
        <a href="#cart">CART</a>
        <a href="#logout">LOGOUT</a>
    </div>

    <div id="main-content">
        <h2>Explore Our Gift Products</h2>

        <?php
        // Example gift products
        $gifts = array(
            array(
                'name' => 'Candle Set',
                'price' => '$15.99',
                'image' => 'image1.jpeg',
                'details' => 'A set of scented candles for a cozy atmosphere.'
            ),
            array(
                'name' => 'Floral Mug',
                'price' => '$9.99',
                'image' => 'floral_mug.jpg',
                'details' => 'A beautiful floral-printed mug for your favorite beverages.'
            ),
            array(
                'name' => 'Personalized Notebook',
                'price' => '$12.99',
                'image' => 'personalized_notebook.jpg',
                'details' => 'A stylish notebook that can be personalized with your name.'
            ),
            array(
                'name' => 'Chocolate Box',
                'price' => '$19.99',
                'image' => 'chocolate_box.jpg',
                'details' => 'A delightful assortment of chocolates for sweet moments.'
            ),
            array(
                'name' => 'Scented Bath Bombs',
                'price' => '$14.99',
                'image' => 'bath_bombs.jpg',
                'details' => 'Relax with these scented bath bombs for a spa-like experience.'
            )
        );

        // Display gift products
        foreach ($gifts as $gift) {
            echo '<div class="product">';
            echo '<img src="images/' . $gift['image'] . '" alt="' . $gift['name'] . '">';
            echo '<h3>' . $gift['name'] . '</h3>';
            echo '<p>Price: ' . $gift['price'] . '</p>';
            echo '<p><a href="#" onclick="showDetails(\'' . $gift['details'] . '\')">View Details</a></p>';
            echo '</div>';
        }
        ?>

        <div id="details-modal" style="display: none;">
            <h2>Product Details</h2>
            <p id="details-content"></p>
            <button onclick="closeDetails()">Close</button>
        </div>

        <script>
            function showDetails(details) {
                document.getElementById("details-content").innerHTML = details;
                document.getElementById("details-modal").style.display = "block";
            }

            function closeDetails() {
                document.getElementById("details-modal").style.display = "none";
            }
        </script>
    </div>
</body>
</html>
