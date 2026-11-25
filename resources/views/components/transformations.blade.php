<!-- ========================================================== -->
<!-- 10. MEMBER TRANSFORMATIONS & MILESTONES                    -->
<!-- (Interactive Verified Athlete Case Studies - 100% Male)    -->
<!-- ========================================================== -->
<section id="transformations" class="py-20 lg:py-28 bg-[#06080d] relative overflow-hidden select-none border-t border-white/[0.08]">
    
    <!-- Giant Subtle Outline Watermark -->
    <div class="bg-watermark top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 text-[15vw] leading-none whitespace-nowrap opacity-25">
        RESULTS
    </div>

    <div class="max-w-7xl mx-auto px-6 sm:px-10 lg:px-12 relative z-10">
        
        <!-- Section Header -->
        <div class="flex flex-col md:flex-row md:items-end justify-between gap-6 mb-14">
            <div class="max-w-2xl">
                <span class="inline-flex items-center gap-2 px-4 py-1.5 rounded-full badge-glow text-xs font-black uppercase tracking-widest mb-4 shadow-sm">
                    <i class="fa-solid fa-trophy text-[#ff5e14]"></i>
                    <span>VERIFIED ATHLETE MILESTONES</span>
                </span>
                <h2 class="font-heading text-3xl sm:text-5xl lg:text-6xl font-black text-white tracking-tight uppercase leading-[1.05]">
                    Real Transformations. <br class="hidden sm:inline">
                    <span class="text-gradient-orange">Zero Shortcuts.</span>
                </h2>
                <p class="text-slate-300 text-sm sm:text-base leading-relaxed mt-4">
                    No crash diets, no gimmicks. Pure mechanical tension, calibrated macro science, and contrast recovery. Explore real journeys below.
                </p>
            </div>

            <!-- Athlete Selector Pills (Desktop & Mobile) -->
            <div class="flex items-center gap-2 p-1.5 rounded-2xl bg-[#111726] border border-white/15 shrink-0 shadow-lg">
                <button 
                    type="button" 
                    onclick="switchTransformation(0)" 
                    id="trans-tab-0"
                    class="trans-tab-btn px-5 py-2.5 rounded-xl text-xs font-bold text-white btn-glow-orange shadow-md transition-all cursor-pointer"
                >
                    Julian W.
                </button>
                <button 
                    type="button" 
                    onclick="switchTransformation(1)" 
                    id="trans-tab-1"
                    class="trans-tab-btn px-5 py-2.5 rounded-xl text-xs font-bold text-slate-400 hover:text-white transition-all cursor-pointer"
                >
                    Marcus V.
                </button>
                <button 
                    type="button" 
                    onclick="switchTransformation(2)" 
                    id="trans-tab-2"
                    class="trans-tab-btn px-5 py-2.5 rounded-xl text-xs font-bold text-slate-400 hover:text-white transition-all cursor-pointer"
                >
                    Daniel R.
                </button>
            </div>
        </div>

        <!-- Transformation Showcase Layout -->
        <div class="card-vibrant rounded-3xl overflow-hidden shadow-2xl p-6 sm:p-8 lg:p-12 relative">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 lg:gap-14 items-center">
                
                <!-- Left: Transformation Photo Showcase (6 cols) -->
                <div class="lg:col-span-6 relative">
                    <div class="relative rounded-2xl overflow-hidden aspect-[4/3] sm:aspect-[16/11] lg:aspect-[4/3] border border-white/15 group shadow-2xl">
                        <img 
                            id="trans-img"
                            src="{{ asset('images/member-transformation.png') }}" 
                            alt="Athlete Transformation" 
                            class="w-full h-full object-cover object-center filter brightness-105 contrast-110 group-hover:scale-105 transition-all duration-700"
                            onerror="this.onerror=null; this.src='{{ asset('images/athlete-muscular.jpg') }}';"
                        >
                        <div class="absolute inset-0 bg-gradient-to-t from-black/85 via-black/20 to-transparent pointer-events-none"></div>
                        
                        <!-- Badges on image -->
                        <div class="absolute bottom-4 left-4 right-4 flex items-center justify-between text-xs text-white">
                            <span class="font-bold flex items-center gap-1.5 bg-[#0a0e17]/85 backdrop-blur-md px-3.5 py-1.5 rounded-full border border-white/15 shadow-md">
                                <span class="w-2 h-2 rounded-full bg-emerald-400 animate-pulse shadow-[0_0_8px_#34d399]"></span>
                                <span id="trans-badge-text">DEXA Scan Verified</span>
                            </span>
                            <span id="trans-timeline-badge" class="font-black text-[#ff9e58] bg-[#0a0e17]/85 backdrop-blur-md px-3.5 py-1.5 rounded-full border border-[#ff5e14]/40 shadow-md">
                                35 WEEKS
                            </span>
                        </div>
                    </div>
                </div>

                <!-- Right: Detailed Metrics & Story (6 cols) -->
                <div class="lg:col-span-6 space-y-6">
                    <div>
                        <span id="trans-category" class="text-xs font-black uppercase tracking-wider text-[#ff9e58] block mb-1">
                            HYPERTROPHY & LEAN BULK
                        </span>
                        <h3 id="trans-name" class="font-heading text-2xl sm:text-4xl font-black text-white tracking-tight">
                            Julian Wood, 24
                        </h3>
                        <p id="trans-quote" class="text-slate-300 text-sm sm:text-base leading-relaxed mt-3 italic font-normal">
                            "The structured periodization and recovery contrast baths transformed my lifts. In 35 weeks I went from struggling with 70kg on bench to hitting a clean 130kg double."
                        </p>
                    </div>

                    <!-- Metrics Duel Grid -->
                    <div class="grid grid-cols-2 sm:grid-cols-3 gap-3.5 pt-2">
                        <!-- Stat 1 -->
                        <div class="p-4 rounded-2xl bg-[#0a0e17]/80 border border-white/10 shadow-md">
                            <span class="text-[10px] text-slate-400 font-bold uppercase tracking-wider block">Body Weight</span>
                            <div class="flex items-baseline gap-1 mt-0.5">
                                <span id="trans-stat1-val" class="text-sm sm:text-base font-black text-white">90kg → 78kg</span>
                            </div>
                            <span id="trans-stat1-sub" class="text-[11px] text-emerald-400 font-bold block mt-0.5">-12kg Recomp</span>
                        </div>

                        <!-- Stat 2 -->
                        <div class="p-4 rounded-2xl bg-[#0a0e17]/80 border border-white/10 shadow-md">
                            <span class="text-[10px] text-slate-400 font-bold uppercase tracking-wider block">Body Fat %</span>
                            <div class="flex items-baseline gap-1 mt-0.5">
                                <span id="trans-stat2-val" class="text-sm sm:text-base font-black text-white">28% → 12%</span>
                            </div>
                            <span id="trans-stat2-sub" class="text-[11px] text-emerald-400 font-bold block mt-0.5">-16% Body Fat</span>
                        </div>

                        <!-- Stat 3 -->
                        <div class="col-span-2 sm:col-span-1 p-4 rounded-2xl bg-[#0a0e17]/80 border border-white/10 shadow-md">
                            <span class="text-[10px] text-slate-400 font-bold uppercase tracking-wider block">Key Lift Gain</span>
                            <div class="flex items-baseline gap-1 mt-0.5">
                                <span id="trans-stat3-val" class="text-sm sm:text-base font-black text-[#ff9e58]">+60kg</span>
                            </div>
                            <span id="trans-stat3-sub" class="text-[11px] text-slate-400 block mt-0.5">Bench Press PR</span>
                        </div>
                    </div>

                    <!-- Coach and Protocol Note -->
                    <div class="p-4 rounded-2xl bg-[#111726]/90 border border-white/15 flex items-center justify-between shadow-lg">
                        <div>
                            <span class="text-[10px] text-slate-400 uppercase font-bold block">Supervising Coach</span>
                            <span id="trans-coach" class="text-xs font-black text-white block mt-0.5">Coach Marcus (CSCS)</span>
                        </div>
                        <a 
                            href="#free-trial" 
                            class="btn-glow-orange inline-flex items-center gap-2 px-5 py-2.5 rounded-xl text-white text-xs font-bold transition-all shadow-md"
                        >
                            <span>Start Similar Path</span>
                            <i class="fa-solid fa-arrow-right text-[10px]"></i>
                        </a>
                    </div>

                </div>

            </div>
        </div>

    </div>
</section>

<!-- Transformations Controller Script -->
<script>
(function() {
    const data = [
        {
            name: "Julian Wood, 24",
            cat: "HYPERTROPHY & LEAN BULK",
            quote: "\"The structured periodization and recovery contrast baths transformed my lifts. In 35 weeks I went from struggling with 70kg on bench to hitting a clean 130kg double.\"",
            badgeText: "DEXA Scan Verified",
            timeline: "35 WEEKS",
            img: "{{ asset('images/member-transformation.png') }}",
            fallback: "{{ asset('images/athlete-muscular.jpg') }}",
            s1Val: "90kg → 78kg",
            s1Sub: "-12kg Recomp",
            s2Val: "28% → 12%",
            s2Sub: "-16% Body Fat",
            s3Val: "+60kg",
            s3Sub: "Bench Press PR",
            coach: "Coach Marcus (CSCS)"
        },
        {
            name: "Marcus Vance, 31",
            cat: "ATHLETIC CONDITIONING & COMBAT",
            quote: "\"Coming from chronic lower back pain, the coaches dialed in my hip biomechanics. My resting heart rate dropped into the 40s and my sled power doubled.\"",
            badgeText: "VO2 Max Tested",
            timeline: "24 WEEKS",
            img: "{{ asset('images/athlete-intense.jpg') }}",
            fallback: "{{ asset('images/coach_david.jpg') }}",
            s1Val: "76 → 49 bpm",
            s1Sub: "Resting Heart Rate",
            s2Val: "38 → 54 ml/kg",
            s2Sub: "+42% VO2 Max",
            s3Val: "200kg",
            s3Sub: "Sprint Sled Push",
            coach: "Coach David (USAW)"
        },
        {
            name: "Daniel Ross, 27",
            cat: "POWERLIFTING & BODY RECOMP",
            quote: "\"The Olympic lifting arena and oak deadlift platforms unlocked my potential. Added 55kg to my deadlift in 16 weeks with zero lower back strain.\"",
            badgeText: "InBody 770 Confirmed",
            timeline: "16 WEEKS",
            img: "{{ asset('images/male_athlete_recomp.jpg') }}",
            fallback: "{{ asset('images/male_deadlift.jpg') }}",
            s1Val: "84kg → 79kg",
            s1Sub: "Lean Mass Gain",
            s2Val: "22% → 11%",
            s2Sub: "-11% Body Fat",
            s3Val: "220kg",
            s3Sub: "Deadlift Milestone",
            coach: "Coach Alex (Kinesiology)"
        }
    ];

    window.switchTransformation = function(index) {
        const item = data[index];
        const imgEl = document.getElementById('trans-img');
        const nameEl = document.getElementById('trans-name');
        const catEl = document.getElementById('trans-category');
        const quoteEl = document.getElementById('trans-quote');
        const bTextEl = document.getElementById('trans-badge-text');
        const bTimeEl = document.getElementById('trans-timeline-badge');
        const s1ValEl = document.getElementById('trans-stat1-val');
        const s1SubEl = document.getElementById('trans-stat1-sub');
        const s2ValEl = document.getElementById('trans-stat2-val');
        const s2SubEl = document.getElementById('trans-stat2-sub');
        const s3ValEl = document.getElementById('trans-stat3-val');
        const s3SubEl = document.getElementById('trans-stat3-sub');
        const coachEl = document.getElementById('trans-coach');

        if (imgEl) {
            imgEl.style.opacity = '0';
            setTimeout(() => {
                imgEl.src = item.img;
                imgEl.onerror = () => { imgEl.src = item.fallback; };
                imgEl.style.opacity = '1';
            }, 180);
        }

        if (nameEl) nameEl.textContent = item.name;
        if (catEl) catEl.textContent = item.cat;
        if (quoteEl) quoteEl.textContent = item.quote;
        if (bTextEl) bTextEl.textContent = item.badgeText;
        if (bTimeEl) bTimeEl.textContent = item.timeline;
        if (s1ValEl) s1ValEl.textContent = item.s1Val;
        if (s1SubEl) s1SubEl.textContent = item.s1Sub;
        if (s2ValEl) s2ValEl.textContent = item.s2Val;
        if (s2SubEl) s2SubEl.textContent = item.s2Sub;
        if (s3ValEl) s3ValEl.textContent = item.s3Val;
        if (s3SubEl) s3SubEl.textContent = item.s3Sub;
        if (coachEl) coachEl.textContent = item.coach;

        // Tabs styling
        for (let i = 0; i < data.length; i++) {
            const btn = document.getElementById('trans-tab-' + i);
            if (btn) {
                if (i === index) {
                    btn.className = "trans-tab-btn px-5 py-2.5 rounded-xl text-xs font-bold text-white btn-glow-orange shadow-md transition-all cursor-pointer";
                } else {
                    btn.className = "trans-tab-btn px-5 py-2.5 rounded-xl text-xs font-bold text-slate-400 hover:text-white transition-all cursor-pointer";
                }
            }
        }
    };
})();
</script>
