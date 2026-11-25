<!-- ========================================================== -->
<!-- MEMBERSHIP & PRICING PLANS (Interactive & Transparent)    -->
<!-- ========================================================== -->
<section id="pricing" class="py-20 lg:py-28 bg-[#0a0d14] relative overflow-hidden select-none border-t border-white/[0.08]">
    
    <!-- Giant Subtle Outline Watermark -->
    <div class="bg-watermark top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 text-[15vw] leading-none whitespace-nowrap opacity-25">
        MEMBERSHIP
    </div>

    <div class="max-w-7xl mx-auto px-6 sm:px-10 lg:px-12 relative z-10">
        
        <!-- Header -->
        <div class="text-center max-w-3xl mx-auto mb-14 lg:mb-16">
            <span class="inline-flex items-center gap-2 px-4 py-1.5 rounded-full badge-glow text-xs font-bold uppercase tracking-wider mb-4">
                <i class="fa-solid fa-award text-[#ff5e14]"></i>
                <span>MEMBERSHIP TIERS</span>
            </span>
            <h2 class="font-heading text-3xl sm:text-5xl lg:text-6xl font-black text-white tracking-tight uppercase leading-[1.05] mb-5">
                Choose Your <span class="text-gradient-orange">Training Access</span>
            </h2>
            <p class="text-slate-300 text-sm sm:text-base md:text-lg leading-relaxed">
                Zero signup fees, zero lock-in contracts. Every pass includes digital locker assignment, member app tracking, and biometric onboarding.
            </p>

            <!-- Monthly / Yearly Billing Toggle -->
            <div class="inline-flex items-center gap-2 mt-8 p-1.5 rounded-full bg-[#111726] border border-white/15 shadow-xl">
                <button 
                    type="button" 
                    id="billing-monthly-btn"
                    onclick="switchPricingBillingCycle(false)"
                    class="px-6 py-2 rounded-full text-xs font-black uppercase tracking-wider text-white btn-glow-orange shadow-md transition-all cursor-pointer"
                >
                    Monthly
                </button>
                <button 
                    type="button" 
                    id="billing-yearly-btn"
                    onclick="switchPricingBillingCycle(true)"
                    class="px-6 py-2 rounded-full text-xs font-black uppercase tracking-wider text-slate-400 hover:text-white transition-all cursor-pointer flex items-center gap-2"
                >
                    <span>Yearly</span>
                    <span class="text-[10px] bg-emerald-500/20 text-emerald-400 border border-emerald-500/30 px-2 py-0.5 rounded-full font-bold">SAVE 20%+</span>
                </button>
            </div>
        </div>

        <!-- 3 Pricing Cards Grid -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 items-stretch max-w-6xl mx-auto">
            
            <!-- Plan 1: Basic Plan / Standard Black -->
            <div class="card-vibrant rounded-3xl p-7 sm:p-9 flex flex-col justify-between group">
                <div>
                    <div class="flex items-center justify-between mb-4">
                        <span class="text-xs font-black uppercase tracking-wider text-slate-400">FOUNDATIONAL</span>
                        <span class="text-[10px] font-mono text-slate-400 bg-white/5 px-2.5 py-1 rounded-md border border-white/10 font-bold">TIER 01</span>
                    </div>

                    <h3 class="font-heading text-2xl font-black text-white mb-2 uppercase group-hover:text-[#ff9e58] transition-colors">Standard Black</h3>
                    <p class="text-xs text-slate-300 mb-6 leading-relaxed">Essential lifting access for dedicated athletes during standard training windows.</p>

                    <!-- Price Heading -->
                    <div class="mb-4">
                        <div class="flex items-baseline gap-2">
                            <span 
                                class="font-heading text-5xl font-black text-white price-amount" 
                                data-base-monthly="29" 
                                data-base-yearly="260"
                                data-monthly="$29" 
                                data-yearly="$260"
                            >$29</span>
                            <span class="text-xs text-slate-400 font-medium price-period">/month</span>
                        </div>
                        <div class="text-[11px] text-emerald-400 font-bold mt-1 price-effective-badge hidden">
                            <i class="fa-solid fa-tag mr-1 text-[10px]"></i> Equivalent to <span class="effective-monthly-text">$21.67</span> / month
                        </div>
                    </div>

                    <!-- Yearly vs Monthly Calculation & Discount Breakdown Box -->
                    <div class="pricing-calc-box mb-6 p-3.5 rounded-xl bg-black/40 border border-white/10 text-xs">
                        <div class="calc-monthly-view space-y-1 text-slate-300">
                            <div class="flex items-center justify-between">
                                <span>Billing Cycle:</span>
                                <span class="text-white font-semibold">Monthly Auto-Renewal</span>
                            </div>
                            <div class="flex items-center justify-between text-[11px] text-slate-400">
                                <span>Commitment:</span>
                                <span class="text-emerald-400">Cancel or pause anytime</span>
                            </div>
                        </div>

                        <div class="calc-yearly-view hidden space-y-2">
                            <div class="flex items-center justify-between text-slate-300">
                                <span>Standard 12 Months:</span>
                                <span class="line-through text-slate-500 font-bold calc-regular-price">$348</span>
                            </div>
                            <div class="flex items-center justify-between text-emerald-400 font-bold">
                                <span>Yearly Prepaid Savings:</span>
                                <span>- $88 (Save 25%)</span>
                            </div>
                            <div class="pt-1.5 border-t border-white/10 flex items-center justify-between text-white font-bold">
                                <span>Total Paid Today:</span>
                                <span class="text-emerald-400">$260 / year</span>
                            </div>
                        </div>
                    </div>

                    <!-- Plan Features List -->
                    <div class="space-y-3.5 text-xs text-slate-200 mb-8 border-t border-white/10 pt-6">
                        <div class="text-[11px] font-black uppercase tracking-wider text-slate-400 mb-2">What you get</div>
                        <div class="flex items-center gap-3">
                            <i class="fa-solid fa-circle-check text-emerald-400 text-sm"></i>
                            <span>Standard gym access at regular hours</span>
                        </div>
                        <div class="flex items-center gap-3">
                            <i class="fa-solid fa-circle-check text-emerald-400 text-sm"></i>
                            <span>1 free fitness assessment session</span>
                        </div>
                        <div class="flex items-center gap-3">
                            <i class="fa-solid fa-circle-check text-emerald-400 text-sm"></i>
                            <span>Locker & hot shower facilities</span>
                        </div>
                        <div class="flex items-center gap-3 text-slate-500">
                            <i class="fa-solid fa-circle-xmark text-slate-600 text-sm"></i>
                            <span>No cold plunge or cedar sauna</span>
                        </div>
                    </div>
                </div>

                <button 
                    type="button"
                    onclick="handleGetStarted('Basic Plan', '$29', '$260', 29, 260)"
                    class="w-full py-3.5 rounded-xl bg-white/10 hover:bg-[#ff5e14] border border-white/15 hover:border-transparent text-white font-black text-xs uppercase tracking-wider transition-all duration-300 text-center cursor-pointer shadow-md"
                >
                    Get Started
                </button>
            </div>

            <!-- Plan 2: Pro Plan / Elite Athlete (Highlighted) -->
            <div class="card-vibrant-active rounded-3xl p-7 sm:p-9 flex flex-col justify-between relative transform lg:-translate-y-2 group">
                <div class="absolute -top-3.5 left-1/2 -translate-x-1/2 bg-gradient-to-r from-[#ff7a1a] to-[#ff5e14] text-white text-[11px] font-black uppercase tracking-wider px-4 py-1 rounded-full shadow-lg flex items-center gap-1.5">
                    <i class="fa-solid fa-bolt text-xs"></i>
                    <span>MOST POPULAR</span>
                </div>

                <div>
                    <div class="flex items-center justify-between mb-4 mt-1">
                        <span class="text-xs font-black uppercase tracking-wider text-[#ff9e58]">UNLIMITED ACCESS</span>
                        <span class="text-[10px] font-mono text-[#ff9e58] bg-[#ff5e14]/15 px-2.5 py-1 rounded-md border border-[#ff5e14]/30 font-bold">TIER 02</span>
                    </div>

                    <h3 class="font-heading text-2xl font-black text-white mb-2 uppercase">Pro Plan</h3>
                    <p class="text-xs text-slate-300 mb-6 leading-relaxed">Full 24/7 all-access pass including all training zones, contrast plunge, and sauna.</p>

                    <!-- Price Heading -->
                    <div class="mb-4">
                        <div class="flex items-baseline gap-2">
                            <span 
                                class="font-heading text-5xl font-black text-white price-amount" 
                                data-base-monthly="53" 
                                data-base-yearly="490"
                                data-monthly="$53" 
                                data-yearly="$490"
                            >$53</span>
                            <span class="text-xs text-slate-400 font-medium price-period">/month</span>
                        </div>
                        <div class="text-[11px] text-emerald-400 font-bold mt-1 price-effective-badge hidden">
                            <i class="fa-solid fa-tag mr-1 text-[10px]"></i> Equivalent to <span class="effective-monthly-text">$40.83</span> / month
                        </div>
                    </div>

                    <!-- Yearly vs Monthly Calculation & Discount Breakdown Box -->
                    <div class="pricing-calc-box mb-6 p-3.5 rounded-xl bg-black/40 border border-[#ff5e14]/20 text-xs">
                        <div class="calc-monthly-view space-y-1 text-slate-300">
                            <div class="flex items-center justify-between">
                                <span>Billing Cycle:</span>
                                <span class="text-white font-semibold">Monthly Auto-Renewal</span>
                            </div>
                            <div class="flex items-center justify-between text-[11px] text-slate-400">
                                <span>Commitment:</span>
                                <span class="text-emerald-400">Cancel or pause anytime</span>
                            </div>
                        </div>

                        <div class="calc-yearly-view hidden space-y-2">
                            <div class="flex items-center justify-between text-slate-300">
                                <span>Standard 12 Months:</span>
                                <span class="line-through text-slate-500 font-bold calc-regular-price">$636</span>
                            </div>
                            <div class="flex items-center justify-between text-emerald-400 font-bold">
                                <span>Yearly Prepaid Savings:</span>
                                <span>- $146 (Save 23%)</span>
                            </div>
                            <div class="pt-1.5 border-t border-white/10 flex items-center justify-between text-white font-bold">
                                <span>Total Paid Today:</span>
                                <span class="text-emerald-400">$490 / year</span>
                            </div>
                        </div>
                    </div>

                    <!-- Plan Features List -->
                    <div class="space-y-3.5 text-xs text-slate-200 mb-8 border-t border-white/10 pt-6">
                        <div class="text-[11px] font-black uppercase tracking-wider text-[#ff9e58] mb-2">What you get</div>
                        <div class="flex items-center gap-3">
                            <i class="fa-solid fa-circle-check text-emerald-400 text-sm"></i>
                            <strong class="text-white">Unlimited 24/7 gym access</strong>
                        </div>
                        <div class="flex items-center gap-3">
                            <i class="fa-solid fa-circle-check text-emerald-400 text-sm"></i>
                            <span>Access to all HIIT & group classes</span>
                        </div>
                        <div class="flex items-center gap-3">
                            <i class="fa-solid fa-circle-check text-emerald-400 text-sm"></i>
                            <span>Personalized nutrition guide</span>
                        </div>
                        <div class="flex items-center gap-3">
                            <i class="fa-solid fa-circle-check text-emerald-400 text-sm"></i>
                            <span>Free monthly guest pass</span>
                        </div>
                    </div>
                </div>

                <button 
                    type="button"
                    onclick="handleGetStarted('Pro Plan', '$53', '$490', 53, 490)"
                    class="w-full py-4 rounded-xl btn-glow-orange text-white font-black text-xs uppercase tracking-wider transition-all duration-300 text-center cursor-pointer shadow-lg"
                >
                    Get Started
                </button>
            </div>

            <!-- Plan 3: Elite Membership / Founding VIP -->
            <div class="card-vibrant rounded-3xl p-7 sm:p-9 flex flex-col justify-between group">
                <div>
                    <div class="flex items-center justify-between mb-4">
                        <span class="text-xs font-black uppercase tracking-wider text-cyan-400">EXECUTIVE</span>
                        <span class="text-[10px] font-mono text-cyan-400 bg-cyan-500/10 px-2.5 py-1 rounded-md border border-cyan-500/20 font-bold">TIER 03</span>
                    </div>

                    <h3 class="font-heading text-2xl font-black text-white mb-2 uppercase group-hover:text-cyan-400 transition-colors">Elite Membership</h3>
                    <p class="text-xs text-slate-300 mb-6 leading-relaxed">Dedicated personal coach, daily private recovery suite, and quarterly DEXA scans.</p>

                    <!-- Price Heading -->
                    <div class="mb-4">
                        <div class="flex items-baseline gap-2">
                            <span 
                                class="font-heading text-5xl font-black text-white price-amount" 
                                data-base-monthly="99" 
                                data-base-yearly="890"
                                data-monthly="$99" 
                                data-yearly="$890"
                            >$99</span>
                            <span class="text-xs text-slate-400 font-medium price-period">/month</span>
                        </div>
                        <div class="text-[11px] text-emerald-400 font-bold mt-1 price-effective-badge hidden">
                            <i class="fa-solid fa-tag mr-1 text-[10px]"></i> Equivalent to <span class="effective-monthly-text">$74.17</span> / month
                        </div>
                    </div>

                    <!-- Yearly vs Monthly Calculation & Discount Breakdown Box -->
                    <div class="pricing-calc-box mb-6 p-3.5 rounded-xl bg-black/40 border border-white/10 text-xs">
                        <div class="calc-monthly-view space-y-1 text-slate-300">
                            <div class="flex items-center justify-between">
                                <span>Billing Cycle:</span>
                                <span class="text-white font-semibold">Monthly Auto-Renewal</span>
                            </div>
                            <div class="flex items-center justify-between text-[11px] text-slate-400">
                                <span>Commitment:</span>
                                <span class="text-emerald-400">Cancel or pause anytime</span>
                            </div>
                        </div>

                        <div class="calc-yearly-view hidden space-y-2">
                            <div class="flex items-center justify-between text-slate-300">
                                <span>Standard 12 Months:</span>
                                <span class="line-through text-slate-500 font-bold calc-regular-price">$1,188</span>
                            </div>
                            <div class="flex items-center justify-between text-emerald-400 font-bold">
                                <span>Yearly Prepaid Savings:</span>
                                <span>- $298 (Save 25%)</span>
                            </div>
                            <div class="pt-1.5 border-t border-white/10 flex items-center justify-between text-white font-bold">
                                <span>Total Paid Today:</span>
                                <span class="text-emerald-400">$890 / year</span>
                            </div>
                        </div>
                    </div>

                    <!-- Plan Features List -->
                    <div class="space-y-3.5 text-xs text-slate-200 mb-8 border-t border-white/10 pt-6">
                        <div class="text-[11px] font-black uppercase tracking-wider text-cyan-400 mb-2">What you get</div>
                        <div class="flex items-center gap-3">
                            <i class="fa-solid fa-circle-check text-emerald-400 text-sm"></i>
                            <strong class="text-white">Everything in Pro Plan</strong>
                        </div>
                        <div class="flex items-center gap-3">
                            <i class="fa-solid fa-circle-check text-emerald-400 text-sm"></i>
                            <span>1-on-1 dedicated coach sessions</span>
                        </div>
                        <div class="flex items-center gap-3">
                            <i class="fa-solid fa-circle-check text-emerald-400 text-sm"></i>
                            <span>Sauna & hydrotherapy lounge access</span>
                        </div>
                        <div class="flex items-center gap-3">
                            <i class="fa-solid fa-circle-check text-emerald-400 text-sm"></i>
                            <span>Custom biomarker & body fat tracking</span>
                        </div>
                    </div>
                </div>

                <button 
                    type="button"
                    onclick="handleGetStarted('Elite Membership', '$99', '$890', 99, 890)"
                    class="w-full py-3.5 rounded-xl bg-white/10 hover:bg-cyan-500 border border-white/15 hover:border-transparent text-white font-black text-xs uppercase tracking-wider transition-all duration-300 text-center cursor-pointer shadow-md"
                >
                    Get Started
                </button>
            </div>
        </div>

        <!-- Footnote Guarantee -->
        <div class="mt-14 text-center text-xs text-slate-400 flex flex-wrap items-center justify-center gap-6">
            <span class="flex items-center gap-1.5">
                <i class="fa-solid fa-shield-halved text-emerald-400"></i>
                <span>14-Day 100% Money-Back Guarantee</span>
            </span>
            <span class="flex items-center gap-1.5">
                <i class="fa-solid fa-snowflake text-cyan-400"></i>
                <span>Free 60-Day Travel Freeze</span>
            </span>
            <span class="flex items-center gap-1.5">
                <i class="fa-solid fa-ban text-[#ff5e14]"></i>
                <span>No Cancellation Penalties</span>
            </span>
        </div>
    </div>
</section>

<!-- Guest Get Started Modal -->
<div id="guest-getstarted-modal" class="fixed inset-0 z-50 bg-black/85 backdrop-blur-md hidden items-center justify-center p-3 sm:p-4">
    <div class="bg-[#0f1422] border border-white/15 rounded-3xl max-w-md w-full p-6 sm:p-7 shadow-2xl relative">
        <button 
            type="button" 
            onclick="closeGuestGetStartedModal()" 
            class="absolute top-5 right-5 text-slate-400 hover:text-white text-lg cursor-pointer"
        >
            <i class="fa-solid fa-xmark"></i>
        </button>

        <div class="text-center mb-6">
            <div class="w-14 h-14 rounded-2xl bg-gradient-to-br from-[#ff7a1a] to-[#ff5e14] text-white flex items-center justify-center text-2xl mx-auto mb-3 shadow-lg shadow-[#ff5e14]/30">
                <i class="fa-solid fa-id-badge"></i>
            </div>
            <h3 class="font-heading text-xl sm:text-2xl font-black text-white uppercase">Join With Selected Plan</h3>
            <p class="text-xs text-slate-300 mt-1">
                Selected: <span id="modal-plan-title" class="text-white font-bold">Pro Plan</span>
            </p>
            <div id="modal-plan-price-label" class="text-sm font-bold text-[#ff9e58] mt-1">
                $53 (Monthly Auto-Renewal)
            </div>
        </div>

        <div class="space-y-3">
            <a 
                id="btn-register-with-plan"
                href="{{ route('register') }}"
                class="w-full py-3.5 px-4 rounded-xl btn-glow-orange text-white font-black text-xs uppercase tracking-wider flex items-center justify-center gap-2 shadow-lg"
            >
                <i class="fa-solid fa-user-plus"></i>
                <span>Create Account & Continue</span>
            </a>

            <button 
                type="button"
                id="btn-demo-subscribe"
                onclick="triggerDemoLoginAndSubscribe()"
                class="w-full py-3.5 px-4 rounded-xl bg-white/10 hover:bg-white/15 border border-white/15 text-white font-bold text-xs uppercase tracking-wider flex items-center justify-center gap-2 transition-all cursor-pointer"
            >
                <i class="fa-solid fa-bolt text-amber-400"></i>
                <span>Instant 1-Click Demo Login</span>
            </button>
        </div>

        <div class="mt-5 text-center">
            <p class="text-xs text-slate-400">
                Already have an account? 
                <a href="{{ route('login') }}" class="text-[#ff9e58] hover:underline font-bold">Sign In</a>
            </p>
        </div>
    </div>
</div>

<!-- Dynamic Toggle & Modal Logic -->
<script>
let isYearlyPricing = false;
let currentChosenPlan = 'Pro Plan';
let currentChosenCycle = 'monthly';
let currentChosenPrice = '$53';

function switchPricingBillingCycle(yearly) {
    isYearlyPricing = yearly;
    const monthlyBtn = document.getElementById('billing-monthly-btn');
    const yearlyBtn = document.getElementById('billing-yearly-btn');
    const priceAmounts = document.querySelectorAll('.price-amount');
    const pricePeriods = document.querySelectorAll('.price-period');
    const effectiveBadges = document.querySelectorAll('.price-effective-badge');
    const calcMonthlyViews = document.querySelectorAll('.calc-monthly-view');
    const calcYearlyViews = document.querySelectorAll('.calc-yearly-view');

    if (yearly) {
        monthlyBtn.className = "px-6 py-2 rounded-full text-xs font-black uppercase tracking-wider text-slate-400 hover:text-white transition-all cursor-pointer";
        yearlyBtn.className = "px-6 py-2 rounded-full text-xs font-black uppercase tracking-wider text-white btn-glow-orange shadow-md transition-all cursor-pointer flex items-center gap-2";

        priceAmounts.forEach(el => el.textContent = el.getAttribute('data-yearly'));
        pricePeriods.forEach(el => el.textContent = '/year');
        effectiveBadges.forEach(el => el.classList.remove('hidden'));
        calcMonthlyViews.forEach(el => el.classList.add('hidden'));
        calcYearlyViews.forEach(el => el.classList.remove('hidden'));
    } else {
        monthlyBtn.className = "px-6 py-2 rounded-full text-xs font-black uppercase tracking-wider text-white btn-glow-orange shadow-md transition-all cursor-pointer";
        yearlyBtn.className = "px-6 py-2 rounded-full text-xs font-black uppercase tracking-wider text-slate-400 hover:text-white transition-all cursor-pointer flex items-center gap-2";

        priceAmounts.forEach(el => el.textContent = el.getAttribute('data-monthly'));
        pricePeriods.forEach(el => el.textContent = '/month');
        effectiveBadges.forEach(el => el.classList.add('hidden'));
        calcMonthlyViews.forEach(el => el.classList.remove('hidden'));
        calcYearlyViews.forEach(el => el.classList.add('hidden'));
    }
}

function handleGetStarted(planName, monthlyPrice, yearlyPrice, baseMonthly, baseYearly) {
    currentChosenPlan = planName;
    currentChosenCycle = isYearlyPricing ? 'yearly' : 'monthly';
    currentChosenPrice = isYearlyPricing ? yearlyPrice : monthlyPrice;

    @auth
        if (typeof selectPlanToPay === 'function') {
            if (typeof isModalYearly !== 'undefined' && isModalYearly !== isYearlyPricing && typeof togglePlanModalDuration === 'function') {
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
    if (btn) {
        btn.innerHTML = '<i class="fa-solid fa-spinner fa-spin text-white"></i> <span>Logging in as Demo Member...</span>';
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
