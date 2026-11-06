@extends('layouts.app')

@section('title', 'Barangay Activities')
@section('header', 'Barangay Activities')
@section('sub-header', 'Stay updated on all community programs, events, and drives')

@section('content')
<div class="flex justify-between items-center mb-6">
    <div class="flex space-x-2">
        <button class="bg-teal-600 text-white px-4 py-2 rounded-lg text-sm font-bold shadow-sm">All</button>
        <button class="bg-white border border-gray-200 text-gray-600 hover:bg-gray-50 px-4 py-2 rounded-lg text-sm font-bold shadow-sm">Events</button>
        <button class="bg-white border border-gray-200 text-gray-600 hover:bg-gray-50 px-4 py-2 rounded-lg text-sm font-bold shadow-sm">Workshops</button>
    </div>
</div>

<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
    <!-- Event 1 -->
    <div class="bg-white rounded-2xl border border-gray-100 shadow-sm overflow-hidden flex flex-col">
        <div class="h-48 bg-gray-200 w-full relative">
            <span class="absolute top-4 left-4 bg-white px-3 py-1 rounded-full text-xs font-bold text-teal-600 shadow-sm">JUNE 28, 2024</span>
        </div>
        <div class="p-6 flex-1 flex flex-col justify-between">
            <div>
                <h4 class="font-bold text-gray-900 text-lg mb-2">Community Clean-up Drive</h4>
                <p class="text-sm text-gray-500 leading-relaxed mb-4">Join us in cleaning out our neighborhood's drainage systems. Supplies will be provided at the hall.</p>
            </div>
            <a href="#" class="text-teal-600 font-bold text-sm hover:underline">View Details &rarr;</a>
        </div>
    </div>

    <!-- Event 2 -->
    <div class="bg-white rounded-2xl border border-gray-100 shadow-sm overflow-hidden flex flex-col">
        <div class="h-48 bg-gray-200 w-full relative">
            <span class="absolute top-4 left-4 bg-white px-3 py-1 rounded-full text-xs font-bold text-blue-600 shadow-sm">JULY 01, 2024</span>
        </div>
        <div class="p-6 flex-1 flex flex-col justify-between">
            <div>
                <h4 class="font-bold text-gray-900 text-lg mb-2">Summer Sports Clinic</h4>
                <p class="text-sm text-gray-500 leading-relaxed mb-4">Free basketball and volleyball training for youths aged 10-17. Registration starts next Monday.</p>
            </div>
            <a href="#" class="text-teal-600 font-bold text-sm hover:underline">View Details &rarr;</a>
        </div>
    </div>

    <!-- Event 3 -->
    <div class="bg-white rounded-2xl border border-gray-100 shadow-sm overflow-hidden flex flex-col">
        <div class="h-48 bg-gray-200 w-full relative">
            <span class="absolute top-4 left-4 bg-white px-3 py-1 rounded-full text-xs font-bold text-red-600 shadow-sm">JULY 05, 2024</span>
        </div>
        <div class="p-6 flex-1 flex flex-col justify-between">
            <div>
                <h4 class="font-bold text-gray-900 text-lg mb-2">Free Medical Mission</h4>
                <p class="text-sm text-gray-500 leading-relaxed mb-4">Providing free consultation directly to our needy families and children.</p>
            </div>
            <a href="#" class="text-teal-600 font-bold text-sm hover:underline">View Details &rarr;</a>
        </div>
    </div>
</div>
@endsection