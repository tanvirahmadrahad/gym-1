<!-- ========================================================== -->
<!-- MAIN NAVBAR (Fixed Sticky Header - Always Visible on Scroll)-->
<!-- ========================================================== -->
<header id="main-header" class="fixed top-0 inset-x-0 z-50 bg-[#080a0f]/90 backdrop-blur-2xl border-b border-white/[0.08] shadow-[0_4px_30px_rgba(0,0,0,0.8)] transition-all duration-300">
    <div class="max-w-7xl mx-auto px-6 sm:px-10 lg:px-12 py-3.5 flex items-center justify-between gap-6">
        
        <!-- Brand Logo Lockup -->
        <a href="{{ route('home') }}" class="flex items-center gap-2.5 shrink-0 group">
            <!-- Dumbbell Icon in Electric Orange Glow -->
            <div class="w-9 h-9 rounded-xl bg-gradient-to-br from-[#ff7a1a] via-[#ff5e14] to-[#e03e00] flex items-center justify-center text-white text-lg shadow-[0_0_20px_rgba(255,94,20,0.5)] group-hover:scale-110 transition-transform">
                <i class="fa-solid fa-dumbbell"></i>
            </div>
            <!-- Brand Name: GYMSTICK -->
            <span class="font-heading text-xl sm:text-2xl font-black tracking-wider text-white uppercase">
                GYM<span class="text-transparent bg-clip-text bg-gradient-to-r from-[#ff8533] via-[#ff5e14] to-[#ff2a00] drop-shadow-[0_2px_12px_rgba(255,94,20,0.5)]">STICK</span>
            </span>
        </a>

        <!-- Desktop Navigation Links -->
        <nav class="hidden md:flex items-center gap-7 lg:gap-9 text-sm font-semibold text-slate-300">
            <a 
                href="{{ route('home') }}" 
                class="text-white hover:text-[#ff5e14] transition-colors font-bold relative after:absolute after:-bottom-1 after:left-0 after:w-full after:h-[2px] after:bg-[#ff5e14] after:shadow-[0_0_8px_#ff5e14]"
            >
                Home
            </a>
            <a 
                href="{{ route('home') }}#about" 
                class="hover:text-[#ff5e14] transition-colors"
            >
                How It Works
            </a>
            <a 
                href="{{ route('home') }}#facility-zones" 
                class="hover:text-[#ff5e14] transition-colors"
            >
                Facility
            </a>
            <a 
                href="{{ route('home') }}#programs" 
                class="hover:text-[#ff5e14] transition-colors"
            >
                Programs
            </a>
            <a 
                href="{{ route('store.index') }}" 
                class="hover:text-[#ff5e14] transition-colors"
            >
                Shop
            </a>
            <!-- Dropdown: More -->
            <div class="relative group">
                <button type="button" class="inline-flex items-center gap-1.5 hover:text-[#ff5e14] transition-colors cursor-pointer">
                    <span>Explore</span>
                    <i class="fa-solid fa-chevron-down text-xs transition-transform group-hover:rotate-180"></i>
                </button>
                <div class="absolute left-0 mt-2 w-52 rounded-2xl bg-[#0e121a]/95 backdrop-blur-xl border border-white/10 shadow-2xl py-2 opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-200 z-50">
                    <a href="{{ route('home') }}#app" class="block px-4 py-2 text-xs font-semibold text-slate-300 hover:text-white hover:bg-white/5">Member App</a>
                    <a href="{{ route('home') }}#comparison" class="block px-4 py-2 text-xs font-semibold text-slate-300 hover:text-white hover:bg-white/5">Why Gymstick</a>
                    <a href="{{ route('home') }}#pricing" class="block px-4 py-2 text-xs font-semibold text-slate-300 hover:text-white hover:bg-white/5">Membership Plans</a>
                    <a href="{{ route('home') }}#trainers" class="block px-4 py-2 text-xs font-semibold text-slate-300 hover:text-white hover:bg-white/5">Coaches</a>
                    <a href="{{ route('home') }}#contact" class="block px-4 py-2 text-xs font-semibold text-slate-300 hover:text-white hover:bg-white/5">Location & Hours</a>
                </div>
            </div>
        </nav>

        <!-- Right Side: 24/7 RFID Status + Orange "Join Us" Button -->
        <div class="flex items-center gap-4 sm:gap-6 shrink-0">
            <!-- 24/7 Status Pill -->
            <div class="hidden lg:flex items-center gap-2 px-3 py-1 rounded-full bg-white/[0.04] border border-white/10 text-xs">
                <span class="w-2 h-2 rounded-full bg-emerald-400 animate-pulse shadow-[0_0_8px_#34d399]"></span>
                <span class="text-[11px] font-bold text-slate-300">24/7 RFID Open</span>
            </div>

            <!-- Orange Radiant "Free Pass" Button -->
            <a 
                href="#free-trial" 
                class="btn-glow-orange inline-flex items-center justify-center px-6 py-2.5 rounded-xl text-white font-black text-xs uppercase tracking-wider shadow-lg cursor-pointer"
                title="Claim Free Day Pass"
            >
                Free Pass
            </a>

            <!-- Mobile Menu Toggle Button -->
            <button 
                type="button" 
                onclick="document.getElementById('mobile-menu').classList.toggle('hidden')"
                class="md:hidden text-white text-xl p-1"
                aria-label="Toggle navigation"
            >
                <i class="fa-solid fa-bars"></i>
            </button>
        </div>

    </div>

    <!-- Mobile Dropdown Menu -->
    <div id="mobile-menu" class="hidden md:hidden bg-[#080a0f]/98 backdrop-blur-2xl border-t border-white/10 px-6 py-4 space-y-3">
        <a href="{{ route('home') }}" class="block text-sm font-bold text-white hover:text-[#ff5e14]">Home</a>
        <a href="{{ route('home') }}#about" class="block text-sm font-medium text-slate-300 hover:text-[#ff5e14]">How It Works</a>
        <a href="{{ route('home') }}#facility-zones" class="block text-sm font-medium text-slate-300 hover:text-[#ff5e14]">Facility</a>
        <a href="{{ route('home') }}#programs" class="block text-sm font-medium text-slate-300 hover:text-[#ff5e14]">Programs</a>
        <a href="{{ route('store.index') }}" class="block text-sm font-medium text-slate-300 hover:text-[#ff5e14]">Shop</a>
        <a href="{{ route('home') }}#app" class="block text-sm font-medium text-slate-300 hover:text-[#ff5e14]">Member App</a>
        <a href="{{ route('home') }}#comparison" class="block text-sm font-medium text-slate-300 hover:text-[#ff5e14]">Why Gymstick</a>
        <a href="{{ route('home') }}#pricing" class="block text-sm font-medium text-slate-300 hover:text-[#ff5e14]">Pricing</a>
        <a href="{{ route('home') }}#contact" class="block text-sm font-medium text-slate-300 hover:text-[#ff5e14]">Contact</a>
        <div class="pt-2">
            <a href="#free-trial" class="btn-glow-orange block w-full text-center py-3 rounded-xl text-white font-bold text-xs uppercase tracking-wider">Claim Free Pass</a>
        </div>
    </div>
</header>
