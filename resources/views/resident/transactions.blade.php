@extends('layouts.app')

@section('title', 'My Transactions')
@section('header', 'My Transactions')
@section('sub-header', 'Managing: Barangay Sukailang')

@section('content')
<div class="grid grid-cols-1 xl:grid-cols-3 gap-8">
    
    <!-- Left Column: Transactions List -->
    <div class="xl:col-span-2 space-y-6">
        <!-- Filter Bar -->
        <div class="bg-surface-card p-4 rounded-2xl border border-gray-100 shadow-sm flex flex-col sm:flex-row justify-between items-center gap-4">
            <span class="font-bold text-brand-navy text-sm">Filter Transactions</span>
            <div class="flex items-center gap-3 w-full sm:w-auto">
                <select class="bg-gray-50 border border-gray-200 text-xs font-bold text-gray-700 rounded-xl px-3 py-2 outline-none">
                    <option>All Service Types</option>
                    <option>Certificates</option>
                    <option>Appointments</option>
                </select>
                <select class="bg-gray-50 border border-gray-200 text-xs font-bold text-gray-700 rounded-xl px-3 py-2 outline-none">
                    <option>Status: All</option>
                    <option>Pending</option>
                    <option>Confirmed</option>
                </select>
            </div>
        </div>

        <!-- Transaction Card 1 -->
        <div class="bg-surface-card p-6 rounded-2xl border border-teal-500 shadow-sm relative overflow-hidden">
            <div class="absolute left-0 top-0 bottom-0 w-1.5 bg-brand-teal"></div>
            <div class="flex flex-col sm:flex-row justify-between items-start sm:items-center gap-4">
                <div>
                    <span class="text-[10px] font-bold text-gray-400 tracking-wider">IND-2023-0824</span>
                    <h4 class="font-bold text-brand-navy text-base mt-0.5">Certificate of Indigency</h4>
                    <p class="text-xs text-gray-500 mt-1">Aug 24, 2023</p>
                </div>
                <div class="flex items-center gap-4 w-full sm:w-auto justify-between sm:justify-end">
                    <span class="bg-amber-100 text-amber-800 px-3 py-1 rounded-full text-xs font-bold">Pending Review</span>
                    <a href="javascript:void(0);" class="text-xs font-bold text-brand-teal hover:underline flex items-center gap-1">View Details &rarr;</a>
                </div>
            </div>
        </div>

        <!-- Transaction Card 2 -->
        <div class="bg-surface-card p-6 rounded-2xl border border-gray-100 shadow-sm">
            <div class="flex flex-col sm:flex-row justify-between items-start sm:items-center gap-4">
                <div>
                    <span class="text-[10px] font-bold text-gray-400 tracking-wider">HCA-2023-0820</span>
                    <h4 class="font-bold text-brand-navy text-base mt-0.5">Health Appointment</h4>
                    <p class="text-xs text-gray-500 mt-1">Aug 20, 2023</p>
                </div>
                <div class="flex items-center gap-4 w-full sm:w-auto justify-between sm:justify-end">
                    <span class="bg-green-100 text-green-800 px-3 py-1 rounded-full text-xs font-bold">Confirmed</span>
                    <a href="javascript:void(0);" class="text-xs font-bold text-brand-teal hover:underline flex items-center gap-1">View Details &rarr;</a>
                </div>
            </div>
        </div>

        <!-- Transaction Card 3 -->
        <div class="bg-surface-card p-6 rounded-2xl border border-gray-100 shadow-sm">
            <div class="flex flex-col sm:flex-row justify-between items-start sm:items-center gap-4">
                <div>
                    <span class="text-[10px] font-bold text-gray-400 tracking-wider">BLT-2023-0815</span>
                    <h4 class="font-bold text-brand-navy text-base mt-0.5">Blotter Submission</h4>
                    <p class="text-xs text-gray-500 mt-1">Aug 15, 2023</p>
                </div>
                <div class="flex items-center gap-4 w-full sm:w-auto justify-between sm:justify-end">
                    <span class="bg-blue-100 text-blue-800 px-3 py-1 rounded-full text-xs font-bold">Under Investigation</span>
                    <a href="javascript:void(0);" class="text-xs font-bold text-brand-teal hover:underline flex items-center gap-1">View Details &rarr;</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Right Column: Transaction Details Sidebar -->
    <div class="space-y-6">
        <div class="bg-surface-card p-6 rounded-2xl border border-gray-100 shadow-sm space-y-6">
            <h3 class="font-bold text-brand-navy text-lg">Transaction Details</h3>
            
            <!-- Status History -->
            <div>
                <p class="text-[10px] font-bold text-gray-400 uppercase tracking-wider mb-4">Status History</p>
                <div class="space-y-4 relative pl-4 before:absolute before:left-1.5 before:top-2 before:bottom-2 before:w-0.5 before:bg-gray-200">
                    <div class="relative">
                        <span class="absolute -left-[21px] top-1 w-2.5 h-2.5 rounded-full bg-brand-teal ring-4 ring-teal-50"></span>
                        <p class="text-xs font-bold text-brand-navy">Staff Assigned</p>
                        <p class="text-[10px] text-gray-400">Aug 25, 2023 • 09:30 AM</p>
                        <p class="text-[11px] text-gray-600 italic mt-0.5">Assigned to Officer Jun Velasco</p>
                    </div>
                    <div class="relative opacity-50">
                        <span class="absolute -left-[21px] top-1 w-2.5 h-2.5 rounded-full bg-gray-300"></span>
                        <p class="text-xs font-bold text-gray-500">Approved</p>
                        <p class="text-[10px] text-gray-400">Pending action</p>
                    </div>
                    <div class="relative">
                        <span class="absolute -left-[21px] top-1 w-2.5 h-2.5 rounded-full bg-brand-teal ring-4 ring-teal-50"></span>
                        <p class="text-xs font-bold text-brand-navy">Submitted</p>
                        <p class="text-[10px] text-gray-400">Aug 24, 2023 • 02:15 PM</p>
                    </div>
                </div>
            </div>

            <!-- Staff Messages -->
            <div class="border-t border-gray-100 pt-5">
                <p class="text-[10px] font-bold text-gray-400 uppercase tracking-wider mb-3">Staff Messages</p>
                <div class="bg-gray-50 border border-gray-200 p-4 rounded-xl">
                    <div class="flex justify-between items-center mb-1">
                        <span class="text-xs font-bold text-brand-teal">Officer Jun Velasco</span>
                        <span class="text-[10px] text-gray-400">1 hour ago</span>
                    </div>
                    <p class="text-xs text-gray-700 leading-relaxed">Please upload a photo of your latest utility bill for verification.</p>
                </div>
            </div>
        </div>

        <!-- Action Buttons -->
        <div class="space-y-3">
            <button class="w-full border-2 border-dashed border-brand-teal text-brand-teal hover:bg-teal-50 font-bold py-3 rounded-xl text-xs transition flex items-center justify-center gap-2">
                📂 Upload Missing Document
            </button>
            <button class="w-full bg-brand-teal hover:bg-brand-tealHover text-white font-bold py-3 rounded-xl text-xs shadow-sm transition">
                Contact Support
            </button>
        </div>
    </div>

</div>
@endsection