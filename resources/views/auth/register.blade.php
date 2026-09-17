<x-guest-layout>

    <form method="POST" action="{{ route('register.post') }}">

        @csrf

        <!-- =====================================================
             NOM
        ====================================================== -->
        <div>
            <x-input-label
                for="name"
                :value="__('Nom')"
            />

            <x-text-input
                id="name"
                class="block mt-1 w-full"
                type="text"
                name="name"
                :value="old('name')"
                required
                autofocus
                autocomplete="name"
            />

            <x-input-error
                :messages="$errors->get('name')"
                class="mt-2"
            />
        </div>


        <!-- =====================================================
             EMAIL
        ====================================================== -->
        <div class="mt-4">

            <x-input-label
                for="email"
                :value="__('Adresse email')"
            />

            <x-text-input
                id="email"
                class="block mt-1 w-full"
                type="email"
                name="email"
                :value="old('email')"
                required
                autocomplete="username"
            />

            <x-input-error
                :messages="$errors->get('email')"
                class="mt-2"
            />

        </div>


        <!-- =====================================================
             CLASSE
        ====================================================== -->
        <div class="mt-4">

            <x-input-label
                for="idclasse"
                :value="__('Classe')"
            />

            <select
                id="idclasse"
                name="idclasse"
                class="block mt-1 w-full border-gray-300
                       focus:border-indigo-500
                       focus:ring-indigo-500
                       rounded-md shadow-sm"
                required
            >

                <option value="">
                    -- Sélectionnez votre classe --
                </option>

                @foreach($classes as $classe)

                    <option
                        value="{{ $classe->id }}"
                        {{ old('idclasse') == $classe->id ? 'selected' : '' }}
                    >
                        {{ $classe->nom }}
                    </option>

                @endforeach

            </select>

            <x-input-error
                :messages="$errors->get('idclasse')"
                class="mt-2"
            />

        </div>


        <!-- =====================================================
             MOT DE PASSE
        ====================================================== -->
        <div class="mt-4">

            <x-input-label
                for="password"
                :value="__('Mot de passe')"
            />

            <x-text-input
                id="password"
                class="block mt-1 w-full"
                type="password"
                name="password"
                required
                autocomplete="new-password"
            />

            <x-input-error
                :messages="$errors->get('password')"
                class="mt-2"
            />

        </div>


        <!-- =====================================================
             CONFIRMATION DU MOT DE PASSE
        ====================================================== -->
        <div class="mt-4">

            <x-input-label
                for="password_confirmation"
                :value="__('Confirmer le mot de passe')"
            />

            <x-text-input
                id="password_confirmation"
                class="block mt-1 w-full"
                type="password"
                name="password_confirmation"
                required
                autocomplete="new-password"
            />

            <x-input-error
                :messages="$errors->get('password_confirmation')"
                class="mt-2"
            />

        </div>


        <!-- =====================================================
             BOUTONS
        ====================================================== -->
        <div class="flex items-center justify-end mt-6">

            <!-- Retour vers connexion -->
            <a
                class="underline text-sm text-gray-600
                       dark:text-gray-400
                       hover:text-gray-900
                       dark:hover:text-gray-100
                       rounded-md
                       focus:outline-none
                       focus:ring-2
                       focus:ring-offset-2
                       focus:ring-indigo-500"
                href="{{ route('login') }}"
            >
                {{ __('Déjà inscrit ?') }}
            </a>


            <!-- Bouton inscription -->
            <x-primary-button class="ms-4">

                {{ __('S’inscrire') }}

            </x-primary-button>

        </div>

    </form>

</x-guest-layout>