<?php
$servername = "localhost";
$username = "root"; // replace with your DB username
$password = "password"; // replace with your DB password
$dbname = "ArtGallery";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Create database
$sql = "CREATE DATABASE IF NOT EXISTS $dbname";
if ($conn->query($sql) === TRUE) {
    echo "Database created successfully\n";
} else {
    echo "Error creating database: " . $conn->error . "\n";
}

// Select the database
$conn->select_db($dbname);

// Create Artworks table
$sql = "CREATE TABLE IF NOT EXISTS Artworks (
    id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(255) NOT NULL,
    image_path VARCHAR(255) NOT NULL,
    description TEXT NOT NULL
)";

if ($conn->query($sql) === TRUE) {
    echo "Table Artworks created successfully\n";
} else {
    echo "Error creating table Artworks: " . $conn->error . "\n";
}

// Create Auctions table
$sql = "CREATE TABLE IF NOT EXISTS Auctions (
    id INT AUTO_INCREMENT PRIMARY KEY,
    artwork_id INT NOT NULL,
    starting_bid DECIMAL(10, 2) NOT NULL,
    end_date DATE NOT NULL,
    highest_bid DECIMAL(10, 2) DEFAULT 0,
    FOREIGN KEY (artwork_id) REFERENCES Artworks(id)
)";

if ($conn->query($sql) === TRUE) {
    echo "Table Auctions created successfully\n";
} else {
    echo "Error creating table Auctions: " . $conn->error . "\n";
}

// Create Bids table
$sql = "CREATE TABLE IF NOT EXISTS Bids (
    id INT AUTO_INCREMENT PRIMARY KEY,
    auction_id INT NOT NULL,
    user_id INT NOT NULL,
    bid_amount DECIMAL(10, 2) NOT NULL,
    bid_time TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (auction_id) REFERENCES Auctions(id)
)";

if ($conn->query($sql) === TRUE) {
    echo "Table Bids created successfully\n";
} else {
    echo "Error creating table Bids: " . $conn->error . "\n";
}

// Create Users table
$sql = "CREATE TABLE IF NOT EXISTS Users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(255) NOT NULL UNIQUE,
    password_hash VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL UNIQUE
)";

if ($conn->query($sql) === TRUE) {
    echo "Table Users created successfully\n";
} else {
    echo "Error creating table Users: " . $conn->error . "\n";
}

$conn->close();
?>
