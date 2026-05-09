<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Sonucu</title>
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
                        <li class="nav-item"><a class="nav-link" href="login.html">Giriş</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <main class="container mt-5 mb-5 flex-grow-1">
        <h1 class="mb-4 border-bottom pb-2">Gelen Form Verileri</h1>
        
        <?php
        if ($_POST) {
            $ad = $_POST['ad'];
            $email = $_POST['email'];
            $telefon = $_POST['telefon'];
            $cinsiyet = $_POST['cinsiyet'];
            $konu = $_POST['konu'];
            $mesaj = $_POST['mesaj'];
            
            echo "<table class='table table-bordered table-striped'>";
            echo "<tr><th class='w-25'>Ad Soyad</th><td>" . $ad . "</td></tr>";
            echo "<tr><th>E-posta</th><td>" . $email . "</td></tr>";
            echo "<tr><th>Telefon</th><td>" . $telefon . "</td></tr>";
            echo "<tr><th>Cinsiyet</th><td>" . $cinsiyet . "</td></tr>";
            echo "<tr><th>Konu</th><td>" . $konu . "</td></tr>";
            echo "<tr><th>Mesaj</th><td>" . $mesaj . "</td></tr>";
            echo "</table>";
        } else {
            echo "<div class='alert alert-danger'>Bu sayfaya doğrudan erişim izni yoktur. Lütfen iletişim formunu kullanın.</div>";
        }
        ?>
        
        <div class="mt-4">
            <a href="iletisim.html" class="btn btn-outline-dark">Geri Dön</a>
        </div>
    </main>

    <footer class="bg-dark text-white text-center py-3 mt-auto">
        <div class="container">
            <p class="mb-0">© 2026 Web Teknolojileri Projesi</p>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>