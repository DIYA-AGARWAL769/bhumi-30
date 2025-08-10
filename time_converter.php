<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>World Time Converter</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            color: #fff;
        }

        #particles-js {
            position: fixed;
            width: 100%;
            height: 100%;
            top: 0;
            left: 0;
            background-color: #2c3e50;
            z-index: -1;
        }

        .main-container {
            display: flex;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
            padding: 20px;
        }

        .content-box {
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(10px);
            padding: 2rem;
            border-radius: 15px;
            border: 1px solid rgba(255, 255, 255, 0.2);
            box-shadow: 0 8px 32px 0 rgba(31, 38, 135, 0.37);
        }

        .analog-clock {
            width: 200px;
            height: 200px;
            border: 5px solid #fff;
            border-radius: 50%;
            margin: 20px auto;
            position: relative;
            background: rgba(0,0,0,0.2);
        }

        .analog-clock .hand {
            width: 50%;
            background: #fff;
            height: 4px;
            position: absolute;
            top: 50%;
            transform-origin: 100%;
            transform: rotate(90deg);
            transition: all 0.05s;
            transition-timing-function: cubic-bezier(0.1, 2.7, 0.58, 1);
        }

        .analog-clock .hand.hour-hand { width: 35%; left: 15%; }
        .analog-clock .hand.min-hand { width: 45%; left: 5%; }
        .analog-clock .hand.second-hand { height: 2px; background: #dc3545; }
        .analog-clock .center-dot {
            width: 10px;
            height: 10px;
            background: #fff;
            border-radius: 50%;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
        }

        select, input, button {
            border-radius: 8px !important;
        }

        #result {
            margin-top: 1.5rem;
            font-weight: 600;
            background: rgba(0,0,0,0.3);
            padding: 10px;
            border-radius: 8px;
        }
    </style>
</head>
<body>

<div id="particles-js"></div>

<div class="container main-container">
    <div class="row align-items-center g-4">
        <div class="col-md-7">
            <div class="converter content-box">
                <h2 class="text-center mb-4">World Time Converter</h2>
                <label for="fromTime">Enter time:</label>
                <input type="time" id="fromTime" class="form-control" />
                <label for="fromZone" class="mt-3">From Time Zone:</label>
                <select id="fromZone" class="form-select"></select>
                <label for="toZone" class="mt-3">To Time Zone:</label>
                <select id="toZone" class="form-select"></select>
                <button onclick="convertTime()" class="btn btn-primary w-100 mt-4">Convert</button>
                <h3 id="result" class="text-center"></h3>
            </div>
        </div>
        <div class="col-md-5">
            <div class="content-box text-center">
                <h4 class="mb-3">Your Local Time</h4>
                <div class="analog-clock">
                    <div class="hand hour-hand"></div>
                    <div class="hand min-hand"></div>
                    <div class="hand second-hand"></div>
                    <div class="center-dot"></div>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>
<script>
    // Particle Background
    particlesJS("particles-js", {
        particles: {
            number: { value: 80, density: { enable: true, value_area: 800 } },
            color: { value: "#ffffff" },
            shape: { type: "circle" },
            opacity: { value: 0.5, random: true },
            size: { value: 3, random: true },
            line_linked: { enable: true, distance: 150, color: "#ffffff", opacity: 0.4, width: 1 },
            move: { enable: true, speed: 2, direction: "none", random: false, straight: false, out_mode: "out", bounce: false }
        },
        interactivity: {
            detect_on: "canvas",
            events: { onhover: { enable: true, mode: "repulse" }, onclick: { enable: false } },
            modes: { repulse: { distance: 100, duration: 0.4 } }
        },
        retina_detect: true
    });

    // Timezones
    const timeZones = [
        { name: "Pacific Time (US & Canada)", value: "America/Los_Angeles" },
        { name: "Central Time (US & Canada)", value: "America/Chicago" },
        { name: "Eastern Time (US & Canada)", value: "America/New_York" },
        { name: "Greenwich Mean Time (UTC)", value: "Etc/UTC" },
        { name: "Central European Time", value: "Europe/Berlin" },
        { name: "India Standard Time", value: "Asia/Kolkata" },
        { name: "China Standard Time", value: "Asia/Shanghai" },
        { name: "Japan Standard Time", value: "Asia/Tokyo" },
        { name: "Australian Eastern Time", value: "Australia/Sydney" },
        { name: "New Zealand Time", value: "Pacific/Auckland" }
    ];

    const fromZoneSelect = document.getElementById("fromZone");
    const toZoneSelect = document.getElementById("toZone");
    const timeInput = document.getElementById("fromTime");

    // Populate dropdowns
    timeZones.forEach(zone => {
        fromZoneSelect.add(new Option(zone.name, zone.value));
        toZoneSelect.add(new Option(zone.name, zone.value));
    });

    // Default values
    const now = new Date();
    timeInput.value = `${String(now.getHours()).padStart(2, '0')}:${String(now.getMinutes()).padStart(2, '0')}`;
    fromZoneSelect.value = "Asia/Kolkata";
    toZoneSelect.value = "America/New_York";

    function convertTime() {
        const timeValue = timeInput.value;
        const fromZone = fromZoneSelect.value;
        const toZone = toZoneSelect.value;
        const resultEl = document.getElementById("result");

        if (!timeValue) {
            resultEl.innerText = "Please enter a valid time.";
            return;
        }

        const date = new Date();
        const [hours, minutes] = timeValue.split(':');
        const dateInFromZoneStr = date.toLocaleDateString('en-CA', { timeZone: fromZone }) + ` ${hours}:${minutes}:00`;
        const dateToConvert = new Date(dateInFromZoneStr);

        const convertedTime = dateToConvert.toLocaleString('en-US', {
            timeZone: toZone,
            hour: '2-digit',
            minute: '2-digit',
            hour12: true,
            timeZoneName: 'short'
        });

        resultEl.innerText = `${timeValue} in ${fromZoneSelect.options[fromZoneSelect.selectedIndex].text} is ${convertedTime}`;
    }

    // Analog Clock
    const hourHand = document.querySelector('.hour-hand');
    const minHand = document.querySelector('.min-hand');
    const secondHand = document.querySelector('.second-hand');

    function setClock() {
        const now = new Date();
        const seconds = now.getSeconds();
        const secondsDegrees = ((seconds / 60) * 360) + 90;
        secondHand.style.transform = `rotate(${secondsDegrees}deg)`;

        const mins = now.getMinutes();
        const minsDegrees = ((mins / 60) * 360) + ((seconds / 60) * 6) + 90;
        minHand.style.transform = `rotate(${minsDegrees}deg)`;

        const hour = now.getHours();
        const hourDegrees = ((hour / 12) * 360) + ((mins / 60) * 30) + 90;
        hourHand.style.transform = `rotate(${hourDegrees}deg)`;
    }

    setInterval(setClock, 1000);
    setClock();
</script>

</body>
</html>
