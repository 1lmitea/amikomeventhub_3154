<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bantuan | Amikom EventHub</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style> body { background-color: #0b1120; color: #f8fafc; font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; } </style>
</head>
<body class="min-h-screen relative flex flex-col items-center pt-10 px-4">

    <nav class="flex justify-center gap-2 md:gap-6 mb-16 bg-white/5 p-3 rounded-full backdrop-blur-xl border border-white/10 shadow-2xl z-10">
        <a href="/" class="px-6 py-2 rounded-full hover:bg-white/10 transition-all font-medium">Beranda</a>
        <a href="/profil" class="px-6 py-2 rounded-full hover:bg-white/10 transition-all font-medium">Profil</a>
        <a href="/katalog" class="px-6 py-2 rounded-full hover:bg-white/10 transition-all font-medium">Katalog</a>
        <a href="/bantuan" class="px-6 py-2 rounded-full bg-gradient-to-r from-amber-500 to-yellow-500 text-white shadow-lg font-bold">Bantuan</a>
        <a href="/kontak" class="px-6 py-2 rounded-full hover:bg-white/10 transition-all font-medium">Kontak</a>
    </nav>

    <div class="max-w-2xl w-full">
        <div class="text-center mb-10">
            <span class="text-5xl mb-4 block">💡</span>
            <h1 class="text-3xl font-bold mb-2">Pusat Bantuan</h1>
            <p class="text-slate-400">Jawaban untuk pertanyaan yang sering diajukan.</p>
        </div>

        <div class="space-y-4">
            <div class="bg-slate-800/50 border border-slate-700 p-6 rounded-2xl hover:bg-slate-800 transition-colors cursor-pointer group">
                <h3 class="text-lg font-bold text-white mb-2 flex justify-between">
                    Bagaimana cara mendaftar event?
                    <span class="text-amber-500 group-hover:rotate-180 transition-transform">↓</span>
                </h3>
                <p class="text-slate-400 text-sm mt-3 border-t border-slate-700/50 pt-3">Masuk ke halaman Katalog, pilih event yang Anda minati, lalu klik tombol Detail. Di sana akan ada formulir pendaftaran yang bisa langsung diisi.</p>
            </div>
            
            <div class="bg-slate-800/50 border border-slate-700 p-6 rounded-2xl hover:bg-slate-800 transition-colors cursor-pointer group">
                <h3 class="text-lg font-bold text-white mb-2 flex justify-between">
                    Apakah semua event gratis?
                    <span class="text-amber-500 group-hover:rotate-180 transition-transform">↓</span>
                </h3>
                <p class="text-slate-400 text-sm mt-3 border-t border-slate-700/50 pt-3">Sebagian besar event yang diselenggarakan oleh kampus bersifat gratis. Namun, beberapa workshop khusus mungkin memerlukan biaya pendaftaran.</p>
            </div>

            <div class="bg-slate-800/50 border border-slate-700 p-6 rounded-2xl hover:bg-slate-800 transition-colors cursor-pointer group">
                <h3 class="text-lg font-bold text-white mb-2 flex justify-between">
                    Kapan sertifikat akan dikirimkan?
                    <span class="text-amber-500 group-hover:rotate-180 transition-transform">↓</span>
                </h3>
                <p class="text-slate-400 text-sm mt-3 border-t border-slate-700/50 pt-3">E-Sertifikat akan dikirimkan maksimal 3x24 jam setelah acara selesai ke email yang Anda gunakan saat mendaftar.</p>
            </div>
        </div>
    </div>
</body>
</html>