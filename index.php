<?php
$pesan_status = "";
if ($_SERVER["REQUEST_METHOD"] == "POST" && isst($_POST['btn_kirim'])) {
    $nama = htmlspecialchars($_POST['txt_nama']);
    $nama = htmlspecialchars($_POST['txt_email']);
    $pesan = htmlspecialchars($_POST['txt_pesan']);

    if (!empty($nama) && !empty($email) && !empty($pesan)) {
        $pesan_status = "<div class='alert-success'>Terimah kasih
 <strong>$nama</strong>, pesan Anda telah berhasil dikirim ke server SMKN 5 Batam!</div>";
    }
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CV Ardianus darson - SMKN 5 Batam</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div>
        <header>
            <div> 
                 <h1> 👤 </h1>
                <h1 style="margin:0;">Ardianus Darson</h1>
                <p> style="margin:5px 0 0 0; color: gray;"Siswa Teknik Komputer dan Jaringan SMKN 5 Batam</p>
            </div>
            <nav>
                <a href="#profil">HOME</a>
                <a href="#skills">SKILLS</a>
                <a href="#kontak">CONTACK</a>
                <button id="btn-theme" onclick="toggleTheme()">
 Mode</button>
            </nav>
        </header>

        <div> class="main-content">

        <div class="main-column">
        <div class="card" id="profil">
        <h2>PROFIL</h2>
        <h3>👤BIODATA</h3>
        <p>Siswa yang aktif dan praktisipasi di bidang Teknik Komputer dan jaringan 
        dengan fokus pada administrasi server dan keamanan jaringan</p>

        <h3> 🎓PENDIDIKAN </h3>
        <ul>
        <li>Sekolah Dasar Harapan baru swasta  pada tahun 2016-2026</li>
        <li>Tidak TK </li>
     </ul>
     </div>
        <h3> 💼PENGALAMAN KERJA</h3>
        <ul>
        <LI> Pekerja Bangunan</LI>
        <li> jualan</li>
        </ul>
     </div>

     <div class="right-column">
    <div class="card" id="skills">
        <h2>NETWORK SKILLS</h2>
        
        <div class="skill-item">
            <span class="skill-name">CISCO PRACKET TRACER </span>
            <div class="progress-bar"><div class="progress-fill" style="width: 90%;"></div></div>
        </div>

        <div class="skill-item">
            <span class="skill-name">MICROTIK</span>
            <div class="progress-bar"><div class="progress-fill" style="width: 85%;"></div></div>
        </div>

        <div class="skill-item">
            <span class="skill-name">TP-LINK</span>
            <div class="progress-bar"><div class="progress-fill" style="width: 80%;"></div></div>
        </div>

        <div class="skill-item">
            <span class="skill-name">DEBIAN</span>
            <div class="progress-bar"><div class="progress-fill" style="width: 75%;"></div></div>
        </div>
    </div>

    <div class="card" id="kontak">
        <h2>FORM KONTAK</h2>

        <?php echo $pesan_status; ?>

        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
            <div class="form-group">
                <label for="nama">Nama Lengkap:</label>
                <input type="text" id="nama" name="txt_nama" placeholder="Masukkan nama..." required>
            </div>

            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" id="email" name="txt_email" placeholder="Masukkan email..." required>
            </div>

            <div class="form-group">
                <label for="pesan">Pesan:</label>
                <textarea id="pesan" name="txt_pesan" rows="4" placeholder="Tuliskan pesan..." required></textarea>
            </div>

            <button type="submit" name="btn_kirim" class="btn-submit">KIRIM PESAN</button>
        </form>
    </div>
</div>

</div>
</div>

<script src="script.js"></script>
</body>
</html>
