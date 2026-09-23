<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Redirect;

class TeacherController extends Controller
{
    public function updateProfile(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'teacher_subjects' => ['required', 'array', 'min:1'],
            'teacher_subjects.*' => ['string', 'max:100'],
            'teacher_qualification' => ['required', 'string', 'max:150'],
            'teacher_experience' => ['required', 'integer', 'min:0', 'max:60'],
            'teacher_phone' => ['nullable', 'string', 'max:30'],
            'teacher_bio' => ['required', 'string', 'max:1000'],
        ]);

        $request->user()->update([
            'teacher_subjects' => implode(', ', $validated['teacher_subjects']),
            'teacher_qualification' => $validated['teacher_qualification'],
            'teacher_experience' => $validated['teacher_experience'],
            'teacher_phone' => $validated['teacher_phone'] ?? null,
            'teacher_bio' => $validated['teacher_bio'],
        ]);

        return Redirect::route('dashboard')->with('teacher-profile-updated', 'Your teaching information has been saved.');
    }
}
