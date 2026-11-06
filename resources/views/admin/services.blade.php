@extends('layouts.admin')

@section('title', 'Services Request Management')

@section('content')
<!-- Top Metric Cards -->
<div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8">
    <div class="bg-surface-card p-6 rounded-2xl border border-gray-100 shadow-sm flex items-center justify-between">
        <div>
            <p class="text-[10px] font-bold text-gray-400 uppercase tracking-wider">Total Requests</p>
            <p class="text-3xl font-extrabold text-brand-navy mt-1">148</p>
        </div>
        <span class="text-xs font-bold text-brand-teal bg-teal-50 px-2.5 py-1 rounded-lg">↗ +12%</span>
    </div>
    <div class="bg-surface-card p-6 rounded-2xl border border-gray-100 shadow-sm flex items-center justify-between">
        <div>
            <p class="text-[10px] font-bold text-gray-400 uppercase tracking-wider">Pending Approval</p>
            <p class="text-3xl font-extrabold text-amber-600 mt-1">34</p>
        </div>
        <span class="text-[10px] font-bold text-gray-400 italic">Needs review</span>
    </div>
    <div class="bg-surface-card p-6 rounded-2xl border border-gray-100 shadow-sm flex items-center justify-between">
        <div>
            <p class="text-[10px] font-bold text-gray-400 uppercase tracking-wider">Completed Today</p>
            <p class="text-3xl font-extrabold text-brand-teal mt-1">18</p>
        </div>
        <span class="text-[10px] font-bold text-gray-400">Target: 25</span>
    </div>
</div>

<!-- Main Table Card -->
<div class="bg-surface-card p-6 rounded-2xl border border-gray-100 shadow-sm space-y-6 mb-8">
    <div class="flex flex-col sm:flex-row justify-between items-center gap-4">
        <h3 class="font-bold text-brand-navy text-base">Service Requests Management</h3>
        <div class="flex items-center gap-3">
            <select class="bg-gray-50 border border-gray-200 text-xs font-bold text-gray-700 rounded-xl px-3 py-2 outline-none">
                <option>All Service Types</option>
                <option>Indigency Certificate</option>
                <option>Health Consultation</option>
            </select>
            <select class="bg-gray-50 border border-gray-200 text-xs font-bold text-gray-700 rounded-xl px-3 py-2 outline-none">
                <option>Status: Pending</option>
                <option>Approved</option>
                <option>Scheduled</option>
            </select>
            <button class="bg-brand-teal hover:bg-brand-tealHover text-white font-bold px-4 py-2 rounded-xl text-xs shadow-sm transition">
                Export CSV
            </button>
        </div>
    </div>

    <!-- Table -->
    <div class="overflow-x-auto">
        <table class="w-full text-left border-collapse">
            <thead>
                <tr class="border-b border-gray-100 text-[10px] font-bold text-gray-400 uppercase tracking-wider">
                    <th class="pb-3">Applicant</th>
                    <th class="pb-3">Service Type</th>
                    <th class="pb-3">Date Requested</th>
                    <th class="pb-3">Priority</th>
                    <th class="pb-3">Status</th>
                    <th class="pb-3 text-right">Action</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-gray-50 text-xs">
                <tr class="hover:bg-gray-50/50 transition">
                    <td class="py-4 flex items-center gap-3">
                        <div class="w-8 h-8 rounded-full bg-cover bg-center" style="background-image: url('https://images.unsplash.com/photo-1494790108377-be9c29b29330?auto=format&fit=crop&q=80&w=200')"></div>
                        <span class="font-bold text-brand-navy">Maria Clara</span>
                    </td>
                    <td class="py-4 text-gray-600 font-medium">Indigency Certificate</td>
                    <td class="py-4 text-gray-500">Oct 24, 2023</td>
                    <td class="py-4 font-bold text-gray-600">Normal</td>
                    <td class="py-4"><span class="bg-amber-100 text-amber-800 px-2.5 py-1 rounded-full text-[10px] font-bold">PENDING</span></td>
                    <td class="py-4 text-right"><button class="bg-brand-teal text-white font-bold px-3 py-1.5 rounded-xl text-xs shadow-sm">Manage</button></td>
                </tr>
                <tr class="hover:bg-gray-50/50 transition">
                    <td class="py-4 flex items-center gap-3">
                        <div class="w-8 h-8 rounded-full bg-cover bg-center" style="background-image: url('https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?auto=format&fit=crop&q=80&w=200')"></div>
                        <span class="font-bold text-brand-navy">Jose Rizal</span>
                    </td>
                    <td class="py-4 text-gray-600 font-medium">Health Consultation</td>
                    <td class="py-4 text-gray-500">Oct 24, 2023</td>
                    <td class="py-4 font-bold text-blue-600">High</td>
                    <td class="py-4"><span class="bg-blue-100 text-blue-800 px-2.5 py-1 rounded-full text-[10px] font-bold">SCHEDULED</span></td>
                    <td class="py-4 text-right"><button class="bg-brand-teal text-white font-bold px-3 py-1.5 rounded-xl text-xs shadow-sm">Manage</button></td>
                </tr>
                <tr class="hover:bg-gray-50/50 transition">
                    <td class="py-4 flex items-center gap-3">
                        <div class="w-8 h-8 rounded-full bg-cover bg-center" style="background-image: url('https://images.unsplash.com/photo-1500648767791-00dcc994a43e?auto=format&fit=crop&q=80&w=200')"></div>
                        <span class="font-bold text-brand-navy">Juan Luna</span>
                    </td>
                    <td class="py-4 text-gray-600 font-medium">Barangay Clearance</td>
                    <td class="py-4 text-gray-500">Oct 23, 2023</td>
                    <td class="py-4 font-bold text-gray-600">Normal</td>
                    <td class="py-4"><span class="bg-amber-100 text-amber-800 px-2.5 py-1 rounded-full text-[10px] font-bold">PENDING</span></td>
                    <td class="py-4 text-right"><button class="bg-brand-teal text-white font-bold px-3 py-1.5 rounded-xl text-xs shadow-sm">Manage</button></td>
                </tr>
                <tr class="hover:bg-gray-50/50 transition">
                    <td class="py-4 flex items-center gap-3">
                        <div class="w-8 h-8 rounded-full bg-cover bg-center" style="background-image: url('https://images.unsplash.com/photo-1534528741775-53994a69daeb?auto=format&fit=crop&q=80&w=200')"></div>
                        <span class="font-bold text-brand-navy">Gabriela Silang</span>
                    </td>
                    <td class="py-4 text-gray-600 font-medium">Emergency Financial Aid</td>
                    <td class="py-4 text-gray-500">Oct 22, 2023</td>
                    <td class="py-4 font-bold text-red-600">Urgent</td>
                    <td class="py-4"><span class="bg-red-100 text-red-800 px-2.5 py-1 rounded-full text-[10px] font-bold">URGENT</span></td>
                    <td class="py-4 text-right"><button class="bg-brand-teal text-white font-bold px-3 py-1.5 rounded-xl text-xs shadow-sm">Manage</button></td>
                </tr>
            </tbody>
        </table>
    </div>

    <!-- Pagination -->
    <div class="flex justify-between items-center pt-4 border-t border-gray-100 text-xs text-gray-500 font-medium">
        <span>Showing 1 to 4 of 34 pending requests</span>
        <div class="flex items-center gap-1">
            <button class="px-3 py-1.5 rounded-lg border border-gray-200">&lt;</button>
            <button class="px-3 py-1.5 rounded-lg bg-brand-teal text-white font-bold">1</button>
            <button class="px-3 py-1.5 rounded-lg border border-gray-200">2</button>
            <button class="px-3 py-1.5 rounded-lg border border-gray-200">3</button>
            <button class="px-3 py-1.5 rounded-lg border border-gray-200">&gt;</button>
        </div>
    </div>
</div>

<!-- Bottom Section: Logs & Trend -->
<div class="grid grid-cols-1 xl:grid-cols-2 gap-8">
    <div class="bg-surface-card p-6 rounded-2xl border border-gray-100 shadow-sm space-y-4">
        <h3 class="font-bold text-brand-navy text-base">Recent Completed Logs</h3>
        <div class="space-y-3">
            <div class="flex justify-between items-center p-3 bg-gray-50 rounded-xl text-xs">
                <div>
                    <p class="font-bold text-brand-navy">Andres Bonifacio</p>
                    <p class="text-[10px] text-gray-400">Indigency Certificate • Approved</p>
                </div>
                <span class="text-[10px] text-gray-400">10m ago</span>
            </div>
            <div class="flex justify-between items-center p-3 bg-gray-50 rounded-xl text-xs">
                <div>
                    <p class="font-bold text-brand-navy">Apolinario Mabini</p>
                    <p class="text-[10px] text-gray-400">Business Permit • Completed</p>
                </div>
                <span class="text-[10px] text-gray-400">1h ago</span>
            </div>
        </div>
        <a href="#" class="text-xs font-bold text-brand-teal hover:underline block pt-2">View All Activity Logs &rarr;</a>
    </div>

    <div class="bg-surface-card p-6 rounded-2xl border border-gray-100 shadow-sm space-y-4">
        <h3 class="font-bold text-brand-navy text-base">Requests Trend</h3>
        <div class="h-40 bg-gray-50 rounded-xl flex items-center justify-center border border-gray-100">
            <p class="text-xs text-gray-400 font-medium">[ Weekly Trend Chart Graphic ]</p>
        </div>
    </div>
</div>
@endsection