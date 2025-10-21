<?php

declare(strict_types=1);

use App\Http\Controllers\Backend\AboutSectionController;
use App\Http\Controllers\Backend\ActionLogController;
use App\Http\Controllers\Backend\Auth\ScreenshotGeneratorLoginController;
use App\Http\Controllers\Backend\ContactMessageController;
use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\Backend\EducationController as BackendEducationController;
use App\Http\Controllers\Backend\ExperienceController as BackendExperienceController;
use App\Http\Controllers\Backend\HeroSectionController;
use App\Http\Controllers\Backend\LocaleController;
use App\Http\Controllers\Backend\MediaController;
use App\Http\Controllers\Backend\ModuleController;
use App\Http\Controllers\Backend\PermissionController;
use App\Http\Controllers\Backend\PortfolioController as BackendPortfolioController;
use App\Http\Controllers\Backend\PostController;
use App\Http\Controllers\Backend\ProfileController;
use App\Http\Controllers\Backend\RoleController;
use App\Http\Controllers\Backend\SettingController;
use App\Http\Controllers\Backend\TermController;
use App\Http\Controllers\Backend\TranslationController;
use App\Http\Controllers\Backend\UserLoginAsController;
use App\Http\Controllers\Backend\UserController;
use App\Http\Controllers\Frontend\AboutController;
use App\Http\Controllers\Frontend\ContactController;
use App\Http\Controllers\Frontend\EducationController;
use App\Http\Controllers\Frontend\ExperienceController;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\PortfolioController;

// New Civil Engineering Controllers
use App\Http\Controllers\HomeController as CivilHomeController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ContactController as CivilContactController;

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Civil Engineering Website Routes
|--------------------------------------------------------------------------
|
| Main public routes for the civil engineering portfolio website
|
*/

// Homepage
Route::get('/', [CivilHomeController::class, 'index'])->name('home');

// About page
Route::get('/about', [CivilHomeController::class, 'about'])->name('about');

// Projects
Route::resource('projects', ProjectController::class)->only(['index', 'show']);
Route::get('/projects/category/{category}', [ProjectController::class, 'index'])->name('projects.category');

// Services
Route::resource('services', ServiceController::class)->only(['index', 'show']);

// Blog
Route::resource('blog', BlogController::class)->only(['index', 'show']);
Route::get('/blog/tag/{tag}', [BlogController::class, 'index'])->name('blog.tag');

// Contact
Route::get('/contact', [CivilContactController::class, 'index'])->name('contact');
Route::post('/contact', [CivilContactController::class, 'store'])->name('contact.store');

/*
|--------------------------------------------------------------------------
| Admin Management Routes (for Civil Engineering content)
|--------------------------------------------------------------------------
|
| Admin routes for managing civil engineering content
|
*/

Route::group(['prefix' => 'admin', 'as' => 'admin.', 'middleware' => ['auth']], function () {

    // Civil Engineering Admin Routes
    Route::resource('projects', ProjectController::class)->except(['show']);
    Route::resource('services', ServiceController::class)->except(['show']);
    Route::resource('admin-blog', BlogController::class)->except(['show']);

    // Contact Messages Management
    Route::get('/contact-messages', [CivilContactController::class, 'messages'])->name('contact.messages');
    Route::get('/contact-messages/{message}', [CivilContactController::class, 'show'])->name('contact.show');
    Route::patch('/contact-messages/{message}/status', [CivilContactController::class, 'updateStatus'])->name('contact.updateStatus');
    Route::delete('/contact-messages/{message}', [CivilContactController::class, 'destroy'])->name('contact.destroy');

});

/*
|--------------------------------------------------------------------------
| Legacy Routes (Existing Application)
|--------------------------------------------------------------------------
|
| Keep existing routes for backward compatibility
|
*/

/**
 * Legacy Frontend routes (commented out to avoid conflicts)
 */
// Route::get('/about', [AboutController::class, 'index'])->name('frontend.about');
// Route::get('/portfolio', [PortfolioController::class, 'index'])->name('frontend.portfolio');
// Route::get('/portfolio/{slug}', [PortfolioController::class, 'show'])->name('frontend.portfolio.show');
// Route::get('/education', [EducationController::class, 'index'])->name('frontend.education');
// Route::get('/experience', [ExperienceController::class, 'index'])->name('frontend.experience');
// Route::get('/contact', [ContactController::class, 'index'])->name('frontend.contact');
// Route::post('/contact', [ContactController::class, 'store'])->name('frontend.contact.store');

/**
 * Admin dashboard redirect route - handle /admin specifically
 */
Route::get('/admin', function () {
    if (!\Illuminate\Support\Facades\Auth::check()) {
        return redirect()->route('admin.login');
    }
    return redirect()->route('admin.dashboard');
})->name('admin.redirect');

/**
 * Admin dashboard route
 */
Route::get('/admin/dashboard', [DashboardController::class, 'index'])
    ->middleware('auth')
    ->name('admin.dashboard');

/**
 * Admin routes.
 */
Route::group(['prefix' => 'admin', 'as' => 'admin.', 'middleware' => ['auth']], function () {
    // Portfolio Management Routes
    Route::resource('portfolio', BackendPortfolioController::class);
    Route::delete('portfolio/delete/bulk-delete', [BackendPortfolioController::class, 'bulkDelete'])->name('portfolio.bulk-delete');

    // Hero Sections Routes
    Route::resource('hero-sections', HeroSectionController::class);
    Route::delete('hero-sections/delete/bulk-delete', [HeroSectionController::class, 'bulkDelete'])->name('hero-sections.bulk-delete');

    // About Sections Routes
    Route::resource('about-sections', AboutSectionController::class);
    Route::delete('about-sections/delete/bulk-delete', [AboutSectionController::class, 'bulkDelete'])->name('about-sections.bulk-delete');

    // Education Routes
    Route::resource('education', BackendEducationController::class);
    Route::delete('education/delete/bulk-delete', [BackendEducationController::class, 'bulkDelete'])->name('education.bulk-delete');

    // Experience Routes
    Route::resource('experience', BackendExperienceController::class);
    Route::delete('experience/delete/bulk-delete', [BackendExperienceController::class, 'bulkDelete'])->name('experience.bulk-delete');

    // Contact Messages Routes
    Route::resource('contact-messages', ContactMessageController::class)->only(['index', 'show', 'destroy']);
    Route::post('contact-messages/{contactMessage}/mark-read', [ContactMessageController::class, 'markAsRead'])->name('contact-messages.mark-read');
    Route::delete('contact-messages/delete/bulk-delete', [ContactMessageController::class, 'bulkDelete'])->name('contact-messages.bulk-delete');

    Route::resource('roles', RoleController::class);
    Route::delete('roles/delete/bulk-delete', [RoleController::class, 'bulkDelete'])->name('roles.bulk-delete');

    // Permissions Routes.
    Route::get('/permissions', [PermissionController::class, 'index'])->name('permissions.index');
    Route::get('/permissions/{permission}', [PermissionController::class, 'show'])->name('permissions.show');

    // Modules Routes.
    Route::get('/modules', [ModuleController::class, 'index'])->name('modules.index');
    Route::post('/modules/toggle-status/{module}', [ModuleController::class, 'toggleStatus'])->name('modules.toggle-status');
    Route::post('/modules/upload', [ModuleController::class, 'store'])->name('modules.store');
    Route::delete('/modules/{module}', [ModuleController::class, 'destroy'])->name('modules.delete');

    // Settings Routes.
    Route::get('/settings', [SettingController::class, 'index'])->name('settings.index');
    Route::post('/settings', [SettingController::class, 'store'])->name('settings.store');

    // Translation Routes.
    Route::get('/translations', [TranslationController::class, 'index'])->name('translations.index');
    Route::post('/translations', [TranslationController::class, 'update'])->name('translations.update');
    Route::post('/translations/create', [TranslationController::class, 'create'])->name('translations.create');

    // Login as & Switch back.
    Route::resource('users', UserController::class);
    Route::delete('users/delete/bulk-delete', [UserController::class, 'bulkDelete'])->name('users.bulk-delete');
    Route::get('users/{id}/login-as', [UserLoginAsController::class, 'loginAs'])->name('users.login-as');
    Route::post('users/switch-back', [UserLoginAsController::class, 'switchBack'])->name('users.switch-back');

    // Action Log Routes.
    Route::get('/action-log', [ActionLogController::class, 'index'])->name('actionlog.index');

    // Posts/Pages Routes - Dynamic post types.
    Route::get('/posts/{postType?}', [PostController::class, 'index'])->name('posts.index');
    Route::get('/posts/{postType}/create', [PostController::class, 'create'])->name('posts.create');
    Route::post('/posts/{postType}', [PostController::class, 'store'])->name('posts.store');
    Route::get('/posts/{postType}/{post}', [PostController::class, 'show'])->name('posts.show');
    Route::get('/posts/{postType}/{post}/edit', [PostController::class, 'edit'])->name('posts.edit');
    Route::put('/posts/{postType}/{post}', [PostController::class, 'update'])->name('posts.update');
    Route::delete('/posts/{postType}/{post}', [PostController::class, 'destroy'])->name('posts.destroy');
    Route::delete('/posts/{postType}/delete/bulk-delete', [PostController::class, 'bulkDelete'])->name('posts.bulk-delete');

    // Terms Routes (Categories, Tags, etc.).
    Route::get('/terms/{taxonomy}', [TermController::class, 'index'])->name('terms.index');
    Route::get('/terms/{taxonomy}/{term}/edit', [TermController::class, 'edit'])->name('terms.edit');
    Route::post('/terms/{taxonomy}', [TermController::class, 'store'])->name('terms.store');
    Route::put('/terms/{taxonomy}/{term}', [TermController::class, 'update'])->name('terms.update');
    Route::delete('/terms/{taxonomy}/{term}', [TermController::class, 'destroy'])->name('terms.destroy');
    Route::delete('/terms/{taxonomy}/delete/bulk-delete', [TermController::class, 'bulkDelete'])->name('terms.bulk-delete');

    // Media Routes.
    Route::prefix('media')->name('media.')->group(function () {
        Route::get('/', [MediaController::class, 'index'])->name('index');
        Route::get('/api', [MediaController::class, 'api'])->name('api');
        Route::post('/', [MediaController::class, 'store'])->name('store')->middleware('check.upload.limits');
        Route::get('/upload-limits', [MediaController::class, 'getUploadLimits'])->name('upload-limits');
        Route::delete('/{id}', [MediaController::class, 'destroy'])->name('destroy');
        Route::delete('/', [MediaController::class, 'bulkDelete'])->name('bulk-delete');
    });

    // Editor Upload Route.
    Route::post('/editor/upload', [App\Http\Controllers\Backend\EditorController::class, 'upload'])->name('editor.upload');

    // AI Content Generation Routes.
    Route::prefix('ai')->name('ai.')->group(function () {
        Route::get('/providers', [App\Http\Controllers\Backend\AiContentController::class, 'getProviders'])->name('providers');
        Route::post('/generate-content', [App\Http\Controllers\Backend\AiContentController::class, 'generateContent'])->name('generate-content');
    });
});

/**
 * Profile routes.
 */
Route::group(['prefix' => 'profile', 'as' => 'profile.', 'middleware' => ['auth']], function () {
    Route::get('/edit', [ProfileController::class, 'edit'])->name('edit');
    Route::put('/update', [ProfileController::class, 'update'])->name('update');
    Route::put('/update-additional', [ProfileController::class, 'updateAdditional'])->name('update.additional');
});

Route::get('/locale/{lang}', [LocaleController::class, 'switch'])->name('locale.switch');
Route::get('/screenshot-login/{email}', [ScreenshotGeneratorLoginController::class, 'login'])->middleware('web')->name('screenshot.login');
Route::get('/demo-preview', fn() => view('demo.preview'))->name('demo.preview');
