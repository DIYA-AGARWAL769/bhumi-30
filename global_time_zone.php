<?php
// You can add PHP logic at the top here if needed later
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
                    <?php
                    $countries = [
                        ["India", "IST (UTC+5:30)"],
                        ["United States", "UTC−10 to UTC−5 (HST, AKST, PST, MST, CST, EST)"],
                        ["Canada", "UTC−8 to UTC−3.5 (PST to NST)"],
                        ["Russia", "UTC+2 to UTC+12 (11 time zones)"],
                        ["Australia", "UTC+8 to UTC+10.5 (AWST, ACST, AEST)"],
                        ["China", "CST (UTC+8)"],
                        ["United Kingdom", "GMT (UTC+0), BST (UTC+1 in summer)"],
                        ["Germany", "CET (UTC+1), CEST (UTC+2 in summer)"],
                        ["France", "CET (UTC+1), CEST (UTC+2) + territories"],
                        ["Japan", "JST (UTC+9)"],
                        ["Brazil", "UTC−5 to UTC−2"],
                        ["South Africa", "SAST (UTC+2)"],
                        ["Indonesia", "WIB (UTC+7), WITA (UTC+8), WIT (UTC+9)"],
                        ["Mexico", "UTC−8 to UTC−5"],
                        ["Argentina", "ART (UTC−3)"],
                        ["Saudi Arabia", "AST (UTC+3)"],
                        ["Nepal", "NPT (UTC+5:45)"],
                        ["Iran", "IRST (UTC+3:30), IRDT (UTC+4:30)"],
                        ["New Zealand", "NZST (UTC+12), NZDT (UTC+13)"],
                        ["Pakistan", "PKT (UTC+5)"],
                        ["Bangladesh", "BST (UTC+6)"],
                        ["UAE", "GST (UTC+4)"],
                        ["Thailand", "ICT (UTC+7)"],
                        ["South Korea", "KST (UTC+9)"],
                        ["Singapore", "SGT (UTC+8)"],
                        ["Malaysia", "MYT (UTC+8)"],
                        ["Turkey", "TRT (UTC+3)"],
                        ["Egypt", "EET (UTC+2)"]
                    ];

                    foreach ($countries as $row) {
                        echo "<tr><td>{$row[0]}</td><td>{$row[1]}</td></tr>";
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>

    <script>
        document.getElementById('searchInput').addEventListener('keyup', function () {
            let filter = this.value.toUpperCase();
            let tableBody = document.getElementById('countryTable');
            let rows = tableBody.getElementsByTagName('tr');

            for (let i = 0; i < rows.length; i++) {
                let countryCell = rows[i].getElementsByTagName('td')[0];
                if (countryCell) {
                    let textValue = countryCell.textContent || countryCell.innerText;
                    if (textValue.toUpperCase().indexOf(filter) > -1) {
                        rows[i].style.display = "";
                    } else {
                        rows[i].style.display = "none";
                    }
                }
            }
        });
    </script>
</body>
</html>
