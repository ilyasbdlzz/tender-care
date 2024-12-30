<!DOCTYPE html>
<html lang="en">
<head>
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lumin-Login</title>
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
</head>
<body class="bg-[#F3EEFF] flex justify-center items-center min-h-screen">
    <div class="flex flex-wrap w-full lg:w-9/12 px-5 lg:px-10">
                <!-- Logo Section -->
                <div class="w-2/5 flex justify-center lg:justify-start mb-6 lg:mb-0">
                    <img src="{{('../admin/dist/img/logo2.png')}}" alt="LUMIN Logo" class="w-full lg:w-full rounded-full shadow-sm">
                </div>
                <!-- Form Section -->
                <div class="w-full lg:w-3/5 px-5 lg:px-10">
                    <p class="text-4xl lg:text-6xl font-bold font-dancing text-center text-[#311F3B] pt-5">Register</p>
                    <div class="mt-4">
                        <ul class="flex justify-between border-b-2 border-[#F0D7E7]">
                            <li class="px-10 lg:px-20 text-lg lg:text-2xl font-semibold font-nunito border-b-2 border-transparent hover:border-[#492F59] transition-colors duration-300 text-[#492F59] cursor-pointer">
                                Login
                            </li>
                            <li class="px-10 lg:px-20 text-lg lg:text-2xl font-semibold font-nunito border-b-2 border-[#492F59] text-[#492F59] cursor-pointer">
                                Register
                            </li>
                        </ul>
                    </div>
        
                    <form class="mt-6 space-y-5">
                    <!-- Username Input -->
                    <div class="relative w-full">
                        <i class="fas fa-user absolute left-4 top-1/2 transform -translate-y-1/2 text-gray-500"></i>
                        <input type="text" placeholder="Username" class="w-full px-12 py-3 font-semibold font-nunito text-lg border shadow-md border-gray-300 bg-[#D7E2EE] rounded-3xl focus:outline-none focus:ring-2 focus:ring-[#492F59]">
                    </div>
        
                    <!-- Email Input -->
                    <div class="relative w-full mt-4">
                        <i class="fas fa-envelope absolute left-4 top-1/2 transform -translate-y-1/2 text-gray-500"></i>
                        <input type="email" placeholder="Email" class="w-full px-12 py-3 font-semibold font-nunito text-lg border shadow-md border-gray-300 bg-[#D7E2EE] rounded-3xl focus:outline-none focus:ring-2 focus:ring-[#492F59]">
                    </div>
                    <!-- Username Input -->
                    <div class="relative w-full">
                        <i class="fas fa-lock absolute left-4 top-1/2 transform -translate-y-1/2 text-gray-500"></i>
                        <input type="password" placeholder="Password" class="w-full px-12 py-3 font-semibold font-nunito text-lg border shadow-md border-gray-300 bg-[#D7E2EE] rounded-3xl focus:outline-none focus:ring-2 focus:ring-[#492F59]">
                    </div>
        
                    <!-- Password Input -->
                    <div class="relative w-full mt-4">
                        <i class="fas fa-lock absolute left-4 top-1/2 transform -translate-y-1/2 text-gray-500"></i>
                        <input type="password" placeholder="Confirm Password" class="w-full px-12 py-3 font-semibold font-nunito text-lg border shadow-md border-gray-300 bg-[#D7E2EE] rounded-3xl focus:outline-none focus:ring-2 focus:ring-[#492F59]">
                    </div>
        
                        <!-- Login Button -->
                        <button type="submit" class="w-full bg-[#7342D4] text-white rounded-xl hover:bg-[#8C52FF] px-5 py-3 text-center text-lg my-2 lg:mt-10">
                            Register
                        </button>
                    </form>
                </div>




    </div>
</body>
</html>
