<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home | Amikom EventHub</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style> 
        body { background-color: #0b1120; color: #f8fafc; font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; }
        .bg-gradient-animate { background-size: 200% 200%; animation: gradientMove 5s ease infinite; }
        @keyframes gradientMove { 0% { background-position: 0% 50%; } 50% { background-position: 100% 50%; } 100% { background-position: 0% 50%; } }
    </style>
</head>
<body class="min-h-screen relative overflow-x-hidden flex flex-col items-center pt-10">

    <div class="absolute top-[-10%] left-[-10%] w-96 h-96 bg-blue-600/30 rounded-full blur-[100px] -z-10"></div>
    <div class="absolute bottom-[-10%] right-[-10%] w-96 h-96 bg-purple-600/20 rounded-full blur-[100px] -z-10"></div>

    <nav class="flex justify-center gap-2 md:gap-6 mb-24 bg-white/5 p-3 rounded-full backdrop-blur-xl border border-white/10 shadow-2xl">
        <a href="/" class="px-6 py-2 rounded-full bg-gradient-to-r from-blue-500 to-indigo-600 text-white shadow-lg font-bold">Beranda</a>
        <a href="/profil" class="px-6 py-2 rounded-full hover:bg-white/10 transition-all font-medium">Profil</a>
        <a href="/katalog" class="px-6 py-2 rounded-full hover:bg-white/10 transition-all font-medium">Katalog</a>
        <a href="/bantuan" class="px-6 py-2 rounded-full hover:bg-white/10 transition-all font-medium">Bantuan</a>
        <a href="/kontak" class="px-6 py-2 rounded-full hover:bg-white/10 transition-all font-medium">Kontak</a>
    </nav>

    <main class="text-center px-4 max-w-4xl">
        <div class="inline-block px-4 py-1.5 rounded-full bg-blue-500/20 text-blue-300 font-semibold text-sm mb-6 border border-blue-500/30">
            ✨ Platform Event Kampus #1
        </div>
        <h1 class="text-5xl md:text-7xl font-extrabold mb-6 tracking-tight">
            Temukan Event Seru di <br>
            <span class="text-transparent bg-clip-text bg-gradient-to-r from-blue-400 via-indigo-400 to-purple-400 bg-gradient-animate">Amikom EventHub</span>
        </h1>
        <p class="text-lg md:text-xl text-slate-400 mb-10 max-w-2xl mx-auto leading-relaxed">
            Tingkatkan skill, bangun relasi, dan raih pengalaman baru melalui puluhan seminar dan workshop keren yang diadakan di kampus.
        </p>
        <div class="flex justify-center gap-4">
            <a href="/katalog" class="px-8 py-4 bg-white text-slate-900 font-bold rounded-full hover:scale-105 transition-transform shadow-[0_0_30px_rgba(255,255,255,0.3)]">
                Jelajahi Event
            </a>
            <a href="/profil" class="px-8 py-4 bg-transparent border border-slate-600 font-bold rounded-full hover:bg-slate-800 transition-colors">
                Lihat Profil
            </a>
        </div>
    </main>
</body>
</html>