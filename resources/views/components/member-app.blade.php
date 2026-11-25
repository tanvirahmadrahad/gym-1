<!-- ========================================================== -->
<!-- 1. GYMSTICK MEMBER APP & SEAMLESS EXPERIENCE               -->
<!-- ========================================================== -->
<section id="app" class="py-20 lg:py-28 bg-[#080a0f] relative overflow-hidden select-none border-t border-white/[0.08]">
    
    <!-- Anchor for backward compatibility with #schedule -->
    <div id="schedule" class="absolute -top-20"></div>

    <!-- Giant Subtle Outline Watermark -->
    <div class="bg-watermark top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 text-[15vw] leading-none whitespace-nowrap opacity-25">
        MEMBER APP
    </div>

    <div class="max-w-7xl mx-auto px-6 sm:px-10 lg:px-12 relative z-10">
        
        <!-- Section Header -->
        <div class="text-center max-w-3xl mx-auto mb-16 lg:mb-20">
            <span class="inline-flex items-center gap-2 px-4 py-1.5 rounded-full badge-glow text-xs font-bold uppercase tracking-wider mb-4">
                <i class="fa-solid fa-mobile-screen-button text-[#ff5e14]"></i>
                <span>GYMSTICK APP</span>
            </span>
            <h2 class="font-heading text-3xl sm:text-5xl lg:text-6xl font-black text-white tracking-tight uppercase leading-[1.05] mb-5">
                Every Workout Tracked. <br class="hidden sm:inline">
                <span class="text-gradient-orange">In Your Pocket.</span>
            </h2>
            <p class="text-slate-300 text-sm sm:text-base md:text-lg leading-relaxed">
                Your Gymstick membership includes our easy-to-use mobile app. 1-tap phone turnstile entry, log your weights each week, chat with your coach, and track your recovery.
            </p>
        </div>

        <!-- 2-Column Responsive Showcase Layout -->
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-10 lg:gap-14 items-center">
            
            <!-- Left Column: 4 Feature Selector Cards (7 cols) -->
            <div class="lg:col-span-7 space-y-4">
                
                <!-- Feature 0: Contactless Pass -->
                <div 
                    onclick="switchAppFeature(0)" 
                    id="app-feature-0"
                    class="card-vibrant-active p-5 sm:p-6 rounded-2xl cursor-pointer transition-all duration-300 group"
                >
                    <div class="flex items-start gap-4">
                        <div id="app-icon-0" class="w-12 h-12 rounded-2xl bg-gradient-to-br from-[#ff7a1a] to-[#ff5e14] text-white flex items-center justify-center text-xl shrink-0 shadow-md shadow-[#ff5e14]/30">
                            <i class="fa-solid fa-id-card-clip"></i>
                        </div>
                        <div class="flex-1">
                            <div class="flex items-center justify-between mb-1">
                                <h4 class="font-heading text-base sm:text-lg font-bold text-white group-hover:text-[#ff9e58] transition-colors">
                                    Digital Pass & Apple Wallet Entry
                                </h4>
                                <span class="text-[10px] font-bold uppercase tracking-wider text-[#ff9e58] bg-[#ff5e14]/15 px-2.5 py-0.5 rounded-md border border-[#ff5e14]/30">
                                    Instant 1-Tap
                                </span>
                            </div>
                            <p class="text-slate-300 text-xs sm:text-sm leading-relaxed">
                                Add your Gymstick Member Pass to Apple Wallet or Google Wallet. Tap your phone at the front turnstile for instant 24/7 entry and automatic locker access.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Feature 1: RPE & Overload Tracker -->
                <div 
                    onclick="switchAppFeature(1)" 
                    id="app-feature-1"
                    class="card-vibrant p-5 sm:p-6 rounded-2xl cursor-pointer transition-all duration-300 group"
                >
                    <div class="flex items-start gap-4">
                        <div id="app-icon-1" class="w-12 h-12 rounded-2xl bg-white/5 text-slate-300 border border-white/10 flex items-center justify-center text-xl shrink-0">
                            <i class="fa-solid fa-chart-line"></i>
                        </div>
                        <div class="flex-1">
                            <div class="flex items-center justify-between mb-1">
                                <h4 class="font-heading text-base sm:text-lg font-bold text-white group-hover:text-[#ff9e58] transition-colors">
                                    Simple Workout & Weight Logger
                                </h4>
                                <span class="text-[10px] font-bold uppercase tracking-wider text-slate-400 bg-white/5 px-2.5 py-0.5 rounded-md border border-white/10">
                                    Track Progress
                                </span>
                            </div>
                            <p class="text-slate-400 text-xs sm:text-sm leading-relaxed">
                                Never forget what weight you lifted last week. Log your sets, reps, and rest timers with 1 tap, and see your personal strength charts climb.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Feature 2: Coach Video Analysis -->
                <div 
                    onclick="switchAppFeature(2)" 
                    id="app-feature-2"
                    class="card-vibrant p-5 sm:p-6 rounded-2xl cursor-pointer transition-all duration-300 group"
                >
                    <div class="flex items-start gap-4">
                        <div id="app-icon-2" class="w-12 h-12 rounded-2xl bg-white/5 text-slate-300 border border-white/10 flex items-center justify-center text-xl shrink-0">
                            <i class="fa-solid fa-comments"></i>
                        </div>
                        <div class="flex-1">
                            <div class="flex items-center justify-between mb-1">
                                <h4 class="font-heading text-base sm:text-lg font-bold text-white group-hover:text-[#ff9e58] transition-colors">
                                    Direct Coach Chat & Form Checks
                                </h4>
                                <span class="text-[10px] font-bold uppercase tracking-wider text-slate-400 bg-white/5 px-2.5 py-0.5 rounded-md border border-white/10">
                                    Trainer Support
                                </span>
                            </div>
                            <p class="text-slate-400 text-xs sm:text-sm leading-relaxed">
                                Have questions about an exercise? Record a quick 5-second video of your squat or bench press and get form feedback directly from your assigned coach.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Feature 3: Recovery & Readiness -->
                <div 
                    onclick="switchAppFeature(3)" 
                    id="app-feature-3"
                    class="card-vibrant p-5 sm:p-6 rounded-2xl cursor-pointer transition-all duration-300 group"
                >
                    <div class="flex items-start gap-4">
                        <div id="app-icon-3" class="w-12 h-12 rounded-2xl bg-white/5 text-slate-300 border border-white/10 flex items-center justify-center text-xl shrink-0">
                            <i class="fa-solid fa-heart-pulse"></i>
                        </div>
                        <div class="flex-1">
                            <div class="flex items-center justify-between mb-1">
                                <h4 class="font-heading text-base sm:text-lg font-bold text-white group-hover:text-[#ff9e58] transition-colors">
                                    Daily Energy & Recovery Insights
                                </h4>
                                <span class="text-[10px] font-bold uppercase tracking-wider text-cyan-400 bg-cyan-500/10 px-2.5 py-0.5 rounded-md border border-cyan-500/30">
                                    Wellness
                                </span>
                            </div>
                            <p class="text-slate-400 text-xs sm:text-sm leading-relaxed">
                                Connect with Apple Health or smartwatches to monitor sleep and daily recovery, so you know whether today is a heavy lifting day or a sauna day.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- App Store Badges -->
                <div class="pt-4 flex items-center gap-4 text-xs text-slate-400">
                    <span class="inline-flex items-center gap-2 px-3.5 py-2 rounded-xl bg-white/[0.04] border border-white/10 text-white font-medium">
                        <i class="fa-brands fa-apple text-sm"></i>
                        <span>iOS App Store</span>
                    </span>
                    <span class="inline-flex items-center gap-2 px-3.5 py-2 rounded-xl bg-white/[0.04] border border-white/10 text-white font-medium">
                        <i class="fa-brands fa-google-play text-sm"></i>
                        <span>Google Play</span>
                    </span>
                    <span class="text-emerald-400 font-bold text-xs flex items-center gap-1.5 ml-2">
                        <span class="w-2 h-2 rounded-full bg-emerald-400 animate-pulse"></span>
                        <span>100% Free with Membership</span>
                    </span>
                </div>

            </div>

            <!-- Right Column: Interactive Smartphone Mockup (5 cols) -->
            <div class="lg:col-span-5 flex justify-center relative">
                
                <!-- Sleek Phone Frame -->
                <div class="relative w-[300px] sm:w-[330px] rounded-[48px] p-3 bg-gradient-to-b from-[#1c2436] via-[#101522] to-[#080a0f] border-4 border-white/15 shadow-[0_25px_60px_rgba(0,0,0,0.9)]">
                    
                    <!-- Dynamic Island Notch -->
                    <div class="absolute top-6 left-1/2 -translate-x-1/2 w-24 h-5 bg-black rounded-full z-30 flex items-center justify-end px-2">
                        <span class="w-2 h-2 rounded-full bg-emerald-500 animate-pulse"></span>
                    </div>

                    <!-- Phone Inner Screen -->
                    <div class="relative rounded-[38px] overflow-hidden bg-[#0a0d14] p-5 pt-10 text-white font-sans aspect-[9/18.5] flex flex-col justify-between border border-white/5">
                        
                        <!-- Screen Header -->
                        <div class="flex items-center justify-between text-xs pb-3 border-b border-white/10">
                            <div>
                                <span class="text-[10px] text-slate-400 block uppercase">WELCOME BACK</span>
                                <strong class="text-white text-xs font-heading">ALEX HUNTER • VIP</strong>
                            </div>
                            <div class="w-8 h-8 rounded-full bg-[#ff5e14]/20 border border-[#ff5e14]/40 flex items-center justify-center text-[#ff9e58] text-xs">
                                <i class="fa-solid fa-bell"></i>
                            </div>
                        </div>

                        <!-- Dynamic Screen Content Area -->
                        <div id="phone-screen-content" class="my-auto space-y-4 transition-all duration-300">
                            
                            <!-- Slide 0: Digital RFID Turnstile Pass -->
                            <div class="p-4 rounded-2xl bg-gradient-to-br from-[#161d2d] to-[#0d121c] border border-[#ff5e14]/30 shadow-lg relative">
                                <div class="flex items-center justify-between mb-3">
                                    <span class="text-[9px] font-mono tracking-widest text-[#ff9e58] uppercase font-bold">GYMSTICK BLACK PASS</span>
                                    <i class="fa-solid fa-wifi rotate-90 text-[#ff5e14] text-xs"></i>
                                </div>
                                <span class="text-[10px] text-slate-400 block">Member ID: #GS-99214</span>
                                <h4 class="font-heading text-base font-black text-white mt-0.5">Alex Hunter</h4>
                                <div class="mt-4 pt-3 border-t border-white/10 flex items-center justify-between text-[10px]">
                                    <span class="text-emerald-400 font-bold flex items-center gap-1">
                                        <span class="w-1.5 h-1.5 rounded-full bg-emerald-400"></span>
                                        Turnstile Ready
                                    </span>
                                    <span class="text-slate-400 font-mono">24/7 VIP ACCESS</span>
                                </div>
                            </div>

                            <div class="p-3 rounded-xl bg-white/5 border border-white/10 text-center">
                                <span class="text-[10px] text-slate-400 block">Hold near turnstile reader</span>
                                <div class="inline-flex items-center gap-1.5 mt-1 text-xs font-bold text-white">
                                    <i class="fa-brands fa-apple text-sm"></i>
                                    <span>Apple Wallet Active</span>
                                </div>
                            </div>

                        </div>

                        <!-- Phone Bottom Nav Bar -->
                        <div class="pt-3 border-t border-white/10 flex items-center justify-around text-slate-400 text-xs">
                            <span class="text-[#ff5e14] flex flex-col items-center gap-0.5">
                                <i class="fa-solid fa-house text-sm"></i>
                                <span class="text-[9px]">Home</span>
                            </span>
                            <span class="flex flex-col items-center gap-0.5 hover:text-white">
                                <i class="fa-solid fa-dumbbell text-sm"></i>
                                <span class="text-[9px]">Log</span>
                            </span>
                            <span class="flex flex-col items-center gap-0.5 hover:text-white">
                                <i class="fa-solid fa-comment-dots text-sm"></i>
                                <span class="text-[9px]">Coach</span>
                            </span>
                            <span class="flex flex-col items-center gap-0.5 hover:text-white">
                                <i class="fa-solid fa-user text-sm"></i>
                                <span class="text-[9px]">Profile</span>
                            </span>
                        </div>

                    </div>
                </div>

            </div>

        </div>

    </div>
</section>

<!-- App Feature Switcher Script -->
<script>
(function() {
    const screens = [
        `<!-- Screen 0: RFID -->
        <div class="p-4 rounded-2xl bg-gradient-to-br from-[#161d2d] to-[#0d121c] border border-[#ff5e14]/40 shadow-lg relative">
            <div class="flex items-center justify-between mb-3">
                <span class="text-[9px] font-mono tracking-widest text-[#ff9e58] uppercase font-bold">GYMSTICK BLACK PASS</span>
                <i class="fa-solid fa-wifi rotate-90 text-[#ff5e14] text-xs"></i>
            </div>
            <span class="text-[10px] text-slate-400 block">Member ID: #GS-99214</span>
            <h4 class="font-heading text-base font-black text-white mt-0.5">Alex Hunter</h4>
            <div class="mt-4 pt-3 border-t border-white/10 flex items-center justify-between text-[10px]">
                <span class="text-emerald-400 font-bold flex items-center gap-1">
                    <span class="w-1.5 h-1.5 rounded-full bg-emerald-400"></span>
                    Turnstile Ready
                </span>
                <span class="text-slate-400 font-mono">24/7 VIP ACCESS</span>
            </div>
        </div>
        <div class="p-3 rounded-xl bg-white/5 border border-white/10 text-center">
            <span class="text-[10px] text-slate-400 block">Hold near turnstile reader</span>
            <div class="inline-flex items-center gap-1.5 mt-1 text-xs font-bold text-white">
                <i class="fa-brands fa-apple text-sm"></i>
                <span>Apple Wallet Active</span>
            </div>
        </div>`,

        `<!-- Screen 1: Workout Logger -->
        <div class="p-4 rounded-2xl bg-gradient-to-br from-[#161d2d] to-[#0d121c] border border-white/10 shadow-lg space-y-2.5">
            <div class="flex items-center justify-between">
                <span class="text-[10px] font-bold text-[#ff9e58]">TODAY'S WORKOUT</span>
                <span class="text-[9px] text-emerald-400 bg-emerald-500/10 px-2 py-0.5 rounded font-bold">WEEK 4</span>
            </div>
            <h4 class="font-heading text-sm font-bold text-white">Push A: Bench & Shoulders</h4>
            <div class="space-y-1.5 text-xs text-slate-300">
                <div class="flex items-center justify-between p-2 rounded bg-black/40">
                    <span>Barbell Bench Press</span>
                    <strong class="text-white">100kg × 6</strong>
                </div>
                <div class="flex items-center justify-between p-2 rounded bg-black/40">
                    <span>Incline DB Press</span>
                    <strong class="text-white">36kg × 8</strong>
                </div>
            </div>
        </div>
        <div class="p-2.5 rounded-xl bg-emerald-500/10 border border-emerald-500/30 text-center text-xs text-emerald-400 font-bold">
            ✓ New Bench PR Logged (+5kg)
        </div>`,

        `<!-- Screen 2: Coach Chat -->
        <div class="p-4 rounded-2xl bg-gradient-to-br from-[#161d2d] to-[#0d121c] border border-white/10 shadow-lg space-y-3">
            <div class="flex items-center gap-2.5 pb-2 border-b border-white/10">
                <div class="w-8 h-8 rounded-full bg-[#ff5e14] text-white flex items-center justify-center font-bold text-xs">M</div>
                <div>
                    <h5 class="text-xs font-bold text-white">Coach Marcus</h5>
                    <span class="text-[9px] text-emerald-400">Online • Strength Lead</span>
                </div>
            </div>
            <div class="p-2.5 rounded-xl bg-white/5 text-[11px] text-slate-200">
                "Great squat video! Your depth was spot-on. Add 2.5kg on Friday."
            </div>
            <div class="p-2 rounded-lg bg-[#ff5e14]/20 border border-[#ff5e14]/40 text-[10px] text-[#ff9e58] text-center font-bold">
                ✓ Video Review Complete
            </div>
        </div>`,

        `<!-- Screen 3: Recovery -->
        <div class="p-4 rounded-2xl bg-gradient-to-br from-[#161d2d] to-[#0d121c] border border-cyan-500/30 shadow-lg space-y-2.5">
            <div class="flex items-center justify-between">
                <span class="text-[10px] font-bold text-cyan-400">RECOVERY SCORE</span>
                <span class="text-[10px] font-black text-white bg-cyan-500/20 px-2 py-0.5 rounded font-mono">92 / 100</span>
            </div>
            <div class="w-full bg-white/10 h-2 rounded-full overflow-hidden">
                <div class="bg-gradient-to-r from-cyan-400 to-blue-500 h-full w-[92%]"></div>
            </div>
            <p class="text-[11px] text-slate-300 mt-2">
                Sleep quality is optimal. Central nervous system is primed for heavy deadlifts today.
            </p>
        </div>
        <div class="p-2.5 rounded-xl bg-cyan-500/10 border border-cyan-500/30 text-center text-xs text-cyan-400 font-bold">
            Recommended: Contrast Sauna Post-Lift
        </div>`
    ];

    window.switchAppFeature = function(index) {
        const screenEl = document.getElementById('phone-screen-content');
        if (screenEl && screens[index]) {
            screenEl.style.opacity = '0';
            screenEl.style.transform = 'scale(0.96)';
            setTimeout(() => {
                screenEl.innerHTML = screens[index];
                screenEl.style.opacity = '1';
                screenEl.style.transform = 'scale(1)';
            }, 180);
        }

        for (let i = 0; i < 4; i++) {
            const card = document.getElementById('app-feature-' + i);
            const icon = document.getElementById('app-icon-' + i);

            if (card && icon) {
                if (i === index) {
                    card.className = "card-vibrant-active p-5 sm:p-6 rounded-2xl cursor-pointer transition-all duration-300 group";
                    icon.className = "w-12 h-12 rounded-2xl bg-gradient-to-br from-[#ff7a1a] to-[#ff5e14] text-white flex items-center justify-center text-xl shrink-0 shadow-md shadow-[#ff5e14]/30";
                } else {
                    card.className = "card-vibrant p-5 sm:p-6 rounded-2xl cursor-pointer transition-all duration-300 group";
                    icon.className = "w-12 h-12 rounded-2xl bg-white/5 text-slate-300 border border-white/10 flex items-center justify-center text-xl shrink-0";
                }
            }
        }
    };
})();
</script>
