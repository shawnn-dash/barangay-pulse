@extends('layouts.admin')

@section('title', 'Admin Infrastructure Management')

@section('content')
<!-- Top Metric Cards -->
<div class="grid grid-cols-1 md:grid-cols-4 gap-6 mb-8">
    <div class="bg-surface-card p-6 rounded-2xl border border-gray-100 shadow-sm flex items-center justify-between">
        <div>
            <p class="text-[10px] font-bold text-gray-400 uppercase tracking-wider">Total Projects</p>
            <p class="text-3xl font-extrabold text-brand-navy mt-1">14</p>
        </div>
        <span class="text-xl">🏗️</span>
    </div>
    <div class="bg-surface-card p-6 rounded-2xl border border-gray-100 shadow-sm flex items-center justify-between">
        <div>
            <p class="text-[10px] font-bold text-gray-400 uppercase tracking-wider">Ongoing Projects</p>
            <p class="text-3xl font-extrabold text-brand-teal mt-1">8</p>
        </div>
        <span class="text-xl">⚙️</span>
    </div>
    <div class="bg-surface-card p-6 rounded-2xl border border-gray-100 shadow-sm flex items-center justify-between">
        <div>
            <p class="text-[10px] font-bold text-gray-400 uppercase tracking-wider">Completed This Month</p>
            <p class="text-3xl font-extrabold text-brand-navy mt-1">3</p>
        </div>
        <span class="text-xl">✅</span>
    </div>
    <div class="bg-surface-card p-6 rounded-2xl border border-gray-100 shadow-sm flex items-center justify-between">
        <div>
            <p class="text-[10px] font-bold text-gray-400 uppercase tracking-wider">Total Budget Allocated</p>
            <p class="text-2xl font-extrabold text-brand-navy mt-1">₱4.2M</p>
        </div>
        <span class="text-xl">💰</span>
    </div>
</div>

<!-- Main Table Card -->
<div class="bg-surface-card p-6 rounded-2xl border border-gray-100 shadow-sm space-y-6 mb-8">
    <div class="flex flex-col sm:flex-row justify-between items-center gap-4">
        <div>
            <h3 class="font-bold text-brand-navy text-base">Infrastructure Management</h3>
            <p class="text-xs text-gray-400">Manage and monitor barangay infrastructure projects.</p>
        </div>
        <div class="flex items-center gap-3 w-full sm:w-auto">
            <input type="text" placeholder="Search projects..." class="bg-gray-50 border border-gray-200 text-xs font-bold text-gray-700 rounded-xl px-4 py-2.5 outline-none">
            <button class="bg-brand-teal hover:bg-brand-tealHover text-white font-bold px-4 py-2.5 rounded-xl text-xs shadow-sm transition">
                + Add New Project
            </button>
        </div>
    </div>

    <!-- Table -->
    <div class="overflow-x-auto">
        <table class="w-full text-left border-collapse">
            <thead>
                <tr class="border-b border-gray-100 text-[10px] font-bold text-gray-400 uppercase tracking-wider">
                    <th class="pb-3">Project Name</th>
                    <th class="pb-3">Location & Budget</th>
                    <th class="pb-3">Progress</th>
                    <th class="pb-3">Timeline</th>
                    <th class="pb-3">Status</th>
                    <th class="pb-3 text-right">Actions</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-gray-50 text-xs">
                <tr class="hover:bg-gray-50/50 transition">
                    <td class="py-4">
                        <p class="font-bold text-brand-navy">Street Lighting Phase 2</p>
                        <p class="text-[10px] text-gray-400">LED Installation & Wiring</p>
                    </td>
                    <td class="py-4">
                        <p class="font-bold text-brand-navy">Purok 4, Main Road</p>
                        <p class="text-[10px] text-brand-teal font-bold">₱250,000</p>
                    </td>
                    <td class="py-4 w-40">
                        <div class="flex justify-between text-[10px] font-bold text-gray-600 mb-1">
                            <span>65%</span>
                        </div>
                        <div class="w-full bg-gray-100 h-2 rounded-full overflow-hidden">
                            <div class="bg-brand-teal h-full w-[65%]" style="width: 65%;"></div>
                        </div>
                    </td>
                    <td class="py-4 text-gray-500">Oct 12 - Nov 30, 2023</td>
                    <td class="py-4"><span class="bg-blue-100 text-blue-800 px-3 py-1 rounded-full text-[9px] font-bold">ONGOING</span></td>
                    <td class="py-4 text-right space-x-1">
                        <button class="p-1.5 bg-gray-100 hover:bg-gray-200 rounded-lg">✏️</button>
                        <button class="p-1.5 bg-gray-100 hover:bg-gray-200 rounded-lg">👁️</button>
                        <button class="p-1.5 bg-red-50 hover:bg-red-100 text-red-600 rounded-lg">🗑️</button>
                    </td>
                </tr>
                <tr class="hover:bg-gray-50/50 transition">
                    <td class="py-4">
                        <p class="font-bold text-brand-navy">Drainage De-clogging</p>
                        <p class="text-[10px] text-gray-400">Seasonal Maintenance</p>
                    </td>
                    <td class="py-4">
                        <p class="font-bold text-brand-navy">Sitio Maligaya</p>
                        <p class="text-[10px] text-brand-teal font-bold">₱85,000</p>
                    </td>
                    <td class="py-4 w-40">
                        <div class="flex justify-between text-[10px] font-bold text-gray-600 mb-1">
                            <span>100%</span>
                        </div>
                        <div class="w-full bg-gray-100 h-2 rounded-full overflow-hidden">
                            <div class="bg-brand-teal h-full w-full"></div>
                        </div>
                    </td>
                    <td class="py-4 text-gray-500">Oct 01 - Oct 15, 2023</td>
                    <td class="py-4"><span class="bg-green-100 text-green-800 px-3 py-1 rounded-full text-[9px] font-bold">COMPLETED</span></td>
                    <td class="py-4 text-right space-x-1">
                        <button class="p-1.5 bg-gray-100 hover:bg-gray-200 rounded-lg">✏️</button>
                        <button class="p-1.5 bg-gray-100 hover:bg-gray-200 rounded-lg">👁️</button>
                        <button class="p-1.5 bg-red-50 hover:bg-red-100 text-red-600 rounded-lg">🗑️</button>
                    </td>
                </tr>
                <tr class="hover:bg-gray-50/50 transition">
                    <td class="py-4">
                        <p class="font-bold text-brand-navy">Barangay Hall Extension</p>
                        <p class="text-[10px] text-gray-400">New Admin Office Wing</p>
                    </td>
                    <td class="py-4">
                        <p class="font-bold text-brand-navy">Poblacion Area</p>
                        <p class="text-[10px] text-brand-teal font-bold">₱1,200,000</p>
                    </td>
                    <td class="py-4 w-40">
                        <div class="flex justify-between text-[10px] font-bold text-gray-600 mb-1">
                            <span>15%</span>
                        </div>
                        <div class="w-full bg-gray-100 h-2 rounded-full overflow-hidden">
                            <div class="bg-red-400 h-full w-[15%]"></div>
                        </div>
                    </td>
                    <td class="py-4 text-gray-500">Nov 01, 2023 - Mar 2024</td>
                    <td class="py-4"><span class="bg-red-100 text-red-800 px-3 py-1 rounded-full text-[9px] font-bold">DELAYED</span></td>
                    <td class="py-4 text-right space-x-1">
                        <button class="p-1.5 bg-gray-100 hover:bg-gray-200 rounded-lg">✏️</button>
                        <button class="p-1.5 bg-gray-100 hover:bg-gray-200 rounded-lg">👁️</button>
                        <button class="p-1.5 bg-red-50 hover:bg-red-100 text-red-600 rounded-lg">🗑️</button>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

<!-- Bottom Section -->
<div class="grid grid-cols-1 xl:grid-cols-3 gap-8">
    <div class="bg-surface-card p-6 rounded-2xl border border-gray-100 shadow-sm space-y-4">
        <h3 class="font-bold text-brand-navy text-base">Upcoming Maintenance</h3>
        <div class="space-y-3">
            <div class="p-3 bg-gray-50 rounded-xl text-xs space-y-1">
                <p class="font-bold text-brand-navy">Flood Pump Testing</p>
                <p class="text-[10px] text-gray-400">Tomorrow • 9:00 AM</p>
            </div>
            <div class="p-3 bg-gray-50 rounded-xl text-xs space-y-1">
                <p class="font-bold text-brand-navy">Park Bench Repair</p>
                <p class="text-[10px] text-gray-400">Oct 28 • By Purok 1 Team</p>
            </div>
        </div>
    </div>

    <div class="bg-surface-card p-6 rounded-2xl border border-gray-100 shadow-sm space-y-4">
        <h3 class="font-bold text-brand-navy text-base">Project Activity</h3>
        <div class="space-y-3 text-xs">
            <div class="border-l-2 border-brand-teal pl-3 space-y-0.5">
                <p class="font-bold text-brand-navy">Budget Approved: Drainage Phase 3</p>
                <p class="text-[10px] text-gray-400">2 hours ago</p>
            </div>
            <div class="border-l-2 border-brand-teal pl-3 space-y-0.5">
                <p class="font-bold text-brand-navy">Site Visit: Street Lights Purok 4</p>
                <p class="text-[10px] text-gray-400">5 hours ago</p>
            </div>
            <div class="border-l-2 border-brand-teal pl-3 space-y-0.5">
                <p class="font-bold text-brand-navy">Materials Delivered: Hall Extension</p>
                <p class="text-[10px] text-gray-400">Yesterday</p>
            </div>
        </div>
    </div>

    <div class="bg-surface-card p-6 rounded-2xl border border-gray-100 shadow-sm space-y-3">
        <div class="flex justify-between items-center">
            <h3 class="font-bold text-brand-navy text-base">Infrastructure Reports</h3>
            <a href="#" class="text-xs font-bold text-brand-teal hover:underline">&rarr;</a>
        </div>
        <div class="p-4 bg-red-50 rounded-xl border border-red-100 space-y-2">
            <p class="text-xs text-gray-700 italic">"Broken water main on Emerald Street near the bakery. Water is flooding the sidewalk."</p>
            <div class="flex items-center gap-2 text-[10px] text-gray-500 font-bold">
                <span>👤 Clarisse Mendoza</span>
                <span>• Resident • 12m ago</span>
            </div>
        </div>
    </div>
</div>
@endsection