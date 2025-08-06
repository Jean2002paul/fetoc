<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                {{ __('Gestion des Membres du Bureau') }}
            </h2>
            <a href="{{ route('admin.bureau.members.create') }}" class="px-4 py-2 bg-green-600 hover:bg-green-700 text-white rounded-md font-semibold text-sm shadow-md transition-colors duration-200">
                <i class="fas fa-plus mr-2"></i> Ajouter un Membre
            </a>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    
                    @if(session('success'))
                        <div class="bg-green-100 border-l-4 border-green-500 text-green-700 p-4 mb-6" role="alert">
                            <p>{{ session('success') }}</p>
                        </div>
                    @endif

                    <div class="overflow-x-auto">
                        <table class="min-w-full divide-y divide-gray-200 dark:divide-gray-700">
                            <thead class="bg-gray-50 dark:bg-gray-700">
                                <tr>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase">Ordre</th>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase">Photo</th>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase">Nom</th>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase">Position</th>
                                    <th class="relative px-6 py-3"><span class="sr-only">Actions</span></th>
                                </tr>
                            </thead>
                            <tbody class="bg-white dark:bg-gray-800 divide-y divide-gray-200 dark:divide-gray-700">
                                @forelse ($members as $member)
                                    <tr>
                                        <td class="px-6 py-4 text-sm font-medium text-gray-500 dark:text-gray-400">{{ $member->order }}</td>
                                        <td class="px-6 py-4"><img class="h-10 w-10 rounded-full object-cover" src="{{ $member->photo_path ? asset('storage/' . $member->photo_path) : 'https://ui-avatars.com/api/?name=' . urlencode($member->name) }}" alt="Photo de {{ $member->name }}"></td>
                                        <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">{{ $member->name }}</td>
                                        <td class="px-6 py-4 text-gray-500 dark:text-gray-400">{{ $member->position }}</td>
                                        <td class="px-6 py-4 text-right text-sm font-medium">
                                            <div class="flex justify-end items-center space-x-4">
                                                <a href="{{ route('admin.bureau.members.edit', $member) }}" class="text-indigo-600 hover:text-indigo-900 dark:text-indigo-400 dark:hover:text-indigo-600">Modifier</a>
                                                <form action="{{ route('admin.bureau.members.destroy', $member) }}" method="POST" onsubmit="return confirm('Êtes-vous sûr ?');">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="text-red-600 hover:text-red-900 dark:text-red-400 dark:hover:text-red-600">Supprimer</button>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                @empty
                                    <tr><td colspan="5" class="px-6 py-12 text-center text-gray-500">Aucun membre du bureau ajouté pour le moment.</td></tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>