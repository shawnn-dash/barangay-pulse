@extends('layouts.admin')

@section('title', 'Resident Reports')

@section('content')
<!-- Top Metric Cards -->
<div class="grid grid-cols-1 md:grid-cols-4 gap-6 mb-8">
    <div class="bg-surface-card p-6 rounded-2xl border border-gray-100 shadow-sm flex items-center justify-between">
        <div>
            <p class="text-[10px] font-bold text-gray-400 uppercase tracking-wider">Total Reports</p>
            <p class="text-3xl font-extrabold text-brand-navy mt-1">5</p>
        </div>
        <span class="text-xl">📁</span>
    </div>
    <div class="bg-surface-card p-6 rounded-2xl border border-gray-100 shadow-sm flex items-center justify-between">
        <div>
            <p class="text-[10px] font-bold text-gray-400 uppercase tracking-wider">Pending</p>
            <p class="text-3xl font-extrabold text-amber-600 mt-1">2</p>
        </div>
        <span class="text-xl">⏳</span>
    </div>
    <div class="bg-surface-card p-6 rounded-2xl border border-gray-100 shadow-sm flex items-center justify-between">
        <div>
            <p class="text-[10px] font-bold text-gray-400 uppercase tracking-wider">In Progress</p>
            <p class="text-3xl font-extrabold text-blue-600 mt-1">2</p>
        </div>
        <span class="text-xl">⚙️</span>
    </div>
    <div class="bg-surface-card p-6 rounded-2xl border border-gray-100 shadow-sm flex items-center justify-between">
        <div>
            <p class="text-[10px] font-bold text-gray-400 uppercase tracking-wider">Resolved</p>
            <p class="text-3xl font-extrabold text-brand-teal mt-1">1</p>
        </div>
        <span class="text-xl">✅</span>
    </div>
</div>

<!-- Filter Bar -->
<div class="bg-surface-card p-4 rounded-2xl border border-gray-100 shadow-sm mb-6 flex flex-col md:flex-row justify-between items-center gap-4">
    <div class="relative w-full md:w-80">
        <span class="absolute inset-y-0 left-0 flex items-center pl-3 text-gray-400">🔍</span>
        <input type="text" placeholder="Search by report, resident or case number..." class="w-full bg-gray-50 border border-gray-200 text-xs font-bold text-gray-700 rounded-xl pl-10 pr-4 py-2.5 outline-none">
    </div>
    <div class="flex items-center gap-3 w-full md:w-auto">
        <select class="bg-gray-50 border border-gray-200 text-xs font-bold text-gray-700 rounded-xl px-3 py-2.5 outline-none">
            <option>All Statuses</option>
            <option>Pending</option>
            <option>In Progress</option>
            <option>Resolved</option>
        </select>
        <select class="bg-gray-50 border border-gray-200 text-xs font-bold text-gray-700 rounded-xl px-3 py-2.5 outline-none">
            <option>All Categories</option>
            <option>Infrastructure</option>
            <option>Sanitation</option>
        </select>
    </div>
</div>

<!-- Main Split View -->
<div class="grid grid-cols-1 xl:grid-cols-3 gap-8">
    
    <!-- Left Column: Report Inbox -->
    <div class="xl:col-span-2 bg-surface-card p-6 rounded-2xl border border-gray-100 shadow-sm space-y-4">
        <div class="flex justify-between items-center mb-2">
            <h3 class="font-bold text-brand-navy text-base">Report Inbox</h3>
            <span class="text-[10px] font-bold text-gray-400 uppercase">5 reports</span>
        </div>

        <!-- Report Item 1 (Selected/Active) -->
        <div class="p-4 bg-teal-50/30 rounded-xl border-2 border-brand-teal space-y-2 cursor-pointer">
            <div class="flex justify-between items-center">
                <span class="text-[10px] font-bold text-gray-400">CASE #2026-045</span>
                <span class="bg-blue-100 text-blue-800 text-[10px] font-bold px-2.5 py-0.5 rounded-full">IN PROGRESS</span>
            </div>
            <h4 class="font-bold text-brand-navy text-sm">Defective Streetlight at Block 4</h4>
            <p class="text-xs text-gray-600 line-clamp-1">The streetlight located right at the entrance of Block 4 (near the sari-sari store)...</p>
            <div class="flex justify-between items-center text-[10px] text-gray-400 pt-2 border-t border-gray-100">
                <span>👤 Elena Gilbert</span>
                <span>2 hours ago</span>
            </div>
        </div>

        <!-- Report Item 2 -->
        <div class="p-4 bg-gray-50 rounded-xl border border-gray-100 space-y-2 cursor-pointer hover:bg-gray-100 transition">
            <div class="flex justify-between items-center">
                <span class="text-[10px] font-bold text-gray-400">CASE #2026-044</span>
                <span class="bg-amber-100 text-amber-800 text-[10px] font-bold px-2.5 py-0.5 rounded-full">PENDING</span>
            </div>
            <h4 class="font-bold text-brand-navy text-sm">Missed Garbage Collection</h4>
            <p class="text-xs text-gray-600 line-clamp-1">Our street was skipped during the scheduled Tuesday pickup...</p>
            <div class="flex justify-between items-center text-[10px] text-gray-400 pt-2 border-t border-gray-100">
                <span>👤 Marco Polo</span>
                <span>5 hours ago</span>
            </div>
        </div>

        <!-- Report Item 3 -->
        <div class="p-4 bg-gray-50 rounded-xl border border-gray-100 space-y-2 cursor-pointer hover:bg-gray-100 transition">
            <div class="flex justify-between items-center">
                <span class="text-[10px] font-bold text-gray-400">CASE #2026-043</span>
                <span class="bg-green-100 text-green-800 text-[10px] font-bold px-2.5 py-0.5 rounded-full">RESOLVED</span>
            </div>
            <h4 class="font-bold text-brand-navy text-sm">Abandoned Vehicle Reported</h4>
            <p class="text-xs text-gray-600 line-clamp-1">White sedan parked illegally for over a week near the park...</p>
            <div class="flex justify-between items-center text-[10px] text-gray-400 pt-2 border-t border-gray-100">
                <span>👤 John Watson</span>
                <span>Yesterday</span>
            </div>
        </div>
    </div>

    <!-- Right Column: Manage Report Details Panel -->
    <div class="bg-surface-card p-6 rounded-2xl border border-gray-100 shadow-sm space-y-6">
        <div>
            <div class="flex justify-between items-center mb-1">
                <span class="text-[10px] font-bold text-gray-400">CASE #2026-045</span>
                <span class="bg-blue-100 text-blue-800 text-[9px] font-bold px-2 py-0.5 rounded-full">IN PROGRESS</span>
            </div>
            <h3 class="font-bold text-brand-navy text-base">Defective Streetlight at Block 4 - Main Road Entrance</h3>
        </div>

        <!-- Resident Info Box -->
        <div class="flex items-center gap-3 p-3 bg-gray-50 rounded-xl border border-gray-100">
            <div class="w-9 h-9 rounded-full bg-cover bg-center" style="background-image: url('https://images.unsplash.com/photo-1494790108377-be9c29b29330?auto=format&fit=crop&q=80&w=200')"></div>
            <div>
                <p class="font-bold text-brand-navy text-xs">Elena Gilbert</p>
                <p class="text-[10px] text-gray-400">Resident of Purok 2 • +63 912 345 6789</p>
            </div>
        </div>

        <!-- Meta Details Grid -->
        <div class="grid grid-cols-2 gap-4 text-xs border-y border-gray-100 py-4">
            <div>
                <p class="text-[10px] font-bold text-gray-400 uppercase">Submitted</p>
                <p class="font-bold text-brand-navy mt-0.5">Oct 24, 2026 • 09:15 AM</p>
            </div>
            <div>
                <p class="text-[10px] font-bold text-gray-400 uppercase">Category</p>
                <p class="font-bold text-brand-navy mt-0.5">Infrastructure</p>
            </div>
            <div>
                <p class="text-[10px] font-bold text-gray-400 uppercase">Location</p>
                <p class="font-bold text-brand-navy mt-0.5">Block 4, Main Road Ent.</p>
            </div>
            <div>
                <p class="text-[10px] font-bold text-gray-400 uppercase">Priority</p>
                <p class="font-bold text-red-600 mt-0.5">High</p>
            </div>
        </div>

        <!-- Description -->
        <div class="space-y-1">
            <p class="text-[10px] font-bold text-gray-400 uppercase">Description</p>
            <p class="text-xs text-gray-600 leading-relaxed">
                The streetlight located right at the entrance of Block 4 (near the sari-sari store) has been flickering for almost 3 days. Last night it went out completely. It's very dark and unsafe for residents walking home late at night.
            </p>
        </div>

        <!-- Attachment -->
        <div class="p-3 bg-gray-50 rounded-xl border border-gray-100 flex items-center justify-between text-xs font-bold text-brand-teal">
            <span>📎 defect_streetlight_01.jpg (2.4 MB)</span>
            <span>⬇️</span>
        </div>

        <!-- Manage Report Form Controls -->
        <div class="space-y-4 pt-2 border-t border-gray-100">
            <h4 class="font-bold text-brand-navy text-xs uppercase tracking-wider">Manage Report</h4>
            
            <div>
                <label class="block text-[10px] font-bold text-gray-400 uppercase mb-1">Update Status</label>
                <select class="w-full bg-gray-50 border border-gray-200 text-xs font-bold text-gray-700 rounded-xl p-3 outline-none">
                    <option>In Progress</option>
                    <option>Pending</option>
                    <option>Resolved</option>
                </select>
            </div>

            <div>
                <label class="block text-[10px] font-bold text-gray-400 uppercase mb-1">Assign To</label>
                <select class="w-full bg-gray-50 border border-gray-200 text-xs font-bold text-gray-700 rounded-xl p-3 outline-none">
                    <option>Maintenance Team</option>
                    <option>Barangay Police</option>
                    <option>Sanitation Crew</option>
                </select>
            </div>

            <div>
                <label class="block text-[10px] font-bold text-gray-400 uppercase mb-1">Public Note / Reply</label>
                <textarea rows="3" placeholder="Provide an update or ask for more info..." class="w-full bg-gray-50 border border-gray-200 text-xs font-medium text-gray-700 rounded-xl p-3 outline-none resize-none"></textarea>
            </div>

            <div class="flex justify-end gap-2 pt-2">
                <button class="px-4 py-2 rounded-xl bg-gray-100 hover:bg-gray-200 font-bold text-xs text-gray-700 transition">Cancel</button>
                <button class="px-4 py-2 rounded-xl bg-brand-teal hover:bg-brand-tealHover font-bold text-xs text-white shadow-sm transition">Submit Update</button>
            </div>
        </div>

    </div>

</div>
@endsection