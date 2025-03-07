<?php

use App\Livewire\Dashboard\AboutComponent;
use App\Livewire\Dashboard\ContactComponent;
use App\Livewire\Dashboard\ProjectComponent;
use App\Livewire\Dashboard\SkillComponent;
use Illuminate\Support\Facades\Route;

Route::middleware(['auth'])->prefix('admin')->group(function () {
    Route::get('/about', AboutComponent::class)->name('admin.about');
    Route::get('/skills', SkillComponent::class)->name('admin.skills');
    Route::get('/projects', ProjectComponent::class)->name('admin.projects');
    Route::get('/contacts', ContactComponent::class)->name('admin.contacts');
});

// Frontend Routes
Route::get('/', function () {
    return view('welcome', [
        'about' => \App\Models\About::first(),
        'skills' => \App\Models\Skill::orderBy('sort_order')->get(),
        'projects' => \App\Models\Project::latest()->take(6)->get()
    ]);
});
