@extends('layouts.app')

@section('title', 'Incident Blotter Submission')

@section('content')
<div class="space-y-6">
    
    <!-- Top Banner Card -->
    <div class="bg-brand-navy p-8 rounded-2xl text-white flex flex-col md:flex-row justify-between items-start md:items-center shadow-sm relative overflow-hidden">
        <div class="space-y-1">
            <span class="text-[10px] font-bold text-teal-400 uppercase tracking-wider">Community Safety</span>
            <h2 class="text-2xl font-extrabold mt-1">Incident Blotter Submission</h2>
            <p class="text-xs text-gray-300 max-w-xl">Submit an official blotter request for review by Barangay Peace and Order officials. Please provide accurate information to assist in proper processing.</p>
        </div>
        <div class="mt-4 md:mt-0 text-right">
            <span class="text-xs text-teal-300 font-bold italic bg-white/10 px-3 py-1.5 rounded-xl">Ligtas na Pamayanan!</span>
        </div>
    </div>

    <div class="grid grid-cols-1 xl:grid-cols-3 gap-8">
        
        <!-- Left / Center Column: Blotter Form -->
        <div class="xl:col-span-2 bg-surface-card p-8 rounded-2xl border border-gray-100 shadow-sm space-y-6">
            <form action="/resident/dashboard" method="GET" class="space-y-5">
                
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <div>
                        <label class="block text-xs font-bold text-brand-navy mb-1.5">Complainant Name</label>
                        <input type="text" value="Maria Santos" class="w-full bg-gray-50 border border-gray-200 text-xs font-medium text-gray-700 rounded-xl p-3 outline-none focus:ring-2 focus:ring-brand-teal">
                    </div>
                    <div>
                        <label class="block text-xs font-bold text-brand-navy mb-1.5">Statement of Facts</label>
                        <textarea rows="3" placeholder="Describe the incident in detail..." class="w-full bg-gray-50 border border-gray-200 text-xs font-medium text-gray-700 rounded-xl p-3 outline-none focus:ring-2 focus:ring-brand-teal resize-none"></textarea>
                    </div>
                </div>

                <div>
                    <label class="block text-xs font-bold text-brand-navy mb-1.5">People Involved / Respondents</label>
                    <input type="text" placeholder="Enter name(s) of person(s) involved" class="w-full bg-gray-50 border border-gray-200 text-xs font-medium text-gray-700 rounded-xl p-3 outline-none focus:ring-2 focus:ring-brand-teal">
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <div>
                        <label class="block text-xs font-bold text-brand-navy mb-1.5">Incident Date</label>
                        <input type="date" class="w-full bg-gray-50 border border-gray-200 text-xs font-medium text-gray-700 rounded-xl p-3 outline-none focus:ring-2 focus:ring-brand-teal">
                    </div>
                    <div>
                        <label class="block text-xs font-bold text-brand-navy mb-1.5">Incident Time</label>
                        <input type="time" class="w-full bg-gray-50 border border-gray-200 text-xs font-medium text-gray-700 rounded-xl p-3 outline-none focus:ring-2 focus:ring-brand-teal">
                    </div>
                </div>

                <div>
                    <label class="block text-xs font-bold text-brand-navy mb-1.5">Exact Location</label>
                    <input type="text" placeholder="e.g. Purok 4, near the local market" class="w-full bg-gray-50 border border-gray-200 text-xs font-medium text-gray-700 rounded-xl p-3 outline-none focus:ring-2 focus:ring-brand-teal">
                </div>

                <div>
                    <label class="block text-xs font-bold text-brand-navy mb-1.5">Evidence Upload (Optional)</label>
                    <div class="border-2 border-dashed border-gray-200 rounded-2xl p-6 text-center bg-gray-50 hover:bg-gray-100 transition cursor-pointer">
                        <span class="text-2xl">📁</span>
                        <p class="text-xs font-bold text-brand-navy mt-1">Upload photos, videos, or documents</p>
                    </div>
                </div>

                <!-- Terms Checkbox -->
                <div class="flex items-start gap-2 pt-2">
                    <input type="checkbox" id="certify" class="mt-0.5 rounded border-gray-300 text-brand-teal focus:ring-brand-teal">
                    <label for="certify" class="text-[11px] text-gray-600 font-medium">
                        I hereby certify that the information provided is true and correct. I consent to the processing of my personal data for the purpose of this blotter report under the Data Privacy Act.
                    </label>
                </div>

                <!-- Disclaimer Box -->
                <div class="p-4 bg-gray-50 rounded-xl border border-gray-200 text-[11px] text-gray-500 space-y-1">
                    <p class="font-bold text-brand-navy flex items-center gap-1.5">
                        <span>⚠️</span> Disclaimer:
                    </p>
                    <p class="italic">Online submission is an intake request subject to official review. This is not an emergency-response channel. For immediate assistance, please call the local police or emergency hotline.</p>
                </div>

                <!-- Action Buttons -->
                <div class="flex justify-end gap-3 pt-4 border-t border-gray-100">
                    <a href="/resident/dashboard" class="px-6 py-2.5 rounded-xl bg-gray-100 hover:bg-gray-200 font-bold text-xs text-gray-700 transition text-center">Cancel</a>
                    <button type="submit" class="px-6 py-2.5 rounded-xl bg-brand-teal hover:bg-brand-tealHover font-bold text-xs text-white shadow-sm transition">Submit Blotter</button>
                </div>
            </form>
        </div>

        <!-- Right Column: Community Glance & Quick Actions -->
        <div class="space-y-6">
            
            <!-- Community Glance -->
            <div class="bg-surface-card p-6 rounded-2xl border border-gray-100 shadow-sm space-y-4">
                <h4 class="font-bold text-brand-navy text-xs uppercase tracking-wider">Our Community at a Glance</h4>
                <div class="grid grid-cols-2 gap-3 text-center">
                    <div class="p-3 bg-gray-50 rounded-xl border border-gray-100">
                        <p class="text-xl font-extrabold text-brand-navy">1,240</p>
                        <p class="text-[9px] font-bold text-gray-400 uppercase tracking-wider mt-0.5">Total Residents</p>
                    </div>
                    <div class="p-3 bg-gray-50 rounded-xl border border-gray-100">
                        <p class="text-xl font-extrabold text-brand-navy">5</p>
                        <p class="text-[9px] font-bold text-gray-400 uppercase tracking-wider mt-0.5">Active Projects</p>
                    </div>
                    <div class="p-3 bg-gray-50 rounded-xl border border-gray-100">
                        <p class="text-xl font-extrabold text-brand-navy">3</p>
                        <p class="text-[9px] font-bold text-gray-400 uppercase tracking-wider mt-0.5">Upcoming Events</p>
                    </div>
                    <div class="p-3 bg-gray-50 rounded-xl border border-gray-100">
                        <p class="text-xl font-extrabold text-brand-teal">12</p>
                        <p class="text-[9px] font-bold text-gray-400 uppercase tracking-wider mt-0.5">Pending Feedback</p>
                    </div>
                </div>
            </div>

            <!-- Quick Actions -->
            <div class="bg-surface-card p-6 rounded-2xl border border-gray-100 shadow-sm space-y-3">
                <h4 class="font-bold text-brand-navy text-xs uppercase tracking-wider flex items-center gap-1.5">
                    <span>⚡</span> Quick Actions
                </h4>
                <div class="grid grid-cols-2 gap-2">
                    <button class="bg-gray-100 hover:bg-gray-200 text-brand-navy font-bold py-2 px-3 rounded-xl text-xs transition text-center">Permit Request</button>
                    <button class="bg-gray-100 hover:bg-gray-200 text-brand-navy font-bold py-2 px-3 rounded-xl text-xs transition text-center">Report Issue</button>
                    <button class="bg-gray-100 hover:bg-gray-200 text-brand-navy font-bold py-2 px-3 rounded-xl text-xs transition text-center">Register Member</button>
                    <button class="bg-gray-100 hover:bg-gray-200 text-brand-navy font-bold py-2 px-3 rounded-xl text-xs transition text-center">Event Signup</button>
                </div>
            </div>

            <!-- Latest Announcements -->
            <div class="bg-surface-card p-6 rounded-2xl border border-gray-100 shadow-sm space-y-3">
                <div class="flex justify-between items-center">
                    <h4 class="font-bold text-brand-navy text-xs uppercase tracking-wider flex items-center gap-1.5">
                        <span>📢</span> Latest Announcements
                    </h4>
                    <a href="#" class="text-[10px] font-bold text-brand-teal hover:underline">View All &rarr;</a>
                </div>
                <div class="space-y-2 text-xs">
                    <div class="p-2.5 bg-gray-50 rounded-xl font-medium text-brand-navy">Water Interruption Notice</div>
                    <div class="p-2.5 bg-gray-50 rounded-xl font-medium text-brand-navy">Purok Meeting Tonight</div>
                </div>
            </div>

        </div>

    </div>

</div>
@endsection