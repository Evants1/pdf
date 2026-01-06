<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | YourBrand</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Inter', sans-serif; }
    </style>
</head>
<body class="bg-white antialiased">

    <div class="flex flex-col md:flex-row min-h-screen w-full">
        
        <div class="hidden md:flex md:w-1/2 lg:w-5/12 bg-[#e5322d] text-white p-12 lg:p-20 flex-col justify-between relative overflow-hidden">
            <div class="absolute top-0 right-0 -mr-20 -mt-20 w-64 h-64 bg-white/10 rounded-full blur-3xl"></div>
            <div class="absolute bottom-0 left-0 -ml-20 -mb-20 w-96 h-96 bg-black/10 rounded-full blur-3xl"></div>

            <div class="relative z-10">
                <div class="flex items-center gap-3 mb-16">
                    <div class="bg-white p-2 rounded-xl shadow-lg">
                        <svg class="w-8 h-8 text-[#e5322d]" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path></svg>
                    </div>
                    <span class="text-3xl font-bold tracking-tight">YourBrand</span>
                </div>

                <h2 class="text-4xl lg:text-5xl font-extrabold leading-tight mb-8">
                    Welcome back! <br> <span class="text-red-200">Glad to see you again.</span>
                </h2>
                <p class="text-red-50 text-xl max-w-sm opacity-90">Log in to access your projects and personalized dashboard.</p>
            </div>

            <div class="relative z-10 pt-12 border-t border-white/20">
                <p class="text-sm font-medium opacity-80">Security Guaranteed &bull; Fast Access &bull; 24/7 Support</p>
            </div>
        </div>

        <div class="w-full md:w-1/2 lg:w-7/12 flex items-center justify-center p-8 lg:p-24 bg-white">
            <div class="w-full max-w-md">
                
                <div class="mb-10 text-center md:text-left">
                    <h1 class="text-3xl font-bold text-gray-900 mb-2">Log In</h1>
                    <p class="text-gray-500 font-medium">Please enter your details to continue.</p>
                </div>

                <div class="grid grid-cols-2 gap-4 mb-8">
                    <button class="flex items-center justify-center gap-2 border-2 border-gray-100 rounded-xl py-3 px-4 hover:bg-gray-50 transition-all font-semibold text-gray-700">
                        <img src="https://www.svgrepo.com/show/355037/google.svg" class="w-5 h-5"> Google
                    </button>
                    <button class="flex items-center justify-center gap-2 border-2 border-gray-100 rounded-xl py-3 px-4 hover:bg-gray-50 transition-all font-semibold text-gray-700">
                        <i class="fab fa-facebook text-blue-600"></i> Facebook
                    </button>
                </div>

                <div class="relative mb-8 text-center">
                    <div class="absolute inset-0 flex items-center"><div class="w-full border-t border-gray-100"></div></div>
                    <span class="relative bg-white px-4 text-xs font-bold text-gray-400 uppercase tracking-widest">Or login with email</span>
                </div>

                <form action="#" class="space-y-6">
                    <div>
                        <label class="block text-sm font-bold text-gray-700 mb-2">Email Address</label>
                        <div class="relative group">
                            <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none text-gray-400 group-focus-within:text-[#e5322d] transition-colors">
                                <i class="fas fa-envelope text-sm"></i>
                            </div>
                            <input type="email" placeholder="name@company.com" 
                                class="w-full pl-11 pr-4 py-4 rounded-xl border-2 border-gray-100 focus:border-[#e5322d] focus:ring-0 outline-none transition-all">
                        </div>
                    </div>

                    <div>
                        <div class="flex justify-between mb-2">
                            <label class="text-sm font-bold text-gray-700">Password</label>
                            <a href="#" class="text-sm text-[#e5322d] font-bold hover:underline">Forgot password?</a>
                        </div>
                        <div class="relative group">
                            <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none text-gray-400 group-focus-within:text-[#e5322d] transition-colors">
                                <i class="fas fa-lock text-sm"></i>
                            </div>
                            <input type="password" placeholder="••••••••" 
                                class="w-full pl-11 pr-4 py-4 rounded-xl border-2 border-gray-100 focus:border-[#e5322d] focus:ring-0 outline-none transition-all">
                        </div>
                    </div>

                    <div class="flex items-center gap-3">
                        <input type="checkbox" id="rem" class="w-5 h-5 rounded border-gray-300 text-[#e5322d] focus:ring-[#e5322d] accent-[#e5322d]">
                        <label for="rem" class="text-sm text-gray-600 font-bold cursor-pointer">Remember me for 30 days</label>
                    </div>

                    <button type="submit" class="w-full bg-[#e5322d] hover:bg-red-700 text-white font-extrabold py-4 rounded-xl shadow-lg shadow-red-100 transition-all active:scale-[0.98]">
                        Log In
                    </button>
                </form>

                <p class="mt-10 text-center text-gray-600 font-medium">
                    New to YourBrand? <a href="register.html" class="text-[#e5322d] font-bold hover:underline">Join now</a>
                </p>
            </div>
        </div>
    </div>

</body>
</html>