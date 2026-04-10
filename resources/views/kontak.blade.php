<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kontak Kami</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style> body { background-color: #0f172a; color: #f8fafc; } </style>
</head>
<body class="min-h-screen font-sans antialiased p-8">

    <nav class="flex justify-center gap-4 mb-12 bg-slate-800/50 p-4 rounded-2xl backdrop-blur-md border border-slate-700 shadow-lg">
        <a href="/" class="px-5 py-2 rounded-full bg-slate-700 hover:bg-rose-500 transition duration-300 font-semibold">Home</a>
        <a href="/profil" class="px-5 py-2 rounded-full bg-slate-700 hover:bg-rose-500 transition duration-300 font-semibold">Profil</a>
        <a href="/katalog" class="px-5 py-2 rounded-full bg-slate-700 hover:bg-rose-500 transition duration-300 font-semibold">Katalog</a>
        <a href="/bantuan" class="px-5 py-2 rounded-full bg-slate-700 hover:bg-rose-500 transition duration-300 font-semibold">Bantuan</a>
        <a href="/kontak" class="px-5 py-2 rounded-full bg-rose-600 text-white shadow-[0_0_15px_rgba(225,29,72,0.5)] font-semibold">Kontak</a>
    </nav>

    <div class="max-w-lg mx-auto bg-slate-800/80 p-8 rounded-3xl border border-slate-700 shadow-2xl">
        <h1 class="text-3xl font-bold text-center mb-6 text-rose-400">Hubungi Kami</h1>
        
        <form class="space-y-4">
            <div>
                <label class="block text-slate-400 mb-1 text-sm">Nama Lengkap</label>
                <input type="text" class="w-full bg-slate-900 border border-slate-700 rounded-lg px-4 py-2 text-white focus:outline-none focus:border-rose-500 focus:ring-1 focus:ring-rose-500 transition-colors" placeholder="Masukkan nama...">
            </div>
            <div>
                <label class="block text-slate-400 mb-1 text-sm">Pesan</label>
                <textarea rows="4" class="w-full bg-slate-900 border border-slate-700 rounded-lg px-4 py-2 text-white focus:outline-none focus:border-rose-500 focus:ring-1 focus:ring-rose-500 transition-colors" placeholder="Ada yang bisa dibantu?"></textarea>
            </div>
            <button type="button" class="w-full py-3 bg-rose-600 hover:bg-rose-500 text-white font-bold rounded-xl shadow-[0_0_15px_rgba(225,29,72,0.4)] transition-all">Kirim Pesan</button>
        </form>
    </div>

</body>
</html>