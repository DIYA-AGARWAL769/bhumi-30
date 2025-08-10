<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Time Zone Summary</title>

    <!-- Bootstrap CSS -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="style.css">

    <!-- Custom CSS for hover effects -->
    <style>
      .card {
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        border-radius: 1rem;
      }

      .card:hover {
        transform: translateY(-10px) scale(1.02);
        box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
      }

      .card-title {
        font-weight: bold;
      }

      .card-body p {
        font-size: 1rem;
      }

      h5.text-danger {
        font-weight: 600;
      }

      body {
        background-color: #f8f9fa;
      }
    </style>
  </head>
  <body>
    <div id="particles-js"></div>

    <div class="content-wrapper">
        <div class="main-header d-flex align-items-center">
            <img src="https://cdn.vectorstock.com/i/1000v/31/85/clock-logo-design-vector-22643185.jpg" alt="Logo" />
            <span>WORLD TIME ZONE</span>
        </div>
        <h4>
        <div class="heading text-center">
            SUMMARY CARDS
        </div>
        </h4>
        <div class="container mt-5">
          <div class="row g-4 justify-content-center">

            <!-- Card 1 -->
            <div class="col-md-4">
              <div class="card text-center shadow">
                <div class="card-body">
                  <h3 class="card-title">🕰️ Based on UTC (Coordinated Universal Time)</h3>
                  <hr />
                  <p class="text-muted">
                    UTC is the global reference for time. Regions are ahead or behind UTC (e.g., India is UTC+5:30, New York is UTC−5 or UTC−4 during DST).
                  </p>
                  <hr />
                  <h5 class="text-danger">This helps in syncing clocks and comparing time across countries.</h5>
                </div>
              </div>
            </div>

            <!-- Card 2 -->
            <div class="col-md-4">
              <div class="card text-center shadow">
                <div class="card-body">
                  <h3 class="card-title">🌞 Some Use Daylight Saving Time (DST)</h3>
                  <hr />
                  <p class="text-muted">
                    Many Western countries shift clocks 1 hour forward in summer (DST). For example, the US and most of Europe do this.
                  </p>
                  <hr />
                  <h5 class="text-danger">Countries like India, China, and Japan don’t follow DST, so their time stays constant year-round.</h5>
                </div>
              </div>
            </div>

            <!-- Card 3 -->
            <div class="col-md-4">
              <div class="card text-center shadow">
                <div class="card-body">
                  <h3 class="card-title">⏳ Unusual Offsets & Time Zone Changes</h3>
                  <hr />
                  <p class="text-muted">
                    Not all zones are in full hours. India is UTC+5:30, Nepal UTC+5:45. Some governments even change time zones.
                  </p>
                  <hr />
                  <h5 class="text-danger">Developers use databases like IANA (e.g., "Asia/Kolkata") to keep time zones accurate and updated.</h5>
                </div>
              </div>
            </div>

          </div>
        </div>

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
                            <li><a href="#" class="text-white text-decoration-none">About Us</a></li>
                            <li><a href="#" class="text-white text-decoration-none">Contact</a></li>
                            <li><a href="#" class="text-white text-decoration-none">FAQs</a></li>
                            <li><a href="#" class="text-white text-decoration-none">Privacy Policy</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
                        <h5 class="text-uppercase">Contact</h5>
                        <p>Email: support@worldtime.com<br>Phone: +1-234-567-890</p>
                    </div>
                </div>
            </div>
            <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
                © 2025 World Time Zones. All rights reserved.
            </div>
        </footer>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>
