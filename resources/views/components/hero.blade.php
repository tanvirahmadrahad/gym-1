<!-- ========================================================== -->
<!-- GYMSTICK HERO SECTION (Crafted Athletic Gym Showcase)      -->
<!-- ========================================================== -->
<section id="hero" class="relative bg-[#080a0f] min-h-[700px] sm:min-h-[760px] lg:min-h-[840px] xl:min-h-[890px] flex items-center overflow-hidden select-none">
    
    <!-- Giant Subtle Outline Watermark -->
    <div class="bg-watermark top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 text-[14vw] leading-none whitespace-nowrap opacity-40">
        GYMSTICK
    </div>

    <!-- 1. FULL-BLEED CINEMATIC ATHLETE BACKGROUND IMAGES (3 SLIDES) -->
    <div class="absolute inset-0 z-0">
        <!-- Slide 1 Background -->
        <div id="hero-slide-bg-0" class="hero-bg-layer absolute inset-0 transition-opacity duration-1000 opacity-100 z-10">
            <img 
                src="{{ asset('images/hero-slide-1.jpg') }}" 
                alt="Gymstick Strength Athlete" 
                class="w-full h-full object-cover object-right lg:object-[center_35%] filter brightness-105 contrast-[1.12]"
                loading="eager"
            >
        </div>

        <!-- Slide 2 Background -->
        <div id="hero-slide-bg-1" class="hero-bg-layer absolute inset-0 transition-opacity duration-1000 opacity-0 z-0 pointer-events-none">
            <img 
                src="{{ asset('images/hero-slide-2.jpg') }}" 
                alt="Gymstick Workout" 
                class="w-full h-full object-cover object-right lg:object-[center_35%] filter brightness-105 contrast-[1.12]"
                loading="lazy"
            >
        </div>

        <!-- Slide 3 Background -->
        <div id="hero-slide-bg-2" class="hero-bg-layer absolute inset-0 transition-opacity duration-1000 opacity-0 z-0 pointer-events-none">
            <img 
                src="{{ asset('images/hero-slide-3.jpg') }}" 
                alt="Gymstick Athletic Power" 
                class="w-full h-full object-cover object-right lg:object-[center_35%] filter brightness-105 contrast-[1.12]"
                loading="lazy"
            >
        </div>

        <!-- Left Gradient Vignette: Rich athletic fade ensuring ultra-sharp readable typography -->
        <div class="absolute inset-y-0 left-0 w-full lg:w-[58%] bg-gradient-to-r from-[#080a0f] via-[#080a0f]/90 to-transparent z-10 pointer-events-none"></div>
        <div class="absolute inset-x-0 bottom-0 h-40 bg-gradient-to-t from-[#080a0f] to-transparent z-10 pointer-events-none"></div>
        <div class="absolute inset-x-0 top-0 h-28 bg-gradient-to-b from-[#080a0f]/80 to-transparent z-10 pointer-events-none"></div>
    </div>

    <!-- 2. MAIN HERO CONTENT CONTAINER -->
    <div class="relative w-full max-w-7xl mx-auto px-6 sm:px-10 lg:px-12 py-20 sm:py-24 lg:py-28 z-20">
        <div class="max-w-2xl lg:max-w-3xl">
            
            <!-- Sleek Badge -->
            <div class="inline-flex items-center gap-2.5 px-4 py-2 rounded-full badge-glow text-xs sm:text-sm font-bold uppercase tracking-wider mb-7 shadow-sm">
                <span class="w-2.5 h-2.5 rounded-full bg-[#ff5e14] animate-pulse"></span>
                <span class="text-[#ff9e58]">PREMIUM STRENGTH & CONDITIONING CLUB</span>
            </div>

            <!-- 3-Line Headline with Crisp Fire Highlight -->
            <h1 id="hero-title" class="font-heading text-4xl sm:text-6xl md:text-6xl lg:text-[4.35rem] xl:text-[4.85rem] font-black text-white tracking-tight leading-[1.08] mb-6 transition-all duration-500 drop-shadow-lg">
                Achieve Your <br>
                <span class="whitespace-nowrap">Fitness <span class="text-gradient-orange">Goals With</span></span> <br>
                <span class="text-gradient-orange">Gymstick</span>
            </h1>

            <!-- Authentic, inspiring gym copy - NO AI essay talk -->
            <p id="hero-desc" class="text-slate-300 text-base sm:text-lg leading-relaxed max-w-xl mb-10 font-normal transition-all duration-500">
                Train with certified strength coaches, calibrated Olympic steel, and private recovery saunas. Whether you are building muscle, dropping fat, or breaking PRs — Gymstick is where serious fitness happens.
            </p>

            <!-- Dual Action Buttons -->
            <div class="flex items-center flex-wrap gap-4 sm:gap-5 mb-12">
                <!-- Start Your Journey -->
                <a 
                    href="#free-trial" 
                    class="btn-glow-orange px-8 sm:px-9 py-4 sm:py-4.5 rounded-xl text-white font-black text-sm sm:text-base tracking-wider uppercase transition-all duration-300 text-center cursor-pointer flex items-center gap-3 shadow-xl"
                >
                    <span>Claim Free 1-Day Pass</span>
                    <i class="fa-solid fa-arrow-right text-xs"></i>
                </a>

                <!-- Explore Facility -->
                <a 
                    href="#facility-zones" 
                    class="px-8 sm:px-9 py-4 sm:py-4.5 rounded-xl border border-white/20 hover:border-[#ff5e14]/60 bg-white/[0.04] hover:bg-white/[0.08] backdrop-blur-md text-white font-bold text-sm sm:text-base transition-all duration-300 text-center cursor-pointer shadow-md"
                >
                    Explore Facility
                </a>
            </div>

            <!-- Authentic Proof Strip -->
            <div class="pt-7 border-t border-white/10 flex items-center flex-wrap gap-6 sm:gap-8 text-xs sm:text-sm text-slate-300">
                <div class="flex items-center gap-2.5">
                    <span class="w-2.5 h-2.5 rounded-full bg-emerald-400"></span>
                    <strong class="text-white font-bold">2,400+ Active Members</strong>
                </div>
                <div class="flex items-center gap-2.5">
                    <i class="fa-solid fa-star text-amber-400"></i>
                    <strong class="text-white font-bold">4.9 / 5.0 Google Rating</strong>
                </div>
                <div class="flex items-center gap-2.5">
                    <i class="fa-solid fa-dumbbell text-[#ff5e14]"></i>
                    <span class="text-slate-300 font-medium">Eleiko & Rogue Equipment</span>
                </div>
            </div>

        </div>
    </div>

    <!-- 3. SLEEK SIDE SLIDER CONTROLS -->
    <div class="absolute top-1/2 -translate-y-1/2 right-6 sm:right-10 z-30 flex flex-col items-end gap-5 pointer-events-auto">
        
        <!-- Slide 01 -->
        <button 
            type="button" 
            onclick="switchHeroSlide(0)" 
            id="slide-indicator-0"
            class="group flex items-center gap-3 text-sm font-black transition-all cursor-pointer text-white drop-shadow-lg"
            aria-label="Switch to Slide 01"
        >
            <span class="tracking-widest font-mono text-xs sm:text-sm">01</span>
            <span id="slide-line-0" class="w-12 h-[3px] bg-gradient-to-r from-[#ff7a1a] to-[#ff5e14] shadow-[0_0_12px_#ff5e14] transition-all group-hover:w-16 rounded-full"></span>
        </button>

        <!-- Slide 02 -->
        <button 
            type="button" 
            onclick="switchHeroSlide(1)" 
            id="slide-indicator-1"
            class="group flex items-center gap-3 text-sm font-black transition-all cursor-pointer text-white/40 hover:text-white drop-shadow-lg"
            aria-label="Switch to Slide 02"
        >
            <span class="tracking-widest font-mono text-xs sm:text-sm">02</span>
            <span id="slide-line-1" class="w-6 h-[2px] bg-white/30 transition-all group-hover:w-10 group-hover:bg-[#ff5e14] rounded-full"></span>
        </button>

        <!-- Slide 03 -->
        <button 
            type="button" 
            onclick="switchHeroSlide(2)" 
            id="slide-indicator-2"
            class="group flex items-center gap-3 text-sm font-black transition-all cursor-pointer text-white/40 hover:text-white drop-shadow-lg"
            aria-label="Switch to Slide 03"
        >
            <span class="tracking-widest font-mono text-xs sm:text-sm">03</span>
            <span id="slide-line-2" class="w-6 h-[2px] bg-white/30 transition-all group-hover:w-10 group-hover:bg-[#ff5e14] rounded-full"></span>
        </button>

    </div>

    <!-- 4. FLOATING WHATSAPP BUTTON (Bottom Right - Fixed Overlay) -->
    <a 
        href="https://wa.me/8801700000000?text=Hello%20Gymstick,%20I%20would%20like%20to%20start%20my%20fitness%20journey!" 
        target="_blank"
        rel="noopener noreferrer"
        class="fixed bottom-6 right-6 z-50 flex items-center justify-center w-14 h-14 bg-gradient-to-tr from-[#128c7e] to-[#25d366] hover:to-[#2ee672] text-white rounded-full shadow-[0_4px_25px_rgba(37,211,102,0.5)] hover:scale-110 active:scale-95 transition-all duration-300 group"
        aria-label="Chat with Gymstick Concierge on WhatsApp"
    >
        <i class="fa-brands fa-whatsapp text-2xl group-hover:rotate-12 transition-transform"></i>
        <span class="absolute -top-1 -right-1 flex h-4 w-4">
            <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-emerald-400 opacity-75"></span>
            <span class="relative inline-flex rounded-full h-4 w-4 bg-emerald-500 border-2 border-[#080a0f]"></span>
        </span>
    </a>

</section>

<!-- ========================================================== -->
<!-- HERO SLIDER LOGIC                                          -->
<!-- ========================================================== -->
<script>
(function() {
    let currentSlide = 0;
    const totalSlides = 3;
    let autoSlideTimer = null;
    const intervalMs = 6500;

    const slidesMeta = [
        {
            title: 'Achieve Your <br><span class="whitespace-nowrap">Fitness <span class="text-gradient-orange">Goals With</span></span> <br><span class="text-gradient-orange">Gymstick</span>',
            desc: 'Train with certified strength coaches, calibrated Olympic steel, and private recovery saunas. Whether you are building muscle, dropping fat, or breaking PRs — Gymstick is where serious fitness happens.'
        },
        {
            title: 'Structured Training <br><span class="whitespace-nowrap">Tailored To <span class="text-gradient-orange">Your Body</span></span> <br><span class="text-gradient-orange">& Lifestyle</span>',
            desc: 'Stop guessing your workouts. Get structured lifting routines, personalized nutrition targets, and real-time form coaching from trainers who walk the floor with you.'
        },
        {
            title: 'Built For Real <br><span class="whitespace-nowrap">Lifters Who <span class="text-gradient-orange">Demand Pure</span></span> <br><span class="text-gradient-orange">Results</span>',
            desc: 'From Olympic powerlifting platforms and 60kg dumbbells to sub-zero cold plunge tubs, experience the ultimate gym built for focused athletes.'
        }
    ];

    window.switchHeroSlide = function(index) {
        if (index < 0) index = totalSlides - 1;
        if (index >= totalSlides) index = 0;
        currentSlide = index;

        // 1. Cross-fade background layers
        for (let i = 0; i < totalSlides; i++) {
            const bgEl = document.getElementById('hero-slide-bg-' + i);
            const indEl = document.getElementById('slide-indicator-' + i);
            const lineEl = document.getElementById('slide-line-' + i);

            if (bgEl) {
                if (i === currentSlide) {
                    bgEl.classList.remove('opacity-0', 'pointer-events-none', 'z-0');
                    bgEl.classList.add('opacity-100', 'z-10');
                } else {
                    bgEl.classList.remove('opacity-100', 'z-10');
                    bgEl.classList.add('opacity-0', 'pointer-events-none', 'z-0');
                }
            }

            if (indEl && lineEl) {
                if (i === currentSlide) {
                    indEl.className = "group flex items-center gap-3 text-sm font-black transition-all cursor-pointer text-white drop-shadow-lg";
                    lineEl.className = "w-12 h-[3px] bg-gradient-to-r from-[#ff7a1a] to-[#ff5e14] shadow-[0_0_12px_#ff5e14] transition-all group-hover:w-16 rounded-full";
                } else {
                    indEl.className = "group flex items-center gap-3 text-sm font-black transition-all cursor-pointer text-white/40 hover:text-white drop-shadow-lg";
                    lineEl.className = "w-6 h-[2px] bg-white/30 transition-all group-hover:w-10 group-hover:bg-[#ff5e14] rounded-full";
                }
            }
        }

        // 2. Smooth title and desc transition
        const titleEl = document.getElementById('hero-title');
        const descEl = document.getElementById('hero-desc');
        const meta = slidesMeta[currentSlide];

        if (titleEl && meta) {
            titleEl.style.opacity = '0';
            titleEl.style.transform = 'translateY(6px)';
            setTimeout(() => {
                titleEl.innerHTML = meta.title;
                titleEl.style.opacity = '1';
                titleEl.style.transform = 'translateY(0)';
            }, 200);
        }

        if (descEl && meta) {
            descEl.style.opacity = '0';
            setTimeout(() => {
                descEl.textContent = meta.desc;
                descEl.style.opacity = '1';
            }, 200);
        }

        resetHeroTimer();
    };

    window.nextHeroSlide = function() {
        switchHeroSlide(currentSlide + 1);
    };

    window.prevHeroSlide = function() {
        switchHeroSlide(currentSlide - 1);
    };

    function resetHeroTimer() {
        if (autoSlideTimer) clearInterval(autoSlideTimer);
        autoSlideTimer = setInterval(() => {
            nextHeroSlide();
        }, intervalMs);
    }

    const heroSection = document.getElementById('hero');
    if (heroSection) {
        heroSection.addEventListener('mouseenter', () => {
            if (autoSlideTimer) clearInterval(autoSlideTimer);
        });
        heroSection.addEventListener('mouseleave', () => {
            resetHeroTimer();
        });
    }

    resetHeroTimer();
})();
</script>
