<?php

use Illuminate\Support\Facades\Route;

// ==========================================
// AUTHENTICATION ROUTES
// ==========================================

// Resident Login
Route::get('/', function () { 
    return view('auth.login'); 
});

// Admin Login
Route::get('/admin/login', function () { 
    return view('auth.admin-login'); 
});

// Resident Registration
Route::get('/register', function () { 
    return view('auth.register'); 
});

// Admin Registration
Route::get('/admin/register', function () { 
    return view('auth.admin-register'); 
});

// Registration Submitted / Success Page
Route::get('/register/submitted', function () { 
    return view('auth.register-submitted'); 
});


// ==========================================
// RESIDENT ROUTES (All-in-One Setup)
// ==========================================
Route::prefix('resident')->group(function () {
    
    // 1. Dashboard
    Route::get('/dashboard', function () { 
        return view('resident.dashboard'); 
    });

    // 2. Barangay Services
    Route::get('/services', function () { 
        return view('resident.services'); 
    });

    // 2.1 Indigency Request Form
    Route::get('/request-indigency', function () { 
        return view('resident.request-indigency'); 
    });

    Route::get('/indigency-confirmation', function () { 
        return view('resident.indigency-confirmation'); 
    });
    // Incident Blotter Submission Screen
    Route::get('/blotter-submit', function () { 
        return view('resident.blotter-submit'); 
    });

    // Health Center Appointment Page
    Route::get('/health-appointment', function () { 
        return view('resident.health-appointment'); 
    });

    // 3. Barangay Activities
    Route::get('/activities', function () { 
        return view('resident.activities'); 
    });

    // 4. My Transactions
    Route::get('/transactions', function () { 
        return view('resident.transactions'); 
    });

    // 5. Submit Report / Community Reporting
    Route::get('/submit-report', function () { 
        return view('resident.submit-report'); 
    });

    // 6. Announcements
    Route::get('/announcements', function () { 
        return view('resident.announcements'); 
    });

    // 7. Infrastructure Projects
    Route::get('/infrastructure', function () { 
        return view('resident.infrastructure'); 
    });

    // 8. Community Feedback
    Route::get('/feedback', function () { 
        return view('resident.feedback'); 
    });

    // 9. My Profile
    Route::get('/profile', function () { 
        return view('resident.profile'); 
    });
    Route::get('/profile/edit', function () { 
        return view('resident.edit-profile'); 
    });
    
});


// ==========================================
// ADMIN ROUTES (All-in-One Setup)
// ==========================================
Route::prefix('admin')->group(function () {
    
    // 1. Dashboard
    Route::get('/dashboard', function () { 
        return view('admin.dashboard'); 
    });

    // 2. Resident Records & Verification
    Route::get('/residents', function () { 
        return view('admin.residents'); 
    });

    // 3. Resident Reports Management
    Route::get('/reports', function () { 
        return view('admin.reports'); 
    });

    // 4. Services Request Management
    Route::get('/services', function () { 
        return view('admin.services'); 
    });

    // 5. Activities Management
    Route::get('/activities', function () { 
        return view('admin.activities'); 
    });

    // 6. Infrastructure Management
    Route::get('/infrastructure', function () { 
        return view('admin.infrastructure'); 
    });

    // 7. Feedback Management
    Route::get('/feedback', function () { 
        return view('admin.feedback'); 
    });

    // 8. Announcements Management
    Route::get('/announcements', function () { 
        return view('admin.announcements'); 
    });

    // 9. Inter-Barangay
    Route::get('/inter-barangay', function () { 
        return view('admin.inter-barangay'); 
    });

    // 10. Barangay Network
    Route::get('/network', function () { 
        return view('admin.network'); 
    });

// My Profile & Edit Profile
    Route::get('/profile', function () { 
        return view('admin.profile'); 
    });
    Route::get('/profile/edit', function () { 
        return view('admin.edit-profile'); 
    });
    
});
