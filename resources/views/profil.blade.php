<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil | Amikom EventHub</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style> body { background-color: #0b1120; color: #f8fafc; font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; } </style>
</head>
<body class="min-h-screen relative flex flex-col items-center pt-10 px-4">

    <nav class="flex justify-center gap-2 md:gap-6 mb-16 bg-white/5 p-3 rounded-full backdrop-blur-xl border border-white/10 shadow-2xl z-10">
        <a href="/" class="px-6 py-2 rounded-full hover:bg-white/10 transition-all font-medium">Beranda</a>
        <a href="/profil" class="px-6 py-2 rounded-full bg-gradient-to-r from-emerald-500 to-teal-600 text-white shadow-lg font-bold">Profil</a>
        <a href="/katalog" class="px-6 py-2 rounded-full hover:bg-white/10 transition-all font-medium">Katalog</a>
        <a href="/bantuan" class="px-6 py-2 rounded-full hover:bg-white/10 transition-all font-medium">Bantuan</a>
        <a href="/kontak" class="px-6 py-2 rounded-full hover:bg-white/10 transition-all font-medium">Kontak</a>
    </nav>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-6 max-w-4xl w-full">
        <div class="col-span-1 md:col-span-2 bg-gradient-to-br from-slate-800 to-slate-900 border border-slate-700 rounded-3xl p-8 flex items-center gap-6 hover:border-emerald-500/50 transition-colors">
            <div class="w-24 h-24 bg-emerald-500/20 rounded-2xl flex items-center justify-center text-4xl border border-emerald-500/30">👩‍💻</div>
            <div>
                <h2 class="text-3xl font-bold text-white mb-2">Mitashya Calysnagefin T.</h2>
                <p class="text-emerald-400 font-mono">NIM: 24.12.3154</p>
                <p class="text-slate-400 mt-2 text-sm">Mahasiswa S1 Sistem Informasi</p>
            </div>
        </div>

        <div class="bg-slate-800 border border-slate-700 rounded-3xl p-8 flex flex-col justify-center items-center text-center hover:border-emerald-500/50 transition-colors">
            <span class="text-3xl mb-3">🚀</span>
            <h3 class="font-bold text-lg">Web Developer</h3>
            <p class="text-xs text-slate-400 mt-2">Laravel & Tailwind</p>
        </div>

        <div class="col-span-1 md:col-span-3 bg-slate-800/50 border border-slate-700 rounded-3xl p-8 relative overflow-hidden">
            <div class="absolute top-0 right-0 w-32 h-32 bg-emerald-500/10 rounded-full blur-3xl"></div>
            <h3 class="text-xl font-bold mb-4 flex items-center gap-2"><span class="text-emerald-400">#</span> Tentang Saya</h3>
            <p class="text-slate-300 leading-relaxed">
                Halaman ini dibuat sebagai pemenuhan tugas Praktikum Pemrograman Web. Menggunakan routing Laravel dan sistem templating Blade untuk menyusun struktur halaman yang dinamis, dipadukan dengan utility-first CSS dari Tailwind untuk desain antarmuka yang modern dan responsif.
            </p>
        </div>
    </div>
</body>
</html>