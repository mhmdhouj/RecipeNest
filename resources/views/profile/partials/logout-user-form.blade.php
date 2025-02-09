<section class="space-y-6">
    <header>
        <h2 class="text-lg font-medium text-green-800"> 
            {{ __('Logout') }}
        </h2>

        <p class="mt-1 text-sm text-green-600"> 
            {{ __('Once you log out, you will need to log in again to access your account.') }}
        </p>
    </header>

    <x-primary-button
        x-data=""
        x-on:click.prevent="$dispatch('open-modal', 'confirm-user-logout')"
        class="bg-green-600 hover:bg-green-700 focus:ring-green-500" 
    >{{ __('Logout') }}</x-primary-button>

    <x-modal name="confirm-user-logout" :show="$errors->userLogout->isNotEmpty()" focusable>
        <form method="post" action="{{ route('logout') }}" class="p-6">
            @csrf

            <h2 class="text-lg font-medium text-green-800"> 
                {{ __('Are you sure you want to log out?') }}
            </h2>

            <p class="mt-1 text-sm text-green-600"> 
                {{ __('Once you log out, you will need to log in again to access your account.') }}
            </p>

            <div class="mt-6 flex justify-end">
                <x-secondary-button x-on:click="$dispatch('close')">
                    {{ __('Cancel') }}
                </x-secondary-button>

                <x-primary-button class="ms-3 bg-green-600 hover:bg-green-700 focus:ring-green-500"> 
                    {{ __('Logout') }}
                </x-primary-button>
            </div>
        </form>
    </x-modal>
</section>