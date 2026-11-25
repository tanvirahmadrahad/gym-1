<!-- ========================================================== -->
<!-- 2. FITNESS GOAL PATHWAYS                                   -->
<!-- ========================================================== -->
<section id="programs" class="py-20 lg:py-28 bg-[#0a0d14] relative overflow-hidden select-none border-t border-white/[0.08]">
    
    <!-- Giant Subtle Outline Watermark -->
    <div class="bg-watermark top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 text-[15vw] leading-none whitespace-nowrap opacity-25">
        PROGRAMS
    </div>

    <div class="max-w-7xl mx-auto px-6 sm:px-10 lg:px-12 relative z-10">
        
        <!-- Section Header -->
        <div class="text-center max-w-3xl mx-auto mb-14 lg:mb-18">
            <span class="inline-flex items-center gap-2 px-4 py-1.5 rounded-full badge-glow text-xs font-bold uppercase tracking-wider mb-4">
                <i class="fa-solid fa-bullseye text-[#ff5e14]"></i>
                <span>TARGET GOALS</span>
            </span>
            <h2 class="font-heading text-3xl sm:text-5xl lg:text-6xl font-black text-white tracking-tight uppercase leading-[1.05] mb-5">
                Choose Your <span class="text-gradient-orange">Training Focus</span>
            </h2>
            <p class="text-slate-300 text-sm sm:text-base md:text-lg leading-relaxed">
                Whether you want to build muscle, lose body fat, or build athletic power, choose your primary focus below to see your typical weekly routine and expectations.
            </p>
        </div>

        <!-- 4 Interactive Goal Pathway Tabs -->
        <div class="grid grid-cols-2 lg:grid-cols-4 gap-3 sm:gap-4 mb-10 sm:mb-12">
            
            <!-- Goal 01: Hypertrophy -->
            <button 
                type="button" 
                onclick="switchGoalPathway(0)"
                id="goal-tab-0"
                class="card-vibrant-active p-4 sm:p-5 rounded-2xl text-left transition-all duration-300 cursor-pointer group"
            >
                <div class="w-10 h-10 rounded-xl bg-gradient-to-br from-[#ff7a1a] to-[#ff5e14] text-white flex items-center justify-center text-lg mb-3 shadow-md shadow-[#ff5e14]/30">
                    <i class="fa-solid fa-bolt"></i>
                </div>
                <span class="text-[10px] font-bold uppercase tracking-wider text-[#ff9e58] block mb-0.5">Muscle Building</span>
                <h4 class="font-heading text-sm sm:text-base font-bold text-white group-hover:text-[#ff9e58] transition-colors line-clamp-1">
                    Hypertrophy & Mass
                </h4>
            </button>

            <!-- Goal 02: Fat Shred -->
            <button 
                type="button" 
                onclick="switchGoalPathway(1)"
                id="goal-tab-1"
                class="card-vibrant p-4 sm:p-5 rounded-2xl text-left transition-all duration-300 cursor-pointer group"
            >
                <div class="w-10 h-10 rounded-xl bg-white/5 text-slate-300 flex items-center justify-center text-lg mb-3 border border-white/10">
                    <i class="fa-solid fa-fire-flame-curved"></i>
                </div>
                <span class="text-[10px] font-bold uppercase tracking-wider text-slate-400 block mb-0.5">Fat Loss</span>
                <h4 class="font-heading text-sm sm:text-base font-bold text-white group-hover:text-[#ff9e58] transition-colors line-clamp-1">
                    Fat Loss & Conditioning
                </h4>
            </button>

            <!-- Goal 03: Combat & Power -->
            <button 
                type="button" 
                onclick="switchGoalPathway(2)"
                id="goal-tab-2"
                class="card-vibrant p-4 sm:p-5 rounded-2xl text-left transition-all duration-300 cursor-pointer group"
            >
                <div class="w-10 h-10 rounded-xl bg-white/5 text-slate-300 flex items-center justify-center text-lg mb-3 border border-white/10">
                    <i class="fa-solid fa-hand-fist"></i>
                </div>
                <span class="text-[10px] font-bold uppercase tracking-wider text-slate-400 block mb-0.5">Performance</span>
                <h4 class="font-heading text-sm sm:text-base font-bold text-white group-hover:text-[#ff9e58] transition-colors line-clamp-1">
                    Combat & Athletic Turf
                </h4>
            </button>

            <!-- Goal 04: Longevity -->
            <button 
                type="button" 
                onclick="switchGoalPathway(3)"
                id="goal-tab-3"
                class="card-vibrant p-4 sm:p-5 rounded-2xl text-left transition-all duration-300 cursor-pointer group"
            >
                <div class="w-10 h-10 rounded-xl bg-white/5 text-slate-300 flex items-center justify-center text-lg mb-3 border border-white/10">
                    <i class="fa-solid fa-spa"></i>
                </div>
                <span class="text-[10px] font-bold uppercase tracking-wider text-slate-400 block mb-0.5">Wellness</span>
                <h4 class="font-heading text-sm sm:text-base font-bold text-white group-hover:text-[#ff9e58] transition-colors line-clamp-1">
                    Strength & Longevity
                </h4>
            </button>

        </div>

        <!-- Dynamic Goal Pathway Showcase Card -->
        <div class="card-vibrant rounded-3xl overflow-hidden shadow-2xl p-6 sm:p-8 lg:p-12 relative">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 lg:gap-12 items-center">
                
                <!-- Pathway Image (5 Cols) -->
                <div class="lg:col-span-5 relative order-2 lg:order-1">
                    <div class="relative rounded-2xl overflow-hidden aspect-[4/3] sm:aspect-[16/10] lg:aspect-[4/3] border border-white/15 shadow-2xl group">
                        <img 
                            id="goal-img"
                            src="{{ asset('images/athlete-intense.jpg') }}" 
                            alt="Training Goal Pathway" 
                            class="w-full h-full object-cover object-center filter brightness-105 contrast-105 group-hover:scale-105 transition-all duration-700"
                        >
                        <div class="absolute inset-0 bg-gradient-to-t from-black/85 via-black/20 to-transparent pointer-events-none"></div>
                        <div class="absolute bottom-4 left-4 right-4 flex items-center justify-between text-xs text-white">
                            <span id="goal-status" class="font-bold flex items-center gap-1.5 bg-black/70 backdrop-blur-md px-3 py-1 rounded-full border border-white/10">
                                <span class="w-2 h-2 rounded-full bg-emerald-400 animate-pulse"></span>
                                <span>Coaches On Floor</span>
                            </span>
                            <span id="goal-timeline" class="font-bold text-[#ff9e58] bg-black/70 backdrop-blur-md px-3 py-1 rounded-full border border-[#ff5e14]/40">
                                12-WEEK CYCLE
                            </span>
                        </div>
                    </div>
                </div>

                <!-- Pathway Strategy & Deliverables (7 Cols) -->
                <div class="lg:col-span-7 space-y-6 order-1 lg:order-2">
                    <div class="inline-flex items-center gap-2 px-3.5 py-1 rounded-full badge-glow text-xs font-bold uppercase tracking-wider">
                        <i class="fa-solid fa-bullseye text-[#ff5e14]"></i>
                        <span id="goal-badge">PROGRAM 01 • HYPERTROPHY FOCUS</span>
                    </div>

                    <h3 id="goal-title" class="font-heading text-2xl sm:text-4xl font-black text-white tracking-tight leading-tight">
                        Lean Muscle Building & Hypertrophy Split
                    </h3>

                    <p id="goal-desc" class="text-slate-300 text-sm sm:text-base leading-relaxed font-normal">
                        Designed for lifters who want to pack on dense muscle, broaden their shoulders and back, and build lasting strength through progressive overload and high-tension lifting.
                    </p>

                    <!-- Key Deliverables List -->
                    <div class="space-y-3 pt-2">
                        <div class="flex items-start gap-3">
                            <i class="fa-solid fa-circle-check text-[#ff5e14] text-base shrink-0 mt-0.5"></i>
                            <span id="goal-point-1" class="text-xs sm:text-sm text-slate-200">
                                4 to 5 Days per week Push-Pull-Legs structured split
                            </span>
                        </div>
                        <div class="flex items-start gap-3">
                            <i class="fa-solid fa-circle-check text-[#ff5e14] text-base shrink-0 mt-0.5"></i>
                            <span id="goal-point-2" class="text-xs sm:text-sm text-slate-200">
                                Daily protein and calorie target calculated for your current weight
                            </span>
                        </div>
                        <div class="flex items-start gap-3">
                            <i class="fa-solid fa-circle-check text-[#ff5e14] text-base shrink-0 mt-0.5"></i>
                            <span id="goal-point-3" class="text-xs sm:text-sm text-slate-200">
                                Bi-weekly body composition scans and coach form check-ins
                            </span>
                        </div>
                    </div>

                    <!-- Target Metric Chips -->
                    <div class="grid grid-cols-1 sm:grid-cols-3 gap-3 pt-4 border-t border-white/10">
                        <div class="p-3.5 rounded-xl bg-white/[0.04] border border-white/10">
                            <span class="text-[10px] text-slate-400 font-bold uppercase tracking-wider block">Weekly Frequency</span>
                            <span id="goal-metric-1" class="text-xs sm:text-sm font-black text-white block mt-0.5">4–5 Days / Week</span>
                        </div>
                        <div class="p-3.5 rounded-xl bg-white/[0.04] border border-white/10">
                            <span class="text-[10px] text-slate-400 font-bold uppercase tracking-wider block">Expected Gain</span>
                            <span id="goal-metric-2" class="text-xs sm:text-sm font-black text-gradient-orange block mt-0.5">+4kg to 6kg Muscle</span>
                        </div>
                        <div class="p-3.5 rounded-xl bg-white/[0.04] border border-white/10">
                            <span class="text-[10px] text-slate-400 font-bold uppercase tracking-wider block">Workout Style</span>
                            <span id="goal-metric-3" class="text-xs sm:text-sm font-black text-white block mt-0.5">Hypertrophy & Heavy Compound</span>
                        </div>
                    </div>

                    <!-- CTA Buttons -->
                    <div class="pt-4 flex items-center flex-wrap gap-4">
                        <a 
                            href="#free-trial" 
                            class="btn-glow-orange inline-flex items-center gap-2 px-7 py-3.5 rounded-xl text-white font-bold text-sm tracking-wide shadow-lg cursor-pointer"
                        >
                            <span>Start This Program Free</span>
                            <i class="fa-solid fa-arrow-right text-xs"></i>
                        </a>

                        <a 
                            href="#trainers" 
                            class="px-6 py-3.5 rounded-xl border border-white/20 hover:border-white text-white font-bold text-sm transition-all cursor-pointer"
                        >
                            Talk to a Coach
                        </a>
                    </div>
                </div>

            </div>
        </div>

    </div>
</section>

<!-- Goal Pathway Controller Script -->
<script>
(function() {
    const goalsData = [
        {
            badge: "PROGRAM 01 • HYPERTROPHY FOCUS",
            timeline: "12-WEEK CYCLE",
            title: "Lean Muscle Building & Hypertrophy Split",
            desc: "Designed for lifters who want to pack on dense muscle, broaden their shoulders and back, and build lasting strength through progressive overload and high-tension lifting.",
            p1: "4 to 5 Days per week Push-Pull-Legs structured split",
            p2: "Daily protein and calorie target calculated for your current weight",
            p3: "Bi-weekly body composition scans and coach form check-ins",
            m1: "4–5 Days / Week",
            m2: "+4kg to 6kg Muscle",
            m3: "Hypertrophy & Heavy Compound",
            img: "{{ asset('images/athlete-intense.jpg') }}"
        },
        {
            badge: "PROGRAM 02 • FAT LOSS & SHRED",
            timeline: "8–12 WEEKS",
            title: "Fat Shred, Conditioning & High-Energy HIIT",
            desc: "A calorie-burning, muscle-preserving combination of compound resistance training, sprint intervals, and sled pushes designed to shed body fat while keeping your hard-earned muscle.",
            p1: "Full body strength supersets paired with sled sprints",
            p2: "Sustainable fat-loss calorie target with zero starvation",
            p3: "Post-workout cold plunge to boost fat oxidation and energy",
            m1: "3–4 Days / Week",
            m2: "-5kg to 8kg Body Fat",
            m3: "Strength + HIIT Sprints",
            img: "{{ asset('images/athlete-crossfit.jpg') }}"
        },
        {
            badge: "PROGRAM 03 • ATHLETIC & COMBAT",
            timeline: "ONGOING",
            title: "Boxing Ring Footwork & 30m Sled Power",
            desc: "For athletes looking for real stamina, punch power, and functional athletic endurance. Combines heavy bag rounds, turf sled sprints, and barbell power work.",
            p1: "High-intensity heavy bag intervals & boxing combinations",
            p2: "Heavy sled push and pull conditioning for leg drive",
            p3: "Rotational core and explosive power movements",
            m1: "3–5 Days / Week",
            m2: "Doubled Stamina & Speed",
            m3: "Boxing & Sprint Turf",
            img: "{{ asset('images/boxer_male.jpg') }}"
        },
        {
            badge: "PROGRAM 04 • HEALTH & LONGEVITY",
            timeline: "LIFESTYLE",
            title: "Functional Strength, Joint Health & Sauna",
            desc: "Build a strong, pain-free body that serves you well into your 40s, 50s, and beyond. Focuses on joint stability, mobility, posture, and relaxing recovery sessions in our Finnish sauna.",
            p1: "Controlled resistance training to strengthen tendons and spine",
            p2: "Joint mobility routines to fix tight hips and shoulders",
            p3: "Unlimited sauna and cold plunge to reduce inflammation",
            m1: "3 Days / Week",
            m2: "Zero Joint Pain",
            m3: "Mobility & Sauna Suite",
            img: "{{ asset('images/sauna_spa.jpg') }}"
        }
    ];

    window.switchGoalPathway = function(index) {
        const item = goalsData[index];
        const badgeEl = document.getElementById('goal-badge');
        const timelineEl = document.getElementById('goal-timeline');
        const titleEl = document.getElementById('goal-title');
        const descEl = document.getElementById('goal-desc');
        const p1El = document.getElementById('goal-point-1');
        const p2El = document.getElementById('goal-point-2');
        const p3El = document.getElementById('goal-point-3');
        const m1El = document.getElementById('goal-metric-1');
        const m2El = document.getElementById('goal-metric-2');
        const m3El = document.getElementById('goal-metric-3');
        const imgEl = document.getElementById('goal-img');

        if (imgEl) {
            imgEl.style.opacity = '0';
            setTimeout(() => {
                imgEl.src = item.img;
                imgEl.style.opacity = '1';
            }, 180);
        }

        if (badgeEl) badgeEl.textContent = item.badge;
        if (timelineEl) timelineEl.textContent = item.timeline;
        if (titleEl) titleEl.textContent = item.title;
        if (descEl) descEl.textContent = item.desc;
        if (p1El) p1El.textContent = item.p1;
        if (p2El) p2El.textContent = item.p2;
        if (p3El) p3El.textContent = item.p3;
        if (m1El) m1El.textContent = item.m1;
        if (m2El) m2El.textContent = item.m2;
        if (m3El) m3El.textContent = item.m3;

        for (let i = 0; i < goalsData.length; i++) {
            const tab = document.getElementById('goal-tab-' + i);
            if (tab) {
                if (i === index) {
                    tab.className = "card-vibrant-active p-4 sm:p-5 rounded-2xl text-left transition-all duration-300 cursor-pointer group";
                } else {
                    tab.className = "card-vibrant p-4 sm:p-5 rounded-2xl text-left transition-all duration-300 cursor-pointer group";
                }
            }
        }
    };
})();
</script>
