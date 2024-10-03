<x-guest-layout>
    <div class="container" style="display: flex; justify-content: center; align-items: center; height: 100vh; background-color: black;">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card" style="background-color: #333; color: #fc6203; border-color: #fc6203; width: 600px; padding: 20px;">
                    <div class="card-header" style="background-color: #fc6203; color: black; text-align: center; font-size: 24px;">
                        {{ __('Forgot Your Password?') }}
                    </div>

                    <div class="card-body">
                        <div class="mb-4 text-sm text-gray-600 dark:text-gray-400">
                            {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
                        </div>

                        <!-- Session Status -->
                        <x-auth-session-status class="mb-4" :status="session('status')" />

                        <form method="POST" action="{{ route('password.email') }}">
                            @csrf

                            <!-- Email Address -->
                            <div>
                                <x-input-label for="email" :value="__('Email')" />
                                <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus style="background-color: black; color: #fc6203; border-color: #fc6203;">
                                </x-text-input>
                                <x-input-error :messages="$errors->get('email')" class="mt-2" />
                            </div>

                            <div class="flex items-center justify-end mt-4">
                                <x-primary-button style="background-color: #fc6203; color: black; border-color: #fc6203;">
                                    {{ __('Email Password Reset Link') }}
                                </x-primary-button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-guest-layout>
