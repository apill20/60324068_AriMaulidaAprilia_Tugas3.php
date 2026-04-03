<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Status Peminjaman</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">
    <div class="card">
        <div class="card-header bg-primary text-white">
            <h3 class="mb-0">Informasi Status Peminjaman</h3>
        </div>
        <div class="card-body">

            <?php
            // 1. DATA ANGGOTA 
            $nama_anggota = "Budi Santoso";
            $total_pinjaman = 2;
            $buku_terlambat = 1;
            $hari_keterlambatan = 5; // hari

            // 2. MENGGUNAKAN SWITCH: Menentukan Level Member
            $level_member = "";
            switch (true) {
                case ($total_pinjaman >= 0 && $total_pinjaman <= 5):
                    $level_member = "Bronze";
                    break;
                case ($total_pinjaman >= 6 && $total_pinjaman <= 15):
                    $level_member = "Silver";
                    break;
                case ($total_pinjaman > 15):
                    $level_member = "Gold";
                    break;
                default:
                    $level_member = "Tidak Terdefinisi";
                    break;
            }
            ?>

            <h4>Data Anggota</h4>
            <ul>
                <li><strong>Nama:</strong> <?php echo $nama_anggota; ?></li>
                <li><strong>Level Member:</strong> <?php echo $level_member; ?></li>
                <li><strong>Total Pinjaman Saat Ini:</strong> <?php echo $total_pinjaman; ?> buku</li>
            </ul>

            <?php
            // 3. MENGGUNAKAN IF-ELSEIF-ELSE: Aturan Peminjaman dan Denda 
            $denda_per_hari = 1000;
            $maksimal_denda = 50000;
            
            $total_denda = 0;
            $status_pinjam = "";
            $peringatan = "";
            $tipe_alert = ""; // Untuk menentukan warna kotak Bootstrap (merah/hijau)

            if ($buku_terlambat > 0) {
                // Hitung denda jika ada keterlambatan
                $total_denda = $buku_terlambat * $hari_keterlambatan * $denda_per_hari;
                
                // Cek batas maksimal denda
                if ($total_denda > $maksimal_denda) {
                    $total_denda = $maksimal_denda;
                }
                
                $status_pinjam = "Tidak Diizinkan";
                $tipe_alert = "alert-danger";
                $peringatan = "Peringatan: Anda memiliki $buku_terlambat buku yang terlambat selama $hari_keterlambatan hari. Selesaikan denda dan kembalikan buku untuk meminjam kembali.";
                
            } elseif ($total_pinjaman >= 3) {
                // Cek batas maksimal buku
                $status_pinjam = "Tidak Diizinkan";
                $tipe_alert = "alert-warning";
                $peringatan = "Peringatan: Anda sudah mencapai batas maksimal peminjaman (3 buku).";
                
            } else {
                // Kondisi aman
                $sisa_kuota = 3 - $total_pinjaman;
                $status_pinjam = "Diizinkan";
                $tipe_alert = "alert-success";
                $peringatan = "Status Aman. Anda masih bisa meminjam $sisa_kuota buku lagi.";
            }
            ?>

            <hr>

            <h4>Status Peminjaman Saat Ini</h4>
            <ul>
                <li><strong>Buku Terlambat:</strong> <?php echo $buku_terlambat; ?> buku</li>
                <li><strong>Total Denda:</strong> Rp <?php echo number_format($total_denda, 0, ',', '.'); ?></li>
                <li><strong>Status Pinjam Baru:</strong> <?php echo $status_pinjam; ?></li>
            </ul>

            <div class="alert <?php echo $tipe_alert; ?>" role="alert">
                <?php echo $peringatan; ?>
            </div>

        </div>
    </div>
</div>

</body>
</html>