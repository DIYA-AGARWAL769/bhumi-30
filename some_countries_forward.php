<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <title>World Time Zones!!</title>
    
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css"
    />

    <link rel="stylesheet" href="project.css">
    <link rel="stylesheet" href="style.css" />
  </head>

  <body>
    <div id="tsparticles"></div>

    <div class="main-header d-flex align-items-center">
      <img
        src="https://cdn.vectorstock.com/i/1000v/31/85/clock-logo-design-vector-22643185.jpg"
        alt="Logo"
      />
      <span>WORLD TIME ZONE</span>
      <a href="#">My Account</a>
    </div>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <div class="container-fluid">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <!-- Dropdown Menus -->
          <!-- ...Same HTML as before -->
        </ul>

        <form class="d-flex">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" />
          <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
      </div>
    </nav>

    <main class="container my-5">
      <div class="main-content">
        <h1>Why Some Countries Move Their Clocks Forward</h1>

        <p class="styled-paragraph">
          <?php
            echo "The primary reason some countries move their clocks forward is to observe ";
            echo "<strong>Daylight Saving Time (DST)</strong>, also known as 'summer time.'";
          ?>
          The core idea behind DST is to make better use of natural daylight during the longer days of spring, summer, and early autumn by shifting an hour of light from the morning to the evening.
        </p>

        <hr class="my-4">

        <!-- Rest of the content (same as HTML) -->
      </div>
    </main>

    <footer class="bg-dark text-white text-center text-lg-start mt-5">
      <div class="container p-4">
        <div class="row">
          <!-- Footer content -->
        </div>
      </div>

      <div class="text-center p-3 bg-secondary">
        &copy; <?php echo date("Y"); ?> World Time Zones. All rights reserved.
      </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/tsparticles@2.12.0/tsparticles.bundle.min.js"></script>
    
    <script>
      // tsParticles JS Config (unchanged)
    </script>
  </body>
</html>
