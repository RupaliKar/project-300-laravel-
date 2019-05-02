@extends('layouts.master')
@section('title')
    Home
@endsection

@section('content')
    <!-- Start Bannere Area -->
    <section class="banner_area bannder_bg">
        <div class="container">
            <div class="banner_content p-250">
                <h4>In our Campus you can learn
                    <span id="ityped"></span></h4>
                <a href="" class="blk_btn">view Courses</a>
            </div>
        </div>
    </section>
    <!-- End Bannere Area -->
    <!--Start Search Department Area -->
    <div class="s_area margin-bottom-100 ">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="s_left">
                        <h3>search for department</h3>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="s_right">
                        <form action="">
                            <select class="form-control form-control-lg" >
                                <option>All Department</option>
                                <option>CSE</option>
                                <option> EEE</option>
                                <option>Economics</option>
                                <option>English</option>
                                <option> Law</option>
                                <option> BBA</option>
                            </select>
                            <a href=""><i class="fas fa-search"></i></a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--End Search Department Area -->

    <!-- Start Features Area -->
    <div class="f_area margin-bottom-100 ">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="single_feature">
                        <i class="fas fa-pencil-alt"></i>
                        <h4>BROWSE COURSES</h4>
                        <p>Lorem ipsum dolor sit amet, ad autem erroribus eum, eum eu maluisset constituto accusam.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="single_feature">
                        <i class="fas fa-search"></i>
                        <h4>Find Teacher</h4>
                        <p>Lorem ipsum dolor sit amet, ad autem erroribus eum, eum eu maluisset constituto accusam.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="single_feature">
                        <i class="fas fa-pencil-alt"></i>
                        <h4>BROWSE COURSES</h4>
                        <p>Lorem ipsum dolor sit amet, ad autem erroribus eum, eum eu maluisset constituto accusam.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Features Area -->
    <!-- Start Counter Up Area -->
    <div class="counter_up_area  margin-bottom-100">
        <div class="container">
            <div class="row">
                <div class="col-md-4 text-center text-white">
                    <div class="single_counter">
                        <h4>+ <span class="counter">50</span></h4>
                        <p>teachers</p>
                    </div>
                </div>
                <div class="col-md-4 text-center text-white">
                    <div class="single_counter">
                        <h4>+ <span class="counter">1,234</span></h4>
                        <p>courses</p>
                    </div>
                </div>
                <div class="col-md-4 text-center text-white">
                    <div class="single_counter">
                        <h4>+ <span class="counter">10,000</span></h4>
                        <p>students</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Counter Up Area -->

    <!-- Start All Categories Courses Area -->
    <div class="all_cat_c margin-bottom-100">
        <div class="container">
            <div class="row">
                <div class="col-md-9">
                    <div class="cat_btn">
                        <button class="active" data-filter="*">all</button>
                        <button data-filter=".cse">Cse</button>
                        <button data-filter=".eee">Eee</button>
                        <button data-filter=".bba">Bba</button>
                        <button data-filter=".llb">llb</button>
                        <button data-filter=".eco">economics</button>
                        <button data-filter=".eng">English</button>
                    </div>
                </div>
                <div class="col-md-3 text-right">
                    <div class="cat_right_btn">
                        <a href="">view all programmes</a>
                    </div>
                </div>
            </div>
            <div class="cat_active">
                <div class="row">
                    <div class="col-md-4 grid-item cse">
                        <div class="single_cou">
                            <div class="cou_hover">
                                <img src="{{asset('public/assets/images/cse1.jpg')}}" alt="" />
                            </div>
                            <div class="single_cou_content">
                                <h5>department :<span> CSE</span></h5>
                                <p>subject :<span> Computer Technology</span></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 grid-item cse ">
                        <div class="single_cou">
                            <div class="cou_hover">
                                <img src="{{asset('public/assets/images/cse2.jpg')}}" alt="" />
                            </div>
                            <div class="single_cou_content">
                                <h5>department :<span> CSE</span></h5>
                                <p>subject :<span> Structured Programming</span></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 grid-item cse">
                        <div class="single_cou">
                            <div class="cou_hover">
                                <img src="{{asset('public/assets/images/cse3.jpg')}}" alt="" />
                            </div>
                            <div class="single_cou_content">
                                <h5>department :<span> CSE</span></h5>
                                <p>subject :<span> Database Management System</span></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 grid-item eee">
                        <div class="single_cou">
                            <div class="cou_hover">
                                <img src="{{asset('public/assets/images/eee1.jpg')}}" alt="" />
                            </div>
                            <div class="single_cou_content">
                                <h5>department :<span> EEE</span></h5>
                                <p>subject :<span> Electrical Services design</span></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 grid-item eee">
                        <div class="single_cou">
                            <div class="cou_hover">
                                <img src="{{asset('public/assets/images/eee2.jpg')}}" alt="" />
                            </div>
                            <div class="single_cou_content">
                                <h5>department :<span> EEE</span></h5>
                                <p>subject :<span> Enginnering electromagnetic</span></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 grid-item eng">
                        <div class="single_cou">
                            <div class="cou_hover">
                                <img src="{{asset('public/assets/images/eng1.jpg')}}" alt="" />
                            </div>
                            <div class="single_cou_content">
                                <h5>department :<span> english</span></h5>
                                <p>subject :<span> Introduction to English Poetry</span></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 grid-item eng">
                        <div class="single_cou">
                            <div class="cou_hover">
                                <img src="{{asset('public/assets/images/eng2.jpg')}}" alt="" />
                            </div>
                            <div class="single_cou_content">
                                <h5>department :<span> english</span></h5>
                                <p>subject :<span> Structures of English</span></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 grid-item bba">
                        <div class="single_cou">
                            <div class="cou_hover">
                                <img src="{{asset('public/assets/images/bba1.jpg')}}" alt="" />
                            </div>
                            <div class="single_cou_content">
                                <h5>department :<span> bba</span></h5>
                                <p>subject :<span> Business Statistics</span></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 grid-item bba">
                        <div class="single_cou">
                            <div class="cou_hover">
                                <img src="{{asset('public/assets/images/bba2.jpg')}}" alt="" />
                            </div>
                            <div class="single_cou_content">
                                <h5>department :<span> bba</span></h5>
                                <p>subject :<span> Financial Accounting</span></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 grid-item llb">
                        <div class="single_cou">
                            <div class="cou_hover">
                                <img src="{{asset('public/assets/images/low1.jpg')}}" alt="" />
                            </div>
                            <div class="single_cou_content">
                                <h5>department :<span> llb</span></h5>
                                <p>subject :<span> Law of Equity & Trust</span></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 grid-item llb">
                        <div class="single_cou">
                            <div class="cou_hover">
                                <img src="{{asset('public/assets/images/low2.jpg')}}" alt="" />
                            </div>
                            <div class="single_cou_content">
                                <h5>department :<span> llb</span></h5>
                                <p>subject :<span> Business Law</span></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 grid-item llb">
                        <div class="single_cou">
                            <div class="cou_hover">
                                <img src="{{asset('public/assets/images/low3.jpg')}}" alt="" />
                            </div>
                            <div class="single_cou_content">
                                <h5>department :<span> llb</span></h5>
                                <p>subject :<span> Criminology</span></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 grid-item eco">
                        <div class="single_cou">
                            <div class="cou_hover">
                                <img src="{{asset('public/assets/images/eco1.jpg')}}" alt="" />
                            </div>
                            <div class="single_cou_content">
                                <h5>department :<span> Economics</span></h5>
                                <p>subject :<span> Statistics for Economics </span></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 grid-item eco">
                        <div class="single_cou">
                            <div class="cou_hover">
                                <img src="{{asset('public/assets/images/eco.jpg')}}" alt="" />
                            </div>
                            <div class="single_cou_content">
                                <h5>department :<span> Economics</span></h5>
                                <p>subject :<span> Financial Accounting</span></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End All Categories Courses Area -->
@endsection
