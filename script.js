let artworks = {
    'art1': {
        title: 'Artwork 1',
        image: 'images/artwork1.jpg',
        description: 'Description of Artwork 1',
        auction: {
            startingBid: 100,
            endDate: '2024-08-15',
            link: 'https://example.com/auction1',
            highestBid: 100
        }
    },
    'art2': {
        title: 'Artwork 2',
        image: 'images/artwork2.jpg',
        description: 'Description of Artwork 2',
        auction: {
            startingBid: 200,
            endDate: '2024-08-20',
            link: 'https://example.com/auction2',
            highestBid: 200
        }
    }
};

function showDetails(artworkId) {
    const details = document.getElementById('details');
    const artTitle = document.getElementById('artTitle');
    const artImage = document.getElementById('artImage');
    const artDescription = document.getElementById('artDescription');
    const auctionBid = document.getElementById('auctionBid');
    const auctionEndDate = document.getElementById('auctionEndDate');
    const auctionLink = document.getElementById('auctionLink');
    const bidForm = document.getElementById('bidForm');
    const bidAmount = document.getElementById('bidAmount');
    const bidStatus = document.getElementById('bidStatus');
    
    const art = artworks[artworkId];
    if (art) {
        artTitle.textContent = art.title;
        artImage.src = art.image;
        artDescription.textContent = art.description;
        auctionBid.textContent = 'Starting Bid: $' + art.auction.startingBid;
        auctionEndDate.textContent = 'Auction Ends: ' + art.auction.endDate;
        auctionLink.href = art.auction.link;
        auctionLink.textContent = 'Participate in Auction';
        bidStatus.textContent = '';

        bidForm.onsubmit = function(event) {
            event.preventDefault();
            const bid = parseFloat(bidAmount.value);
            if (bid > art.auction.highestBid) {
                art.auction.highestBid = bid;
                auctionBid.textContent = 'Highest Bid: $' + art.auction.highestBid;
                bidStatus.textContent = 'Bid placed successfully!';
            } else {
                bidStatus.textContent = 'Bid must be higher than the current highest bid!';
            }
        };

        details.style.display = 'flex';
    }
}

function hideDetails() {
    const details = document.getElementById('details');
    details.style.display = 'none';
}
