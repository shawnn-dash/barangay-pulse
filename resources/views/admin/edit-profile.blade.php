@extends('layouts.admin')

@section('title', 'Admin Edit Profile')

@section('content')
<!-- Top Breadcrumb & Header -->
<div class="flex justify-between items-center mb-6">
    <div>
        <div class="text-[11px] font-bold text-brand-teal mb-1">BarangayPulse / My Profile / Edit Profile</div>
        <h2 class="text-2xl font-extrabold text-brand-navy">Edit Administrator Profile</h2>
        <p class="text-xs text-gray-500 mt-0.5">Keep your administrative credentials and contact details up-to-date.</p>
    </div>
    <a href="/admin/profile" class="bg-surface-card border border-gray-200 hover:bg-gray-50 text-brand-navy font-bold px-4 py-2 rounded-xl text-xs transition flex items-center gap-1 shadow-sm">
        &larr; Back to Profile
    </a>
</div>

<div class="grid grid-cols-1 xl:grid-cols-3 gap-8">
    
    <!-- Left Column: Edit Form -->
    <div class="xl:col-span-2 bg-surface-card p-8 rounded-2xl border border-gray-100 shadow-sm space-y-6">
        <div class="flex items-center gap-3 pb-4 border-b border-gray-100">
            <div class="w-10 h-10 bg-teal-50 text-brand-teal rounded-xl flex items-center justify-center font-bold">👤</div>
            <div>
                <h3 class="font-bold text-brand-navy text-sm">Personal Information</h3>
                <p class="text-[11px] text-gray-400">Update your administrator photo and credentials here.</p>
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

        <form action="/admin/profile" method="GET" class="space-y-4">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <div>
                    <label class="block text-xs font-bold text-brand-navy mb-1">Full Name</label>
                    <input type="text" value="Antion Delmar" class="w-full bg-gray-50 border border-gray-200 text-xs font-medium text-gray-700 rounded-xl p-3 outline-none focus:ring-2 focus:ring-brand-teal">
                </div>
                <div>
                    <label class="block text-xs font-bold text-brand-navy mb-1">Contact Number</label>
                    <input type="text" value="+63 917 123 4567" class="w-full bg-gray-50 border border-gray-200 text-xs font-medium text-gray-700 rounded-xl p-3 outline-none focus:ring-2 focus:ring-brand-teal">
                </div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <div>
                    <label class="block text-xs font-bold text-brand-navy mb-1">Email Address</label>
                    <input type="email" value="delmar.admin@sukailang.gov.ph" class="w-full bg-gray-50 border border-gray-200 text-xs font-medium text-gray-700 rounded-xl p-3 outline-none focus:ring-2 focus:ring-brand-teal">
                </div>
                <div>
                    <label class="block text-xs font-bold text-brand-navy mb-1">Assigned Sector</label>
                    <input type="text" value="Purok 1 & Purok 2" class="w-full bg-gray-50 border border-gray-200 text-xs font-medium text-gray-700 rounded-xl p-3 outline-none focus:ring-2 focus:ring-brand-teal">
                </div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <div>
                    <label class="block text-xs font-bold text-brand-navy mb-1">Role / Position</label>
                    <input type="text" value="Lead Barangay Administrator" class="w-full bg-gray-50 border border-gray-200 text-xs font-medium text-gray-700 rounded-xl p-3 outline-none focus:ring-2 focus:ring-brand-teal">
                </div>
                <div>
                    <label class="block text-xs font-bold text-brand-navy mb-1">Employee ID</label>
                    <input type="text" value="BSK-2023-042" disabled class="w-full bg-gray-100 border border-gray-200 text-xs font-medium text-gray-500 rounded-xl p-3 outline-none cursor-not-allowed">
                </div>
            </div>

            <!-- Action Buttons -->
            <div class="flex justify-end gap-3 pt-4 border-t border-gray-100">
                <a href="/admin/profile" class="px-6 py-2.5 rounded-xl bg-gray-100 hover:bg-gray-200 font-bold text-xs text-gray-700 transition text-center">Discard Changes</a>
                <a href="/admin/profile" class="px-6 py-2.5 rounded-xl bg-brand-teal hover:bg-brand-tealHover font-bold text-xs text-white shadow-sm transition text-center">Save Profile</a>
            </div>
        </form>
    </div>

    <!-- Right Column: Security & Role Info -->
    <div class="space-y-6">
        <div class="bg-surface-card p-6 rounded-2xl border border-gray-100 shadow-sm space-y-3">
            <h4 class="font-bold text-brand-navy text-xs uppercase tracking-wider text-teal-600 flex items-center gap-2">
                <span>🛡️</span> Security Notice
            </h4>
            <p class="text-[11px] text-gray-500 leading-relaxed">
                Changes to administrative credentials like email and contact number will require re-authentication for security compliance.
            </p>
        </div>

        <div class="bg-brand-navy p-6 rounded-2xl text-white space-y-2 shadow-sm">
            <h4 class="font-bold text-xs uppercase tracking-wider text-teal-400">💡 Admin Guidelines</h4>
            <p class="text-[11px] text-gray-300 leading-relaxed">
                Ensure your contact information is active so that system alerts and urgent inter-barangay notifications reach you immediately.
            </p>
        </div>
    </div>

</div>
@endsection