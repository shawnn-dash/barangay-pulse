@extends('layouts.admin')

@section('title', 'Resident Records & Verification')

@section('content')
<!-- Top Filter Bar -->
<div class="bg-surface-card p-4 rounded-2xl border border-gray-100 shadow-sm mb-6 flex flex-col sm:flex-row justify-between items-center gap-4">
    <div class="relative w-full sm:w-80">
        <span class="absolute inset-y-0 left-0 flex items-center pl-3 text-gray-400">🔍</span>
        <input type="text" placeholder="Search residents..." class="w-full bg-gray-50 border border-gray-200 text-xs font-bold text-gray-700 rounded-xl pl-10 pr-4 py-2.5 outline-none focus:ring-2 focus:ring-brand-teal">
    </div>
    <div class="flex items-center gap-4 w-full sm:w-auto justify-between sm:justify-end">
        <div class="flex items-center gap-2 text-xs font-bold text-gray-600">
            <span>PUROK:</span>
            <select class="bg-gray-50 border border-gray-200 text-xs font-bold text-gray-700 rounded-xl px-3 py-2 outline-none">
                <option>All Puroks</option>
                <option>Purok 1</option>
                <option>Purok 2</option>
                <option>Purok 4</option>
                <option>Purok 5</option>
            </select>
        </div>
        <div class="flex items-center gap-2 text-xs font-bold text-gray-600">
            <span>STATUS:</span>
            <select class="bg-gray-50 border border-gray-200 text-xs font-bold text-gray-700 rounded-xl px-3 py-2 outline-none">
                <option>All Status</option>
                <option>Verified</option>
                <option>Pending Verification</option>
                <option>Needs Correction</option>
            </select>
        </div>
        <button class="bg-brand-teal hover:bg-brand-tealHover text-white font-bold px-4 py-2.5 rounded-xl text-xs shadow-sm transition">
            + Add Resident
        </button>
    </div>
</div>

<div class="grid grid-cols-1 xl:grid-cols-3 gap-8">
    
    <!-- Left Column: Resident Directory Table -->
    <div class="xl:col-span-2 bg-surface-card p-6 rounded-2xl border border-gray-100 shadow-sm space-y-6">
        <h3 class="font-bold text-brand-navy text-base">Resident Directory</h3>

        <div class="overflow-x-auto">
            <table class="w-full text-left border-collapse">
                <thead>
                    <tr class="border-b border-gray-100 text-[10px] font-bold text-gray-400 uppercase tracking-wider">
                        <th class="pb-3">Full Name</th>
                        <th class="pb-3">Address / Purok</th>
                        <th class="pb-3">Status</th>
                        <th class="pb-3 text-right">Action</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-50 text-xs">
                    <!-- Row 1 -->
                    <tr class="hover:bg-gray-50/50 transition">
                        <td class="py-4 flex items-center gap-3">
                            <div class="w-9 h-9 rounded-full bg-cover bg-center" style="background-image: url('https://images.unsplash.com/photo-1494790108377-be9c29b29330?auto=format&fit=crop&q=80&w=200')"></div>
                            <div>
                                <p class="font-bold text-brand-navy">Maria Santos</p>
                                <p class="text-[10px] text-gray-400">ID: RES-2023-001</p>
                            </div>
                        </td>
                        <td class="py-4">
                            <p class="font-bold text-brand-navy">Block 12, Lot 5</p>
                            <p class="text-[10px] text-brand-teal font-bold">PUROK 4</p>
                        </td>
                        <td class="py-4">
                            <span class="bg-green-100 text-green-800 px-3 py-1 rounded-full text-[10px] font-bold">VERIFIED</span>
                        </td>
                        <td class="py-4 text-right">
                            <button class="bg-gray-100 hover:bg-gray-200 text-gray-700 font-bold px-3 py-1.5 rounded-xl text-xs transition">View Profile</button>
                        </td>
                    </tr>
                    <!-- Row 2 -->
                    <tr class="hover:bg-gray-50/50 transition bg-teal-50/20">
                        <td class="py-4 flex items-center gap-3">
                            <div class="w-9 h-9 rounded-full bg-gray-200 flex items-center justify-center font-bold text-gray-500">👤</div>
                            <div>
                                <p class="font-bold text-brand-navy">Juan Dela Cruz</p>
                                <p class="text-[10px] text-gray-400">Submitted 2h ago</p>
                            </div>
                        </td>
                        <td class="py-4">
                            <p class="font-bold text-brand-navy">Zone 3, Main St.</p>
                            <p class="text-[10px] text-brand-teal font-bold">PUROK 2</p>
                        </td>
                        <td class="py-4">
                            <span class="bg-amber-100 text-amber-800 px-3 py-1 rounded-full text-[10px] font-bold">PENDING VERIFICATION</span>
                        </td>
                        <td class="py-4 text-right">
                            <button class="bg-brand-teal hover:bg-brand-tealHover text-white font-bold px-4 py-1.5 rounded-xl text-xs shadow-sm transition">Review</button>
                        </td>
                    </tr>
                    <!-- Row 3 -->
                    <tr class="hover:bg-gray-50/50 transition">
                        <td class="py-4 flex items-center gap-3">
                            <div class="w-9 h-9 rounded-full bg-cover bg-center" style="background-image: url('https://images.unsplash.com/photo-1534528741775-53994a69daeb?auto=format&fit=crop&q=80&w=200')"></div>
                            <div>
                                <p class="font-bold text-brand-navy">Ana Reyes</p>
                                <p class="text-[10px] text-gray-400">ID: RES-2023-089</p>
                            </div>
                        </td>
                        <td class="py-4">
                            <p class="font-bold text-brand-navy">Street 8, Villa Rosas</p>
                            <p class="text-[10px] text-brand-teal font-bold">PUROK 5</p>
                        </td>
                        <td class="py-4">
                            <span class="bg-red-100 text-red-800 px-3 py-1 rounded-full text-[10px] font-bold">NEEDS CORRECTION</span>
                        </td>
                        <td class="py-4 text-right">
                            <button class="bg-gray-100 hover:bg-gray-200 text-gray-700 font-bold px-3 py-1.5 rounded-xl text-xs transition">View History</button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

        <!-- Pagination -->
        <div class="flex justify-between items-center pt-4 border-t border-gray-100 text-xs text-gray-500 font-medium">
            <span>Showing 3 of 1,240 residents</span>
            <div class="flex items-center gap-1">
                <button class="px-3 py-1.5 rounded-lg border border-gray-200 hover:bg-gray-50 font-bold">Previous</button>
                <button class="px-3 py-1.5 rounded-lg bg-brand-teal text-white font-bold">1</button>
                <button class="px-3 py-1.5 rounded-lg border border-gray-200 hover:bg-gray-50 font-bold">2</button>
                <button class="px-3 py-1.5 rounded-lg border border-gray-200 hover:bg-gray-50 font-bold">3</button>
                <button class="px-3 py-1.5 rounded-lg border border-gray-200 hover:bg-gray-50 font-bold">Next</button>
            </div>
        </div>
    </div>

    <!-- Right Column: Review Verification & Stats -->
    <div class="space-y-6">
        
        <!-- Review Verification Card -->
        <div class="bg-surface-card p-6 rounded-2xl border border-gray-100 shadow-sm space-y-4 relative">
            <div class="flex justify-between items-center">
                <h3 class="font-bold text-brand-navy text-sm uppercase tracking-wider">Review Verification</h3>
                <span class="bg-amber-100 text-amber-800 text-[9px] font-extrabold px-2.5 py-0.5 rounded-full">URGENT</span>
            </div>

            <div class="flex items-center gap-3 p-3 bg-gray-50 rounded-xl border border-gray-100">
                <div class="w-10 h-10 rounded-full bg-gray-300"></div>
                <div>
                    <h4 class="font-bold text-brand-navy text-xs">Juan Dela Cruz</h4>
                    <p class="text-[10px] text-gray-400">Purok 2 Resident</p>
                </div>
            </div>

            <!-- Submitted ID Photo -->
            <div>
                <p class="text-[10px] font-bold text-gray-400 uppercase tracking-wider mb-2">Submitted ID Photo</p>
                <div class="h-28 bg-gray-100 rounded-xl bg-cover bg-center border border-gray-200" style="background-image: url('https://images.unsplash.com/photo-1554224155-8d04cb21cd6c?auto=format&fit=crop&q=80&w=400')"></div>
            </div>

            <!-- Proof of Residency -->
            <div>
                <p class="text-[10px] font-bold text-gray-400 uppercase tracking-wider mb-2">Proof of Residency</p>
                <div class="h-28 bg-gray-100 rounded-xl bg-cover bg-center border border-gray-200" style="background-image: url('https://images.unsplash.com/photo-1450133064473-71024230f91b?auto=format&fit=crop&q=80&w=400')"></div>
            </div>

            <!-- Action Buttons -->
            <div class="space-y-2 pt-2">
                <button class="w-full bg-brand-teal hover:bg-brand-tealHover text-white font-bold py-2.5 rounded-xl text-xs shadow-sm transition">Verify Resident</button>
                <div class="grid grid-cols-2 gap-2">
                    <button class="border border-red-200 text-red-600 hover:bg-red-50 font-bold py-2 rounded-xl text-xs transition">Reject</button>
                    <button class="border border-gray-200 text-gray-700 hover:bg-gray-50 font-bold py-2 rounded-xl text-xs transition">Request Correction</button>
                </div>
            </div>
        </div>

        <!-- Verification Stats -->
        <div class="bg-surface-card p-6 rounded-2xl border border-gray-100 shadow-sm">
            <h3 class="font-bold text-brand-navy text-sm mb-4">Verification Stats</h3>
            <div class="grid grid-cols-2 gap-4 text-center">
                <div class="p-4 bg-teal-50/50 rounded-xl border border-teal-100">
                    <p class="text-2xl font-extrabold text-brand-teal">1,180</p>
                    <p class="text-[9px] font-bold text-gray-400 uppercase tracking-wider mt-1">Total Verified</p>
                </div>
                <div class="p-4 bg-amber-50/50 rounded-xl border border-amber-100">
                    <p class="text-2xl font-extrabold text-amber-600">12</p>
                    <p class="text-[9px] font-bold text-gray-400 uppercase tracking-wider mt-1">Awaiting Review</p>
                </div>
            </div>
        </div>

        <!-- Verification Tip -->
        <div class="bg-brand-navy p-6 rounded-2xl text-white space-y-2 shadow-sm">
            <h4 class="font-bold text-xs uppercase tracking-wider text-teal-400">Verification Tip</h4>
            <p class="text-[11px] text-gray-300 leading-relaxed">
                Always match the address on the utility bill with the registered Purok to ensure data accuracy for census mapping.
            </p>
        </div>

    </div>

</div>
@endsection