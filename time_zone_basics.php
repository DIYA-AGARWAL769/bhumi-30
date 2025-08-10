<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <title>World Clock Zones!!</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <link rel="stylesheet" href="d_02.css">
  </head>

  <body>

    <!-- Header -->
    <div class="main-header d-flex align-items-center">
      <img src="https://cdn.vectorstock.com/i/1000v/31/85/clock-logo-design-vector-22643185.jpg" alt="Logo" />
      <span>WORLD TIME ZONE</span>
      <a href="#">My Account</a>
    </div>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <div class="container-fluid">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">

          <!-- Time Zone Basics -->
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="tzDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              <i class="fas fa-clock me-1"></i> Time Zone Basics
            </a>
            <ul class="dropdown-menu" aria-labelledby="tzDropdown">
              <li><a class="dropdown-item" href="timezonebasics.html">How many Time Zones Are There?</a></li>
              <li><a class="dropdown-item" href="zoneworking.html">How Time Zones Work?</a></li>
            </ul>
          </li>

          <!-- DST -->
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="dstDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              <i class="fas fa-sun me-1"></i> Daylight Saving Explained
            </a>
            <ul class="dropdown-menu" aria-labelledby="dstDropdown">
              <li><a class="dropdown-item" href="#">Why Some Countries Move Their Clocks Forward</a></li>
              <li><a class="dropdown-item" href="#">How DST Works</a></li>
            </ul>
          </li>

          <!-- Global Time Zone Facts -->
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="globalDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              <i class="fas fa-globe me-1"></i> Global Time Zone Facts
            </a>
            <ul class="dropdown-menu" aria-labelledby="globalDropdown">
              <li><a class="dropdown-item" href="#">🇫🇷 Which Country Has the Maximum Time Zones?</a></li>
              <li><a class="dropdown-item" href="#">🇮🇳 Which Country Has the Minimum?</a></li>
              <li><a class="dropdown-item" href="#">UTC Offset Table</a></li>
            </ul>
          </li>

          <!-- Tools -->
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="toolsDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              <i class="fas fa-tools me-1"></i> Tools and Resources
            </a>
            <ul class="dropdown-menu" aria-labelledby="toolsDropdown">
              <li><a class="dropdown-item" href="#">Time Converter Tool</a></li>
              <li><a class="dropdown-item" href="#">World Map Search</a></li>
              <li><a class="dropdown-item" href="#">Summary Cards</a></li>
            </ul>
          </li>
        </ul>

        <!-- Search Form -->
        <form class="d-flex" method="GET" action="#">
          <input class="form-control me-2" type="search" name="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
      </div>
    </nav>

    <!-- Time Intro Section -->
    <div class="time bg-primary">
      <div class="image">
        <img src="https://media.istockphoto.com/id/902371870/vector/clock-face-with-roman-numerals.jpg?s=612x612&w=0&k=20&c=adVJLCZqWmCcYowU_i-e-75L6JXrgJBoQ4-Oeewfsns=" alt="">
      </div>
      <span class="zone" style="font-size: 30px; color:black">What Are Time Zones?</span>
    </div>

    <!-- Description -->
    <div class="timezone">
      A time zone is a region of the Earth that has the same standard time...
    </div>

    <!-- Time Zone Basics Section -->
    <div class="container">
      <h1 class="section-heading">Time Zone Basics</h1>

      <div class="row g-4">
        <div class="col-md-4">
          <div class="black-box first-box">
            <h4>Why do Time Zones Exist?</h4>
            <ul>
              <li>The Earth rotates once every 24 hours (360° in one full rotation)</li>
              <li>So, every 15 degrees of longitude represents 1 hour (360 ÷ 24 = 15).</li>
              <li>The world is divided into 24 standard time zones.</li>
              <li>When it's day in one place, it's night in another.</li>
            </ul>
          </div>
        </div>

        <div class="col-md-4">
          <div class="black-box">
            <h4>Standard Time and UTC</h4>
            <ul>
              <li>UTC is the base time at 0° longitude (Greenwich, England).</li>
              <li>Other zones are offsets from UTC.</li>
              <li>India: UTC+5:30</li>
            </ul>
          </div>
        </div>

        <div class="col-md-4">
          <div class="black-box">
            <h4>How Time Zones Affect Us</h4>
            <ul>
              <li>Business hours differ globally.</li>
              <li>Crucial for flights and online meetings.</li>
              <li>Needed for global sports/events scheduling.</li>
              <li>Stock markets run by local time.</li>
            </ul>
          </div>
        </div>

        <div class="box">
          <pre><strong>
There are more than 24 time zones due to half-hour and 45-minute variations.
Examples:
India: UTC+5:30
Nepal: UTC+5:45
Newfoundland: UTC−3:30
Chatham Islands: UTC+12:45
          </strong></pre>
        </div>
      </div>
    </div>

    <!-- Footer -->
    <footer class="bg-dark text-white text-center mt-5">
      <div class="container p-4">
        <div class="row">
          <div class="col-lg-6 col-md-12 mb-4 mb-md-0">
            <h5 class="text-uppercase">World Time Zones</h5>
            <p>Stay updated with accurate time across the globe. Perfect for travelers, professionals, and teams.</p>
          </div>

          <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
            <h5 class="text-uppercase">Quick Links</h5>
            <ul class="list-unstyled mb-0">
              <li><a href="#about" class="text-white text-decoration-none">About Us</a></li>
              <li><a href="#contact" class="text-white text-decoration-none">Contact</a></li>
              <li><a href="#faq" class="text-white text-decoration-none">FAQs</a></li>
              <li><a href="#privacy" class="text-white text-decoration-none">Privacy Policy</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
            <h5 class="text-uppercase">Contact</h5>
            <p>Email: support@worldtime.com</p>
            <p>Phone: +1-234-567-890</p>
          </div>
        </div>
      </div>

      <div class="text-center p-3 bg-secondary">
        © <?php echo date("Y"); ?> World Time Zones. All rights reserved.
      </div>
    </footer>

    <!-- Bootstrap JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>
