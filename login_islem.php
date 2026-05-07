<?php
$dogruKullanici = "b241210105@ogr.sakarya.edu.tr";
$dogruSifre = "b241210105";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = trim($_POST['email']);
    $sifre = trim($_POST['sifre']);

    if (empty($email) || empty($sifre)) {
        header("Location: login.html?hata=1");
        exit();
    }

    if ($email === $dogruKullanici && $sifre === $dogruSifre) {
        $ogrenciNo = explode('@', $email)[0];
        ?>
        <!DOCTYPE html>
        <html lang="tr">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Başarılı Giriş</title>
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
            <link rel="stylesheet" href="style.css">
        </head>
        <body class="d-flex flex-column min-vh-100">
            <header>
                <nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
                    <div class="container">
                        <a class="navbar-brand" href="index.html">SAÜ Web Proje</a>
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

            <main class="container mt-5 mb-5 flex-grow-1 d-flex justify-content-center align-items-center">
                <div class="text-center">
                    <h1 class="display-4 text-success mb-3">Hoşgeldiniz <?php echo htmlspecialchars($ogrenciNo); ?></h1>
                    <p class="lead">Sisteme güvenli giriş işleminiz başarıyla tamamlandı.</p>
                </div>
            </main>

            <footer class="bg-dark text-white text-center py-3 mt-auto">
                <div class="container">
                    <p class="mb-0">© 2026 Web Teknolojileri Projesi</p>
                </div>
            </footer>
        </body>
        </html>
        <?php
    } else {
        header("Location: login.html?hata=1");
        exit();
    }
} else {
    header("Location: login.html");
    exit();
}
?>