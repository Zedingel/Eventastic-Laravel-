<x-guest-layout>
    <div class="container" style="display: flex; justify-content: center; align-items: center; height: 100vh; background-color: black;">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card" style="background-color: #333; color: #fc6203; border-color: #fc6203; width: 600px; padding: 20px;">
                    <div class="card-header" style="background-color: #fc6203; color: black; text-align: center; font-size: 24px;">
                        {{ __('Reset Password') }}
                    </div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('password.store') }}">
                            @csrf

                            <!-- Password Reset Token -->
                            <input type="hidden" name="token" value="{{ $request->route('token') }}">

                            <!-- Email Address -->
                            <div>
                                <x-input-label for="email" :value="__('Email')" />
                                <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email', $request->email)" required autofocus autocomplete="username" style="background-color: black; color: #fc6203; border-color: #fc6203;">
                                </x-text-input>
                                <x-input-error :messages="$errors->get('email')" class="mt-2" />
                            </div>

                            <!-- Password -->
                            <div class="mt-4">
                                <x-input-label for="password" :value="__('Password')" />
                                <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" style="background-color: black; color: #fc6203; border-color: #fc6203;">
                                </x-text-input>
                                <x-input-error :messages="$errors->get('password')" class="mt-2" />
                            </div>

                            <!-- Confirm Password -->
                            <div class="mt-4">
                                <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

                                <x-text-input id="password_confirmation" class="block mt-1 w-full"
                                              type="password"
                                              name="password_confirmation" required autocomplete="new-password" style="background-color: black; color: #fc6203; border-color: #fc6203;">
                                </x-text-input>

                                <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                            </div>

                            <div class="flex items-center justify-end mt-4">
                                <x-primary-button style="background-color: #fc6203; color: black; border-color: #fc6203;">
                                    {{ __('Reset Password') }}
                                </x-primary-button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-guest-layout>
