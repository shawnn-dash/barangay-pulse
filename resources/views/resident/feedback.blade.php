@extends('layouts.app')

@section('title', 'Community Feedback')
@section('header', 'Freedom Wall')
@section('sub-header', 'Share your thoughts with Barangay Sukailang')

@section('content')
<div class="grid grid-cols-1 xl:grid-cols-3 gap-8">
    
    <!-- Left / Center Column: Freedom Wall Stream -->
    <div class="xl:col-span-2 space-y-6">
        
        <!-- Post Feedback Box -->
        <div class="bg-surface-card p-6 rounded-2xl border border-gray-100 shadow-sm space-y-4">
            <div class="flex items-center gap-3">
                <div class="w-10 h-10 bg-brand-teal rounded-full flex items-center justify-center font-bold text-white">S</div>
                <textarea rows="2" placeholder="What's on your mind? Share suggestions, appreciation, or concerns..." class="w-full bg-gray-50 border border-gray-200 text-xs font-medium text-gray-700 rounded-xl p-3 outline-none focus:ring-2 focus:ring-brand-teal resize-none"></textarea>
            </div>
            <div class="flex justify-between items-center pt-2 border-t border-gray-100">
                <div class="flex items-center gap-3 text-gray-400 text-sm">
                    <button class="hover:text-brand-teal transition">📷</button>
                    <button class="hover:text-brand-teal transition">@</button>
                    <button class="hover:text-brand-teal transition">📍</button>
                </div>
                <button class="bg-brand-teal hover:bg-brand-tealHover text-white font-bold px-6 py-2 rounded-xl text-xs shadow-sm transition">Post Feedback</button>
            </div>
        </div>

        <!-- Post Item 1 -->
        <div class="bg-surface-card p-6 rounded-2xl border border-gray-100 shadow-sm space-y-4">
            <div class="flex justify-between items-start">
                <div class="flex items-center gap-3">
                    <div class="w-10 h-10 rounded-full bg-gray-300 bg-cover bg-center" style="background-image: url('https://images.unsplash.com/photo-1494790108377-be9c29b29330?auto=format&fit=crop&q=80&w=200')"></div>
                    <div>
                        <h4 class="font-bold text-brand-navy text-sm">Elena Marasigan</h4>
                        <p class="text-[10px] text-gray-400 font-medium">2 hours ago • Zone 4</p>
                    </div>
                </div>
                <button class="text-gray-400 hover:text-gray-600 font-bold">•••</button>
            </div>
            
            <p class="text-xs text-gray-700 leading-relaxed">
                I just want to express my gratitude to the Barangay staff for the quick response to our street light concern yesterday. Our street feels much safer now! Keep up the great work! 💡
            </p>

            <div class="flex justify-between items-center text-xs text-gray-500 pt-3 border-t border-gray-100 font-medium">
                <div class="flex items-center gap-4">
                    <button class="flex items-center gap-1.5 text-brand-teal font-bold hover:underline">❤️ 24 Likes</button>
                    <button class="hover:underline">💬 3 Replies</button>
                </div>
                <button class="hover:underline">Share</button>
            </div>

            <!-- Comment Thread -->
            <div class="bg-gray-50 p-4 rounded-xl space-y-3 mt-3 border border-gray-100">
                <div class="flex items-start gap-3">
                    <div class="w-7 h-7 rounded-full bg-gray-300 bg-cover bg-center" style="background-image: url('https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?auto=format&fit=crop&q=80&w=200')"></div>
                    <div class="flex-1">
                        <div class="flex justify-between items-center">
                            <span class="text-xs font-bold text-brand-navy">Ricardo Dalisay</span>
                            <span class="text-[10px] text-gray-400">1 hour ago</span>
                        </div>
                        <p class="text-xs text-gray-600 mt-0.5">Agree! They've been very efficient lately. Kudos to Captain and the team!</p>
                    </div>
                </div>

                <div class="flex items-center gap-3 pt-2 border-t border-gray-200">
                    <input type="text" placeholder="Write a reply..." class="w-full bg-white border border-gray-200 text-xs rounded-lg px-3 py-2 outline-none">
                    <span class="text-brand-teal font-bold cursor-pointer">📤</span>
                </div>
            </div>
        </div>

        <!-- Post Item 2 -->
        <div class="bg-surface-card p-6 rounded-2xl border border-gray-100 shadow-sm space-y-4">
            <div class="flex justify-between items-start">
                <div class="flex items-center gap-3">
                    <div class="w-10 h-10 rounded-full bg-gray-300 bg-cover bg-center" style="background-image: url('https://images.unsplash.com/photo-1500648767791-00dcc994a43e?auto=format&fit=crop&q=80&w=200')"></div>
                    <div>
                        <h4 class="font-bold text-brand-navy text-sm">Marco Polo</h4>
                        <p class="text-[10px] text-gray-400 font-medium">5 hours ago • Zone 2</p>
                    </div>
                </div>
                <button class="text-gray-400 hover:text-gray-600 font-bold">•••</button>
            </div>
            
            <p class="text-xs text-gray-700 leading-relaxed">
                Suggesting to have more trash bins near the basketball court. People often leave their water bottles after games. Maybe we can also put a 'No Littering' sign?
            </p>

            <div class="h-40 bg-gray-100 rounded-xl overflow-hidden relative">
                <div class="absolute inset-0 bg-cover bg-center" style="background-image: url('https://images.unsplash.com/photo-1574629810360-7efbbe195018?auto=format&fit=crop&q=80&w=600')"></div>
            </div>
        </div>

    </div>

    <!-- Right Column: Sidebar Widgets -->
    <div class="space-y-6">
        
        <!-- Wall Rules -->
        <div class="bg-surface-card p-6 rounded-2xl border border-gray-100 shadow-sm space-y-3">
            <h3 class="font-bold text-brand-navy text-base mb-3">Wall Rules</h3>
            <ul class="space-y-2 text-xs text-gray-600 font-medium">
                <li class="flex items-center gap-2">✅ Be respectful to your neighbors.</li>
                <li class="flex items-center gap-2">✅ Constructive feedback is encouraged.</li>
                <li class="flex items-center gap-2">✅ No hate speech or harassment.</li>
            </ul>
        </div>

        <!-- Popular Topics -->
        <div class="bg-surface-card p-6 rounded-2xl border border-gray-100 shadow-sm">
            <h3 class="font-bold text-brand-navy text-base mb-3">Popular Topics</h3>
            <div class="flex flex-wrap gap-2">
                <span class="bg-teal-50 text-brand-teal px-3 py-1.5 rounded-xl text-xs font-bold">#CleanUpDrive</span>
                <span class="bg-teal-50 text-brand-teal px-3 py-1.5 rounded-xl text-xs font-bold">#StreetLights</span>
                <span class="bg-teal-50 text-brand-teal px-3 py-1.5 rounded-xl text-xs font-bold">#VaccinationSchedule</span>
                <span class="bg-teal-50 text-brand-teal px-3 py-1.5 rounded-xl text-xs font-bold">#BarangayHall</span>
                <span class="bg-teal-50 text-brand-teal px-3 py-1.5 rounded-xl text-xs font-bold">#WasteManagement</span>
            </div>
        </div>

        <!-- Active Neighbors -->
        <div class="bg-surface-card p-6 rounded-2xl border border-gray-100 shadow-sm space-y-3">
            <h3 class="font-bold text-brand-navy text-base mb-3">Active Neighbors</h3>
            <div class="space-y-3">
                <div class="flex items-center justify-between">
                    <div class="flex items-center gap-2.5">
                        <div class="w-8 h-8 rounded-full bg-gray-200 bg-cover bg-center" style="background-image: url('https://images.unsplash.com/photo-1494790108377-be9c29b29330?auto=format&fit=crop&q=80&w=200')"></div>
                        <div>
                            <p class="text-xs font-bold text-brand-navy">Angel Locsin</p>
                            <p class="text-[10px] text-gray-400">16 posts this week</p>
                        </div>
                    </div>
                </div>
                <div class="flex items-center justify-between">
                    <div class="flex items-center gap-2.5">
                        <div class="w-8 h-8 rounded-full bg-gray-200 bg-cover bg-center" style="background-image: url('https://images.unsplash.com/photo-1500648767791-00dcc994a43e?auto=format&fit=crop&q=80&w=200')"></div>
                        <div>
                            <p class="text-xs font-bold text-brand-navy">Piolo Pascual</p>
                            <p class="text-[10px] text-gray-400">12 posts this week</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

</div>
@endsection