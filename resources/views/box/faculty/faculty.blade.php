@section('box')
    <!-- Modal -->
    <div class="modal modal_zindex fade" id="createModal">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle"><i class="fa fa-edit"></i> Add Faculty</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="
				{{action('Admin\Faculty\FacultyController@save')}}" method="post" enctype="multipart/form-data">
				{{csrf_field()}}
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group input-group-sm mb-2">
                                    <label for="dept">Department</label>
                                    <select class="form-control" name="departmentID">
                                        <option>select department</option>
                                        @foreach($department as $row)
                                            <option value="{{$row->id}}">{{$row->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
								@if($errors->has('departmentID'))
									<ul>
										<li style="color:red;">{{$errors->first('departmentID')}}</li>
									</ul>
								@endif
                                <div class="form-group input-group-sm mb-2">
									<label for="name">Name</label>
									<input type="text" class="form-control" id="name" name="name" placeholder="Name">
								</div>
								@if($errors->has('name'))
									<ul>
										<li style="color:red;">{{$errors->first('name')}}</li>
									</ul>
								@endif
                                <div class="form-group input-group-sm mb-2">
                                    <label for="gander">Gender</label>
                                    <select class="form-control" name="gender">
                                        <option value="">select a gender</option>
                                        <option value="male">male</option>
                                        <option value="female">female</option>
                                    </select>
                                </div>
								@if($errors->has('gender'))
									<ul>
										<li style="color:red;">{{$errors->first('gender')}}</li>
									</ul>
								@endif
                                <div class="form-group input-group-sm mb-2">
                                    <label for="designation">Designation</label>
                                    <input type="text" class="form-control" id="designation" name="designation" placeholder="Degisgnation">
                                </div>
								@if($errors->has('designation'))
									<ul>
										<li style="color:red;">{{$errors->first('designation')}}</li>
									</ul>
								@endif
                                <div class="form-group input-group-sm mb-2">
                                    <label for="email">Email</label>
                                    <input type="text" class="form-control" id="email" name="email" placeholder="Email">
                                </div>
								@if($errors->has('email'))
									<ul>
										<li style="color:red;">{{$errors->first('email')}}</li>
									</ul>
								@endif
                                <div class="form-group input-group-sm mb-2">
                                   <label for="phone">Phone</label>
									<input type="text" class="form-control" id="phone" name="phone_no" placeholder="Phone">
								</div>
								@if($errors->has('phone_no'))
									<ul>
										<li style="color:red;">{{$errors->first('phone_no')}}</li>
									</ul>
								@endif
								<div class="form-group input-group-sm mb-2">
                                    <label for="image">Image</label>
                                    <input onchange="document.getElementById('facultyID').src = window.URL.createObjectURL(this.files[0])" type="file" placeholder="Image" name="image" class="form-control" >
                                </div>
                                <img width="300" height="200" id="facultyID" alt="your image">
								@if($errors->has('image'))
									<ul>
										<li style="color:red;">{{$errors->first('image')}}</li>
									</ul>
								@endif
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-sm btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-sm btn-primary">Save </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- View -->
    <!-- Modal -->
    <div class="modal fade" id="view" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle1" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle1"> FACULTY PROFILE</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="faculty_area">
                        <div class="faculty_body">
                            <div class="card" style="width: 18rem;">
                                <img src="assets/images/1.jpg" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card_title">Naima Ahmed Fahmi</h5>
                                    <p>Senior Lecturer</p>
                                    <span>Metropolitan University</span>
                                    <div class="social_link">
                                        <ul>
                                            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                            <li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
                                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                            <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <!--Edit Modal -->
    <div class="modal fade" id="edit1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle1" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle1">Edit Faculty</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="{{action('Admin\Faculty\FacultyController@edit')}}" id="editFacultyForm" method="post" enctype="multipart/form-data">
					{!! csrf_field() !!}
                    <input type="hidden" name="id">
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group input-group-sm mb-2">
                                    <label for="dept">Department</label>
                                    <select class="form-control" name="departmentID">
                                        <option>select department</option>
                                        @foreach($department as $row)
                                            <option value="{{$row->id}}">{{$row->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group input-group-sm mb-2">
									<label for="name">Name</label>
									<input type="text" class="form-control" id="name" name="name" placeholder="Name">
								</div>
                                <div class="form-group input-group-sm mb-2">
                                    <label for="gander">Gender</label>
                                    <select class="form-control" name="gender">
                                        <option value="">select a gender</option>
                                        <option value="male">male</option>
                                        <option value="female">female</option>
                                    </select>
                                </div>
                                <div class="form-group input-group-sm mb-2">
                                    <label for="designation">Designation</label>
                                    <input type="text" class="form-control" id="designation" name="designation" placeholder="Degisgnation">
                                </div>
                                <div class="form-group input-group-sm mb-2">
                                    <label for="email">Email</label>
                                    <input type="text" class="form-control" id="email" name="email" placeholder="Email">
                                </div>
                                <div class="form-group input-group-sm mb-2">
                                   <label for="phone">Phone</label>
									<input type="text" class="form-control" id="phone" name="phone_no" placeholder="Phone">
								</div>
								<div class="form-group input-group-sm mb-2">
                                    <label for="image">Image</label>
                                    <input onchange="document.getElementById('facultyID1').src = window.URL.createObjectURL(this.files[0])" type="file" placeholder="Image" name="image" class="form-control" >
                                </div>
                                <img width="300" height="200" id="facultyID1" alt="your image">
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-sm btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-sm btn-primary">Save changes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
	
@endsection
