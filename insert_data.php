<?php
$servername = "localhost";
$username = "root"; // replace with your DB username
$password = "password"; // replace with your DB password
$dbname = "ArtGallery";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Insert data into Artworks table
$sql = "INSERT INTO Artworks (title, image_path, description) VALUES
('Artwork 1', 'images/artwork1.jpg', 'Description of Artwork 1'),
('Artwork 2', 'images/artwork2.jpg', 'Description of Artwork 2')";

if ($conn->query($sql) === TRUE) {
    echo "Initial data inserted into Artworks table successfully\n";
} else {
    echo "Error inserting data into Artworks table: " . $conn->error . "\n";
}

// Insert data into Auctions table
$sql = "INSERT INTO Auctions (artwork_id, starting_bid, end_date, highest_bid) VALUES
(1, 100.00, '2024-08-15', 100.00),
(2, 200.00, '2024-08-20', 200.00)";

if ($conn->query($sql) === TRUE) {
    echo "Initial data inserted into Auctions table successfully\n";
} else {
    echo "Error inserting data into Auctions table: " . $conn->error . "\n";
}

$conn->close();
?>
