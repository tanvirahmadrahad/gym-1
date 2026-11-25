<section id="pricing" class="py-20 lg:py-28 bg-[#0a0d13] relative overflow-hidden">
    <!-- Subtle Ambient Glow -->
    <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[600px] h-[350px] bg-[#e2ff38]/5 rounded-full blur-[140px] pointer-events-none"></div>

    <div class="max-w-7xl mx-auto px-4 sm:px-8 relative z-10">
        <!-- Header -->
        <div class="text-center max-w-2xl mx-auto mb-10">
            <h2 class="font-heading text-3xl sm:text-4xl lg:text-5xl font-bold text-white tracking-tight leading-tight mb-4">
                Our Pricing Plans
            </h2>
            <p class="text-gray-400 text-sm sm:text-base leading-relaxed">
                Discover our pricing plans, choose your perfect match and start your journey today.
            </p>

            <!-- Monthly / Yearly Billing Toggle -->
            <div class="flex items-center justify-center gap-3 mt-8">
                <span id="label-monthly" class="text-xs font-semibold uppercase tracking-wider text-[#e2ff38] transition-colors">Monthly</span>
                <button 
                    id="pricing-toggle" 
                    type="button" 
                    class="w-14 h-7 bg-[#1c2230] rounded-full p-1 relative transition-colors border border-white/10 focus:outline-none cursor-pointer"
                    aria-label="Toggle billing duration"
                >
                    <span id="pricing-toggle-ball" class="block w-5 h-5 rounded-full bg-[#e2ff38] shadow-md transition-transform translate-x-0"></span>
                </button>
                <span id="label-yearly" class="text-xs font-semibold uppercase tracking-wider text-gray-400 transition-colors">
                    Yearly <span class="text-[10px] bg-[#e2ff38]/20 text-[#e2ff38] px-2 py-0.5 rounded-full font-extrabold ml-1">SAVE 20%+</span>
                </span>
            </div>
        </div>

        <!-- 3 Pricing Cards Grid -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 items-stretch max-w-6xl mx-auto">
            <!-- Plan 1: Basic Plan -->
            <div class="bg-[#131722] border border-white/10 rounded-2xl p-8 flex flex-col justify-between card-hover">
                <div>
                    <h3 class="font-heading text-2xl font-bold text-white mb-2">Basic Plan</h3>
                    <p class="text-xs text-gray-400 mb-6">For beginners starting their fitness.</p>

                    <!-- Price Heading -->
                    <div class="mb-4">
                        <div class="flex items-baseline gap-2">
                            <span 
                                class="font-heading text-5xl font-extrabold text-white price-amount" 
                                data-base-monthly="29" 
                                data-base-yearly="260"
                                data-monthly="$29" 
                                data-yearly="$260"
                            >$29</span>
                            <span class="text-xs text-gray-400 font-medium price-period">/month</span>
                        </div>
                        <div class="text-[11px] text-[#e2ff38] font-bold mt-1 price-effective-badge hidden">
                            <i class="fa-solid fa-tag mr-1 text-[10px]"></i> Equivalent to <span class="effective-monthly-text">$21.67</span> / month
                        </div>
                    </div>

                    <!-- Yearly vs Monthly Calculation & Discount Breakdown Box -->
                    <div class="pricing-calc-box mb-6 p-3.5 rounded-xl bg-[#182030] border border-white/5 text-xs">
                        <!-- Monthly Info View -->
                        <div class="calc-monthly-view space-y-1 text-gray-400">
                            <div class="flex items-center justify-between">
                                <span>Billing Cycle:</span>
                                <span class="text-white font-semibold">Monthly Auto-Renewal</span>
                            </div>
                            <div class="flex items-center justify-between text-[11px] text-gray-500">
                                <span>Commitment:</span>
                                <span class="text-emerald-400">Cancel or pause anytime</span>
                            </div>
                        </div>

                        <!-- Yearly Discount Calculation View (Shows total, discount, final) -->
                        <div class="calc-yearly-view hidden space-y-2">
                            <div class="flex items-center justify-between text-gray-400">
                                <span>Standard 12 Months:</span>
                                <span class="line-through text-gray-500 font-bold calc-regular-price" data-base="348">$348.00</span>
                            </div>
                            <div class="flex items-center justify-between text-emerald-400 font-bold">
                                <span>Yearly Discount:</span>
                                <span class="calc-discount-badge" data-base="88">-$88.00 (25% OFF)</span>
                            </div>
                            <div class="flex items-center justify-between pt-1.5 border-t border-white/10 text-white font-bold">
                                <span>Total Payable (Annual):</span>
                                <span class="text-[#e2ff38] font-heading text-sm calc-final-price" data-base="260">$260.00 / yr</span>
                            </div>
                        </div>
                    </div>

                    <!-- Get Started Interactive Button -->
                    <button 
                        type="button" 
                        onclick="handleGetStarted('Basic Plan', '$29', '$260', 29, 260)"
                        class="block w-full text-center py-3.5 px-4 rounded-xl border border-white/20 hover:border-[#e2ff38] hover:bg-[#e2ff38] text-white hover:text-black font-extrabold text-xs uppercase tracking-wider transition-all mb-8 cursor-pointer shadow-md"
                    >
                        Get Started
                    </button>

                    <div class="space-y-3">
                        <span class="text-xs font-bold text-gray-300 uppercase tracking-wider block mb-4">What you get</span>
                        <div class="flex items-center gap-2.5 text-xs text-gray-300">
                            <i class="fa-solid fa-circle-check text-[#e2ff38]"></i>
                            <span>Standard gym access at off-peak hours</span>
                        </div>
                        <div class="flex items-center gap-2.5 text-xs text-gray-300">
                            <i class="fa-solid fa-circle-check text-[#e2ff38]"></i>
                            <span>1 free fitness assessment session</span>
                        </div>
                        <div class="flex items-center gap-2.5 text-xs text-gray-300">
                            <i class="fa-solid fa-circle-check text-[#e2ff38]"></i>
                            <span>Locker & shower facilities</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Plan 2: Pro Plan (Featured Most Popular) -->
            <div class="bg-gradient-to-b from-[#181e2e] to-[#121622] border-2 border-[#e2ff38] rounded-2xl p-8 flex flex-col justify-between card-hover relative shadow-2xl shadow-[#e2ff38]/10 transform lg:-translate-y-2">
                <!-- Most Popular Tag -->
                <div class="absolute -top-3.5 left-1/2 -translate-x-1/2 bg-[#e2ff38] text-black text-[10px] font-black uppercase tracking-widest px-3.5 py-1 rounded-full shadow-md">
                    Most Popular
                </div>

                <div>
                    <h3 class="font-heading text-2xl font-bold text-white mb-2">Pro Plan</h3>
                    <p class="text-xs text-gray-400 mb-6">For regular gym-goers aiming to level up.</p>

                    <!-- Price Heading -->
                    <div class="mb-4">
                        <div class="flex items-baseline gap-2">
                            <span 
                                class="font-heading text-5xl font-extrabold text-[#e2ff38] price-amount" 
                                data-base-monthly="53" 
                                data-base-yearly="490"
                                data-monthly="$53" 
                                data-yearly="$490"
                            >$53</span>
                            <span class="text-xs text-gray-400 font-medium price-period">/month</span>
                        </div>
                        <div class="text-[11px] text-[#e2ff38] font-bold mt-1 price-effective-badge hidden">
                            <i class="fa-solid fa-tag mr-1 text-[10px]"></i> Equivalent to <span class="effective-monthly-text">$40.83</span> / month
                        </div>
                    </div>

                    <!-- Yearly vs Monthly Calculation & Discount Breakdown Box -->
                    <div class="pricing-calc-box mb-6 p-3.5 rounded-xl bg-[#182030] border border-[#e2ff38]/30 text-xs">
                        <!-- Monthly Info View -->
                        <div class="calc-monthly-view space-y-1 text-gray-400">
                            <div class="flex items-center justify-between">
                                <span>Billing Cycle:</span>
                                <span class="text-white font-semibold">Monthly Auto-Renewal</span>
                            </div>
                            <div class="flex items-center justify-between text-[11px] text-gray-500">
                                <span>Access Privileges:</span>
                                <span class="text-[#e2ff38] font-semibold">Full 24/7 Access Included</span>
                            </div>
                        </div>

                        <!-- Yearly Discount Calculation View -->
                        <div class="calc-yearly-view hidden space-y-2">
                            <div class="flex items-center justify-between text-gray-400">
                                <span>Standard 12 Months:</span>
                                <span class="line-through text-gray-500 font-bold calc-regular-price" data-base="636">$636.00</span>
                            </div>
                            <div class="flex items-center justify-between text-emerald-400 font-bold">
                                <span>Yearly Discount:</span>
                                <span class="calc-discount-badge" data-base="146">-$146.00 (23% OFF)</span>
                            </div>
                            <div class="flex items-center justify-between pt-1.5 border-t border-white/10 text-white font-bold">
                                <span>Total Payable (Annual):</span>
                                <span class="text-[#e2ff38] font-heading text-sm calc-final-price" data-base="490">$490.00 / yr</span>
                            </div>
                        </div>
                    </div>

                    <!-- Get Started Interactive Button -->
                    <button 
                        type="button" 
                        onclick="handleGetStarted('Pro Plan', '$53', '$490', 53, 490)"
                        class="block w-full text-center py-3.5 px-4 rounded-xl bg-[#e2ff38] hover:bg-[#d0ee27] text-black font-black text-xs uppercase tracking-wider transition-all mb-8 shadow-lg shadow-[#e2ff38]/25 cursor-pointer"
                    >
                        Get Started
                    </button>

                    <div class="space-y-3">
                        <span class="text-xs font-bold text-white uppercase tracking-wider block mb-4">What you get</span>
                        <div class="flex items-center gap-2.5 text-xs text-white">
                            <i class="fa-solid fa-circle-check text-[#e2ff38]"></i>
                            <span>Unlimited 24/7 gym access</span>
                        </div>
                        <div class="flex items-center gap-2.5 text-xs text-white">
                            <i class="fa-solid fa-circle-check text-[#e2ff38]"></i>
                            <span>Access to all HIIT & group classes</span>
                        </div>
                        <div class="flex items-center gap-2.5 text-xs text-white">
                            <i class="fa-solid fa-circle-check text-[#e2ff38]"></i>
                            <span>Personalized nutrition guide</span>
                        </div>
                        <div class="flex items-center gap-2.5 text-xs text-white">
                            <i class="fa-solid fa-circle-check text-[#e2ff38]"></i>
                            <span>Free monthly guest pass</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Plan 3: Elite Membership -->
            <div class="bg-[#131722] border border-white/10 rounded-2xl p-8 flex flex-col justify-between card-hover">
                <div>
                    <h3 class="font-heading text-2xl font-bold text-white mb-2">Elite Membership</h3>
                    <p class="text-xs text-gray-400 mb-6">All-in access for serious transformations.</p>

                    <!-- Price Heading -->
                    <div class="mb-4">
                        <div class="flex items-baseline gap-2">
                            <span 
                                class="font-heading text-5xl font-extrabold text-white price-amount" 
                                data-base-monthly="99" 
                                data-base-yearly="890"
                                data-monthly="$99" 
                                data-yearly="$890"
                            >$99</span>
                            <span class="text-xs text-gray-400 font-medium price-period">/month</span>
                        </div>
                        <div class="text-[11px] text-[#e2ff38] font-bold mt-1 price-effective-badge hidden">
                            <i class="fa-solid fa-tag mr-1 text-[10px]"></i> Equivalent to <span class="effective-monthly-text">$74.17</span> / month
                        </div>
                    </div>

                    <!-- Yearly vs Monthly Calculation & Discount Breakdown Box -->
                    <div class="pricing-calc-box mb-6 p-3.5 rounded-xl bg-[#182030] border border-white/5 text-xs">
                        <!-- Monthly Info View -->
                        <div class="calc-monthly-view space-y-1 text-gray-400">
                            <div class="flex items-center justify-between">
                                <span>Billing Cycle:</span>
                                <span class="text-white font-semibold">Monthly Auto-Renewal</span>
                            </div>
                            <div class="flex items-center justify-between text-[11px] text-gray-500">
                                <span>VIP Inclusions:</span>
                                <span class="text-emerald-400">Coach Sessions & Sauna Pass</span>
                            </div>
                        </div>

                        <!-- Yearly Discount Calculation View -->
                        <div class="calc-yearly-view hidden space-y-2">
                            <div class="flex items-center justify-between text-gray-400">
                                <span>Standard 12 Months:</span>
                                <span class="line-through text-gray-500 font-bold calc-regular-price" data-base="1188">$1,188.00</span>
                            </div>
                            <div class="flex items-center justify-between text-emerald-400 font-bold">
                                <span>Yearly Discount:</span>
                                <span class="calc-discount-badge" data-base="298">-$298.00 (25% OFF)</span>
                            </div>
                            <div class="flex items-center justify-between pt-1.5 border-t border-white/10 text-white font-bold">
                                <span>Total Payable (Annual):</span>
                                <span class="text-[#e2ff38] font-heading text-sm calc-final-price" data-base="890">$890.00 / yr</span>
                            </div>
                        </div>
                    </div>

                    <!-- Get Started Interactive Button -->
                    <button 
                        type="button" 
                        onclick="handleGetStarted('Elite Membership', '$99', '$890', 99, 890)"
                        class="block w-full text-center py-3.5 px-4 rounded-xl border border-white/20 hover:border-[#e2ff38] hover:bg-[#e2ff38] text-white hover:text-black font-extrabold text-xs uppercase tracking-wider transition-all mb-8 cursor-pointer shadow-md"
                    >
                        Get Started
                    </button>

                    <div class="space-y-3">
                        <span class="text-xs font-bold text-gray-300 uppercase tracking-wider block mb-4">What you get</span>
                        <div class="flex items-center gap-2.5 text-xs text-gray-300">
                            <i class="fa-solid fa-circle-check text-[#e2ff38]"></i>
                            <span>Everything in Pro Plan</span>
                        </div>
                        <div class="flex items-center gap-2.5 text-xs text-gray-300">
                            <i class="fa-solid fa-circle-check text-[#e2ff38]"></i>
                            <span>1-on-1 dedicated coach sessions</span>
                        </div>
                        <div class="flex items-center gap-2.5 text-xs text-gray-300">
                            <i class="fa-solid fa-circle-check text-[#e2ff38]"></i>
                            <span>Sauna & hydrotherapy lounge access</span>
                        </div>
                        <div class="flex items-center gap-2.5 text-xs text-gray-300">
                            <i class="fa-solid fa-circle-check text-[#e2ff38]"></i>
                            <span>Custom biomarker & body fat tracking</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Modal: Guest Get Started Dialog (For non-logged in users) -->
<div id="guest-getstarted-modal" class="fixed inset-0 z-50 bg-black/85 backdrop-blur-md hidden items-center justify-center p-3 sm:p-4">
    <div class="bg-[#0e121a] border border-white/15 rounded-3xl max-w-md w-full p-6 sm:p-8 shadow-2xl relative">
        <button type="button" onclick="closeGuestGetStartedModal()" class="absolute top-5 right-5 text-gray-400 hover:text-white text-lg cursor-pointer w-8 h-8 rounded-full bg-white/5 flex items-center justify-center">
            <i class="fa-solid fa-xmark"></i>
        </button>

        <div class="text-center mb-6">
            <span class="text-[10px] font-extrabold text-[#e2ff38] uppercase tracking-widest bg-[#e2ff38]/10 px-3 py-1 rounded-full border border-[#e2ff38]/30 inline-block mb-2">
                JOIN FITNES TRAINING
            </span>
            <h3 class="font-heading text-2xl font-black text-white">
                Get Started with <span id="modal-plan-title" class="text-[#e2ff38]">Pro Plan</span>
            </h3>
            <p class="text-xs text-gray-400 mt-1">
                Selected: <strong id="modal-plan-price-label" class="text-white">$53.00 / month</strong>
            </p>
        </div>

        <div class="space-y-3">
            <!-- Option 1: Register New Account with this plan -->
            <a 
                id="btn-register-with-plan" 
                href="{{ route('register') }}" 
                class="w-full py-3.5 px-4 rounded-xl bg-[#e2ff38] hover:bg-[#d0ee27] text-black font-extrabold text-xs uppercase tracking-wider transition-all cursor-pointer shadow-lg shadow-[#e2ff38]/20 flex items-center justify-center gap-2 text-center"
            >
                <i class="fa-solid fa-user-plus"></i>
                <span>Create Account & Subscribe</span>
            </a>

            <!-- Option 2: 1-Click Instant Demo Login and open checkout -->
            <button 
                type="button" 
                onclick="triggerDemoLoginAndSubscribe()" 
                id="btn-demo-subscribe"
                class="w-full py-3.5 px-4 rounded-xl bg-white/5 hover:bg-white/10 text-white font-bold text-xs uppercase tracking-wider border border-white/10 hover:border-[#e2ff38]/40 transition-all cursor-pointer flex items-center justify-center gap-2"
            >
                <i class="fa-solid fa-bolt text-[#e2ff38]"></i>
                <span>Instant Demo Login & Test Checkout</span>
            </button>

            <!-- Option 3: Already a member login -->
            <div class="pt-4 border-t border-white/10 text-center text-xs text-gray-400">
                <span>Already have a member portal account?</span>
                <button type="button" onclick="closeGuestGetStartedModal(); openLoginModal();" class="text-[#e2ff38] font-bold hover:underline ml-1 cursor-pointer">
                    Log In Here
                </button>
            </div>
        </div>
    </div>
</div>

<!-- Pricing Toggle & Interactive Logic Script -->
<script>
let isYearly = false;
let currentChosenPlan = 'Pro Plan';
let currentChosenPrice = '$53';
let currentChosenCycle = 'monthly';

document.addEventListener('DOMContentLoaded', () => {
    const toggle = document.getElementById('pricing-toggle');
    const toggleBall = document.getElementById('pricing-toggle-ball');
    const labelMonthly = document.getElementById('label-monthly');
    const labelYearly = document.getElementById('label-yearly');
    const priceAmounts = document.querySelectorAll('.price-amount');
    const pricePeriods = document.querySelectorAll('.price-period');
    const effectiveBadges = document.querySelectorAll('.price-effective-badge');
    const calcMonthlyViews = document.querySelectorAll('.calc-monthly-view');
    const calcYearlyViews = document.querySelectorAll('.calc-yearly-view');

    if (!toggle) return;

    toggle.addEventListener('click', () => {
        isYearly = !isYearly;
        if (isYearly) {
            toggleBall.classList.remove('translate-x-0');
            toggleBall.classList.add('translate-x-7');
            labelMonthly.classList.replace('text-[#e2ff38]', 'text-gray-400');
            labelYearly.classList.replace('text-gray-400', 'text-[#e2ff38]');

            priceAmounts.forEach(el => el.textContent = el.getAttribute('data-yearly'));
            pricePeriods.forEach(el => el.textContent = '/year');
            effectiveBadges.forEach(el => el.classList.remove('hidden'));
            calcMonthlyViews.forEach(el => el.classList.add('hidden'));
            calcYearlyViews.forEach(el => el.classList.remove('hidden'));
        } else {
            toggleBall.classList.remove('translate-x-7');
            toggleBall.classList.add('translate-x-0');
            labelMonthly.classList.replace('text-gray-400', 'text-[#e2ff38]');
            labelYearly.classList.replace('text-[#e2ff38]', 'text-gray-400');

            priceAmounts.forEach(el => el.textContent = el.getAttribute('data-monthly'));
            pricePeriods.forEach(el => el.textContent = '/month');
            effectiveBadges.forEach(el => el.classList.add('hidden'));
            calcMonthlyViews.forEach(el => el.classList.remove('hidden'));
            calcYearlyViews.forEach(el => el.classList.add('hidden'));
        }
    });
});

function handleGetStarted(planName, monthlyPrice, yearlyPrice, baseMonthly, baseYearly) {
    currentChosenPlan = planName;
    currentChosenCycle = isYearly ? 'yearly' : 'monthly';
    currentChosenPrice = isYearly ? yearlyPrice : monthlyPrice;

    @auth
        if (typeof selectPlanToPay === 'function') {
            if (typeof isModalYearly !== 'undefined' && isModalYearly !== isYearly && typeof togglePlanModalDuration === 'function') {
                togglePlanModalDuration();
            }
            selectPlanToPay(planName, monthlyPrice, yearlyPrice);
        } else {
            window.location.href = "{{ route('profile') }}";
        }
    @else
        openGuestGetStartedModal(planName, currentChosenPrice, currentChosenCycle);
    @endauth
}

function openGuestGetStartedModal(planName, price, cycle) {
    const modal = document.getElementById('guest-getstarted-modal');
    const titleEl = document.getElementById('modal-plan-title');
    const priceEl = document.getElementById('modal-plan-price-label');
    const regBtn = document.getElementById('btn-register-with-plan');

    if (titleEl) titleEl.textContent = planName;
    if (priceEl) priceEl.textContent = `${price} (${cycle === 'yearly' ? 'Annual Billing' : 'Monthly Auto-Renewal'})`;
    if (regBtn) {
        regBtn.href = "{{ route('register') }}?plan=" + encodeURIComponent(planName) + "&cycle=" + cycle;
    }

    if (modal) {
        modal.classList.remove('hidden');
        modal.classList.add('flex');
    }
}

function closeGuestGetStartedModal() {
    const modal = document.getElementById('guest-getstarted-modal');
    if (modal) {
        modal.classList.add('hidden');
        modal.classList.remove('flex');
    }
}

async function triggerDemoLoginAndSubscribe() {
    const btn = document.getElementById('btn-demo-subscribe');
    const originalText = btn ? btn.innerHTML : '';
    if (btn) {
        btn.innerHTML = '<i class="fa-solid fa-spinner fa-spin text-[#e2ff38]"></i> <span>Logging in as Demo Member...</span>';
        btn.disabled = true;
    }

    try {
        const formData = new FormData();
        formData.append('_token', '{{ csrf_token() }}');
        formData.append('email', 'demo');
        formData.append('password', 'demo');

        const response = await fetch('{{ route("login.post") }}', {
            method: 'POST',
            headers: {
                'Accept': 'application/json',
                'X-Requested-With': 'XMLHttpRequest'
            },
            body: formData
        });

        const data = await response.json();
        if (response.ok && data.success) {
            closeGuestGetStartedModal();
            window.location.reload();
        } else {
            window.location.href = '{{ route("login.demo") }}';
        }
    } catch (e) {
        window.location.href = '{{ route("login.demo") }}';
    }
}
</script>
