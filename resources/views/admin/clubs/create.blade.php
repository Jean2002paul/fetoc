<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Ajouter un nouveau club') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 md:p-8 text-gray-900 dark:text-gray-100">
                    
                    {{-- Affichage des erreurs de validation --}}
                    @if ($errors->any())
                        <div class="mb-4 bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">
                            <strong class="font-bold">Oups!</strong>
                            <span class="block sm:inline">Il y a des erreurs dans votre formulaire.</span>
                            <ul class="mt-3 list-disc list-inside text-sm">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    
                    <form action="{{ route('admin.clubs.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        
                        <!-- Nom du club -->
                        <div class="mb-6">
                            <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Nom du Club <span class="text-red-500">*</span></label>
                            <input type="text" id="name" name="name" value="{{ old('name') }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white" required>
                        </div>
                        
                        <!-- Description -->
                        <div class="mb-6">
                            <label for="description" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Description</label>
                            <textarea id="description" name="description" rows="5" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white">{{ old('description') }}</textarea>
                        </div>
                        
                        <!-- Adresse -->
                        <div class="mb-6">
                            <label for="website_url" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Site Web (facultatif)</label>
                            <input type="url" id="website_url" name="website_url" value="{{ old('website_url') }}" placeholder="https://www.example-club.com" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white">
                        </div>

                        <!-- Logo -->
                        <div class="mb-6">
                            <label for="logo" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Logo du Club</label>
                            <input type="file" id="logo" name="logo" class="block w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 cursor-pointer dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400">
                        </div>
                        
                        <hr class="my-8 border-gray-200 dark:border-gray-700">

                        <h3 class="text-lg font-semibold mb-4 text-gray-900 dark:text-gray-100">Informations de Contact</h3>
                        
                        <!-- Contact Person & Phone -->
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div class="mb-6">
                                <label for="contact_person" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Personne de contact</label>
                                <input type="text" id="contact_person" name="contact_person" value="{{ old('contact_person') }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white">
                            </div>
                            <div class="mb-6">
                                <label for="contact_phone" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Téléphone</label>
                                <input type="tel" id="contact_phone" name="contact_phone" value="{{ old('contact_phone') }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white">
                            </div>
                        </div>
                        <div class="mb-6">
                            <label for="contact_email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Email de contact</label>
                            <input type="email" id="contact_email" name="contact_email" value="{{ old('contact_email') }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white">
                        </div>

                        <hr class="my-8 border-gray-200 dark:border-gray-700">
                        
                        <!-- Statut -->
                        <div class="flex items-center mb-6">
                            <input id="is_active" name="is_active" type="checkbox" value="1" checked class="w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            <label for="is_active" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Club Actif</label>
                        </div>

                        <!-- Boutons -->
                        <div class="flex items-center gap-4 mt-8">
                            <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Enregistrer</button>
                            <a href="{{ route('admin.clubs.index') }}" class="text-gray-500 hover:text-gray-800 dark:text-gray-400 dark:hover:text-white font-medium">Annuler</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>