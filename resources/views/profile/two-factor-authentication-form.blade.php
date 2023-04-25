<x-action-section>
    @section('menu')
    <div class="text-gray-600 dark:text-gray-100 dark:bg-dcolor p-3 h-auto w-auto min-w-fit bg-white shadow-[0px_3px_6px_0px_#f7fafc]">
        <div class="flex m-1 p-1 text-base hover:text-pcolor">
            <a href="{{route('profile.show')}}">Informations de profile</a>
        </div>
        <hr class="h-px my-2 bg-gray-200 border-0 dark:bg-gray-700">
        <div class="flex m-1 p-1 text-base hover:text-pcolor">
            <a href="{{route('profile.update-password')}}">Mot de passe</a>
        </div>
        <hr class="h-px my-2 bg-gray-200 border-0 dark:bg-gray-700">
        <div class="flex m-1 p-1 text-base hover:text-pcolor">
            <a href="">Mes commandes</a>
        </div>
    </div>
    @endsection>

    <x-slot name="content">
        <h3 class="text-lg font-medium text-gray-900 dark:text-gray-200">
            @if ($this->enabled)
                @if ($showingConfirmation)
                    {{ __("Terminer l'activation de l'authentification à deux facteurs.") }}
                @else
                    {{ __("Vous avez activé l'authentification à deux facteurs.") }}
                @endif
            @else
                {{ __("Vous n'avez pas activé l'authentification à deux facteurs.") }}
            @endif
        </h3>

        <div class="mt-3 max-w-xl text-sm text-gray-600 dark:text-gray-400">
            <p>
                {{ __("Lorsque l'authentification à deux facteurs est activée, vous devrez saisir un jeton sécurisé et aléatoire lors de l'authentification. Vous pouvez obtenir ce jeton à partir de l'application Google Authenticator sur votre téléphone.") }}
            </p>
        </div>

        @if ($this->enabled)
            @if ($showingQrCode)
                <div class="mt-4 max-w-xl text-sm text-gray-600 dark:text-gray-400">
                    <p class="font-semibold">
                        @if ($showingConfirmation)
                            {{ __("Pour terminer l'activation de l'authentification à deux facteurs, scannez le code QR suivant à l'aide de l'application d'authentification de votre téléphone ou entrez la clé de configuration et fournissez le code OTP généré.") }}
                        @else
                            {{ __("L'authentification à deux facteurs est maintenant activée. Scannez le code QR suivant à l'aide de l'application d'authentification de votre téléphone ou entrez la clé de configuration") }}
                        @endif
                    </p>
                </div>

                <div class="mt-4">
                    {!! $this->user->twoFactorQrCodeSvg() !!}
                </div>

                <div class="mt-4 max-w-xl text-sm text-gray-600 dark:text-gray-400">
                    <p class="font-semibold">
                        {{ __('Clé de configuration') }}: {{ decrypt($this->user->two_factor_secret) }}
                    </p>
                </div>

                @if ($showingConfirmation)
                    <div class="mt-4">
                        <x-label for="code" value="{{ __('Code') }}" />

                        <x-input id="code" type="text" name="code" class="block mt-1 w-1/2" inputmode="numeric" autofocus autocomplete="one-time-code"
                            wire:model.defer="code"
                            wire:keydown.enter="confirmTwoFactorAuthentication" />

                        <x-input-error for="code" class="mt-2" />
                    </div>
                @endif
            @endif

            @if ($showingRecoveryCodes)
                <div class="mt-4 max-w-xl text-sm text-gray-600 dark:text-gray-400">
                    <p class="font-semibold">
                        {{ __("Stockez ces codes de récupération dans un gestionnaire de mots de passe sécurisé. Ils peuvent être utilisés pour récupérer l'accès à votre compte si votre appareil d'authentification à deux facteurs est perdu.") }}
                    </p>
                </div>

                <div class="grid gap-1 max-w-xl mt-4 px-4 py-4 font-mono text-sm bg-gray-100 dark:bg-gray-700 rounded-lg">
                    @foreach (json_decode(decrypt($this->user->two_factor_recovery_codes), true) as $code)
                        <div class="dark:text-gray-200">{{ $code }}</div>
                    @endforeach
                </div>
            @endif
        @endif

        <div class="mt-5">
            @if (! $this->enabled)
                <x-confirms-password wire:then="enableTwoFactorAuthentication">
                    <x-button type="button" wire:loading.attr="disabled">
                        {{ __('Activer') }}
                    </x-button>
                </x-confirms-password>
            @else
                @if ($showingRecoveryCodes)
                    <x-confirms-password wire:then="regenerateRecoveryCodes">
                        <x-secondary-button class="mr-3">
                            {{ __('Régénérer les codes de récupération') }}
                        </x-secondary-button>
                    </x-confirms-password>
                @elseif ($showingConfirmation)
                    <x-confirms-password wire:then="confirmTwoFactorAuthentication">
                        <x-button type="button" class="mr-3" wire:loading.attr="disabled">
                            {{ __('Confirmer') }}
                        </x-button>
                    </x-confirms-password>
                @else
                    <x-confirms-password wire:then="showRecoveryCodes">
                        <x-secondary-button class="mr-3">
                            {{ __('Afficher les codes de récupération') }}
                        </x-secondary-button>
                    </x-confirms-password>
                @endif

                @if ($showingConfirmation)
                    <x-confirms-password wire:then="disableTwoFactorAuthentication">
                        <x-secondary-button wire:loading.attr="disabled">
                            {{ __('Annuler') }}
                        </x-secondary-button>
                    </x-confirms-password>
                @else
                    <x-confirms-password wire:then="disableTwoFactorAuthentication">
                        <x-danger-button wire:loading.attr="disabled">
                            {{ __('Désactiver') }}
                        </x-danger-button>
                    </x-confirms-password>
                @endif

            @endif
        </div>
    </x-slot>
</x-action-section>
