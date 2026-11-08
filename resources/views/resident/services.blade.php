@extends('layouts.app')

@section('title', 'Barangay Services')
@section('header', 'Barangay Services')
@section('sub-header', 'Managing: Barangay Sukailang')

@section('content')
<div class="mb-6 flex justify-between items-center">
    <h3 class="text-xl font-bold text-gray-800">Request a Service</h3>
</div>

<div class="grid grid-cols-2 md:grid-cols-4 gap-6">
    <!-- Row 1 -->
    <a href="/resident/request-indigency" class="bg-white p-6 rounded-2xl border border-gray-100 shadow-sm hover:shadow-md hover:border-teal-300 transition flex flex-col items-center justify-center text-center group">
        <div class="w-16 h-16 bg-teal-50 text-teal-600 rounded-2xl flex items-center justify-center mb-4 group-hover:bg-teal-600 group-hover:text-white transition">📄</div>
        <p class="text-sm font-bold text-gray-800">Certificate of Indigency</p>
    </a>
    <a href="/resident/health-appointment" class="bg-white p-6 rounded-2xl border border-gray-100 shadow-sm hover:shadow-md hover:border-teal-300 transition flex flex-col items-center justify-center text-center group">
        <div class="w-16 h-16 bg-teal-50 text-teal-600 rounded-2xl flex items-center justify-center mb-4 group-hover:bg-teal-600 group-hover:text-white transition">⚕️</div>
        <p class="text-sm font-bold text-gray-800">Health Appointment</p>
    </a>
    <a href="/resident/blotter-submit" class="bg-white p-6 rounded-2xl border border-gray-100 shadow-sm hover:shadow-md hover:border-teal-300 transition flex flex-col items-center justify-center text-center group">
        <div class="w-16 h-16 bg-teal-50 text-teal-600 rounded-2xl flex items-center justify-center mb-4 group-hover:bg-teal-600 group-hover:text-white transition">⚖️</div>
        <p class="text-sm font-bold text-gray-800">Blotter Submission</p>
    </a>
    <a href="#" class="bg-white p-6 rounded-2xl border border-gray-100 shadow-sm hover:shadow-md hover:border-teal-300 transition flex flex-col items-center justify-center text-center group">
        <div class="w-16 h-16 bg-teal-50 text-teal-600 rounded-2xl flex items-center justify-center mb-4 group-hover:bg-teal-600 group-hover:text-white transition">📢</div>
        <p class="text-sm font-bold text-gray-800">Community Report</p>
    </a>

    <!-- Row 2 -->
    <a href="#" class="bg-white p-6 rounded-2xl border border-gray-100 shadow-sm hover:shadow-md hover:border-teal-300 transition flex flex-col items-center justify-center text-center group">
        <div class="w-16 h-16 bg-teal-50 text-teal-600 rounded-2xl flex items-center justify-center mb-4 group-hover:bg-teal-600 group-hover:text-white transition">💼</div>
        <p class="text-sm font-bold text-gray-800">Business Permit</p>
    </a>
    <a href="#" class="bg-white p-6 rounded-2xl border border-gray-100 shadow-sm hover:shadow-md hover:border-teal-300 transition flex flex-col items-center justify-center text-center group">
        <div class="w-16 h-16 bg-teal-50 text-teal-600 rounded-2xl flex items-center justify-center mb-4 group-hover:bg-teal-600 group-hover:text-white transition">📜</div>
        <p class="text-sm font-bold text-gray-800">Barangay Clearance</p>
    </a>
    <a href="#" class="bg-white p-6 rounded-2xl border border-gray-100 shadow-sm hover:shadow-md hover:border-teal-300 transition flex flex-col items-center justify-center text-center group">
        <div class="w-16 h-16 bg-teal-50 text-teal-600 rounded-2xl flex items-center justify-center mb-4 group-hover:bg-teal-600 group-hover:text-white transition">🎓</div>
        <p class="text-sm font-bold text-gray-800">Scholarship Program</p>
    </a>
    <a href="#" class="bg-white p-6 rounded-2xl border border-gray-100 shadow-sm hover:shadow-md hover:border-teal-300 transition flex flex-col items-center justify-center text-center group">
        <div class="w-16 h-16 bg-teal-50 text-teal-600 rounded-2xl flex items-center justify-center mb-4 group-hover:bg-teal-600 group-hover:text-white transition">🪪</div>
        <p class="text-sm font-bold text-gray-800">Senior Citizen ID</p>
    </a>
</div>
@endsection