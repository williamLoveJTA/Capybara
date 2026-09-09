<?php
require 'koneksi.php';

// Simulasi data user yang sedang login (Nantinya diambil dari Session ID user yang login)
// Asumsi peserta: Budi Santoso
$user_data = [
    "full_name" => "Budi Santoso",
    "credential_id" => "TWN-001-044",
    "tujuan_negara" => "Taiwan",
    "sponsor" => "ABC Agency",
    "status" => "Processing",
    "birth_date" => "12 Mei 1998",
    "origin_city" => "Semarang",
    "pengalaman_kerja" => "Operator Produksi (2 Tahun)",
    "foto_url" => "https://images.unsplash.com/photo-1534528741775-53994a69daeb?w=300&auto=format&fit=crop&q=80" // Contoh foto placeholder
];
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Peserta - LPK Kapibara</title>
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- FontAwesome untuk Ikon -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body class="bg-gray-50 font-sans leading-normal tracking-normal">

    <div class="flex h-screen overflow-hidden">
        
        <!-- SIDEBAR KHUSUS USER (Read-Only) -->
        <div class="w-64 bg-slate-900 text-slate-300 flex flex-col shadow-xl z-10">
            <!-- Brand / Logo -->
            <div class="px-6 py-5 bg-slate-950 flex items-center space-x-3">
                <i class="fa-solid fa-user-graduate text-blue-500 text-2xl"></i>
                <span class="text-white font-bold text-lg tracking-wider">PORTAL PESERTA</span>
            </div>

            <!-- Menu Navigasi User -->
            <div class="flex-1 overflow-y-auto px-4 py-6 space-y-6 text-sm">
                <div>
                    <p class="text-xs font-semibold text-slate-500 uppercase tracking-wider mb-3 px-3">Menu Utama</p>
                    <div class="space-y-1">
                        <a href="user_dashboard.php" class="flex items-center space-x-3 px-3 py-2.5 rounded-lg bg-blue-600 text-white font-medium">
                            <i class="fa-solid fa-house w-5"></i>
                            <span>Dashboard Saya</span>
                        </a>
                        <a href="#" class="flex items-center space-x-3 px-3 py-2.5 rounded-lg hover:bg-slate-800 hover:text-white transition">
                            <i class="fa-solid fa-id-card w-5"></i>
                            <span>Credential Saya</span>
                        </a>
                        <a href="#" class="flex items-center space-x-3 px-3 py-2.5 rounded-lg hover:bg-slate-800 hover:text-white transition">
                            <i class="fa-solid fa-briefcase w-5"></i>
                            <span>Pengalaman Kerja</span>
                        </a>
                        <a href="#" class="flex items-center space-x-3 px-3 py-2.5 rounded-lg hover:bg-slate-800 hover:text-white transition">
                            <i class="fa-solid fa-wallet w-5"></i>
                            <span>Keuangan Saya</span>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Footer Sidebar User & Logout -->
            <div class="p-4 bg-slate-950 border-t border-slate-800 flex items-center justify-between">
                <div class="flex items-center space-x-3">
                    <div class="w-9 h-9 rounded-full bg-blue-500 flex items-center justify-center text-white font-bold text-xs">BS</div>
                    <div>
                        <p class="text-xs font-bold text-white"><?= $user_data['full_name'] ?></p>
                        <p class="text-[10px] text-slate-400">Peserta LPK</p>
                    </div>
                </div>
                <a href="#" class="text-slate-400 hover:text-red-400 transition" title="Logout">
                    <i class="fa-solid fa-power-off text-lg"></i>
                </a>
            </div>
        </div>

        <!-- MAIN CONTENT AREA -->
        <div class="flex-1 flex flex-col overflow-y-auto">
            
            <!-- Top Navbar -->
            <div class="bg-white shadow-sm h-16 flex items-center justify-between px-8 z-0">
                <h2 class="text-lg font-semibold text-gray-700">Selamat Datang, <span class="text-blue-600 font-bold"><?= $user_data['full_name'] ?></span></h2>
                <div class="text-sm text-gray-500">
                    <span class="bg-blue-100 text-blue-700 px-3 py-1 rounded-full text-xs font-semibold">Status: <?= $user_data['status'] ?></span>
                </div>
            </div>

            <!-- Konten Utama Dashboard User -->
            <div class="p-8 max-w-5xl mx-auto w-full">
                
                <!-- Kartu Informasi Utama (Profil & Credential) -->
                <div class="bg-white rounded-2xl shadow-sm border border-gray-100 overflow-hidden mb-8">
                    <div class="bg-gradient-to-r from-blue-600 to-indigo-700 px-8 py-6 text-white flex flex-col md:flex-row items-center justify-between">
                        <div class="flex items-center space-x-6">
                            <img src="<?= $user_data['foto_url'] ?>" alt="Foto Profil" class="w-24 h-24 rounded-full object-cover border-4 border-white/20 shadow-md">
                            <div>
                                <h1 class="text-2xl font-bold"><?= $user_data['full_name'] ?></h1>
                                <p class="text-blue-100 text-sm mt-1"><i class="fa-solid fa-location-dot mr-2"></i> Asal: <?= $user_data['origin_city'] ?> | Lahir: <?= $user_data['birth_date'] ?></p>
                            </div>
                        </div>
                        <div class="mt-4 md:mt-0 bg-white/10 backdrop-blur-md px-5 py-3 rounded-xl border border-white/20 text-center">
                            <p class="text-xs text-blue-100 uppercase tracking-wider font-semibold">Credential ID</p>
                            <p class="text-2xl font-black tracking-widest text-white mt-0.5"><?= $user_data['credential_id'] ?></p>
                        </div>
                    </div>

                    <!-- Detail Biodata Grid -->
                    <div class="p-8 grid grid-cols-1 md:grid-cols-3 gap-6">
                        <div class="p-4 bg-gray-50 rounded-xl border border-gray-100">
                            <p class="text-xs font-bold text-gray-400 uppercase tracking-wider">Tujuan Negara</p>
                            <p class="text-lg font-bold text-gray-800 mt-1 flex items-center">
                                <i class="fa-solid fa-earth-asia text-blue-500 mr-2"></i> <?= $user_data['tujuan_negara'] ?>
                            </p>
                        </div>

                        <div class="p-4 bg-gray-50 rounded-xl border border-gray-100">
                            <p class="text-xs font-bold text-gray-400 uppercase tracking-wider">Sponsor / Agen</p>
                            <p class="text-lg font-bold text-gray-800 mt-1 flex items-center">
                                <i class="fa-solid fa-handshake text-indigo-500 mr-2"></i> <?= $user_data['sponsor'] ?>
                            </p>
                        </div>

                        <div class="p-4 bg-gray-50 rounded-xl border border-gray-100">
                            <p class="text-xs font-bold text-gray-400 uppercase tracking-wider">Pengalaman Kerja</p>
                            <p class="text-sm font-bold text-gray-800 mt-2 flex items-center">
                                <i class="fa-solid fa-briefcase text-emerald-500 mr-2"></i> <?= $user_data['pengalaman_kerja'] ?>
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Informasi Tambahan / Status Proses -->
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div class="bg-white rounded-xl shadow-sm border border-gray-100 p-6">
                        <h3 class="text-base font-bold text-gray-800 mb-4 flex items-center">
                            <i class="fa-solid fa-circle-info text-blue-500 mr-2"></i> Status Dokumen & Keberangkatan
                        </h3>
                        <div class="space-y-3 text-sm text-gray-600">
                            <div class="flex justify-between items-center py-2 border-b border-gray-100">
                                <span>Pendaftaran & Administrasi</span>
                                <span class="text-emerald-600 font-bold"><i class="fa-solid fa-check-circle mr-1"></i> Selesai</span>
                            </div>
                            <div class="flex justify-between items-center py-2 border-b border-gray-100">
                                <span>Pelatihan Bahasa</span>
                                <span class="text-amber-500 font-bold"><i class="fa-solid fa-spinner fa-spin mr-1"></i> Berlangsung</span>
                            </div>
                            <div class="flex justify-between items-center py-2">
                                <span>Pengajuan Visa & Kontrak</span>
                                <span class="text-gray-400 font-semibold">Menunggu</span>
                            </div>
                        </div>
                    </div>

                    <div class="bg-white rounded-xl shadow-sm border border-gray-100 p-6">
                        <h3 class="text-base font-bold text-gray-800 mb-4 flex items-center">
                            <i class="fa-solid fa-wallet text-emerald-600 mr-2"></i> Ringkasan Keuangan Pribadi
                        </h3>
                        <div class="p-4 bg-emerald-50 rounded-lg border border-emerald-100 flex justify-between items-center mb-4">
                            <span class="text-emerald-900 text-sm font-semibold">Total Pembayaran Masuk</span>
                            <span class="text-emerald-700 font-bold text-base">Rp 5.000.000</span>
                        </div>
                        <p class="text-xs text-gray-500">Catatan: Seluruh rincian transaksi biaya pelatihan dan administrasi Anda dapat dilihat secara penuh pada menu <a href="#" class="text-blue-600 underline">Keuangan Saya</a>.</p>
                    </div>
                </div>

            </div>
        </div>

    </div>

</body>
</html>