<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pricing Plans | YourBrand</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Inter', sans-serif; }
        .slider {
            -webkit-appearance: none;
            width: 100%;
            height: 8px;
            border-radius: 5px;
            background: #f1f5f9;
            outline: none;
        }
        .slider::-webkit-slider-thumb {
            -webkit-appearance: none;
            appearance: none;
            width: 24px;
            height: 24px;
            border-radius: 50%;
            background: #e5322d;
            cursor: pointer;
            border: 4px solid white;
            box-shadow: 0 4px 6px -1px rgb(0 0 0 / 0.1);
        }
    </style>
</head>
<body class="bg-slate-50 antialiased">

    <nav class="bg-white border-b border-gray-100 py-4 px-8 flex justify-between items-center">
        <div class="flex items-center gap-2 font-bold text-2xl text-gray-900">
            <div class="bg-[#e5322d] p-1.5 rounded-lg text-white">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path></svg>
            </div>
            YourBrand
        </div>
        <div class="flex gap-4">
            <button class="font-bold text-gray-700">Log In</button>
            <button class="bg-[#e5322d] text-white px-6 py-2 rounded-lg font-bold hover:bg-red-700 transition-all">Sign Up</button>
        </div>
    </nav>

    <header class="py-16 px-4 text-center max-w-4xl mx-auto">
        <h1 class="text-4xl md:text-5xl font-extrabold text-gray-900 mb-6">Simple, Transparent Pricing</h1>
        <p class="text-xl text-gray-500 mb-10">Choose the plan that's right for your team. Scale as you grow.</p>
        
        <div class="flex items-center justify-center gap-4 mb-12">
            <span id="month-label" class="text-sm font-bold text-gray-900">Monthly</span>
            <button id="billing-toggle" class="w-14 h-7 bg-gray-200 rounded-full relative p-1 transition-colors duration-300">
                <div id="toggle-circle" class="bg-white w-5 h-5 rounded-full shadow-md transform transition-transform duration-300"></div>
            </button>
            <span id="year-label" class="text-sm font-bold text-gray-400">Yearly <span class="text-[#e5322d] bg-red-50 px-2 py-1 rounded text-xs ml-1">Save 20%</span></span>
        </div>

        <div class="bg-white p-8 rounded-2xl shadow-sm border border-gray-100 mb-16 max-w-2xl mx-auto">
            <div class="flex justify-between items-center mb-6">
                <span class="text-gray-700 font-bold">Number of Users</span>
                <span class="bg-red-50 text-[#e5322d] px-4 py-1 rounded-full font-extrabold text-lg" id="user-count-display">1 User</span>
            </div>
            <input type="range" min="1" max="100" value="1" class="slider" id="user-slider">
            <div class="flex justify-between mt-2 text-xs text-gray-400 font-medium">
                <span>1 User</span>
                <span>100+ Users</span>
            </div>
        </div>
    </header>

    <main class="max-w-7xl mx-auto px-4 pb-24">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            
            <div class="bg-white p-8 rounded-3xl border border-gray-100 shadow-sm hover:shadow-xl transition-shadow flex flex-col justify-between">
                <div>
                    <h3 class="text-xl font-bold text-gray-900 mb-2">Free</h3>
                    <p class="text-gray-500 text-sm mb-6">Perfect for individuals.</p>
                    <div class="text-4xl font-extrabold text-gray-900 mb-8">$0<span class="text-lg text-gray-400 font-medium">/mo</span></div>
                    
                    <ul class="space-y-4 mb-8">
                        <li class="flex items-center gap-3 text-gray-600 text-sm"><i class="fas fa-check text-green-500"></i> 1 User only</li>
                        <li class="flex items-center gap-3 text-gray-600 text-sm"><i class="fas fa-check text-green-500"></i> Basic PDF tools</li>
                    </ul>
                </div>
                <button class="w-full py-4 px-6 rounded-xl border-2 border-gray-100 font-bold text-gray-700 hover:bg-gray-50 transition-all">Get Started</button>
            </div>

            <div class="bg-white p-8 rounded-3xl border-2 border-[#e5322d] shadow-xl relative flex flex-col justify-between transform scale-105 z-10">
                <div class="absolute -top-4 left-1/2 -translate-x-1/2 bg-[#e5322d] text-white px-4 py-1 rounded-full text-xs font-bold uppercase tracking-widest">Most Popular</div>
                <div>
                    <h3 class="text-xl font-bold text-gray-900 mb-2">Starter</h3>
                    <p class="text-gray-500 text-sm mb-6">Optimized for growing teams.</p>
                    <div class="mb-8">
                        <span class="text-4xl font-extrabold text-gray-900" id="starter-price">$3</span>
                        <span class="text-lg text-gray-400 font-medium">/mo total</span>
                        <p class="text-xs text-[#e5322d] font-bold mt-1">($3 per user)</p>
                    </div>
                    
                    <ul class="space-y-4 mb-8">
                        <li class="flex items-center gap-3 text-gray-600 text-sm font-bold"><i class="fas fa-check text-[#e5322d]"></i> Everything in Free</li>
                        <li class="flex items-center gap-3 text-gray-600 text-sm"><i class="fas fa-check text-[#e5322d]"></i> Batch processing</li>
                    </ul>
                </div>
                <button class="w-full py-4 px-6 rounded-xl bg-[#e5322d] text-white font-bold hover:bg-red-700 shadow-lg shadow-red-200 transition-all">Select Plan</button>
            </div>

            <div class="bg-white p-8 rounded-3xl border border-gray-100 shadow-sm hover:shadow-xl transition-shadow flex flex-col justify-between">
                <div>
                    <h3 class="text-xl font-bold text-gray-900 mb-2">Premium</h3>
                    <p class="text-gray-500 text-sm mb-6">Advanced security for scale.</p>
                    <div class="mb-8">
                        <span class="text-4xl font-extrabold text-gray-900" id="premium-price">$40</span>
                        <span class="text-lg text-gray-400 font-medium">/mo total</span>
                        <p class="text-xs text-blue-600 font-bold mt-1">($40 per user)</p>
                    </div>
                    
                    <ul class="space-y-4 mb-8">
                        <li class="flex items-center gap-3 text-gray-600 text-sm font-bold"><i class="fas fa-check text-blue-500"></i> Everything in Starter</li>
                        <li class="flex items-center gap-3 text-gray-600 text-sm"><i class="fas fa-check text-blue-500"></i> Unlimited Storage</li>
                    </ul>
                </div>
                <button class="w-full py-4 px-6 rounded-xl border-2 border-gray-100 font-bold text-gray-700 hover:bg-gray-50 transition-all">Contact Sales</button>
            </div>
        </div>
    </main>

    <script>
        const slider = document.getElementById('user-slider');
        const userDisplay = document.getElementById('user-count-display');
        const starterPrice = document.getElementById('starter-price');
        const premiumPrice = document.getElementById('premium-price');
        const billingToggle = document.getElementById('billing-toggle');
        const toggleCircle = document.getElementById('toggle-circle');
        const monthLabel = document.getElementById('month-label');
        const yearLabel = document.getElementById('year-label');

        let isYearly = false;

        function updatePrices() {
            const users = slider.value;
            // Pluralization logic: "User" if 1, "Users" if more
            userDisplay.innerText = `${users} ${users == 1 ? 'User' : 'Users'}`;

            let starterBase = users * 3;
            let premiumBase = users * 40;

            if (isYearly) {
                starterBase = starterBase * 0.8;
                premiumBase = premiumBase * 0.8;
            }

            starterPrice.innerText = `$${Math.round(starterBase)}`;
            premiumPrice.innerText = `$${Math.round(premiumBase)}`;
        }

        slider.addEventListener('input', updatePrices);

        billingToggle.addEventListener('click', () => {
            isYearly = !isYearly;
            if (isYearly) {
                toggleCircle.style.transform = 'translateX(28px)';
                billingToggle.classList.replace('bg-gray-200', 'bg-[#e5322d]');
                yearLabel.classList.replace('text-gray-400', 'text-gray-900');
                monthLabel.classList.replace('text-gray-900', 'text-gray-400');
            } else {
                toggleCircle.style.transform = 'translateX(0px)';
                billingToggle.classList.replace('bg-[#e5322d]', 'bg-gray-200');
                monthLabel.classList.replace('text-gray-400', 'text-gray-900');
                yearLabel.classList.replace('text-gray-900', 'text-gray-400');
            }
            updatePrices();
        });

        // Initialize at 1 user on load
        updatePrices();
    </script>
</body>
</html>