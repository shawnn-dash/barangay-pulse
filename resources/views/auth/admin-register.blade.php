<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BarangayPulse - Admin Registration</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-surface-bg font-sans text-slate-800 antialiased min-h-screen flex items-center justify-center p-4 sm:p-8">

    <main class="w-full max-w-5xl bg-surface-card rounded-2xl shadow-xl flex flex-col md:flex-row overflow-hidden h-[90vh] min-h-[600px]">
        
        <!-- Left Column: Branding -->
        <div class="md:w-5/12 bg-brand-navy text-white p-8 md:p-10 flex flex-col justify-between relative group hidden md:flex">
            
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
            </div>
        </div>

        <!-- Right Column: Registration Form (Scrollable) -->
        <div class="w-full md:w-7/12 p-8 md:p-12 flex flex-col bg-surface-card overflow-y-auto">
            <div class="w-full max-w-lg mx-auto">
                <h2 class="text-3xl font-bold text-brand-navy mb-1">Admin Registration</h2>
                <p class="text-gray-500 text-sm mb-6">Register to serve your community.</p>
                
                <!-- Role Selection -->
                <div class="grid grid-cols-2 gap-4 mb-6">
                    <a href="/register" class="border border-gray-200 hover:border-brand-teal rounded-lg p-4 text-center cursor-pointer transition block">
                        <div class="flex justify-center mb-2">
                            <svg class="w-6 h-6 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path></svg>
                        </div>
                        <h4 class="font-bold text-brand-navy text-sm">Resident</h4>
                        <p class="text-[10px] text-gray-500 mt-1">Access services and updates</p>
                    </a>
                    <div class="border-2 border-brand-teal bg-teal-50 rounded-lg p-4 text-center cursor-pointer block">
                        <div class="flex justify-center mb-2">
                            <svg class="w-6 h-6 text-brand-teal" fill="currentColor" viewBox="0 0 24 24"><path d="M4 10v7h3v-7H4zm6 0v7h3v-7h-3zM2 22h19v-3H2v3zm14-12v7h3v-7h-3zm-8.5-9L2 6v2h19V6l-9.5-5z"/></svg>
                        </div>
                        <h4 class="font-bold text-brand-navy text-sm">Barangay Admin</h4>
                        <p class="text-[10px] text-gray-500 mt-1">Manage barangay services</p>
                    </div>
                </div>

                <form action="/register/submitted" method="GET" class="space-y-4">
                    <!-- Basic Info -->
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

                    <div class="grid grid-cols-2 gap-4 mb-2">
                        <div>
                            <label class="block text-xs font-bold text-brand-navy mb-1">Password</label>
                            <input type="password" class="w-full px-4 py-2.5 rounded-lg border border-gray-200 bg-gray-50 text-sm focus:ring-2 focus:ring-brand-teal outline-none" placeholder="Enter your password" required>
                        </div>
                        <div>
                            <label class="block text-xs font-bold text-brand-navy mb-1">Confirm Password</label>
                            <input type="password" class="w-full px-4 py-2.5 rounded-lg border border-gray-200 bg-gray-50 text-sm focus:ring-2 focus:ring-brand-teal outline-none" placeholder="Confirm your password" required>
                        </div>
                    </div>

                    <!-- Official Details Section -->
                    <div class="pt-4 border-t border-gray-100">
                        <h3 class="flex items-center text-sm font-bold text-brand-navy mb-4">
                            <svg class="w-4 h-4 text-brand-teal mr-2" fill="currentColor" viewBox="0 0 24 24"><path d="M12 7V3H2v18h20V7H12zM6 19H4v-2h2v2zm0-4H4v-2h2v2zm0-4H4V9h2v2zm0-4H4V5h2v2zm4 12H8v-2h2v2zm0-4H8v-2h2v2zm0-4H8V9h2v2zm0-4H8V5h2v2zm10 12h-8v-2h2v-2h-2v-2h2v-2h-2V9h8v10zm-2-8h-2v2h2v-2zm0 4h-2v2h2v-2z"/></svg>
                            Official Details & Verification
                        </h3>

                        <div class="space-y-4">
                            <div>
                                <label class="block text-xs font-bold text-brand-navy mb-1">Barangay</label>
                                <input type="text" class="w-full px-4 py-2.5 rounded-lg border border-gray-200 bg-gray-50 text-sm focus:ring-2 focus:ring-brand-teal outline-none" placeholder="Enter your barangay name" required>
                            </div>

                            <div class="grid grid-cols-2 gap-4">
                                <div>
                                    <label class="block text-xs font-bold text-brand-navy mb-1">Position / Designation</label>
                                    <select class="w-full px-4 py-2.5 rounded-lg border border-gray-200 bg-gray-50 text-sm focus:ring-2 focus:ring-brand-teal outline-none text-gray-500" required>
                                        <option value="">Select position</option>
                                        <option value="captain">Barangay Captain</option>
                                        <option value="kagawad">Kagawad</option>
                                        <option value="secretary">Secretary</option>
                                    </select>
                                </div>
                                <div>
                                    <label class="block text-xs font-bold text-brand-navy mb-1">Proof of official status</label>
                                    <select class="w-full px-4 py-2.5 rounded-lg border border-gray-200 bg-gray-50 text-sm focus:ring-2 focus:ring-brand-teal outline-none text-gray-500" required>
                                        <option value="">Select document type</option>
                                        <option value="id">Official Barangay ID</option>
                                        <option value="oath">Oath of Office</option>
                                    </select>
                                </div>
                            </div>

                            <div>
                                <label class="block text-xs font-bold text-brand-navy mb-1">Upload your official ID or document</label>
                                <div class="mt-1 flex justify-center px-6 py-6 border-2 border-gray-200 border-dashed rounded-xl bg-gray-50 hover:bg-gray-100 transition cursor-pointer">
                                    <div class="text-center">
                                        <div class="flex justify-center mb-2">
                                            <svg class="w-6 h-6 text-brand-teal" fill="currentColor" viewBox="0 0 24 24"><path d="M19.35 10.04C18.67 6.59 15.64 4 12 4 9.11 4 6.6 5.64 5.36 8.04 2.34 8.36 0 10.91 0 14c0 3.31 2.69 6 6 6h13c2.76 0 5-2.24 5-5 0-2.64-2.05-4.78-4.65-4.96zM14 13v4h-4v-4H7l5-5 5 5h-3z"/></svg>
                                        </div>
                                        <p class="text-xs font-bold text-brand-navy mb-1">Click to upload or drag and drop</p>
                                        <p class="text-[10px] text-gray-500">JPG, PNG or PDF • Maximum 5 MB</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Verification Warning -->
                    <div class="bg-teal-50 border border-brand-teal rounded-lg p-3 flex items-start mt-4">
                        <svg class="w-4 h-4 text-brand-teal mr-2 flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-1 15h-2v-2h2v2zm0-4h-2V7h2v6z"/></svg>
                        <p class="text-[11px] text-brand-teal leading-snug">
                            <span class="font-bold">Verification required:</span> An authorized administrator will review your proof before official access is granted.
                        </p>
                    </div>

                    <button type="submit" class="w-full flex justify-center items-center gap-2 bg-brand-teal hover:bg-brand-tealHover text-white font-bold py-3 rounded-lg transition-all duration-200 shadow-sm mt-6">
                        Submit for Verification <span class="text-lg leading-none">&rarr;</span>
                    </button>
                </form>

                <p class="text-center text-[11px] text-gray-400 mt-3 pb-4">Your official account stays pending until your documents are reviewed.</p>

                <p class="text-center mt-4 text-xs font-medium text-gray-500">
                    Already have an account? <a href="/admin/login" class="text-brand-teal font-bold hover:underline">Log in</a>
                </p>
            </div>
        </div>
        
    </main>
</body>
</html>