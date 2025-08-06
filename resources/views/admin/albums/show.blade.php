<x-app-layout>
    <x-slot name="header">
        <div class="flex flex-col md:flex-row justify-between items-start md:items-center">
            <div>
                <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                    Album : <span class="text-blue-500">{{ $album->name }}</span>
                </h2>
                <p class="text-sm text-gray-500 dark:text-gray-400 mt-1">Gérez les photos de cet album.</p>
            </div>
            <a href="{{ route('admin.albums.index') }}" class="mt-2 md:mt-0 text-sm text-gray-500 hover:text-gray-800 dark:text-gray-400 dark:hover:text-white font-medium">
                <i class="fas fa-arrow-left mr-2"></i> Retour à la liste des albums
            </a>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            {{-- FORMULAIRE D'AJOUT DE PHOTOS --}}
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg mb-8">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <h3 class="text-lg font-semibold mb-4">Ajouter de nouvelles photos</h3>
                    <form action="{{ route('admin.photos.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="album_id" value="{{ $album->id }}">
                        
                        <div class="mb-4">
                            <label for="photos" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Sélectionner des photos</label>
                            {{-- L'attribut "multiple" est la clé pour l'upload multiple --}}
                            <input type="file" id="photos" name="photos[]" multiple class="block w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 cursor-pointer dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" required>
                            <p class="mt-1 text-xs text-gray-500 dark:text-gray-400">Vous pouvez sélectionner plusieurs fichiers à la fois.</p>
                        </div>

                        <button type="submit" class="px-4 py-2 bg-blue-600 text-white rounded-md hover:bg-blue-700">
                            <i class="fas fa-upload mr-2"></i> Uploader les photos
                        </button>
                    </form>
                </div>
            </div>

            {{-- LISTE DES PHOTOS EXISTANTES --}}
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <h3 class="text-lg font-semibold mb-4">Photos dans l'album ({{ $album->photos->count() }})</h3>
                    @if($album->photos->count() > 0)
                        <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 gap-4">
                            @foreach ($album->photos as $photo)
                                <div class="relative group">
                                    <img src="{{ asset('storage/' . $photo->path) }}" alt="{{ $photo->title ?? 'Photo de l\'album' }}" class="rounded-lg shadow-md w-full h-32 object-cover">
                                    {{-- Bouton de suppression --}}
                                    <div class="absolute top-0 right-0 p-1">
                                        <form action="{{ route('admin.photos.destroy', $photo) }}" method="POST" onsubmit="return confirm('Êtes-vous sûr ?');">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="w-8 h-8 bg-red-600/80 hover:bg-red-700 text-white rounded-full flex items-center justify-center transition-opacity opacity-0 group-hover:opacity-100">
                                                <i class="fas fa-trash-alt fa-sm"></i>
                                            </button>
                                        </form>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    @else
                        <p class="text-gray-500">Cet album est vide pour le moment. Utilisez le formulaire ci-dessus pour ajouter des photos.</p>
                    @endif
                </div>
            </div>

        </div>
    </div>
</x-app-layout>