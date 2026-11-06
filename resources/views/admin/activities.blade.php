@extends('layouts.admin')

@section('title', 'Add Event')

@section('content')
<div class="flex justify-between items-center mb-6">
    <div>
        <div class="text-[11px] font-bold text-brand-teal mb-1">BarangayPulse / Event Calendar / Add Event</div>
        <h2 class="text-2xl font-extrabold text-brand-navy">Add Event</h2>
        <p class="text-xs text-gray-500 mt-0.5">Plan an activity and invite your community to take part.</p>
    </div>
    <a href="/admin/activities" class="bg-surface-card border border-gray-200 hover:bg-gray-50 text-brand-navy font-bold px-4 py-2 rounded-xl text-xs transition flex items-center gap-1 shadow-sm">
        &larr; Back to Calendar
    </a>
</div>

<div class="grid grid-cols-1 xl:grid-cols-3 gap-8">
    
    <!-- Left Column: Form -->
    <div class="xl:col-span-2 bg-surface-card p-8 rounded-2xl border border-gray-100 shadow-sm space-y-6">
        <div class="flex items-center gap-3 pb-4 border-b border-gray-100">
            <div class="w-10 h-10 bg-teal-50 text-brand-teal rounded-xl flex items-center justify-center font-bold">📅</div>
            <div>
                <h3 class="font-bold text-brand-navy text-sm">Event information</h3>
                <p class="text-[11px] text-gray-400">Fill out the details below to create a new community event.</p>
            </div>
        </div>

        <form action="#" method="POST" class="space-y-5">
            @csrf
            <div>
                <label class="block text-xs font-bold text-brand-navy mb-1.5">Event Name *</label>
                <input type="text" placeholder="e.g. Purok Clean-up Drive, Basketball Tournament" class="w-full bg-gray-50 border border-gray-200 text-xs font-medium text-gray-700 rounded-xl p-3 outline-none focus:ring-2 focus:ring-brand-teal">
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <div>
                    <label class="block text-xs font-bold text-brand-navy mb-1.5">Event Type *</label>
                    <select class="w-full bg-gray-50 border border-gray-200 text-xs font-bold text-gray-700 rounded-xl p-3 outline-none focus:ring-2 focus:ring-brand-teal">
                        <option>Select type</option>
                        <option>Sports</option>
                        <option>Community Service</option>
                        <option>Health Mission</option>
                    </select>
                </div>
                <div>
                    <label class="block text-xs font-bold text-brand-navy mb-1.5">Participation *</label>
                    <select class="w-full bg-gray-50 border border-gray-200 text-xs font-bold text-gray-700 rounded-xl p-3 outline-none focus:ring-2 focus:ring-brand-teal">
                        <option>Open for everyone</option>
                        <option>By Invitation</option>
                    </select>
                </div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <div>
                    <label class="block text-xs font-bold text-brand-navy mb-1.5">Start Date *</label>
                    <input type="date" class="w-full bg-gray-50 border border-gray-200 text-xs font-medium text-gray-700 rounded-xl p-3 outline-none focus:ring-2 focus:ring-brand-teal">
                </div>
                <div>
                    <label class="block text-xs font-bold text-brand-navy mb-1.5">End Date *</label>
                    <input type="date" class="w-full bg-gray-50 border border-gray-200 text-xs font-medium text-gray-700 rounded-xl p-3 outline-none focus:ring-2 focus:ring-brand-teal">
                </div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <div>
                    <label class="block text-xs font-bold text-brand-navy mb-1.5">Start Time *</label>
                    <input type="time" class="w-full bg-gray-50 border border-gray-200 text-xs font-medium text-gray-700 rounded-xl p-3 outline-none focus:ring-2 focus:ring-brand-teal">
                </div>
                <div>
                    <label class="block text-xs font-bold text-brand-navy mb-1.5">End Time *</label>
                    <input type="time" class="w-full bg-gray-50 border border-gray-200 text-xs font-medium text-gray-700 rounded-xl p-3 outline-none focus:ring-2 focus:ring-brand-teal">
                </div>
            </div>

            <div>
                <label class="block text-xs font-bold text-brand-navy mb-1.5">Venue / Location *</label>
                <input type="text" placeholder="e.g. Barangay Hall, Purok 3 Covered Court" class="w-full bg-gray-50 border border-gray-200 text-xs font-medium text-gray-700 rounded-xl p-3 outline-none focus:ring-2 focus:ring-brand-teal">
            </div>

            <div>
                <label class="block text-xs font-bold text-brand-navy mb-1.5">Event Description *</label>
                <textarea rows="4" placeholder="Provide details about the event, what to bring, or what to expect..." class="w-full bg-gray-50 border border-gray-200 text-xs font-medium text-gray-700 rounded-xl p-3 outline-none focus:ring-2 focus:ring-brand-teal resize-none"></textarea>
            </div>

            <div>
                <label class="block text-xs font-bold text-brand-navy mb-1.5">Event Banner (Optional)</label>
                <div class="border-2 border-dashed border-gray-200 rounded-2xl p-6 text-center bg-gray-50 hover:bg-gray-100 transition cursor-pointer">
                    <span class="text-2xl">📅</span>
                    <p class="text-xs font-bold text-brand-navy mt-1">Upload event poster or photo</p>
                    <p class="text-[10px] text-gray-400">Supported: JPG, PNG (max. 10MB). Best at 1200x600px</p>
                    <button type="button" class="mt-3 bg-white border border-gray-200 text-brand-navy font-bold px-4 py-2 rounded-xl text-xs shadow-sm">Choose File</button>
                </div>
            </div>

            <div class="flex justify-end gap-3 pt-4 border-t border-gray-100">
                <button type="button" class="px-5 py-2.5 rounded-xl bg-gray-100 hover:bg-gray-200 font-bold text-xs text-gray-700 transition">Discard</button>
                <button type="submit" class="px-5 py-2.5 rounded-xl bg-brand-teal hover:bg-brand-tealHover font-bold text-xs text-white shadow-sm transition">Create Event &rarr;</button>
            </div>
        </form>
    </div>

    <!-- Right Column: Checklist -->
    <div class="space-y-6">
        <div class="bg-surface-card p-6 rounded-2xl border border-gray-100 shadow-sm space-y-3">
            <h4 class="font-bold text-brand-navy text-xs uppercase tracking-wider text-teal-600">📋 Event checklist</h4>
            <ul class="space-y-2 text-xs text-gray-600 font-medium">
                <li>• Confirm the availability of the venue.</li>
                <li>• Set a clear objective for the event.</li>
                <li>• Coordinate with relevant committees.</li>
                <li>• Check for conflicts with other events.</li>
            </ul>
        </div>

        <div class="bg-surface-card p-6 rounded-2xl border border-gray-100 shadow-sm space-y-2">
            <h4 class="font-bold text-brand-navy text-xs uppercase tracking-wider text-brand-navy">ℹ️ On the calendar</h4>
            <p class="text-[11px] text-gray-500 leading-relaxed">
                Your event will be automatically plotted on the community calendar and residents will receive a notification 24 hours before the start.
            </p>
        </div>
    </div>

</div>
@endsection