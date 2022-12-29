<!-- Menu Start -->
<div class="menu-container flex-grow-1">
    <ul id="menu" class="menu">
        @if(session()->has('user'))
            <li>
                <a href="#dashboards">
                    <i data-acorn-icon="settings-2" class="icon" data-acorn-size="18"></i>
                    <span class="label">Setting</span>
                </a>
                <ul id="dashboards">
                    <li>
                        <a href="{{route('profile')}}">
                            <span class="label">Profile</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{route('profile-edit')}}">
                            <span class="label">Account</span>
                        </a>
                    </li>
                </ul>
            </li>

            @if(session('user.type') == 'student')
                <li>
                    <a href="{{route('student-course.index')}}">
                        <i data-acorn-icon="online-class" class="icon" data-acorn-size="18"></i>
                        <span class="label">My course</span>
                    </a>
                </li>
                <li>
                    <a href="{{route('courses')}}">
                        <i data-acorn-icon="online-class" class="icon" data-acorn-size="18"></i>
                        <span class="label">Courses</span>
                    </a>
                </li>

                <li>
                    <a href="{{route('student-transaction.index')}}">
                        <i data-acorn-icon="web-page" class="icon" data-acorn-size="18"></i>
                        <span class="label">Transaction Statement</span>
                    </a>
                </li>

            @elseif(session('user.type') == 'instructor')
                <li>
                    <a href="{{route('course-list.index')}}">
                        <i data-acorn-icon="online-class" class="icon" data-acorn-size="18"></i>
                        <span class="label">My course</span>
                    </a>
                </li>
                <li>
                    <a href="{{route('course.index')}}">
                        <i data-acorn-icon="crosshair" class="icon" data-acorn-size="18"></i>
                        <span class="label">Manage Course</span>
                    </a>
                </li>
                <li>
                    <a href="{{route('enrolled-student', ['instructorId' => session('user.id')])}}">
                        <i data-acorn-icon="destination" class="icon" data-acorn-size="18"></i>
                        <span class="label">Enrolled Students</span>
                    </a>
                </li>

                <li>
                    <a href="{{route('withdrawal-request')}}">
                        <i data-acorn-icon="activity" class="icon" data-acorn-size="18"></i>
                        <span class="label">Withdraw Money</span>
                    </a>
                </li>

                <li>
                    <a href="{{route('instructor-transaction.index')}}">
                        <i data-acorn-icon="web-page" class="icon" data-acorn-size="18"></i>
                        <span class="label">Transaction Statement</span>
                    </a>
                </li>

                <li>
                    <a href="{{route('courses')}}">
                        <i data-acorn-icon="online-class" class="icon" data-acorn-size="18"></i>
                        <span class="label">Courses</span>
                    </a>
                </li>
            @endif
        @endif
    </ul>
</div>
<!-- Menu End -->
