@extends('layouts.admin')

@section('title', 'Post Announcement')

@section('content')
<!-- Top Breadcrumb & Action -->
<div class="flex justify-between items-center mb-6">
    <div>
        <div class="text-[11px] font-bold text-brand-teal mb-1">BarangayPulse / Announcements / Post Announcement</div>
        <h2 class="text-2xl font-extrabold text-brand-navy">Post Announcement</h2>
        <p class="text-xs text-gray-500 mt-0.5">Keep residents informed about news, advisories and programs.</p>
    </div>
    <a href="/admin/announcements" class="bg-surface-card border border-gray-200 hover:bg-gray-50 text-brand-navy font-bold px-4 py-2 rounded-xl text-xs transition flex items-center gap-1 shadow-sm">
        &larr; Back to List
    </a>
</div>

<div class="grid grid-cols-1 xl:grid-cols-3 gap-8">
    
    <!-- Left Column: Form -->
    <div class="xl:col-span-2 bg-surface-card p-8 rounded-2xl border border-gray-100 shadow-sm space-y-6">
        
        <!-- Section Header -->
        <div class="flex items-center gap-3 pb-4 border-b border-gray-100">
            <div class="w-10 h-10 bg-teal-50 text-brand-teal rounded-xl flex items-center justify-center font-bold">📢</div>
            <div>
                <h3 class="font-bold text-brand-navy text-sm">Announcement details</h3>
                <p class="text-[11px] text-gray-400">Ensure all information is accurate before publishing.</p>
            </div>
        </div>

        <form action="#" method="POST" class="space-y-5">
            @csrf
            <div>
                <label class="block text-xs font-bold text-brand-navy mb-1.5">Announcement Title *</label>
                <input type="text" placeholder="e.g. Scheduled Water Interruption, Free Vaccination Program" class="w-full bg-gray-50 border border-gray-200 text-xs font-medium text-gray-700 rounded-xl p-3 outline-none focus:ring-2 focus:ring-brand-teal">
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <div>
                    <label class="block text-xs font-bold text-brand-navy mb-1.5">Category *</label>
                    <select class="w-full bg-gray-50 border border-gray-200 text-xs font-bold text-gray-700 rounded-xl p-3 outline-none focus:ring-2 focus:ring-brand-teal">
                        <option>Select category</option>
                        <option>Advisory</option>
                        <option>Health</option>
                        <option>Community</option>
                    </select>
                </div>
                <div>
                    <label class="block text-xs font-bold text-brand-navy mb-1.5">Audience *</label>
                    <select class="w-full bg-gray-50 border border-gray-200 text-xs font-bold text-gray-700 rounded-xl p-3 outline-none focus:ring-2 focus:ring-brand-teal">
                        <option>Everyone</option>
                        <option>Purok 1</option>
                        <option>Purok 2</option>
                    </select>
                </div>
            </div>

            <div>
                <label class="block text-xs font-bold text-brand-navy mb-1.5">Announcement Content *</label>
                <textarea rows="5" placeholder="Write the full details of the announcement here..." class="w-full bg-gray-50 border border-gray-200 text-xs font-medium text-gray-700 rounded-xl p-3 outline-none focus:ring-2 focus:ring-brand-teal resize-none"></textarea>
            </div>

            <div>
                <label class="block text-xs font-bold text-brand-navy mb-1.5">Banner Image (Optional)</label>
                <div class="border-2 border-dashed border-gray-200 rounded-2xl p-6 text-center bg-gray-50 hover:bg-gray-100 transition cursor-pointer">
                    <div class="flex justify-center mb-2">
                        <span class="text-2xl">🖼️</span>
                    </div>
                    <p class="text-xs font-bold text-brand-navy">Upload a banner or photo</p>
                    <p class="text-[10px] text-gray-400 mt-0.5">Only JPG, PNG (max. 5MB). Recommended ratio 16:9</p>
                    <button type="button" class="mt-3 bg-white border border-gray-200 text-brand-navy font-bold px-4 py-2 rounded-xl text-xs shadow-sm">Browse Images</button>
                </div>
            </div>

            <div class="flex items-center gap-2 pt-2">
                <input type="checkbox" id="urgent" class="rounded border-gray-300 text-brand-teal focus:ring-brand-teal">
                <label for="urgent" class="text-xs font-bold text-red-600">Mark as urgent.</label>
                <span class="text-xs text-gray-500">This will pin the announcement and send immediate notifications to all residents.</span>
            </div>

            <div class="flex justify-end gap-3 pt-4 border-t border-gray-100">
                <button type="button" class="px-5 py-2.5 rounded-xl bg-gray-100 hover:bg-gray-200 font-bold text-xs text-gray-700 transition">Save as Draft</button>
                <button type="submit" class="px-5 py-2.5 rounded-xl bg-brand-teal hover:bg-brand-tealHover font-bold text-xs text-white shadow-sm transition">Publish Announcement &rarr;</button>
            </div>
        </form>
    </div>

    <!-- Right Column: Sidebar Tips -->
    <div class="space-y-6">
        <div class="bg-surface-card p-6 rounded-2xl border border-gray-100 shadow-sm space-y-3">
            <h4 class="font-bold text-brand-navy text-xs uppercase tracking-wider flex items-center gap-2 text-teal-600">
                <span>💡</span> Writing Tips
            </h4>
            <ul class="space-y-2 text-xs text-gray-600 font-medium">
                <li>• Use a clear and concise headline.</li>
                <li>• Include dates, times, and specific locations.</li>
                <li>• Specify who is affected by the notice.</li>
                <li>• Provide contact info for further questions.</li>
            </ul>
        </div>

        <div class="bg-surface-card p-6 rounded-2xl border border-gray-100 shadow-sm space-y-2">
            <h4 class="font-bold text-brand-navy text-xs uppercase tracking-wider flex items-center gap-2 text-brand-navy">
                <span>🛡️</span> Official Publication
            </h4>
            <p class="text-[11px] text-gray-500 leading-relaxed">
                Once published, this announcement will be visible to all targeted residents on their mobile apps and web dashboards.
            </p>
        </div>

        <div class="bg-surface-card p-6 rounded-2xl border border-gray-100 shadow-sm text-center">
            <p class="text-[10px] font-bold text-gray-400 uppercase">Scheduled posts will go live at the</p>
            <p class="text-xs font-extrabold text-brand-navy mt-1">Selected Date & Time</p>
        </div>
    </div>

</div>
@endsection