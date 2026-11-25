<!-- ========================================================== -->
<!-- 13. TRAINING FACILITY & ATMOSPHERE GALLERY                 -->
<!-- (Gymstick Pure Athletic Photography Bento Showcase)        -->
<!-- ========================================================== -->
<section id="gallery" class="py-20 lg:py-28 bg-[#06080d] relative overflow-hidden select-none border-t border-white/[0.08]">
    
    <!-- Giant Subtle Outline Watermark -->
    <div class="bg-watermark top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 text-[15vw] leading-none whitespace-nowrap opacity-25">
        GALLERY
    </div>

    <div class="max-w-7xl mx-auto px-6 sm:px-10 lg:px-12 relative z-10">
        
        <!-- Header -->
        <div class="text-center max-w-3xl mx-auto mb-16 lg:mb-20">
            <span class="inline-flex items-center gap-2 px-4 py-1.5 rounded-full badge-glow text-xs font-black uppercase tracking-widest mb-4 shadow-sm">
                <i class="fa-solid fa-camera text-[#ff5e14]"></i>
                <span>ATHLETIC ENVIRONMENT</span>
            </span>
            <h2 class="font-heading text-3xl sm:text-5xl lg:text-6xl font-black text-white tracking-tight uppercase leading-[1.05] mb-5">
                The Gymstick <span class="text-gradient-orange">Atmosphere</span>
            </h2>
            <p class="text-slate-300 text-sm sm:text-base md:text-lg leading-relaxed">
                Step inside 15,000 square feet of calibrated steel, sprint turf, and contrast hydrotherapy. Designed for pure focus and heavy mechanical output.
            </p>
        </div>

        <!-- 6-Item Modern Bento Gallery Grid (100% Male Athletes & Equipment) -->
        <div class="grid grid-cols-1 md:grid-cols-3 lg:grid-cols-4 gap-4 sm:gap-6">
            
            <!-- Item 1 (Wide / 2 Cols) -->
            <div 
                class="md:col-span-2 card-vibrant relative rounded-3xl overflow-hidden aspect-[16/10] cursor-pointer shadow-2xl group hover:border-[#ff5e14]/60 transition-all duration-300"
                onclick="openGalleryModal('{{ asset('images/male_deadlift.jpg') }}', 'Olympic Powerlifting Arena', 'Eleiko IPF competition bars, 5 power racks and deadlift oak platforms.')"
            >
                <img 
                    src="{{ asset('images/male_deadlift.jpg') }}" 
                    alt="Olympic Powerlifting Arena" 
                    loading="lazy"
                    class="w-full h-full object-cover object-center group-hover:scale-105 transition-transform duration-700 filter brightness-105 contrast-105"
                >
                <div class="absolute inset-0 bg-gradient-to-t from-[#06080d]/90 via-[#06080d]/20 to-transparent"></div>
                <div class="absolute bottom-6 left-6 right-6">
                    <span class="text-[10px] font-black uppercase tracking-widest text-[#ff9e58] block mb-1">ZONE 01 • STRENGTH</span>
                    <h3 class="font-heading text-xl sm:text-2xl font-bold text-white uppercase group-hover:text-[#ff9e58] transition-colors">Olympic Powerlifting Arena</h3>
                </div>
            </div>

            <!-- Item 2 (1 Col) -->
            <div 
                class="card-vibrant relative rounded-3xl overflow-hidden aspect-[4/3] md:aspect-auto cursor-pointer shadow-2xl group hover:border-[#ff5e14]/60 transition-all duration-300"
                onclick="openGalleryModal('{{ asset('images/boxer_male.jpg') }}', 'Combat & Heavy Bag Suite', 'Aqua bags, speed balls and boxing footwork lanes.')"
            >
                <img 
                    src="{{ asset('images/boxer_male.jpg') }}" 
                    alt="Combat & Heavy Bag Suite" 
                    loading="lazy"
                    class="w-full h-full object-cover object-center group-hover:scale-105 transition-transform duration-700 filter brightness-105 contrast-105"
                >
                <div class="absolute inset-0 bg-gradient-to-t from-[#06080d]/90 via-[#06080d]/20 to-transparent"></div>
                <div class="absolute bottom-6 left-6 right-6">
                    <span class="text-[10px] font-black uppercase tracking-widest text-[#ff9e58] block mb-1">ZONE 03 • COMBAT</span>
                    <h3 class="font-heading text-lg font-bold text-white uppercase group-hover:text-[#ff9e58] transition-colors">Heavy Bag Boxing Ring</h3>
                </div>
            </div>

            <!-- Item 3 (1 Col) -->
            <div 
                class="card-vibrant relative rounded-3xl overflow-hidden aspect-[4/3] md:aspect-auto cursor-pointer shadow-2xl group hover:border-[#ff5e14]/60 transition-all duration-300"
                onclick="openGalleryModal('{{ asset('images/coach_marcus.jpg') }}', '30m Sled & Sprint Turf', 'Heavy Rogue dog sleds, battle ropes and plyometric boxes.')"
            >
                <img 
                    src="{{ asset('images/coach_marcus.jpg') }}" 
                    alt="Sprint Turf & Sleds" 
                    loading="lazy"
                    class="w-full h-full object-cover object-center group-hover:scale-105 transition-transform duration-700 filter brightness-105 contrast-105"
                >
                <div class="absolute inset-0 bg-gradient-to-t from-[#06080d]/90 via-[#06080d]/20 to-transparent"></div>
                <div class="absolute bottom-6 left-6 right-6">
                    <span class="text-[10px] font-black uppercase tracking-widest text-[#ff9e58] block mb-1">ZONE 03 • ATHLETIC</span>
                    <h3 class="font-heading text-lg font-bold text-white uppercase group-hover:text-[#ff9e58] transition-colors">Sprint Turf & Battle Ropes</h3>
                </div>
            </div>

            <!-- Item 4 (1 Col) -->
            <div 
                class="card-vibrant relative rounded-3xl overflow-hidden aspect-[4/3] md:aspect-auto cursor-pointer shadow-2xl group hover:border-[#ff5e14]/60 transition-all duration-300"
                onclick="openGalleryModal('{{ asset('images/sauna_spa.jpg') }}', 'Arsenal Biomechanics Fleet', 'Plate-loaded converging machines engineered around natural joint angles.')"
            >
                <img 
                    src="{{ asset('images/sauna_spa.jpg') }}" 
                    alt="Biomechanics Fleet" 
                    loading="lazy"
                    class="w-full h-full object-cover object-center group-hover:scale-105 transition-transform duration-700 filter brightness-105 contrast-105"
                >
                <div class="absolute inset-0 bg-gradient-to-t from-[#06080d]/90 via-[#06080d]/20 to-transparent"></div>
                <div class="absolute bottom-6 left-6 right-6">
                    <span class="text-[10px] font-black uppercase tracking-widest text-[#ff9e58] block mb-1">ZONE 02 • HYPERTROPHY</span>
                    <h3 class="font-heading text-lg font-bold text-white uppercase group-hover:text-[#ff9e58] transition-colors">Arsenal Machine Fleet</h3>
                </div>
            </div>

            <!-- Item 5 (1 Col) -->
            <div 
                class="card-vibrant relative rounded-3xl overflow-hidden aspect-[4/3] md:aspect-auto cursor-pointer shadow-2xl group hover:border-[#ff5e14]/60 transition-all duration-300"
                onclick="openGalleryModal('{{ asset('images/about-clean.jpg') }}', 'Contrast Spa & Recovery Sanctuary', '3°C Sub-zero cold plunge tubs paired with 90°C Finnish cedar sauna.')"
            >
                <img 
                    src="{{ asset('images/about-clean.jpg') }}" 
                    alt="Contrast Hydrotherapy" 
                    loading="lazy"
                    class="w-full h-full object-cover object-center group-hover:scale-105 transition-transform duration-700 filter brightness-105 contrast-105"
                >
                <div class="absolute inset-0 bg-gradient-to-t from-[#06080d]/90 via-[#06080d]/20 to-transparent"></div>
                <div class="absolute bottom-6 left-6 right-6">
                    <span class="text-[10px] font-black uppercase tracking-widest text-cyan-400 block mb-1">ZONE 04 • RECOVERY</span>
                    <h3 class="font-heading text-lg font-bold text-white uppercase group-hover:text-cyan-300 transition-colors">3°C Plunge & Cedar Sauna</h3>
                </div>
            </div>

            <!-- Item 6 (Wide / 2 Cols) -->
            <div 
                class="md:col-span-2 card-vibrant relative rounded-3xl overflow-hidden aspect-[16/10] cursor-pointer shadow-2xl group hover:border-[#ff5e14]/60 transition-all duration-300"
                onclick="openGalleryModal('{{ asset('images/athlete-weights.jpg') }}', 'Urethane Dumbbell Sanctuary', 'Pairs ranging from 2.5kg all the way to 60kg custom machined urethane.')"
            >
                <img 
                    src="{{ asset('images/athlete-weights.jpg') }}" 
                    alt="Dumbbell Sanctuary" 
                    loading="lazy"
                    class="w-full h-full object-cover object-center group-hover:scale-105 transition-transform duration-700 filter brightness-105 contrast-105"
                >
                <div class="absolute inset-0 bg-gradient-to-t from-[#06080d]/90 via-[#06080d]/20 to-transparent"></div>
                <div class="absolute bottom-6 left-6 right-6">
                    <span class="text-[10px] font-black uppercase tracking-widest text-[#ff9e58] block mb-1">ZONE 01 • FREE WEIGHTS</span>
                    <h3 class="font-heading text-xl sm:text-2xl font-bold text-white uppercase group-hover:text-[#ff9e58] transition-colors">2.5kg to 60kg Urethane Dumbbells</h3>
                </div>
            </div>

        </div>

    </div>

    <!-- Gallery Lightbox Modal -->
    <div id="gallery-lightbox-modal" class="fixed inset-0 z-50 bg-black/90 backdrop-blur-md hidden items-center justify-center p-4">
        <div class="max-w-4xl w-full card-vibrant rounded-3xl overflow-hidden shadow-2xl relative">
            <button type="button" onclick="closeGalleryModal()" class="absolute top-4 right-4 z-20 w-10 h-10 rounded-full bg-black/60 text-white flex items-center justify-center text-lg hover:bg-white hover:text-black transition-colors cursor-pointer">
                <i class="fa-solid fa-xmark"></i>
            </button>
            <div class="aspect-video relative overflow-hidden bg-black">
                <img id="gallery-modal-img" src="" alt="Gallery Image" class="w-full h-full object-contain">
            </div>
            <div class="p-6 bg-[#0c101a] border-t border-white/10">
                <h4 id="gallery-modal-title" class="font-heading text-xl font-bold text-white uppercase"></h4>
                <p id="gallery-modal-desc" class="text-xs text-slate-300 mt-1"></p>
            </div>
        </div>
    </div>
</section>

<script>
function openGalleryModal(src, title, desc) {
    const modal = document.getElementById('gallery-lightbox-modal');
    const img = document.getElementById('gallery-modal-img');
    const t = document.getElementById('gallery-modal-title');
    const d = document.getElementById('gallery-modal-desc');
    if (!modal) return;
    img.src = src;
    t.textContent = title;
    d.textContent = desc;
    modal.classList.remove('hidden');
    modal.classList.add('flex');
}

function closeGalleryModal() {
    const modal = document.getElementById('gallery-lightbox-modal');
    if (!modal) return;
    modal.classList.add('hidden');
    modal.classList.remove('flex');
}
</script>
