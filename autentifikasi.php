<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pemilihan Ketua Osis - Autentifikasi Gagal</title>
    <style>
        * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
}

body {
    background-color: #7a9478; /* Hijau dasar */
    height: 100vh;
    display: flex;
    justify-content: center;
    align-items: center;
    overflow: hidden;
    position: relative;
}

/* Dekorasi Lingkaran Latar Belakang */
.bg-overlay {
    position: absolute;
    width: 100%;
    height: 100%;
    z-index: -1;
}

.circle {
    position: absolute;
    border-radius: 50%;
    background-color: rgba(255, 255, 255, 0.1);
}

.c1 { width: 400px; height: 400px; top: -100px; left: -50px; }
.c2 { width: 300px; height: 300px; bottom: -50px; left: -100px; }
.c3 { width: 200px; height: 200px; top: 10%; right: 20%; }
.c4 { width: 150px; height: 150px; top: -20px; right: -20px; }

/* Header */
.header {
    position: absolute;
    top: 20px;
    right: 20px;
    display: flex;
    align-items: center;
    color: white;
    text-align: right;
}

.school-info p {
    font-weight: bold;
    font-size: 0.9rem;
    line-height: 1.2;
}

.logo {
    margin-left: 10px;
    width: 45px;
    height: 45px;
}

/* Modal UI */
.modal-container {
    position: relative;
    width: 90%;
    max-width: 500px;
    text-align: center;
}

.profile-icon {
    background-color: #c9d6c7;
    width: 80px;
    height: 80px;
    border-radius: 50%;
    display: flex;
    justify-content: center;
    align-items: center;
    margin: 0 auto -40px auto;
    position: relative;
    z-index: 2;
}

.card {
    background-color: #c9d6c7;
    padding: 60px 30px 40px;
    border-radius: 30px;
    box-shadow: 0 10px 30px rgba(0,0,0,0.2);
}

.card h1 {
    color: #4a5d48;
    font-size: 1.4rem;
    margin-bottom: 20px;
}

.error-box {
    background-color: #5c705a;
    border-radius: 25px;
    padding: 40px 20px;
    position: relative;
    color: white;
}

.close-btn {
    position: absolute;
    top: 10px;
    right: 20px;
    background: none;
    border: none;
    color: white;
    font-size: 24px;
    cursor: pointer;
}

.message-content {
    margin-bottom: 25px;
    font-size: 1.1rem;
    line-height: 1.5;
}

.retry-btn {
    background-color: #c9d6c7;
    border: none;
    padding: 12px 40px;
    border-radius: 20px;
    color: #4a5d48;
    font-weight: bold;
    cursor: pointer;
    transition: 0.3s;
}

.retry-btn:hover {
    background-color: #e0eee0;
}
    </style>
</head>
<body>
    <div class="bg-overlay">
        <div class="circle c1"></div>
        <div class="circle c2"></div>
        <div class="circle c3"></div>
        <div class="circle c4"></div>
    </div>

    <header class="header">  
        <div class="school-info">
            <p>SMP NEGERI 02</p>
            <p>SUBAH</p>
        </div>
        <img src="logo2.png" alt="Logo" class="logo"> </header>

    <main class="modal-container">
        <div class="profile-icon">
            <img src="https://img.icons8.com/ios-filled/50/ffffff/user-male-circle.png" alt="User Icon">
        </div>
        <div class="card">
            <h1>Pemilihan Ketua Osis</h1>
            <div class="error-box">
                <button class="close-btn">&times;</button>
                <div class="message-content">
                    <p>Autentifikasi gagal</p>
                    <p>Silahkan kembali !!!</p>
                </div>
<<<<<<< HEAD
                <button class="retry-btn"><a href="index.php">COBA LAGI</a></button>
=======
                <button class="retry-btn"><a href="index.php">COBA LAGI</a> </button>
>>>>>>> df7eaeac05f71dfc5ffba365b4c4382eaf1791ca
            </div>
        </div>
    </main>
</body>
</html>