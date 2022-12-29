<div class="nk-sidebar"  style="background-color: #9E62C7;">
    <div class="nk-nav-scroll">
        <ul class="metismenu" id="menu" style="background-color: #9E62C7;">


            <!--user profile in sideBar section start-->
            <div class="header-right position-relative mx-auto py-3" style="margin-left: -30px; pointer-events: none">
                <li class="icons dropdown mx-auto">
                    <div class="user-img c-pointer mx-auto " data-toggle="dropdown">
                        @if(session()->has('user') && (session('user.image') != null))
                            <img src="{{asset('/profilePic/'.session('user.image'))}}" height="40" width="40" alt="profile">
                        @else
                            <img class="profile" alt="profile" src="asset/images/avatar.png"/>
                        @endif
                    </div>
                </li>
            </div>
            <li class="nav-label  font-weight-bold mx-auto text-capitalize" style="color: black; margin-top: -30px;">{{session('user.first_name')}}</li>
            <!--user profile in sideBar section end-->

            @if(!(session()->has('user')))
                <li>
                    <a  href="{{route('learnnet')}}" aria-expanded="false">
                        <i class="fa-sharp fa-solid fa-house"></i><span class="nav-text font-weight-bold" style="color: black">Home</span>
                    </a>
                </li>
            @endif

            @if(session()->has('user'))

                @if(session('user.type') == 'instructor')
                    <li>
                        <a  href="{{route('learnnet')}}" aria-expanded="false">
                            <i class="fa-sharp fa-solid fa-house font-weight-bold" style="color: black"></i><span class="nav-text font-weight-bold" style="color: black">Home</span>
                        </a>
                    </li>

                    <li>
                        <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                            <i class="icon-settings menu-icon font-weight-bold" style="color: black"></i><span class="nav-text font-weight-bold" style="color: black">Setting</span>
                        </a>
                        <ul aria-expanded="false">
                            <li>
                                <a href="{{route('profile')}}">
                                    <span class="label font-weight-bold" style="color: black">Profile</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{route('profile-edit')}}">
                                    <span class="label font-weight-bold" style="color: black">Account</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a  href="{{route('course-list.index')}}" aria-expanded="false">
                            <i class="icon-speedometer menu-icon font-weight-bold" style="color: black"></i><span class="nav-text font-weight-bold" style="color: black">My Course</span>
                        </a>
                    </li>

                    <li>
                        <a  href="{{route('course.index')}}" aria-expanded="false">
                            <i class="icon-speedometer menu-icon font-weight-bold" style="color: black"></i><span class="nav-text font-weight-bold" style="color: black">Manage Course</span>
                        </a>
                    </li>
                    <li>
                        <a   href="{{route('enrolled-student', ['instructorId' => session('user.id')])}}" aria-expanded="false">
                            <i class="icon-speedometer menu-icon font-weight-bold" style="color: black"></i><span class="nav-text font-weight-bold" style="color: black">Enrolled Students</span>
                        </a>
                    </li>

                    <li>
                        <a class="" href="{{route('withdrawal-request')}}" aria-expanded="false">
                            <i class="icon-speedometer menu-icon font-weight-bold" style="color: black"></i><span class="nav-text font-weight-bold" style="color: black">Withdraw Money</span>
                        </a>
                    </li>
                    <li>
                        <a  href="{{route('instructor-transaction.index')}}" aria-expanded="false">
                            <i class="icon-speedometer menu-icon font-weight-bold" style="color: black"></i><span class="nav-text font-weight-bold" style="color: black">Transaction Statement</span>
                        </a>
                    </li>
                    <li>
                        <a  href="{{route('courses')}}" aria-expanded="false">
                            <i class="icon-speedometer menu-icon font-weight-bold" style="color: black"></i><span class="nav-text font-weight-bold" style="color: black">Courses</span>
                        </a>
                    </li>
                @elseif(session('user.type') == 'student')
                    <li>
                        <a class="" href="{{route('learnnet')}}" aria-expanded="false">
                            <i class="fa-sharp fa-solid fa-house font-weight-bold" style="color: black"></i><span class="nav-text font-weight-bold" style="color: black"">Home</span>
                        </a>
                    </li>
                    <li>
                        <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                            <i class="icon-settings menu-icon font-weight-bold" style="color: black"></i><span class="nav-text font-weight-bold" style="color: black">Setting</span>
                        </a>
                        <ul aria-expanded="false">
                            <li>
                                <a href="{{route('profile')}}">
                                    <span class="label font-weight-bold" style="color: black">Profile</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{route('profile-edit')}}">
                                    <span class="label font-weight-bold" style="color: black">Account</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a class="" href="{{route('student-course.index')}}" aria-expanded="false">
                            <i class="icon-speedometer menu-icon font-weight-bold" style="color: black"></i><span class="nav-text font-weight-bold" style="color: black">My Course</span>
                        </a>
                    </li>
                    <li>
                        <a  href="{{route('courses')}}" aria-expanded="false">
                            <i class="icon-speedometer menu-icon font-weight-bold" style="color: black"></i><span class="nav-text font-weight-bold" style="color: black">Courses</span>
                        </a>
                    </li>
                    <li>
                        <a class="" href="{{route('student-transaction.index')}}" aria-expanded="false">
                            <i class="icon-speedometer menu-icon font-weight-bold" style="color: black"></i><span class="nav-text font-weight-bold" style="color: black">Transaction Statement</span>
                        </a>
                    </li>
                @elseif(session('user.type') == 'admin')
                    <li>
                        <a  href="{{route('admin-dashboard.index')}}" aria-expanded="false">
                            <i class="icon-speedometer menu-icon font-weight-bold" style="color: black"></i><span class="nav-text font-weight-bold" style="color: black">Dashboard</span>
                        </a>
                    </li>
                    <li>
                        <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                            <i class="icon-settings menu-icon font-weight-bold" style="color: black"></i><span class="nav-text font-weight-bold" style="color: black">Setting</span>
                        </a>
                        <ul aria-expanded="false">
                            <li>
                                <a href="{{route('profile')}}">
                                    <span class="label font-weight-bold" style="color: black;">Profile</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{route('profile-edit')}}">
                                    <span class="label font-weight-bold" style="color: black">Account</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                            <i class="icon-speedometer menu-icon font-weight-bold" style="color: black"></i><span class="nav-text font-weight-bold" style="color: black">Admins</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="{{route('admin-list.index')}}" class=" font-weight-bold" style="color: black">View Admins</a></li>
                            <li><a href="{{route('create-admin.index')}}" class=" font-weight-bold" style="color: black">Create Admins</a></li>
                        </ul>
                    </li>
                    <li>
                        <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                            <i class="icon-speedometer menu-icon font-weight-bold" style="color: black"></i><span class="nav-text font-weight-bold" style="color: black"">Students</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="{{route('course-enroll-request.index')}}" class=" font-weight-bold" style="color: black">Enroll Request</a></li>
                            <li><a href="{{route('students.index')}}" class=" font-weight-bold" style="color: black">View Students</a></li>
                        </ul>
                    </li>

                    <li>
                        <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                            <i class="icon-speedometer menu-icon font-weight-bold" style="color: black"></i><span class="nav-text font-weight-bold" style="color: black"">Instructors</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="{{route('withdrawal-approval')}}" class=" font-weight-bold" style="color: black">Withdraw Request</a></li>
                            <li><a href="{{route('instructor-request')}}" class=" font-weight-bold" style="color: black">Requested Instructors</a></li>
                            <li><a href="{{route('instructors.index')}}" class=" font-weight-bold" style="color: black">View Instructors</a></li>
                        </ul>
                    </li>
                    <li>
                        <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                            <i class="icon-speedometer menu-icon font-weight-bold" style="color: black"></i><span class="nav-text font-weight-bold" style="color: black"">Transactions</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="{{route('student-transaction-admin')}}" class=" font-weight-bold" style="color: black">Student Transactions</a></li>
                            <li><a href="{{route('instructor-transaction-admin')}}" class=" font-weight-bold" style="color: black">Instructor Transactions</a></li>
                        </ul>
                    </li>
                @endif

            @endif

        </ul>
        </li>
        </ul>
    </div>
</div>
