<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <title>World Time Zones!!</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />
    <link rel="stylesheet" href="project.css" />
    <link rel="stylesheet" href="style.css" />

    <style>
      /* Background and Typography */
      body {
        background-image: url('https://images.unsplash.com/photo-1550745165-9bc0b252726a?q=80&w=2070&auto=format&fit=crop');
        background-size: cover;
        background-position: center;
        background-attachment: fixed;
      }

      .main-content {
        background-color: rgba(255, 255, 255, 0.92);
        padding: 40px;
        border-radius: 15px;
        box-shadow: 0 4px 20px rgba(0, 0, 0, 0.25);
      }

      .main-content h1,
      .main-content h2 {
        font-weight: bold;
        color: #1a2533;
      }

      .main-content h2 {
        margin-top: 30px;
        font-size: 24px;
      }

      .main-content p {
        line-height: 1.7;
        font-size: 1.1rem;
        color: #212529;
      }

      .main-content ul {
        list-style-type: none;
        padding-left: 0;
      }

      .main-content ul li {
        font-size: 1.05rem;
        background-color: #eaf2f8;
        margin-bottom: 10px;
        padding: 12px 15px;
        border-left: 5px solid #2e86c1;
        border-radius: 5px;
        display: flex;
        align-items: center;
        color: #212529;
      }

      .main-content ul li::before {
        content: '\f00c';
        font-family: 'Font Awesome 6 Free';
        font-weight: 900;
        color: #2e86c1;
        margin-right: 12px;
      }
    </style>
  </head>

  <body>
    <?php
      // You can include a header file here if needed
      // include('header.php');
    ?>

    <div class="main-header d-flex align-items-center">
      <img src="https://cdn.vectorstock.com/i/1000v/31/85/clock-logo-design-vector-22643185.jpg" alt="Logo" />
      <span>WORLD TIME ZONE</span>
      <a href="#">My Account</a>
    </div>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <div class="container-fluid">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <!-- Time Zone Basics -->
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown1" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              <i class="fas fa-clock me-1"></i> Time Zone Basics
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown1">
              <li><a class="dropdown-item" href="#">How many Time Zones Are There?</a></li>
              <li><a class="dropdown-item" href="#">How Time Zones Work</a></li>
              <li><a class="dropdown-item" href="#">What is Standard Time?</a></li>
            </ul>
          </li>

          <!-- Daylight Saving -->
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown2" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              <i class="fas fa-sun me-1"></i> Daylight Saving Explained
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown2">
              <li><a class="dropdown-item" href="heeral1.html">Why Some Countries Move Their Clocks Forward</a></li>
              <li><a class="dropdown-item" href="#">How DST Works</a></li>
            </ul>
          </li>

          <!-- Global Time Zones -->
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown3" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              <i class="fas fa-globe me-1"></i> Global Time Zone Facts
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown3">
              <li><a class="dropdown-item" href="#">🇫🇷 Which Country Has the Maximum Time Zones?</a></li>
              <li><a class="dropdown-item" href="#">🇮🇳 Which Country Has the Minimum?</a></li>
              <li><a class="dropdown-item" href="#">UTC Offset Table</a></li>
            </ul>
          </li>

          <!-- Tools and Resources -->
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown4" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              <i class="fas fa-tools me-1"></i> Tools and Resources
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown4">
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

    <main class="container my-5">
      <div class="main-content">
        <h1>How Does Daylight Saving Time Work?</h1>
        <p><strong>Daylight Saving Time (DST)</strong> works by shifting the clock forward by one hour during the warmer months—usually starting in <em>spring</em> and ending in <em>autumn</em>. The idea is to make better use of natural daylight during the longer days of summer. By adjusting the clock, people wake up and go to bed “an hour earlier” by the clock than they would during the rest of the year. This means more daylight is available in the evening, which reduces the need for artificial lighting and saves energy.</p>
        <p>For example, when DST begins, 6:00 AM becomes 7:00 AM, and the sun appears to rise later by the clock—but people still get the same amount of daylight. Then, when DST ends in autumn, clocks are set back one hour to standard time. This adjustment affects sleep cycles, work hours, and even global communication. While it helps in reducing electricity usage and giving more daylight in the evenings, not all countries follow DST.</p>

        <h2>Key Points:</h2>
        <ul>
          <li>DST begins in spring by moving clocks one hour forward.</li>
          <li>Ends in autumn by setting clocks one hour back.</li>
          <li>Increases daylight during evenings.</li>
          <li>Reduces artificial energy consumption.</li>
          <li>Helps align human routines with sunlight.</li>
          <li>Affects health, sleep, work, and international calls.</li>
          <li>Only used in selected countries across the globe.</li>
        </ul>
      </div>
    </main>

    <footer class="bg-dark text-white text-center text-lg-start mt-5">
      <div class="container p-4">
        <div class="row">
          <div class="col-lg-6 col-md-12 mb-4 mb-md-0">
            <h5 class="text-uppercase">World Time Zones</h5>
            <p>Stay updated with accurate current times from across the globe. Perfect for travelers, business professionals, and global teams.</p>
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

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>
