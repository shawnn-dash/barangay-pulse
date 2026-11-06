@extends('layouts.app')

@section('title', 'Resident Dashboard')
@section('header', 'Welcome back, Shawnn!')
@section('sub-header', 'Managing: Barangay Sukailang')

@section('content')
<div class="grid grid-cols-1 xl:grid-cols-3 gap-8">
    
    <!-- Left Column: Main Content -->
    <div class="xl:col-span-2 space-y-8">
        
        <!-- Quick Services -->
        <section>
            <div class="flex justify-between items-center mb-4">
                <h3 class="text-lg font-bold text-gray-800">Quick Services</h3>
                <a href="#" class="text-sm font-semibold text-teal-600 hover:text-teal-700">View All &rarr;</a>
            </div>
            
            <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                <!-- Indigency Card -->
                <a href="#" class="bg-white p-5 rounded-2xl border border-gray-100 shadow-sm hover:shadow-md hover:border-teal-100 transition flex flex-col items-center justify-center text-center group cursor-pointer">
                    <div class="w-14 h-14 bg-teal-50 text-teal-600 rounded-xl flex items-center justify-center mb-3 group-hover:bg-teal-600 group-hover:text-white transition">
                        <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path></svg>
                    </div>
                    <p class="text-xs font-bold text-gray-700">Certificate of<br>Indigency</p>
                </a>
                
                <!-- Health Card -->
                <a href="#" class="bg-white p-5 rounded-2xl border border-gray-100 shadow-sm hover:shadow-md hover:border-teal-100 transition flex flex-col items-center justify-center text-center group cursor-pointer">
                    <div class="w-14 h-14 bg-teal-50 text-teal-600 rounded-xl flex items-center justify-center mb-3 group-hover:bg-teal-600 group-hover:text-white transition">
                        <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path></svg>
                    </div>
                    <p class="text-xs font-bold text-gray-700">Health<br>Appointment</p>
                </a>

                <!-- Blotter Card -->
                <a href="#" class="bg-white p-5 rounded-2xl border border-gray-100 shadow-sm hover:shadow-md hover:border-teal-100 transition flex flex-col items-center justify-center text-center group cursor-pointer">
                    <div class="w-14 h-14 bg-teal-50 text-teal-600 rounded-xl flex items-center justify-center mb-3 group-hover:bg-teal-600 group-hover:text-white transition">
                        <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 6l3 1m0 0l-3 9a5.002 5.002 0 006.001 0M6 7l3 9M6 7l6-2m6 2l3-1m-3 1l-3 9a5.002 5.002 0 006.001 0M18 7l3 9m-3-9l-6-2m0-2v2m0 16V5m0 16H9m3 0h3"></path></svg>
                    </div>
                    <p class="text-xs font-bold text-gray-700">Blotter<br>Submission</p>
                </a>

                <!-- Report Card -->
                <a href="#" class="bg-white p-5 rounded-2xl border border-gray-100 shadow-sm hover:shadow-md hover:border-teal-100 transition flex flex-col items-center justify-center text-center group cursor-pointer">
                    <div class="w-14 h-14 bg-teal-50 text-teal-600 rounded-xl flex items-center justify-center mb-3 group-hover:bg-teal-600 group-hover:text-white transition">
                        <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5.882V19.24a1.76 1.76 0 01-3.417.592l-2.147-6.15M18 13a3 3 0 100-6M5.436 13.683A4.001 4.001 0 017 6h1.832c4.1 0 7.625-1.234 9.168-3v14c-1.543-1.766-5.067-3-9.168-3H7a3.988 3.988 0 01-1.564-.317z"></path></svg>
                    </div>
                    <p class="text-xs font-bold text-gray-700">Community<br>Report</p>
                </a>
            </div>
        </section>

        <!-- Recent Transactions -->
        <section class="bg-white rounded-2xl border border-gray-100 shadow-sm overflow-hidden">
            <div class="px-6 py-5 border-b border-gray-100 flex justify-between items-center bg-white">
                <h3 class="font-bold text-gray-800">Recent Transactions</h3>
                <a href="#" class="text-sm font-semibold text-teal-600 hover:text-teal-700">View All</a>
            </div>
            <div class="overflow-x-auto">
                <table class="w-full text-sm text-left whitespace-nowrap">
                    <thead class="text-xs text-gray-400 uppercase bg-gray-50 border-b border-gray-100 font-semibold">
                        <tr>
                            <th class="px-6 py-4">Service Type</th>
                            <th class="px-6 py-4">Reference No.</th>
                            <th class="px-6 py-4">Date</th>
                            <th class="px-6 py-4">Status</th>
                            <th class="px-6 py-4"></th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-100">
                        <tr class="hover:bg-gray-50 transition">
                            <td class="px-6 py-4 font-bold text-gray-900 flex items-center">
                                <span class="w-2 h-2 rounded-full bg-yellow-400 mr-3"></span> Certificate of Indigency
                            </td>
                            <td class="px-6 py-4 text-gray-500 font-medium">#BC-2024-0891</td>
                            <td class="px-6 py-4 text-gray-500 font-medium">June 24, 2026</td>
                            <td class="px-6 py-4">
                                <span class="bg-yellow-50 border border-yellow-200 text-yellow-700 px-3 py-1 rounded-full text-xs font-bold">Pending Review</span>
                            </td>
                            <td class="px-6 py-4 text-right">
                                <a href="#" class="text-teal-600 font-bold hover:underline">Details</a>
                            </td>
                        </tr>
                        <tr class="hover:bg-gray-50 transition">
                            <td class="px-6 py-4 font-bold text-gray-900 flex items-center">
                                <span class="w-2 h-2 rounded-full bg-green-400 mr-3"></span> Health Center Appointment
                            </td>
                            <td class="px-6 py-4 text-gray-500 font-medium">#HA-2024-0722</td>
                            <td class="px-6 py-4 text-gray-500 font-medium">June 22, 2026</td>
                            <td class="px-6 py-4">
                                <span class="bg-green-50 border border-green-200 text-green-700 px-3 py-1 rounded-full text-xs font-bold">Approved</span>
                            </td>
                            <td class="px-6 py-4 text-right">
                                <a href="#" class="text-teal-600 font-bold hover:underline">Details</a>
                            </td>
                        </tr>
                        <tr class="hover:bg-gray-50 transition">
                            <td class="px-6 py-4 font-bold text-gray-900 flex items-center">
                                <span class="w-2 h-2 rounded-full bg-blue-400 mr-3"></span> Community Report
                            </td>
                            <td class="px-6 py-4 text-gray-500 font-medium">#CR-2024-0615</td>
                            <td class="px-6 py-4 text-gray-500 font-medium">June 15, 2026</td>
                            <td class="px-6 py-4">
                                <span class="bg-blue-50 border border-blue-200 text-blue-700 px-3 py-1 rounded-full text-xs font-bold">In Progress</span>
                            </td>
                            <td class="px-6 py-4 text-right">
                                <a href="#" class="text-teal-600 font-bold hover:underline">Details</a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </section>
    </div>

    <!-- Right Column: Community Updates Sidebar -->
    <div class="space-y-6">
        <div class="bg-white p-6 rounded-2xl border border-gray-100 shadow-sm">
            <div class="flex justify-between items-center mb-6">
                <h3 class="font-bold text-gray-800 text-lg">Community Updates</h3>
                <a href="#" class="text-xs font-bold text-teal-600 bg-teal-50 px-3 py-1 rounded-full hover:bg-teal-100">See All</a>
            </div>
            
            <div class="space-y-6">
                <!-- Announcement 1 -->
                <div class="relative pl-4">
                    <div class="absolute left-0 top-0 bottom-0 w-1 bg-teal-500 rounded-full"></div>
                    <p class="text-[10px] text-gray-400 font-bold uppercase tracking-wider mb-1 flex justify-between">
                        <span>Announcement</span>
                        <span>June 28, 2024</span>
                    </p>
                    <h4 class="text-sm font-bold text-gray-900 mb-1">Weekend Community Clean-up Drive</h4>
                    <p class="text-xs text-gray-500 leading-relaxed mb-2">Join us this Saturday as we clean Purok 3 riverbanks. Tools and snacks provided.</p>
                    <a href="#" class="text-xs font-bold text-teal-600 hover:underline">Read more &rarr;</a>
                </div>
                
                <hr class="border-gray-100">

                <!-- Announcement 2 -->
                <div class="relative pl-4">
                    <div class="absolute left-0 top-0 bottom-0 w-1 bg-blue-500 rounded-full"></div>
                    <p class="text-[10px] text-gray-400 font-bold uppercase tracking-wider mb-1 flex justify-between">
                        <span>Medical Mission</span>
                        <span>July 05, 2024</span>
                    </p>
                    <h4 class="text-sm font-bold text-gray-900 mb-1">Free Vaccination Day</h4>
                    <p class="text-xs text-gray-500 leading-relaxed mb-2">Annual flu vaccination for seniors and children at the Barangay Hall lobby.</p>
                    <a href="#" class="text-xs font-bold text-teal-600 hover:underline">Read more &rarr;</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection