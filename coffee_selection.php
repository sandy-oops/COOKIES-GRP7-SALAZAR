<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Coffee Selection</title>
    <link rel="stylesheet" href="style.css">
    <style>
        body {
            background-color: black;
            color: white;
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }
        h1 {
            text-align: center;
            margin: 40px 0 20px;
            font-size: 2.5em;
        }
        .coffee-list {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 30px;
            padding: 0 20px;
        }
        .coffee-item {
            background: #2c2c2c;
            border-radius: 12px;
            text-align: center;
            padding: 20px;
            width: 350px;
            height: 200px;
            transition: transform 0.2s, box-shadow 0.2s;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.5);
            display: flex;
            flex-direction: row;
            align-items: center;
        }
        .coffee-item img {
            max-width: 100px;
            height: auto;
            border-radius: 8px;
            margin-right: 20px;
        }
        .coffee-item h3 {
            margin: 0;
            font-size: 1.5em;
        }
        .coffee-item p {
            margin-top: 5px;
            font-size: 0.9em;
        }
        .coffee-item:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.7);
        }
        .back-button {
            display: inline-block;
            margin: 30px auto;
            padding: 10px 20px;
            background-color: #7b5b29;
            color: white;
            border: none;
            border-radius: 4px;
            text-decoration: none;
            font-weight: bold;
            text-align: center;
        }
        .back-button:hover {
            background-color: #6a4e2e;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Coffee Selection</h1>
        <div class="coffee-list">
            <div class="coffee-item">
                <img src="pics/espresso.jpg" alt="Espresso">
                <div>
                    <h3>Espresso</h3>
                    <p>A rich, full-bodied coffee brewed by forcing hot water through finely-ground coffee beans.</p>
                </div>
            </div>
            <div class="coffee-item">
                <img src="pics/latte.jpg" alt="Latte">
                <div>
                    <h3>Latte</h3>
                    <p>A smooth blend of espresso and steamed milk, topped with a light layer of foam.</p>
                </div>
            </div>
            <div class="coffee-item">
                <img src="pics/cappucino.jpg" alt="Cappuccino">
                <div>
                    <h3>Cappuccino</h3>
                    <p>A classic coffee drink made with equal parts espresso, steamed milk, and frothy milk foam.</p>
                </div>
            </div>
            <div class="coffee-item">
                <img src="pics/americano.jpeg" alt="Americano">
                <div>
                    <h3>Americano</h3>
                    <p>A simple yet satisfying coffee made by diluting espresso with hot water.</p>
                </div>
            </div>
            <div class="coffee-item">
                <img src="pics/mocha.jpg" alt="Mocha">
                <div>
                    <h3>Mocha</h3>
                    <p>A delicious blend of espresso, steamed milk, and chocolate syrup, topped with whipped cream.</p>
                </div>
            </div>
            <div class="coffee-item">
                <img src="pics/flatwhite.jpg" alt="Flat White">
                <div>
                    <h3>Flat White</h3>
                    <p>A velvety espresso drink with microfoam, creating a rich and creamy texture.</p>
                </div>
            </div>
        </div>
        <a class="back-button" href="homepage.php">Back to Menu</a>
    </div>
</body>
</html>
