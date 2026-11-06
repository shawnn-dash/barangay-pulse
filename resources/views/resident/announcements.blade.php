@extends('layouts.app')

@section('title', 'Barangay Announcements')
@section('header', 'Barangay Announcements')
@section('sub-header', 'Latest updates from Barangay Sukailang')

@section('content')
<!-- Search & Filter Bar -->
<div class="bg-surface-card p-4 rounded-2xl border border-gray-100 shadow-sm mb-8 flex flex-col md:flex-row justify-between items-center gap-4">
    <div class="relative w-full md:w-96">
        <span class="absolute inset-y-0 left-0 flex items-center pl-3 text-gray-400">🔍</span>
        <input type="text" placeholder="Search announcements..." class="w-full bg-gray-50 border border-gray-200 text-xs font-bold text-gray-700 rounded-xl pl-10 pr-4 py-3 outline-none focus:ring-2 focus:ring-brand-teal">
    </div>
    <div class="flex items-center gap-3 w-full md:w-auto">
        <select class="w-full md:w-auto bg-gray-50 border border-gray-200 text-xs font-bold text-gray-700 rounded-xl px-4 py-3 outline-none">
            <option>All Categories</option>
            <option>Environment</option>
            <option>Health Mission</option>
            <option>Infrastructure</option>
        </select>
    </div>
</div>

<!-- Announcements Grid -->
<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 mb-8">
    
    <!-- Card 1 -->
    <div class="bg-surface-card rounded-2xl border border-gray-100 shadow-sm overflow-hidden flex flex-col">
        <div class="h-48 bg-gray-200 relative">
            <div class="absolute inset-0 bg-cover bg-center" style="background-image: url('https://images.unsplash.com/photo-1559027615-cd4628902d4a?auto=format&fit=crop&q=80&w=600')"></div>
        </div>
        <div class="p-6 flex-1 flex flex-col justify-between">
            <div>
                <span class="text-[10px] font-bold text-teal-600 bg-teal-50 px-2.5 py-1 rounded-md uppercase tracking-wider">Environment</span>
                <h4 class="font-bold text-brand-navy text-lg mt-2 mb-2">Weekend Community Clean-up Drive</h4>
                <p class="text-xs text-gray-500 leading-relaxed mb-4">Join us this Saturday as we clean Purok 3 riverbanks. Tools and snacks will be provided for all volunteers.</p>
            </div>
            <div class="flex justify-between items-center border-t border-gray-100 pt-4 text-xs">
                <span class="text-gray-400 font-medium">June 28, 2024</span>
                <a href="#" class="font-bold text-brand-teal hover:underline">Read more &rarr;</a>
            </div>
        </div>
    </div>

    <!-- Card 2 -->
    <div class="bg-surface-card rounded-2xl border border-gray-100 shadow-sm overflow-hidden flex flex-col">
        <div class="h-48 bg-gray-200 relative">
            <div class="absolute inset-0 bg-cover bg-center" style="background-image: url('https://images.unsplash.com/photo-1576091160399-112ba8d25d1d?auto=format&fit=crop&q=80&w=600')"></div>
        </div>
        <div class="p-6 flex-1 flex flex-col justify-between">
            <div>
                <span class="text-[10px] font-bold text-blue-600 bg-blue-50 px-2.5 py-1 rounded-md uppercase tracking-wider">Health Mission</span>
                <h4 class="font-bold text-brand-navy text-lg mt-2 mb-2">Free Vaccination Day for Seniors</h4>
                <p class="text-xs text-gray-500 leading-relaxed mb-4">Annual flu vaccination for seniors and children at the Barangay Hall lobby. Please bring your senior ID.</p>
            </div>
            <div class="flex justify-between items-center border-t border-gray-100 pt-4 text-xs">
                <span class="text-gray-400 font-medium">July 05, 2024</span>
                <a href="#" class="font-bold text-brand-teal hover:underline">Read more &rarr;</a>
            </div>
        </div>
    </div>

    <!-- Card 3 -->
    <div class="bg-surface-card rounded-2xl border border-gray-100 shadow-sm overflow-hidden flex flex-col">
        <div class="h-48 bg-gray-200 relative">
            <div class="absolute inset-0 bg-cover bg-center" style="background-image: url('https://images.unsplash.com/photo-1541872703-74c5e44368f9?auto=format&fit=crop&q=80&w=600')"></div>
        </div>
        <div class="p-6 flex-1 flex flex-col justify-between">
            <div>
                <span class="text-[10px] font-bold text-purple-600 bg-purple-50 px-2.5 py-1 rounded-md uppercase tracking-wider">Security Advisory</span>
                <h4 class="font-bold text-brand-navy text-lg mt-2 mb-2">Peace and Order Town Hall</h4>
                <p class="text-xs text-gray-500 leading-relaxed mb-4">Discussion on new safety protocols for the upcoming festive season. Your feedback and presence are highly valued.</p>
            </div>
            <div class="flex justify-between items-center border-t border-gray-100 pt-4 text-xs">
                <span class="text-gray-400 font-medium">July 02, 2024</span>
                <a href="#" class="font-bold text-brand-teal hover:underline">Read more &rarr;</a>
            </div>
        </div>
    </div>

</div>
@endsection