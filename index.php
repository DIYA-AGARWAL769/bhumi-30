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
    <link rel="stylesheet" href="style.css" />
  </head>
  <body>
    <div id="particles-js"></div>

    <div class="content-wrapper">
      <div class="main-header d-flex align-items-center">
        <img
          src="https://cdn.vectorstock.com/i/1000v/31/85/clock-logo-design-vector-22643185.jpg"
          alt="Logo"
        />
        <span>WORLD TIME ZONE</span>
        <div class="dropdown">
          <button
            class="btn btn-primary dropdown-toggle"
            type="button"
            id="dropdownMenuButton1"
            data-bs-toggle="dropdown"
            aria-expanded="false"
          >
            My Account
          </button>
          <ul class="dropdown-menu dropdown-menu-end">
            <li><a class="dropdown-item" href="sign_in.php">Sign in </a></li>
            <li><a class="dropdown-item" href="register.php">Register</a></li>
          </ul>
        </div>
      </div>

      <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item dropdown">
              <a
                class="nav-link dropdown-toggle"
                href="#"
                id="navbarDropdown1"
                role="button"
                data-bs-toggle="dropdown"
                aria-expanded="false"
              >
                <i class="fas fa-clock me-1"></i> Time Zone Basics
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdown1">
                <li>
                  <a class="dropdown-item" href="time_zone_basics.php"
                    >How many Time Zones Are There?</a
                  >
                </li>
                <li>
                  <a class="dropdown-item" href="time_zone_work.php">How Time Zones Work</a>
                </li>
              </ul>
            </li>
            <li class="nav-item dropdown">
              <a
                class="nav-link dropdown-toggle"
                href="#"
                id="navbarDropdown2"
                role="button"
                data-bs-toggle="dropdown"
                aria-expanded="false"
              >
                <i class="fas fa-sun me-1"></i> Daylight Saving Explained
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdown2">
                <li>
                  <a class="dropdown-item" href="some_countries_forward.php"
                    >Why Some Countries Move Their Clocks Forward</a
                  >
                </li>
                <li><a class="dropdown-item" href="dst.php">How DST Works</a></li>
              </ul>
            </li>
            <li class="nav-item dropdown">
              <a
                class="nav-link dropdown-toggle"
                href="#"
                id="navbarDropdown3"
                role="button"
                data-bs-toggle="dropdown"
                aria-expanded="false"
              >
                <i class="fas fa-globe me-1"></i> Global Time Zone Facts
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdown3">
                <li>
                  <a class="dropdown-item" href="global_time_zone.php"
                    >🇫🇷 Which Country Has the Maximum Time Zones?</a
                  >
                </li>
                <li>
                  <a class="dropdown-item" href="global_time_zone.php"
                    >🇮🇳 Which Country Has the Minimum?</a
                  >
                </li>
                <li><a class="dropdown-item" href="global_time_zone.php">UTC Offset Table</a></li>
              </ul>
            </li>
            <li class="nav-item dropdown">
              <a
                class="nav-link dropdown-toggle"
                href="#"
                id="navbarDropdown4"
                role="button"
                data-bs-toggle="dropdown"
                aria-expanded="false"
              >
                <i class="fas fa-tools me-1"></i> Tools and Resources
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdown4">
                <li>
                  <a class="dropdown-item" href="time_converter.php"
                    >Time Converter Tool</a
                  >
                </li>
                <li><a class="dropdown-item" href="summary_cards.php">Summary Cards</a></li>
              </ul>
            </li>
          </ul>
          <form class="d-flex">
            <input
              class="form-control me-2"
              type="search"
              placeholder="Search"
              aria-label="Search"
            />
            <button class="btn btn-outline-success" type="submit">
              Search
            </button>
          </form>
        </div>
      </nav>

      <main class="container py-4">
        <div class="content-card">
          <h1>Time Zone</h1>
          <p class="note">
            <em>
              This article is about time zones in general. For a list of time
              zones by country, see
              <a href="list_of_time_zones.php">List of time zones by country</a>.
            </em>
          </p>
          
          <p>
            <strong>A time zone</strong> is an area which observes a uniform
            <b>standard time</b> for <b>legal</b>,
            <b>commercial</b> and <b>social</b> purposes. Time zones tend to
            follow the boundaries between countries and their
            <b>subdivisions</b> instead of strictly following <b>longitude</b>,
            because it is convenient for areas in frequent communication to keep
            the same time.
          </p>
        </div>

        <div class="content-card mt-4">
          <h2>Worldwide Time Zones</h2>
          <p>
            <em>
              "World time" redirects here. For the global time standard, see
              <a href="universal_time.php">Universal Time</a>.
            </em>
          </p>
          <p>
            <strong>Italian</strong> mathematician
            <strong>Quirico Filopanti</strong> introduced the idea of a
            worldwide system of time zones in his book <em>Miranda!</em>,
            published in 1858.
          </p>
        </div>

        <div class="content-card mt-4">
          <section>
            <h2>Skewing of time zones</h2>
            <p>
              Ideal time zones are based on the mean solar time of a particular
              meridian. In practice, however, many time zone boundaries are
              drawn much farther to the west...
            </p>
          </section>
        </div>
      </main>

      <footer class="bg-dark text-white text-center text-lg-start mt-5">
        <div class="container p-4">
          <!-- Footer content unchanged -->
        </div>
        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2)">
          © 2025 World Time Zones. All rights reserved.
        </div>
      </footer>
    </div>

    <!-- JS files -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/particles.js@2.0.0/particles.min.js"></script>
    <script src="app.js"></script>
    
  </body>
</html>
