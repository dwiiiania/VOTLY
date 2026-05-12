<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
}

body, html {
    height: 100%;
    overflow: hidden;
}

/* Latar Belakang Gradasi Hijau */
.background-container {
    width: 100%;
    height: 100vh;
    background: linear-gradient(135deg, #a3c4a1 0%, #3d5a3b 100%);
    position: relative;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
}

/* Dekorasi Lingkaran */
.circle {
    position: absolute;
    border-radius: 50%;
    background: rgba(255, 255, 255, 0.05);
    box-shadow: inset 5px 5px 15px rgba(0,0,0,0.1), 2px 2px 10px rgba(0,0,0,0.05);
}

.c1 { width: 300px; height: 300px; top: -50px; left: -50px; }
.c2 { width: 200px; height: 200px; bottom: 10%; right: 10%; }
.c3 { width: 150px; height: 150px; top: 20%; right: 25%; }
.c4 { width: 250px; height: 250px; bottom: -50px; left: 15%; }
.c5 { width: 100px; height: 100px; top: 40%; left: 5%; }

/* Header Atas */
.top-header {
    position: absolute;
    top: 0;
    width: 100%;
    padding: 20px 40px;
    display: flex;
    justify-content: space-between;
    align-items: center;
    color: #4a6348;
    z-index: 10;
}

.logo-section {
    display: flex;
    align-items: center;
    gap: 8px;
}

.icon-votly { width: 30px; opacity: 0.7; }

.brand-name {
    font-weight: bold;
    font-size: 20px;
    letter-spacing: 1px;
}

.school-section {
    display: flex;
    align-items: center;
    gap: 15px;
}

.school-name {
    font-weight: bold;
    font-size: 14px;
    color: white;
}

.school-logo img {
    width: 50px;
    height: 50px;
    background: #0044cc;
    border-radius: 50%;
    padding: 5px;
}

/* Kontainer Utama Login */
.login-container {
    position: relative;
    z-index: 5;
    width: 100%;
    max-width: 500px;
    display: flex;
    flex-direction: column;
    align-items: center;
}

.user-avatar {
    width: 90px;
    height: 90px;
    background-color: #c2d5c0;
    border-radius: 50%;
    display: flex;
    justify-content: center;
    align-items: center;
    margin-bottom: -45px; /* Menumpuk di atas kartu */
    z-index: 6;
    box-shadow: 0 4px 10px rgba(0,0,0,0.1);
}

.login-card {
    background-color: #d1dfd0;
    width: 100%;
    padding: 60px 40px 40px 40px;
    border-radius: 40px;
    text-align: center;
    box-shadow: 15px 15px 30px rgba(0, 0, 0, 0.1);
}

.login-card h1 {
    color: #556b54;
    font-size: 22px;
    margin-bottom: 25px;
    font-weight: bold;
}

/* Form Input */
.input-field {
    width: 100%;
    padding: 15px 25px;
    margin-bottom: 15px;
    border: none;
    border-radius: 30px;
    background-color: #5b745a;
    color: #c2d5c0;
    font-size: 16px;
    outline: none;
}

.input-field::placeholder {
    color: #a3b8a2;
}

/* Tombol Login */
.login-btn {
    width: 60%;
    padding: 12px;
    margin-top: 10px;
    border: none;
    border-radius: 30px;
    background-color: #5b745a;
    color: #d1dfd0;
    font-weight: bold;
    font-size: 16px;
    cursor: pointer;
    transition: background 0.3s ease;
}

.login-btn:hover {
    background-color: #4a5f49;
}
    </style>
</head>
<body>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Votly Login - Pemilihan Ketua OSIS</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="background-container">
        <div class="circle c1"></div>
        <div class="circle c2"></div>
        <div class="circle c3"></div>
        <div class="circle c4"></div>
        <div class="circle c5"></div>

        <header class="top-header">
            <div class="logo-section">
                <img src="votly.png" alt="Icon" height="200px">
            </div>
            <div class="school-section">
                <span class="school-name">SMP NEGERI 02 SUBAH</span>
                <div class="school-logo">
                    <img src="logo2.png" alt="Logo Sekolah">
                </div>
            </div>
        </header>

        <main class="login-container">
            <div class="user-avatar">
                <svg viewBox="0 0 24 24" fill="white" width="40" height="40">
                    <path d="M12 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm0 2c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z"/>
                </svg>
            </div>
            <div class="login-card">
                <h1>Pemilihan Ketua Osis</h1>
                <form action="./kandidat.php" method="post" class="flex flex-col gap-4 mt-6">
                    <label for="email"></label>
                    <input type="email" name="input_email" id="email" placeholder="masukkan email" class="input-field">

                    <label for="password"></label>
                    <input type="password" name="input_password" id="password" placeholder="masukkan kode" class="input-field">
                    
                    <button type="submit" class="login-btn">LOGIN</button>
                </form>
                </form>
            </div>
        </main>
    </div>
</body>
</html>
</body>
</html>