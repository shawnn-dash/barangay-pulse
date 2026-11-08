<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BarangayPulse - @yield('title')</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-surface-bg font-sans text-slate-800 antialiased h-screen flex flex-col overflow-hidden">
    
    <!-- Top Header Bar (Puro Puting Header na may Logo at Profile) -->
    <header class="bg-surface-card border-b border-gray-200 px-8 py-3.5 flex justify-between items-center shrink-0 z-30 shadow-sm">
        
        <!-- Left Side: Logo & Tagline -->
        <div class="flex items-center gap-3">
            <div class="flex items-end gap-1 text-brand-navy">
                <svg class="w-8 h-8" viewBox="0 0 24 24" fill="currentColor">
                    <path d="M3 10L10 4L17 10V20H12V14H8V20H3V10Z"/>
                    <path d="M12 9.5L16.5 5.5L21 9.5V18H18V13H15V18H12V9.5Z" opacity="0.6"/>
                </svg>
            </div>
            <div>
                <h1 class="text-xl font-bold tracking-tight text-brand-navy leading-none">BarangayPulse</h1>
                <p class="text-[9px] text-gray-500 font-medium tracking-wide mt-1">Mas Magaan, Mas Maayos, Mas Maunlad</p>
            </div>
        </div>
        
        <!-- Right Side Header Items -->
        <div class="flex items-center gap-6">
            <!-- Notification Bell -->
            <button class="text-gray-700 hover:text-brand-navy transition relative">
                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                    <path d="M12 22c1.1 0 2-.9 2-2h-4c0 1.1.9 2 2 2zm6-6v-5c0-3.07-1.63-5.64-4.5-6.32V4c0-.83-.67-1.5-1.5-1.5s-1.5.67-1.5 1.5v.68C7.64 5.36 6 7.92 6 11v5l-2 2v1h16v-1l-2-2z"/>
                </svg>
                <span class="absolute top-0.5 right-0.5 w-2 h-2 bg-black rounded-full"></span>
            </button>
            
            <!-- Vertical Divider -->
            <div class="h-6 w-[1px] bg-gray-200"></div>

            <!-- Profile Section -->
        <div class="flex items-center gap-3 cursor-pointer hover:opacity-80 transition">
    
    <div class="w-9 h-9 rounded-full bg-cover bg-center ring-2 ring-brand-teal/30" style="background-image: url('{{ asset('images/fbprof.jpg') }}')"></div>
</div>
                <div>
                    <p class="text-sm font-bold text-brand-navy leading-none">Shawnn</p>
                    <p class="text-[10px] text-brand-teal font-bold mt-1 uppercase tracking-wider">Resident</p>
                </div>
                <svg class="w-4 h-4 text-gray-400 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                </svg>
            </div>
        </div>
    </header>

    <!-- Main App Container (Sidebar at Content) -->
    <div class="flex flex-1 overflow-hidden">
        
        <!-- Sidebar Navigation -->
        <aside class="w-64 bg-brand-navy text-white flex flex-col hidden md:flex shadow-2xl z-20 shrink-0">
            <nav class="flex-1 px-4 space-y-1.5 mt-4 overflow-y-auto">
                <a href="/resident/dashboard" class="flex items-center px-4 py-2.5 rounded-lg text-sm transition {{ request()->is('resident/dashboard') ? 'bg-brand-teal text-white font-bold' : 'text-gray-300 font-medium hover:bg-white hover:bg-opacity-5' }}">
                    <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path></svg>
                    Dashboard
                </a>
                
                <a href="/resident/services" class="flex items-center px-4 py-2.5 rounded-lg text-sm transition {{ request()->is('resident/services') || request()->is('resident/request-indigency') ? 'bg-brand-teal text-white font-bold' : 'text-gray-300 font-medium hover:bg-white hover:bg-opacity-5' }}">
                    <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2"></path></svg>
                    Barangay Services
                </a>
                
                <a href="/resident/activities" class="flex items-center px-4 py-2.5 rounded-lg text-sm transition {{ request()->is('resident/activities') ? 'bg-brand-teal text-white font-bold' : 'text-gray-300 font-medium hover:bg-white hover:bg-opacity-5' }}">
                    <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                    Barangay Activities
                </a>
                
                <a href="/resident/transactions" class="flex items-center px-4 py-2.5 rounded-lg text-sm transition {{ request()->is('resident/transactions') ? 'bg-brand-teal text-white font-bold' : 'text-gray-300 font-medium hover:bg-white hover:bg-opacity-5' }}">
                    <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-6 9l2 2 4-4"></path></svg>
                    My Transactions
                </a>
                
                <a href="/resident/submit-report" class="flex items-center px-4 py-2.5 rounded-lg text-sm transition {{ request()->is('resident/submit-report') ? 'bg-brand-teal text-white font-bold' : 'text-gray-300 font-medium hover:bg-white hover:bg-opacity-5' }}">
                    <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                    Submit Report
                </a>
                
                <!-- Community Updates -->
                <div class="pt-4 pb-2 text-[10px] font-bold text-gray-500 uppercase tracking-wider">Community Updates</div>
                
                <a href="/resident/announcements" class="flex items-center px-4 py-2.5 rounded-lg text-sm transition {{ request()->is('resident/announcements') ? 'bg-brand-teal text-white font-bold' : 'text-gray-300 font-medium hover:bg-white hover:bg-opacity-5' }}">
                    <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5.882V19.24a1.76 1.76 0 01-3.417.592l-2.147-6.15M18 13a3 3 0 100-6M5.436 13.683A4.001 4.001 0 017 6h1.832c4.1 0 7.625-1.234 9.168-3v14c-1.543-1.766-5.067-3-9.168-3H7a3.988 3.988 0 01-1.564-.317z"></path></svg>
                    Announcements
                </a>
                
                <a href="/resident/infrastructure" class="flex items-center px-4 py-2.5 rounded-lg text-sm transition {{ request()->is('resident/infrastructure') ? 'bg-brand-teal text-white font-bold' : 'text-gray-300 font-medium hover:bg-white hover:bg-opacity-5' }}">
                    <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path></svg>
                    Infrastructure Projects
                </a>
                
                <a href="/resident/feedback" class="flex items-center px-4 py-2.5 rounded-lg text-sm transition {{ request()->is('resident/feedback') ? 'bg-brand-teal text-white font-bold' : 'text-gray-300 font-medium hover:bg-white hover:bg-opacity-5' }}">
                    <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8h2a2 2 0 012 2v6a2 2 0 01-2 2h-2v4l-4-4H9a1.994 1.994 0 01-1.414-.586m0 0L11 14h4a2 2 0 002-2V6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2v4l.586-.586z"></path></svg>
                    Community Feedback
                </a>

                <!-- User Options -->
                <div class="pt-4"></div>
                <a href="/resident/profile" class="flex items-center px-4 py-2.5 rounded-lg text-sm transition {{ request()->is('resident/profile') ? 'bg-brand-teal text-white font-bold' : 'text-gray-300 font-medium hover:bg-white hover:bg-opacity-5' }}">
                    <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path></svg>
                    My Profile
                </a>
                
            <a href="/" onclick="localStorage.clear();" class="flex items-center px-4 py-2.5 text-gray-300 font-medium hover:bg-white hover:bg-opacity-5 rounded-lg text-sm transition">
                <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"></path></svg>
                Logout
            </a>
            </nav>

            <!-- Sidebar Footer -->
            <div class="p-4 border-t border-gray-700 mx-4 my-2 text-center shrink-0">
                <p class="text-[9px] text-gray-400 font-medium leading-relaxed">
                    Stronger Communities, Build Stronger Future
                </p>
            </div>
        </aside>

        <!-- Scrollable Main Content Area -->
        <main class="flex-1 overflow-y-auto p-8 bg-surface-bg">
            @hasSection('breadcrumb')
                <div class="text-[11px] font-bold text-brand-teal mb-2">
                    @yield('breadcrumb')
                </div>
            @endif

            @yield('content')
        </main>
    </div>
    <script>
    // Kung hindi naka-login o hindi resident ang role, ibalik sa login page
    if (localStorage.getItem('bp_logged_in') !== 'true' || localStorage.getItem('bp_role') !== 'resident') {
        window.location.href = '/login';
    }
</script>
</body>
</html>