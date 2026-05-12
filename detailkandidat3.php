<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Votly - Lidia Permatasari</title>
    <style>
        :root {
    --bg-light-green: #d1dbca;
    --bg-main: #8ea381;
    --sidebar-bg: #cad9c6;
    --card-bg: #ccd6c2;
    --text-dark: #4a5d45;
    --btn-dark: #5e7156;
    --logout-red: #4d0b0b;
}

* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
}

body {
    background-color: var(--bg-main);
    height: 100vh;
    display: flex;
    justify-content: center;
    align-items: center;
}

.container {
    display: flex;
    width: 100%;
    height: 100vh;
    background-color: var(--bg-main);
    border-radius: 0px;
    overflow: hidden;
}

/* Sidebar Styling */
.sidebar {
    width: 200px;
    background-color: var(--sidebar-bg);
    display: flex;
    flex-direction: column;
}



.logo {
    font-size: 24px;
    color: var(--text-dark);
}

.menu-item {
    padding: 15px 25px;
    font-weight: bold;
    color: var(--text-dark);
    cursor: pointer;
}

.menu-item.active {
    background-color: #e2ede0;
}

.logout-section {
    margin-top: auto;
    padding: 20px;
    text-align: center;
}

.logout-section p {
    font-size: 12px;
    font-weight: bold;
    margin-bottom: 10px;
}

.btn-logout {
    background-color: var(--logout-red);
    color: white;
    border: none;
    padding: 10px 25px;
    border-radius: 20px;
    cursor: pointer;
}

/* Main Content Styling */
.main-content {
    flex: 1;
    padding: 40px;
    display: flex;
    flex-direction: column;
}

.header {
    display: flex;
    justify-content: flex-end;
    align-items: center;
    gap: 15px;
    margin-bottom: 30px;
    color: white;
    font-weight: bold;
}

.school-logo {
    width: 45px;
    height: 45px;
    border-radius: 50%;
    background-color: white;
}

/* Card Styling */
.card-container {
    flex: 1;
    display: flex;
    justify-content: center;
    align-items: center;
}

.candidate-card {
    background-color: var(--card-bg);
    width: 100%;
    max-width: 900px;
    border-radius: 50px;
    padding: 40px;
    display: flex;
    gap: 40px;
    box-shadow: 0 10px 30px rgba(0,0,0,0.1);
}

.image-box img {
    width: 280px;
    height: 380px;
    object-fit: cover;
    border-radius: 35px;
    background-color: #3b82f6; /* Warna biru background foto */
}

.details {
    flex: 1;
    color: var(--text-dark);
}

.details h1 {
    font-family: serif;
    font-size: 36px;
    margin-bottom: 5px;
}

.details h3 {
    font-size: 14px;
    letter-spacing: 1px;
    margin-bottom: 15px;
}

.details p {
    font-size: 15px;
    line-height: 1.6;
    margin-bottom: 30px;
    text-align: justify;
}

/* Button Styling */
.actions {
    display: flex;
    gap: 20px;
}

.btn-vote, .btn-back {
    padding: 12px 40px;
    border-radius: 15px;
    border: none;
    font-weight: bold;
    color: white;
    cursor: pointer;
    background-color: var(--btn-dark);
}

.btn-vote:hover, .btn-back:hover {
    opacity: 0.8;
}
    </style>
</head>
<body>
    <div class="container">
        <aside class="sidebar">
            <div class="logo-section">
                <div class="logo">
                    <img height ="150px" src="votly.png" alt="">
                </div>
            </div>
            <nav class="menu">
                <div class="menu-item active">Voting</div>
                <div class="menu-item">Hasil Voting</div>
            </nav>
            <div class="logout-section">
                <p>HI VOTERS</p>
                <button class="btn-logout"><a href="index.php">Log Out</a></button>
            </div>
        </aside>

        <main class="main-content">
            <header class="header">
                <span class="school-name">SMP Negeri 2 Subah</span>
                <img src="logo2.png" alt="Logo Sekolah" class="school-logo">
            </header>

            <section class="card-container">
                <div class="candidate-card">
                    <div class="image-box">
                        <img src="k3.jpeg" alt="Kevin Sanjaya">
                    </div>
                    <div class="details">
                        <h1>Kevin Sanjaya</h1>
                        <h3>VISI DAN MISI</h3>
                        <p>
                            Menjadikan OSIS sebagai wadah yang asyik bagi seluruh siswa untuk mengembangkan bakat sekaligus 
                            menjadi tempat yang aman untuk menyampaikan aspirasi demi kemajuan sekolah kita bersama. 
                            Saya akan memastikan setiap kegiatan yang kita buat nanti tidak hanya sekadar formalitas 
                            tetapi benar-benar seru dan melibatkan semua kalangan siswa serta rutin membuka ruang 
                            diskusi terbuka agar setiap keluhan teman-teman bisa langsung saya sampaikan dan 
                            perjuangkan ke pihak sekolah demi kenyamanan kita belajar sehari-hari.
                        </p>
                        <div class="actions">
                            <button class="btn-vote"><a href="verivikasi.php">Voting</a> </button>
                            <button class="btn-vote"><a href="kandidat.php">kembali</a> </button>
                        </div>
                    </div>
                </div>
            </section>
        </main>
    </div>
</body>
</html>