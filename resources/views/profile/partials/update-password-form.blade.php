<section>
    <header>
        <h2 class="text-lg font-medium text-gray-900">
            {{ __('Modifica Password') }}
        </h2>

        <p class="mt-1 text-sm text-gray-600">
            {{ __('Assicurati che il tuo account utilizzi una password lunga e casuale per rimanere sicuro') }}
        </p>
    </header>

    <form method="post" action="{{ route('password.update') }}" class="mt-6 space-y-6">
        @csrf
        @method('put')

        <div>
            <label for="">Password attuale</label>
            <x-text-input id="current_password" name="current_password" type="password" class="mt-1 mb-2 p-1 border border-dark-subtle rounded-pill" autocomplete="current-password" />
            <x-input-error :messages="$errors->updatePassword->get('current_password')" class="mt-2" />
        </div>

        <div>
            <label for="">Nuova password</label>
            <x-text-input id="password" name="password" type="password" class="mt-1 p-1 mb-2 border border-dark-subtle rounded-pill" autocomplete="new-password" />
            <x-input-error :messages="$errors->updatePassword->get('password')" class="mt-2" />
        </div>

        <div>
            <label for="">Conferma password</label>
            <x-text-input id="password_confirmation" name="password_confirmation" type="password" class="mt-1 p-1 border border-dark-subtle rounded-pill" autocomplete="new-password" />
            <x-input-error :messages="$errors->updatePassword->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center gap-4">
            <x-primary-button>{{ __('Salva') }}</x-primary-button>

            @if (session('status') === 'password-updated')
                <p
                    x-data="{ show: true }"
                    x-show="show"
                    x-transition
                    x-init="setTimeout(() => show = false, 2000)"
                    class="text-sm text-gray-600 mt-2 fw-bold"
                >{{ __('Modifica salvata') }}</p>
            @endif
        </div>
    </form>
</section>
