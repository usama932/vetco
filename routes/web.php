<?php

use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use Laravel\Socialite\Facades\Socialite;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::group(['middleware' => ['auth']], function() {
    Route::get('/dashboard',[HomeController::class,'index' ] )->name('dashboard');
});

Route::get('/logout', 'App\Http\Controllers\Auth\LoginController@logout');
Route::get('login/google', [App\Http\Controllers\Auth\LoginController::class, 'redirectToGoogle'])->name('login.google');
Route::get('login/google/callback', [App\Http\Controllers\Auth\LoginController::class, 'handleGoogleCallback']);

// Facebook login
Route::get('login/facebook', [App\Http\Controllers\Auth\LoginController::class, 'redirectToFacebook'])->name('login.facebook');
Route::get('login/facebook/callback', [App\Http\Controllers\Auth\LoginController::class, 'handleFacebookCallback']);

Route::get('login/apple', [App\Http\Controllers\Auth\LoginController::class, 'redirectToApple'])->name('login.apple');
Route::get('login/apple/callback', [App\Http\Controllers\Auth\LoginController::class, 'handleAppleCallback']);



Route::get('/', function () {
    return view('pages.site.home');
});
Route::get('/home', function () {
    return view('pages.site.home');
});
Route::get('/filter', function () {
    return view('pages.site.filter');
});
Route::get('/pet-suggestion', function () {
    return view('pages.site.pet-suggestion');
});
Route::get('/privacy', function () {
    return view('pages.site.privacy');
});
Route::get('/add-pet', function () {
    return view('pages.site.add-pet');
});
Route::get('/my-pets', function () {
    return view('pages.site.my-pets');
});
Route::get('/checklist', function () {
    return view('pages.site.checklist');
});
Route::get('/add-new-pet', function () {
    return view('pages.site.add-new-pet');
});
Route::get('/edit-pet', function () {
    return view('pages.site.edit-pet');
});
Route::get('/profile', function () {
    return view('pages.site.profile');
});
Route::get('/profile-edit', function () {
    return view('pages.site.profile-edit');
});
Route::get('/search', function () {
    return view('pages.site.search');
});
Route::get('/vet-profile', function () {
    return view('pages.site.vet-profile');
});
Route::get('/appointments-list/{id}', function ($id) {
    return view('pages.site.appointments-list', compact('id'));
});

Auth::routes();


Route::group(['middleware' => ['auth', 'role:admin'], 'prefix' => 'admin'], function () {
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index']);
    Route::get('/all-practices', function () {
        $page = 'All Practices';
        return view('pages.admin.all-practices', compact('page'));
    });
    Route::get('/pending-requests', function () {
        $page = 'Pending Requests';
        return view('pages.admin.pending-requests', compact('page'));
    });
    Route::get('/search-results', function () {
        $page = '0';
        return view('pages.admin.search-results', compact('page'));
    });
    Route::get('/search-details', function () {
        $page = '0';
        return view('pages.admin.search-details', compact('page'));
    });
    Route::get('/login', function () {
        $page = '0';
        return view('pages.admin.login', compact('page'));
    });
});

Route::group(['prefix' => 'vet'], function () {
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index']);
    Route::get('/reviews', function () {
        $page = 'Reviews';
        return view('pages.vet.reviews', compact('page'));
    });
    Route::get('/services', function () {
        $page = 'Services';
        return view('pages.vet.services', compact('page'));
    });
    Route::get('/practice-details', function () {
        $page = 'Services';
        return view('pages.vet.practice-details', compact('page'));
    });
    Route::get('/edit-services', function () {
        $page = 'Services';
        return view('pages.vet.edit-services', compact('page'));
    });
    Route::get('/add-services', function () {
        $page = 'Services';
        return view('pages.vet.add-services', compact('page'));
    });
    Route::get('/appointments', function () {
        $page = 'All Practices';
        return view('pages.vet.appointments', compact('page'));
    });
    Route::get('/pending-appointments', function () {
        $page = 'All Practices';
        return view('pages.vet.pending-appointments', compact('page'));
    });
    Route::get('/search-result', function () {
        $page = '0';
        return view('pages.vet.search-result', compact('page'));
    });
    Route::get('/search-details', function () {
        $page = '0';
        return view('pages.vet.search-details', compact('page'));
    });
    Route::get('/profile', function () {
        $page = '0';
        return view('pages.vet.profile', compact('page'));
    });
    Route::get('/claim-practice', function () {
        $page = 'Claim Practice';
        return view('pages.vet.claim-practice', compact('page'));
    });
    Route::get('/privacy', function () {
        $page = '0';
        return view('pages.vet.privacy', compact('page'));
    });
    Route::get('/terms', function () {
        $page = '0';
        return view('pages.vet.terms', compact('page'));
    });
    Route::get('/login', function () {
        $page = '0';
        return view('pages.vet.login', compact('page'));
    });

    Route::get('/register', function () {
        $page = '0';
        return view('pages.vet.register', compact('page'));
    })->name('vet.register');

});

Route::group(['middleware' => ['auth', 'role:pet']], function () {
    Route::get('/home2', [App\Http\Controllers\HomeController::class, 'index']);
});
