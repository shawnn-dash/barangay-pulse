@extends('layouts.admin')

@section('title', 'Inter-Barangay Coordination')

@section('content')
<!-- Top Banner -->
<div class="bg-brand-navy p-8 rounded-2xl text-white space-y-2 shadow-sm mb-8 flex flex-col md:flex-row justify-between items-start md:items-center">
    <div>
        <span class="text-[10px] font-bold text-teal-400 uppercase tracking-wider">Management</span>
        <h2 class="text-2xl font-extrabold mt-1">Inter-Barangay Coordination</h2>
        <p class="text-xs text-gray-300 mt-1 max-w-xl">Streamline communication, resource sharing, and collaborative initiatives with neighboring barangays.</p>
    </div>
    <div class="mt-4 md:mt-0 text-right">
        <p class="text-xs text-teal-300 font-bold italic">"Ugnayan para sa patuloy na pag-unlad."</p>
    </div>
</div>

<div class="grid grid-cols-1 xl:grid-cols-3 gap-8">
    
    <!-- Left Column: Requests List & Active Thread -->
    <div class="xl:col-span-2 space-y-6">
        
        <!-- Tabs & Filter -->
        <div class="bg-surface-card p-6 rounded-2xl border border-gray-100 shadow-sm space-y-6">
            <div class="flex flex-col sm:flex-row justify-between items-center border-b border-gray-100 pb-4 gap-4">
                <div class="flex gap-6 text-xs font-bold">
                    <button class="text-brand-teal border-b-2 border-brand-teal pb-4 -mb-4">INCOMING REQUESTS (3)</button>
                    <button class="text-gray-400 hover:text-brand-navy pb-4 -mb-4 transition">OUTGOING REQUESTS</button>
                </div>
                <input type="text" placeholder="Filter by Barangay" class="bg-gray-50 border border-gray-200 text-xs font-bold text-gray-700 rounded-xl px-4 py-2 outline-none w-full sm:w-auto">
            </div>

            <!-- Requests Table -->
            <div class="overflow-x-auto">
                <table class="w-full text-left border-collapse">
                    <thead>
                        <tr class="border-b border-gray-100 text-[10px] font-bold text-gray-400 uppercase tracking-wider">
                            <th class="pb-3">From Barangay</th>
                            <th class="pb-3">Request Type</th>
                            <th class="pb-3">Date</th>
                            <th class="pb-3">Status</th>
                            <th class="pb-3 text-right">Action</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-50 text-xs">
                        <!-- Active Item -->
                        <tr class="bg-teal-50/20 hover:bg-teal-50/30 transition">
                            <td class="py-4">
                                <p class="font-bold text-brand-navy">Barangay San Antonio</p>
                                <p class="text-[9px] text-gray-400">Official: Hon. Reyes</p>
                            </td>
                            <td class="py-4"><span class="bg-blue-100 text-blue-800 text-[9px] font-bold px-2.5 py-0.5 rounded-full">RESOURCE SHARING</span></td>
                            <td class="py-4 text-gray-500">Oct 24, 2023</td>
                            <td class="py-4"><span class="bg-amber-100 text-amber-800 text-[9px] font-bold px-2.5 py-0.5 rounded-full">PENDING REVIEW</span></td>
                            <td class="py-4 text-right space-x-1">
                                <button class="bg-brand-teal text-white font-bold px-3 py-1.5 rounded-xl text-xs shadow-sm">Accept</button>
                                <button class="bg-gray-100 hover:bg-gray-200 text-gray-700 font-bold px-3 py-1.5 rounded-xl text-xs">Reply</button>
                            </td>
                        </tr>
                        <tr class="hover:bg-gray-50/50 transition">
                            <td class="py-4">
                                <p class="font-bold text-brand-navy">Barangay Poblacion</p>
                                <p class="text-[9px] text-gray-400">Official: Hon. Garcia</p>
                            </td>
                            <td class="py-4"><span class="bg-purple-100 text-purple-800 text-[9px] font-bold px-2.5 py-0.5 rounded-full">JOINT ACTIVITY</span></td>
                            <td class="py-4 text-gray-500">Oct 22, 2023</td>
                            <td class="py-4"><span class="bg-green-100 text-green-800 text-[9px] font-bold px-2.5 py-0.5 rounded-full">ACCEPTED</span></td>
                            <td class="py-4 text-right"><a href="#" class="text-xs font-bold text-brand-teal hover:underline">View Conversation</a></td>
                        </tr>
                        <tr class="hover:bg-gray-50/50 transition">
                            <td class="py-4">
                                <p class="font-bold text-brand-navy">Barangay Santa Maria</p>
                                <p class="text-[9px] text-gray-400">Official: Hon. Santos</p>
                            </td>
                            <td class="py-4"><span class="bg-amber-100 text-amber-800 text-[9px] font-bold px-2.5 py-0.5 rounded-full">INFO REQUEST</span></td>
                            <td class="py-4 text-gray-500">Oct 20, 2023</td>
                            <td class="py-4"><span class="bg-red-100 text-red-800 text-[9px] font-bold px-2.5 py-0.5 rounded-full">DECLINED</span></td>
                            <td class="py-4 text-right"><button class="bg-gray-100 hover:bg-gray-200 text-gray-700 font-bold px-3 py-1.5 rounded-xl text-xs">Details</button></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <!-- Conversation Box -->
        <div class="bg-surface-card p-6 rounded-2xl border border-gray-100 shadow-sm space-y-4">
            <div class="flex justify-between items-center border-b border-gray-100 pb-3">
                <h3 class="font-bold text-brand-navy text-sm">💬 Conversation: Waste Management Collaboration</h3>
                <span class="text-[10px] text-gray-400">Barangay San Antonio • Oct 24, 2023</span>
            </div>
            
            <div class="p-4 bg-gray-50 rounded-xl border border-gray-100 space-y-2">
                <div class="flex items-center gap-2">
                    <span class="w-6 h-6 rounded-full bg-brand-teal text-white font-bold text-[10px] flex items-center justify-center">SA</span>
                    <span class="font-bold text-xs text-brand-navy">Barangay San Antonio Council</span>
                </div>
                <p class="text-xs text-gray-700 leading-relaxed">
                    Greetings! We are requesting for the temporary use of your garbage compactor truck for our upcoming Purok Clean-up drive this weekend.
                </p>
            </div>

            <!-- Reply Input -->
            <div class="flex gap-2 pt-2">
                <input type="text" placeholder="Type your reply here..." class="flex-1 bg-gray-50 border border-gray-200 text-xs font-medium text-gray-700 rounded-xl p-3 outline-none">
                <button class="bg-brand-navy hover:bg-slate-800 text-white font-bold px-5 py-3 rounded-xl text-xs shadow-sm transition">Send Reply</button>
            </div>
        </div>

    </div>

    <!-- Right Column: New Request Form & Stats -->
    <div class="space-y-6">
        
        <!-- New Coordination Request Form -->
        <div class="bg-surface-card p-6 rounded-2xl border border-gray-100 shadow-sm space-y-4">
            <h3 class="font-bold text-brand-navy text-base flex items-center gap-2">
                <span>✈️</span> New Coordination Request
            </h3>
            
            <div class="space-y-3">
                <div>
                    <label class="block text-[10px] font-bold text-gray-400 uppercase mb-1">Recipient Barangay</label>
                    <select class="w-full bg-gray-50 border border-gray-200 text-xs font-bold text-gray-700 rounded-xl p-3 outline-none">
                        <option>Select Barangay</option>
                        <option>Barangay San Antonio</option>
                        <option>Barangay Poblacion</option>
                    </select>
                </div>
                <div>
                    <label class="block text-[10px] font-bold text-gray-400 uppercase mb-1">Request Type</label>
                    <select class="w-full bg-gray-50 border border-gray-200 text-xs font-bold text-gray-700 rounded-xl p-3 outline-none">
                        <option>Resource Sharing</option>
                        <option>Joint Activity</option>
                        <option>Information Request</option>
                    </select>
                </div>
                <div>
                    <label class="block text-[10px] font-bold text-gray-400 uppercase mb-1">Subject</label>
                    <input type="text" placeholder="Short description" class="w-full bg-gray-50 border border-gray-200 text-xs font-medium text-gray-700 rounded-xl p-3 outline-none">
                </div>
                <div>
                    <label class="block text-[10px] font-bold text-gray-400 uppercase mb-1">Message</label>
                    <textarea rows="3" placeholder="Details of your request..." class="w-full bg-gray-50 border border-gray-200 text-xs font-medium text-gray-700 rounded-xl p-3 outline-none resize-none"></textarea>
                </div>
                <div>
                    <label class="block text-[10px] font-bold text-gray-400 uppercase mb-1">Attachment</label>
                    <div class="border-2 border-dashed border-gray-200 rounded-xl p-4 text-center bg-gray-50 text-xs text-gray-500 font-bold">
                        📁 Click to upload documents
                    </div>
                </div>

                <button class="w-full bg-brand-teal hover:bg-brand-tealHover text-white font-bold py-3 rounded-xl text-xs shadow-sm transition">
                    Send Coordination Request
                </button>
            </div>
        </div>

        <!-- Stats -->
        <div class="bg-surface-card p-6 rounded-2xl border border-gray-100 shadow-sm">
            <h3 class="font-bold text-brand-navy text-sm mb-4">Inter-Barangay Stats</h3>
            <div class="grid grid-cols-2 gap-4 text-center">
                <div class="p-4 bg-gray-50 rounded-xl border border-gray-100">
                    <p class="text-2xl font-extrabold text-brand-navy">24</p>
                    <p class="text-[9px] font-bold text-gray-400 uppercase tracking-wider mt-1">Requests This Month</p>
                </div>
                <div class="p-4 bg-teal-50/50 rounded-xl border border-teal-100">
                    <p class="text-2xl font-extrabold text-brand-teal">85%</p>
                    <p class="text-[9px] font-bold text-gray-400 uppercase tracking-wider mt-1">Acceptance Rate</p>
                </div>
            </div>
        </div>

        <!-- Best Practice Tip -->
        <div class="bg-brand-navy p-6 rounded-2xl text-white space-y-2 shadow-sm">
            <h4 class="font-bold text-xs uppercase tracking-wider text-teal-400">💡 Best Practice</h4>
            <p class="text-[11px] text-gray-300 leading-relaxed">
                Joint Activities (like inter-barangay sports or clean-ups) require approval from both Barangay Councils. Ensure you attach the official resolution for faster processing.
            </p>
        </div>

    </div>

</div>
@endsection