@extends('layouts.app')

@section('title', 'My Profile')
@section('header', 'Resident Profile')
@section('sub-header', 'Manage your account information and view your activity history')

@section('content')
<div class="grid grid-cols-1 xl:grid-cols-3 gap-8">
    
    <!-- Left Column: User Card & Settings -->
    <div class="space-y-6">
        <!-- Profile Card -->
        <div class="bg-surface-card p-6 rounded-2xl border border-gray-100 shadow-sm text-center space-y-4">
            <div class="relative w-28 h-28 mx-auto">
                <div class="w-full h-full rounded-full bg-gray-200 bg-cover bg-center border-4 border-teal-50 shadow-inner" style="background-image: url('https://images.unsplash.com/photo-1535713875002-d1d0cf377fde?auto=format&fit=crop&q=80&w=200')"></div>
                <span class="absolute bottom-0 right-0 w-8 h-8 bg-brand-teal text-white rounded-full flex items-center justify-center text-xs shadow-md border-2 border-white cursor-pointer">📷</span>
            </div>
            <div>
                <h3 class="font-extrabold text-brand-navy text-lg">Antion-Delmar Dogong</h3>
                <span class="bg-teal-50 text-brand-teal px-3 py-1 rounded-full text-[10px] font-bold uppercase tracking-wider mt-1 inline-block">Resident</span>
            </div>

            <div class="border-t border-gray-100 pt-4 text-left space-y-3 text-xs">
                <div class="flex items-center gap-3 text-gray-600">
                    <span class="text-gray-400">📞</span>
                    <span class="font-bold text-brand-navy">+63 912 345 6789</span>
                </div>
                <div class="flex items-center gap-3 text-gray-600">
                    <span class="text-gray-400">✉️</span>
                    <span class="font-bold text-brand-navy">adogong@ssct.edu.ph</span>
                </div>
                <div class="flex items-center gap-3 text-gray-600">
                    <span class="text-gray-400">📍</span>
                    <span class="font-bold text-brand-navy">p5 barangay sukailang, surigao city</span>
                </div>
            </div>

<a href="/resident/profile/edit" class="block w-full bg-brand-navy hover:bg-slate-800 text-white font-bold py-2.5 rounded-xl text-xs shadow-sm transition text-center">
    Edit Profile
</a>
        </div>

        <!-- Account Settings -->
        <div class="bg-surface-card p-6 rounded-2xl border border-gray-100 shadow-sm space-y-3">
            <h4 class="font-bold text-brand-navy text-sm mb-4">Account Settings</h4>
            <a href="#" class="flex justify-between items-center p-3 rounded-xl bg-gray-50 hover:bg-gray-100 text-xs font-bold text-gray-700 transition">
                <span>Change Password</span>
                <span>&rarr;</span>
            </a>
            <a href="#" class="flex justify-between items-center p-3 rounded-xl bg-gray-50 hover:bg-gray-100 text-xs font-bold text-gray-700 transition">
                <span>Notification Preferences</span>
                <span>&rarr;</span>
            </a>
            <a href="#" class="flex justify-between items-center p-3 rounded-xl bg-gray-50 hover:bg-gray-100 text-xs font-bold text-gray-700 transition">
                <span>Privacy Policy</span>
                <span>&rarr;</span>
            </a>
            <a href="/" class="flex justify-between items-center p-3 rounded-xl bg-red-50 hover:bg-red-100 text-xs font-bold text-red-600 transition">
                <span>Logout Session</span>
                <span>&rarr;</span>
            </a>
        </div>
    </div>

    <!-- Right Column: My Activities & Feedback Reports -->
    <div class="xl:col-span-2 space-y-6">
        
        <!-- My Activities -->
        <div class="bg-surface-card p-6 rounded-2xl border border-gray-100 shadow-sm space-y-4">
            <div class="flex justify-between items-center">
                <h3 class="font-bold text-brand-navy text-base">My Activities</h3>
                <a href="#" class="text-xs font-bold text-brand-teal hover:underline">View All</a>
            </div>
            <p class="text-xs text-gray-400">History of community events you've joined.</p>

            <div class="space-y-3">
                <div class="flex justify-between items-center p-4 bg-gray-50 rounded-xl border border-gray-100 hover:bg-gray-100 transition cursor-pointer">
                    <div class="flex items-center gap-3">
                        <div class="w-10 h-10 rounded-xl bg-gray-200 bg-cover bg-center" style="background-image: url('https://images.unsplash.com/photo-1559027615-cd4628902d4a?auto=format&fit=crop&q=80&w=200')"></div>
                        <div>
                            <h4 class="font-bold text-brand-navy text-sm">Grand Community Clean-up Drive</h4>
                            <p class="text-[10px] text-gray-500">📅 Oct 12, 2026 • <span class="text-teal-600 font-bold">Completed</span></p>
                        </div>
                    </div>
                    <span class="text-gray-400">&rarr;</span>
                </div>

                <div class="flex justify-between items-center p-4 bg-gray-50 rounded-xl border border-gray-100 hover:bg-gray-100 transition cursor-pointer">
                    <div class="flex items-center gap-3">
                        <div class="w-10 h-10 rounded-xl bg-gray-200 bg-cover bg-center" style="background-image: url('https://images.unsplash.com/photo-1576091160399-112ba8d25d1d?auto=format&fit=crop&q=80&w=200')"></div>
                        <div>
                            <h4 class="font-bold text-brand-navy text-sm">Quarterly Health & Dental Mission</h4>
                            <p class="text-[10px] text-gray-500">📅 Sept 28, 2026 • <span class="text-teal-600 font-bold">Completed</span></p>
                        </div>
                    </div>
                    <span class="text-gray-400">&rarr;</span>
                </div>

                <div class="flex justify-between items-center p-4 bg-gray-50 rounded-xl border border-gray-100 hover:bg-gray-100 transition cursor-pointer">
                    <div class="flex items-center gap-3">
                        <div class="w-10 h-10 rounded-xl bg-gray-200 bg-cover bg-center" style="background-image: url('https://images.unsplash.com/photo-1574629810360-7efbbe195018?auto=format&fit=crop&q=80&w=200')"></div>
                        <div>
                            <h4 class="font-bold text-brand-navy text-sm">Purok 2 Basketball Invitational</h4>
                            <p class="text-[10px] text-gray-500">📅 Aug 15, 2026 • <span class="text-teal-600 font-bold">Completed</span></p>
                        </div>
                    </div>
                    <span class="text-gray-400">&rarr;</span>
                </div>
            </div>
        </div>

        <!-- My Feedback Reports -->
        <div class="bg-surface-card p-6 rounded-2xl border border-gray-100 shadow-sm space-y-4">
            <div class="flex justify-between items-center">
                <h3 class="font-bold text-brand-navy text-base">My Feedback Reports</h3>
                <a href="/resident/submit-report" class="bg-teal-50 text-brand-teal hover:bg-teal-100 px-3 py-1.5 rounded-xl text-xs font-bold transition">+ Submit New Report</a>
            </div>
            <p class="text-xs text-gray-400">Track the progress of your submitted concerns.</p>

            <div class="space-y-3">
                <div class="flex justify-between items-center p-4 bg-gray-50 rounded-xl border border-gray-100 hover:bg-gray-100 transition cursor-pointer">
                    <div class="flex items-start gap-3">
                        <div class="w-10 h-10 rounded-xl bg-amber-50 text-amber-600 flex items-center justify-center font-bold">💡</div>
                        <div>
                            <div class="flex items-center gap-2">
                                <span class="bg-amber-100 text-amber-800 text-[9px] font-bold px-2 py-0.5 rounded-full">IN PROGRESS</span>
                                <span class="text-[10px] text-gray-400 font-medium">Case #2026-045</span>
                            </div>
                            <h4 class="font-bold text-brand-navy text-sm mt-1">Defective Streetlight in Alley 4</h4>
                            <p class="text-[11px] text-gray-500 line-clamp-1 mt-0.5">The light near the corner of the mini-store has been flickering for three nights...</p>
                        </div>
                    </div>
                    <span class="text-gray-400">&rarr;</span>
                </div>

                <div class="flex justify-between items-center p-4 bg-gray-50 rounded-xl border border-gray-100 hover:bg-gray-100 transition cursor-pointer">
                    <div class="flex items-start gap-3">
                        <div class="w-10 h-10 rounded-xl bg-teal-50 text-brand-teal flex items-center justify-center font-bold">🗑️</div>
                        <div>
                            <div class="flex items-center gap-2">
                                <span class="bg-green-100 text-green-800 text-[9px] font-bold px-2 py-0.5 rounded-full">RESOLVED</span>
                                <span class="text-[10px] text-gray-400 font-medium">Case #2026-012</span>
                            </div>
                            <h4 class="font-bold text-brand-navy text-sm mt-1">Missed Garbage Collection</h4>
                            <p class="text-[11px] text-gray-500 line-clamp-1 mt-0.5">The truck did not pass through our block last Tuesday. Collected the following day...</p>
                        </div>
                    </div>
                    <span class="text-gray-400">&rarr;</span>
                </div>
            </div>
        </div>

    </div>

</div>
@endsection