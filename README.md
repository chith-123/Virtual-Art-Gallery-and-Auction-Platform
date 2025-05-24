# Virtual-Art-Gallery-and-Auction-Platform

The Virtual Art Gallery and Auction Platform is a dynamic web-based application developed using PHP and MySQL that allows artists to showcase their artwork online and enables users to view, appreciate, and bid on artwork through a secure auction system.

## Key Features
Art Gallery – Displays a curated collection of digital artworks with artist details.
Artwork Filtering – Users can filter artworks by category, price, artist, or medium.
Artwork Upload – Artists can register and upload their artwork with descriptions and images.
Artist Profiles – Dedicated pages for each artist to showcase their bio and portfolio.
Auction System – Users can place bids on selected artwork with a real-time countdown.
User Authentication – Secure login for both artists and buyers.
Admin Panel – Admin can manage artworks, users, categories, and auction results.

## Tech Stack
Frontend: HTML, CSS, JavaScript, Bootstrap
Backend: PHP
Database: MySQL
Server: Apache (XAMPP/WAMP recommended for local development)

## How It Works
Users can browse the gallery, register an account, and participate in live auctions.
Artists can register, upload their artwork, and monitor bids.
Admins manage platform content, approve artworks, and handle disputes if any.
The auction system automatically determines the highest bidder and closes bidding after the set duration.

## Setup Instructions
Clone the repository and place it in your htdocs folder (if using XAMPP):
git clone https://github.com/your-username/virtual-art-gallery.git
Import the artgallery.sql database into phpMyAdmin.
Update database credentials in config.php.
Run the project by accessing:
http://localhost/virtual-art-gallery/

## Future Improvements
Payment gateway integration
Real-time chat between artist and buyer
Highlighting top artists or trending artworks
