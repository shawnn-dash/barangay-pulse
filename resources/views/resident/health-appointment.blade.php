@extends('layouts.app')

@section('title', 'Health Center Appointment')

@section('content')
<div class="space-y-6">
    
    <!-- Top Banner Card -->
    <div class="bg-brand-navy p-8 rounded-2xl text-white flex flex-col md:flex-row justify-between items-start md:items-center shadow-sm relative overflow-hidden">
        <div class="space-y-1">
            <span class="text-[10px] font-bold text-teal-400 uppercase tracking-wider">Health Center Services</span>
            <h2 class="text-2xl font-extrabold mt-1">Book an Appointment</h2>
            <p class="text-xs text-gray-300 max-w-xl">Schedule your visit to the Barangay Health Center for checkups, vaccinations, and other primary care services.</p>
        </div>
        <div class="mt-4 md:mt-0 text-right">
            <span class="text-xs text-teal-300 font-bold italic bg-white/10 px-3 py-1.5 rounded-xl">Alagang PurokPulse!</span>
        </div>
    </div>

    <!-- Success Notification Banner -->
    <div id="successAlert" class="hidden p-4 bg-teal-50 border border-teal-200 rounded-2xl flex items-center justify-between text-xs text-teal-800 shadow-sm">
        <div class="flex items-center gap-3">
            <span class="w-8 h-8 rounded-full bg-brand-teal text-white flex items-center justify-center font-bold">✓</span>
            <div>
                <p class="font-extrabold">Appointment successfully booked!</p>
                <p class="text-[11px] text-teal-600">Redirecting to your transactions...</p>
            </div>
        </div>
    </div>

    <div class="grid grid-cols-1 xl:grid-cols-3 gap-8">
        
        <!-- Left / Center Column: Calendar, Slots & Form -->
        <div class="xl:col-span-2 space-y-6">
            
            <!-- Calendar & Time Slot Picker Section -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 bg-surface-card p-6 rounded-2xl border border-gray-100 shadow-sm">
                
                <!-- Calendar Widget -->
                <div class="space-y-4">
                    <div class="flex justify-between items-center">
                        <h4 class="font-bold text-brand-navy text-xs uppercase tracking-wider">Preferred Date</h4>
                        <div class="flex items-center gap-2 text-xs font-bold text-gray-500">
                            <span>June 2024</span>
                            <div class="flex gap-1">
                                <button type="button" class="w-6 h-6 bg-gray-100 rounded-lg flex items-center justify-center hover:bg-gray-200">&lt;</button>
                                <button type="button" class="w-6 h-6 bg-gray-100 rounded-lg flex items-center justify-center hover:bg-gray-200">&gt;</button>
                            </div>
                        </div>
                    </div>

                    <!-- Calendar Grid (Clickable Dates) -->
                    <div class="text-xs space-y-2">
                        <div class="grid grid-cols-7 text-center font-bold text-gray-400 text-[10px]">
                            <span>S</span><span>M</span><span>T</span><span>W</span><span>T</span><span>F</span><span>S</span>
                        </div>
                        <div class="grid grid-cols-7 text-center gap-y-2 font-medium text-gray-600">
                            <span class="text-gray-300">26</span><span class="text-gray-300">27</span><span class="text-gray-300">28</span><span class="text-gray-300">29</span><span class="text-gray-300">30</span><span class="text-gray-300">31</span>
                            <span class="date-btn hover:bg-teal-50 hover:text-brand-teal w-7 h-7 rounded-full flex items-center justify-center mx-auto cursor-pointer" data-date="June 1, 2024">1</span>
                            <span class="date-btn hover:bg-teal-50 hover:text-brand-teal w-7 h-7 rounded-full flex items-center justify-center mx-auto cursor-pointer" data-date="June 2, 2024">2</span>
                            <span class="date-btn hover:bg-teal-50 hover:text-brand-teal w-7 h-7 rounded-full flex items-center justify-center mx-auto cursor-pointer" data-date="June 3, 2024">3</span>
                            <span class="date-btn hover:bg-teal-50 hover:text-brand-teal w-7 h-7 rounded-full flex items-center justify-center mx-auto cursor-pointer" data-date="June 4, 2024">4</span>
                            <span class="date-btn hover:bg-teal-50 hover:text-brand-teal w-7 h-7 rounded-full flex items-center justify-center mx-auto cursor-pointer" data-date="June 5, 2024">5</span>
                            <span class="date-btn hover:bg-teal-50 hover:text-brand-teal w-7 h-7 rounded-full flex items-center justify-center mx-auto cursor-pointer" data-date="June 6, 2024">6</span>
                            <span class="date-btn hover:bg-teal-50 hover:text-brand-teal w-7 h-7 rounded-full flex items-center justify-center mx-auto cursor-pointer" data-date="June 7, 2024">7</span>
                            <span class="date-btn hover:bg-teal-50 hover:text-brand-teal w-7 h-7 rounded-full flex items-center justify-center mx-auto cursor-pointer" data-date="June 8, 2024">8</span>
                            <span class="date-btn hover:bg-teal-50 hover:text-brand-teal w-7 h-7 rounded-full flex items-center justify-center mx-auto cursor-pointer" data-date="June 9, 2024">9</span>
                            <span class="date-btn hover:bg-teal-50 hover:text-brand-teal w-7 h-7 rounded-full flex items-center justify-center mx-auto cursor-pointer" data-date="June 10, 2024">10</span>
                            <span class="date-btn hover:bg-teal-50 hover:text-brand-teal w-7 h-7 rounded-full flex items-center justify-center mx-auto cursor-pointer" data-date="June 11, 2024">11</span>
                            <span class="date-btn hover:bg-teal-50 hover:text-brand-teal w-7 h-7 rounded-full flex items-center justify-center mx-auto cursor-pointer" data-date="June 12, 2024">12</span>
                            <span class="date-btn hover:bg-teal-50 hover:text-brand-teal w-7 h-7 rounded-full flex items-center justify-center mx-auto cursor-pointer" data-date="June 13, 2024">13</span>
                            <span class="date-btn hover:bg-teal-50 hover:text-brand-teal w-7 h-7 rounded-full flex items-center justify-center mx-auto cursor-pointer" data-date="June 14, 2024">14</span>
                            <span class="date-btn bg-brand-teal text-white font-bold w-7 h-7 rounded-full flex items-center justify-center mx-auto cursor-pointer" data-date="June 15, 2024">15</span>
                            <span class="date-btn hover:bg-teal-50 hover:text-brand-teal w-7 h-7 rounded-full flex items-center justify-center mx-auto cursor-pointer" data-date="June 16, 2024">16</span>
                            <span class="date-btn hover:bg-teal-50 hover:text-brand-teal w-7 h-7 rounded-full flex items-center justify-center mx-auto cursor-pointer" data-date="June 17, 2024">17</span>
                            <span class="date-btn hover:bg-teal-50 hover:text-brand-teal w-7 h-7 rounded-full flex items-center justify-center mx-auto cursor-pointer" data-date="June 18, 2024">18</span>
                            <span class="date-btn hover:bg-teal-50 hover:text-brand-teal w-7 h-7 rounded-full flex items-center justify-center mx-auto cursor-pointer" data-date="June 19, 2024">19</span>
                            <span class="date-btn hover:bg-teal-50 hover:text-brand-teal w-7 h-7 rounded-full flex items-center justify-center mx-auto cursor-pointer" data-date="June 20, 2024">20</span>
                            <span class="date-btn hover:bg-teal-50 hover:text-brand-teal w-7 h-7 rounded-full flex items-center justify-center mx-auto cursor-pointer" data-date="June 21, 2024">21</span>
                        </div>
                    </div>
                </div>

                <!-- Select Time Slot -->
                <div class="space-y-4">
                    <h4 class="font-bold text-brand-navy text-xs uppercase tracking-wider">Select Time Slot</h4>
                    <div class="grid grid-cols-2 gap-3" id="slotContainer">
                        <div class="slot-card p-3 rounded-xl border-2 border-brand-teal bg-teal-50/20 text-center cursor-pointer transition" data-time="09:00 AM">
                            <p class="font-extrabold text-brand-navy text-xs">09:00 AM</p>
                            <span class="text-[9px] font-bold text-brand-teal">Available</span>
                        </div>
                        <div class="slot-card p-3 rounded-xl border border-gray-200 bg-gray-50 text-center cursor-pointer hover:border-brand-teal transition" data-time="10:00 AM">
                            <p class="font-extrabold text-brand-navy text-xs">10:00 AM</p>
                            <span class="text-[9px] font-bold text-gray-400">Available</span>
                        </div>
                        <div class="slot-card p-3 rounded-xl border border-gray-200 bg-gray-50 text-center cursor-pointer hover:border-brand-teal transition" data-time="11:00 AM">
                            <p class="font-extrabold text-brand-navy text-xs">11:00 AM</p>
                            <span class="text-[9px] font-bold text-gray-400">Available</span>
                        </div>
                        <div class="p-3 rounded-xl border border-gray-200 bg-gray-100 text-center opacity-60 cursor-not-allowed">
                            <p class="font-extrabold text-gray-500 text-xs">01:00 PM</p>
                            <span class="text-[9px] font-bold text-rose-500">Fully Booked!</span>
                        </div>
                    </div>
                </div>

            </div>

            <!-- Patient Information Form -->
            <div class="bg-surface-card p-8 rounded-2xl border border-gray-100 shadow-sm space-y-6">
                
                <div class="flex items-center gap-2 text-brand-navy font-bold text-xs uppercase tracking-wider border-b border-gray-100 pb-3">
                    <span>📋</span> Patient Information & Service
                </div>

                <div class="p-3 bg-gray-50 rounded-xl border border-gray-200 text-[11px] text-gray-500 italic">
                    <span class="font-bold text-brand-navy">Note:</span> Cancellations must be made at least 24 hours in advance. For rescheduling, please visit the Barangay Health Center or call (02) 888-1234.
                </div>

                <form id="appointmentForm" class="space-y-4">
                    <div class="space-y-2">
                        <label class="block text-xs font-bold text-brand-navy">Patient Information <span class="text-rose-500">*</span></label>
                        <p class="text-[10px] text-gray-400">Required fields are marked with *</p>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <div>
                            <label class="block text-[11px] font-bold text-brand-navy mb-1">Full Name *</label>
                            <input type="text" id="inputName" value="Maria Santos" class="w-full bg-gray-50 border border-gray-200 text-xs font-medium text-gray-700 rounded-xl p-3 outline-none focus:ring-2 focus:ring-brand-teal">
                        </div>
                        <div>
                            <label class="block text-[11px] font-bold text-brand-navy mb-1">Contact Number *</label>
                            <input type="text" id="inputContact" value="0912-345-6789" class="w-full bg-gray-50 border border-gray-200 text-xs font-medium text-gray-700 rounded-xl p-3 outline-none focus:ring-2 focus:ring-brand-teal">
                        </div>
                        <div>
                            <label class="block text-[11px] font-bold text-brand-navy mb-1">Resident ID / Reference *</label>
                            <input type="text" id="inputID" value="BP-RES-98214" class="w-full bg-gray-50 border border-gray-200 text-xs font-medium text-gray-700 rounded-xl p-3 outline-none focus:ring-2 focus:ring-brand-teal">
                        </div>
                        <div>
                            <label class="block text-[11px] font-bold text-brand-navy mb-1">Purok</label>
                            <select id="inputPurok" class="w-full bg-gray-50 border border-gray-200 text-xs font-medium text-gray-700 rounded-xl p-3 outline-none focus:ring-2 focus:ring-brand-teal">
                                <option>Select purok</option>
                                <option selected>Purok 2</option>
                                <option>Purok 1</option>
                                <option>Purok 3</option>
                            </select>
                        </div>
                        <div>
                            <label class="block text-[11px] font-bold text-brand-navy mb-1">Age</label>
                            <input type="text" id="inputAge" value="32" class="w-full bg-gray-50 border border-gray-200 text-xs font-medium text-gray-700 rounded-xl p-3 outline-none focus:ring-2 focus:ring-brand-teal">
                        </div>
                        <div>
                            <label class="block text-[11px] font-bold text-brand-navy mb-1">Gender</label>
                            <select id="inputGender" class="w-full bg-gray-50 border border-gray-200 text-xs font-medium text-gray-700 rounded-xl p-3 outline-none focus:ring-2 focus:ring-brand-teal">
                                <option selected>Female</option>
                                <option>Male</option>
                            </select>
                        </div>
                    </div>

                    <!-- Service Information -->
                    <div class="pt-4 border-t border-gray-100 space-y-4">
                        <h4 class="text-xs font-bold text-brand-navy uppercase tracking-wider">Service Information</h4>
                        <p class="text-[10px] text-gray-400">Select the service you want to book</p>

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            <div>
                                <label class="block text-[11px] font-bold text-brand-navy mb-1">Service *</label>
                                <select id="serviceSelect" class="w-full bg-gray-50 border border-gray-200 text-xs font-medium text-gray-700 rounded-xl p-3 outline-none focus:ring-2 focus:ring-brand-teal">
                                    <option>General Checkup</option>
                                    <option selected>Prenatal Consultation</option>
                                    <option>Vaccination</option>
                                </select>
                            </div>
                            <div>
                                <label class="block text-[11px] font-bold text-brand-navy mb-1">Health Center</label>
                                <input type="text" value="Barangay Health Center" disabled class="w-full bg-gray-100 border border-gray-200 text-xs font-medium text-gray-500 rounded-xl p-3 outline-none">
                            </div>
                            <div>
                                <label class="block text-[11px] font-bold text-brand-navy mb-1">Preferred Date *</label>
                                <input type="text" id="displayDate" value="June 15, 2024" readonly class="w-full bg-gray-50 border border-gray-200 text-xs font-medium text-gray-700 rounded-xl p-3 outline-none">
                            </div>
                            <div>
                                <label class="block text-[11px] font-bold text-brand-navy mb-1">Time Slot *</label>
                                <input type="text" id="displayTime" value="09:00 AM" readonly class="w-full bg-gray-50 border border-gray-200 text-xs font-medium text-gray-700 rounded-xl p-3 outline-none">
                            </div>
                        </div>

                        <div>
                            <label class="block text-[11px] font-bold text-brand-navy mb-1">Reason for Visit</label>
                            <textarea id="inputReason" rows="2" placeholder="Briefly describe your visit" class="w-full bg-gray-50 border border-gray-200 text-xs font-medium text-gray-700 rounded-xl p-3 outline-none focus:ring-2 focus:ring-brand-teal resize-none">Routine monthly checkup</textarea>
                        </div>
                    </div>

                    <!-- Selected Appointment Summary -->
                    <div class="p-5 bg-gray-50 rounded-xl border border-gray-200 space-y-3">
                        <h4 class="font-bold text-brand-navy text-xs uppercase tracking-wider">Selected Appointment Summary</h4>
                        <div class="grid grid-cols-2 gap-2 text-xs">
                            <span class="text-gray-500">Service</span>
                            <span id="summaryService" class="font-bold text-brand-navy text-right">Prenatal Consultation</span>
                            <span class="text-gray-500">Date</span>
                            <span id="summaryDate" class="font-bold text-brand-navy text-right">June 15, 2024</span>
                            <span class="text-gray-500">Time</span>
                            <span id="summaryTime" class="font-bold text-brand-navy text-right">09:00 AM</span>
                            <span class="text-gray-500">Health Center</span>
                            <span class="font-bold text-brand-navy text-right">Barangay Health Center</span>
                        </div>
                        <p class="text-[10px] text-gray-400 pt-2 border-t border-gray-200">
                            ℹ️ Bring your valid ID / resident card and arrive 15 minutes before your scheduled time.
                        </p>
                    </div>

                    <!-- Action Buttons -->
                    <div class="flex justify-end gap-3 pt-4 border-t border-gray-100">
                        <a href="/resident/services" class="px-6 py-2.5 rounded-xl bg-gray-100 hover:bg-gray-200 font-bold text-xs text-gray-700 transition text-center flex items-center">Cancel</a>
                        <button type="submit" class="px-6 py-2.5 rounded-xl bg-brand-teal hover:bg-brand-tealHover font-bold text-xs text-white shadow-sm transition">Book Appointment</button>
                    </div>
                </form>
            </div>
        </div>

        <!-- Right Column: Status, Announcements & Checklist -->
        <div class="space-y-6">
            
            <!-- Health Center Status -->
            <div class="bg-surface-card p-6 rounded-2xl border border-gray-100 shadow-sm space-y-4">
                <h4 class="font-bold text-brand-navy text-xs uppercase tracking-wider">Health Center Status</h4>
                <div class="grid grid-cols-2 gap-3 text-center">
                    <div class="p-3 bg-gray-50 rounded-xl border border-gray-100">
                        <p class="text-xl font-extrabold text-brand-navy">12</p>
                        <p class="text-[9px] font-bold text-gray-400 uppercase tracking-wider mt-0.5">Daily Capacity</p>
                    </div>
                    <div class="p-3 bg-gray-50 rounded-xl border border-gray-100">
                        <p class="text-xl font-extrabold text-brand-teal">8</p>
                        <p class="text-[9px] font-bold text-gray-400 uppercase tracking-wider mt-0.5">Available Slots</p>
                    </div>
                </div>
            </div>

            <!-- Preparation Checklist -->
            <div class="bg-brand-navy p-6 rounded-2xl text-white space-y-3 shadow-sm">
                <h4 class="font-bold text-xs uppercase tracking-wider text-teal-400">Preparation Checklist</h4>
                <ul class="space-y-2.5 text-xs text-gray-300">
                    <li class="flex items-start gap-2">
                        <span class="text-teal-400 font-bold">✓</span> Bring Valid ID / Resident Card
                    </li>
                    <li class="flex items-start gap-2">
                        <span class="text-teal-400 font-bold">✓</span> Wear a comfortable face mask
                    </li>
                    <li class="flex items-start gap-2">
                        <span class="text-teal-400 font-bold">✓</span> Arrive 15 mins before your schedule
                    </li>
                </ul>
                <p class="text-[10px] text-gray-400 pt-2 border-t border-gray-700 italic text-center">
                    Thank you for keeping our community healthy!
                </p>
            </div>

            <!-- Announcements -->
            <div class="bg-surface-card p-6 rounded-2xl border border-gray-100 shadow-sm space-y-3">
                <div class="flex justify-between items-center">
                    <h4 class="font-bold text-brand-navy text-xs uppercase tracking-wider flex items-center gap-1.5">
                        <span>📢</span> Latest Announcements
                    </h4>
                    <a href="#" class="text-[10px] font-bold text-brand-teal hover:underline">View All &rarr;</a>
                </div>
                <div class="space-y-2 text-xs">
                    <div class="p-2.5 bg-gray-50 rounded-xl font-medium text-brand-navy">Vaccination Drive Schedule</div>
                    <div class="p-2.5 bg-gray-50 rounded-xl font-medium text-gray-700">Free Dental Mission</div>
                </div>
            </div>

        </div>

    </div>

</div>

<!-- Real-time Interactive JavaScript -->
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // 1. Time Slot Selector
        const slots = document.querySelectorAll('.slot-card');
        const displayTime = document.getElementById('displayTime');
        const summaryTime = document.getElementById('summaryTime');

        slots.forEach(slot => {
            slot.addEventListener('click', function() {
                slots.forEach(s => {
                    s.classList.remove('border-brand-teal', 'bg-teal-50/20');
                    s.classList.add('border-gray-200', 'bg-gray-50');
                    let badge = s.querySelector('span');
                    if(badge) badge.className = 'text-[9px] font-bold text-gray-400';
                });
                this.classList.remove('border-gray-200', 'bg-gray-50');
                this.classList.add('border-brand-teal', 'bg-teal-50/20');
                let activeBadge = this.querySelector('span');
                if(activeBadge) activeBadge.className = 'text-[9px] font-bold text-brand-teal';

                const selectedTime = this.getAttribute('data-time');
                displayTime.value = selectedTime;
                summaryTime.textContent = selectedTime;
            });
        });

        // 2. Calendar Date Picker
        const dateButtons = document.querySelectorAll('.date-btn');
        const displayDate = document.getElementById('displayDate');
        const summaryDate = document.getElementById('summaryDate');

        dateButtons.forEach(btn => {
            btn.addEventListener('click', function() {
                dateButtons.forEach(b => {
                    b.classList.remove('bg-brand-teal', 'text-white', 'font-bold');
                    b.classList.add('hover:bg-teal-50', 'hover:text-brand-teal');
                });
                this.classList.add('bg-brand-teal', 'text-white', 'font-bold');
                this.classList.remove('hover:bg-teal-50', 'hover:text-brand-teal');

                const selectedDate = this.getAttribute('data-date');
                displayDate.value = selectedDate;
                summaryDate.textContent = selectedDate;
            });
        });

        // 3. Service Selector Real-time Update
        const serviceSelect = document.getElementById('serviceSelect');
        const summaryService = document.getElementById('summaryService');

        serviceSelect.addEventListener('change', function() {
            summaryService.textContent = this.value;
        });

        // 4. Form Submission Simulation & LocalStorage Save
        const appointmentForm = document.getElementById('appointmentForm');
        const successAlert = document.getElementById('successAlert');

        appointmentForm.addEventListener('submit', function(e) {
            e.preventDefault();

            // I-save ang mock appointment data sa localStorage para lumabas sa transactions page kung kailangan
            const appointmentData = {
                name: document.getElementById('inputName').value,
                service: serviceSelect.value,
                date: displayDate.value,
                time: displayTime.value,
                status: 'Pending Review'
            };
            localStorage.setItem('latest_appointment', JSON.stringify(appointmentData));

            // Ipakita ang success alert at i-redirect
            successAlert.classList.remove('hidden');
            window.scrollTo({ top: 0, behavior: 'smooth' });

            setTimeout(() => {
                window.location.href = '/resident/transactions';
            }, 1200);
        });
    });
</script>
@endsection