<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <title>Live Universal Time Clock</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@400;500;700&family=Roboto:wght@300;400&display=swap" rel="stylesheet">

    <style>
        body {
            /* Background image of Earth from space */
            background-image: url('https://images.unsplash.com/photo-1614730321146-b6fa6a46bcb4?q=80&w=2574&auto=format&fit=crop');
            background-size: cover;
            background-position: center center;
            background-attachment: fixed;
            font-family: 'Roboto', sans-serif;
            color: white;
            /* Flexbox to center the content perfectly */
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            padding: 20px;
        }

        .clock-container {
            width: 100%;
            max-width: 600px;
            text-align: center;
            /* Modern "frosted glass" effect */
            background: rgba(0, 0, 0, 0.5);
            backdrop-filter: blur(10px);
            -webkit-backdrop-filter: blur(10px); /* For Safari */
            border-radius: 20px;
            padding: 2rem 2.5rem;
            border: 1px solid rgba(255, 255, 255, 0.18);
            box-shadow: 0 8px 32px 0 rgba(0, 0, 0, 0.37);
        }

        h1 {
            font-family: 'Orbitron', sans-serif;
            font-weight: 500;
            font-size: 1.5rem;
            letter-spacing: 1px;
            opacity: 0.8;
            margin-bottom: 0.5rem;
        }

        /* Styling for the main UTC clock time */
        .utc-time {
            font-family: 'Orbitron', sans-serif;
            font-size: clamp(3rem, 15vw, 5rem); /* Responsive font size */
            font-weight: 700;
            letter-spacing: 2px;
        }

        /* Styling for the date text */
        .date-text {
            font-size: 1.1rem;
            opacity: 0.9;
            margin-bottom: 1.5rem;
        }
        
        /* Styling for the local clock display */
        .local-clock-display h2 {
            font-family: 'Orbitron', sans-serif;
            font-weight: 400;
            font-size: 1.1rem;
            opacity: 0.8;
            margin-bottom: 0.25rem;
        }

        .local-time {
            font-family: 'Orbitron', sans-serif;
            font-size: 2rem;
            font-weight: 500;
        }
        
        .local-date {
            font-size: 0.9rem;
            opacity: 0.9;
        }

        /* A subtle horizontal line to separate the clocks */
        hr {
            border: 0;
            height: 1px;
            background: rgba(255, 255, 255, 0.2);
            margin: 2rem 0;
        }
    </style>
</head>
<body>

    <div class="clock-container">
        <h1>🌐 UNIVERSAL TIME</h1>
        <div id="utc-time" class="utc-time">--:--:--</div>
        <div id="utc-date" class="date-text">Loading...</div>

        <hr>

        <div class="local-clock-display">
            <h2>📍 Your Local Time (Jaipur)</h2>
            <div id="local-time" class="local-time">--:--:--</div>
            <div id="local-date" class="local-date">Loading...</div>
        </div>
    </div>

    <script>
        // Select the HTML elements to update
        const utcTimeElement = document.getElementById('utc-time');
        const utcDateElement = document.getElementById('utc-date');
        const localTimeElement = document.getElementById('local-time');
        const localDateElement = document.getElementById('local-date');

        // This function updates both clocks
        function updateClocks() {
            const now = new Date();

            // --- Format and Display UTC Clock ---
            utcTimeElement.textContent = now.toLocaleTimeString('en-GB', { timeZone: 'UTC', hourCycle: 'h23' });
            utcDateElement.textContent = now.toLocaleDateString('en-US', {
                timeZone: 'UTC',
                weekday: 'long',
                year: 'numeric',
                month: 'long',
                day: 'numeric'
            });

            // --- Format and Display Local Clock (IST) ---
            localTimeElement.textContent = now.toLocaleTimeString('en-GB', { timeZone: 'Asia/Kolkata', hourCycle: 'h23' });
            localDateElement.textContent = now.toLocaleDateString('en-US', {
                timeZone: 'Asia/Kolkata',
                weekday: 'long',
                year: 'numeric',
                month: 'long',
                day: 'numeric'
            });
        }

        // Run the function every second (1000ms)
        setInterval(updateClocks, 1000);

        // Call it once immediately on page load
        updateClocks();
    </script>

</body>
</html>