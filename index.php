<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Didot&display=swap" rel="stylesheet">
    <title>LINUS TRACKING</title>

    <link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css" />
    <script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>
    <script src="js/script.js"></script>
    <script>
        let map;
        let markers = {};
        let busRoute = [];

        // Inisialisasi Peta
        function initMap() {
            map = L.map('map').setView([3.559263, 98.660454], 15); 

            L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                maxZoom: 19,
                attribution: '© OpenStreetMap'
            }).addTo(map);

            // Ambil data halte dari database
            fetch('api/get_stops.php')
                .then(response => response.json())
                .then(data => {
                    data.forEach(stop => {
                        addBusStop(stop.name, stop.latitude, stop.longitude);
                    });
                    drawBusRoute();
                });
        }

        // Tambah halte ke peta
        function addBusStop(name, lat, lng) {
            const icon = L.icon({
                iconUrl: 'assets/halte.png', // URL gambar ikon halte
                iconSize: [30, 30], // Ukuran ikon halte
                iconAnchor: [15, 15] // Titik jangkar ikon
            });

            const marker = L.marker([lat, lng], { icon: icon }).addTo(map).bindPopup(name);
            busRoute.push([lat, lng]); // Simpan koordinat halte untuk rute
        }

        // Gambar rute bus
        function drawBusRoute() {
            const busPath = L.polyline(busRoute, {
                color: '#008000', // Warna hijau
                weight: 2,
                opacity: 1.0
            }).addTo(map);
        }

        // Fungsi untuk memperbarui posisi driver
        function updateDriverLocation(plateNumber, lat, lng) {
            console.log(`Lokasi diterima: Plat Nomor: ${plateNumber}, Latitude: ${lat}, Longitude: ${lng}`);
            
            if (markers[plateNumber]) {
                markers[plateNumber].setLatLng([lat, lng]);
            } else {
                const icon = L.icon({
                    iconUrl: 'assets/bus.png', // URL gambar ikon bus
                    iconSize: [50, 50],
                    iconAnchor: [25, 25]
                });

                const marker = L.marker([lat, lng], { icon: icon }).addTo(map).bindPopup(`<strong>Plat Nomor:</strong> ${plateNumber}`);
                markers[plateNumber] = marker;
            }
        }

        // Hubungkan ke WebSocket
        const ws = new WebSocket('ws://localhost:8080/bus-location');

        ws.onmessage = function (event) {
            const data = JSON.parse(event.data);
            updateDriverLocation(data.plate_number, data.lat, data.lng);
        };

        window.onload = initMap;

        
        function toggleSidebar() {
        var sidebar = document.getElementById("sidebar");
        sidebar.classList.toggle("active");
    }

    </script>
</head>
<body>
    <div class="overlay"></div>
    <nav>
        <div class="logo-container">
            <img src="img/logousu.jpg" alt="logo usu">
        </div>
        <div class="center-nav">
            <a href="index.php"> <!-- Pastikan jalur file benar -->
                <h1>
                    <span>LINUS</span>
                    <span>TRACKING</span>
                </h1>
            </a>
            <a href="index.php" class="location-linus-btn"> <!-- Pastikan jalur file benar -->
                <img src="img/logolinus1.png" alt="logolinus">
            </a>
        </div>
        
        <div class="hamburger" onclick="toggleSidebar()">
            &#9776;
        </div>
    </nav> 

    <aside id="sidebar" class="sidebar">
        <a href="javascript:void(0)" class="closebtn" onclick="toggleSidebar()">&times;</a>
        <a href="about/about_linus.php" onclick="openTentangLinus()">Tentang Linus</a>
        <a href="faq/faq.php" onclick="openFAQ()">Pertanyaan</a>

        <div class="toggle-container">
            <input type="checkbox" id="darkModeToggle">
            <label for="darkModeToggle" class="toggle-label">
                <span class="sun-icon">🌞  </span>
                <span class="moon-icon"> 🌜 </span>
                <div class="toggle-ball"></div>
            </label>
        </div>
    </aside>
    
    <main>
        <div class="mapContainer">
            <p>LIVE TRACKING</p>
            <div id="map"></div> <!-- Ganti iframe dengan div untuk peta -->
        </div>
    </main>

    <footer>
        <div class="footer-content">
            <div class="layanan-pengaduan">
                <i class="fa fa-user" style="font-size: 100px;"></i>
                <p style="font-size: 35px">LAYANAN PENGADUAN</p>
                <div class="phone">
                    <i class="fa fa-phone"></i>
                    <i class="fa fa-whatsapp"></i>
                    <span>0812-6356-534<br>0812-8688-5588</span>
                </div>
            </div>
        </div>
    </footer>
</body>
</html>
