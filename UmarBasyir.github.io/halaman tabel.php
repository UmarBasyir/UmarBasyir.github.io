<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="cv" border="1">
        <header class="atas">
            <img src="KillerQueen.jpg" alt="foto KillerQueen" height="100" width="90">
   
            <div class="judul">
                 <h3>Halaman Tabel KillerQueen</h3>
            </div>
        </header>

        <nav class="navbar">
            <div class="link">
                <li> <a href="halaman utama.html">Halaman Utama  </a> </li>
                <li> <a href="form pendaftaran.html">Form pendaftaran  </a>  </li>
                <li> <a href="halaman tabel.php">Halaman Tabel</a> </li>
            </div>
        </nav>
        <h2>Daftar Mahasiswa</h2>
        <h2>Daftar Mahasiswa</h2>
    <table border="2">
        <tr>
            <th>Nama</th>
            <th>NIM</th>
            <th>Program Studi</th>
            <th>Email</th>
            <th>Password</th>
            <th>Jenis Kelamin</th>
            <th>Tanggal Lahir</th>
            <th>Alamat</th>
        </tr>
        
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "GET") {
            $nama = $_GET["nama"];
            $nim = $_GET["nim"];
            $prodi = $_GET["prodi"];
            $email = $_GET["email"];
            $password = $_GET["password"];
            $jenis_kelamin = $_GET["jenis_kelamin"];
            $tanggal_lahir = $_GET["tanggal_lahir"];
            $alamat = $_GET["alamat"];

            echo "<tr>";
            echo "<td>$nama</td>";
            echo "<td>$nim</td>";
            echo "<td>$prodi</td>";
            echo "<td>$email</td>";
            echo "<td>$password</td>";
            echo "<td>$jenis_kelamin</td>";
            echo "<td>$tanggal_lahir</td>";
            echo "<td>$alamat</td>";
            echo "</tr>";
        }
        ?>
        <footer class="bawah">
            <h3>ini footers</h3>
        </footer>
    </div>
</body>
</html>