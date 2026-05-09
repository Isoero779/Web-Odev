<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Giriş Sonucu - Kişisel Web Sitem</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body class="d-flex flex-column min-vh-100">

    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
            <div class="container">
                <a class="navbar-brand" href="index.html">İsmetin Sitesi</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item"><a class="nav-link" href="index.html">Hakkında</a></li>
                        <li class="nav-item"><a class="nav-link" href="cv.html">Özgeçmiş</a></li>
                        <li class="nav-item"><a class="nav-link" href="sehir.html">Şehrim</a></li>
                        <li class="nav-item"><a class="nav-link" href="miras.html">Mirasımız</a></li>
                        <li class="nav-item"><a class="nav-link" href="ilgi.html">İlgi Alanlarım</a></li>
                        <li class="nav-item"><a class="nav-link" href="iletisim.html">İletişim</a></li>
                        <li class="nav-item"><a class="nav-link" href="login.html">Çıkış Yap</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <main class="container mt-5 mb-5 flex-grow-1 d-flex flex-column justify-content-center align-items-center text-center">
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $email = $_POST['email'];
            $sifre = $_POST['sifre'];

            if ($email === "b241210105@ogr.sakarya.edu.tr" && $sifre === "b241210105") {
                echo "<h1 style='color: #27ae60; font-weight: 300; font-size: 3rem; margin-bottom: 15px;'>Hoşgeldiniz İsmet Erdem (b241210105)</h1>";
                echo "<p style='color: #7f8c8d; font-size: 1.1rem;'>Sisteme güvenli giriş işleminiz başarıyla tamamlandı.</p>";
            } else {
                echo "<h1 style='color: #e74c3c; font-weight: 300; font-size: 3rem; margin-bottom: 15px;'>Giriş Başarısız</h1>";
                echo "<p style='color: #7f8c8d; font-size: 1.1rem;'>E-posta adresiniz veya şifreniz hatalı. Lütfen tekrar deneyin.</p>";
                echo "<a href='login.html' class='btn btn-outline-dark mt-3'>Geri Dön</a>";
            }
        } else {
            header("Location: login.html");
            exit();
        }
        ?>
    </main>

    <footer class="bg-dark text-white text-center py-3 mt-auto">
        <div class="container">
            <p class="mb-0">© 2026 Web Teknolojileri Projesi</p>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>