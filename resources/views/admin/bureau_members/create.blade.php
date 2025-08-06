<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Ajouter un nouveau membre au bureau') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 md:p-8 text-gray-900 dark:text-gray-100">
                    <form action="{{ route('admin.bureau.members.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <!-- Nom -->
                            <div class="md:col-span-2">
                                <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Nom complet <span class="text-red-500">*</span></label>
                                <input type="text" id="name" name="name" value="{{ old('name') }}" class="w-full bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:text-white" required>
                            </div>
                            <!-- Position -->
                            <div>
                                <label for="position" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Position / Rôle <span class="text-red-500">*</span></label>
                                <input type="text" id="position" name="position" value="{{ old('position') }}" class="w-full bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:text-white" placeholder="Ex: Président" required>
                            </div>
                            <!-- Ordre -->
                            <div>
                                <label for="order" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Ordre d'affichage</label>
                                <input type="number" id="order" name="order" value="{{ old('order', 0) }}" class="w-full bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:text-white">
                            </div>
                        </div>

                        <!-- Photo -->
                        <div class="mt-6">
                            <label for="photo" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Photo</label>
                            <input type="file" id="photo" name="photo_path" class="w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 cursor-pointer dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600">
                        </div>

                        <!-- Boutons -->
                        <div class="flex items-center gap-4 mt-8">
                            <button type="submit" class="px-5 py-2.5 bg-blue-600 text-white rounded-lg hover:bg-blue-700">Enregistrer</button>
                            <a href="{{ route('admin.bureau.members.index') }}" class="text-gray-500 hover:text-gray-800 dark:text-gray-400">Annuler</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>