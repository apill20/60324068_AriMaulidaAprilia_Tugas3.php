<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Info Buku - Perpustakaan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1 class="mb-4">Informasi Buku</h1>

        <div class="row">
            <?php
            //Data buku 1
            $judul1 = "Pemrograman Web dengan PHP";
            $pengarang1 = "Budi Raharjo";
            $penerbit1 = "Informatika";
            $tahun_terbit1 = 2023;
            $isbn1 = "978-602-1234-56-7";
            $harga1 = 85000;
            $stok1 = 15;
            $kategori1 = "Programing";
            $bahasa1 = "Indonesia";
            $halaman1 = 350;
            $berat1 = 700;

            //Data buku 2
            $judul2 = "MySQL Database Administration";
            $pengarang2 = "John Doe";
            $penerbit2 = "Gramedia";
            $tahun_terbit2 = 2021;
            $isbn2 = "978-602-321-456-8";
            $harga2 = 95000;
            $stok2 = 10;
            $kategori2 = "Database";
            $bahasa2 = "Inggris";
            $halaman2 = 520;
            $berat2 = 800;

            //Data buku 3
            $judul3 = "Belajar Python untuk Pemula";
            $pengarang3 = "Siti Aminah";
            $penerbit3 = "Gramedia";
            $tahun_terbit3 = 2022;
            $isbn3 = "978-602-654-321-0";
            $harga3 = 75000;
            $stok3 = 20;
            $kategori3 = "Programing";
            $bahasa3 = "Indonesia";
            $halaman3 = 300;
            $berat3 = 600;

            //Data buku 4
            $judul4 = "Desain UI/UX untuk Aplikasi Mobile";
            $pengarang4 = "Rina Susanti";
            $penerbit4 = "Penerbit Erlangga";
            $tahun_terbit4 = 2023;
            $isbn4 = "978-602-789-123-4";
            $harga4 = 90000;
            $stok4 = 12;
            $kategori4 = "Desain";
            $bahasa4 = "Indonesia";
            $halaman4 = 250;
            $berat4 = 500;
            ?>
        </div>


        <!-- Card 1 -->
        <div class="col-md-6 mb-4">
            <div class="card">
                <div class="card-header bg-primary text-white">
                    <h5><?php echo $judul1; ?></h5>
                    <span class="badge bg-warning text-dark"><?php echo $kategori1; ?></span>
                </div>

                <div class="card-body">
                    <table class="table table-borderless">
                        <tr><th>Pengarang</th><td>: <?php echo $pengarang1; ?></td></tr>
                        <tr><th>Penerbit</th><td>: <?php echo $penerbit1; ?></td></tr>
                        <tr><th>Tahun</th><td>: <?php echo $tahun_terbit1; ?></td></tr>
                        <tr><th>ISBN</th><td>: <?php echo $isbn1; ?></td></tr>
                        <tr><th>Harga</th><td>: Rp <?php echo number_format($harga1,0,',','.'); ?></td></tr>
                        <tr><th>Stok</th><td>: <?php echo $stok1; ?></td></tr>
                        <tr><th>Bahasa</th><td>: <?php echo $bahasa1; ?></td></tr>
                        <tr><th>Halaman</th><td>: <?php echo $halaman1; ?></td></tr>
                        <tr><th>Berat</th><td>: <?php echo $berat1; ?> gram</td></tr>
                    </table>
                </div>
            </div>
        </div>

        <!-- Card 2 -->
        <div class="col-md-6 mb-4">
            <div class="card">
                <div class="card-header bg-success text-white">
                    <h5><?php echo $judul2; ?></h5>
                    <span class="badge bg-info"><?php echo $kategori2; ?></span>
                </div>

                <div class="card-body">
                    <table class="table table-borderless">
                        <tr><th>Pengarang</th><td>: <?php echo $pengarang2; ?></td></tr>
                        <tr><th>Penerbit</th><td>: <?php echo $penerbit2; ?></td></tr>
                        <tr><th>Tahun</th><td>: <?php echo $tahun_terbit2; ?></td></tr>
                        <tr><th>ISBN</th><td>: <?php echo $isbn2; ?></td></tr>
                        <tr><th>Harga</th><td>: Rp <?php echo number_format($harga2,0,',','.'); ?></td></tr>
                        <tr><th>Stok</th><td>: <?php echo $stok2; ?></td></tr>
                        <tr><th>Bahasa</th><td>: <?php echo $bahasa2; ?></td></tr>
                        <tr><th>Halaman</th><td>: <?php echo $halaman2; ?></td></tr>
                        <tr><th>Berat</th><td>: <?php echo $berat2; ?> gram</td></tr>
                    </table>
                </div>
            </div>
        </div>

        <!-- Card 3 -->
        <div class="col-md-6 mb-4">
            <div class="card">
                <div class="card-header bg-danger text-white">
                    <h5><?php echo $judul3; ?></h5>
                    <span class="badge bg-secondary"><?php echo $kategori3; ?></span>
                </div>

                <div class="card-body">
                    <table class="table table-borderless">
                        <tr><th>Pengarang</th><td>: <?php echo $pengarang3; ?></td></tr>
                        <tr><th>Penerbit</th><td>: <?php echo $penerbit3; ?></td></tr>
                        <tr><th>Tahun</th><td>: <?php echo $tahun_terbit3; ?></td></tr>
                        <tr><th>ISBN</th><td>: <?php echo $isbn3; ?></td></tr>
                        <tr><th>Harga</th><td>: Rp <?php echo number_format($harga3,0,',','.'); ?></td></tr>
                        <tr><th>Stok</th><td>: <?php echo $stok3; ?></td></tr>
                        <tr><th>Bahasa</th><td>: <?php echo $bahasa3; ?></td></tr>
                        <tr><th>Halaman</th><td>: <?php echo $halaman3; ?></td></tr>
                        <tr><th>Berat</th><td>: <?php echo $berat3; ?> gram</td></tr>
                    </table>
                </div>
            </div>
        </div>

        <!-- Card 4 -->
        <div class="col-md-6 mb-4">
            <div class="card">
                <div class="card-header bg-dark text-white">
                    <h5><?php echo $judul4; ?></h5>
                    <span class="badge bg-warning text-dark"><?php echo $kategori4; ?></span>
                </div>

                <div class="card-body">
                    <table class="table table-borderless">
                        <tr><th>Pengarang</th><td>: <?php echo $pengarang4; ?></td></tr>
                        <tr><th>Penerbit</th><td>: <?php echo $penerbit4; ?></td></tr>
                        <tr><th>Tahun</th><td>: <?php echo $tahun_terbit4; ?></td></tr>
                        <tr><th>ISBN</th><td>: <?php echo $isbn4; ?></td></tr>
                        <tr><th>Harga</th><td>: Rp <?php echo number_format($harga4,0,',','.'); ?></td></tr>
                        <tr><th>Stok</th><td>: <?php echo $stok4; ?></td></tr>
                        <tr><th>Bahasa</th><td>: <?php echo $bahasa4; ?></td></tr>
                        <tr><th>Halaman</th><td>: <?php echo $halaman4; ?></td></tr>
                        <tr><th>Berat</th><td>: <?php echo $berat4; ?> gram</td></tr>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>