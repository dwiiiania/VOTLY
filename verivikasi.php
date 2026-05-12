<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Votly - Konfirmasi Voting</title>
    <link rel="stylesheet" href="style.css">
    <style>
        * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
}

body {
    display: flex;
    height: 100vh;
}

/* Sidebar Styling */
.sidebar {
    width: 200px;
    background-color: #cbd5c0; /* Hijau muda pucat */
    display: flex;
    flex-direction: column;
    padding: 20px 0;
}

.logo-section {
    padding: 0 20px 40px;
    font-size: 24px;
    font-weight: bold;
    color: #4a5d45;
}

nav ul {
    list-style: none;
    flex-grow: 1;
}

nav ul li {
    padding: 12px 20px;
    cursor: pointer;
    color: #4a5d45;
    font-weight: 600;
}

nav ul li.active {
    background-color: #e0e9d5;
}

.user-section {
    margin-top: 350px;
    text-align: center;
}

.user-section p {
    font-size: 14px;
    font-weight: bold;
    margin-bottom: 10px;
}

.btn-logout {
    background-color: #4d0f0f;
    color: white;
    border: none;
    padding: 10px 30px;
    border-radius: 20px;
    cursor: pointer;
    width : 100%;
}

/* Main Content Styling */
.main-content {
    flex-grow: 1;
    background-color: #8da17d; /* Hijau background utama */
    /* Pattern lingkaran sederhana */
    background-image: radial-gradient(circle, #9cb08c 20%, transparent 20%);
    background-size: 150px 150px;
    position: relative;
    padding: 20px;
}

header {
    display: flex;
    justify-content: flex-end;
    align-items: center;
    color: white;
    font-weight: bold;
}

.school-logo {
    margin-left: 10px;
    font-size: 30px;
}

/* Modal Styling */
.modal-container {
    display: flex;
    justify-content: center;
    align-items: center;
    height: 80%;
}

.modal-card {
    background-color: rgba(255, 255, 255, 0.2); /* Transparan */
    backdrop-filter: blur(5px);
    padding: 60px 40px;
    border-radius: 30px;
    text-align: center;
    color: white;
    max-width: 500px;
}

.modal-card p {
    font-size: 20px;
    line-height: 1.5;
    margin-bottom: 30px;
}

.button-group {
    display: flex;
    justify-content: center;
    gap: 20px;
}

.btn-batal, .btn-simpan {
    padding: 12px 40px;
    border: none;
    border-radius: 15px;
    color: white;
    font-weight: bold;
    cursor: pointer;
    background-color: #5b6d54; /* Warna tombol hijau tua */
}

.btn-batal:hover, .btn-simpan:hover {
    background-color: #4a5d45;
}
    </style>
</head>
<body>

    <div class="sidebar">
        <div class="logo-section">
            <div class="logovot"></div>
        </div>
        <nav>
            <ul>
                <li class="active">Voting</li>
                <li>Hasil Voting</li>
            </ul>
        </nav>
        <div class="user-section">
            <p>HI VOTERS</p>
            <button class="btn-logout"><a href="index.php">Log Out</a></button>
        </div>
    </div>

    <main class="main-content">
        <header>
            <div class="header-text">SMP NEGERI 02 SUBAH</div>
            <div class="school-logo">🔵</div>
        </header>

        <div class="modal-container">
            <div class="modal-card">
                <p>Yakin dengan pilihan anda?<br>
                setelah klik <strong>"simpan"</strong>, pilihan tidak dapat diubah.</p>
                <div class="button-group">
                    <button class="btn-batal"><a href="kandidat.php">BATAL</a></button>
                    <button class="btn-simpan"><a href="hasil-kandidat.php">SIMPAN</a></button>
                </div>
            </div>
        </div>
    </main>

</body>
</html>