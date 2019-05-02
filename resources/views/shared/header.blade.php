<!-- Start Header Menu Area   -->
<header class="main_menu_area sticky">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <div class="header_logo">
                    <a href=""><p>Mu-Booster</p>
                    </a>
                </div>
            </div>
            <div class="col-md-8">
                <div class="main_menu">
                    <nav class="navbar navbar-expand-lg navbar-light ">
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul>
                                <li>
                                    <a class="nav-link" href="{{action('MainController@index')}}">Home <span class="sr-only">(current)</span></a>
                                </li>
                                <li class="dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Programmes
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
										@foreach($dept as $row)
                                        <a class="dropdown-item transition" href="{{action('Department\DepartmentController@index',['id'=>$row->id])}}"><i class="fas fa-caret-right"></i>{{$row->name}}</a>
										@endforeach
                                    </div>
                                </li>
                                
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
            <div class="col-md-1 text-right">
                <div class="header_icon">
                    <ul>
                        <li>
                            <a class="nav-link" href="{{route('login')}}"><i class="fas fa-user"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</header>