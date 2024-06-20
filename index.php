<?php include_once("inc_header.php") ?>
<!-- untuk home -->
<section id="home">
    <img src="<?php echo ambil_gambar('1') ?>" />
    <div class="kolom">
        <p class="deskripsi"><?php echo ambil_kutipan('1') ?></p>
        <h2><?php echo ambil_judul('1') ?></h2>
        <?php echo maximum_kata(ambil_isi('1'), 20) ?>
        <p><a href="<?php echo buat_link_halaman(1) ?>" class="tbl-pink">Pelajari Lebih lanjut</a></p>
    </div>
</section>

<!-- untuk courses -->
<section id="courses">
    <div class="kolom">
        <p class="deskripsi"><?php echo ambil_kutipan('2') ?></p>
        <h2><?php echo ambil_judul('2') ?></h2>
        <?php echo maximum_kata(ambil_isi('2'), 100) ?>
        <p><a href="<?php echo buat_link_halaman(2) ?>" class="tbl-biru">Pelajari Lebih Lanjut</a></p>
    </div>
    <img src="<?php echo ambil_gambar('2') ?>" />
</section>

<!-- untuk tutors -->
<section id="tutors">
    <div class="tengah">
        <div class="kolom">
            <p class="deskripsi">Welcome to my website</p>
            <h2>Pemesanan Tempat</h2>
            <p>Jika anda ingin memesan tempat ini, anda dapat mengisi formulir pemesanan tempat pada label di bawah ini.</p>
        </div>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- CDN Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <!-- CDN Bootstrap Icons-->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
        <!-- CDN Boxicons -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
        <!-- CSS Navbar -->
        <link rel="stylesheet" href="../assets/css/navbar.css">
        <!-- CSS Card -->
        <link rel="stylesheet" href="../assets/css/form_tiket.css">
        <!-- Icon -->
        <link rel="shortcun icon" href="../assets/img/icon.png">
        <form action="pesan_tiket.php" method="POST">
            <table class="table">
                <tbody>
                    <tr>
                        <td><label for="name">Nama Lengkap:</label></td>
                        <td><input type="text" id="name" name="name" required></td>
                    </tr>
                    <tr>
                        <td><label for="address">Alamat:</label></td>
                        <td><input type="text" id="address" name="address" required></td>
                    </tr>
                    <tr>
                        <td><label for="phone">Nomor Telepon:</label></td>
                        <td><input type="tel" id="phone" name="phone" required></td>
                    </tr>
                    <tr>
                        <td><label for="email">Email:</label></td>
                        <td><input type="email" id="email" name="email" required></td>
                    </tr>
                    <tr>
                        <td><label for="date">Tanggal Pemesanan:</label></td>
                        <td><input type="date" id="date" name="date" required></td>
                    </tr>
                </tbody>
            </table>
            <button type="submit">Pesan Sekarang</button>
        </form>
    </div>
</section>



<!-- untuk partners -->
<!DOCTYPE html>
<html>

<head>
    <title>Laporan Rekap Wisatawan</title>
    <style>
        body {
            font-family: sans-serif;
        }

        table {
            border-collapse: collapse;
            width: 100%;
        }

        th,
        td {
            text-align: left;
            padding: 8px;
            border: 1px solid #ddd;
        }

        th {
            background-color: #f2f2f2;
        }
    </style>
</head>

<body>

    <h2>Laporan Rekap Wisatawan Yang Berkunjung</h2>
    <h3>Telah Terverifikasi (Lunas)</h3>

    <table>
        <thead>
            <tr>
                <th>ID Booking</th>
                <th>Nama Wisatawan</th>
                <th>Verifikasi Info</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>001</td>
                <td>Abi</td>
                <td>Terverifikasi</td>
            </tr>
            <tr>
                <td>002</td>
                <td>Leo</td>
                <td>Terverifikasi</td>
            </tr>
            <tr>
                <td>003</td>
                <td>David</td>
                <td>Terverifikasi</td>
            </tr>
            <tr>
                <td>004</td>
                <td>Dana</td>
                <td>Terverifikasi</td>
            </tr>
            <tr>
                <td>005</td>
                <td>Lia</td>
                <td>Terverifikasi</td>
            </tr>
            <tr>
                <td>006</td>
                <td>Opet</td>
                <td>Terverifikasi</td>
            </tr>
            <tr>
                <td>007</td>
                <td>Dani</td>
                <td>Terverifikasi</td>
            </tr>
            <tr>
                <td>008</td>
                <td>Julian</td>
                <td>Terverifikasi</td>
            </tr>
        </tbody>
    </table>

</body>

</html>

<?php include_once("inc_footer.php") ?>