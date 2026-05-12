<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <style>
   * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
}

body {
    background-color: #f0f4f0;
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 100vh;
}

.container {
    display: flex;
    width: 100%;
    max-width: 1500px;
    height: 100vh;
    background-color: #7a9474; /* Warna hijau utama */
    border-radius: 10px;
    overflow: hidden;
    box-shadow: 0 10px 30px rgba(0,0,0,0.1);
}

/* Sidebar */
.sidebar {
    width: 15%;
    background-color: #c5d8c1; /* Hijau muda */
    padding: 20px;
    display: flex;
    flex-direction: column;
}

.logo {
    display: flex;
    align-items: center;
    gap: 10px;
    font-weight: bold;
    font-size: 24px;
    color: #4a5d45;
    margin-bottom: 40px;
}

nav ul {
    list-style: none;
}

nav ul li {
    padding: 12px;
    font-weight: bold;
    color: #555;
    cursor: pointer;
}

nav ul li.active {
    background-color: #e2f0e0;
    border-radius: 5px;
    color: #2d3a2a;
}

.sidebar-footer {
    margin-top: auto;
    text-align: center;
}

.sidebar-footer p {
    font-size: 14px;
    font-weight: bold;
    color: #4a5d45;
    margin-bottom: 10px;
}

.btn-logout {
    background-color: #4a1c17;
    color: white;
    border: none;
    padding: 10px 30px;
    border-radius: 20px;
    cursor: pointer;
    width: 100%;
}

/* Main Content */
.main-content {
    flex: 1;
    padding: 20px;
    display: flex;
    flex-direction: column;
}

header {z
    display: flex;
    justify-content: flex-end;
    margin-bottom: 20px;
}

.header-info {
    float: right;
    margin-left: 15px; /* Jarak dari teks di sebelah kiri */
    margin-bottom: 10px; /* Jarak dari konten di bawah */
}

.school-logo {
    width: 40px;
    height: 40px;
    background-color: white;
    border-radius: 50%;
}

.voting-section {
    flex: 1;
    display: flex;
    justify-content: center;
    align-items: center;
}

.voting-card {
    background-color: #d1ddd1; /* Warna kartu abu-hijau */
    width: 95%;
    height: 95%;
    border-radius: 40px;
    padding: 30px;
    text-align: center;
}

h1 {
    font-family: 'Georgia', serif;
    color: white;
    font-size: 28px;
    margin-bottom: 10px;
}

.divider {
    border: none;
    border-top: 2px solid #99aa94;
    width: 80%;
    margin: 0 auto 30px auto;
}

.candidates-container {
    display: flex;
    justify-content: space-around;
    gap: 15px;
}

.candidate-item {
    background-color: #e2e8e2;
    padding: 20px;
    border-radius: 30px;
    box-shadow: inset 0 0 10px rgba(0,0,0,0.05);
}

.candidate-item h3 {
    color: white;
    margin-bottom: 15px;
    font-size: 18px;
}

.photo-box {
    background-color: #3b82f6; /* Warna biru background foto */
    border-radius: 20px;
    overflow: hidden;
    margin-bottom: 15px;
    height: 180px;
}

.photo-box img {
    width: 100%;
    height: 100%;
    object-fit: cover;
}

.btn-data {
    background-color: #5d6d58;
    color: white;
    border: none;
    padding: 8px 0;
    width: 100%;
    border-radius: 15px;
    cursor: pointer;
    font-size: 14px;
}

.btn-data:hover {
    background-color: #4a5746;
}
    </style>
<body>
    <div class="container">
        <aside class="sidebar">
            <div class="logo">
                <img src="votly.png" alt="Icon" height="150px"> 
            </div>
            <nav>
                <ul>
                    <li class="active">Voting</li>
                    <li>Hasil Voting</li>
                </ul>
            </nav>
            <div class="sidebar-footer">
                <p>HI VOTERS</p>
            <button class="btn-logout"><a href="index.php">Log Out</a></button>
            </div>
        </aside>

        <main class="main-content">
            <header>
                <div class="header-info">
                    <span>SMP Negeri 2 Subah</span>
                    <img src="https://via.placeholder.com/40" alt="Logo Sekolah" class="school-logo">
                </div>
            </header>

            <section class="voting-section">
                <div class="voting-card">
                    <h1>Voting Pemilihan Ketua Osis</h1>
                    <hr class="divider">

                    <div class="candidates-container">
                        <div class="candidate-item">
                            <h3>Kandidat 1</h3>
                            <div class="photo-box">
                                <img src="k1.jpeg" alt="Kandidat 1" >
                            </div>
                            <button class="btn-data"><a href="detailkandidat1.php">Data Kandidat</a> </button>
                        </div>

                        <div class="candidate-item">
                            <h3>Kandidat 2</h3>
                            <div class="photo-box">
                                <img src="k2.jpeg" alt="Kandidat 2">
                            </div>
                           <button class="btn-data"><a href="detailkandidat2.php">Data Kandidat</a> </button>
                        </div>

                        <div class="candidate-item">
                            <h3>Kandidat 3</h3>
                            <div class="photo-box">
                                <img src="k3.jpeg" alt="Kandidat 3">
                            </div>
                            <button class="btn-data"><a href="detailkandidat3.php">Data Kandidat</a> </button>
                        </div>
                    </div>
                </div>
            </section>
        </main>
    </div>

</body>
</html>