<html>
    <head>
        <link rel='stylesheet' href='./style.css'>
    </head>
    <style>

    div {
        border: 1px solid black;
        margin-bottom: 10px;
    }
    </style>
    <body>
    <?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "dog_database";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    }

    $sql = "SELECT id, d_name, d_breed, d_age, d_address, d_color, d_height, d_weight FROM dogs";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<div>";
        echo "Dog " . $row["id"]. "<br>";
        echo "Name: " . $row["d_name"]. "<br>";
        echo "Breed: " . $row["d_breed"]. "<br>";
        echo "Age: " . $row["d_age"]. "<br>";
        echo "Address: " . $row["d_address"]. "<br>";
        echo "Color: " . $row["d_color"]. "<br>";
        echo "Height: " . $row["d_height"]. " ft<br>";
        echo "Weight: " . $row["d_weight"]. " kilos<br>";
        echo "</div>";
    }
    } else {
    echo "0 results";
    }
    $conn->close();
    ?>
    </body>
</html>