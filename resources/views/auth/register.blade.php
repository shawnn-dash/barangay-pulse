<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BarangayPulse - Create Account</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-surface-bg font-sans text-slate-800 antialiased min-h-screen flex items-center justify-center p-4 sm:p-8">

    <main class="w-full max-w-5xl bg-surface-card rounded-2xl shadow-xl flex flex-col md:flex-row overflow-hidden min-h-[600px]">
        
        <!-- Left Column: Branding -->
        <div class="md:w-5/12 bg-brand-navy text-white p-8 md:p-10 flex flex-col justify-between relative group">
            
            <div class="relative z-10">
                <div class="flex items-center gap-2 mb-1">
                    <svg class="w-7 h-7 text-white" viewBox="0 0 24 24" fill="currentColor">
                        <path d="M3 10L10 4L17 10V20H12V14H8V20H3V10Z"/>
                    </svg>
                    <h1 class="text-2xl font-bold tracking-tight text-white">BarangayPulse</h1>
                </div>
                <p class="text-[0.65rem] text-gray-400 font-semibold tracking-widest uppercase mt-1">
                    BARANGAY SYSTEM
                </p>
            </div>

            <div class="flex justify-center my-6 relative z-10">
                <div class="w-28 h-28 rounded-full border border-gray-600 flex items-center justify-center bg-brand-navy bg-opacity-50">
                    <svg class="w-14 h-14 text-gray-300" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M16 11c1.66 0 2.99-1.34 2.99-3S17.66 5 16 5c-1.66 0-3 1.34-3 3s1.34 3 3 3zm-8 0c1.66 0 2.99-1.34 2.99-3S9.66 5 8 5C6.34 5 5 6.34 5 8s1.34 3 3 3zm0 2c-2.33 0-7 1.17-7 3.5V19h14v-2.5c0-2.33-4.67-3.5-7-3.5zm8 0c-.29 0-.62.02-.97.05 1.16.84 1.97 1.97 1.97 3.45V19h6v-2.5c0-2.33-4.67-3.5-7-3.5z"/>
                    </svg>
                </div>
            </div>
            
            <div class="relative z-10">
                <div class="mb-4">
                    <p class="text-3xl md:text-4xl font-light leading-snug text-white">
                        Your<br>
                        community,<br>
                        <span class="font-bold text-brand-teal tracking-wide">connected.</span>
                    </p>
                </div>
                <div class="w-12 h-1.5 bg-brand-teal mb-5 rounded-full"></div>
                
                <p class="text-sm text-gray-300 font-medium leading-relaxed mb-6 pr-4">
                    Join BarangayPulse for barangay services and community updates.
                </p>
                <p class="text-[10px] text-gray-500 font-bold uppercase tracking-wider">
                    © 2026 BARANGAYPULSE PLATFORM
                </p>
            </div>
        </div>

        <!-- Right Column: Registration Form -->
        <div class="md:w-7/12 p-8 md:p-12 flex flex-col justify-center bg-surface-card overflow-y-auto">
            <div class="w-full max-w-lg mx-auto">
                <h2 class="text-3xl font-bold text-brand-navy mb-2">Create Account</h2>
                <p class="text-gray-500 text-sm mb-6">Choose your role to get started.</p>
                
<!-- Role Selection -->
<div class="grid grid-cols-2 gap-4 mb-6">
    <!-- Resident Card (Active) -->
    <div class="border-2 border-brand-teal bg-teal-50 rounded-lg p-4 text-center cursor-default">
        <div class="flex justify-center mb-2">
            <svg class="w-6 h-6 text-brand-teal" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path></svg>
        </div>
        <h4 class="font-bold text-brand-navy text-sm">Resident</h4>
        <p class="text-[10px] text-gray-500 mt-1">Access services and updates</p>
    </div>
    
    <!-- Barangay Admin Card (Link to Admin Register) -->
    <a href="/admin/register" class="border border-gray-200 hover:border-brand-teal rounded-lg p-4 text-center cursor-pointer transition block">
        <div class="flex justify-center mb-2">
            <svg class="w-6 h-6 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path></svg>
        </div>
        <h4 class="font-bold text-brand-navy text-sm">Barangay Admin</h4>
        <p class="text-[10px] text-gray-500 mt-1">Manage barangay services</p>
    </a>
</div>
                <form action="/register/submitted" method="GET" class="space-y-4">
                    <div>
                        <label class="block text-xs font-bold text-brand-navy mb-1">Full Name</label>
                        <input type="text" class="w-full px-4 py-2.5 rounded-lg border border-gray-200 bg-gray-50 text-sm focus:ring-2 focus:ring-brand-teal outline-none" placeholder="Enter your full name" required>
                    </div>

                    <div class="grid grid-cols-2 gap-4">
                        <div>
                            <label class="block text-xs font-bold text-brand-navy mb-1">Email Address</label>
                            <input type="email" class="w-full px-4 py-2.5 rounded-lg border border-gray-200 bg-gray-50 text-sm focus:ring-2 focus:ring-brand-teal outline-none" placeholder="you@example.com" required>
                        </div>
                        <div>
                            <label class="block text-xs font-bold text-brand-navy mb-1">Mobile Number</label>
                            <input type="text" class="w-full px-4 py-2.5 rounded-lg border border-gray-200 bg-gray-50 text-sm focus:ring-2 focus:ring-brand-teal outline-none" placeholder="09XX XXX XXXX" required>
                        </div>
                    </div>

                    <div class="grid grid-cols-2 gap-4">
                        <div>
                            <label class="block text-xs font-bold text-brand-navy mb-1">Password</label>
                            <input type="password" class="w-full px-4 py-2.5 rounded-lg border border-gray-200 bg-gray-50 text-sm focus:ring-2 focus:ring-brand-teal outline-none" placeholder="Enter a password" required>
                        </div>
                        <div>
                            <label class="block text-xs font-bold text-brand-navy mb-1">Confirm Password</label>
                            <input type="password" class="w-full px-4 py-2.5 rounded-lg border border-gray-200 bg-gray-50 text-sm focus:ring-2 focus:ring-brand-teal outline-none" placeholder="Confirm your password" required>
                        </div>
                    </div>

                    <div class="flex items-center mt-4">
                        <input type="checkbox" required class="w-4 h-4 text-brand-teal border-gray-300 rounded focus:ring-brand-teal">
                        <label class="ml-2 text-xs text-gray-600">
                            I agree to the <a href="#" class="text-brand-teal font-bold">Terms of Service</a> and <a href="#" class="text-brand-teal font-bold">Privacy Policy</a>
                        </label>
                    </div>

                    <button type="submit" class="w-full flex justify-center items-center gap-2 bg-brand-teal hover:bg-brand-tealHover text-white font-bold py-3 rounded-lg transition-all duration-200 shadow-sm mt-4">
                        Create Resident Account <span class="text-lg leading-none">&rarr;</span>
                    </button>
                </form>

                <p class="text-center text-xs text-gray-400 mt-4 pb-4 border-b">Official accounts require barangay verification.</p>

                <p class="text-center mt-4 text-sm font-medium text-gray-500">
                    Already have an account? <a href="/" class="text-brand-teal font-bold">Log in</a>
                </p>
            </div>
        </div>
        
    </main>
</body>
</html>