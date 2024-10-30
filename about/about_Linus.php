<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/style_about.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Didot&display=swap" rel="stylesheet">
    <title>LINUS TRACKING</title>
    <script src="../assets/js/script.js"></script>
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
            <a href="../index.php" class="location-linus-btn"> <!-- Pastikan jalur file benar -->
                <img src="../assets/img/logolinus1.png" alt="logolinus">
            </a>
        </div>
        <div class="hamburger" onclick="toggleSidebar()">
            &#9776;
        </div>
    </nav>
      
      <aside id="sidebar" class="sidebar">
          <a href="javascript:void(0)" class="closebtn" onclick="toggleSidebar()">&times;</a>
          <a href="about_linus.php" onclick="openTentangLinus()">Tentang Linus</a>
          <a href="../faq/faq.php" onclick="openFAQ()">FAQ</a>

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
       
        <section class="TLcontent">
            <article class="TLdescription">
                <header>
                <h1 class="main-title">TENTANG LINUS</h1>
                    </header>
                <img src="../assets/img/linus_1.webp" alt="Gambar Bus LINUS" class="TLbus-image">
                <p>
                    Universitas Sumatera Utara dengan bangga mempersembahkan <strong>Bus LINUS (Lintas USU)</strong>, sebuah inovasi transportasi transit yang diluncurkan pada 9 Maret 2013. Layanan ini dirancang khusus untuk memudahkan mobilitas civitas academica USU, menawarkan kenyamanan dan efisiensi tanpa biaya, alias gratis!
                </p>
                <p>
                    Dengan dua armada yang siap beroperasi setiap hari perkuliahan, Bus LINUS melayani rute mengelilingi kawasan kampus yang strategis. Mahasiswa dapat dengan mudah menumpangi bus ini dengan menunggu di halte-halte yang tersebar dari pintu 1 hingga pintu 4 Kampus USU. Keberadaan Bus LINUS telah menjadikannya sebagai primadona di kalangan mahasiswa, bukan hanya karena layanan gratis yang ditawarkan, tetapi juga karena kenyamanan yang tiada tara.
                </p>
                <p>
                    Bus LINUS dilengkapi dengan kursi ergonomis dan pendingin udara yang membuat setiap perjalanan menjadi lebih menyenangkan. Selain berfungsi sebagai solusi transportasi yang efisien, bus ini juga sering menjadi tempat yang ideal untuk berinteraksi antar mahasiswa. Suasana akrab dan penuh kehangatan tercipta, mempererat hubungan sosial di lingkungan kampus.
                </p>
                <p>
                    Layanan ini bukan sekadar fasilitas, tetapi juga cerminan komitmen USU untuk menciptakan lingkungan yang mendukung keberlanjutan dan kesejahteraan komunitas kampus. Dengan semua keunggulannya, Bus LINUS mempermudah mobilitas sekaligus memperkaya pengalaman kampus yang nyaman dan dinamis. Ayo manfaatkan layanan ini untuk menjelajahi kampus dan berinteraksi dengan teman-teman!
                </p>
            </article>

            <article>
                <img src="../assets/img/rute_linus.png" alt="Gambar rute linus" class="TLrute">
                <div class="TLtable">
                    <table>
                        <thead>
                            <tr>
                                <th colspan="2" style="text-align: center;">Operasional</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="TLbold">Hari</td>
                                <td class="TLbold">Waktu</td>
                            </tr>
                            <tr>
                                <td>Senin-Jumat</td>
                                <td>07.30-17.00</td>
                            </tr>
                            <tr>
                                <td>Sabtu</td>
                                <td>07.30-13.00</td>
                            </tr>
                            <tr>
                                <td colspan="2" class="TLinfo">Tiba setiap 10-15 Menit</td>
                            </tr>
                        </tbody>
                    </table>
                    
                    <div class="TLnotes">
                        <p>*Harap Tunjukkan Kartu Tanda Mahasiswa/Staff pada saat naik.</p>
                        <p>*Harap selalu menjaga ketertiban, kesopanan, dan kebersihan untuk kenyamanan bersama.</p>
                    </div>
                </div>

                <div class="TLprocedure-table">
                    <table>
                        <thead>
                            <tr>
                                <th colspan="2" style="text-align: center;">Prosedur Naik</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="TLbold">Perempuan</td>
                                <td>Naik dari pintu belakang</td>
                            </tr>
                            <tr>
                                <td class="TLbold">Laki-laki</td>
                                <td>Naik dari pintu depan</td>
                            </tr>
                            <tr>
                                <td class="TLbold">Cara Keluar</td>
                                <td>Semua keluar dari pintu depan</td>
                            </tr>
                            <tr>
                                <td colspan="2" class="TLinfo">*Jangan lupa mengucapkan terima kasih kepada supir.</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </article>
        </section>
    </main>
    
   
</body>
</html>
