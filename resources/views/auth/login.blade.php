<x-guest-layout>

    <form method="POST" action="{{ secure_url ('login') }}">
        @csrf
                <!-- Header -->
                <p class="text-4xl font-bold text-center text-[#311F3B] font-dancing">Login</p>
                <div class="mt-4 text-center">
                    <ul class="flex justify-between border-b-2 border-[#F0D7E7]">
                        <li class="px-10 text-lg w-1/2 font-semibold font-nunito border-b-2 border-[#492F59] text-[#492F59] cursor-pointer ">
                            Login
                        </li>
                        <li class="px-10 text-lg w-1/2 font-semibold font-nunito border-b-2 border-transparent hover:border-[#492F59] transition-colors duration-300 text-[#492F59] cursor-pointer">
                            <a href="{{ route('register') }}">Register</a>
                        </li>
                    </ul>
                </div>

                <!-- Form Fields -->
                <div class="mt-6 space-y-5">
                    <!-- Email Address -->
                    <div class="relative">
                        <i class="fas fa-envelope absolute left-4 top-1/2 transform -translate-y-1/2 text-gray-500"></i>
                        <x-text-input id="email" name="email" type="email" :value="old('email')" required autofocus 
                            placeholder="Email" class="w-full px-12 py-3 font-nunito text-lg border shadow-md border-gray-300 bg-[#D7E2EE] rounded-3xl focus:outline-none focus:ring-2 focus:ring-[#492F59]" />
                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                    </div>

                    <!-- Password -->
                    <div class="relative">
                        <i class="fas fa-lock absolute left-4 top-1/2 transform -translate-y-1/2 text-gray-500"></i>
                        <x-text-input id="password" name="password" type="password" required autocomplete="current-password"
                            placeholder="Password" class="w-full px-12 py-3 font-nunito text-lg border shadow-md border-gray-300 bg-[#D7E2EE] rounded-3xl focus:outline-none focus:ring-2 focus:ring-[#492F59]" />
                        <x-input-error :messages="$errors->get('password')" class="mt-2" />
                    </div>

                    <!-- Remember Me -->
                    <div class="block mt-4">
                        <label for="remember_me" class="inline-flex items-center">
                            <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">
                            <span class="ms-2 text-sm text-gray-600 font-nunito">{{ __('Remember me') }}</span>
                        </label>
                    </div>

                    <!-- Forgot Password & Login Button -->
                    <div class="flex flex-col items-center justify-between space-y-4 mt-6">
                        @if (Route::has('password.request'))
                            <a href="{{ route('password.request') }}" class="text-[#623E76] font-nunito font-bold text-sm hover:underline">
                                {{ __('Forgot your password?') }}
                            </a>
                        @endif

                        <button type="submit" class="w-full bg-[#7342D4] text-white rounded-xl hover:bg-[#8C52FF] px-5 py-3 text-center text-lg">
                            {{ __('Log in') }}
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </form>
</x-guest-layout>
