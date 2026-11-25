<!-- ========================================================== -->
<!-- 1. TRAINING ZONES & FACILITY EXPERIENCE                    -->
<!-- ========================================================== -->
<section id="facility-zones" class="py-20 lg:py-28 bg-[#080a0f] relative overflow-hidden select-none border-t border-white/[0.08]">
    
    <!-- Giant Subtle Outline Watermark -->
    <div class="bg-watermark top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 text-[15vw] leading-none whitespace-nowrap opacity-25">
        FACILITY
    </div>

    <div class="max-w-7xl mx-auto px-6 sm:px-10 lg:px-12 relative z-10">
        
        <!-- Section Header -->
        <div class="text-center max-w-3xl mx-auto mb-16 lg:mb-20">
            <span class="inline-flex items-center gap-2 px-4 py-1.5 rounded-full badge-glow text-xs font-bold uppercase tracking-wider mb-4">
                <i class="fa-solid fa-dumbbell text-[#ff5e14]"></i>
                <span>THE GYM FACILITY</span>
            </span>
            <h2 class="font-heading text-3xl sm:text-5xl lg:text-6xl font-black text-white tracking-tight uppercase leading-[1.05] mb-5">
                Explore Our 4 <span class="text-gradient-orange">Training Zones</span>
            </h2>
            <p class="text-slate-300 text-sm sm:text-base md:text-lg leading-relaxed">
                Over 15,000 sq.ft of spacious, premium training floor. Built for people who take their health and strength seriously, with zero distractions.
            </p>
        </div>

        <!-- 4 Zone Selector Pills (Desktop & Mobile Tabs) -->
        <div class="grid grid-cols-2 lg:grid-cols-4 gap-3 sm:gap-4 mb-10 sm:mb-12">
            
            <!-- Zone 1 Tab -->
            <button 
                type="button" 
                onclick="switchFacilityZone(0)"
                id="zone-tab-0"
                class="card-vibrant-active p-4 sm:p-5 rounded-2xl text-left transition-all duration-300 cursor-pointer group"
            >
                <div class="flex items-center gap-3 mb-2">
                    <span id="zone-icon-0" class="w-8 h-8 rounded-lg bg-gradient-to-br from-[#ff7a1a] to-[#ff5e14] text-white flex items-center justify-center text-xs font-black shadow-md shadow-[#ff5e14]/30">
                        01
                    </span>
                    <span class="text-[10px] font-bold uppercase tracking-wider text-[#ff9e58]">Free Weights</span>
                </div>
                <h4 class="font-heading text-sm sm:text-base font-bold text-white group-hover:text-[#ff9e58] transition-colors line-clamp-1">
                    Olympic Lifting Arena
                </h4>
            </button>

            <!-- Zone 2 Tab -->
            <button 
                type="button" 
                onclick="switchFacilityZone(1)"
                id="zone-tab-1"
                class="card-vibrant p-4 sm:p-5 rounded-2xl text-left transition-all duration-300 cursor-pointer group"
            >
                <div class="flex items-center gap-3 mb-2">
                    <span id="zone-icon-1" class="w-8 h-8 rounded-lg bg-white/5 text-slate-300 flex items-center justify-center text-xs font-black border border-white/10">
                        02
                    </span>
                    <span class="text-[10px] font-bold uppercase tracking-wider text-slate-400">Machines</span>
                </div>
                <h4 class="font-heading text-sm sm:text-base font-bold text-white group-hover:text-[#ff9e58] transition-colors line-clamp-1">
                    Strength Machines Suite
                </h4>
            </button>

            <!-- Zone 3 Tab -->
            <button 
                type="button" 
                onclick="switchFacilityZone(2)"
                id="zone-tab-2"
                class="card-vibrant p-4 sm:p-5 rounded-2xl text-left transition-all duration-300 cursor-pointer group"
            >
                <div class="flex items-center gap-3 mb-2">
                    <span id="zone-icon-2" class="w-8 h-8 rounded-lg bg-white/5 text-slate-300 flex items-center justify-center text-xs font-black border border-white/10">
                        03
                    </span>
                    <span class="text-[10px] font-bold uppercase tracking-wider text-slate-400">Conditioning</span>
                </div>
                <h4 class="font-heading text-sm sm:text-base font-bold text-white group-hover:text-[#ff9e58] transition-colors line-clamp-1">
                    Sprint Turf & Boxing Ring
                </h4>
            </button>

            <!-- Zone 4 Tab -->
            <button 
                type="button" 
                onclick="switchFacilityZone(3)"
                id="zone-tab-3"
                class="card-vibrant p-4 sm:p-5 rounded-2xl text-left transition-all duration-300 cursor-pointer group"
            >
                <div class="flex items-center gap-3 mb-2">
                    <span id="zone-icon-3" class="w-8 h-8 rounded-lg bg-white/5 text-slate-300 flex items-center justify-center text-xs font-black border border-white/10">
                        04
                    </span>
                    <span class="text-[10px] font-bold uppercase tracking-wider text-cyan-400">Recovery</span>
                </div>
                <h4 class="font-heading text-sm sm:text-base font-bold text-white group-hover:text-cyan-300 transition-colors line-clamp-1">
                    Cold Plunge & Cedar Sauna
                </h4>
            </button>

        </div>

        <!-- Active Zone Feature Card (Dynamic Layout) -->
        <div class="card-vibrant rounded-3xl overflow-hidden shadow-2xl p-6 sm:p-8 lg:p-12 relative">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 lg:gap-12 items-center">
                
                <!-- Zone Details & Key Specs (7 Cols) -->
                <div class="lg:col-span-7 space-y-6">
                    <div class="inline-flex items-center gap-2 px-3.5 py-1 rounded-full badge-glow text-xs font-bold uppercase tracking-wider">
                        <i class="fa-solid fa-location-dot text-[#ff5e14]"></i>
                        <span id="zone-badge">ZONE 01 • OLYMPIC FREE WEIGHTS</span>
                    </div>

                    <h3 id="zone-title" class="font-heading text-2xl sm:text-4xl font-black text-white tracking-tight leading-tight">
                        Olympic Powerlifting & Free Weight Arena
                    </h3>

                    <p id="zone-desc" class="text-slate-300 text-sm sm:text-base leading-relaxed font-normal">
                        Certified Eleiko competition bars, 5 heavy-duty Olympic power racks, dedicated deadlift platforms with vibration-dampening oak wood inserts, and custom-machined urethane dumbbells from 2.5kg up to 60kg.
                    </p>

                    <!-- Key Hardware Specs Grid -->
                    <div class="grid grid-cols-1 sm:grid-cols-3 gap-3 pt-4 border-t border-white/10">
                        <div class="p-4 rounded-xl bg-white/[0.04] border border-white/10">
                            <span class="text-[10px] text-slate-400 font-bold uppercase tracking-wider block">Equipment Quality</span>
                            <span id="zone-spec-1" class="text-xs sm:text-sm font-black text-white block mt-0.5">Eleiko IPF Certified</span>
                        </div>
                        <div class="p-4 rounded-xl bg-white/[0.04] border border-white/10">
                            <span class="text-[10px] text-slate-400 font-bold uppercase tracking-wider block">Racks & Platforms</span>
                            <span id="zone-spec-2" class="text-xs sm:text-sm font-black text-gradient-orange block mt-0.5">5 Power Racks</span>
                        </div>
                        <div class="p-4 rounded-xl bg-white/[0.04] border border-white/10">
                            <span class="text-[10px] text-slate-400 font-bold uppercase tracking-wider block">Dumbbell Pairs</span>
                            <span id="zone-spec-3" class="text-xs sm:text-sm font-black text-white block mt-0.5">2.5kg to 60kg Sets</span>
                        </div>
                    </div>

                    <!-- CTA -->
                    <div class="pt-4 flex items-center flex-wrap gap-4">
                        <a 
                            href="#free-trial" 
                            class="btn-glow-orange inline-flex items-center gap-2 px-7 py-3.5 rounded-xl text-white font-bold text-sm tracking-wide shadow-lg cursor-pointer"
                        >
                            <span>Book A Free Walkthrough</span>
                            <i class="fa-solid fa-arrow-right text-xs"></i>
                        </a>

                        <a 
                            href="#pricing" 
                            class="px-7 py-3.5 rounded-xl border border-white/20 hover:border-white text-white font-bold text-sm transition-all cursor-pointer"
                        >
                            View Memberships
                        </a>
                    </div>
                </div>

                <!-- Zone Showcase Visual (5 Cols) -->
                <div class="lg:col-span-5 relative">
                    <div class="relative rounded-2xl overflow-hidden aspect-[4/3] sm:aspect-[16/10] lg:aspect-[4/3] border border-white/15 shadow-2xl group">
                        <img 
                            id="zone-img"
                            src="{{ asset('images/male_deadlift.jpg') }}" 
                            alt="Training Zone Facility" 
                            class="w-full h-full object-cover object-center filter brightness-105 contrast-105 group-hover:scale-105 transition-all duration-700"
                        >
                        <div class="absolute inset-0 bg-gradient-to-t from-black/85 via-black/20 to-transparent pointer-events-none"></div>
                        <div class="absolute bottom-4 left-4 right-4 flex items-center justify-between text-xs text-white">
                            <span class="font-bold flex items-center gap-1.5 bg-black/70 backdrop-blur-md px-3 py-1 rounded-full border border-white/10">
                                <span class="w-2 h-2 rounded-full bg-emerald-400 animate-pulse"></span>
                                <span>Status: Open Access</span>
                            </span>
                            <span id="zone-status-badge" class="font-bold text-[#ff9e58] bg-black/70 backdrop-blur-md px-3 py-1 rounded-full border border-[#ff5e14]/40">
                                ZONE 01
                            </span>
                        </div>
                    </div>
                </div>

            </div>
        </div>

    </div>
</section>

<!-- Facility Zone Controller Script -->
<script>
(function() {
    const zonesData = [
        {
            badge: "ZONE 01 • OLYMPIC FREE WEIGHTS",
            statusBadge: "ZONE 01",
            title: "Olympic Powerlifting & Free Weight Arena",
            desc: "Certified Eleiko competition bars, 5 heavy-duty Olympic power racks, dedicated deadlift platforms with vibration-dampening oak wood inserts, and custom-machined urethane dumbbells from 2.5kg up to 60kg.",
            spec1: "Eleiko IPF Certified",
            spec2: "5 Power Racks",
            spec3: "2.5kg to 60kg Sets",
            img: "{{ asset('images/male_deadlift.jpg') }}"
        },
        {
            badge: "ZONE 02 • STRENGTH MACHINES",
            statusBadge: "ZONE 02",
            title: "Arsenal & Plate-Loaded Machine Fleet",
            desc: "Biomechanically designed converging and diverging plate-loaded machines. Hit your chest, back, and legs with maximum muscle tension while protecting your joints and lower back.",
            spec1: "Arsenal Strength Units",
            spec2: "Converging Axes",
            spec3: "Full Body Machine Line",
            img: "{{ asset('images/coach_portrait_male.jpg') }}"
        },
        {
            badge: "ZONE 03 • ATHLETIC CONDITIONING",
            statusBadge: "ZONE 03",
            title: "Sprint Turf, Sleds & Boxing Ring",
            desc: "30-meter high-density sprint turf lane equipped with heavy Rogue dog sleds, battle ropes, plyometric jump boxes, and a dedicated boxing ring with heavy water-filled aqua bags.",
            spec1: "30m Sprint Turf",
            spec2: "Rogue Heavy Dog Sleds",
            spec3: "Aqua Heavy Bags",
            img: "{{ asset('images/boxer_male.jpg') }}"
        },
        {
            badge: "ZONE 04 • CONTRAST SPA RECOVERY",
            statusBadge: "ZONE 04",
            title: "Sub-Zero Cold Plunge & Cedar Sauna",
            desc: "Accelerate recovery with sub-zero 3°C cold plunge tubs paired with a 90°C Finnish dry cedar sauna. Flushes systemic muscle soreness and leaves you refreshed for your next session.",
            spec1: "3°C Cold Plunge",
            spec2: "90°C Finnish Sauna",
            spec3: "Private Showers & Towels",
            img: "{{ asset('images/sauna_spa.jpg') }}"
        }
    ];

    window.switchFacilityZone = function(index) {
        const item = zonesData[index];
        const badgeEl = document.getElementById('zone-badge');
        const statusBadgeEl = document.getElementById('zone-status-badge');
        const titleEl = document.getElementById('zone-title');
        const descEl = document.getElementById('zone-desc');
        const s1El = document.getElementById('zone-spec-1');
        const s2El = document.getElementById('zone-spec-2');
        const s3El = document.getElementById('zone-spec-3');
        const imgEl = document.getElementById('zone-img');

        if (imgEl) {
            imgEl.style.opacity = '0';
            setTimeout(() => {
                imgEl.src = item.img;
                imgEl.style.opacity = '1';
            }, 180);
        }

        if (badgeEl) badgeEl.textContent = item.badge;
        if (statusBadgeEl) statusBadgeEl.textContent = item.statusBadge;
        if (titleEl) titleEl.textContent = item.title;
        if (descEl) descEl.textContent = item.desc;
        if (s1El) s1El.textContent = item.spec1;
        if (s2El) s2El.textContent = item.spec2;
        if (s3El) s3El.textContent = item.spec3;

        for (let i = 0; i < zonesData.length; i++) {
            const tab = document.getElementById('zone-tab-' + i);
            const icon = document.getElementById('zone-icon-' + i);

            if (tab && icon) {
                if (i === index) {
                    tab.className = "card-vibrant-active p-4 sm:p-5 rounded-2xl text-left transition-all duration-300 cursor-pointer group";
                    icon.className = "w-8 h-8 rounded-lg bg-gradient-to-br from-[#ff7a1a] to-[#ff5e14] text-white flex items-center justify-center text-xs font-black shadow-md shadow-[#ff5e14]/30";
                } else {
                    tab.className = "card-vibrant p-4 sm:p-5 rounded-2xl text-left transition-all duration-300 cursor-pointer group";
                    icon.className = "w-8 h-8 rounded-lg bg-white/5 text-slate-300 flex items-center justify-center text-xs font-black border border-white/10";
                }
            }
        }
    };
})();
</script>
