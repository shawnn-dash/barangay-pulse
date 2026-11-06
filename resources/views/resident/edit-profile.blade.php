@extends('layouts.app')

@section('title', 'Edit Profile')
@section('breadcrumb', 'BarangayPulse / My Profile / Edit Profile')

@section('content')
<!-- Page Header Title -->
<div class="mb-6">
    <h2 class="text-2xl font-extrabold text-brand-navy">Edit Profile</h2>
    <p class="text-xs text-gray-500 mt-0.5">Keep your personal information and contact details up-to-date.</p>
</div>

<div class="grid grid-cols-1 xl:grid-cols-3 gap-8">
    
    <!-- Left / Center Column: Edit Form -->
    <div class="xl:col-span-2 bg-surface-card p-8 rounded-2xl border border-gray-100 shadow-sm space-y-6">
        
        <!-- Personal Information Section Header -->
        <div class="flex items-center gap-3 pb-4 border-b border-gray-100">
            <div class="w-10 h-10 bg-teal-50 text-brand-teal rounded-xl flex items-center justify-center font-bold">👤</div>
            <div>
                <h3 class="font-bold text-brand-navy text-sm">Personal information</h3>
                <p class="text-[11px] text-gray-400">Update your photo and personal details here.</p>
            </div>
        </div>

        <!-- Avatar Upload Row -->
        <div class="flex items-center gap-5 pb-6 border-b border-gray-100">
            <div class="w-16 h-16 rounded-full bg-cover bg-center ring-2 ring-brand-teal/30" style="background-image: url('https://images.unsplash.com/photo-1535713875002-d1d0cf377fde?auto=format&fit=crop&q=80&w=200')"></div>
            <div class="space-y-2">
                <div class="flex items-center gap-3">
                    <button type="button" class="bg-brand-teal hover:bg-brand-tealHover text-white font-bold px-4 py-2 rounded-xl text-xs shadow-sm transition">Upload New Photo</button>
                    <button type="button" class="text-gray-500 hover:text-red-600 font-bold text-xs transition">Remove</button>
                </div>
                <p class="text-[10px] text-gray-400">JPG, GIF or PNG. Max size of 800K</p>
            </div>
        </div>

        <!-- Form Fields -->
        <form action="/resident/profile" method="GET" class="space-y-4">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <div>
                    <label class="block text-xs font-bold text-brand-navy mb-1">First Name</label>
                    <input type="text" value="Antion-Delmar" class="w-full bg-gray-50 border border-gray-200 text-xs font-medium text-gray-700 rounded-xl p-3 outline-none focus:ring-2 focus:ring-brand-teal">
                </div>
                <div>
                    <label class="block text-xs font-bold text-brand-navy mb-1">Last Name</label>
                    <input type="text" value="Dogong" class="w-full bg-gray-50 border border-gray-200 text-xs font-medium text-gray-700 rounded-xl p-3 outline-none focus:ring-2 focus:ring-brand-teal">
                </div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <div>
                    <label class="block text-xs font-bold text-brand-navy mb-1">Email Address</label>
                    <input type="email" value="adogong@ssct.edu.ph" class="w-full bg-gray-50 border border-gray-200 text-xs font-medium text-gray-700 rounded-xl p-3 outline-none focus:ring-2 focus:ring-brand-teal">
                </div>
                <div>
                    <label class="block text-xs font-bold text-brand-navy mb-1">Contact Number</label>
                    <input type="text" value="09123456789" class="w-full bg-gray-50 border border-gray-200 text-xs font-medium text-gray-700 rounded-xl p-3 outline-none focus:ring-2 focus:ring-brand-teal">
                </div>
            </div>

            <div>
                <label class="block text-xs font-bold text-brand-navy mb-1">Home Address</label>
                <input type="text" value="Barangay Sukailang, Surigao City" class="w-full bg-gray-50 border border-gray-200 text-xs font-medium text-gray-700 rounded-xl p-3 outline-none focus:ring-2 focus:ring-brand-teal">
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <div>
                    <label class="block text-xs font-bold text-brand-navy mb-1">Purok</label>
                    <input type="text" value="Purok 5" class="w-full bg-gray-50 border border-gray-200 text-xs font-medium text-gray-700 rounded-xl p-3 outline-none focus:ring-2 focus:ring-brand-teal">
                </div>
                <div>
                    <label class="block text-xs font-bold text-brand-navy mb-1">Birth Date</label>
                    <input type="text" value="05/15/1995" class="w-full bg-gray-50 border border-gray-200 text-xs font-medium text-gray-700 rounded-xl p-3 outline-none focus:ring-2 focus:ring-brand-teal">
                </div>
            </div>

            <!-- Action Buttons -->
            <div class="flex justify-end gap-3 pt-4 border-t border-gray-100">
                <a href="/resident/profile" class="px-6 py-2.5 rounded-xl bg-gray-100 hover:bg-gray-200 font-bold text-xs text-gray-700 transition text-center">Discard Changes</a>
                <a href="/resident/profile" class="px-6 py-2.5 rounded-xl bg-brand-teal hover:bg-brand-tealHover font-bold text-xs text-white shadow-sm transition text-center">Save Profile</a>
            </div>
        </form>
    </div>

    <!-- Right Column: Sidebar Status Cards -->
    <div class="space-y-6">
        <!-- Resident Summary Card -->
        <div class="bg-surface-card p-6 rounded-2xl border border-gray-100 shadow-sm text-center space-y-3">
            <div class="w-20 h-20 mx-auto rounded-full bg-cover bg-center ring-2 ring-brand-teal/30" style="background-image: url('https://images.unsplash.com/photo-1535713875002-d1d0cf377fde?auto=format&fit=crop&q=80&w=200')"></div>
            <div>
                <h4 class="font-extrabold text-brand-navy text-base">Antion-Delmar Dogong</h4>
                <p class="text-xs text-gray-500 font-medium">Barangay Official</p>
                <p class="text-[11px] text-gray-400 mt-1">📍 Purok 5, Brgy. Sukailang</p>
            </div>

            <div class="border-t border-gray-100 pt-4 text-xs space-y-2">
                <div class="flex justify-between items-center text-gray-500">
                    <span>Account Status</span>
                    <span class="bg-green-100 text-green-800 font-bold px-2.5 py-0.5 rounded text-[10px]">VERIFIED</span>
                </div>
                <div class="flex justify-between items-center text-gray-500">
                    <span>Member Since</span>
                    <span class="font-bold text-brand-navy">May 2026</span>
                </div>
            </div>
        </div>

        <!-- Account Security Card -->
        <div class="bg-surface-card p-6 rounded-2xl border border-gray-100 shadow-sm space-y-2">
            <div class="flex items-center gap-2 text-brand-teal font-bold text-xs">
                <span>🛡️</span> Your account
            </div>
            <p class="text-[11px] text-gray-500 leading-relaxed">
                Your information is used to verify reports and announcements. Only authorized barangay officials can view your detailed contact information.
            </p>
        </div>

        <!-- Login Activity -->
        <div class="bg-surface-card p-6 rounded-2xl border border-gray-100 shadow-sm space-y-3">
            <h4 class="font-bold text-brand-navy text-xs uppercase tracking-wider">Login Activity</h4>
            <div class="flex items-start gap-3 p-3 bg-gray-50 rounded-xl border border-gray-100">
                <span class="text-base">💻</span>
                <div>
                    <p class="text-xs font-bold text-brand-navy">Surigao City, PH</p>
                    <p class="text-[10px] text-gray-400">Chrome on Windows • Active Now</p>
                </div>
            </div>
            <button class="w-full border border-gray-200 hover:bg-gray-50 text-brand-navy font-bold py-2 rounded-xl text-xs transition">
                View Login History
            </button>
        </div>
    </div>

</div>
@endsection