<div class="nk-sidebar">
    <div class="nk-nav-scroll">
        <ul class="metismenu" id="menu">

            <li class="nav-label">Dashboard</li>
            @if(!(session()->has('user')))
                <li>
                    <a  href="{{route('learnnet')}}" aria-expanded="false">
                        <i class="fa-sharp fa-solid fa-house"></i><span class="nav-text">Home</span>
                    </a>
                </li>
            @endif
            @if(session()->has('user'))

                @if(session('user.type') == 'instructor')
                    <li>
                        <a  href="{{route('learnnet')}}" aria-expanded="false">
                            <i class="fa-sharp fa-solid fa-house"></i><span class="nav-text">Home</span>
                        </a>
                    </li>
                    <li>
                        <a  href="{{route('course-list.index')}}" aria-expanded="false">
                            <i class="icon-speedometer menu-icon"></i><span class="nav-text">My Course</span>
                        </a>
                    </li>

                    <li>
                        <a  href="{{route('course.index')}}" aria-expanded="false">
                            <i class="icon-speedometer menu-icon"></i><span class="nav-text">Create Course</span>
                        </a>
                    </li>
                    <li>
                        <a  href="{{route('instructor-transaction.index')}}" aria-expanded="false">
                            <i class="icon-speedometer menu-icon"></i><span class="nav-text">Transaction Statement</span>
                        </a>
                    </li>
                    <li>
                        <a   href="{{route('enrolled-courses.index')}}" aria-expanded="false">
                            <i class="icon-speedometer menu-icon"></i><span class="nav-text">Enrolled Students</span>
                        </a>
                    </li>
                @elseif(session('user.type') == 'student')
                    <li>
                        <a class="" href="{{route('learnnet')}}" aria-expanded="false">
                            <i class="fa-sharp fa-solid fa-house"></i><span class="nav-text">Home</span>
                        </a>
                    </li>
                    <li>
                        <a class="" href="{{route('student-course.index')}}" aria-expanded="false">
                            <i class="icon-speedometer menu-icon"></i><span class="nav-text">My Course</span>
                        </a>
                    </li>
                @elseif(session('user.type') == 'admin')
                    <li>
                        <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                            <i class="icon-speedometer menu-icon"></i><span class="nav-text">Admins</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="{{route('admin-list.index')}}">View Admins</a></li>
                            <li><a href="{{route('create-admin.index')}}">Create Admins</a></li>
                        </ul>
                    </li>
                    <li>
                        <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                            <i class="icon-speedometer menu-icon"></i><span class="nav-text">Students</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="{{route('course-enroll-request.index')}}">Enroll Request</a></li>
                            <li><a href="{{route('students.index')}}">View Students</a></li>
                        </ul>
                    </li>

                    <li>
                        <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                            <i class="icon-speedometer menu-icon"></i><span class="nav-text">Instructors</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="#">Payment Request</a></li>
                            <li><a href="{{route('instructor-request')}}">Requested Instructors</a></li>
                            <li><a href="{{route('instructors.index')}}">View Instructors</a></li>
                        </ul>
                    </li>
                @endif

            @endif

        </ul>
        </li>
        </ul>
    </div>
</div>
