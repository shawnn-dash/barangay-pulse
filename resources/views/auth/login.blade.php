<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BarangayPulse - Resident Login</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-surface-bg font-sans text-slate-800 antialiased min-h-screen flex items-center justify-center p-4 sm:p-8">

    <main class="w-full max-w-4xl bg-surface-card rounded-2xl shadow-xl flex flex-col md:flex-row overflow-hidden min-h-[550px]">
        
        <!-- Left Column: Branding -->
        <div class="md:w-5/12 bg-brand-navy text-white p-8 md:p-10 flex flex-col justify-between relative group">
            
            <!-- Logo area -->
            <div class="relative z-10">
                <div class="flex items-center gap-2 mb-1">
                    <!-- Twin Houses Logo -->
                    <svg class="w-7 h-7 text-white" viewBox="0 0 24 24" fill="currentColor">
                        <path d="M3 10L10 4L17 10V20H12V14H8V20H3V10Z"/>
                        <path d="M12 9.5L16.5 5.5L21 9.5V18H18V13H15V18H12V9.5Z" opacity="0.7"/>
                    </svg>
                    <h1 class="text-2xl font-bold tracking-tight text-white">BarangayPulse</h1>
                </div>
                <p class="text-[0.65rem] text-gray-400 font-semibold tracking-widest uppercase mt-1">
                    BARANGAY SYSTEM
                </p>
            </div>

            <!-- Middle Circle Icon with Users -->
            <div class="flex justify-center my-6 relative z-10">
                <div class="w-28 h-28 rounded-full border border-gray-600 flex items-center justify-center bg-brand-navy bg-opacity-50">
                    <svg class="w-14 h-14 text-gray-300" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M16 11c1.66 0 2.99-1.34 2.99-3S17.66 5 16 5c-1.66 0-3 1.34-3 3s1.34 3 3 3zm-8 0c1.66 0 2.99-1.34 2.99-3S9.66 5 8 5C6.34 5 5 6.34 5 8s1.34 3 3 3zm0 2c-2.33 0-7 1.17-7 3.5V19h14v-2.5c0-2.33-4.67-3.5-7-3.5zm8 0c-.29 0-.62.02-.97.05 1.16.84 1.97 1.97 1.97 3.45V19h6v-2.5c0-2.33-4.67-3.5-7-3.5z"/>
                    </svg>
                </div>
            </div>
            
            <!-- Hero Text area -->
            <div class="relative z-10">
                <div class="mb-4">
                    <p class="text-3xl md:text-4xl font-light leading-snug italic text-white">
                        Tuloy-tuloy<br>
                        ang<br>
                        <span class="font-bold text-brand-teal not-italic tracking-wide">serbisyo!</span>
                    </p>
                </div>
                <!-- Teal line divider -->
                <div class="w-12 h-1.5 bg-brand-teal mb-5 rounded-full"></div>
                
                <p class="text-xs text-gray-300 font-medium leading-relaxed mb-1">
                    Mas Magaan, Mas Maayos, Mas Maunlad.
                </p>
                <p class="text-xs text-gray-400 leading-relaxed mb-6">
                    Your one-stop platform for community<br>services and barangay updates.
                </p>
                <p class="text-[10px] text-gray-500 font-bold uppercase tracking-wider">
                    © 2026 BARANGAYPULSE PLATFORM
                </p>
            </div>
        </div>

        <!-- Right Column: Login Form -->
        <div class="md:w-7/12 p-8 md:p-12 flex flex-col justify-center bg-surface-card">
            <div class="w-full max-w-md mx-auto">
                <h2 class="text-3xl font-bold text-brand-navy mb-2">Resident Login</h2>
                <p class="text-gray-500 text-sm mb-8">Please sign in to access your dashboard.</p>
                
                <form id="loginForm" class="space-y-4">
                    <!-- Email Input -->
                    <div>
                        <label for="email" class="block text-sm font-bold text-brand-navy mb-2">Email Address</label>
                        <input 
                            type="email" 
                            id="email" 
                            name="email"
                            value="adogong@ssct.edu.ph"
                            class="w-full px-4 py-3 rounded-lg border border-gray-200 bg-gray-50 text-gray-800 focus:bg-white focus:ring-2 focus:ring-brand-teal focus:border-transparent transition-all outline-none" 
                            required
                        >
                    </div>
                    
                    <!-- Password Input -->
                    <div>
                        <label for="password" class="block text-sm font-bold text-brand-navy mb-2">Password</label>
                        <input 
                            type="password" 
                            id="password" 
                            name="password"
                            value="password123"
                            class="w-full px-4 py-3 rounded-lg border border-gray-200 bg-gray-50 text-gray-800 focus:bg-white focus:ring-2 focus:ring-brand-teal focus:border-transparent transition-all outline-none" 
                            required
                        >
                    </div>
                    
                    <!-- Options Row -->
                    <div class="flex items-center justify-between pt-2 mb-2">
                        <label class="flex items-center gap-2 cursor-pointer group">
                            <input 
                                type="checkbox" 
                                name="remember"
                                checked
                                class="w-4 h-4 text-brand-teal rounded border-gray-300 focus:ring-brand-teal cursor-pointer bg-brand-teal"
                            >
                            <span class="text-sm font-medium text-brand-navy">Remember me</span>
                        </label>
                        <a href="#" class="text-sm text-brand-teal font-bold hover:text-brand-tealHover transition-colors">
                            Forgot Password?
                        </a>
                    </div>
                    
                    <!-- Login Button -->
<button type="submit" class="w-full bg-brand-teal text-white font-bold py-3 rounded-xl text-xs">Login</button>
</form>
                
            <div class="text-center mt-6">
    <a href="/admin/login" class="text-sm font-medium text-gray-500 hover:text-brand-navy transition-colors">Sign in as Admin</a>
</div>
            <!-- Sign Up Link -->
            <p class="text-center mt-8 text-sm font-medium text-gray-500">
                Don't have an account? 
                <a href="/register" class="text-brand-navy font-bold hover:text-brand-teal transition-colors">CREATE ACCOUNT</a>
            </p>
                <!-- Footer Links -->
                <div class="mt-6 flex justify-center space-x-6 text-xs text-gray-400 font-medium">
                    <a href="#" class="hover:text-gray-500">Privacy Policy</a>
                    <a href="#" class="hover:text-gray-500">Terms of Service</a>
                    <a href="#" class="hover:text-gray-500">Help Center</a>
                </div>
            </div>
        </div>
        
    </main>
    <script>
    document.getElementById('loginForm').addEventListener('submit', function(e) {
        e.preventDefault();
        // I-save ang mock session sa localStorage
        localStorage.setItem('bp_role', 'resident');
        localStorage.setItem('bp_logged_in', 'true');
        
        // Redirect sa Resident Dashboard
        window.location.href = '/resident/dashboard';
    });
</script>
</body>
</html>