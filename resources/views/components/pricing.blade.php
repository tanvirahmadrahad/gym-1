<!-- ========================================================== -->
<!-- 8. MEMBERSHIP & PRICING PLANS                              -->
<!-- (Gymstick Obsidian Dark & Radiant Fiery Orange Tiers)       -->
<!-- ========================================================== -->
<section id="pricing" class="py-20 lg:py-28 bg-[#06080d] relative overflow-hidden select-none border-t border-white/[0.08]">
    
    <!-- Ambient Energy Lighting Cones -->
    <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[800px] h-[500px] bg-[#ff5e14]/12 rounded-full blur-[200px] pointer-events-none"></div>
    <div class="absolute top-10 right-10 w-[450px] h-[450px] bg-cyan-500/10 rounded-full blur-[190px] pointer-events-none"></div>

    <div class="max-w-7xl mx-auto px-6 sm:px-10 lg:px-12 relative z-10">
        
        <!-- Section Header -->
        <div class="text-center max-w-3xl mx-auto mb-14 lg:mb-18">
            <span class="inline-flex items-center gap-2 px-4 py-1.5 rounded-full badge-glow text-xs font-black uppercase tracking-widest mb-4">
                <i class="fa-solid fa-tags text-[#ff5e14]"></i>
                <span>MEMBERSHIP TIERS</span>
            </span>
            <h2 class="font-heading text-3xl sm:text-5xl lg:text-6xl font-black text-white tracking-tight uppercase leading-[1.05] mb-5">
                Choose Your <span class="text-gradient-orange">Training Access</span>
            </h2>
            <p class="text-slate-300 text-sm sm:text-base md:text-lg leading-relaxed">
                Zero signup fees, zero lock-in contracts. Every pass includes digital locker assignment, member app tracking, and biometric onboarding.
            </p>

            <!-- Monthly / Yearly Billing Toggle -->
            <div class="inline-flex items-center gap-3 mt-8 p-1.5 rounded-full bg-[#111726] border border-white/15 shadow-xl">
                <button 
                    type="button" 
                    id="billing-monthly-btn"
                    onclick="setBillingCycle(false)"
                    class="px-6 py-2 rounded-full text-xs font-black uppercase tracking-wider text-white btn-glow-orange shadow-md transition-all cursor-pointer"
                >
                    Monthly
                </button>
                <button 
                    type="button" 
                    id="billing-yearly-btn"
                    onclick="setBillingCycle(true)"
                    class="px-6 py-2 rounded-full text-xs font-black uppercase tracking-wider text-slate-400 hover:text-white transition-all cursor-pointer flex items-center gap-2"
                >
                    <span>Yearly</span>
                    <span class="text-[10px] bg-emerald-500/20 text-emerald-400 border border-emerald-500/30 px-2 py-0.5 rounded-full font-bold">SAVE 20%</span>
                </button>
            </div>
        </div>

        <!-- 3 Pricing Cards Grid -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 items-stretch max-w-6xl mx-auto">
            
            <!-- Plan 1: Standard Black -->
            <div class="card-vibrant rounded-3xl p-7 sm:p-9 flex flex-col justify-between group">
                <div>
                    <div class="flex items-center justify-between mb-4">
                        <span class="text-xs font-black uppercase tracking-wider text-slate-400">FOUNDATIONAL</span>
                        <span class="text-[10px] font-mono text-slate-400 bg-white/5 px-2.5 py-1 rounded-md border border-white/10 font-bold">TIER 01</span>
                    </div>

                    <h3 class="font-heading text-2xl font-black text-white mb-2 uppercase group-hover:text-[#ff9e58] transition-colors">Standard Black</h3>
                    <p class="text-xs text-slate-300 mb-6 leading-relaxed">Essential lifting access for dedicated athletes during standard training windows.</p>

                    <div class="mb-8 pb-6 border-b border-white/10">
                        <div class="flex items-baseline gap-1">
                            <span class="font-heading text-4xl sm:text-5xl font-black text-white price-amount" data-monthly="$39" data-yearly="$31">$39</span>
                            <span class="text-xs text-slate-400 font-semibold price-period">/ month</span>
                        </div>
                        <span class="text-[11px] text-slate-400 block mt-1 billed-note">Billed monthly • Cancel anytime</span>
                    </div>

                    <!-- Features List -->
                    <div class="space-y-3.5 mb-8">
                        <span class="text-[10px] font-black text-slate-400 uppercase tracking-widest block mb-4">INCLUDED PRIVILEGES</span>
                        <div class="flex items-center gap-3 text-xs text-slate-200">
                            <i class="fa-solid fa-circle-check text-[#ff5e14] shrink-0 text-sm"></i>
                            <span>Standard gym & free weight arena access</span>
                        </div>
                        <div class="flex items-center gap-3 text-xs text-slate-200">
                            <i class="fa-solid fa-circle-check text-[#ff5e14] shrink-0 text-sm"></i>
                            <span>Gymstick Member App & RFID phone entry</span>
                        </div>
                        <div class="flex items-center gap-3 text-xs text-slate-200">
                            <i class="fa-solid fa-circle-check text-[#ff5e14] shrink-0 text-sm"></i>
                            <span>Smart locker & luxury shower facilities</span>
                        </div>
                        <div class="flex items-center gap-3 text-xs text-slate-200">
                            <i class="fa-solid fa-circle-check text-[#ff5e14] shrink-0 text-sm"></i>
                            <span>1x InBody 770 composition scan per quarter</span>
                        </div>
                    </div>
                </div>

                <a 
                    href="#free-trial" 
                    class="block w-full text-center py-3.5 px-6 rounded-xl border border-white/20 hover:border-[#ff5e14] bg-white/[0.04] hover:bg-white/[0.08] text-white font-bold text-xs uppercase tracking-wider transition-all cursor-pointer shadow-md"
                >
                    Get Started
                </a>
            </div>

            <!-- Plan 2: Elite Athlete (Featured / Most Popular) -->
            <div class="card-vibrant-active rounded-3xl p-7 sm:p-9 flex flex-col justify-between relative group hover:scale-[1.02] transition-all duration-300">
                <!-- Floating Most Popular Badge -->
                <div class="absolute -top-3.5 left-1/2 -translate-x-1/2 btn-glow-orange text-white text-[10px] font-black uppercase tracking-widest px-5 py-1 rounded-full shadow-lg">
                    ⚡ MOST POPULAR
                </div>

                <div>
                    <div class="flex items-center justify-between mb-4">
                        <span class="text-xs font-black uppercase tracking-wider text-[#ff9e58]">UNLIMITED ACCESS</span>
                        <span class="text-[10px] font-mono text-[#ff9e58] bg-[#ff5e14]/20 px-2.5 py-1 rounded-md border border-[#ff5e14]/40 font-bold">TIER 02</span>
                    </div>

                    <h3 class="font-heading text-2xl font-black text-white mb-2 uppercase">Elite Athlete</h3>
                    <p class="text-xs text-slate-200 mb-6 leading-relaxed">Full 24/7 all-access pass including all training zones, contrast plunge, and sauna.</p>

                    <div class="mb-8 pb-6 border-b border-[#ff5e14]/30">
                        <div class="flex items-baseline gap-1">
                            <span class="font-heading text-4xl sm:text-5xl font-black text-white price-amount" data-monthly="$69" data-yearly="$55">$69</span>
                            <span class="text-xs text-[#ff9e58] font-bold price-period">/ month</span>
                        </div>
                        <span class="text-[11px] text-slate-300 block mt-1 billed-note">Billed monthly • Cancel anytime</span>
                    </div>

                    <!-- Features List -->
                    <div class="space-y-3.5 mb-8">
                        <span class="text-[10px] font-black text-slate-400 uppercase tracking-widest block mb-4">INCLUDED PRIVILEGES</span>
                        <div class="flex items-center gap-3 text-xs text-white font-medium">
                            <i class="fa-solid fa-circle-check text-[#ff5e14] shrink-0 text-sm drop-shadow-[0_0_8px_#ff5e14]"></i>
                            <span>24/7 RFID Biometric all-zone turnstile access</span>
                        </div>
                        <div class="flex items-center gap-3 text-xs text-white font-medium">
                            <i class="fa-solid fa-circle-check text-[#ff5e14] shrink-0 text-sm drop-shadow-[0_0_8px_#ff5e14]"></i>
                            <span>Unlimited 3°C Cold Plunge & 90°C Cedar Sauna</span>
                        </div>
                        <div class="flex items-center gap-3 text-xs text-white font-medium">
                            <i class="fa-solid fa-circle-check text-[#ff5e14] shrink-0 text-sm drop-shadow-[0_0_8px_#ff5e14]"></i>
                            <span>All combat turf, sled & high-intensity classes</span>
                        </div>
                        <div class="flex items-center gap-3 text-xs text-white font-medium">
                            <i class="fa-solid fa-circle-check text-[#ff5e14] shrink-0 text-sm drop-shadow-[0_0_8px_#ff5e14]"></i>
                            <span>Bi-weekly coach RPE & biomechanical check-in</span>
                        </div>
                        <div class="flex items-center gap-3 text-xs text-white font-medium">
                            <i class="fa-solid fa-circle-check text-[#ff5e14] shrink-0 text-sm drop-shadow-[0_0_8px_#ff5e14]"></i>
                            <span>2 Complimentary VIP guest passes per month</span>
                        </div>
                    </div>
                </div>

                <a 
                    href="#free-trial" 
                    class="btn-glow-orange block w-full text-center py-3.5 px-6 rounded-xl text-white font-black text-xs uppercase tracking-wider shadow-lg cursor-pointer"
                >
                    Claim Elite Membership
                </a>
            </div>

            <!-- Plan 3: VIP Diamond -->
            <div class="card-vibrant rounded-3xl p-7 sm:p-9 flex flex-col justify-between group">
                <div>
                    <div class="flex items-center justify-between mb-4">
                        <span class="text-xs font-black uppercase tracking-wider text-cyan-400">PRIVATE CONCIERGE</span>
                        <span class="text-[10px] font-mono text-cyan-400 bg-cyan-500/10 px-2.5 py-1 rounded-md border border-cyan-500/30 font-bold">TIER 03</span>
                    </div>

                    <h3 class="font-heading text-2xl font-black text-white mb-2 uppercase group-hover:text-cyan-300 transition-colors">VIP Diamond</h3>
                    <p class="text-xs text-slate-300 mb-6 leading-relaxed">Dedicated 1-on-1 CSCS strength coaching, priority plunge suites, and fuel bar.</p>

                    <div class="mb-8 pb-6 border-b border-white/10">
                        <div class="flex items-baseline gap-1">
                            <span class="font-heading text-4xl sm:text-5xl font-black text-white price-amount" data-monthly="$129" data-yearly="$103">$129</span>
                            <span class="text-xs text-cyan-400 font-bold price-period">/ month</span>
                        </div>
                        <span class="text-[11px] text-slate-400 block mt-1 billed-note">Billed monthly • Cancel anytime</span>
                    </div>

                    <!-- Features List -->
                    <div class="space-y-3.5 mb-8">
                        <span class="text-[10px] font-black text-slate-400 uppercase tracking-widest block mb-4">INCLUDED PRIVILEGES</span>
                        <div class="flex items-center gap-3 text-xs text-slate-200">
                            <i class="fa-solid fa-circle-check text-cyan-400 shrink-0 text-sm"></i>
                            <span>Everything in Elite Athlete tier</span>
                        </div>
                        <div class="flex items-center gap-3 text-xs text-slate-200">
                            <i class="fa-solid fa-circle-check text-cyan-400 shrink-0 text-sm"></i>
                            <span>4x Private 1-on-1 coaching sessions per month</span>
                        </div>
                        <div class="flex items-center gap-3 text-xs text-slate-200">
                            <i class="fa-solid fa-circle-check text-cyan-400 shrink-0 text-sm"></i>
                            <span>Permanent private locker with laundry service</span>
                        </div>
                        <div class="flex items-center gap-3 text-xs text-slate-200">
                            <i class="fa-solid fa-circle-check text-cyan-400 shrink-0 text-sm"></i>
                            <span>Priority booking for sauna & contrast hydrotherapy</span>
                        </div>
                        <div class="flex items-center gap-3 text-xs text-slate-200">
                            <i class="fa-solid fa-circle-check text-cyan-400 shrink-0 text-sm"></i>
                            <span>Daily protein shake at the in-house fuel bar</span>
                        </div>
                    </div>
                </div>

                <a 
                    href="#free-trial" 
                    class="block w-full text-center py-3.5 px-6 rounded-xl border border-white/20 hover:border-cyan-400 bg-white/[0.04] hover:bg-cyan-500/10 text-white font-bold text-xs uppercase tracking-wider transition-all cursor-pointer shadow-md"
                >
                    Get VIP Access
                </a>
            </div>

        </div>

        <!-- Reassurance Footer Pill -->
        <div class="flex items-center justify-center flex-wrap gap-8 text-xs text-slate-400 mt-14 pt-8 border-t border-white/10">
            <div class="flex items-center gap-2">
                <i class="fa-solid fa-shield-halved text-[#ff5e14]"></i>
                <span class="text-slate-300">14-Day Full Money-Back Guarantee</span>
            </div>
            <div class="flex items-center gap-2">
                <i class="fa-solid fa-snowflake text-cyan-400"></i>
                <span class="text-slate-300">Freeze Anytime Free in App</span>
            </div>
            <div class="flex items-center gap-2">
                <i class="fa-solid fa-bolt text-amber-400"></i>
                <span class="text-slate-300">Instant Digital Activation</span>
            </div>
        </div>

    </div>
</section>

<!-- Pricing Toggle Script -->
<script>
(function() {
    window.setBillingCycle = function(isYearly) {
        const monthlyBtn = document.getElementById('billing-monthly-btn');
        const yearlyBtn = document.getElementById('billing-yearly-btn');
        const priceEls = document.querySelectorAll('#pricing .price-amount');
        const noteEls = document.querySelectorAll('#pricing .billed-note');

        if (isYearly) {
            monthlyBtn.className = "px-6 py-2 rounded-full text-xs font-black uppercase tracking-wider text-slate-400 hover:text-white transition-all cursor-pointer";
            yearlyBtn.className = "px-6 py-2 rounded-full text-xs font-black uppercase tracking-wider text-white btn-glow-orange shadow-md transition-all cursor-pointer flex items-center gap-2";

            priceEls.forEach(el => {
                el.textContent = el.getAttribute('data-yearly');
            });
            noteEls.forEach(el => {
                el.textContent = "Billed annually • Save 20% discount";
            });
        } else {
            monthlyBtn.className = "px-6 py-2 rounded-full text-xs font-black uppercase tracking-wider text-white btn-glow-orange shadow-md transition-all cursor-pointer";
            yearlyBtn.className = "px-6 py-2 rounded-full text-xs font-black uppercase tracking-wider text-slate-400 hover:text-white transition-all cursor-pointer flex items-center gap-2";

            priceEls.forEach(el => {
                el.textContent = el.getAttribute('data-monthly');
            });
            noteEls.forEach(el => {
                el.textContent = "Billed monthly • Cancel anytime";
            });
        }
    };
})();
</script>
