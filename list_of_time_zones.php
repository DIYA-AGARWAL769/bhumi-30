<?php
// index.php - Time Zones by Country
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Time Zones by Country</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <style>
        body {
            background-image: url('https://www.transparenttextures.com/patterns/world-map.png');
            background-color: #f8f9fa;
            font-family: 'Poppins', sans-serif;
        }
        .main-container {
            background: rgba(255, 255, 255, 0.9);
            backdrop-filter: blur(5px);
            -webkit-backdrop-filter: blur(5px);
            padding: 2.5rem;
            border-radius: 15px;
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.1);
            margin-top: 3rem;
            margin-bottom: 3rem;
        }
        #searchInput {
            border-radius: 10px;
            padding: 10px 15px;
            border: 1px solid #ced4da;
        }
        .table {
            vertical-align: middle;
        }
        .table thead th {
            font-weight: 600;
            background-color: #343a40 !important;
            color: #fff;
        }
        .table-hover tbody tr {
            transition: transform 0.2s ease-in-out, background-color 0.2s ease;
        }
        .table-hover tbody tr:hover {
            background-color: #e9ecef;
            transform: scale(1.015);
            cursor: pointer;
        }
    </style>
</head>
<body>
    <div class="container main-container">
        <h2 class="mb-4 text-center">🌍 Time Zones by Country</h2>
        
        <div class="mb-4">
            <input type="text" id="searchInput" class="form-control" placeholder="Search for a country...">
        </div>
        
        <div class="table-responsive">
            <table class="table table-bordered table-hover">
                <thead class="table-dark">
                    <tr>
                        <th>Country</th>
                        <th>Time Zone(s)</th>
                    </tr>
                </thead>
                <tbody id="countryTable">
                    <tr><td>India</td><td>IST (UTC+5:30)</td></tr>
                    <tr><td>United States</td><td>UTC−10 to UTC−5 (HST, AKST, PST, MST, CST, EST)</td></tr>
                    <tr><td>Canada</td><td>UTC−8 to UTC−3.5 (PST to NST)</td></tr>
                    <tr><td>Russia</td><td>UTC+2 to UTC+12 (11 time zones)</td></tr>
                    <tr><td>Australia</td><td>UTC+8 to UTC+10.5 (AWST, ACST, AEST)</td></tr>
                    <tr><td>China</td><td>CST (UTC+8)</td></tr>
                    <tr><td>United Kingdom</td><td>GMT (UTC+0), BST (UTC+1 in summer)</td></tr>
                    <tr><td>Germany</td><td>CET (UTC+1), CEST (UTC+2 in summer)</td></tr>
                    <tr><td>France</td><td>CET (UTC+1), CEST (UTC+2) + territories</td></tr>
                    <tr><td>Japan</td><td>JST (UTC+9)</td></tr>
                    <tr><td>Brazil</td><td>UTC−5 to UTC−2</td></tr>
                    <tr><td>South Africa</td><td>SAST (UTC+2)</td></tr>
                    <tr><td>Indonesia</td><td>WIB (UTC+7), WITA (UTC+8), WIT (UTC+9)</td></tr>
                    <tr><td>Mexico</td><td>UTC−8 to UTC−5</td></tr>
                    <tr><td>Argentina</td><td>ART (UTC−3)</td></tr>
                    <tr><td>Saudi Arabia</td><td>AST (UTC+3)</td></tr>
                    <tr><td>Nepal</td><td>NPT (UTC+5:45)</td></tr>
                    <tr><td>Iran</td><td>IRST (UTC+3:30), IRDT (UTC+4:30)</td></tr>
                    <tr><td>New Zealand</td><td>NZST (UTC+12), NZDT (UTC+13)</td></tr>
                    <tr><td>Pakistan</td><td>PKT (UTC+5)</td></tr>
                    <tr><td>Bangladesh</td><td>BST (UTC+6)</td></tr>
                    <tr><td>UAE</td><td>GST (UTC+4)</td></tr>
                    <tr><td>Thailand</td><td>ICT (UTC+7)</td></tr>
                    <tr><td>South Korea</td><td>KST (UTC+9)</td></tr>
                    <tr><td>Singapore</td><td>SGT (UTC+8)</td></tr>
                    <tr><td>Malaysia</td><td>MYT (UTC+8)</td></tr>
                    <tr><td>Turkey</td><td>TRT (UTC+3)</td></tr>
                    <tr><td>Egypt</td><td>EET (UTC+2)</td></tr>
                </tbody>
            </table>
        </div>
    </div>

    <script>
        // JavaScript for the live search filter
        document.getElementById('searchInput').addEventListener('keyup', function() {
            let filter = this.value.toUpperCase();
            let tableBody = document.getElementById('countryTable');
            let rows = tableBody.getElementsByTagName('tr');

            for (let i = 0; i < rows.length; i++) {
                let countryCell = rows[i].getElementsByTagName('td')[0];
                if (countryCell) {
                    let textValue = countryCell.textContent || countryCell.innerText;
                    rows[i].style.display = textValue.toUpperCase().includes(filter) ? "" : "none";
                }
            }
        });
    </script>
</body>
</html>
