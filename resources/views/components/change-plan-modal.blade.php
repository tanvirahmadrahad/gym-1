<!-- Modal 2: Change Plan & Payment Modal -->
<div id="change-plan-modal" class="fixed inset-0 z-50 bg-black/85 backdrop-blur-md hidden items-center justify-center p-3 sm:p-4">
    <div class="bg-[#0e121a] border border-white/15 rounded-3xl max-w-5xl w-full p-6 sm:p-10 shadow-2xl relative max-h-[92vh] overflow-y-auto">
        <button type="button" onclick="closeChangePlanModal()" class="absolute top-5 right-5 text-gray-400 hover:text-white text-lg cursor-pointer w-9 h-9 rounded-full bg-white/5 flex items-center justify-center">
            <i class="fa-solid fa-xmark"></i>
        </button>

        <!-- STEP 1: Plan Selection Screen -->
        <div id="change-plan-step-select">
            <div class="text-center max-w-xl mx-auto mb-8">
                <span class="text-[10px] font-extrabold text-[#e2ff38] uppercase tracking-widest bg-[#e2ff38]/10 px-3 py-1 rounded-full border border-[#e2ff38]/30 inline-block mb-2">
                    GYM MEMBERSHIP UPGRADE
                </span>
                <h3 class="font-heading text-2xl sm:text-4xl font-extrabold text-white tracking-tight">
                    Choose Your Athletic Plan
                </h3>
                <p class="text-xs sm:text-sm text-gray-400 mt-2">
                    Select the ideal training package for your fitness objectives. Switch or cancel anytime.
                </p>

                <!-- Monthly / Yearly Duration Toggle -->
                <div class="flex items-center justify-center gap-3 mt-6">
                    <span id="plan-modal-monthly-label" class="text-xs font-bold uppercase tracking-wider text-[#e2ff38] transition-colors">Monthly</span>
                    <button 
                        id="plan-modal-toggle" 
                        type="button" 
                        onclick="togglePlanModalDuration()"
                        class="w-14 h-7 bg-[#1c2230] rounded-full p-1 relative transition-colors border border-white/15 focus:outline-none cursor-pointer"
                        aria-label="Toggle duration"
                    >
                        <span id="plan-modal-toggle-ball" class="block w-5 h-5 rounded-full bg-[#e2ff38] shadow-md transition-transform translate-x-0"></span>
                    </button>
                    <span id="plan-modal-yearly-label" class="text-xs font-bold uppercase tracking-wider text-gray-400 transition-colors">
                        Yearly <span class="text-[10px] bg-[#e2ff38]/20 text-[#e2ff38] px-2 py-0.5 rounded-full font-extrabold ml-1">SAVE 20%</span>
                    </span>
                </div>
            </div>

            <!-- 3 Pricing Cards Grid -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 items-stretch">
                <!-- Card 1: Basic Plan -->
                <div class="bg-[#131722] border border-white/10 rounded-2xl p-6 sm:p-7 flex flex-col justify-between hover:border-white/20 transition-all">
                    <div>
                        <h4 class="font-heading text-2xl font-bold text-white mb-1">Basic Plan</h4>
                        <p class="text-xs text-gray-400 mb-6">For beginners starting their fitness.</p>

                        <div class="mb-6">
                            <span class="font-heading text-4xl sm:text-5xl font-black text-white plan-modal-price" data-monthly="$29" data-yearly="$260">$29</span>
                            <span class="text-xs text-gray-400 font-medium plan-modal-period">/month</span>
                        </div>

                        <button 
                            type="button" 
                            onclick="selectPlanToPay('Basic Plan', '$29', '$260')"
                            class="w-full text-center py-3 px-4 rounded-xl border border-white/20 hover:border-[#e2ff38] hover:bg-[#e2ff38] text-white hover:text-black font-extrabold text-xs uppercase tracking-wider transition-all mb-6 cursor-pointer"
                        >
                            Select Basic Plan
                        </button>

                        <div class="space-y-3 pt-2">
                            <span class="text-[10px] font-bold text-gray-400 uppercase tracking-wider block">What you get</span>
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

                <!-- Card 2: Pro Plan (Highlighted Most Popular) -->
                <div class="bg-[#131722] border-2 border-[#e2ff38] rounded-2xl p-6 sm:p-7 flex flex-col justify-between relative shadow-xl shadow-[#e2ff38]/10 transform md:-translate-y-2">
                    <div class="absolute -top-3.5 left-1/2 -translate-x-1/2 bg-[#e2ff38] text-black font-black text-[10px] uppercase tracking-widest px-4 py-1 rounded-full shadow-md">
                        MOST POPULAR
                    </div>

                    <div>
                        <h4 class="font-heading text-2xl font-bold text-white mb-1">Pro Plan</h4>
                        <p class="text-xs text-gray-400 mb-6">For regular gym-goers aiming to level up.</p>

                        <div class="mb-6">
                            <span class="font-heading text-4xl sm:text-5xl font-black text-[#e2ff38] plan-modal-price" data-monthly="$53" data-yearly="$490">$53</span>
                            <span class="text-xs text-gray-400 font-medium plan-modal-period">/month</span>
                        </div>

                        <button 
                            type="button" 
                            onclick="selectPlanToPay('Pro Plan', '$53', '$490')"
                            class="w-full text-center py-3 px-4 rounded-xl bg-[#e2ff38] hover:bg-[#d0ee27] text-black font-extrabold text-xs uppercase tracking-wider transition-all mb-6 cursor-pointer shadow-lg shadow-[#e2ff38]/20"
                        >
                            Select Pro Plan
                        </button>

                        <div class="space-y-3 pt-2">
                            <span class="text-[10px] font-bold text-gray-400 uppercase tracking-wider block">What you get</span>
                            <div class="flex items-center gap-2.5 text-xs text-gray-300">
                                <i class="fa-solid fa-circle-check text-[#e2ff38]"></i>
                                <span>Unlimited 24/7 gym access</span>
                            </div>
                            <div class="flex items-center gap-2.5 text-xs text-gray-300">
                                <i class="fa-solid fa-circle-check text-[#e2ff38]"></i>
                                <span>Access to all HIIT & group classes</span>
                            </div>
                            <div class="flex items-center gap-2.5 text-xs text-gray-300">
                                <i class="fa-solid fa-circle-check text-[#e2ff38]"></i>
                                <span>Personalized nutrition guide</span>
                            </div>
                            <div class="flex items-center gap-2.5 text-xs text-gray-300">
                                <i class="fa-solid fa-circle-check text-[#e2ff38]"></i>
                                <span>Free monthly guest pass</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Card 3: Elite Membership -->
                <div class="bg-[#131722] border border-white/10 rounded-2xl p-6 sm:p-7 flex flex-col justify-between hover:border-white/20 transition-all">
                    <div>
                        <h4 class="font-heading text-2xl font-bold text-white mb-1">Elite Membership</h4>
                        <p class="text-xs text-gray-400 mb-6">All-in access for serious transformations.</p>

                        <div class="mb-6">
                            <span class="font-heading text-4xl sm:text-5xl font-black text-white plan-modal-price" data-monthly="$99" data-yearly="$890">$99</span>
                            <span class="text-xs text-gray-400 font-medium plan-modal-period">/month</span>
                        </div>

                        <button 
                            type="button" 
                            onclick="selectPlanToPay('Elite Membership', '$99', '$890')"
                            class="w-full text-center py-3 px-4 rounded-xl border border-white/20 hover:border-[#e2ff38] hover:bg-[#e2ff38] text-white hover:text-black font-extrabold text-xs uppercase tracking-wider transition-all mb-6 cursor-pointer"
                        >
                            Select Elite Membership
                        </button>

                        <div class="space-y-3 pt-2">
                            <span class="text-[10px] font-bold text-gray-400 uppercase tracking-wider block">What you get</span>
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

        <!-- STEP 2: Checkout & Payment Screen -->
        <div id="change-plan-step-pay" class="hidden">
            <div class="max-w-xl mx-auto">
                <div class="flex items-center justify-between pb-4 border-b border-white/10 mb-6">
                    <button type="button" onclick="backToPlanSelection()" class="text-xs font-bold text-gray-400 hover:text-[#e2ff38] flex items-center gap-1.5 cursor-pointer">
                        <i class="fa-solid fa-arrow-left"></i>
                        <span>Change Selected Plan</span>
                    </button>
                    <span class="text-[10px] font-bold text-emerald-400 uppercase tracking-widest bg-emerald-500/10 px-2.5 py-1 rounded-full border border-emerald-500/20">
                        Secure Checkout
                    </span>
                </div>

                <h3 class="font-heading text-2xl font-black text-white">Review & Complete Payment</h3>
                <p class="text-xs text-gray-400 mt-1 mb-6">Your new plan privileges and turnstile access will activate instantly upon payment.</p>

                <!-- Plan Summary Card -->
                <div class="bg-[#182030] p-5 rounded-2xl border border-white/10 mb-6 space-y-3">
                    <div class="flex items-center justify-between">
                        <div>
                            <span class="text-[10px] font-bold text-gray-400 uppercase tracking-wider block">Selected Package</span>
                            <span id="checkout-plan-name" class="font-heading text-xl font-bold text-white">Pro Plan</span>
                            <span id="checkout-billing-cycle-label" class="text-xs text-[#e2ff38] block mt-0.5">Monthly Billing</span>
                        </div>
                        <div class="text-right">
                            <span class="text-[10px] font-bold text-gray-400 uppercase tracking-wider block">Due Now</span>
                            <span id="checkout-plan-price" class="font-heading text-3xl font-black text-[#e2ff38]">$53.00</span>
                        </div>
                    </div>
                </div>

                <!-- Payment Form -->
                <form id="change-plan-form" method="POST" action="{{ route('profile.change-plan') }}" class="space-y-4">
                    @csrf
                    <input type="hidden" name="plan_name" id="form-plan-name" value="Pro Plan">
                    <input type="hidden" name="billing_cycle" id="form-billing-cycle" value="monthly">
                    <input type="hidden" name="plan_price" id="form-plan-price" value="$53.00">
                    <input type="hidden" name="trx_id" id="form-trx-id" value="">

                    <!-- Payment Method Selector -->
                    <div>
                        <label class="block text-xs font-semibold uppercase tracking-wider text-gray-300 mb-2">
                            Select Payment Method
                        </label>
                        <div class="space-y-2">
                            <!-- Option 1: Visa -->
                            <label class="flex items-center justify-between p-3.5 rounded-xl bg-[#182030] border border-white/10 cursor-pointer hover:border-[#e2ff38] transition-colors group">
                                <div class="flex items-center gap-3">
                                    <input type="radio" name="payment_method" value="Visa •••• 4242" checked class="accent-[#e2ff38]" onchange="updatePayButtonLabel('Visa')">
                                    <div class="flex items-center gap-2">
                                        <i class="fa-brands fa-cc-visa text-blue-400 text-lg"></i>
                                        <span class="text-xs font-bold text-white group-hover:text-[#e2ff38] transition-colors">Visa Card (ending •••• 4242)</span>
                                    </div>
                                </div>
                                <span class="text-[10px] font-bold text-emerald-400 bg-emerald-500/10 px-2 py-0.5 rounded border border-emerald-500/20">Instant</span>
                            </label>

                            <!-- Option 2: bKash -->
                            <label class="flex items-center justify-between p-3.5 rounded-xl bg-[#182030] border border-[#e2136e]/40 cursor-pointer hover:border-[#e2136e] transition-colors group">
                                <div class="flex items-center gap-3">
                                    <input type="radio" name="payment_method" value="bKash Mobile Banking" class="accent-[#e2136e]" onchange="updatePayButtonLabel('bKash')">
                                    <div class="flex items-center gap-2">
                                        <div class="w-6 h-6 rounded bg-[#e2136e] flex items-center justify-center text-white text-[10px] font-black">
                                            bK
                                        </div>
                                        <span class="text-xs font-bold text-white group-hover:text-[#e2136e] transition-colors">bKash Instant Gateway</span>
                                    </div>
                                </div>
                                <span class="text-[10px] font-extrabold text-[#e2136e] bg-[#e2136e]/10 px-2 py-0.5 rounded border border-[#e2136e]/30">Instant TrxID</span>
                            </label>

                            <!-- Option 3: Nagad -->
                            <label class="flex items-center justify-between p-3.5 rounded-xl bg-[#182030] border border-[#f7941d]/30 cursor-pointer hover:border-[#f7941d] transition-colors group">
                                <div class="flex items-center gap-3">
                                    <input type="radio" name="payment_method" value="Nagad Mobile Banking" class="accent-[#f7941d]" onchange="updatePayButtonLabel('Nagad')">
                                    <div class="flex items-center gap-2">
                                        <div class="w-6 h-6 rounded bg-[#f7941d] flex items-center justify-center text-white text-[10px] font-black">
                                            ন
                                        </div>
                                        <span class="text-xs font-bold text-white group-hover:text-[#f7941d] transition-colors">Nagad Instant Gateway</span>
                                    </div>
                                </div>
                                <span class="text-[10px] font-bold text-[#f7941d] bg-[#f7941d]/10 px-2 py-0.5 rounded border border-[#f7941d]/30">Instant</span>
                            </label>
                        </div>
                    </div>

                    <!-- Payment Button & Cancel -->
                    <div class="pt-4 flex items-center gap-3">
                        <button 
                            type="button" 
                            onclick="closeChangePlanModal()"
                            class="py-3 px-5 rounded-xl bg-white/5 hover:bg-white/10 text-gray-300 font-bold text-xs uppercase tracking-wider border border-white/10 cursor-pointer"
                        >
                            Cancel
                        </button>
                        <button 
                            type="button" 
                            id="plan-submit-pay-btn"
                            onclick="handlePlanPaymentSubmission()"
                            class="flex-1 bg-[#e2ff38] hover:bg-[#d0ee27] text-black font-extrabold text-xs uppercase tracking-wider py-3 px-6 rounded-xl transition-all cursor-pointer shadow-lg shadow-[#e2ff38]/20 flex items-center justify-center gap-2"
                        >
                            <i class="fa-solid fa-lock text-xs"></i>
                            <span id="plan-submit-pay-text">Confirm & Pay Now</span>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<script>
let isModalYearly = false;
let currentPaymentMethod = 'Visa';

function openChangePlanModal() {
    const modal = document.getElementById('change-plan-modal');
    if (!modal) return;
    const stepSelect = document.getElementById('change-plan-step-select');
    const stepPay = document.getElementById('change-plan-step-pay');
    if (stepSelect) stepSelect.classList.remove('hidden');
    if (stepPay) stepPay.classList.add('hidden');
    modal.classList.remove('hidden');
    modal.classList.add('flex');
}

function closeChangePlanModal() {
    const modal = document.getElementById('change-plan-modal');
    if (!modal) return;
    modal.classList.add('hidden');
    modal.classList.remove('flex');
}

function togglePlanModalDuration() {
    isModalYearly = !isModalYearly;
    const toggleBall = document.getElementById('plan-modal-toggle-ball');
    const labelMonthly = document.getElementById('plan-modal-monthly-label');
    const labelYearly = document.getElementById('plan-modal-yearly-label');
    const prices = document.querySelectorAll('.plan-modal-price');
    const periods = document.querySelectorAll('.plan-modal-period');

    if (isModalYearly) {
        if (toggleBall) {
            toggleBall.classList.remove('translate-x-0');
            toggleBall.classList.add('translate-x-7');
        }
        if (labelMonthly) labelMonthly.classList.replace('text-[#e2ff38]', 'text-gray-400');
        if (labelYearly) labelYearly.classList.replace('text-gray-400', 'text-[#e2ff38]');

        prices.forEach(el => el.textContent = el.getAttribute('data-yearly'));
        periods.forEach(el => el.textContent = '/year');
    } else {
        if (toggleBall) {
            toggleBall.classList.remove('translate-x-7');
            toggleBall.classList.add('translate-x-0');
        }
        if (labelMonthly) labelMonthly.classList.replace('text-gray-400', 'text-[#e2ff38]');
        if (labelYearly) labelYearly.classList.replace('text-[#e2ff38]', 'text-gray-400');

        prices.forEach(el => el.textContent = el.getAttribute('data-monthly'));
        periods.forEach(el => el.textContent = '/month');
    }
}

function selectPlanToPay(planName, monthlyPrice, yearlyPrice) {
    const price = isModalYearly ? yearlyPrice : monthlyPrice;
    const cycle = isModalYearly ? 'yearly' : 'monthly';
    const cycleLabel = isModalYearly ? 'Yearly Billing (Save 20%)' : 'Monthly Auto-Renewal';

    const checkoutName = document.getElementById('checkout-plan-name');
    const checkoutPrice = document.getElementById('checkout-plan-price');
    const checkoutLabel = document.getElementById('checkout-billing-cycle-label');

    if (checkoutName) checkoutName.textContent = planName;
    if (checkoutPrice) checkoutPrice.textContent = price;
    if (checkoutLabel) checkoutLabel.textContent = cycleLabel;

    const formName = document.getElementById('form-plan-name');
    const formCycle = document.getElementById('form-billing-cycle');
    const formPrice = document.getElementById('form-plan-price');

    if (formName) formName.value = planName;
    if (formCycle) formCycle.value = cycle;
    if (formPrice) formPrice.value = price;

    const stepSelect = document.getElementById('change-plan-step-select');
    const stepPay = document.getElementById('change-plan-step-pay');
    if (stepSelect) stepSelect.classList.add('hidden');
    if (stepPay) stepPay.classList.remove('hidden');

    const modal = document.getElementById('change-plan-modal');
    if (modal) {
        modal.classList.remove('hidden');
        modal.classList.add('flex');
    }
}

function backToPlanSelection() {
    const stepSelect = document.getElementById('change-plan-step-select');
    const stepPay = document.getElementById('change-plan-step-pay');
    if (stepPay) stepPay.classList.add('hidden');
    if (stepSelect) stepSelect.classList.remove('hidden');
}

function updatePayButtonLabel(method) {
    currentPaymentMethod = method;
    const btnText = document.getElementById('plan-submit-pay-text');
    const btn = document.getElementById('plan-submit-pay-btn');
    if (!btn || !btnText) return;

    if (method === 'bKash') {
        btnText.textContent = 'Pay via bKash Gateway';
        btn.className = 'flex-1 bg-[#e2136e] hover:bg-[#c90f5f] text-white font-extrabold text-xs uppercase tracking-wider py-3 px-6 rounded-xl transition-all cursor-pointer shadow-lg shadow-[#e2136e]/20 flex items-center justify-center gap-2';
    } else if (method === 'Nagad') {
        btnText.textContent = 'Pay via Nagad Gateway';
        btn.className = 'flex-1 bg-[#f7941d] hover:bg-[#df7e0c] text-white font-extrabold text-xs uppercase tracking-wider py-3 px-6 rounded-xl transition-all cursor-pointer shadow-lg shadow-[#f7941d]/20 flex items-center justify-center gap-2';
    } else {
        btnText.textContent = 'Confirm & Pay Now';
        btn.className = 'flex-1 bg-[#e2ff38] hover:bg-[#d0ee27] text-black font-extrabold text-xs uppercase tracking-wider py-3 px-6 rounded-xl transition-all cursor-pointer shadow-lg shadow-[#e2ff38]/20 flex items-center justify-center gap-2';
    }
}

function handlePlanPaymentSubmission() {
    const randomTrx = 'TRX-' + Math.floor(100000 + Math.random() * 900000);
    const formTrx = document.getElementById('form-trx-id');
    if (formTrx) formTrx.value = randomTrx;

    const form = document.getElementById('change-plan-form');
    if (form) form.submit();
}
</script>
