<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Flowers Page</title>
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
        <h1>Flowers Page</h1>
    </div>

    <div id="navigation">
        <a href="#home">HOME</a>
        <a href="gifts.php">GIFTS</a>
        <a href="flowers.php">FLOWERS</a>
        <a href="#cart">CART</a>
        <a href="#logout">LOGOUT</a>
    </div>

    <div id="main-content">
        <h2>Explore Our Flower Products</h2>

        <?php
        // Example flower products
        $flowers = array(
            array(
                'name' => 'Rose Bouquet',
                'price' => '$29.99',
                'image' => 'rose_bouquet.jpg',
                'details' => 'A stunning bouquet of fresh red roses for special occasions.'
            ),
            array(
                'name' => 'Lily Arrangement',
                'price' => '$24.99',
                'image' => 'lily_arrangement.jpg',
                'details' => 'An elegant arrangement of white lilies for a touch of sophistication.'
            ),
            array(
                'name' => 'Sunflower Vase',
                'price' => '$19.99',
                'image' => 'sunflower_vase.jpg',
                'details' => 'A cheerful vase filled with bright sunflowers to brighten your day.'
            ),
            array(
                'name' => 'Orchid Plant',
                'price' => '$34.99',
                'image' => 'orchid_plant.jpg',
                'details' => 'A potted orchid plant, perfect for adding a touch of luxury to your space.'
            ),
            array(
                'name' => 'Mixed Flower Basket',
                'price' => '$39.99',
                'image' => 'flower_basket.jpg',
                'details' => 'A delightful basket featuring a mix of colorful flowers for any occasion.'
            )
        );

        // Display flower products
        foreach ($flowers as $flower) {
            echo '<div class="product">';
            echo '<img src="images/' . $flower['image'] . '" alt="' . $flower['name'] . '">';
            echo '<h3>' . $flower['name'] . '</h3>';
            echo '<p>Price: ' . $flower['price'] . '</p>';
            echo '<p><a href="#" onclick="showDetails(\'' . $flower['details'] . '\')">View Details</a></p>';
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
