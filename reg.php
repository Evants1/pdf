<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Your Account | YourBrand</title>
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
                        <svg class="w-8 h-8 text-[#e5322d]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                        </svg>
                    </div>
                    <span class="text-3xl font-bold tracking-tight">YourBrand</span>
                </div>

                <h2 class="text-4xl lg:text-5xl font-extrabold leading-tight mb-8">
                    The fastest way to <br> <span class="text-red-200">manage your workflow.</span>
                </h2>

                <ul class="space-y-6">
                    <li class="flex items-start gap-4">
                        <div class="mt-1 bg-white/20 p-1.5 rounded-full">
                            <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"></path></svg>
                        </div>
                        <div>
                            <p class="font-semibold text-lg">No Credit Card Required</p>
                            <p class="text-red-100 opacity-80">Start for free and upgrade as you grow.</p>
                        </div>
                    </li>
                    <li class="flex items-start gap-4">
                        <div class="mt-1 bg-white/20 p-1.5 rounded-full">
                            <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"></path></svg>
                        </div>
                        <div>
                            <p class="font-semibold text-lg">Bank-level Security</p>
                            <p class="text-red-100 opacity-80">Your documents are safe with 256-bit encryption.</p>
                        </div>
                    </li>
                </ul>
            </div>

            <div class="relative z-10 pt-12 border-t border-white/20">
                <p class="text-sm italic opacity-90">"This tool saves me at least 5 hours every week."</p>
                <p class="mt-2 font-bold">— James R., Product Lead</p>
            </div>
        </div>

        <div class="w-full md:w-1/2 lg:w-7/12 flex items-center justify-center p-8 lg:p-24 bg-white">
            <div class="w-full max-w-md">
                
                <div class="mb-10">
                    <h1 class="text-3xl font-bold text-gray-900 mb-2">Get Started</h1>
                    <p class="text-gray-500 font-medium">Create your account in less than a minute.</p>
                </div>

                <div class="grid grid-cols-2 gap-4 mb-8">
                    <button class="flex items-center justify-center gap-2 border-2 border-gray-100 rounded-xl py-3 px-4 hover:bg-gray-50 transition-all font-semibold text-gray-700">
                        <img src="https://www.svgrepo.com/show/355037/google.svg" class="w-5 h-5" alt="Google"> Google
                    </button>
                    <button class="flex items-center justify-center gap-2 border-2 border-gray-100 rounded-xl py-3 px-4 hover:bg-gray-50 transition-all font-semibold text-gray-700">
                        <i class="fab fa-facebook text-blue-600"></i> Facebook
                    </button>
                </div>

                <div class="relative mb-8 text-center">
                    <div class="absolute inset-0 flex items-center"><div class="w-full border-t border-gray-100"></div></div>
                    <span class="relative bg-white px-4 text-xs font-bold text-gray-400 uppercase tracking-widest">Or use email</span>
                </div>

                <form action="#" class="space-y-5">
                    <div>
                        <label class="block text-sm font-bold text-gray-700 mb-2">Full Name</label>
                        <div class="relative group">
                            <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none text-gray-400 group-focus-within:text-[#e5322d] transition-colors">
                                <i class="fas fa-user text-sm"></i>
                            </div>
                            <input type="text" placeholder="e.g. Alex Rivera" 
                                class="w-full pl-11 pr-4 py-4 rounded-xl border-2 border-gray-100 focus:border-[#e5322d] focus:ring-0 outline-none transition-all placeholder:text-gray-300">
                        </div>
                    </div>

                    <div>
                        <label class="block text-sm font-bold text-gray-700 mb-2">Email Address</label>
                        <div class="relative group">
                            <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none text-gray-400 group-focus-within:text-[#e5322d] transition-colors">
                                <i class="fas fa-envelope text-sm"></i>
                            </div>
                            <input type="email" placeholder="alex@company.com" 
                                class="w-full pl-11 pr-4 py-4 rounded-xl border-2 border-gray-100 focus:border-[#e5322d] focus:ring-0 outline-none transition-all placeholder:text-gray-300">
                        </div>
                    </div>

                    <div>
                        <label class="block text-sm font-bold text-gray-700 mb-2">Password</label>
                        <div class="relative group">
                            <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none text-gray-400 group-focus-within:text-[#e5322d] transition-colors">
                                <i class="fas fa-lock text-sm"></i>
                            </div>
                            <input type="password" placeholder="Minimum 8 characters" 
                                class="w-full pl-11 pr-4 py-4 rounded-xl border-2 border-gray-100 focus:border-[#e5322d] focus:ring-0 outline-none transition-all placeholder:text-gray-300">
                        </div>
                    </div>

                    <button type="submit" class="w-full bg-[#e5322d] hover:bg-red-700 text-white font-extrabold py-4 rounded-xl shadow-lg shadow-red-100 transition-all active:scale-[0.98]">
                        Create Account
                    </button>
                </form>

                <p class="mt-8 text-center text-gray-600 font-medium">
                    Already have an account? <a href="login.html" class="text-[#e5322d] font-bold hover:underline">Log In</a>
                </p>
            </div>
        </div>
    </div>

</body>
</html>