<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pricing Plans | YourBrand</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Inter', sans-serif; scroll-behavior: smooth; }
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

    <nav class="bg-white border-b border-gray-100 py-4 px-8 flex justify-between items-center sticky top-0 z-50">
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
            <div class="flex justify-between mt-2 text-xs text-gray-400 font-medium uppercase tracking-wider">
                <span>1 User</span>
                <span>100+ Users</span>
            </div>
        </div>
    </header>

    <main class="max-w-7xl mx-auto px-4 pb-24">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mb-20">
            
            <div class="bg-white p-8 rounded-3xl border border-gray-100 shadow-sm flex flex-col justify-between">
                <div>
                    <h3 class="text-xl font-bold text-gray-900 mb-2">Basic</h3>
                    <p class="text-gray-500 text-sm mb-6">Best for simple use.</p>
                    <div class="text-4xl font-extrabold text-gray-900 mb-8">$0<span class="text-lg text-gray-400 font-medium">/mo</span></div>
                    
                    <h4 class="font-bold text-sm text-gray-900 mb-4 uppercase tracking-tight">Free features include:</h4>
                    <ul class="space-y-4 mb-8">
                        <li class="flex items-start gap-3 text-gray-600 text-sm"><i class="fas fa-check text-green-500 mt-1"></i> <span>Access to essential tools</span></li>
                        <li class="flex items-start gap-3 text-gray-600 text-sm"><i class="fas fa-check text-green-500 mt-1"></i> <span>Limited document processing</span></li>
                        <li class="flex items-start gap-3 text-gray-600 text-sm"><i class="fas fa-check text-green-500 mt-1"></i> <span>Unlimited self-signed eSignatures</span></li>
                    </ul>
                </div>
                <button class="w-full py-4 px-6 rounded-xl border-2 border-[#e5322d] text-[#e5322d] font-bold hover:bg-red-50 transition-all">Start for free</button>
            </div>

            <div class="bg-[#fff9e6] p-8 rounded-3xl border-2 border-[#ffc107] shadow-xl relative flex flex-col justify-between transform scale-105 z-10">
                <div class="absolute -top-4 left-1/2 -translate-x-1/2 bg-[#ffc107] text-gray-900 px-4 py-1 rounded-full text-xs font-bold uppercase tracking-widest">Best for advanced use</div>
                <div>
                    <h3 class="text-xl font-bold text-gray-900 mb-2">Premium</h3>
                    <p class="text-gray-500 text-sm mb-6">Complete toolkit for power users.</p>
                    <div class="mb-8">
                        <span class="text-4xl font-extrabold text-gray-900" id="starter-price">$3</span>
                        <span class="text-lg text-gray-400 font-medium">/mo total</span>
                    </div>
                    
                    <h4 class="font-bold text-sm text-gray-900 mb-4 uppercase tracking-tight">Premium features include:</h4>
                    <ul class="space-y-3 mb-8">
                        <li class="flex items-start gap-3 text-gray-700 text-sm font-medium"><i class="fas fa-check text-green-500 mt-1"></i> <span>Full access to all tools</span></li>
                        <li class="flex items-start gap-3 text-gray-700 text-sm font-medium"><i class="fas fa-check text-green-500 mt-1"></i> <span>Unlimited document processing</span></li>
                        <li class="flex items-start gap-3 text-gray-700 text-sm font-medium"><i class="fas fa-check text-green-500 mt-1"></i> <span>Web, Mobile, and Desktop apps</span></li>
                        <li class="flex items-start gap-3 text-gray-700 text-sm font-medium"><i class="fas fa-check text-green-500 mt-1"></i> <span>Digital Signatures & Workflows</span></li>
                        <li class="flex items-start gap-3 text-gray-700 text-sm font-medium"><i class="fas fa-check text-green-500 mt-1"></i> <span>Custom Branding & Templates</span></li>
                        <li class="flex items-start gap-3 text-gray-700 text-sm font-medium"><i class="fas fa-check text-green-500 mt-1"></i> <span>Priority customer support</span></li>
                    </ul>
                </div>
                <button class="w-full py-4 px-6 rounded-xl bg-[#ffc107] text-gray-900 font-bold hover:bg-[#e0a800] shadow-lg transition-all">Go Premium</button>
            </div>

            <div class="bg-white p-8 rounded-3xl border border-gray-100 shadow-sm flex flex-col justify-between">
                <div>
                    <h3 class="text-xl font-bold text-gray-900 mb-2">Business</h3>
                    <p class="text-gray-500 text-sm mb-6">Best for growing teams.</p>
                    <div class="mb-8">
                        <span class="text-4xl font-extrabold text-gray-900" id="premium-price">$40</span>
                        <span class="text-lg text-gray-400 font-medium">/mo total</span>
                    </div>
                    
                    <h4 class="font-bold text-sm text-gray-900 mb-4 uppercase tracking-tight">What’s included:</h4>
                    <ul class="space-y-4 mb-8">
                        <li class="flex items-start gap-3 text-gray-600 text-sm font-medium"><i class="fas fa-check text-green-500 mt-1"></i> <span>All Premium features</span></li>
                        <li class="flex items-start gap-3 text-gray-600 text-sm font-medium"><i class="fas fa-check text-green-500 mt-1"></i> <span>Custom contracts & Scalability</span></li>
                        <li class="flex items-start gap-3 text-gray-600 text-sm font-medium"><i class="fas fa-check text-green-500 mt-1"></i> <span>Dedicated Account Manager</span></li>
                        <li class="flex items-start gap-3 text-gray-600 text-sm font-medium"><i class="fas fa-check text-green-500 mt-1"></i> <span>Single Sign On (SSO)</span></li>
                        <li class="flex items-start gap-3 text-gray-600 text-sm font-medium"><i class="fas fa-check text-green-500 mt-1"></i> <span>Regional file processing</span></li>
                    </ul>
                </div>
                <button class="w-full py-4 px-6 rounded-xl border-2 border-gray-300 font-bold text-gray-700 hover:bg-gray-50 transition-all">Contact Sales</button>
            </div>
        </div>

        <section class="mt-20">
            <h2 class="text-3xl font-extrabold text-center text-gray-900 mb-12">Compare the plans <i class="fas fa-chevron-up text-sm ml-2"></i></h2>
            
            <div class="overflow-hidden rounded-2xl border border-gray-200 bg-white shadow-sm">
                <table class="w-full text-left border-collapse">
                    <thead>
                        <tr class="border-b border-gray-100">
                            <th class="p-6 w-1/4 bg-white sticky left-0 z-10"></th>
                            <th class="p-6 w-1/4 text-center">
                                <i class="fas fa-gift text-[#e5322d] text-2xl mb-2"></i>
                                <div class="text-lg font-bold">Basic</div>
                            </th>
                            <th class="p-6 w-1/4 text-center bg-slate-50/50">
                                <i class="fas fa-crown text-[#ffc107] text-2xl mb-2"></i>
                                <div class="text-lg font-bold">Premium</div>
                            </th>
                            <th class="p-6 w-1/4 text-center">
                                <i class="fas fa-users text-gray-800 text-2xl mb-2"></i>
                                <div class="text-lg font-bold">Business</div>
                            </th>
                        </tr>
                    </thead>
                    <tbody class="text-sm">
                        <tr class="bg-gray-50/50"><td colspan="4" class="p-4 font-bold text-gray-900 uppercase tracking-widest text-xs pl-6">Features</td></tr>
                        <tr class="border-b border-gray-50">
                            <td class="p-4 pl-6 font-semibold text-gray-700">Tools</td>
                            <td class="p-4 text-center text-gray-500">Limited tools</td>
                            <td class="p-4 text-center text-gray-900 font-medium bg-slate-50/50">All tools included</td>
                            <td class="p-4 text-center text-gray-900 font-medium">All tools included</td>
                        </tr>
                        <tr class="border-b border-gray-50">
                            <td class="p-4 pl-6 font-semibold text-gray-700">Batch processing</td>
                            <td class="p-4 text-center text-gray-500">Limited</td>
                            <td class="p-4 text-center text-gray-900 font-medium bg-slate-50/50">Unlimited <i class="far fa-info-circle ml-1 opacity-50"></i></td>
                            <td class="p-4 text-center text-gray-900 font-medium">Unlimited <i class="far fa-info-circle ml-1 opacity-50"></i></td>
                        </tr>
                        <tr class="border-b border-gray-50">
                            <td class="p-4 pl-6 font-semibold text-gray-700">Volume discount</td>
                            <td class="p-4 text-center text-gray-300">—</td>
                            <td class="p-4 text-center text-green-500 bg-slate-50/50"><i class="fas fa-check"></i></td>
                            <td class="p-4 text-center text-green-500"><i class="fas fa-check"></i></td>
                        </tr>
                        <tr class="border-b border-gray-50">
                            <td class="p-4 pl-6 font-semibold text-gray-700">Custom branding</td>
                            <td class="p-4 text-center text-gray-300">—</td>
                            <td class="p-4 text-center text-green-500 bg-slate-50/50"><i class="fas fa-check"></i></td>
                            <td class="p-4 text-center text-green-500"><i class="fas fa-check"></i></td>
                        </tr>

                        <tr class="bg-gray-50/50"><td colspan="4" class="p-4 font-bold text-gray-900 uppercase tracking-widest text-xs pl-6">Applications</td></tr>
                        <tr class="border-b border-gray-50">
                            <td class="p-4 pl-6 font-semibold text-gray-700">Web</td>
                            <td class="p-4 text-center text-green-500"><i class="fas fa-check"></i></td>
                            <td class="p-4 text-center text-green-500 bg-slate-50/50"><i class="fas fa-check"></i></td>
                            <td class="p-4 text-center text-green-500"><i class="fas fa-check"></i></td>
                        </tr>
                        <tr class="border-b border-gray-50">
                            <td class="p-4 pl-6 font-semibold text-gray-700">Desktop</td>
                            <td class="p-4 text-center text-gray-300">—</td>
                            <td class="p-4 text-center text-green-500 bg-slate-50/50"><i class="fas fa-check"></i></td>
                            <td class="p-4 text-center text-green-500"><i class="fas fa-check"></i></td>
                        </tr>
                        <tr class="border-b border-gray-50">
                            <td class="p-4 pl-6 font-semibold text-gray-700">Mobile</td>
                            <td class="p-4 text-center text-gray-300">—</td>
                            <td class="p-4 text-center text-green-500 bg-slate-50/50"><i class="fas fa-check"></i></td>
                            <td class="p-4 text-center text-green-500"><i class="fas fa-check"></i></td>
                        </tr>

                        <tr class="bg-gray-50/50"><td colspan="4" class="p-4 font-bold text-gray-900 uppercase tracking-widest text-xs pl-6">Security</td></tr>
                        <tr class="border-b border-gray-50">
                            <td class="p-4 pl-6 font-semibold text-gray-700">Secure HTTPs connection</td>
                            <td class="p-4 text-center text-green-500"><i class="fas fa-check"></i></td>
                            <td class="p-4 text-center text-green-500 bg-slate-50/50"><i class="fas fa-check"></i></td>
                            <td class="p-4 text-center text-green-500"><i class="fas fa-check"></i></td>
                        </tr>
                        <tr class="border-b border-gray-50">
                            <td class="p-4 pl-6 font-semibold text-gray-700">ISO27001 certified</td>
                            <td class="p-4 text-center text-green-500"><i class="fas fa-check"></i></td>
                            <td class="p-4 text-center text-green-500 bg-slate-50/50"><i class="fas fa-check"></i></td>
                            <td class="p-4 text-center text-green-500"><i class="fas fa-check"></i></td>
                        </tr>
                        <tr class="border-b border-gray-50">
                            <td class="p-4 pl-6 font-semibold text-gray-700">Single Sign On (SSO)</td>
                            <td class="p-4 text-center text-gray-300">—</td>
                            <td class="p-4 text-center text-gray-300 bg-slate-50/50">—</td>
                            <td class="p-4 text-center text-green-500"><i class="fas fa-check"></i></td>
                        </tr>

                        <tr class="bg-gray-50/50"><td colspan="4" class="p-4 font-bold text-gray-900 uppercase tracking-widest text-xs pl-6">e-Signature</td></tr>
                        <tr class="border-b border-gray-50">
                            <td class="p-4 pl-6 font-semibold text-gray-700">Signature Request (SES)</td>
                            <td class="p-4 text-center text-gray-500">Limited</td>
                            <td class="p-4 text-center text-gray-900 font-medium bg-slate-50/50">Unlimited</td>
                            <td class="p-4 text-center text-gray-900 font-medium">Unlimited</td>
                        </tr>
                        <tr class="border-b border-gray-50">
                            <td class="p-4 pl-6 font-semibold text-gray-700">Advanced eSignature (AES)</td>
                            <td class="p-4 text-center text-gray-300">—</td>
                            <td class="p-4 text-center text-gray-900 font-medium bg-slate-50/50">Starting at 5/month</td>
                            <td class="p-4 text-center text-gray-900 font-medium">Custom</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </section>
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

        updatePrices();
    </script>
</body>
</html>