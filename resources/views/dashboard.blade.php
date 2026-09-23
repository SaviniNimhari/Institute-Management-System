<x-app-layout>
    @php
        $teacherSubjects = old('teacher_subjects', Auth::user()->teacher_subjects ? explode(', ', Auth::user()->teacher_subjects) : []);
    @endphp
    <main class="section" style="padding-top:55px">
        <div class="container">
            <div class="section-heading">
                <div>
                    <span class="eyebrow">Your learning studio / {{ now()->format('d M Y') }}</span>
                    <h1 class="display" style="font-size:clamp(3rem,6vw,6rem)">Good to see you,<br><em>{{ Str::before(Auth::user()->name, ' ') }}.</em></h1>
                </div>
                <p>Keep the thread going. A little progress today makes tomorrow easier.</p>
            </div>
            <div class="feature-row" style="margin-bottom:65px">
                <div class="course-card" style="padding:30px">
                    <span class="course-card__tag">Current focus</span>
                    <h2 style="font-size:2.3rem;letter-spacing:-.07em;margin:15px 0 10px">Build your first portfolio.</h2>
                    <p style="color:var(--muted)">You’re exactly where you need to be. Choose a path below and make something real.</p>
                    <a class="button button--dark" href="{{ url('courses') }}">Browse courses <span>↗</span></a>
                </div>
                <img class="feature-image" src="https://images.unsplash.com/photo-1516321318423-f06f85e504b3?auto=format&fit=crop&w=1000&q=85" alt="Laptop and notebook in a creative workspace">
            </div>
            <div class="section-heading">
                <div>
                    <span class="eyebrow">Your access</span>
                    <h2>Make it <em>count.</em></h2>
                </div>
            </div>
            <div class="card-grid">
                @role('admin')
                    <a class="course-card" href="{{ route('admin.users') }}">
                        <div class="course-card__body">
                            <span class="course-card__tag">Admin desk</span>
                            <h3>Manage users</h3>
                            <p>Keep the learning community moving.</p>
                            <div class="course-card__foot">
                                <span>Open workspace</span>
                                <strong>↗</strong>
                            </div>
                        </div>
                    </a>
                @endrole
                @role('teacher')
                    <div class="form-shell teacher-profile" style="margin:0;max-width:none">
                        <span class="course-card__tag">Teacher desk</span>
                        <h3>Tell students what you teach.</h3>
                        <p>Complete your teaching information so the school can match you with the right classes.</p>
                        @if (session('teacher-profile-updated'))
                            <p class="teacher-profile__success">{{ session('teacher-profile-updated') }}</p>
                        @endif
                        <form method="POST" action="{{ route('teacher.profile.update') }}">
                            @csrf
                            @method('PATCH')
                            <div class="form-grid">
                                <div class="form-field form-field--wide">
                                    <label>Subjects you teach *</label>
                                    <div class="subject-check-grid">
                                        @foreach (['Sinhala', 'Tamil', 'English', 'Environmental Studies', 'Mathematics', 'Science', 'History', 'Geography', 'Civic Education', 'Religion', 'ICT', 'Health & Physical Education', 'Aesthetic Studies', 'Business & Accounting'] as $subject)
                                            <label class="subject-check"><input type="checkbox" name="teacher_subjects[]" value="{{ $subject }}" @checked(in_array($subject, $teacherSubjects))><span>{{ $subject }}</span></label>
                                        @endforeach
                                    </div>
                                    @error('teacher_subjects')<span class="auth-form__error">{{ $message }}</span>@enderror
                                </div>
                                <div class="form-field"><label for="teacher_qualification">Qualification *</label><input class="form-control" id="teacher_qualification" name="teacher_qualification" value="{{ old('teacher_qualification', Auth::user()->teacher_qualification) }}" placeholder="e.g. B.Ed. Mathematics" required></div>
                                <div class="form-field"><label for="teacher_experience">Years of experience *</label><input class="form-control" id="teacher_experience" name="teacher_experience" type="number" min="0" max="60" value="{{ old('teacher_experience', Auth::user()->teacher_experience) }}" required></div>
                                <div class="form-field"><label for="teacher_phone">Phone number</label><input class="form-control" id="teacher_phone" name="teacher_phone" value="{{ old('teacher_phone', Auth::user()->teacher_phone) }}"></div>
                                <div class="form-field form-field--wide"><label for="teacher_bio">Short introduction *</label><textarea class="form-control" id="teacher_bio" name="teacher_bio" rows="4" maxlength="1000" required>{{ old('teacher_bio', Auth::user()->teacher_bio) }}</textarea></div>
                            </div>
                            <button class="button button--dark" type="submit">Save teaching profile <span>↗</span></button>
                        </form>
                        </div>
                @endrole
                @role('student')
                    <div class="course-card">
                        <div class="course-card__body">
                            <span class="course-card__tag">Student desk</span>
                            <h3>Keep learning</h3>
                            <p>View your course list and check your grades.</p>
                        </div>
                    </div>
                @endrole
                @role('registrar')
                    <div class="course-card">
                        <div class="course-card__body">
                            <span class="course-card__tag">Registrar desk</span>
                            <h3>Keep records clear</h3>
                            <p>Approve registrations and manage academic records.</p>
                        </div>
                    </div>
                @endrole
            </div>
        </div>
    </main>
</x-app-layout>
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    
                    <h1 class="text-2xl font-bold mb-4">Welcome, {{ Auth::user()->name }}!</h1>

                    @role('admin')
                        <p>You are logged in as <strong>Admin</strong>.</p>
                        <ul class="mt-2 list-disc list-inside">
                            <li><a href="{{ route('admin.users') }}" class="text-blue-500 hover:underline">Manage Users</a></li>
                            <li><a href="{{ route('admin.roles') }}" class="text-blue-500 hover:underline">Manage Roles</a></li>
                            <li><a href="{{ route('admin.permissions') }}" class="text-blue-500 hover:underline">Manage Permissions</a></li>
                        </ul>
                    @endrole

                    @role('teacher')
                        <p>You are logged in as <strong>Teacher</strong>.</p>
                        <ul class="mt-2 list-disc list-inside">
                            <li>View class schedules</li>
                            <li>Manage student assignments</li>
                        </ul>
                    @endrole

                    @role('student')
                        <p>You are logged in as <strong>Student</strong>.</p>
                        <ul class="mt-2 list-disc list-inside">
                            <li>View your course list</li>
                            <li>Check your grades</li>
                        </ul>
                    @endrole

                    @role('registrar')
                        <p>You are logged in as <strong>Registrar</strong>.</p>
                        <ul class="mt-2 list-disc list-inside">
                            <li>Approve student registrations</li>
                            <li>Manage academic records</li>
                        </ul>
                    @endrole

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
