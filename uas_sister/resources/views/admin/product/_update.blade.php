<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit Product') }}
        </h2>
    </x-slot>
 
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <h1 class="mb-0">Edit Product</h1>
                    <hr />
                    <form action="{{ route('admin/products/update', $products->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="mb-4">
                            <input type="text" name="judul" id="judul" class="text-black mt-1 p-2 border border-gray-300 rounded-md w-full" placeholder="Judul" required>
                            @error('judul')
                            <div>{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-4">
                            <input type="text" name="kategory" id="kategory" class="text-black mt-1 p-2 border border-gray-300 rounded-md w-full" placeholder="Kategory" required>
                            @error('kategory')
                            <div>{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-4">
                            <input type="text" name="harga" id="harga" class="text-black mt-1 p-2 border border-gray-300 rounded-md w-full" placeholder="Harga" required>
                            @error('harga')
                            <div>{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-4">
                            <input type="file" name="photo" id="photo" class="text-black mt-1 p-2 border border-gray-300 rounded-md w-full" required>
                            @error('photo')
                            <div>{{ $message }}</div>
                            @enderror
                        </div>
                        
                        <div class="flex justify-end">
                            <button type="submit" class="bg-purple-900 text-white px-4 py-2 rounded-md hover:bg-blue-600">Update</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>