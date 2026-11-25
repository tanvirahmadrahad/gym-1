<!-- Footer with Clean Obsidian Black Background Matching Gymstick Theme -->
<footer id="footer" class="bg-[#05070b] border-t border-white/[0.08] pt-16 pb-8 text-slate-300 text-sm shadow-2xl relative z-10 select-none">
    <div class="max-w-7xl mx-auto px-6 sm:px-10 lg:px-12">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-5 gap-10 pb-12 border-b border-white/10">
            <!-- Col 1: Brand Info (2 cols wide on desktop) -->
            <div class="lg:col-span-2 space-y-4">
                <a href="{{ route('home') }}" class="flex items-center gap-2.5 group">
                    <div class="w-10 h-10 rounded-xl bg-gradient-to-br from-[#ff7a1a] to-[#ff5e14] flex items-center justify-center text-white text-lg shadow-md shadow-[#ff5e14]/30 group-hover:scale-105 transition-transform">
                        <i class="fa-solid fa-dumbbell"></i>
                    </div>
                    <span class="font-heading text-2xl font-black tracking-wider text-white uppercase">
                        GYM<span class="text-gradient-orange">STICK</span>
                    </span>
                </a>
                <p class="text-xs text-slate-400 leading-relaxed max-w-sm">
                    Precision athletic training, calibrated biomechanics, and contrast recovery. Built for those who demand serious physical results with zero compromises.
                </p>
                <div class="flex items-center gap-3 pt-2">
                    <a href="#" class="w-9 h-9 rounded-xl bg-white/5 hover:bg-[#ff5e14] hover:text-white text-slate-300 flex items-center justify-center text-sm transition-all border border-white/10 hover:border-[#ff5e14] shadow-sm"><i class="fa-brands fa-facebook-f"></i></a>
                    <a href="#" class="w-9 h-9 rounded-xl bg-white/5 hover:bg-[#ff5e14] hover:text-white text-slate-300 flex items-center justify-center text-sm transition-all border border-white/10 hover:border-[#ff5e14] shadow-sm"><i class="fa-brands fa-instagram"></i></a>
                    <a href="#" class="w-9 h-9 rounded-xl bg-white/5 hover:bg-[#ff5e14] hover:text-white text-slate-300 flex items-center justify-center text-sm transition-all border border-white/10 hover:border-[#ff5e14] shadow-sm"><i class="fa-brands fa-x-twitter"></i></a>
                    <a href="#" class="w-9 h-9 rounded-xl bg-white/5 hover:bg-[#ff5e14] hover:text-white text-slate-300 flex items-center justify-center text-sm transition-all border border-white/10 hover:border-[#ff5e14] shadow-sm"><i class="fa-brands fa-youtube"></i></a>
                </div>
            </div>

            <!-- Col 2: Quick Links -->
            <div>
                <h4 class="font-heading text-base font-bold text-white uppercase tracking-wider mb-4 border-l-2 border-[#ff5e14] pl-2.5">
                    Quick Links
                </h4>
                <ul class="space-y-2 text-xs">
                    <li><a href="{{ route('home') }}#about" class="hover:text-[#ff9e58] transition-colors">4-Phase Protocol</a></li>
                    <li><a href="{{ route('home') }}#facility-zones" class="hover:text-[#ff9e58] transition-colors">Training Zones</a></li>
                    <li><a href="{{ route('home') }}#programs" class="hover:text-[#ff9e58] transition-colors">Target Pathways</a></li>
                    <li><a href="{{ route('home') }}#app" class="hover:text-[#ff9e58] transition-colors">Member App</a></li>
                    <li><a href="{{ route('home') }}#comparison" class="hover:text-[#ff9e58] transition-colors">Why Gymstick</a></li>
                    <li><a href="{{ route('home') }}#pricing" class="hover:text-[#ff9e58] transition-colors">Pricing Plans</a></li>
                </ul>
            </div>

            <!-- Col 3: Programs -->
            <div>
                <h4 class="font-heading text-base font-bold text-white uppercase tracking-wider mb-4 border-l-2 border-[#ff5e14] pl-2.5">
                    Pathways
                </h4>
                <ul class="space-y-2 text-xs">
                    <li><a href="{{ route('home') }}#programs" class="hover:text-[#ff9e58] transition-colors flex items-center gap-1.5"><span class="w-1.5 h-1.5 rounded-full bg-[#ff5e14]"></span>Hypertrophy & Mass</a></li>
                    <li><a href="{{ route('home') }}#programs" class="hover:text-[#ff9e58] transition-colors flex items-center gap-1.5"><span class="w-1.5 h-1.5 rounded-full bg-[#ff5e14]"></span>Fat Shred & Lean</a></li>
                    <li><a href="{{ route('home') }}#programs" class="hover:text-[#ff9e58] transition-colors flex items-center gap-1.5"><span class="w-1.5 h-1.5 rounded-full bg-[#ff5e14]"></span>Combat & Athletic</a></li>
                    <li><a href="{{ route('home') }}#facility-zones" class="hover:text-cyan-400 transition-colors flex items-center gap-1.5"><span class="w-1.5 h-1.5 rounded-full bg-cyan-400"></span>Contrast Spa Lounge</a></li>
                    <li><a href="{{ route('home') }}#trainers" class="hover:text-[#ff9e58] transition-colors flex items-center gap-1.5"><span class="w-1.5 h-1.5 rounded-full bg-[#ff5e14]"></span>Certified Coaches</a></li>
                </ul>
            </div>

            <!-- Col 4: Newsletter -->
            <div>
                <h4 class="font-heading text-base font-bold text-white uppercase tracking-wider mb-4 border-l-2 border-[#ff5e14] pl-2.5">
                    VIP Newsletter
                </h4>
                <p class="text-xs text-slate-400 mb-3">Subscribe for biomechanics breakdowns, free day passes, and athlete guides.</p>
                <form class="space-y-2.5" onsubmit="event.preventDefault(); showNoticeModal('Newsletter Subscribed', 'Thank you for subscribing! Your weekly training insights will arrive in your inbox shortly.');">
                    <input 
                        type="email" 
                        placeholder="Your email address" 
                        required 
                        class="w-full bg-[#0a0e17] border border-white/15 rounded-xl px-3.5 py-2.5 text-xs text-white placeholder-slate-500 focus:outline-none focus:border-[#ff5e14] focus:ring-2 focus:ring-[#ff5e14]/20 transition-all"
                    >
                    <button 
                        type="submit" 
                        class="btn-glow-orange w-full text-white font-bold text-xs py-2.5 rounded-xl transition-all uppercase tracking-wider shadow-md cursor-pointer"
                    >
                        Subscribe
                    </button>
                </form>
            </div>
        </div>

        <!-- Bottom Copyright -->
        <div class="pt-8 flex flex-col sm:flex-row items-center justify-between gap-4 text-xs text-slate-400">
            <p>© {{ date('Y') }} <span class="text-gradient-orange font-bold">GYMSTICK</span> Athletic Club. All rights reserved.</p>
            <div class="flex items-center gap-6">
                <button type="button" onclick="showNoticeModal('Privacy Policy', 'We value your privacy. All your physical assessment data, biometric metrics, and personal records remain strictly confidential and encrypted.')" class="hover:text-white transition-colors cursor-pointer">Privacy Policy</button>
                <button type="button" onclick="showNoticeModal('Terms of Service', 'Membership rules: Respect the equipment, rack your weights after use, adhere to scheduled class times, and support your fellow athletes in the gym.')" class="hover:text-white transition-colors cursor-pointer">Terms of Service</button>
                <button type="button" onclick="showNoticeModal('Member Support', 'Need assistance with your plan, schedules, or lockers? Contact support directly via email at fitness@mail.com or call +1 (234) 567-890.')" class="hover:text-white transition-colors cursor-pointer">Support</button>
            </div>
        </div>
    </div>

    <!-- Notice Modal -->
    <div id="notice-modal" class="fixed inset-0 z-50 bg-black/80 backdrop-blur-sm hidden items-center justify-center p-4">
        <div class="card-vibrant rounded-3xl max-w-md w-full p-6 shadow-2xl relative">
            <button type="button" onclick="closeNoticeModal()" class="absolute top-4 right-4 text-slate-400 hover:text-white text-lg cursor-pointer">
                <i class="fa-solid fa-xmark"></i>
            </button>
            <h3 id="notice-modal-title" class="font-heading text-xl font-bold text-white mb-3"></h3>
            <p id="notice-modal-body" class="text-xs text-slate-300 leading-relaxed mb-6"></p>
            <button type="button" onclick="closeNoticeModal()" class="btn-glow-orange w-full text-white font-bold text-xs py-2.5 rounded-xl transition-all uppercase tracking-wider cursor-pointer">
                Close
            </button>
        </div>
    </div>
</footer>

<script>
function showNoticeModal(title, body) {
    const modal = document.getElementById('notice-modal');
    const titleEl = document.getElementById('notice-modal-title');
    const bodyEl = document.getElementById('notice-modal-body');
    if (!modal) return;
    titleEl.textContent = title;
    bodyEl.textContent = body;
    modal.classList.remove('hidden');
    modal.classList.add('flex');
}

function closeNoticeModal() {
    const modal = document.getElementById('notice-modal');
    if (!modal) return;
    modal.classList.add('hidden');
    modal.classList.remove('flex');
}
</script>
