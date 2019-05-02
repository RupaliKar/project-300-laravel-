<div class="header_top">
    <div class="container-fluid no_padding">
        <div class="header_left">
            <a href="#"><p>MU-Booster</p>
            </a>
        </div> 
        <div class="admin_sidebar_menu">
            <div class="user_panel">
                <img src="{{asset('public/admin_asset/images/prof2.jpg')}}" alt="" />
                <p>{{ Auth::user()->name }}</p>
            </div>
            <div class="menu text-left">
                <ul>
                    <li><a href="{{action('AdminController@index')}}"><i class="fas fa-columns"></i>dashboard</a></li>
                    <li><a href="{{action('Admin\Faculty\FacultyController@index')}}"><i class="far fa-user"></i>faculty</a></li>
                    <li><a href="{{action('Admin\Department\DepartmentController@index')}}"><i class="fab fa-accusoft"></i>department</a></li>
                    <li><a href="{{action('Admin\Semester\SemesterController@index')}}"><i class="far fa-bookmark"></i>semester</a></li>
                    <li><a href="{{action('Admin\Course\CourseController@index')}}"><i class="fas fa-book-open"></i>offerd course</a></li>
                    <li><a href="{{action('Admin\Course_details\Course_detailsController@index')}}"><i class="fas fa-book-open"></i>course details</a></li>
                    <li><a href="{{action('Admin\User\UserController@index')}}"><i class="fas fa-users"></i>Users</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>