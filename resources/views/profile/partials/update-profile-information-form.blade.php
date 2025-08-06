<section>
    {{-- On utilise une carte pour un meilleur design --}}
    <div class="bg-white dark:bg-gray-800 shadow-lg sm:rounded-lg">
        <div class="p-6 md:p-8">

            {{-- AVATAR ET INFO UTILISATEUR --}}
            <header class="flex items-center space-x-6 mb-6 pb-6 border-b border-gray-200 dark:border-gray-700">
                {{-- Avatar généré dynamiquement --}}
                <img class="h-24 w-24 rounded-full object-cover" 
                     src="https://ui-avatars.com/api/?name={{ urlencode($user->name) }}&background=10B981&color=fff&size=128" 
                     alt="Avatar de {{ $user->name }}">
                
                <div>
                    <h2 class="text-2xl font-bold text-gray-900 dark:text-gray-100">
                        {{ $user->name }}
                    </h2>
                    <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
                        {{ __("Mettez à jour les informations de votre profil et votre adresse e-mail.") }}
                    </p>
                </div>
            </header>

            {{-- Formulaire caché pour la revérification d'email --}}
            <form id="send-verification" method="post" action="{{ route('verification.send') }}">
                @csrf
            </form>

            {{-- FORMULAIRE PRINCIPAL --}}
            <form method="post" action="{{ route('profile.update') }}" class="space-y-6">
                @csrf
                @method('patch')

                {{-- FORMULAIRE EN 2 COLONNES POUR NOM ET EMAIL --}}
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div>
                        <x-input-label for="name" :value="__('Nom')" />
                        <x-text-input id="name" name="name" type="text" class="mt-1 block w-full" :value="old('name', $user->name)" required autofocus autocomplete="name" />
                        <x-input-error class="mt-2" :messages="$errors->get('name')" />
                    </div>

                    <div>
                        <x-input-label for="email" :value="__('Email')" />
                        <x-text-input id="email" name="email" type="email" class="mt-1 block w-full" :value="old('email', $user->email)" required autocomplete="username" />
                        <x-input-error class="mt-2" :messages="$errors->get('email')" />
                    </div>
                </div>

                {{-- Logique de vérification d'email --}}
                @if ($user instanceof \Illuminate\Contracts\Auth\MustVerifyEmail && ! $user->hasVerifiedEmail())
                    <div>
                        <p class="text-sm mt-2 text-yellow-600 dark:text-yellow-400">
                            <i class="fas fa-exclamation-triangle mr-1"></i>
                            {{ __('Votre adresse e-mail n\'est pas vérifiée.') }}

                            <button form="send-verification" class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800">
                                {{ __('Cliquez ici pour renvoyer l\'e-mail de vérification.') }}
                            </button>
                        </p>

                        @if (session('status') === 'verification-link-sent')
                            <p class="mt-2 font-medium text-sm text-green-600 dark:text-green-400">
                                {{ __('Un nouveau lien de vérification a été envoyé à votre adresse e-mail.') }}
                            </p>
                        @endif
                    </div>
                @endif
                
                {{-- BOUTON DE SAUVEGARDE --}}
                <div class="flex items-center gap-4 pt-4">
                    <x-primary-button>{{ __('Enregistrer') }}</x-primary-button>

                    @if (session('status') === 'profile-updated')
                        <p
                            x-data="{ show: true }"
                            x-show="show"
                            x-transition
                            x-init="setTimeout(() => show = false, 2000)"
                            class="text-sm text-green-600 dark:text-green-400"
                        ><i class="fas fa-check mr-1"></i>{{ __('Enregistré.') }}</p>
                    @endif
                </div>
            </form>
        </div>
    </div>
</section>