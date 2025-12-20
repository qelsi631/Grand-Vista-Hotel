<!doctype html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <link rel="icon" type="image/svg+xml" href="/vite.svg" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Grand Vista Hotel - Luxury Accommodation</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;700&family=Lato:wght@300;400;700&display=swap" rel="stylesheet">
    <meta property="og:image" content="https://bolt.new/static/og_default.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:image" content="https://bolt.new/static/og_default.png">
    <link rel="stylesheet" href="style.css">
</head>
  <body>
   
    <nav class="navbar">
      <div class="nav-container">
        <div class="logo">Grand Vista Hotel</div>
        <ul class="nav-menu">
          <li><a href="#home">Home</a></li>
          <li><a href="#rooms">Rooms</a></li>
          <li><a href="#amenities">Amenities</a></li>
          <li><a href="#reservation">Book Now</a></li>
        </ul>
        <button class="mobile-menu-toggle" aria-label="Toggle menu">☰</button>
      </div>
    </nav>

  
    <section id="home" class="hero">
      <div class="hero-content">
        <h1>Welcome to Grand Vista Hotel</h1>
        <p>Experience luxury and comfort in the heart of the city</p>
        <a href="#reservation" class="cta-button">Book Your Stay</a>
      </div>
    </section>

  
    <section id="rooms" class="rooms-section">
      <div class="container">
        <h2 class="section-title">Our Rooms</h2>
        <div class="rooms-grid">
          <div class="room-card">
            <img src="https://images.pexels.com/photos/271624/pexels-photo-271624.jpeg?auto=compress&cs=tinysrgb&w=800" alt="Standard Room">
            <div class="room-info">
              <h3>Standard Room</h3>
              <p class="room-price">$129/night</p>
              <p>Comfortable room with essential amenities, perfect for business travelers.</p>
              <ul class="room-features">
                <li>Queen-size bed</li>
                <li>Free Wi-Fi</li>
                <li>24/7 Room Service</li>
              </ul>
            </div>
          </div>

          <div class="room-card">
            <img src="https://images.pexels.com/photos/262048/pexels-photo-262048.jpeg?auto=compress&cs=tinysrgb&w=800" alt="Deluxe Room">
            <div class="room-info">
              <h3>Deluxe Room</h3>
              <p class="room-price">$199/night</p>
              <p>Spacious room with stunning city views and premium amenities.</p>
              <ul class="room-features">
                <li>King-size bed</li>
                <li>City view</li>
                <li>Mini bar</li>
              </ul>
            </div>
          </div>

          <div class="room-card">
            <img src="https://images.pexels.com/photos/1743229/pexels-photo-1743229.jpeg?auto=compress&cs=tinysrgb&w=800" alt="Suite">
            <div class="room-info">
              <h3>Executive Suite</h3>
              <p class="room-price">$349/night</p>
              <p>Luxurious suite with separate living area and exclusive amenities.</p>
              <ul class="room-features">
                <li>King-size bed</li>
                <li>Living room</li>
                <li>Jacuzzi</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </section>

   
    <section id="amenities" class="amenities-section">
      <div class="container">
        <h2 class="section-title">Hotel Amenities</h2>
        <div class="amenities-grid">
          <div class="amenity-item">
            <div class="amenity-icon">🏊</div>
            <h3>Swimming Pool</h3>
            <p>Outdoor pool with poolside bar</p>
          </div>
          <div class="amenity-item">
            <div class="amenity-icon">🍽️</div>
            <h3>Restaurant</h3>
            <p>Fine dining with international cuisine</p>
          </div>
          <div class="amenity-item">
            <div class="amenity-icon">💆</div>
            <h3>Spa & Wellness</h3>
            <p>Full-service spa and fitness center</p>
          </div>
          <div class="amenity-item">
            <div class="amenity-icon">🅿️</div>
            <h3>Free Parking</h3>
            <p>Complimentary valet parking</p>
          </div>
          <div class="amenity-item">
            <div class="amenity-icon">📶</div>
            <h3>Free Wi-Fi</h3>
            <p>High-speed internet throughout</p>
          </div>
          <div class="amenity-item">
            <div class="amenity-icon">🎯</div>
            <h3>Conference Rooms</h3>
            <p>Business center and meeting spaces</p>
          </div>
        </div>
      </div>
    </section>

    <section id="reservation" class="reservation-section">
      <div class="container">
        <h2 class="section-title">Make a Reservation</h2>
        <div class="reservation-content">
          <div class="reservation-info">
            <h3>Book Your Perfect Stay</h3>
            <p>Fill out the form to reserve your room. We'll confirm your booking within 24 hours.</p>
            <div class="contact-info">
              <p><strong>Phone:</strong> +1 (555) 123-4567</p>
              <p><strong>Email:</strong> reservations@grandvista.com</p>
              <p><strong>Address:</strong> 123 Luxury Avenue, City Center</p>
            </div>
          </div>

          <form id="reservationForm" class="reservation-form">
            <div class="form-row">
              <div class="form-group">
                <label for="guestName">Full Name *</label>
                <input type="text" id="guestName" name="guestName" required>
              </div>
              <div class="form-group">
                <label for="email">Email *</label>
                <input type="email" id="email" name="email" required>
              </div>
            </div>

            <div class="form-row">
              <div class="form-group">
                <label for="phone">Phone Number *</label>
                <input type="tel" id="phone" name="phone" required>
              </div>
              <div class="form-group">
                <label for="guests">Number of Guests *</label>
                <input type="number" id="guests" name="guests" min="1" max="4" value="1" required>
              </div>
            </div>

            <div class="form-row">
              <div class="form-group">
                <label for="checkIn">Check-in Date *</label>
                <input type="date" id="checkIn" name="checkIn" required>
              </div>
              <div class="form-group">
                <label for="checkOut">Check-out Date *</label>
                <input type="date" id="checkOut" name="checkOut" required>
              </div>
            </div>

            <div class="form-group">
              <label for="roomType">Room Type *</label>
              <select id="roomType" name="roomType" required>
                <option value="">Select a room type</option>
                <option value="standard">Standard Room - $129/night</option>
                <option value="deluxe">Deluxe Room - $199/night</option>
                <option value="suite">Executive Suite - $349/night</option>
              </select>
            </div>

            <div class="form-group">
              <label for="specialRequests">Special Requests</label>
              <textarea id="specialRequests" name="specialRequests" rows="4" placeholder="Any special requirements or requests..."></textarea>
            </div>

            <button type="submit" class="submit-button">
              <span class="button-text">Complete Reservation</span>
              <span class="button-loader" style="display: none;">Processing...</span>
            </button>

            <div id="formMessage" class="form-message"></div>
          </form>
        </div>
      </div>
    </section>

   
    <footer class="footer">
      <div class="container">
        <div class="footer-content">
          <div class="footer-section">
            <h3>Grand Vista Hotel</h3>
            <p>Your home away from home. Experience luxury, comfort, and exceptional service.</p>
          </div>
          <div class="footer-section">
            <h3>Quick Links</h3>
            <ul>
              <li><a href="#home">Home</a></li>
              <li><a href="#rooms">Rooms</a></li>
              <li><a href="#amenities">Amenities</a></li>
              <li><a href="#reservation">Book Now</a></li>
            </ul>
          </div>
          <div class="footer-section">
            <h3>Contact</h3>
            <p>+1 (555) 123-4567</p>
            <p>reservations@grandvista.com</p>
            <p>123 Luxury Avenue, City Center</p>
          </div>
        </div>
        <div class="footer-bottom">
          <p>&copy; 2024 Grand Vista Hotel. All rights reserved.</p>
        </div>
      </div>
    </footer>

    <script src="main.js"></script>
  </body>
</html>