<?php
require 'koneksi.php';

// Simulasi Data Statistik
$total_user = 125;
$total_admin = 8;
$total_peserta = 117;

// Simulasi Data Keuangan
$pemasukan = 250000000;
$pengeluaran = 80000000;
$saldo = $pemasukan - $pengeluaran;
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Super Admin - LPK Kapibara</title>
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- FontAwesome untuk Ikon -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body class="bg-gray-100 font-sans leading-normal tracking-normal">

    <div class="flex h-screen overflow-hidden">
        
        <!-- SIDEBAR -->
        <div class="w-64 bg-slate-900 text-slate-300 flex flex-col shadow-xl z-10">
            <!-- Brand / Logo -->
            <div class="px-6 py-5 bg-slate-950 flex items-center space-x-3">
                <i class="fa-solid fa-graduation-cap text-blue-500 text-2xl"></i>
                <span class="text-white font-bold text-lg tracking-wider">LPK KAPIBARA</span>
            </div>

            <!-- Menu Navigasi -->
            <div class="flex-1 overflow-y-auto px-4 py-6 space-y-6 text-sm">
                
                <!-- Kategori Utama -->
                <div>
                    <p class="text-xs font-semibold text-slate-500 uppercase tracking-wider mb-3 px-3">Menu Utama</p>
                    <div class="space-y-1">
                        <a href="dashboard.php" class="flex items-center space-x-3 px-3 py-2.5 rounded-lg bg-blue-600 text-white font-medium">
                            <i class="fa-solid fa-chart-pie w-5"></i>
                            <span>Dashboard</span>
                        </a>
                    </div>
                </div>

                <!-- Master Data -->
                <div>
                    <p class="text-xs font-semibold text-slate-500 uppercase tracking-wider mb-3 px-3">Master Data</p>
                    <div class="space-y-1">
                        <a href="#" class="flex items-center space-x-3 px-3 py-2.5 rounded-lg hover:bg-slate-800 hover:text-white transition">
                            <i class="fa-solid fa-earth-asia w-5"></i>
                            <span>Negara & Tujuan</span>
                        </a>
                        <a href="#" class="flex items-center space-x-3 px-3 py-2.5 rounded-lg hover:bg-slate-800 hover:text-white transition">
                            <i class="fa-solid fa-building w-5"></i>
                            <span>Tempat Kerja</span>
                        </a>
                        <a href="#" class="flex items-center space-x-3 px-3 py-2.5 rounded-lg hover:bg-slate-800 hover:text-white transition">
                            <i class="fa-solid fa-handshake w-5"></i>
                            <span>Sponsor</span>
                        </a>
                        <a href="#" class="flex items-center space-x-3 px-3 py-2.5 rounded-lg hover:bg-slate-800 hover:text-white transition">
                            <i class="fa-solid fa-id-card w-5"></i>
                            <span>Credential ID</span>
                        </a>
                    </div>
                </div>

                <!-- Peserta -->
                <div>
                    <p class="text-xs font-semibold text-slate-500 uppercase tracking-wider mb-3 px-3">Manajemen Peserta</p>
                    <div class="space-y-1">
                        <a href="#" class="flex items-center space-x-3 px-3 py-2.5 rounded-lg hover:bg-slate-800 hover:text-white transition">
                            <i class="fa-solid fa-users w-5"></i>
                            <span>Data Peserta</span>
                        </a>
                        <a href="#" class="flex items-center space-x-3 px-3 py-2.5 rounded-lg hover:bg-slate-800 hover:text-white transition">
                            <i class="fa-solid fa-user-plus w-5"></i>
                            <span>Tambah Peserta</span>
                        </a>
                    </div>
                </div>

                <!-- Keuangan -->
                <div>
                    <p class="text-xs font-semibold text-slate-500 uppercase tracking-wider mb-3 px-3">Keuangan</p>
                    <div class="space-y-1">
                        <a href="#" class="flex items-center space-x-3 px-3 py-2.5 rounded-lg hover:bg-slate-800 hover:text-white transition">
                            <i class="fa-solid fa-wallet w-5"></i>
                            <span>Pemasukan & Pengeluaran</span>
                        </a>
                        <a href="#" class="flex items-center space-x-3 px-3 py-2.5 rounded-lg hover:bg-slate-800 hover:text-white transition">
                            <i class="fa-solid fa-file-invoice-dollar w-5"></i>
                            <span>Laporan Keuangan</span>
                        </a>
                    </div>
                </div>

                <!-- Sistem & Admin -->
                <div>
                    <p class="text-xs font-semibold text-slate-500 uppercase tracking-wider mb-3 px-3">Sistem</p>
                    <div class="space-y-1">
                        <a href="#" class="flex items-center space-x-3 px-3 py-2.5 rounded-lg hover:bg-slate-800 hover:text-white transition">
                            <i class="fa-solid fa-user-shield w-5"></i>
                            <span>Kelola Admin / User</span>
                        </a>
                        <a href="#" class="flex items-center space-x-3 px-3 py-2.5 rounded-lg hover:bg-slate-800 hover:text-white transition">
                            <i class="fa-solid fa-clock-rotate-left w-5"></i>
                            <span>Audit Log</span>
                        </a>
                    </div>
                </div>

            </div>

            <!-- Footer Sidebar (User Info & Logout) -->
            <div class="p-4 bg-slate-950 border-t border-slate-800 flex items-center justify-between">
                <div class="flex items-center space-x-3">
                    <div class="w-9 h-9 rounded-full bg-blue-500 flex items-center justify-center text-white font-bold">SA</div>
                    <div>
                        <p class="text-xs font-bold text-white">Super Admin</p>
                        <p class="text-[10px] text-slate-400">admin@lpk.com</p>
                    </div>
                </div>
                <a href="#" class="text-slate-400 hover:text-red-400 transition" title="Logout">
                    <i class="fa-solid fa-power-off text-lg"></i>
                </a>
            </div>
        </div>

        <!-- MAIN CONTENT AREA -->
        <div class="flex-1 flex flex-col overflow-y-auto">
            
            <!-- Top Navbar sederhana -->
            <div class="bg-white shadow-sm h-16 flex items-center justify-between px-8 z-0">
                <h2 class="text-lg font-semibold text-gray-700">Selamat Datang, Super Admin</h2>
                <div class="text-sm text-gray-500">
                    <i class="fa-regular fa-calendar-days mr-2"></i> Rabu, 9 September 2026
                </div>
            </div>

            <!-- Konten Utama Dashboard -->
            <div class="p-8 max-w-7xl mx-auto w-full">
                
                <!-- Baris 1: Ringkasan Pengguna -->
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8">
                    <div class="bg-white rounded-xl shadow-sm p-6 border-l-4 border-blue-500 flex items-center justify-between">
                        <div>
                            <h3 class="text-gray-400 text-xs font-bold uppercase tracking-wider">Total User</h3>
                            <p class="text-3xl font-extrabold text-gray-800 mt-1"><?= $total_user ?></p>
                        </div>
                        <div class="w-12 h-12 bg-blue-50 rounded-full flex items-center justify-center text-blue-500 text-xl">
                            <i class="fa-solid fa-users"></i>
                        </div>
                    </div>

                    <div class="bg-white rounded-xl shadow-sm p-6 border-l-4 border-purple-500 flex items-center justify-between">
                        <div>
                            <h3 class="text-gray-400 text-xs font-bold uppercase tracking-wider">Total Admin</h3>
                            <p class="text-3xl font-extrabold text-gray-800 mt-1"><?= $total_admin ?></p>
                        </div>
                        <div class="w-12 h-12 bg-purple-50 rounded-full flex items-center justify-center text-purple-500 text-xl">
                            <i class="fa-solid fa-user-shield"></i>
                        </div>
                    </div>

                    <div class="bg-white rounded-xl shadow-sm p-6 border-l-4 border-green-500 flex items-center justify-between">
                        <div>
                            <h3 class="text-gray-400 text-xs font-bold uppercase tracking-wider">Total Peserta</h3>
                            <p class="text-3xl font-extrabold text-gray-800 mt-1"><?= $total_peserta ?></p>
                        </div>
                        <div class="w-12 h-12 bg-green-50 rounded-full flex items-center justify-center text-green-500 text-xl">
                            <i class="fa-solid fa-user-graduate"></i>
                        </div>
                    </div>
                </div>

                <!-- Baris 2: Grafik Negara & Keuangan -->
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
                    
                    <!-- Widget Peserta Berdasarkan Negara -->
                    <div class="bg-white rounded-xl shadow-sm p-6">
                        <h2 class="text-lg font-bold text-gray-800 mb-6 flex items-center">
                            <i class="fa-solid fa-chart-bar text-blue-600 mr-2"></i> Peserta Berdasarkan Negara
                        </h2>
                        
                        <div class="space-y-4">
                            <div>
                                <div class="flex justify-between mb-1 text-sm">
                                    <span class="font-medium text-gray-700">Taiwan</span>
                                    <span class="font-bold text-gray-800">50 Peserta</span>
                                </div>
                                <div class="w-full bg-gray-100 rounded-full h-3">
                                    <div class="bg-blue-600 h-3 rounded-full" style="width: 42%"></div>
                                </div>
                            </div>

                            <div>
                                <div class="flex justify-between mb-1 text-sm">
                                    <span class="font-medium text-gray-700">Jepang</span>
                                    <span class="font-bold text-gray-800">32 Peserta</span>
                                </div>
                                <div class="w-full bg-gray-100 rounded-full h-3">
                                    <div class="bg-red-500 h-3 rounded-full" style="width: 27%"></div>
                                </div>
                            </div>

                            <div>
                                <div class="flex justify-between mb-1 text-sm">
                                    <span class="font-medium text-gray-700">Korea</span>
                                    <span class="font-bold text-gray-800">20 Peserta</span>
                                </div>
                                <div class="w-full bg-gray-100 rounded-full h-3">
                                    <div class="bg-indigo-500 h-3 rounded-full" style="width: 17%"></div>
                                </div>
                            </div>

                            <div>
                                <div class="flex justify-between mb-1 text-sm">
                                    <span class="font-medium text-gray-700">Hongkong</span>
                                    <span class="font-bold text-gray-800">15 Peserta</span>
                                </div>
                                <div class="w-full bg-gray-100 rounded-full h-3">
                                    <div class="bg-yellow-400 h-3 rounded-full" style="width: 13%"></div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Widget Keuangan -->
                    <div class="bg-white rounded-xl shadow-sm p-6">
                        <h2 class="text-lg font-bold text-gray-800 mb-6 flex items-center">
                            <i class="fa-solid wallet text-emerald-600 mr-2"></i> Ringkasan Keuangan LPK
                        </h2>
                        
                        <div class="space-y-4">
                            <div class="flex justify-between items-center p-4 bg-gray-50 rounded-lg">
                                <span class="text-gray-600 font-medium text-sm">Total Pemasukan</span>
                                <span class="text-emerald-600 font-bold text-lg">Rp <?= number_format($pemasukan, 0, ',', '.') ?></span>
                            </div>
                            
                            <div class="flex justify-between items-center p-4 bg-gray-50 rounded-lg">
                                <span class="text-gray-600 font-medium text-sm">Total Pengeluaran</span>
                                <span class="text-rose-500 font-bold text-lg">Rp <?= number_format($pengeluaran, 0, ',', '.') ?></span>
                            </div>
                            
                            <div class="flex justify-between items-center p-4 bg-blue-50 border border-blue-100 rounded-lg">
                                <span class="text-blue-900 font-bold">Saldo Akhir</span>
                                <span class="text-blue-700 font-black text-xl">Rp <?= number_format($saldo, 0, ',', '.') ?></span>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </div>

    </div>

</body>
</html>