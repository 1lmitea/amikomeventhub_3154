@extends('layouts.admin')
@section('content')
<div class="bg-white rounded-3xl border border-slate-100 shadow-sm overflow-hidden">
    <div class="p-8 border-b flex justify-between items-center">
        <h3 class="font-black text-xl">Kelola Acara</h3>
        <button class="px-4 py-2 bg-indigo-600 text-white rounded-xl font-bold">+ Tambah Acara Baru</button>
    </div>
    <div class="overflow-x-auto">
        <table class="w-full text-left border-collapse">
            <thead class="bg-slate-50 text-slate-400 uppercase text-[10px] font-black tracking-widest">
                <tr>
                    <th class="px-8 py-4">TIDAK</th>
                    <th class="px-8 py-4">POSTER</th>
                    <th class="px-8 py-4">PERISTIWA</th>
                    <th class="px-8 py-4">HARGA / STOK</th>
                    <th class="px-8 py-4">AKSI</th>
                </tr>
            </thead>
            <tbody class="divide-y border-t">
                <tr class="hover:bg-slate-50 transition">
                    <td class="px-8 py-6 font-bold">1</td>
                    <td class="px-8 py-6">
                        <img src="https://images.unsplash.com/photo-1514525253161-7a46d19cd819?q=80&w=200&auto=format&fit=crop" class="w-16 h-16 rounded-xl object-cover">
                    </td>
                    <td class="px-8 py-6">
                        <p class="font-bold text-slate-800">Malam Jazz 2024</p>
                        <p class="text-xs text-slate-400">Musik • 16 November 2024</p>
                    </td>
                    <td class="px-8 py-6">
                        <p class="font-bold text-indigo-600">Rp 150.000</p>
                        <p class="text-xs text-slate-400">Stok: 42/100</p>
                    </td>
                    <td class="px-8 py-6 flex gap-2 mt-4">
                        <button class="px-3 py-1.5 bg-indigo-50 text-indigo-600 rounded-lg font-bold text-sm">Edit</button>
                        <button class="px-3 py-1.5 bg-rose-50 text-rose-600 rounded-lg font-bold text-sm">Hapus</button>
                    </td>
                </tr>
                <tr class="hover:bg-slate-50 transition">
                    <td class="px-8 py-6 font-bold">2</td>
                    <td class="px-8 py-6">
                        <img src="https://images.unsplash.com/photo-1531482615713-2afd69097998?q=80&w=200&auto=format&fit=crop" class="w-16 h-16 rounded-xl object-cover">
                    </td>
                    <td class="px-8 py-6">
                        <p class="font-bold text-slate-800">Lokakarya AI & Masa Depan</p>
                        <p class="text-xs text-slate-400">Teknologi • 26 Oktober 2024</p>
                    </td>
                    <td class="px-8 py-6">
                        <p class="font-bold text-indigo-600">Rp 50.000</p>
                        <p class="text-xs text-slate-400">Stok: 12/50</p>
                    </td>
                    <td class="px-8 py-6 flex gap-2 mt-4">
                        <button class="px-3 py-1.5 bg-indigo-50 text-indigo-600 rounded-lg font-bold text-sm">Edit</button>
                        <button class="px-3 py-1.5 bg-rose-50 text-rose-600 rounded-lg font-bold text-sm">Hapus</button>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
@endsection
