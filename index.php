<?php
session_start();
$connection = mysqli_connect("localhost", "root", '', "multiple");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $names = $_POST['name'];
    $numbers = $_POST['number'];

    $stmt = $connection->prepare("INSERT INTO element(name, number) VALUES (?, ?)");
    $stmt->bind_param("ss", $name, $number);

    foreach ($names as $index => $name) {
        $number = $numbers[$index];
        $stmt->execute();
    }

    $stmt->close();
}
?>

<!DOCTYPE html>
<html lang='en'>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="multiple.css">
</head>
<body>
    <div class="container" id="container">
        <div class="box" id="box">
            <div class="header">
                <h4>Add multiple input</h4>
                <button id="add" class="add-more">Add more</button>
            </div>
            <form action="" method="post">
                <div id="take-all" class="take-all">
                    <div class="first-name">
                        <input type="text" placeholder="NAME" name="name[]" required>
                    </div>
                    <div class="phone-number">
                        <input type="number" placeholder="Phone Number" name="number[]" required>
                    </div>
                </div>
                <div class="save-all">
                    <button type="submit">Save All</button>        
                </div>
            </form>
        </div>
    </div>
    <script src="script.js"></script>
</body>
</html>
