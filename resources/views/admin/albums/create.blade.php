<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Créer un nouvel album') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 md:p-8 text-gray-900 dark:text-gray-100">
                    <form action="{{ route('admin.albums.store') }}" method="POST">
                        @csrf
                        
                        <!-- Nom de l'album -->
                        <div class="mb-6">
                            <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Nom de l'album <span class="text-red-500">*</span></label>
                            <input type="text" id="name" name="name" value="{{ old('name') }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white" required>
                            @error('name')<p class="mt-2 text-sm text-red-600 dark:text-red-500">{{ $message }}</p>@enderror
                        </div>
                        
                        <!-- Description -->
                        <div class="mb-6">
                            <label for="description" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Description (facultatif)</label>
                            <textarea id="description" name="description" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white">{{ old('description') }}</textarea>
                            @error('description')<p class="mt-2 text-sm text-red-600 dark:text-red-500">{{ $message }}</p>@enderror
                        </div>

                        <!-- Boutons -->
                        <div class="flex items-center gap-4 mt-8">
                            <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Enregistrer l'album</button>
                            <a href="{{ route('admin.albums.index') }}" class="text-gray-500 hover:text-gray-800 dark:text-gray-400 dark:hover:text-white font-medium">Annuler</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>