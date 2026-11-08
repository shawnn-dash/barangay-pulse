@extends('layouts.app')

@section('title', 'Request Certificate')
@section('header', 'Certificate of Indigency Request')
@section('sub-header', 'Managing: Barangay Sukailang')

@section('content')
<div class="flex items-center mb-8">
    <div class="flex items-center text-teal-600 font-bold">
        <span class="w-8 h-8 rounded-full bg-teal-100 flex items-center justify-center mr-2 border border-teal-600">1</span>
        Application Form
    </div>
    <div class="w-12 h-px bg-gray-300 mx-4"></div>
    <div class="flex items-center text-gray-400 font-medium">
        <span class="w-8 h-8 rounded-full bg-gray-100 flex items-center justify-center mr-2">2</span>
        Review Details
    </div>
    <div class="w-12 h-px bg-gray-300 mx-4"></div>
    <div class="flex items-center text-gray-400 font-medium">
        <span class="w-8 h-8 rounded-full bg-gray-100 flex items-center justify-center mr-2">3</span>
        Confirmation
    </div>
</div>

<div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
    <div class="lg:col-span-2 bg-white rounded-2xl border border-gray-100 shadow-sm p-8">
        <div class="space-y-6">
            <div class="bg-gray-50 p-5 rounded-xl border border-gray-200 mb-6 flex justify-between items-center">
                <div>
                    <p class="text-xs text-gray-500 uppercase font-bold tracking-wider mb-1">Resident Name</p>
                    <p class="font-bold text-gray-900 text-lg">Maria Santos</p>
                </div>
                <div class="text-right">
                    <p class="text-xs text-gray-500 uppercase font-bold tracking-wider mb-1">Address</p>
                    <p class="font-bold text-gray-900">Purok 2, Barangay Central</p>
                </div>
            </div>

            <div class="grid grid-cols-2 gap-6">
                <div>
                    <label class="block text-sm font-bold text-gray-700 mb-2">Purpose</label>
                    <select name="purpose" class="block w-full rounded-lg border-gray-300 shadow-sm focus:border-teal-500 focus:ring-teal-500 bg-gray-50 p-3 outline-none">
                        <option>Scholarship</option>
                        <option>Medical Assistance</option>
                    </select>
                </div>
                <div>
                    <label class="block text-sm font-bold text-gray-700 mb-2">Receiving Institution</label>
                    <input type="text" name="institution" class="block w-full rounded-lg border-gray-300 shadow-sm focus:border-teal-500 focus:ring-teal-500 bg-gray-50 p-3 outline-none" placeholder="e.g. CHED, DSWD">
                </div>
            </div>

            <div>
                <label class="block text-sm font-bold text-gray-700 mb-2">Supporting Documents</label>
                <div class="mt-1 flex justify-center px-6 pt-5 pb-6 border-2 border-gray-300 border-dashed rounded-xl bg-gray-50 hover:bg-gray-100 transition cursor-pointer">
                    <div class="space-y-1 text-center">
                        <div class="flex text-sm text-gray-600 justify-center">
                            <label class="relative cursor-pointer bg-transparent rounded-md font-bold text-teal-600 hover:text-teal-700">
                                <span>Click to upload or drag and drop</span>
                                <input type="file" class="sr-only">
                            </label>
                        </div>
                        <p class="text-xs text-gray-500">PNG, JPG or PDF (max. 5MB)</p>
                    </div>
                </div>
            </div>

            <div class="pt-4 flex justify-between items-center border-t border-gray-100 mt-6">
                <a href="/resident/services" class="text-gray-500 font-bold hover:text-gray-700 text-sm">Cancel</a>
                <!-- Ginawa nating link para sure na mapupunta sa confirmation page -->
                <a href="/resident/indigency-confirmation" class="bg-teal-600 hover:bg-teal-700 text-white px-8 py-3 rounded-xl font-bold shadow-sm transition text-center inline-block">
                    Next: Confirmation &rarr;
                </a>
            </div>
        </div>
    </div>

    <div class="space-y-6">
        <div class="bg-white p-6 rounded-2xl border border-gray-100 shadow-sm">
            <h3 class="font-bold text-gray-800 text-lg mb-4">Requirements</h3>
            <ul class="space-y-3 text-sm text-gray-600 font-medium">
                <li class="flex items-start">
                    <span class="text-teal-500 mr-2 text-lg leading-none">✓</span> Original and Photocopy of Valid ID (e.g., Driver's License, Voter's ID)
                </li>
                <li class="flex items-start">
                    <span class="text-teal-500 mr-2 text-lg leading-none">✓</span> Proof of Residency (Utility Bill or Barangay Clearance)
                </li>
                <li class="flex items-start">
                    <span class="text-teal-500 mr-2 text-lg leading-none">✓</span> Income Tax Return (ITR) or Affidavit of Low Income
                </li>
            </ul>
        </div>

        <div class="bg-gray-50 p-6 rounded-2xl border border-gray-200">
            <h3 class="font-bold text-gray-800 text-lg mb-4">Fee Summary</h3>
            <div class="flex justify-between text-sm mb-3">
                <span class="text-gray-600 font-medium">Document Fee</span>
                <span class="font-bold text-gray-800">0.00 PHP</span>
            </div>
            <div class="flex justify-between text-sm mb-4">
                <span class="text-gray-600 font-medium">Processing Fee</span>
                <span class="font-bold text-gray-800">50.00 PHP</span>
            </div>
            <div class="border-t border-gray-300 pt-4 flex justify-between items-center">
                <span class="font-bold text-gray-900">Total Amount</span>
                <span class="font-bold text-teal-600 text-2xl">50.00 PHP</span>
            </div>
            <p class="text-[11px] text-gray-500 mt-3 leading-relaxed">*Payment can be made at the Barangay Treasurer's office upon pickup</p>
        </div>
    </div>
</div>
@endsection