<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "shopp_db";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$name = $_POST['name'] ?? "";
$gameType = $_POST['game_type'] ?? "";
$gameID = $_POST['game_id'] ?? 0;
$giftRequired = $_POST['gift'] ?? "";
$totalAmount = $_POST['amount'] ?? 0;

$sql = "INSERT INTO cart_data(name, game_type, game_id, gift_required, total_amount) 
        VALUES ('$name', '$gameType', $gameID, '$giftRequired', $totalAmount)";

if ($conn->query($sql) === TRUE) {
    echo "Form data inserted successfully.";
} else {
    echo "Error inserting form data: " . $conn->error;
}

$conn->close();
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        form {
  max-width: 400px;
  margin: 0 auto;
}

form div {
  margin-bottom: 10px;
}

label {
  display: block;
  font-weight: bold;
}

input[type="text"],
input[type="number"],
select {
  width: 100%;
  padding: 8px;
  border: 1px solid #ccc;
  border-radius: 4px;
}

button[type="submit"] {
  background-color: #4caf50;
  color: white;
  padding: 10px 15px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

button[type="submit"]:hover {
  background-color: #45a049;
}

    </style>
</head>
<body>

    <section class="form">
        <form action="cart-form.php" method="POST">
        <div>
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required>
        </div>
        <div>
            <label for="game-type">Game Type:</label>
            <select id="game-type" name="game_type" required>
            <option value="">Select Game Type</option>
            <option value="freefire">Free Fire</option>
            <option value="pubg">PUBG</option>
            <option value="coc">Clash of Clans</option>
            <option value="pubg-lite">PUBG Lite</option>
            </select>
        </div>
        <div>
            <label for="game-id">Game ID:</label>
            <input type="text" id="game-id" name="game_id" required>
        </div>
        <div>
            <label for="gift-required">Gift Required:</label>
            <select id="gift-required" name="gift" required>
            <option value="">Select Gift</option>
            <option value="uc">UC</option>
            <option value="diamond">Diamond</option>
            <option value="gems">Gems</option>
            </select>
        </div>
        <div>
            <label for="total-amount">Total Amount Required:</label>
            <input type="number" id="total-amount" name="amount" required>
        </div>
        
        <form action="cart.php" method="POST">
        <!-- Form fields here -->
            <button type="submit">Submit</button>
        </form>
</form>

</form>


    
</body>
</html>