@extends('layouts.app')

@section('title', 'Certificate of Indigency - Confirmation')

@section('content')
<div class="space-y-6">
    
    <!-- Top Header & Step Progress Bar -->
    <div class="bg-surface-card p-6 rounded-2xl border border-gray-100 shadow-sm space-y-4">
        <div>
            <span class="text-[10px] font-bold text-gray-400">10 • Certificate of Indigency • Confirmation</span>
            <h2 class="text-2xl font-extrabold text-brand-navy mt-1">Certificate of Indigency Request</h2>
        </div>

        <!-- Steps Tracker -->
        <div class="flex items-center gap-4 max-w-lg pt-2">
            <div class="flex items-center gap-2">
                <span class="w-6 h-6 rounded-full bg-brand-teal text-white font-bold text-xs flex items-center justify-center">✓</span>
                <span class="text-xs font-bold text-brand-teal">Application Form</span>
            </div>
            <div class="flex-1 h-0.5 bg-brand-teal"></div>
            <div class="flex items-center gap-2">
                <span class="w-6 h-6 rounded-full bg-brand-teal text-white font-bold text-xs flex items-center justify-center">✓</span>
                <span class="text-xs font-bold text-brand-teal">Review Details</span>
            </div>
            <div class="flex-1 h-0.5 bg-brand-teal"></div>
            <div class="flex items-center gap-2">
                <span class="w-6 h-6 rounded-full bg-brand-teal text-white font-bold text-xs flex items-center justify-center">3</span>
                <span class="text-xs font-bold text-brand-navy">Confirmation</span>
            </div>
        </div>
    </div>

    <div class="grid grid-cols-1 xl:grid-cols-3 gap-8">
        
        <!-- Left / Center Column: Success Confirmation Details -->
        <div class="xl:col-span-2 bg-surface-card p-8 rounded-2xl border border-gray-100 shadow-sm space-y-6">
            
            <!-- Success Alert Box -->
            <div class="p-6 bg-teal-50/40 rounded-2xl border border-teal-100 space-y-4">
                <div class="flex items-center gap-3">
                    <div class="w-10 h-10 rounded-full bg-brand-teal text-white flex items-center justify-center font-bold text-lg">✓</div>
                    <div>
                        <h3 class="font-extrabold text-brand-navy text-base">Your request has been received</h3>
                        <p class="text-xs text-gray-500">Thank you, Maria. Receipt does not mean approval. Your application is awaiting review.</p>
                    </div>
                </div>

                <!-- Reference Number Badge -->
                <div class="p-4 bg-white rounded-xl border border-teal-100 flex justify-between items-center shadow-sm">
                    <div>
                        <p class="text-[9px] font-bold text-gray-400 uppercase tracking-wider">Reference number • Illustrative</p>
                        <p class="text-base font-extrabold text-brand-navy tracking-wide">BP-IND-000128</p>
                    </div>
                    <span class="bg-amber-100 text-amber-800 text-[10px] font-extrabold px-3 py-1 rounded-full flex items-center gap-1">
                        <span>⏳</span> Pending Review
                    </span>
                </div>
            </div>

            <!-- Request Summary Grid -->
            <div class="space-y-4">
                <h4 class="font-bold text-brand-navy text-xs uppercase tracking-wider">Request summary</h4>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4 p-4 bg-gray-50 rounded-xl border border-gray-100 text-xs">
                    <div>
                        <p class="text-[10px] font-bold text-gray-400 uppercase">Resident Name</p>
                        <p class="font-bold text-brand-navy mt-0.5">Maria Santos</p>
                    </div>
                    <div>
                        <p class="text-[10px] font-bold text-gray-400 uppercase">Address</p>
                        <p class="font-bold text-brand-navy mt-0.5">Purok 2, Barangay Central</p>
                    </div>
                    <div>
                        <p class="text-[10px] font-bold text-gray-400 uppercase">Purpose</p>
                        <p class="font-bold text-brand-navy mt-0.5">Scholarship</p>
                    </div>
                    <div>
                        <p class="text-[10px] font-bold text-gray-400 uppercase">Receiving Institution • Example</p>
                        <p class="font-bold text-brand-navy mt-0.5">Central State University</p>
                    </div>
                    <div class="md:col-span-2 pt-2 border-t border-gray-200">
                        <p class="text-[10px] font-bold text-gray-400 uppercase">Claim Preference</p>
                        <p class="font-bold text-brand-navy mt-0.5">Pickup at Barangay Hall</p>
                    </div>
                </div>
            </div>

            <!-- Supporting Documents -->
            <div class="space-y-3">
                <div class="flex justify-between items-center">
                    <h4 class="font-bold text-brand-navy text-xs uppercase tracking-wider">Supporting documents</h4>
                    <span class="text-[10px] font-medium text-gray-400">3 example files received</span>
                </div>
                <div class="space-y-2 text-xs">
                    <div class="p-3 bg-gray-50 rounded-xl border border-gray-100 flex justify-between items-center">
                        <div>
                            <p class="font-bold text-brand-navy">Valid ID</p>
                            <p class="text-[10px] text-gray-400">MariaSantos_ValidID.pdf</p>
                        </div>
                        <span class="text-brand-teal font-bold">✓</span>
                    </div>
                    <div class="p-3 bg-gray-50 rounded-xl border border-gray-100 flex justify-between items-center">
                        <div>
                            <p class="font-bold text-brand-navy">Proof of residency</p>
                            <p class="text-[10px] text-gray-400">MariaSantos_UtilityBill.pdf</p>
                        </div>
                        <span class="text-brand-teal font-bold">✓</span>
                    </div>
                    <div class="p-3 bg-gray-50 rounded-xl border border-gray-100 flex justify-between items-center">
                        <div>
                            <p class="font-bold text-brand-navy">Affidavit of low income</p>
                            <p class="text-[10px] text-gray-400">MariaSantos_LowIncome.pdf</p>
                        </div>
                        <span class="text-brand-teal font-bold">✓</span>
                    </div>
                </div>
            </div>

            <!-- What Happens Next -->
            <div class="space-y-3 pt-2">
                <h4 class="font-bold text-brand-navy text-xs uppercase tracking-wider">What happens next?</h4>
                <div class="space-y-3 text-xs">
                    <div class="flex items-start gap-3">
                        <span class="text-base">📄</span>
                        <div>
                            <p class="font-bold text-brand-navy">Barangay staff will review your request</p>
                            <p class="text-[11px] text-gray-500">Your details and supporting documents still need to be verified.</p>
                        </div>
                    </div>
                    <div class="flex items-start gap-3">
                        <span class="text-base">🔔</span>
                        <div>
                            <p class="font-bold text-brand-navy">Check My Transactions for updates</p>
                            <p class="text-[11px] text-gray-500">Follow your request status and any instructions for missing information.</p>
                        </div>
                    </div>
                    <div class="flex items-start gap-3">
                        <span class="text-base">🏛️</span>
                        <div>
                            <p class="font-bold text-brand-navy">Pick up only when you receive an update</p>
                            <p class="text-[11px] text-gray-500">Bring the required documents and pay 50.00 PHP at the Barangay Treasurer's office upon pickup.</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Bottom Action Buttons -->
            <div class="flex flex-col sm:flex-row justify-end gap-3 pt-4 border-t border-gray-100">
                <a href="/resident/transactions" class="px-6 py-3 rounded-xl bg-brand-teal hover:bg-brand-tealHover font-bold text-xs text-white shadow-sm transition text-center">
                    View My Transactions
                </a>
                <a href="/resident/dashboard" class="px-6 py-3 rounded-xl bg-gray-100 hover:bg-gray-200 font-bold text-xs text-gray-700 transition text-center">
                    Return to Dashboard
                </a>
            </div>

        </div>

        <!-- Right Column: Fee Summary, Pickup & Help -->
        <div class="space-y-6">
            
            <!-- Fee Summary Card -->
            <div class="bg-brand-navy p-6 rounded-2xl text-white space-y-4 shadow-sm">
                <h4 class="font-bold text-xs uppercase tracking-wider text-teal-400">Fee Summary</h4>
                <div class="space-y-2 text-xs border-b border-gray-700 pb-4">
                    <div class="flex justify-between text-gray-300">
                        <span>Processing Fee</span>
                        <span class="font-bold text-white">50.00 PHP</span>
                    </div>
                    <div class="flex justify-between text-gray-300">
                        <span>Document Fee</span>
                        <span class="font-bold text-white">0.00 PHP</span>
                    </div>
                </div>
                <div class="flex justify-between items-center pt-1">
                    <span class="text-xs font-bold text-gray-300">Total Amount</span>
                    <span class="text-xl font-extrabold text-teal-300">50.00 PHP</span>
                </div>
                <p class="text-[10px] text-gray-400 leading-relaxed pt-2 border-t border-gray-700">
                    Pay at the Barangay Treasurer's office upon pickup. No online payment is required.
                </p>
            </div>

            <!-- Pickup at Barangay Hall -->
            <div class="bg-surface-card p-6 rounded-2xl border border-gray-100 shadow-sm space-y-2">
                <h4 class="font-bold text-brand-navy text-xs uppercase tracking-wider">Pickup at Barangay Hall</h4>
                <p class="text-[11px] text-gray-500 leading-relaxed">
                    Wait for a pickup update in My Transactions before visiting the Barangay Hall.
                </p>
                <p class="text-[10px] text-gray-400 leading-relaxed pt-2 border-t border-gray-100">
                    Bring your valid ID (original and photocopy), proof of residency, and ITR or affidavit of low income.
                </p>
            </div>

            <!-- Need Help? -->
            <div class="bg-surface-card p-6 rounded-2xl border border-gray-100 shadow-sm space-y-2">
                <h4 class="font-bold text-brand-navy text-xs uppercase tracking-wider flex items-center gap-1.5">
                    <span>❓</span> Need Help?
                </h4>
                <p class="text-[11px] text-gray-500 leading-relaxed">
                    If you have questions about this certificate, please contact the Barangay Secretary at (02) 888-1234.
                </p>
            </div>

        </div>

    </div>

</div>
@endsection