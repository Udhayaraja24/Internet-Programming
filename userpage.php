<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Page</title>
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

        #subcategories {
            display: none;
        }

        #main-content {
            padding: 20px;
        }
    </style>
    <script>
        function toggleSubcategories() {
            var subcategories = document.getElementById("subcategories");
            subcategories.style.display = (subcategories.style.display === "block") ? "none" : "block";
        }

        function redirectToCart() {
            window.location.href = "cart.php";
        }

        function redirectToLogout() {
            window.location.href = "logout.php";
        }

        function redirectToGifts() {
            window.location.href = "gift.php";
        }

        function redirectToFlowers() {
            window.location.href = "flower.php";
        }
    </script>
</head>
<body>
    <div id="header">
        <h1>User Page</h1>
    </div>

    <div id="navigation">
        <a href="#home">HOME</a>
        <a href="#" onclick="toggleSubcategories()">CATEGORIES</a>
        <a href="#" onclick="redirectToCart()">CART</a>
        <a href="#" onclick="redirectToLogout()">LOGOUT</a>
    </div>

    <div id="subcategories">
        <ul>
            <li><a href="#" onclick="redirectToGifts()">Gifts</a></li>
            <li><a href="#" onclick="redirectToFlowers()">Flowers</a></li>
        </ul>
    </div>

    <div id="main-content">
        <h2>Welcome to our User Page!</h2>

        <h3>Categories</h3>
        <p>Click on CATEGORIES to see subcategories.</p>

        <h3>Gifts and Flowers</h3>
        <p>
            We specialize in providing a delightful selection of gifts and flowers for every occasion.
            Whether you're celebrating a special moment or expressing your feelings, our carefully curated
            collection ensures you find the perfect choice. Explore our categories, add items to your cart,
            and enjoy the convenience of shopping with us!
        </p>
    </div>
</body>
</html>
