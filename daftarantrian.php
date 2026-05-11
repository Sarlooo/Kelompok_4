<!doctype html>
<html lang="id">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Horizon Service Center - Daftar Antrian Saya</title>
    <link rel="stylesheet" href="daftarantrian.css" />
</head>
<body>
    <div class="sidebar">
      <div class="logo-container"><img src="logo.png" alt="Logo" /></div>
      <ul class="nav-links">
        <li><a href="ambilantrian.php">Ambil Antrian</a></li>
        <li style="background: #ffffff;"><a style="color: #990000;" href="daftarantrian.php">Daftar Antrian</a></li>
        <li><a href="kartuantrian.php">Kartu Antrian</a></li>
      </ul>
      <div class="sidebar-footer"></div>
    </div>

    <div class="main-content">
      <div class="header">DAFTAR ANTRIAN SAYA</div>
      <div class="form-container">
        
            <div class="cards-wrapper">
                    <div class="ticket-card">
                      <h2>Nomor Antrian Anda</h2>
                      <div class="ticket-body">
                        <div class="ticket-info">
                          <span>No. Telepon</span>
                        </div>
                        <div class="ticket-date"></div>
                        <div class="ticket-number-box"></div>
                      </div>
                    </div>
            </div>
            <div class="pesan-kosong">Anda belum mendaftar antrian apapun.</div>

        <a href="ambilantrian.php" class="back-btn">BACK</a>
      </div>
    </div>
</body>
</html>