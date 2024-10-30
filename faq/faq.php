<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/styles_faq.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Didot&display=swap" rel="stylesheet">
    <title>LINUS TRACKING</title>
    <script>
        function toggleSidebar() {
        var sidebar = document.getElementById("sidebar");
        sidebar.classList.toggle("active");
    }
    </script>
</head>
<body>
    <nav>
        <div class="logo-container">
            <img src="../assets/img/logousu.jpg" alt="logo usu">
        </div>
        <div class="center-nav">
            <a href="../index.php"> <!-- Pastikan jalur file benar -->
                <h1>
                    <span>LINUS</span>
                    <span>TRACKING</span>
                </h1>
            </a>
            <a href="/index/index.html" class="location-linus-btn"> <!-- Pastikan jalur file benar -->
                <img src="../assets/img/logolinus1.png" alt="logolinus">
            </a>
        </div>
        <div class="hamburger" onclick="toggleSidebar()">
            &#9776;
        </div>
    </nav>
      
      <aside id="sidebar" class="sidebar">
          <a href="javascript:void(0)" class="closebtn" onclick="toggleSidebar()">&times;</a>
          <a href="../about/about_Linus.php" onclick="openTentangLinus()">Tentang Linus</a>
          <a href="/faq/index.html" onclick="openFAQ()">FAQ</a>

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
        <!-- Section for FAQ -->
        <section class="faq-section">
            <header>
                <h2>Pertanyaan yang sering diajukan:</h2>
            </header>
            
            <div class="faq-container">
                <details class="faq-box">
                    <summary class="faq-question">Apakah setiap shalat jumat LINUS beroperasi? <span class="arrow">&#9662;</span></summary>
                    <div class="faq-answer">
                        <p>Ketika jadwal shalat jumat, LINUS tidak beroperasi sekitar dari jam 12.00-14.00.</p>
                    </div>
                </details>
                <hr class="faq-divider"> <!-- Garis pemisah -->
                
                <details class="faq-box">
                    <summary class="faq-question">Jam berapa batas pengoperasian LINUS? <span class="arrow">&#9662;</span></summary>
                    <div class="faq-answer">
                        <p>LINUS beroperasi mulai dari hari senin sampai jumat. Batas pengoperasian LINUS yaitu 17.00, kecuali hari jumat yaitu 16.30.</p>
                    </div>
                </details>
                <hr class="faq-divider"> <!-- Garis pemisah -->

                <details class="faq-box">
                    <summary class="faq-question">Apakah LINUS beroperasi ketika ada acara wisuda? <span class="arrow">&#9662;</span></summary>
                    <div class="faq-answer">
                        <p>LINUS tidak beroperasi ketika ada acara wisuda.</p>
                    </div>
                </details>
                <hr class="faq-divider"> <!-- Garis pemisah -->

                <details class="faq-box">
                    <summary class="faq-question">Bagaimana cara naik LINUS? <span class="arrow">&#9662;</span></summary>
                    <div class="faq-answer">
                        <p>Mahasiswa dapat menunggu LINUS di beberapa halte LINUS. Mahasiwa hanya dapat naik dan turun dari LINUS di halte LINUS.</p>
                    </div>
                </details>
                <hr class="faq-divider"> <!-- Garis pemisah -->

                <details class="faq-box">
                    <summary class="faq-question">Apakah ada pembeda tempat duduk pria dan wanita? <span class="arrow">&#9662;</span></summary>
                    <div class="faq-answer">
                        <p>Tempat duduk antara pria dan wanita berbeda. Pria hanya duduk di bagian depan dan wanita dapat duduk di bagian belakang LINUS.</p>
                    </div>
                </details>
                <hr class="faq-divider"> <!-- Garis pemisah -->

                <details class="faq-box">
                    <summary class="faq-question">Apa syarat untuk bisa menaiki LINUS?<span class="arrow">&#9662;</span></summary>
                    <div class="faq-answer">
                        <p>Syarat untuk menaiki LINUS yaitu harus mahasiswa USU.</p>
                    </div>
                </details>
            </div>
        </section>
        <section  class="saran-container">
            <form id="contact-form" action="https://formspree.io/f/xrbzneqd" method="POST">
            <h2>Kotak Saran</h2> 
            <input
        type="text"
        id="full-name"
        name="full-name"
        placeholder="Ketik Nama Anda"
        required
      />
      <input
        type="email"
        id="email"
        name="email"
        placeholder="Ketik Email Anda"
        required
      />
      <input
        type="text"
        id="subject"
        name="subject"
        placeholder="Ketik Subjek Anda"
        required
      />
      <textarea
        id="message"
        name="message"
        placeholder="Ketik Saran Anda"
        required
      ></textarea>
      <button type="submit">Kirim Saran</button>
    </form>      
        </section>
    </main>
    <script type="text/javascript" src="https://cdn.emailjs.com/dist/email.min.js"></script>
    <script src="../assets/js/script.js"></script>
</body>
</html>
