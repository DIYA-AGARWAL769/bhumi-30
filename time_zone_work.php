<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">

  <title>World Clock Zones!!</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
  <link rel="stylesheet" href="d_01.css">

</head>
<body>

  <!-- Header -->
  <div class="main-header d-flex align-items-center">
    <img src="https://cdn.vectorstock.com/i/1000v/31/85/clock-logo-design-vector-22643185.jpg" alt="Logo" />
    <span>WORLD TIME ZONE</span>
    <a href="#">My Account</a>
  </div>

  <!-- Navigation Bar -->
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">

        <!-- Time Zone Basics -->
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            <i class="fas fa-clock me-1"></i> Time Zone Basics
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="timezonebasics.html">How many Time Zones Are There?</a></li>
            <li><a class="dropdown-item" href="#">How Time Zones Work</a></li>
            <li><a class="dropdown-item" href="#">What is Standard Time?</a></li>
          </ul>
        </li>

        <!-- DST -->
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            <i class="fas fa-sun me-1"></i> Daylight Saving Explained
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="#">Why Some Countries Move Their Clocks Forward</a></li>
            <li><a class="dropdown-item" href="#">How DST Works</a></li>
          </ul>
        </li>

        <!-- Global Time Zone Facts -->
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            <i class="fas fa-globe me-1"></i> Global Time Zone Facts
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="#">🇫🇷 Which Country Has the Maximum Time Zones?</a></li>
            <li><a class="dropdown-item" href="#">🇮🇳 Which Country Has the Minimum?</a></li>
            <li><a class="dropdown-item" href="#">UTC Offset Table</a></li>
          </ul>
        </li>

        <!-- Tools -->
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            <i class="fas fa-tools me-1"></i> Tools and Resources
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="#">Time Converter Tool</a></li>
            <li><a class="dropdown-item" href="#">World Map Search</a></li>
            <li><a class="dropdown-item" href="#">Summary Cards</a></li>
          </ul>
        </li>
      </ul>

      <!-- Search -->
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" />
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </nav>

  <!-- Main Content -->
  <div class="container mt-5">
    <div class="black-box">
      <div class="icons"> ⏰🌍 <span class="heading"><strong>Timezonics</strong></span></div>
      <hr>
      <div class="content d-flex">
        <ul>
          <li><strong>Prime Reference Point:</strong> Greenwich, England (0° longitude) is the Prime Meridian (GMT or UTC).</li>
          <li><strong>Time increases/decreases</strong> by 1 hour per zone east/west.</li>
          <li><strong>East of GMT</strong> → Time adds (e.g., India is UTC+5:30)</li>
          <li><strong>West of GMT</strong> → Time subtracts (e.g., New York is UTC−5)</li>
          <li><strong>Some countries</strong> use half/quarter-hour offsets (India, Nepal).</li>
        </ul>
        <div class="image">
          <img src="https://t4.ftcdn.net/jpg/03/59/18/75/360_F_359187533_QQqlZCzNwSZ5DVPUGuHYvRKaEu2dHDJX.jpg" alt="prime meridian" />
        </div>
      </div>
    </div>
  </div>

  <!-- Info Boxes -->
  <div class="container mt-5">
    <div class="row g-4">
      <div class="col-md-4">
        <div class="black-box first-box">
          <ul><strong>
            <li><strong>TIME DIFFERENCE</strong></li>
            <h3>Example:</h3>
            <li>12:00 AM in London:</li>
            <li>5:30 AM in India</li>
            <li>7:00 PM in New York</li>
          </strong></ul>
        </div>
      </div>

      <div class="col-md-4">
        <div class="black-box first-box">
          <div class="text">Political and Practical Adjustments</div>
          <ul><strong>
            <li>Time zones don't always follow 15° intervals due to:</li>
            <li>Convenience</li>
            <li>National Borders</li>
            <li>Business or culture</li>
          </strong></ul>
        </div>
      </div>

      <div class="col-md-4">
        <div class="black-box first-box">
          <div class="text2">Summary</div>
          <p><strong>
            Time zones help align clocks with the Sun's position. Each zone ensures the local time matches the natural daylight cycle.
          </strong></p>
        </div>
      </div>
    </div>
  </div>

  <!-- Footer -->
  <footer class="bg-dark text-white text-center mt-5">
    <div class="container p-4">
      <div class="row">
        <div class="col-lg-6 col-md-12 mb-4 mb-md-0">
          <h5 class="text-uppercase">World Time Zones</h5>
          <p>
            Stay updated with accurate current times from across the globe.
            Perfect for travelers, business professionals, and global teams.
          </p>
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

  <!-- Bootstrap Bundle -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
