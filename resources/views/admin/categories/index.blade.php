@extends('layouts.admin')

@section('content')
<div class="bg-white rounded-[2.5rem] border border-slate-100 shadow-sm overflow-hidden mt-6">
    <div class="px-8 py-6 bg-slate-50/50 border-b flex flex-wrap gap-4 items-center justify-between">
        <div>
            <h1 class="text-2xl font-black">Kelola Kategori</h1>
            <p class="text-slate-500 font-medium text-sm mt-1">Manajemen daftar kategori event Anda.</p>
        </div>
        <div>
            <button class="px-6 py-3 bg-indigo-600 text-white rounded-xl font-bold shadow-lg hover:bg-indigo-700 transition text-sm">
                + Tambah Kategori Baru
            </button>
        </div>
    </div>

    <div class="overflow-x-auto">
        <table class="w-full text-left border-collapse">
            <thead class="bg-slate-50 text-slate-400 uppercase text-[10px] font-black tracking-widest">
                <tr>
                    <th class="px-8 py-4">No</th>
                    <th class="px-8 py-4">Nama Kategori</th>
                    <th class="px-8 py-4">Slug</th>
                    <th class="px-8 py-4 text-right">Aksi</th>
                </tr>
            </thead>
            <tbody class="divide-y border-t">
                <tr class="hover:bg-slate-50/50 transition">
                    <td class="px-8 py-6 font-bold text-slate-800">1</td>
                    <td class="px-8 py-6 font-bold text-slate-800">Teknologi</td>
                    <td class="px-8 py-6 text-slate-500 text-sm">teknologi</td>
                    <td class="px-8 py-6 text-right">
                        <button class="px-4 py-2 bg-indigo-50 text-indigo-600 rounded-lg text-sm font-bold hover:bg-indigo-100 transition mr-2">Edit</button>
                        <button class="px-4 py-2 bg-rose-50 text-rose-600 rounded-lg text-sm font-bold hover:bg-rose-100 transition">Hapus</button>
                    </td>
                </tr>
                <tr class="hover:bg-slate-50/50 transition">
                    <td class="px-8 py-6 font-bold text-slate-800">2</td>
                    <td class="px-8 py-6 font-bold text-slate-800">Hiburan</td>
                    <td class="px-8 py-6 text-slate-500 text-sm">hiburan</td>
                    <td class="px-8 py-6 text-right">
                        <button class="px-4 py-2 bg-indigo-50 text-indigo-600 rounded-lg text-sm font-bold hover:bg-indigo-100 transition mr-2">Edit</button>
                        <button class="px-4 py-2 bg-rose-50 text-rose-600 rounded-lg text-sm font-bold hover:bg-rose-100 transition">Hapus</button>
                    </td>
                </tr>
                <tr class="hover:bg-slate-50/50 transition">
                    <td class="px-8 py-6 font-bold text-slate-800">3</td>
                    <td class="px-8 py-6 font-bold text-slate-800">Kreatif & Desain</td>
                    <td class="px-8 py-6 text-slate-500 text-sm">kreatif-desain</td>
                    <td class="px-8 py-6 text-right">
                        <button class="px-4 py-2 bg-indigo-50 text-indigo-600 rounded-lg text-sm font-bold hover:bg-indigo-100 transition mr-2">Edit</button>
                        <button class="px-4 py-2 bg-rose-50 text-rose-600 rounded-lg text-sm font-bold hover:bg-rose-100 transition">Hapus</button>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
@endsection
