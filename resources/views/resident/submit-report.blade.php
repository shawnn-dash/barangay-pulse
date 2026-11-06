@extends('layouts.app')

@section('title', 'Community Reporting')
@section('header', 'Community Reporting')
@section('sub-header', 'Help improve our barangay by reporting issues and tracking their progress.')

@section('content')
<!-- Top Metric Cards -->
<div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8">
    <div class="bg-surface-card p-6 rounded-2xl border border-gray-100 shadow-sm flex items-center justify-between">
        <div>
            <p class="text-[10px] font-bold text-gray-400 uppercase tracking-wider">Total Submitted</p>
            <p class="text-3xl font-extrabold text-brand-navy mt-1">8</p>
        </div>
        <div class="w-12 h-12 bg-gray-100 text-gray-600 rounded-xl flex items-center justify-center">📁</div>
    </div>
    <div class="bg-surface-card p-6 rounded-2xl border border-gray-100 shadow-sm flex items-center justify-between">
        <div>
            <p class="text-[10px] font-bold text-gray-400 uppercase tracking-wider">In Progress</p>
            <p class="text-3xl font-extrabold text-brand-navy mt-1">3</p>
        </div>
        <div class="w-12 h-12 bg-amber-50 text-amber-600 rounded-xl flex items-center justify-center">⏳</div>
    </div>
    <div class="bg-surface-card p-6 rounded-2xl border border-gray-100 shadow-sm flex items-center justify-between">
        <div>
            <p class="text-[10px] font-bold text-gray-400 uppercase tracking-wider">Resolved</p>
            <p class="text-3xl font-extrabold text-brand-navy mt-1">5</p>
        </div>
        <div class="w-12 h-12 bg-teal-50 text-brand-teal rounded-xl flex items-center justify-center">✅</div>
    </div>
</div>

<div class="grid grid-cols-1 xl:grid-cols-3 gap-8">
    
    <!-- Left Column: Submit New Report Form -->
    <div class="xl:col-span-2 bg-surface-card rounded-2xl border border-gray-100 shadow-sm p-8">
        <h3 class="font-bold text-brand-navy text-lg mb-6">Submit New Report</h3>
        
        <form action="#" method="POST" class="space-y-5">
            @csrf
            <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
                <div>
                    <label class="block text-xs font-bold text-brand-navy mb-2">Report Category</label>
                    <select class="w-full bg-gray-50 border border-gray-200 text-sm font-medium text-gray-700 rounded-xl p-3 outline-none focus:ring-2 focus:ring-brand-teal">
                        <option>Infrastructure</option>
                        <option>Sanitation</option>
                        <option>Peace & Order</option>
                    </select>
                </div>
                <div>
                    <label class="block text-xs font-bold text-brand-navy mb-2">Report Title / Subject</label>
                    <input type="text" placeholder="Briefly state the issue" class="w-full bg-gray-50 border border-gray-200 text-sm font-medium text-gray-700 rounded-xl p-3 outline-none focus:ring-2 focus:ring-brand-teal">
                </div>
            </div>

            <div>
                <label class="block text-xs font-bold text-brand-navy mb-2">Exact Location</label>
                <input type="text" placeholder="e.g. Purok 4, Main Entrance near Park" class="w-full bg-gray-50 border border-gray-200 text-sm font-medium text-gray-700 rounded-xl p-3 outline-none focus:ring-2 focus:ring-brand-teal">
            </div>

            <div>
                <label class="block text-xs font-bold text-brand-navy mb-2">Detailed Description</label>
                <textarea rows="4" placeholder="Describe the concern in detail..." class="w-full bg-gray-50 border border-gray-200 text-sm font-medium text-gray-700 rounded-xl p-3 outline-none focus:ring-2 focus:ring-brand-teal"></textarea>
            </div>

            <div>
                <label class="block text-xs font-bold text-brand-navy mb-2">Photo / Evidence Upload</label>
                <div class="border-2 border-dashed border-gray-200 rounded-2xl p-6 text-center bg-gray-50 hover:bg-gray-100 transition cursor-pointer">
                    <div class="flex justify-center mb-2">
                        <svg class="w-8 h-8 text-brand-teal" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12"></path></svg>
                    </div>
                    <p class="text-xs font-bold text-brand-navy">Click to upload or drag and drop</p>
                    <p class="text-[10px] text-gray-400 mt-1">PNG, JPG up to 10MB</p>
                </div>
            </div>

            <div class="flex justify-end gap-3 pt-4 border-t border-gray-100">
                <button type="button" class="px-6 py-3 rounded-xl bg-gray-100 hover:bg-gray-200 font-bold text-xs text-gray-700 transition">Cancel</button>
                <button type="submit" class="px-6 py-3 rounded-xl bg-brand-teal hover:bg-brand-tealHover font-bold text-xs text-white shadow-sm transition">Submit Report</button>
            </div>
        </form>
    </div>

    <!-- Right Column: My Recent Reports -->
    <div class="space-y-6">
        <div class="bg-surface-card p-6 rounded-2xl border border-gray-100 shadow-sm space-y-4">
            <div class="flex justify-between items-center mb-2">
                <h3 class="font-bold text-brand-navy text-base">My Recent Reports</h3>
                <span class="text-[10px] text-gray-400 font-bold uppercase">Last 5 submissions</span>
            </div>

            <!-- Report Item 1 -->
            <div class="p-4 bg-gray-50 rounded-xl border border-gray-100 space-y-2">
                <div class="flex justify-between items-center">
                    <span class="text-[10px] font-bold text-gray-400">CASE #2026-045</span>
                    <span class="bg-amber-100 text-amber-800 text-[10px] font-bold px-2.5 py-0.5 rounded-full">IN PROGRESS</span>
                </div>
                <h4 class="font-bold text-brand-navy text-sm">Defective Streetlight at Block 4</h4>
                <div class="flex justify-between items-center text-[11px] text-gray-500 pt-1 border-t border-gray-200">
                    <span>Oct 24, 2026</span>
                    <a href="#" class="text-brand-teal font-bold hover:underline">View Details</a>
                </div>
            </div>

            <!-- Report Item 2 -->
            <div class="p-4 bg-gray-50 rounded-xl border border-gray-100 space-y-2">
                <div class="flex justify-between items-center">
                    <span class="text-[10px] font-bold text-gray-400">CASE #2026-048</span>
                    <span class="bg-yellow-100 text-yellow-800 text-[10px] font-bold px-2.5 py-0.5 rounded-full">PENDING</span>
                </div>
                <h4 class="font-bold text-brand-navy text-sm">Uncollected Waste - Purok 2</h4>
                <div class="flex justify-between items-center text-[11px] text-gray-500 pt-1 border-t border-gray-200">
                    <span>Oct 22, 2026</span>
                    <a href="#" class="text-brand-teal font-bold hover:underline">View Details</a>
                </div>
            </div>

            <!-- Report Item 3 -->
            <div class="p-4 bg-gray-50 rounded-xl border border-gray-100 space-y-2">
                <div class="flex justify-between items-center">
                    <span class="text-[10px] font-bold text-gray-400">CASE #2026-039</span>
                    <span class="bg-green-100 text-green-800 text-[10px] font-bold px-2.5 py-0.5 rounded-full">RESOLVED</span>
                </div>
                <h4 class="font-bold text-brand-navy text-sm">Pothole near Brgy Hall</h4>
                <div class="flex justify-between items-center text-[11px] text-gray-500 pt-1 border-t border-gray-200">
                    <span>Oct 15, 2026</span>
                    <a href="#" class="text-brand-teal font-bold hover:underline">View Details</a>
                </div>
            </div>

            <div class="pt-2 text-center">
                <a href="#" class="text-xs font-bold text-brand-teal hover:underline">View All My Reports</a>
            </div>
        </div>
    </div>

</div>
@endsection