@extends('layouts.admin')

@section('content')
<div class="bg-white rounded-3xl shadow-sm border border-slate-200 p-8">
    <div class="flex justify-between items-center mb-6">
        <h2 class="text-2xl font-bold">Manajemen Kategori</h2>
        <button class="px-4 py-2 bg-indigo-600 text-white rounded-xl font-bold">+ Tambah Kategori</button>
    </div>
    
    <table class="w-full text-left">
        <thead class="bg-slate-50 border-b border-slate-200">
            <tr>
                <th class="py-3 px-4">Nama Kategori</th>
                <th class="py-3 px-4">Aksi</th>
            </tr>
        </thead>
        <tbody>
            <tr class="border-b border-slate-100">
                <td class="py-3 px-4 font-bold text-slate-800">Seminar</td>
                <td class="py-3 px-4 flex gap-2">
                    <button class="px-3 py-1 bg-amber-100 text-amber-700 rounded-lg font-medium">Edit</button>
                    <button class="px-3 py-1 bg-red-100 text-red-700 rounded-lg font-medium">Hapus</button>
                </td>
            </tr>
            <tr class="border-b border-slate-100">
                <td class="py-3 px-4 font-bold text-slate-800">Workshop</td>
                <td class="py-3 px-4 flex gap-2">
                    <button class="px-3 py-1 bg-amber-100 text-amber-700 rounded-lg font-medium">Edit</button>
                    <button class="px-3 py-1 bg-red-100 text-red-700 rounded-lg font-medium">Hapus</button>
                </td>
            </tr>
        </tbody>
    </table>
</div>
@endsection