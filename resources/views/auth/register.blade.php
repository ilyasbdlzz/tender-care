<!DOCTYPE html>
<html lang="en">
<head>
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tender Care - Register</title>
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
</head>
<body class="bg-[#F3EEFF] flex justify-center items-center">
    <div class="flex flex-wrap w-full lg:w-9/12 px-5 lg:px-10">
        <!-- Logo Section -->
        <div class="w-2/5 justify-start  lg:justify-start mb-6 m-auto lg:mb-0">
            <img src="{{ asset('admin/dist/img/Logo2.png') }}" alt="LUMIN Logo" class="w-full shadow-sm">
        </div>
        <!-- Form Section -->
        <div class="w-full lg:w-3/5 px-5 lg:px-10">
            <p class="text-4xl lg:text-6xl font-bold font-dancing text-center text-[#311F3B] pt-5 my-5">Register</p>
            <div class="mt-4">
                <ul class="flex justify-between border-b-2 border-[#F0D7E7]">
                    <li class="px-10 lg:px-20 text-lg lg:text-2xl font-semibold font-nunito border-b-2 border-transparent hover:border-[#492F59] transition-colors duration-300 text-[#492F59] cursor-pointer">
                        <a href="{{ secure_url ('login') }}">Login</a>
                    </li>
                    <li class="px-10 lg:px-20 text-lg lg:text-2xl font-semibold font-nunito border-b-2 border-[#492F59] text-[#492F59] cursor-pointer">
                        Register
                    </li>
                </ul>
            </div>

            <form method="POST" action="{{ secure_url('register') }}" class="mt-6 space-y-5">
                @csrf

                <!-- Username Input -->
                <div class="relative w-full">
                    <i class="fas fa-user absolute left-4 top-1/2 transform -translate-y-1/2 text-gray-500"></i>
                    <input id="name" type="text" name="name" value="{{ old('name') }}" required autofocus autocomplete="name"
                        placeholder="Username" class="w-full px-12 py-3 font-semibold font-nunito text-lg border shadow-md border-gray-300 bg-[#FFFFFF] rounded-3xl focus:outline-none focus:ring-2 focus:ring-[#492F59]">
                    <x-input-error :messages="$errors->get('name')" class="mt-2" />
                </div>

                <!-- Contact Input -->
                <div class="relative w-full mt-4">
                    <i class="fas fa-phone absolute left-4 top-1/2 transform -translate-y-1/2 text-gray-500"></i>
                    <input id="contact" type="text" name="contact" value="{{ old('contact') }}" required
                        placeholder="Nomor Handphone" class="w-full px-12 py-3 font-semibold font-nunito text-lg border shadow-md border-gray-300 bg-[#FFFFFF] rounded-3xl focus:outline-none focus:ring-2 focus:ring-[#492F59]">
                    <x-input-error :messages="$errors->get('contact')" class="mt-2" />
                </div>                


                <!-- Email Input -->
                <div class="relative w-full mt-4">
                    <i class="fas fa-envelope absolute left-4 top-1/2 transform -translate-y-1/2 text-gray-500"></i>
                    <input id="email" type="email" name="email" value="{{ old('email') }}" required autocomplete="username"
                        placeholder="Email" class="w-full px-12 py-3 font-semibold font-nunito text-lg border shadow-md border-gray-300 bg-[#FFFFFF] rounded-3xl focus:outline-none focus:ring-2 focus:ring-[#492F59]">
                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                </div>

                <!-- Password Input -->
                <div class="relative w-full mt-4">
                    <i class="fas fa-lock absolute left-4 top-1/2 transform -translate-y-1/2 text-gray-500"></i>
                    <input id="password" type="password" name="password" required autocomplete="new-password"
                        placeholder="Password" class="w-full px-12 py-3 font-semibold font-nunito text-lg border shadow-md border-gray-300 bg-[#FFFFFF] rounded-3xl focus:outline-none focus:ring-2 focus:ring-[#492F59]">
                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                </div>

                <!-- Confirm Password Input -->
                <div class="relative w-full mt-4">
                    <i class="fas fa-lock absolute left-4 top-1/2 transform -translate-y-1/2 text-gray-500"></i>
                    <input id="password_confirmation" type="password" name="password_confirmation" required autocomplete="new-password"
                        placeholder="Confirm Password" class="w-full px-12 py-3 font-semibold font-nunito text-lg border shadow-md border-gray-300 bg-[#FFFFFF] rounded-3xl focus:outline-none focus:ring-2 focus:ring-[#492F59]">
                    <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                </div>

                <!-- Register Button -->
                <button type="submit" class="w-full bg-[#7342D4] text-white rounded-xl hover:bg-[#8C52FF] px-5 py-3 text-center text-lg my-2 lg:mt-10">
                    Register
                </button>
            </form>
        </div>
    </div>
</body>
</html>
