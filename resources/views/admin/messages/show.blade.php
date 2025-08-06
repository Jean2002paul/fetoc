<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                {{ __('Lecture du message') }}
            </h2>
            <a href="{{ route('admin.messages.index') }}" class="text-sm text-gray-500 hover:text-gray-800 dark:text-gray-400 dark:hover:text-white font-medium">
                <i class="fas fa-arrow-left mr-2"></i> Boîte de réception
            </a>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <div class="border-b border-gray-200 dark:border-gray-700 pb-4 mb-6">
                        <h3 class="text-2xl font-semibold">{{ $message->subject }}</h3>
                        <div class="mt-2 text-sm text-gray-600 dark:text-gray-400">
                            <p>De : <span class="font-medium">{{ $message->name }}</span> &lt;{{ $message->email }}&gt;</p>
                            <p>Reçu : {{ $message->created_at->format('d/m/Y à H:i') }}</p>
                        </div>
                    </div>

                    <div class="prose dark:prose-invert max-w-none">
                        {{-- nl2br() pour convertir les sauts de ligne en <br> --}}
                        {!! nl2br(e($message->message)) !!}
                    </div>

                    <div class="mt-8 pt-6 border-t border-gray-200 dark:border-gray-700 flex justify-end">
                         <form action="{{ route('admin.messages.destroy', $message) }}" method="POST" onsubmit="return confirm('Êtes-vous sûr de vouloir supprimer ce message ?');">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="px-4 py-2 bg-red-600 hover:bg-red-700 text-white rounded-md text-sm">
                                <i class="fas fa-trash-alt mr-2"></i> Supprimer ce message
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>