@extends('layouts.admin')

@section('title', 'Barangay Network')

@section('content')
<div class="grid grid-cols-1 xl:grid-cols-3 gap-8">
    
    <!-- Left Column -->
    <div class="xl:col-span-2 space-y-6">
        <!-- Main Banner -->
        <div class="bg-brand-navy p-8 rounded-2xl text-white space-y-4 shadow-sm relative overflow-hidden">
            <span class="bg-brand-teal text-white text-[10px] font-bold px-3 py-1 rounded-full uppercase tracking-wider">Home Barangay: Sukailang</span>
            <div>
                <h2 class="text-2xl font-extrabold mt-1">Viewing: Barangay San Jose</h2>
                <p class="text-xs text-gray-300 mt-1">Region XIII - Caraga Region | Population: 4,210</p>
            </div>
            <div class="flex gap-3 pt-2">
                <button class="bg-white/10 hover:bg-white/20 text-white font-bold px-4 py-2 rounded-xl text-xs transition">Switch Barangay</button>
                <button class="bg-brand-teal hover:bg-brand-tealHover text-white font-bold px-4 py-2 rounded-xl text-xs transition">Visit Official Website</button>
            </div>
        </div>

        <!-- Public Activities & Bulletins -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <div class="bg-surface-card p-6 rounded-2xl border border-gray-100 shadow-sm space-y-4">
                <div class="flex justify-between items-center">
                    <h3 class="font-bold text-brand-navy text-sm">Public Activities</h3>
                    <a href="#" class="text-xs text-brand-teal font-bold hover:underline">View All &rarr;</a>
                </div>
                <div class="p-3 bg-gray-50 rounded-xl border border-gray-100 space-y-1">
                    <h4 class="font-bold text-brand-navy text-xs">San Jose Green Initiative</h4>
                    <p class="text-[10px] text-gray-400">August 12, 2024</p>
                </div>
                <div class="p-3 bg-gray-50 rounded-xl border border-gray-100 space-y-1">
                    <h4 class="font-bold text-brand-navy text-xs">Inter-Purok Basketball Finals</h4>
                    <p class="text-[10px] text-gray-400">August 15, 2024</p>
                </div>
            </div>

            <div class="bg-surface-card p-6 rounded-2xl border border-gray-100 shadow-sm space-y-4">
                <div class="flex justify-between items-center">
                    <h3 class="font-bold text-brand-navy text-sm">Latest Bulletins</h3>
                    <a href="#" class="text-xs text-brand-teal font-bold hover:underline">View All &rarr;</a>
                </div>
                <div class="p-3 bg-gray-50 rounded-xl border border-gray-100 space-y-1">
                    <h4 class="font-bold text-brand-navy text-xs">Scheduled Road Maintenance - Main Ave</h4>
                    <p class="text-[10px] text-gray-400">Expect delays from Aug 10-12.</p>
                </div>
                <div class="p-3 bg-gray-50 rounded-xl border border-gray-100 space-y-1">
                    <h4 class="font-bold text-brand-navy text-xs">New Health Center Hours</h4>
                    <p class="text-[10px] text-gray-400">Open 24/7 starting next month.</p>
                </div>
            </div>
        </div>

        <!-- Barangay Council -->
        <div class="bg-surface-card p-6 rounded-2xl border border-gray-100 shadow-sm space-y-4">
            <h3 class="font-bold text-brand-navy text-base">Barangay Council</h3>
            <div class="grid grid-cols-2 md:grid-cols-4 gap-4 text-center">
                <div class="p-4 bg-gray-50 rounded-xl border border-gray-100 space-y-2">
                    <div class="w-12 h-12 mx-auto rounded-full bg-cover bg-center" style="background-image: url('https://images.unsplash.com/photo-1500648767791-00dcc994a43e?auto=format&fit=crop&q=80&w=200')"></div>
                    <div>
                        <h4 class="font-bold text-brand-navy text-xs">Hon. Mateo Reyes</h4>
                        <p class="text-[9px] text-brand-teal font-bold">Punong Barangay</p>
                    </div>
                    <a href="#" class="text-[10px] text-brand-teal font-bold hover:underline block">View Profile</a>
                </div>
                <div class="p-4 bg-gray-50 rounded-xl border border-gray-100 space-y-2">
                    <div class="w-12 h-12 mx-auto rounded-full bg-cover bg-center" style="background-image: url('https://images.unsplash.com/photo-1494790108377-be9c29b29330?auto=format&fit=crop&q=80&w=200')"></div>
                    <div>
                        <h4 class="font-bold text-brand-navy text-xs">Hon. Elena Cruz</h4>
                        <p class="text-[9px] text-brand-teal font-bold">Kagawad (Health)</p>
                    </div>
                    <a href="#" class="text-[10px] text-brand-teal font-bold hover:underline block">View Profile</a>
                </div>
                <div class="p-4 bg-gray-50 rounded-xl border border-gray-100 space-y-2">
                    <div class="w-12 h-12 mx-auto rounded-full bg-cover bg-center" style="background-image: url('https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?auto=format&fit=crop&q=80&w=200')"></div>
                    <div>
                        <h4 class="font-bold text-brand-navy text-xs">Hon. Jace Salcedo</h4>
                        <p class="text-[9px] text-brand-teal font-bold">Kagawad (Youth)</p>
                    </div>
                    <a href="#" class="text-[10px] text-brand-teal font-bold hover:underline block">View Profile</a>
                </div>
                <div class="p-4 bg-gray-50 rounded-xl border border-gray-100 space-y-2">
                    <div class="w-12 h-12 mx-auto rounded-full bg-cover bg-center" style="background-image: url('https://images.unsplash.com/photo-1534528741775-53994a69daeb?auto=format&fit=crop&q=80&w=200')"></div>
                    <div>
                        <h4 class="font-bold text-brand-navy text-xs">Hon. Ben Santos</h4>
                        <p class="text-[9px] text-brand-teal font-bold">Secretary</p>
                    </div>
                    <a href="#" class="text-[10px] text-brand-teal font-bold hover:underline block">View Profile</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Right Column -->
    <div class="space-y-6">
        <!-- Network Directory -->
        <div class="bg-surface-card p-6 rounded-2xl border border-gray-100 shadow-sm space-y-3">
            <h3 class="font-bold text-brand-navy text-base">Network Directory</h3>
            <input type="text" placeholder="Search barangays..." class="w-full bg-gray-50 border border-gray-200 text-xs font-bold text-gray-700 rounded-xl p-2.5 outline-none">
            <div class="space-y-2 pt-2">
                <div class="p-3 bg-teal-50 border border-teal-200 rounded-xl flex justify-between items-center text-xs font-bold text-brand-navy">
                    <span>Barangay San Jose</span>
                    <span>&rarr;</span>
                </div>
                <div class="p-3 bg-gray-50 border border-gray-100 rounded-xl flex justify-between items-center text-xs font-medium text-gray-700 hover:bg-gray-100 transition cursor-pointer">
                    <span>Barangay Mabini</span>
                    <span>&rarr;</span>
                </div>
                <div class="p-3 bg-gray-50 border border-gray-100 rounded-xl flex justify-between items-center text-xs font-medium text-gray-700 hover:bg-gray-100 transition cursor-pointer">
                    <span>Barangay Sta. Cruz</span>
                    <span>&rarr;</span>
                </div>
                <div class="p-3 bg-gray-50 border border-gray-100 rounded-xl flex justify-between items-center text-xs font-medium text-gray-700 hover:bg-gray-100 transition cursor-pointer">
                    <span>Barangay Bagong Silang</span>
                    <span>&rarr;</span>
                </div>
            </div>
        </div>

        <!-- Contact Official Form -->
        <div class="bg-surface-card p-6 rounded-2xl border border-gray-100 shadow-sm space-y-4">
            <div>
                <h3 class="font-bold text-brand-navy text-base">Contact Official</h3>
                <p class="text-[10px] text-gray-400">Message San Jose Council</p>
            </div>
            <div class="space-y-3">
                <div>
                    <label class="block text-[10px] font-bold text-gray-400 uppercase mb-1">Subject</label>
                    <input type="text" value="Inquiry / General Information" class="w-full bg-gray-50 border border-gray-200 text-xs font-medium text-gray-700 rounded-xl p-3 outline-none">
                </div>
                <div>
                    <label class="block text-[10px] font-bold text-gray-400 uppercase mb-1">Your Message</label>
                    <textarea rows="3" placeholder="Type your message here..." class="w-full bg-gray-50 border border-gray-200 text-xs font-medium text-gray-700 rounded-xl p-3 outline-none resize-none"></textarea>
                </div>
                <button class="w-full bg-brand-teal hover:bg-brand-tealHover text-white font-bold py-3 rounded-xl text-xs shadow-sm transition">Send Message</button>
            </div>
            <p class="text-[10px] text-gray-400 text-center">Expected response time: 24-48 hours</p>
        </div>
    </div>

</div>
@endsection