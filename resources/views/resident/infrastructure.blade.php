@extends('layouts.app')

@section('title', 'Infrastructure Projects')
@section('header', 'Infrastructure Projects')
@section('sub-header', 'Tracking development and community improvements across the Barangay')

@section('content')
<!-- Metric Cards Bar -->
<div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8">
    <div class="bg-surface-card p-6 rounded-2xl border border-gray-100 shadow-sm flex items-center justify-between">
        <div>
            <p class="text-[10px] font-bold text-gray-400 uppercase tracking-wider">Total Projects</p>
            <p class="text-3xl font-extrabold text-brand-navy mt-1">12</p>
        </div>
        <div class="w-12 h-12 bg-gray-100 text-gray-600 rounded-xl flex items-center justify-center font-bold">🏗️</div>
    </div>
    <div class="bg-surface-card p-6 rounded-2xl border border-gray-100 shadow-sm flex items-center justify-between">
        <div>
            <p class="text-[10px] font-bold text-gray-400 uppercase tracking-wider">Ongoing</p>
            <p class="text-3xl font-extrabold text-brand-navy mt-1">5</p>
        </div>
        <div class="w-12 h-12 bg-blue-50 text-blue-600 rounded-xl flex items-center justify-center font-bold">⏳</div>
    </div>
    <div class="bg-surface-card p-6 rounded-2xl border border-gray-100 shadow-sm flex items-center justify-between">
        <div>
            <p class="text-[10px] font-bold text-gray-400 uppercase tracking-wider">Completed</p>
            <p class="text-3xl font-extrabold text-brand-navy mt-1">7</p>
        </div>
        <div class="w-12 h-12 bg-teal-50 text-brand-teal rounded-xl flex items-center justify-center font-bold">✅</div>
    </div>
</div>

<!-- Projects Grid -->
<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
    
    <!-- Project 1 -->
    <div class="bg-surface-card rounded-2xl border border-gray-100 shadow-sm overflow-hidden flex flex-col justify-between">
        <div>
            <div class="h-48 bg-gray-200 relative">
                <div class="absolute inset-0 bg-cover bg-center" style="background-image: url('https://images.unsplash.com/photo-1486406146926-c627a92ad1ab?auto=format&fit=crop&q=80&w=600')"></div>
                <span class="absolute top-4 right-4 bg-blue-600 text-white px-3 py-1 rounded-full text-[10px] font-bold shadow-sm">ONGOING</span>
            </div>
            <div class="p-6">
                <h4 class="font-bold text-brand-navy text-lg mb-1">New Barangay Hall Construction</h4>
                <p class="text-xs text-gray-500 leading-relaxed mb-4">Located at the Purok Central, designed to serve 5,000 residents with modern facilities.</p>
                <div class="flex justify-between items-center text-xs font-bold mb-2">
                    <span class="text-gray-400 uppercase tracking-wider text-[10px]">Progress</span>
                    <span class="text-brand-navy">85%</span>
                </div>
                <div class="w-full bg-gray-100 h-2 rounded-full overflow-hidden">
                    <div class="bg-brand-teal h-full rounded-full" style="width: 85%"></div>
                </div>
            </div>
        </div>
        <div class="px-6 pb-6 pt-2 flex justify-between items-center border-t border-gray-50 text-xs">
            <a href="#" class="font-bold text-brand-teal hover:underline flex items-center gap-1">View Progress &rarr;</a>
            <span class="text-[10px] text-gray-400">Last updated 2 days ago</span>
        </div>
    </div>

    <!-- Project 2 -->
    <div class="bg-surface-card rounded-2xl border border-gray-100 shadow-sm overflow-hidden flex flex-col justify-between">
        <div>
            <div class="h-48 bg-gray-200 relative">
                <div class="absolute inset-0 bg-cover bg-center" style="background-image: url('https://images.unsplash.com/photo-1541888946425-d0fbb18f0c29?auto=format&fit=crop&q=80&w=600')"></div>
                <span class="absolute top-4 right-4 bg-blue-600 text-white px-3 py-1 rounded-full text-[10px] font-bold shadow-sm">ONGOING</span>
            </div>
            <div class="p-6">
                <h4 class="font-bold text-brand-navy text-lg mb-1">Purok 4 Road Concreting</h4>
                <p class="text-xs text-gray-500 leading-relaxed mb-4">Concreting of the main access road to improve transportation of agricultural goods.</p>
                <div class="flex justify-between items-center text-xs font-bold mb-2">
                    <span class="text-gray-400 uppercase tracking-wider text-[10px]">Progress</span>
                    <span class="text-brand-navy">40%</span>
                </div>
                <div class="w-full bg-gray-100 h-2 rounded-full overflow-hidden">
                    <div class="bg-brand-teal h-full rounded-full" style="width: 40%"></div>
                </div>
            </div>
        </div>
        <div class="px-6 pb-6 pt-2 flex justify-between items-center border-t border-gray-50 text-xs">
            <a href="#" class="font-bold text-brand-teal hover:underline flex items-center gap-1">View Progress &rarr;</a>
            <span class="text-[10px] text-gray-400">Last updated 5 days ago</span>
        </div>
    </div>

    <!-- Project 3 -->
    <div class="bg-surface-card rounded-2xl border border-gray-100 shadow-sm overflow-hidden flex flex-col justify-between">
        <div>
            <div class="h-48 bg-gray-200 relative">
                <div class="absolute inset-0 bg-cover bg-center" style="background-image: url('https://images.unsplash.com/photo-1513836279014-a89f7a76ae86?auto=format&fit=crop&q=80&w=600')"></div>
                <span class="absolute top-4 right-4 bg-amber-500 text-white px-3 py-1 rounded-full text-[10px] font-bold shadow-sm">PLANNING</span>
            </div>
            <div class="p-6">
                <h4 class="font-bold text-brand-navy text-lg mb-1">Solar Streetlights Phase 2</h4>
                <p class="text-xs text-gray-500 leading-relaxed mb-4">Installation of 50 new units across darker areas of Purok 1 and Purok 2 for security.</p>
                <div class="flex justify-between items-center text-xs font-bold mb-2">
                    <span class="text-gray-400 uppercase tracking-wider text-[10px]">Progress</span>
                    <span class="text-brand-navy">10%</span>
                </div>
                <div class="w-full bg-gray-100 h-2 rounded-full overflow-hidden">
                    <div class="bg-brand-teal h-full rounded-full" style="width: 10%"></div>
                </div>
            </div>
        </div>
        <div class="px-6 pb-6 pt-2 flex justify-between items-center border-t border-gray-50 text-xs">
            <a href="#" class="font-bold text-brand-teal hover:underline flex items-center gap-1">View Progress &rarr;</a>
            <span class="text-[10px] text-gray-400">Procurement Stage</span>
        </div>
    </div>

    <!-- Project 4 -->
    <div class="bg-surface-card rounded-2xl border border-gray-100 shadow-sm overflow-hidden flex flex-col justify-between">
        <div>
            <div class="h-48 bg-gray-200 relative">
                <div class="absolute inset-0 bg-cover bg-center" style="background-image: url('https://images.unsplash.com/photo-1590381105924-c72589b9ef3f?auto=format&fit=crop&q=80&w=600')"></div>
                <span class="absolute top-4 right-4 bg-teal-600 text-white px-3 py-1 rounded-full text-[10px] font-bold shadow-sm">FINISHED</span>
            </div>
            <div class="p-6">
                <h4 class="font-bold text-brand-navy text-lg mb-1">Drainage System Improvement</h4>
                <p class="text-xs text-gray-500 leading-relaxed mb-4">Completed reconstruction of the main drainage artery to prevent seasonal flooding.</p>
                <div class="flex justify-between items-center text-xs font-bold mb-2">
                    <span class="text-gray-400 uppercase tracking-wider text-[10px]">Progress</span>
                    <span class="text-brand-navy">100%</span>
                </div>
                <div class="w-full bg-gray-100 h-2 rounded-full overflow-hidden">
                    <div class="bg-brand-teal h-full rounded-full" style="width: 100%"></div>
                </div>
            </div>
        </div>
        <div class="px-6 pb-6 pt-2 flex justify-between items-center border-t border-gray-50 text-xs">
            <a href="#" class="font-bold text-brand-teal hover:underline flex items-center gap-1">View Details &rarr;</a>
            <span class="text-[10px] text-gray-400">Completed May 2024</span>
        </div>
    </div>

    <!-- Project 5 -->
    <div class="bg-surface-card rounded-2xl border border-gray-100 shadow-sm overflow-hidden flex flex-col justify-between">
        <div>
            <div class="h-48 bg-gray-200 relative">
                <div class="absolute inset-0 bg-cover bg-center" style="background-image: url('https://images.unsplash.com/photo-1519331379826-f10be5486c6f?auto=format&fit=crop&q=80&w=600')"></div>
                <span class="absolute top-4 right-4 bg-blue-600 text-white px-3 py-1 rounded-full text-[10px] font-bold shadow-sm">ONGOING</span>
            </div>
            <div class="p-6">
                <h4 class="font-bold text-brand-navy text-lg mb-1">Community Park Renovation</h4>
                <p class="text-xs text-gray-500 leading-relaxed mb-4">Revamping the local park with new playground equipment and a jogging track.</p>
                <div class="flex justify-between items-center text-xs font-bold mb-2">
                    <span class="text-gray-400 uppercase tracking-wider text-[10px]">Progress</span>
                    <span class="text-brand-navy">60%</span>
                </div>
                <div class="w-full bg-gray-100 h-2 rounded-full overflow-hidden">
                    <div class="bg-brand-teal h-full rounded-full" style="width: 60%"></div>
                </div>
            </div>
        </div>
        <div class="px-6 pb-6 pt-2 flex justify-between items-center border-t border-gray-50 text-xs">
            <a href="#" class="font-bold text-brand-teal hover:underline flex items-center gap-1">View Progress &rarr;</a>
            <span class="text-[10px] text-gray-400">Landscaping started</span>
        </div>
    </div>

    <!-- Project 6 -->
    <div class="bg-surface-card rounded-2xl border border-gray-100 shadow-sm overflow-hidden flex flex-col justify-between">
        <div>
            <div class="h-48 bg-gray-200 relative">
                <div class="absolute inset-0 bg-cover bg-center" style="background-image: url('https://images.unsplash.com/photo-1584515979956-d9f6e5d09982?auto=format&fit=crop&q=80&w=600')"></div>
                <span class="absolute top-4 right-4 bg-blue-600 text-white px-3 py-1 rounded-full text-[10px] font-bold shadow-sm">ONGOING</span>
            </div>
            <div class="p-6">
                <h4 class="font-bold text-brand-navy text-lg mb-1">Health Center Expansion</h4>
                <p class="text-xs text-gray-500 leading-relaxed mb-4">Adding two more consultation rooms and a pharmacy storage unit to the existing center.</p>
                <div class="flex justify-between items-center text-xs font-bold mb-2">
                    <span class="text-gray-400 uppercase tracking-wider text-[10px]">Progress</span>
                    <span class="text-brand-navy">25%</span>
                </div>
                <div class="w-full bg-gray-100 h-2 rounded-full overflow-hidden">
                    <div class="bg-brand-teal h-full rounded-full" style="width: 25%"></div>
                </div>
            </div>
        </div>
        <div class="px-6 pb-6 pt-2 flex justify-between items-center border-t border-gray-50 text-xs">
            <a href="#" class="font-bold text-brand-teal hover:underline flex items-center gap-1">View Progress &rarr;</a>
            <span class="text-[10px] text-gray-400">Foundation completed</span>
        </div>
    </div>

</div>
@endsection