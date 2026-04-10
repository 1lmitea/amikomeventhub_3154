<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Katalog | Amikom EventHub</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style> body { background-color: #0b1120; color: #f8fafc; font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; } </style>
</head>
<body class="min-h-screen relative flex flex-col items-center pt-10 px-4 pb-20">

    <nav class="flex justify-center gap-2 md:gap-6 mb-16 bg-white/5 p-3 rounded-full backdrop-blur-xl border border-white/10 shadow-2xl z-10">
        <a href="/" class="px-6 py-2 rounded-full hover:bg-white/10 transition-all font-medium">Beranda</a>
        <a href="/profil" class="px-6 py-2 rounded-full hover:bg-white/10 transition-all font-medium">Profil</a>
        <a href="/katalog" class="px-6 py-2 rounded-full bg-gradient-to-r from-orange-500 to-pink-600 text-white shadow-lg font-bold">Katalog</a>
        <a href="/bantuan" class="px-6 py-2 rounded-full hover:bg-white/10 transition-all font-medium">Bantuan</a>
        <a href="/kontak" class="px-6 py-2 rounded-full hover:bg-white/10 transition-all font-medium">Kontak</a>
    </nav>

    <div class="w-full max-w-6xl">
        <div class="flex justify-between items-end mb-10">
            <div>
                <h1 class="text-4xl font-bold mb-2">Event Mendatang 🔥</h1>
                <p class="text-slate-400">Jangan sampai ketinggalan acara seru minggu ini.</p>
            </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <div class="group bg-slate-900 border border-slate-800 rounded-3xl overflow-hidden hover:-translate-y-3 transition-all duration-300 shadow-xl hover:shadow-orange-500/20">
                <div class="h-48 bg-slate-800 relative p-4 flex flex-col justify-between">
                    <div class="absolute inset-0 bg-gradient-to-br from-orange-500/20 to-transparent"></div>
                    <span class="bg-white/10 backdrop-blur-sm text-white text-xs font-bold px-3 py-1 rounded-full w-max border border-white/10 z-10">Seminar</span>
                    <h2 class="text-2xl font-bold z-10 mt-auto drop-shadow-md">AI for Creative Industry</h2>
                </div>
                <div class="p-6">
                    <p class="text-slate-400 text-sm mb-6 line-clamp-2">Pelajari bagaimana Artificial Intelligence mengubah cara kerja di industri kreatif dan desain.</p>
                    <div class="flex justify-between items-center">
                        <span class="text-xs text-slate-500 font-mono">📅 20 Okt 2026</span>
                        <button class="px-4 py-2 bg-orange-500/10 text-orange-400 font-bold rounded-xl hover:bg-orange-500 hover:text-white transition-colors">Detail</button>
                    </div>
                </div>
            </div>

            <div class="group bg-slate-900 border border-slate-800 rounded-3xl overflow-hidden hover:-translate-y-3 transition-all duration-300 shadow-xl hover:shadow-pink-500/20">
                <div class="h-48 bg-slate-800 relative p-4 flex flex-col justify-between">
                    <div class="absolute inset-0 bg-gradient-to-br from-pink-500/20 to-transparent"></div>
                    <span class="bg-white/10 backdrop-blur-sm text-white text-xs font-bold px-3 py-1 rounded-full w-max border border-white/10 z-10">Workshop</span>
                    <h2 class="text-2xl font-bold z-10 mt-auto drop-shadow-md">Mastering Laravel 12</h2>
                </div>
                <div class="p-6">
                    <p class="text-slate-400 text-sm mb-6 line-clamp-2">Hands-on membuat aplikasi web modern menggunakan framework PHP paling populer saat ini.</p>
                    <div class="flex justify-between items-center">
                        <span class="text-xs text-slate-500 font-mono">📅 25 Okt 2026</span>
                        <button class="px-4 py-2 bg-pink-500/10 text-pink-400 font-bold rounded-xl hover:bg-pink-500 hover:text-white transition-colors">Detail</button>
                    </div>
                </div>
            </div>

            <div class="group bg-slate-900 border border-slate-800 rounded-3xl overflow-hidden hover:-translate-y-3 transition-all duration-300 shadow-xl hover:shadow-purple-500/20">
                <div class="h-48 bg-slate-800 relative p-4 flex flex-col justify-between">
                    <div class="absolute inset-0 bg-gradient-to-br from-purple-500/20 to-transparent"></div>
                    <span class="bg-white/10 backdrop-blur-sm text-white text-xs font-bold px-3 py-1 rounded-full w-max border border-white/10 z-10">Kompetisi</span>
                    <h2 class="text-2xl font-bold z-10 mt-auto drop-shadow-md">AMICTA 2026</h2>
                </div>
                <div class="p-6">
                    <p class="text-slate-400 text-sm mb-6 line-clamp-2">Tantang dirimu membuat solusi digital dalam 48 jam. Raih hadiah jutaan rupiah!</p>
                    <div class="flex justify-between items-center">
                        <span class="text-xs text-slate-500 font-mono">📅 01 Nov 2026</span>
                        <button class="px-4 py-2 bg-purple-500/10 text-purple-400 font-bold rounded-xl hover:bg-purple-500 hover:text-white transition-colors">Detail</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>