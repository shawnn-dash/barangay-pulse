@extends('layouts.admin')

@section('title', 'Admin Dashboard')

@section('content')
<div class="grid grid-cols-1 xl:grid-cols-3 gap-8">
    
    <!-- Left Column: Main Dashboard Content (2 Columns span) -->
    <div class="xl:col-span-2 space-y-8">
        
        <!-- Welcome Banner -->
        <div class="bg-brand-navy text-white rounded-2xl p-8 relative overflow-hidden shadow-lg flex justify-between items-center">
            <div class="absolute -right-12 -bottom-12 w-48 h-48 bg-brand-teal rounded-full filter blur-3xl opacity-20"></div>
            <div class="relative z-10 max-w-lg">
                <span class="bg-brand-teal/30 text-teal-300 text-[10px] font-bold px-3 py-1 rounded-full uppercase tracking-wider mb-3 inline-block">
                    Admin Dashboard: Barangay Sukailang
                </span>
                <h2 class="text-3xl font-extrabold mb-2">Welcome Back, Admin!</h2>
                <p class="text-sm text-gray-300 leading-relaxed">
                    Oversee your community efficiently. Manage requests, verify members, and respond to reports in real-time.
                </p>
            </div>
            <div class="relative z-10 hidden md:block text-right">
                <p class="text-sm font-bold text-brand-teal">Ready to serve</p>
                <p class="text-xs text-gray-400">the community.</p>
            </div>
        </div>

        <!-- Service Request Queue Table -->
        <div class="bg-surface-card rounded-2xl border border-gray-100 shadow-sm overflow-hidden">
            <div class="px-6 py-5 border-b border-gray-100 flex justify-between items-center bg-white">
                <h3 class="font-bold text-brand-navy text-lg flex items-center gap-2">
                    <svg class="w-5 h-5 text-brand-teal" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"></path></svg>
                    Service Request Queue
                </h3>
                <a href="#" class="text-xs font-bold text-brand-teal hover:underline">View All &rarr;</a>
            </div>
            <div class="overflow-x-auto">
                <table class="w-full text-sm text-left whitespace-nowrap">
                    <thead class="text-xs text-gray-400 uppercase bg-gray-50 border-b border-gray-100 font-semibold">
                        <tr>
                            <th class="px-6 py-4">Applicant</th>
                            <th class="px-6 py-4">Service Type</th>
                            <th class="px-6 py-4">Date</th>
                            <th class="px-6 py-4">Status</th>
                            <th class="px-6 py-4 text-right">Action</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-100">
                        <tr class="hover:bg-gray-50 transition">
                            <td class="px-6 py-4 font-bold text-brand-navy flex items-center gap-3">
                                <div class="w-8 h-8 rounded-full bg-gray-200 overflow-hidden font-bold flex items-center justify-center text-xs">MC</div>
                                Maria Clara
                            </td>
                            <td class="px-6 py-4 text-gray-700 font-medium">Indigency Certificate</td>
                            <td class="px-6 py-4 text-gray-500 font-medium">Oct 24, 2023</td>
                            <td class="px-6 py-4">
                                <span class="bg-yellow-100 text-yellow-800 px-3 py-1 rounded-full text-xs font-bold uppercase">Pending</span>
                            </td>
                            <td class="px-6 py-4 text-right">
                                <button class="bg-brand-teal hover:bg-brand-tealHover text-white px-4 py-1.5 rounded-lg text-xs font-bold shadow-sm transition">Manage</button>
                            </td>
                        </tr>
                        <tr class="hover:bg-gray-50 transition">
                            <td class="px-6 py-4 font-bold text-brand-navy flex items-center gap-3">
                                <div class="w-8 h-8 rounded-full bg-gray-200 overflow-hidden font-bold flex items-center justify-center text-xs">JR</div>
                                Jose Rizal
                            </td>
                            <td class="px-6 py-4 text-gray-700 font-medium">Health Consultation</td>
                            <td class="px-6 py-4 text-gray-500 font-medium">Oct 24, 2023</td>
                            <td class="px-6 py-4">
                                <span class="bg-blue-100 text-blue-800 px-3 py-1 rounded-full text-xs font-bold uppercase">Scheduled</span>
                            </td>
                            <td class="px-6 py-4 text-right">
                                <button class="bg-brand-teal hover:bg-brand-tealHover text-white px-4 py-1.5 rounded-lg text-xs font-bold shadow-sm transition">Manage</button>
                            </td>
                        </tr>
                        <tr class="hover:bg-gray-50 transition">
                            <td class="px-6 py-4 font-bold text-brand-navy flex items-center gap-3">
                                <div class="w-8 h-8 rounded-full bg-gray-200 overflow-hidden font-bold flex items-center justify-center text-xs">JL</div>
                                Juan Luna
                            </td>
                            <td class="px-6 py-4 text-gray-700 font-medium">Blotter Complaint</td>
                            <td class="px-6 py-4 text-gray-500 font-medium">Oct 23, 2023</td>
                            <td class="px-6 py-4">
                                <span class="bg-red-100 text-red-800 px-3 py-1 rounded-full text-xs font-bold uppercase">Urgent</span>
                            </td>
                            <td class="px-6 py-4 text-right">
                                <button class="bg-brand-teal hover:bg-brand-tealHover text-white px-4 py-1.5 rounded-lg text-xs font-bold shadow-sm transition">Manage</button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <!-- Bottom Action Cards Grid -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <!-- Card 1: Certificate of Indigency -->
            <div class="bg-surface-card p-6 rounded-2xl border border-gray-100 shadow-sm flex flex-col justify-between">
                <div>
                    <h4 class="font-bold text-brand-navy text-sm mb-1">Certificate of Indigency</h4>
                    <p class="text-[11px] text-gray-400 mb-4">Review applicant details & documents</p>
                </div>
                <div class="space-y-2">
                    <button class="w-full bg-brand-teal hover:bg-brand-tealHover text-white font-bold py-2 rounded-xl text-xs shadow-sm transition">APPROVE</button>
                    <button class="w-full border border-red-500 text-red-600 hover:bg-red-50 font-bold py-2 rounded-xl text-xs transition">REJECT WITH REASON</button>
                    <button class="w-full bg-gray-100 hover:bg-gray-200 text-gray-700 font-bold py-2 rounded-xl text-xs transition">REQUEST INFO</button>
                </div>
            </div>

            <!-- Card 2: Health Mission Booking -->
            <div class="bg-surface-card p-6 rounded-2xl border border-gray-100 shadow-sm flex flex-col justify-between">
                <div>
                    <h4 class="font-bold text-brand-navy text-sm mb-1">Health Mission Booking</h4>
                    <p class="text-[11px] text-gray-400 mb-4">Manage schedule & slots</p>
                </div>
                <div class="space-y-2">
                    <button class="w-full bg-blue-600 hover:bg-blue-700 text-white font-bold py-2 rounded-xl text-xs shadow-sm transition">CONFIRM SLOT</button>
                    <button class="w-full bg-gray-100 hover:bg-gray-200 text-gray-700 font-bold py-2 rounded-xl text-xs transition">RESCHEDULE</button>
                    <button class="w-full border border-gray-300 text-gray-600 hover:bg-gray-50 font-bold py-2 rounded-xl text-xs transition">CANCEL</button>
                </div>
            </div>

            <!-- Card 3: Blotter Intake -->
            <div class="bg-surface-card p-6 rounded-2xl border border-gray-100 shadow-sm flex flex-col justify-between">
                <div>
                    <div class="flex justify-between items-start mb-1">
                        <h4 class="font-bold text-brand-navy text-sm">Blotter Intake</h4>
                        <span class="text-[10px] font-bold text-gray-400">#2023-089</span>
                    </div>
                    <p class="text-[11px] text-gray-400 mb-4">Incident report processing</p>
                </div>
                <div class="space-y-2">
                    <button class="w-full bg-red-600 hover:bg-red-700 text-white font-bold py-2 rounded-xl text-xs shadow-sm transition">REVIEW INTAKE</button>
                    <button class="w-full bg-brand-navy hover:bg-slate-800 text-white font-bold py-2 rounded-xl text-xs shadow-sm transition">SCHEDULE MEETING</button>
                    <button class="w-full bg-gray-100 hover:bg-gray-200 text-gray-700 font-bold py-2 rounded-xl text-xs transition">UPDATE PROGRESS</button>
                </div>
            </div>
        </div>

    </div>

    <!-- Right Column: Sidebar Widgets (Community at a Glance, Quick Actions, Activity, Urgent Reports) -->
    <div class="space-y-6">
        
        <!-- Community at a Glance -->
        <div class="bg-surface-card p-6 rounded-2xl border border-gray-100 shadow-sm">
            <h3 class="font-bold text-brand-navy text-base mb-4">Our Community at a Glance</h3>
            
            <div class="grid grid-cols-2 gap-4">
                <div class="bg-gray-50 p-4 rounded-xl text-center border border-gray-100">
                    <p class="text-2xl font-black text-brand-navy">12</p>
                    <p class="text-[10px] font-bold text-gray-400 uppercase tracking-wider mt-1">Pending Service Requests</p>
                </div>
                <div class="bg-gray-50 p-4 rounded-xl text-center border border-gray-100">
                    <p class="text-2xl font-black text-brand-navy">5</p>
                    <p class="text-[10px] font-bold text-gray-400 uppercase tracking-wider mt-1">Residents Awaiting Verification</p>
                </div>
                <div class="bg-gray-50 p-4 rounded-xl text-center border border-gray-100">
                    <p class="text-2xl font-black text-brand-navy">8</p>
                    <p class="text-[10px] font-bold text-gray-400 uppercase tracking-wider mt-1">Open Community Reports</p>
                </div>
                <div class="bg-gray-50 p-4 rounded-xl text-center border border-gray-100">
                    <p class="text-2xl font-black text-brand-navy">3</p>
                    <p class="text-[10px] font-bold text-gray-400 uppercase tracking-wider mt-1">Coordination Requests</p>
                </div>
            </div>
        </div>

        <!-- Quick Actions -->
        <div class="bg-surface-card p-6 rounded-2xl border border-gray-100 shadow-sm">
            <h3 class="font-bold text-brand-navy text-base mb-4">Quick Actions</h3>
            <div class="grid grid-cols-2 gap-3">
                <button class="bg-gray-100 hover:bg-gray-200 text-brand-navy font-bold text-xs py-3 px-3 rounded-xl transition text-center">New Announcement</button>
                <button class="bg-gray-100 hover:bg-gray-200 text-brand-navy font-bold text-xs py-3 px-3 rounded-xl transition text-center">Export Report</button>
                <button class="bg-gray-100 hover:bg-gray-200 text-brand-navy font-bold text-xs py-3 px-3 rounded-xl transition text-center">Manage Events</button>
                <button class="bg-gray-100 hover:bg-gray-200 text-brand-navy font-bold text-xs py-3 px-3 rounded-xl transition text-center">System Config</button>
            </div>
        </div>

        <!-- Recent Admin Activity -->
        <div class="bg-surface-card p-6 rounded-2xl border border-gray-100 shadow-sm">
            <div class="flex justify-between items-center mb-4">
                <h3 class="font-bold text-brand-navy text-base">Recent Admin Activity</h3>
                <a href="#" class="text-xs font-bold text-brand-teal hover:underline">View Log &rarr;</a>
            </div>
            <div class="space-y-3">
                <div class="p-3 bg-gray-50 rounded-xl border border-gray-100">
                    <p class="text-xs font-bold text-brand-navy">Water Notice Posted</p>
                    <p class="text-[10px] text-gray-400 mt-0.5">2 hours ago • By Admin Delmar</p>
                </div>
                <div class="p-3 bg-gray-50 rounded-xl border border-gray-100">
                    <p class="text-xs font-bold text-brand-navy">Scholarship Portal Updated</p>
                    <p class="text-[10px] text-gray-400 mt-0.5">5 hours ago • By Admin Santos</p>
                </div>
                <div class="p-3 bg-gray-50 rounded-xl border border-gray-100">
                    <p class="text-xs font-bold text-brand-navy">3 Requests Approved</p>
                    <p class="text-[10px] text-gray-400 mt-0.5">Yesterday • By Admin Reyes</p>
                </div>
            </div>
        </div>

        <!-- Urgent Reports -->
        <div class="bg-red-50 border border-red-200 p-6 rounded-2xl shadow-sm">
            <div class="flex justify-between items-center mb-3">
                <h3 class="font-bold text-red-800 text-sm uppercase tracking-wider flex items-center gap-1.5">
                    <span class="w-2 h-2 rounded-full bg-red-500 animate-pulse"></span>
                    Urgent Reports
                </h3>
                <span class="text-xs font-bold text-red-600">&rarr;</span>
            </div>
            <p class="text-xs text-red-700 italic leading-relaxed mb-4 bg-white/60 p-3 rounded-xl border border-red-100">
                "Purok 2 drainage is overflowing due to heavy rain. Immediate attention needed."
            </p>
            <div class="flex items-center justify-between text-xs font-bold text-red-700">
                <span class="flex items-center gap-2">
                    <div class="w-6 h-6 rounded-full bg-red-200 text-red-800 flex items-center justify-center text-[10px]">MS</div>
                    Maria Santos
                </span>
                <span class="text-[10px] text-red-500 font-normal">Resident • 15m ago</span>
            </div>
        </div>

    </div>

</div>
@endsection