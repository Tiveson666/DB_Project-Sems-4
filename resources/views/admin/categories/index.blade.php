@extends('layouts.admin')

@section('content')
<div class="container mx-auto px-4 py-8">
    
    <div class="flex justify-between items-center mb-6">
        <h1 class="text-2xl font-bold text-gray-800">Manajemen Kategori</h1>
        <a href="{{ route('admin.categories.create') }}" class="bg-blue-600 hover:bg-blue-700 text-white font-semibold py-2 px-4 rounded-lg shadow transition duration-200 flex items-center gap-2">
            <span>+</span> Tambah Kategori
        </a>
    </div>

    <div class="bg-white rounded-lg shadow-md overflow-hidden">
        <table class="min-w-full leading-normal">
            <thead>
                <tr>
                    <th class="px-5 py-4 border-b-2 border-gray-200 bg-gray-50 text-left text-xs font-bold text-gray-600 uppercase tracking-wider">
                        No
                    </th>
                    <th class="px-5 py-4 border-b-2 border-gray-200 bg-gray-50 text-left text-xs font-bold text-gray-600 uppercase tracking-wider">
                        Nama Kategori
                    </th>
                    <th class="px-5 py-4 border-b-2 border-gray-200 bg-gray-50 text-center text-xs font-bold text-gray-600 uppercase tracking-wider">
                        Aksi
                    </th>
                </tr>
            </thead>
            <tbody>
                @forelse($categories as $category)
                <tr class="hover:bg-gray-50 transition">
                    <td class="px-5 py-4 border-b border-gray-200 text-sm">
                        <p class="text-gray-900 whitespace-no-wrap">{{ $loop->iteration }}</p>
                    </td>
                    <td class="px-5 py-4 border-b border-gray-200 text-sm">
                        <p class="text-gray-900 whitespace-no-wrap font-medium">{{ $category->name }}</p>
                    </td>
                    <td class="px-5 py-4 border-b border-gray-200 text-sm text-center">
                        <a href="{{ route('admin.categories.edit', $category->id) }}" class="inline-block bg-yellow-100 text-yellow-700 hover:bg-yellow-200 px-3 py-1 rounded text-xs font-semibold mr-2 transition">Edit</a>
                        <form action="{{ route('admin.categories.destroy', $category->id) }}" method="POST" class="inline-block">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="inline-block bg-red-100 text-red-700 hover:bg-red-200 px-3 py-1 rounded text-xs font-semibold transition" onclick="return confirm('Yakin ingin menghapus?')">Hapus</button>
                        </form>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="3" class="px-5 py-4 border-b border-gray-200 text-sm text-center text-gray-500">
                        Belum ada kategori. <a href="{{ route('admin.categories.create') }}" class="text-blue-600 hover:underline">Tambah kategori baru</a>
                    </td>
                </tr>
                @endforelse
                        <a href="#" class="inline-block bg-red-100 text-red-700 hover:bg-red-200 px-3 py-1 rounded text-xs font-semibold transition">Hapus</a>
                    </td>
                </tr>

                <tr class="hover:bg-gray-50 transition">
                    <td class="px-5 py-4 border-b border-gray-200 text-sm">
                        <p class="text-gray-900 whitespace-no-wrap">3</p>
                    </td>
                    <td class="px-5 py-4 border-b border-gray-200 text-sm">
                        <p class="text-gray-900 whitespace-no-wrap font-medium">Workshop</p>
                    </td>
                    <td class="px-5 py-4 border-b border-gray-200 text-sm text-center">
                        <a href="#" class="inline-block bg-yellow-100 text-yellow-700 hover:bg-yellow-200 px-3 py-1 rounded text-xs font-semibold mr-2 transition">Edit</a>
                        <a href="#" class="inline-block bg-red-100 text-red-700 hover:bg-red-200 px-3 py-1 rounded text-xs font-semibold transition">Hapus</a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
@endsection