@extends('layouts.admin')

@section('title', 'Admin Feedback Management')

@section('content')
<!-- Metric Cards -->
<div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8">
    <div class="bg-surface-card p-6 rounded-2xl border border-gray-100 shadow-sm flex items-center justify-between">
        <div>
            <p class="text-[10px] font-bold text-gray-400 uppercase tracking-wider">Average Satisfaction</p>
            <div class="flex items-center gap-2 mt-1">
                <span class="text-3xl font-extrabold text-brand-navy">4.8</span>
                <span class="text-amber-400 text-sm">★★★★★</span>
            </div>
            <p class="text-[10px] text-gray-400 mt-1">Based on 124 reviews this month</p>
        </div>
    </div>
    <div class="bg-surface-card p-6 rounded-2xl border border-gray-100 shadow-sm flex items-center justify-between">
        <div>
            <p class="text-[10px] font-bold text-gray-400 uppercase tracking-wider">Total Feedback Received</p>
            <p class="text-3xl font-extrabold text-brand-navy mt-1">842</p>
            <p class="text-[10px] font-bold text-brand-teal mt-1">+18% from last quarter</p>
        </div>
    </div>
    <div class="bg-surface-card p-6 rounded-2xl border border-gray-100 shadow-sm flex items-center justify-between">
        <div>
            <p class="text-[10px] font-bold text-gray-400 uppercase tracking-wider">Unresolved Complaints</p>
            <p class="text-3xl font-extrabold text-red-600 mt-1">7</p>
            <p class="text-[10px] font-bold text-red-600 mt-1">Action required</p>
        </div>
    </div>
</div>

<!-- Table Card -->
<div class="bg-surface-card p-6 rounded-2xl border border-gray-100 shadow-sm space-y-6 mb-8">
    <div class="flex flex-col sm:flex-row justify-between items-center gap-4">
        <h3 class="font-bold text-brand-navy text-base">Resident Feedback & Complaints</h3>
        <div class="flex items-center gap-3 w-full sm:w-auto">
            <input type="text" placeholder="Search residents..." class="bg-gray-50 border border-gray-200 text-xs font-bold text-gray-700 rounded-xl px-4 py-2 outline-none">
            <select class="bg-gray-50 border border-gray-200 text-xs font-bold text-gray-700 rounded-xl px-3 py-2 outline-none">
                <option>Sort: Newest First</option>
                <option>Highest Rating</option>
            </select>
        </div>
    </div>

    <div class="overflow-x-auto">
        <table class="w-full text-left border-collapse">
            <thead>
                <tr class="border-b border-gray-100 text-[10px] font-bold text-gray-400 uppercase tracking-wider">
                    <th class="pb-3">Resident</th>
                    <th class="pb-3">Rating</th>
                    <th class="pb-3">Feedback / Message</th>
                    <th class="pb-3">Date</th>
                    <th class="pb-3">Status</th>
                    <th class="pb-3 text-right">Actions</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-gray-50 text-xs">
                <tr>
                    <td class="py-4 flex items-center gap-3">
                        <div class="w-8 h-8 rounded-full bg-cover bg-center" style="background-image: url('https://images.unsplash.com/photo-1494790108377-be9c29b29330?auto=format&fit=crop&q=80&w=200')"></div>
                        <div>
                            <p class="font-bold text-brand-navy">Maria Santos</p>
                            <p class="text-[9px] text-gray-400">Purok 2</p>
                        </div>
                    </td>
                    <td class="py-4 text-amber-400">★★★★★</td>
                    <td class="py-4 text-gray-700 font-medium max-w-xs">Thank you for the quick response on the drainage issue. The crew was very professional!</td>
                    <td class="py-4 text-gray-500">Oct 25, 2023</td>
                    <td class="py-4"><span class="bg-blue-100 text-blue-800 px-2.5 py-0.5 rounded-full text-[9px] font-bold">REPLIED</span></td>
                    <td class="py-4 text-right space-x-1">
                        <button class="p-1.5 bg-gray-100 hover:bg-gray-200 rounded-lg">💬</button>
                        <button class="p-1.5 bg-gray-100 hover:bg-gray-200 rounded-lg">🗑️</button>
                    </td>
                </tr>
                <tr>
                    <td class="py-4 flex items-center gap-3">
                        <div class="w-8 h-8 rounded-full bg-cover bg-center" style="background-image: url('https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?auto=format&fit=crop&q=80&w=200')"></div>
                        <div>
                            <p class="font-bold text-brand-navy">Jose Rizal</p>
                            <p class="text-[9px] text-gray-400">Purok 4</p>
                        </div>
                    </td>
                    <td class="py-4 text-amber-400">★☆☆☆☆</td>
                    <td class="py-4 text-red-600 font-medium max-w-xs">Street lights in our area have been out for 3 nights. Very dangerous at night.</td>
                    <td class="py-4 text-gray-500">Oct 24, 2023</td>
                    <td class="py-4"><span class="bg-red-100 text-red-800 px-2.5 py-0.5 rounded-full text-[9px] font-bold">URGENT</span></td>
                    <td class="py-4 text-right space-x-1">
                        <button class="bg-brand-teal text-white font-bold px-3 py-1 rounded-xl text-[10px]">Resolve</button>
                        <button class="p-1.5 bg-gray-100 hover:bg-gray-200 rounded-lg">💬</button>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

<!-- Bottom Section -->
<div class="grid grid-cols-1 xl:grid-cols-2 gap-8">
    <div class="bg-surface-card p-6 rounded-2xl border border-gray-100 shadow-sm space-y-4">
        <h3 class="font-bold text-brand-navy text-base">Feedback Volume Trend</h3>
        <div class="h-36 bg-gray-50 rounded-xl flex items-center justify-center border border-gray-100">
            <p class="text-xs text-gray-400">[ Trend Chart Graphic ]</p>
        </div>
    </div>
    <div class="bg-brand-navy p-6 rounded-2xl text-white space-y-3 shadow-sm flex flex-col justify-between">
        <div>
            <h4 class="font-bold text-xs uppercase tracking-wider text-teal-400 mb-2">📢 Admin Feedback Note</h4>
            <p class="text-xs text-gray-300 leading-relaxed">
                The current satisfaction rate is above target. Ensure all urgent complaints are resolved within 24 hours to maintain resident trust. Consider launching a public recognition post for the maintenance team.
            </p>
        </div>
        <div class="flex justify-between items-center text-[10px] text-gray-400 pt-3 border-t border-gray-700">
            <span>Head Admin Santos</span>
            <span>Drafted 2h ago</span>
        </div>
    </div>
</div>
@endsection