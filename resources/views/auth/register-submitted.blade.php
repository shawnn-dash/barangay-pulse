<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BarangayPulse - Registration Submitted</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-surface-bg font-sans text-slate-800 antialiased min-h-screen flex items-center justify-center p-4 sm:p-8">

    <main class="w-full max-w-4xl bg-surface-card rounded-2xl shadow-xl flex flex-col md:flex-row overflow-hidden min-h-[550px]">
        
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

        <!-- Right Column: Confirmation Message -->
        <div class="md:w-7/12 p-8 md:p-16 flex flex-col justify-center items-center bg-surface-card text-center">
            
            <!-- Document Shield Icon -->
            <div class="w-20 h-20 bg-teal-50 rounded-full flex items-center justify-center mb-6 relative">
                <svg class="w-10 h-10 text-brand-teal" fill="currentColor" viewBox="0 0 24 24">
                    <path d="M14 2H6c-1.1 0-1.99.9-1.99 2L4 20c0 1.1.89 2 1.99 2h12c1.1 0 2-.9 2-2V8l-6-6zm2 16H8v-2h8v2zm0-4H8v-2h8v2zm-3-5V3.5L18.5 9H13z"/>
                </svg>
                <!-- Small Clock Badge -->
                <div class="absolute bottom-0 right-0 w-6 h-6 bg-white rounded-full flex items-center justify-center border-2 border-white">
                    <div class="w-4 h-4 bg-brand-teal rounded-full flex items-center justify-center">
                        <svg class="w-3 h-3 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                    </div>
                </div>
            </div>

            <h2 class="text-3xl font-bold text-brand-navy mb-2">Registration Submitted</h2>
            <p class="text-brand-teal font-bold mb-6">Your account is currently under review.</p>
            
            <p class="text-gray-500 text-sm leading-relaxed mb-8 max-w-sm">
                An authorized administrator will verify your credentials and documents. This process usually takes <strong>24-48 hours</strong>. You will receive an email notification once your account is approved.
            </p>
            
            <div class="border rounded-xl px-8 py-4 mb-8">
                <p class="text-[10px] font-bold text-gray-400 uppercase tracking-widest mb-1">REFERENCE NUMBER</p>
                <p class="text-lg font-bold text-brand-navy">#REG-2024-001</p>
            </div>
            
            <a href="/" class="w-full max-w-xs flex justify-center items-center gap-2 bg-brand-teal hover:bg-brand-tealHover text-white font-bold py-3 rounded-lg transition-all duration-200 shadow-sm">
                &larr; Back to Login
            </a>

            <p class="text-xs text-gray-500 mt-6">
                Need help? <a href="#" class="text-brand-teal font-bold underline">Contact support</a>
            </p>
        </div>
        
    </main>
</body>
</html>