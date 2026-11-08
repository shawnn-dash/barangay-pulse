@extends('layouts.admin')

@section('title', 'Admin My Profile')

@section('content')
<div x-data="{ editing: false }" class="space-y-8">
    
    <!-- Top Admin Banner (Nakatago o nananatili depende sa design preference, o pwede nating gawing dynamic) -->
    <div class="bg-brand-navy p-8 rounded-2xl text-white space-y-4 shadow-sm relative flex flex-col md:flex-row justify-between items-start md:items-center">
        <div class="space-y-1">
            <span class="bg-teal-500/20 text-teal-300 text-[10px] font-bold px-3 py-1 rounded-full uppercase tracking-wider">Account Settings</span>
            <h2 class="text-2xl font-extrabold mt-2" x-text="editing ? 'Edit Administrator Profile' : 'My Administrator Profile'"></h2>
            <p class="text-xs text-gray-300">Manage your personal information, security preferences, and view your recent system activities.</p>
        </div>
        <div class="mt-4 md:mt-0 flex items-center gap-4">
            <div class="w-16 h-16 rounded-full bg-brand-teal bg-cover bg-center border-2 border-white" style="background-image: url('{{ asset('images/fbprof.jpg') }}')"></div>
            <div>
                <p class="text-[10px] text-gray-400">Last Login:</p>
                <p class="text-xs font-bold text-white">Today, 8:45 AM</p>
            </div>
        </div>
    </div>

    <!-- NORMAL PROFILE VIEW (Lalabas kapag hindi nag-e-edit) -->
    <div x-show="!editing" class="grid grid-cols-1 xl:grid-cols-3 gap-8">
        
        <!-- Left / Center Column: Admin Details & Security -->
        <div class="xl:col-span-2 space-y-6">
            <div class="bg-surface-card p-6 rounded-2xl border border-gray-100 shadow-sm space-y-6">
                <div class="flex justify-between items-center border-b border-gray-100 pb-4">
                    <h3 class="font-bold text-brand-navy text-base">Admin Details</h3>
<a href="/admin/profile/edit" class="bg-brand-teal hover:bg-brand-tealHover text-white font-bold px-4 py-2 rounded-xl text-xs shadow-sm transition text-center inline-block">
    Edit Profile
</a>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-6 text-xs">
                    <div>
                        <p class="text-[10px] font-bold text-gray-400 uppercase">Full Name</p>
                        <p class="font-bold text-brand-navy text-sm mt-0.5">Antion Delmar</p>
                    </div>
                    <div>
                        <p class="text-[10px] font-bold text-gray-400 uppercase">Contact Number</p>
                        <p class="font-bold text-brand-navy text-sm mt-0.5">+63 917 123 4567</p>
                    </div>
                    <div>
                        <p class="text-[10px] font-bold text-gray-400 uppercase">Role</p>
                        <p class="font-bold text-brand-navy text-sm mt-0.5">Lead Barangay Administrator</p>
                    </div>
                    <div>
                        <p class="text-[10px] font-bold text-gray-400 uppercase">Email Address</p>
                        <p class="font-bold text-brand-navy text-sm mt-0.5">delmar.admin@sukailang.gov.ph</p>
                    </div>
                    <div>
                        <p class="text-[10px] font-bold text-gray-400 uppercase">Employee ID</p>
                        <p class="font-bold text-brand-navy text-sm mt-0.5">BSK-2023-042</p>
                    </div>
                    <div>
                        <p class="text-[10px] font-bold text-gray-400 uppercase">Assigned Sector</p>
                        <p class="font-bold text-brand-navy text-sm mt-0.5">Purok 1 & Purok 2</p>
                    </div>
                </div>
            </div>

            <!-- Account Security -->
            <div class="bg-surface-card p-6 rounded-2xl border border-gray-100 shadow-sm space-y-4">
                <h3 class="font-bold text-brand-navy text-base">Account Security</h3>
                
                <div class="p-4 bg-gray-50 rounded-xl border border-gray-100 flex flex-col sm:flex-row justify-between items-start sm:items-center gap-4">
                    <div>
                        <div class="flex items-center gap-2">
                            <span class="font-bold text-brand-navy text-xs">Password Management</span>
                            <span class="bg-green-100 text-green-800 text-[9px] font-bold px-2 py-0.5 rounded">SECURE</span>
                        </div>
                        <p class="text-[10px] text-gray-400 mt-1">Last changed 45 days ago. We recommend changing it every 90 days.</p>
                    </div>
                    <button class="bg-brand-navy hover:bg-slate-800 text-white font-bold px-4 py-2 rounded-xl text-xs transition">Change Password</button>
                </div>

                <div class="flex justify-between items-center p-4 bg-gray-50 rounded-xl border border-gray-100">
                    <div>
                        <p class="font-bold text-brand-navy text-xs">Two-Factor Authentication</p>
                        <p class="text-[10px] text-gray-400">Enabled via SMS</p>
                    </div>
                    <input type="checkbox" checked class="toggle accent-brand-teal w-5 h-5 cursor-pointer">
                </div>
            </div>
        </div>

        <!-- Right Column -->
        <div class="space-y-6">
            <div class="bg-surface-card p-6 rounded-2xl border border-gray-100 shadow-sm space-y-3">
                <div class="flex justify-between items-center">
                    <h3 class="font-bold text-brand-navy text-xs uppercase tracking-wider">Your Recent Activity</h3>
                    <a href="#" class="text-[10px] font-bold text-brand-teal hover:underline">Full Log &rarr;</a>
                </div>
                <div class="space-y-2 text-xs">
                    <div class="p-2.5 bg-gray-50 rounded-xl border border-gray-100">
                        <p class="font-bold text-brand-navy text-[11px]">Approved Indigency Certificate</p>
                        <p class="text-[9px] text-gray-400">10 mins ago • Maria Clara</p>
                    </div>
                    <div class="p-2.5 bg-gray-50 rounded-xl border border-gray-100">
                        <p class="font-bold text-brand-navy text-[11px]">Updated Announcement</p>
                        <p class="text-[9px] text-gray-400">1 hour ago • Juan Dela Cruz</p>
                    </div>
                </div>
            </div>

            <div class="bg-surface-card p-6 rounded-2xl border border-gray-100 shadow-sm">
                <h3 class="font-bold text-brand-navy text-xs uppercase tracking-wider mb-4">Quick Statistics</h3>
                <div class="grid grid-cols-2 gap-4 text-center">
                    <div class="p-4 bg-gray-50 rounded-xl border border-gray-100">
                        <p class="text-2xl font-extrabold text-brand-navy">142</p>
                        <p class="text-[9px] font-bold text-gray-400 uppercase tracking-wider mt-1">Requests Handled</p>
                    </div>
                    <div class="p-4 bg-teal-50/50 rounded-xl border border-teal-100">
                        <p class="text-2xl font-extrabold text-brand-teal">98%</p>
                        <p class="text-[9px] font-bold text-gray-400 uppercase tracking-wider mt-1">On-time Response</p>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection