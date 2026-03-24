<!DOCTYPE html>
<html lang="mr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Dashboard - Supay Recharge</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <style>
        body { font-family: 'Outfit', sans-serif; }
        .operator-card input:checked + div {
            border-color: #7c3aed;
            background: #f5f3ff;
            transform: scale(1.05);
            box-shadow: 0 10px 15px -3px rgba(124, 58, 237, 0.2);
        }
        .operator-card div { border-radius: 50%; width: 64px; height: 64px; display: flex; align-items: center; justify-content: center; }
        .glass { background: rgba(255, 255, 255, 0.95); backdrop-filter: blur(15px); border: 1px solid rgba(255, 255, 255, 0.3); }
        .purple-gradient { background: linear-gradient(90deg, #d946ef 0%, #6366f1 100%); }
    </style>
</head>
<body class="bg-[#f0f4f8] min-h-screen py-6 px-4 bg-[url('https://www.transparenttextures.com/patterns/cubes.png')] animate__animated animate__fadeIn">
    <div class="max-w-3xl mx-auto glass p-6 rounded-[2rem] shadow-2xl border-2 border-white/50">
        
        <div class="flex justify-between items-center mb-4">
            <h1 class="text-xl font-black bg-clip-text text-transparent bg-gradient-to-r from-indigo-600 to-purple-600 tracking-tighter italic">SUPAY RECHARGE</h1>
            <div class="flex items-center gap-4">
                <span class="text-[10px] font-bold text-gray-400 uppercase tracking-widest bg-gray-100 px-3 py-1 rounded-full">Member ID: 9876543210</span>
                <form action="/logout" method="POST">
                    @csrf
                    <button type="submit" class="text-xs font-bold text-red-400 hover:text-red-600 transition-all uppercase px-2 py-1">Logout</button>
                </form>
            </div>
        </div>

        <div class="bg-white/50 backdrop-blur-sm p-6 rounded-[1.5rem] border border-gray-100/50">
            <h2 class="text-gray-400 font-extrabold tracking-[0.2em] text-[10px] mb-6 border-b border-gray-100 pb-2 uppercase">Your Prepaid Details</h2>

            <div class="mb-6">
                <p class="text-[10px] font-bold text-gray-500 mb-4 ml-1 uppercase tracking-wider italic text-indigo-500">Select Operator</p>
                <div class="flex flex-wrap md:flex-nowrap justify-between gap-2 items-center px-2">
                    <!-- Airtel -->
                    <label class="operator-card cursor-pointer group text-center flex-1">
                        <input type="radio" name="operator" value="Airtel" class="w-3 h-3 accent-indigo-600 mb-3" checked>
                        <div class="bg-white border border-gray-100 transition-all duration-300 w-12 h-12 mx-auto rounded-full flex items-center justify-center group-hover:bg-indigo-50 overflow-hidden">
                            <img src="{{ asset('brand_images/airtel.jpg') }}" class="w-full h-full object-cover select-none" alt="Airtel">
                        </div>
                        <p class="text-[7px] mt-2 font-black text-gray-400 group-hover:text-indigo-600 uppercase">Airtel</p>
                    </label>
                    <!-- BSNL -->
                    <label class="operator-card cursor-pointer group text-center flex-1">
                        <input type="radio" name="operator" value="BSNL" class="w-3 h-3 accent-indigo-600 mb-3">
                        <div class="bg-white border border-gray-100 transition-all duration-300 w-12 h-12 mx-auto rounded-full flex items-center justify-center group-hover:bg-indigo-50 overflow-hidden">
                            <img src="{{ asset('brand_images/bsnl.webp') }}" class="w-full h-full object-cover select-none" alt="BSNL">
                        </div>
                        <p class="text-[7px] mt-2 font-black text-gray-400 group-hover:text-indigo-600 uppercase">BSNL</p>
                    </label>
                    <!-- BSNL STV -->
                    <label class="operator-card cursor-pointer group text-center flex-1">
                        <input type="radio" name="operator" value="BSNL STV" class="w-3 h-3 accent-indigo-600 mb-3">
                        <div class="bg-white border border-gray-100 transition-all duration-300 w-12 h-12 mx-auto rounded-full flex items-center justify-center group-hover:bg-indigo-50 overflow-hidden">
                            <img src="{{ asset('brand_images/bsnl.webp') }}" class="w-full h-full object-cover filter grayscale select-none" alt="BSNL STV">
                        </div>
                        <p class="text-[7px] mt-2 font-black text-gray-400 group-hover:text-indigo-600 uppercase">BSNL STV</p>
                    </label>
                    <!-- IDEA -->
                    <label class="operator-card cursor-pointer group text-center flex-1">
                        <input type="radio" name="operator" value="Idea" class="w-3 h-3 accent-indigo-600 mb-3">
                        <div class="bg-white border border-gray-100 transition-all duration-300 w-12 h-12 mx-auto rounded-full flex items-center justify-center group-hover:bg-indigo-50 overflow-hidden">
                            <img src="{{ asset('brand_images/idea.jpg') }}" class="w-full h-full object-cover select-none" alt="Idea">
                        </div>
                        <p class="text-[7px] mt-2 font-black text-gray-400 group-hover:text-indigo-600 uppercase">Idea</p>
                    </label>
                    <!-- JIO -->
                    <label class="operator-card cursor-pointer group text-center flex-1">
                        <input type="radio" name="operator" value="Jio" class="w-3 h-3 accent-indigo-600 mb-3">
                        <div class="bg-white border border-gray-100 transition-all duration-300 w-12 h-12 mx-auto rounded-full flex items-center justify-center group-hover:bg-indigo-50 overflow-hidden">
                            <img src="{{ asset('brand_images/jio.jpg') }}" class="w-full h-full object-cover select-none" alt="Jio">
                        </div>
                        <p class="text-[7px] mt-2 font-black text-gray-400 group-hover:text-indigo-600 uppercase">Jio</p>
                    </label>
                    <!-- VODAFONE -->
                    <label class="operator-card cursor-pointer group text-center flex-1">
                        <input type="radio" name="operator" value="Vodafone" class="w-3 h-3 accent-indigo-600 mb-3">
                        <div class="bg-white border border-gray-100 transition-all duration-300 w-12 h-12 mx-auto rounded-full flex items-center justify-center group-hover:bg-indigo-50 overflow-hidden">
                            <img src="{{ asset('brand_images/vadafone.jpg') }}" class="w-full h-full object-cover select-none" alt="Vi">
                        </div>
                        <p class="text-[7px] mt-2 font-black text-gray-400 group-hover:text-indigo-600 uppercase">Vodafone</p>
                    </label>
                </div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <div>
                    <label class="block text-[8px] font-black text-gray-400 mb-1 ml-1 uppercase tracking-widest">Enter Prepaid Mobile Number</label>
                    <input type="text" id="mobile" class="w-full px-5 py-3 rounded-xl bg-white border border-gray-100 focus:border-indigo-400 focus:ring-4 focus:ring-indigo-50 outline-none transition-all duration-300 text-sm font-bold text-gray-700" placeholder="Mobile Number" maxlength="10" inputmode="numeric">
                    <p id="mobileError" class="text-[9px] text-red-500 font-bold mt-1 ml-2 hidden animate__animated animate__headShake"></p>
                </div>

                <div>
                    <label class="block text-[8px] font-black text-gray-400 mb-1 ml-1 uppercase tracking-widest">Enter Recharge Amount</label>
                    <div class="flex gap-2">
                        <input type="number" id="amount" class="w-full px-5 py-3 rounded-xl bg-white border border-gray-100 focus:border-indigo-400 focus:ring-4 focus:ring-indigo-50 outline-none transition-all duration-300 text-sm font-bold text-gray-700" placeholder="Amount">
                        <button class="purple-gradient text-white px-6 py-3 rounded-xl font-black text-xs hover:shadow-lg transition-all transform hover:-translate-y-0.5 active:scale-95 uppercase tracking-wider">Plan</button>
                    </div>
                    <p id="amountError" class="text-[9px] text-red-500 font-bold mt-1 ml-2 hidden animate__animated animate__headShake"></p>
                </div>
            </div>

            <button id="rechargeBtn" class="w-full purple-gradient text-white font-black py-4 rounded-2xl shadow-xl shadow-indigo-100 hover:shadow-indigo-300 transition-all duration-300 transform active:scale-[0.98] text-sm uppercase tracking-[0.2em] mt-8">
                Proceed To Recharge
            </button>

            <div class="flex items-center gap-4 mt-6">
                <div class="h-[1px] bg-gray-100 flex-grow"></div>
                <button id="razorBtn" class="bg-indigo-50 text-indigo-600 font-black px-8 py-2 rounded-full text-[9px] hover:bg-indigo-100 transition-all duration-300 flex items-center gap-2 border border-indigo-100 tracking-widest uppercase">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M10 3a1 1 0 011 1v5h5a1 1 0 110 2h-5v5a1 1 0 11-2 0v-5H4a1 1 0 110-2h5V4a1 1 0 011-1z" clip-rule="evenodd" />
                    </svg>
                    Add Money
                </button>
                <div class="h-[1px] bg-gray-100 flex-grow"></div>
            </div>
        </div>
        
        <div class="mt-6 flex justify-between items-center px-4">
            <span class="text-[8px] font-bold text-gray-300 uppercase tracking-widest italic">Encrypted Secure Portal</span>
    </div>

    <!-- Scripts -->
    <script src="https://checkout.razorpay.com/v1/checkout.js"></script>
    <script>
        const csrfToken = document.querySelector('meta[name="csrf-token"]').content;
        const mobileInput = document.getElementById('mobile');
        const mobileError = document.getElementById('mobileError');
        const amountInput = document.getElementById('amount');
        const amountError = document.getElementById('amountError');

        // Only allow digits in Mobile field
        mobileInput.onkeypress = (e) => { if (isNaN(String.fromCharCode(e.which))) e.preventDefault(); };

        // Runtime Mobile Validation
        mobileInput.oninput = () => {
            const val = mobileInput.value;
            const regex = /^[6-9]\d{9}$/;
            if (val.length > 0 && !regex.test(val)) {
                mobileInput.classList.add('border-red-400', 'bg-red-50');
                mobileError.innerText = val.length < 10 ? 'Please enter 10 digits' : 'Please enter a valid mobile number';
                mobileError.classList.remove('hidden');
            } else {
                mobileInput.classList.remove('border-red-400', 'bg-red-50');
                mobileError.classList.add('hidden');
            }
        };

        // Runtime Amount Validation
        amountInput.oninput = () => {
            if (amountInput.value > 0) {
                amountInput.classList.remove('border-red-400', 'bg-red-50');
                amountError.classList.add('hidden');
            } else {
                amountInput.classList.add('border-red-400', 'bg-red-50');
                amountError.innerText = 'Please enter amount to add';
                amountError.classList.remove('hidden');
            }
        };

        // Recharge API logic
        document.getElementById('rechargeBtn').onclick = async () => {
            const mobile = mobileInput.value;
            const amount = amountInput.value;
            const operator = document.querySelector('input[name="operator"]:checked')?.value;

            // Reset errors
            let hasError = false;
            
            if(!mobile) {
                mobileInput.classList.add('border-red-400', 'bg-red-50');
                mobileError.innerText = 'Mobile number is required';
                mobileError.classList.remove('hidden');
                hasError = true;
            } else if (!/^[6-9]\d{9}$/.test(mobile)) {
                mobileInput.classList.add('border-red-400', 'bg-red-50');
                mobileError.innerText = 'Please enter a valid 10-digit mobile number';
                mobileError.classList.remove('hidden');
                hasError = true;
            }

            if(!amount) {
                amountInput.classList.add('border-red-400', 'bg-red-50');
                amountError.innerText = 'Recharge amount is required';
                amountError.classList.remove('hidden');
                hasError = true;
            }

            if(hasError) return;
            
            if(!operator) {
                Swal.fire({ icon: 'warning', title: 'Operator Required', text: 'Please select a mobile operator first!' });
                return;
            }

            Swal.fire({
                title: 'Processing...',
                html: 'Please wait, your recharge is being processed!',
                allowOutsideClick: false,
                didOpen: () => Swal.showLoading()
            });

            try {
                const response = await fetch('/api/recharge', {
                    method: 'POST',
                    headers: { 'Content-Type': 'application/json', 'X-CSRF-TOKEN': csrfToken },
                    body: JSON.stringify({ mobile, amount, operator })
                });
                
                const data = await response.json();
                let displayContent = '';
                
                try {
                    // Try to parse if it's a JSON string inside the data property
                    const parsedData = typeof data.data === 'string' ? JSON.parse(data.data) : (data.data || data);
                    
                    displayContent = `
                        <div class="text-left space-y-2 mt-2">
                            ${Object.entries(parsedData).map(([key, value]) => `
                                <div class="flex justify-between border-b border-gray-100 pb-1">
                                    <span class="text-[10px] font-bold text-gray-400 uppercase">${key}:</span>
                                    <span class="text-xs font-black text-gray-700">${typeof value === 'object' ? JSON.stringify(value) : value}</span>
                                </div>
                            `).join('')}
                        </div>
                    `;
                } catch (e) {
                    displayContent = `<div class="bg-gray-50 p-4 rounded-xl text-xs font-mono text-gray-600 break-words">${data.data || data.message || JSON.stringify(data)}</div>`;
                }

                const isRealSuccess = data.status === 'success' && !JSON.stringify(data.data).includes('"ERROR":');

                if (isRealSuccess) {
                    mobileInput.value = '';
                    amountInput.value = '';
                    mobileInput.classList.remove('border-red-400', 'bg-red-50');
                    amountInput.classList.remove('border-red-400', 'bg-red-50');
                }

                Swal.fire({
                    title: `<span class="text-xl font-black ${isRealSuccess ? 'text-green-600' : 'text-gray-800'} uppercase tracking-tighter">${isRealSuccess ? 'Recharge Successful!' : 'Transaction Status'}</span>`,
                    html: displayContent,
                    icon: isRealSuccess ? 'success' : 'info',
                    showConfirmButton: true,
                    confirmButtonText: 'Great, Thanks!',
                    confirmButtonColor: isRealSuccess ? '#10b981' : '#6366f1',
                    background: '#ffffff',
                    padding: '2.5rem',
                    customClass: {
                        popup: 'rounded-[2.5rem] shadow-3xl border-2 border-gray-50',
                        confirmButton: 'rounded-2xl px-12 py-4 font-black text-sm tracking-widest uppercase hover:scale-105 transition-transform shadow-lg shadow-indigo-100'
                    }
                });
            } catch (error) {
                Swal.fire('Error', 'Server is down, please try again later.', 'error');
            }
        };

        // Razorpay logic
        document.getElementById('razorBtn').onclick = async () => {
            const amount = amountInput.value;
            if(!amount || amount < 1) {
                // Add validation styles
                amountInput.classList.add('border-red-400', 'bg-red-50', 'animate__animated', 'animate__shakeX');
                amountError.innerText = 'Please Enter Amount to Add';
                amountError.classList.remove('hidden');

                Swal.fire({
                    icon: 'warning',
                    title: 'Amount Required',
                    text: 'Please enter amount to add!',
                    confirmButtonColor: '#7c3aed',
                    customClass: {
                        popup: 'rounded-[2rem]',
                        confirmButton: 'rounded-xl px-8 py-3 font-bold'
                    }
                });
                
                // Remove shake animation after it completes
                setTimeout(() => {
                    amountInput.classList.remove('animate__shakeX');
                }, 1000);
                
                return;
            }

            try {
                const orderRes = await fetch('/api/create-order', {
                    method: 'POST',
                    headers: { 'Content-Type': 'application/json', 'X-CSRF-TOKEN': csrfToken },
                    body: JSON.stringify({ amount })
                });
                const order = await orderRes.json();

                const options = {
                    "key": "{{ env('RAZORPAY_KEY') }}",
                    "amount": order.amount,
                    "currency": "INR",
                    "name": "Supay Recharge",
                    "description": "Wallet Recharge",
                    "order_id": order.id,
                    "handler": async function (response) {
                        const verify = await fetch('/api/verify-payment', {
                            method: 'POST',
                            headers: { 'Content-Type': 'application/json', 'X-CSRF-TOKEN': csrfToken },
                            body: JSON.stringify(response)
                        });
                        const result = await verify.json();
                        
                        if(result.status === 'success') {
                            amountInput.value = ''; // Reset amount field
                            amountInput.classList.remove('border-red-400', 'bg-red-50');
                            amountError.classList.add('hidden');
                        }

                        Swal.fire({
                            title: `<span class="text-xl font-black ${result.status === 'success' ? 'text-green-600' : 'text-red-600'} uppercase tracking-tighter">${result.status === 'success' ? 'Payment Verified!' : 'Payment Failed!'}</span>`,
                            text: result.message,
                            icon: result.status === 'success' ? 'success' : 'error',
                            confirmButtonText: result.status === 'success' ? 'Perfect, Thanks!' : 'Try Again',
                            confirmButtonColor: result.status === 'success' ? '#10b981' : '#ef4444',
                            background: '#ffffff',
                            padding: '2.5rem',
                            customClass: {
                                popup: 'rounded-[2.5rem] shadow-3xl border-2 border-gray-50',
                                confirmButton: 'rounded-2xl px-12 py-4 font-black text-sm tracking-widest uppercase hover:scale-105 transition-transform shadow-lg shadow-indigo-100'
                            }
                        });
                    },
                    "theme": { "color": "#7c3aed" }
                };
                const rzp = new Razorpay(options);
                rzp.open();
            } catch (e) {
                Swal.fire('Error', 'An error occurred while starting the payment process.', 'error');
            }
        };
    </script>
</body>
</html>