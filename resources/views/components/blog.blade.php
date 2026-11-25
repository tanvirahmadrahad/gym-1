<!-- ========================================================== -->
<!-- 16. LATEST FITNESS INSIGHTS & ARTICLES                     -->
<!-- (Gymstick Athletic Journal & Training Science)             -->
<!-- ========================================================== -->
<section id="blog" class="py-20 lg:py-28 bg-[#06080d] relative overflow-hidden select-none border-t border-white/[0.08]">
    
    <!-- Giant Subtle Outline Watermark -->
    <div class="bg-watermark top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 text-[15vw] leading-none whitespace-nowrap opacity-25">
        INSIGHTS
    </div>

    <div class="max-w-7xl mx-auto px-6 sm:px-10 lg:px-12 relative z-10">
        
        <!-- Header -->
        <div class="text-center max-w-3xl mx-auto mb-16 lg:mb-20">
            <span class="inline-flex items-center gap-2 px-4 py-1.5 rounded-full badge-glow text-xs font-black uppercase tracking-widest mb-4 shadow-sm">
                <i class="fa-solid fa-book-open text-[#ff5e14]"></i>
                <span>ATHLETIC JOURNAL</span>
            </span>
            <h2 class="font-heading text-3xl sm:text-5xl lg:text-6xl font-black text-white tracking-tight uppercase leading-[1.05] mb-5">
                Latest Training <span class="text-gradient-orange">Insights</span>
            </h2>
            <p class="text-slate-300 text-sm sm:text-base md:text-lg leading-relaxed">
                Scientific principles on hypertrophy, central nervous system recovery, and biomechanics written directly by our coaching collective.
            </p>
        </div>

        <!-- 3 Blog Cards Grid -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 items-stretch">
            
            <!-- Blog 1 -->
            <article class="card-vibrant rounded-3xl overflow-hidden hover:border-[#ff5e14]/60 transition-all duration-300 group flex flex-col justify-between shadow-2xl">
                <div>
                    <a href="{{ route('blog.show', 'maximize-muscle-recovery-after-intense-session') }}" class="block h-52 sm:h-56 overflow-hidden relative">
                        <img 
                            src="{{ asset('images/male_bicep_curl.jpg') }}" 
                            alt="Contrast Hydrotherapy & Muscle Recovery" 
                            loading="lazy"
                            class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700 filter brightness-105 contrast-105"
                            onerror="this.onerror=null; this.src='{{ asset('images/man-dumbbell.jpg') }}';"
                        >
                        <div class="absolute inset-0 bg-gradient-to-t from-[#0c101a] via-transparent to-transparent"></div>
                    </a>

                    <div class="p-6 sm:p-7">
                        <div class="flex items-center gap-3 text-xs mb-3">
                            <span class="px-3 py-1 rounded-full badge-glow text-[#ff9e58] font-black uppercase text-[10px]">
                                Recovery Science
                            </span>
                            <span class="text-slate-400 flex items-center gap-1.5 text-xs">
                                <i class="fa-regular fa-clock text-[#ff5e14]"></i>
                                5 min read
                            </span>
                        </div>

                        <h3 class="font-heading text-lg sm:text-xl font-bold text-white group-hover:text-[#ff9e58] transition-colors leading-snug">
                            <a href="{{ route('blog.show', 'maximize-muscle-recovery-after-intense-session') }}">
                                How to Maximize Muscle Recovery with Contrast Hydrotherapy
                            </a>
                        </h3>

                        <p class="text-xs text-slate-300 leading-relaxed mt-2.5">
                            Why combining 3°C cold water immersion with 90°C dry sauna flushes metabolic byproducts and accelerates central nervous system repair.
                        </p>
                    </div>
                </div>

                <div class="p-6 sm:p-7 pt-0 border-t border-white/10">
                    <a 
                        href="{{ route('blog.show', 'maximize-muscle-recovery-after-intense-session') }}" 
                        class="inline-flex items-center gap-2 text-xs font-bold text-[#ff9e58] group-hover:text-white transition-colors uppercase tracking-wider"
                    >
                        <span>Read Protocol</span>
                        <i class="fa-solid fa-arrow-right text-[10px]"></i>
                    </a>
                </div>
            </article>

            <!-- Blog 2 -->
            <article class="card-vibrant rounded-3xl overflow-hidden hover:border-[#ff5e14]/60 transition-all duration-300 group flex flex-col justify-between shadow-2xl">
                <div>
                    <a href="{{ route('blog.show', 'how-to-stay-consistent-with-your-fitness-routine') }}" class="block h-52 sm:h-56 overflow-hidden relative">
                        <img 
                            src="{{ asset('images/athlete-weights.jpg') }}" 
                            alt="Progressive Overload Periodization" 
                            loading="lazy"
                            class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700 filter brightness-105 contrast-105"
                            onerror="this.onerror=null; this.src='{{ asset('images/man-dumbbell.jpg') }}';"
                        >
                        <div class="absolute inset-0 bg-gradient-to-t from-[#0c101a] via-transparent to-transparent"></div>
                    </a>

                    <div class="p-6 sm:p-7">
                        <div class="flex items-center gap-3 text-xs mb-3">
                            <span class="px-3 py-1 rounded-full badge-glow text-[#ff9e58] font-black uppercase text-[10px]">
                                Hypertrophy
                            </span>
                            <span class="text-slate-400 flex items-center gap-1.5 text-xs">
                                <i class="fa-regular fa-clock text-[#ff5e14]"></i>
                                4 min read
                            </span>
                        </div>

                        <h3 class="font-heading text-lg sm:text-xl font-bold text-white group-hover:text-[#ff9e58] transition-colors leading-snug">
                            <a href="{{ route('blog.show', 'how-to-stay-consistent-with-your-fitness-routine') }}">
                                The Science of RPE & Progressive Overload Architecture
                            </a>
                        </h3>

                        <p class="text-xs text-slate-300 leading-relaxed mt-2.5">
                            How to accurately rate your repetitions in reserve (RIR) to spur relentless myofibrillar hypertrophy without burning out your connective tissue.
                        </p>
                    </div>
                </div>

                <div class="p-6 sm:p-7 pt-0 border-t border-white/10">
                    <a 
                        href="{{ route('blog.show', 'how-to-stay-consistent-with-your-fitness-routine') }}" 
                        class="inline-flex items-center gap-2 text-xs font-bold text-[#ff9e58] group-hover:text-white transition-colors uppercase tracking-wider"
                    >
                        <span>Read Protocol</span>
                        <i class="fa-solid fa-arrow-right text-[10px]"></i>
                    </a>
                </div>
            </article>

            <!-- Blog 3 -->
            <article class="card-vibrant rounded-3xl overflow-hidden hover:border-[#ff5e14]/60 transition-all duration-300 group flex flex-col justify-between shadow-2xl">
                <div>
                    <a href="{{ route('blog.show', 'strength-vs-cardio-which-should-you-prioritize') }}" class="block h-52 sm:h-56 overflow-hidden relative">
                        <img 
                            src="{{ asset('images/male_deadlift.jpg') }}" 
                            alt="Strength vs Conditioning" 
                            loading="lazy"
                            class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700 filter brightness-105 contrast-105"
                            onerror="this.onerror=null; this.src='{{ asset('images/man-dumbbell.jpg') }}';"
                        >
                        <div class="absolute inset-0 bg-gradient-to-t from-[#0c101a] via-transparent to-transparent"></div>
                    </a>

                    <div class="p-6 sm:p-7">
                        <div class="flex items-center gap-3 text-xs mb-3">
                            <span class="px-3 py-1 rounded-full badge-cyan-glow text-cyan-400 font-black uppercase text-[10px]">
                                Biomechanics
                            </span>
                            <span class="text-slate-400 flex items-center gap-1.5 text-xs">
                                <i class="fa-regular fa-clock text-cyan-400"></i>
                                6 min read
                            </span>
                        </div>

                        <h3 class="font-heading text-lg sm:text-xl font-bold text-white group-hover:text-cyan-300 transition-colors leading-snug">
                            <a href="{{ route('blog.show', 'strength-vs-cardio-which-should-you-prioritize') }}">
                                Heavy Sled Turf Conditioning vs Steady-State Cardio
                            </a>
                        </h3>

                        <p class="text-xs text-slate-300 leading-relaxed mt-2.5">
                            Why eccentric-free dog sled pushing preserves maximum squat power while dramatically elevating VO2 max and mitochondrial density.
                        </p>
                    </div>
                </div>

                <div class="p-6 sm:p-7 pt-0 border-t border-white/10">
                    <a 
                        href="{{ route('blog.show', 'strength-vs-cardio-which-should-you-prioritize') }}" 
                        class="inline-flex items-center gap-2 text-xs font-bold text-cyan-400 group-hover:text-white transition-colors uppercase tracking-wider"
                    >
                        <span>Read Protocol</span>
                        <i class="fa-solid fa-arrow-right text-[10px]"></i>
                    </a>
                </div>
            </article>

        </div>

    </div>
</section>
