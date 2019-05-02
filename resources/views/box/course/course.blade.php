@section('box')
	<div class="modal modal_zindex fade" id="createModal">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="createModal"><i class="fa fa-plus-square"></i> Add Course</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="{{action('Admin\Course\CourseController@save')}}" method="post" enctype="multipart/form-data">

                    {{csrf_field()}}
                 

                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group input-group-sm mb-2">
                                    <label for="course">Course Name</label>
                                    <input id="course" type="text" placeholder="Course Name" name="name" class="form-control" >
                                </div>
								@if($errors->has('name'))
									<ul>
										<li style="color:red;">{{$errors->first('name')}}</li>
									</ul>
								@endif
                                <div class="form-group input-group-sm mb-2">
                                    <label for="course_code">Course Code</label>
                                    <input id="course_code" type="text" placeholder="Course Code" name="course_code" class="form-control" >
                                </div>
								@if($errors->has('course_code'))
									<ul>
										<li style="color:red;">{{$errors->first('course_code')}}</li>
									</ul>
								@endif
                                <div class="form-group input-group-sm mb-2">
                                    <label for="course_credit">Course Credit</label>
                                    <input id="course_credit" type="text" placeholder="Course Credit" name="course_credit" class="form-control" >
                                </div>
								@if($errors->has('course_credit'))
									<ul>
										<li style="color:red;">{{$errors->first('course_credit')}}</li>
									</ul>
								@endif
								 <div class="form-group input-group-sm mb-2">
                                    <label for="dept">Department</label>
                                    <select class="form-control" name="deptID">
                                        <option>select department</option>
                                        @foreach($department as $row)
                                            <option value="{{$row->id}}">{{$row->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
								@if($errors->has('deptID'))
									<ul>
										<li style="color:red;">{{$errors->first('deptID')}}</li>
									</ul>
								@endif
								 <div class="form-group input-group-sm mb-2">
                                    <label for="dept">Semester</label>
                                    <select class="form-control" name="semesterID">
                                        <option>select semester</option>
                                        @foreach($semester as $row)
                                            <option value="{{$row->id}}">{{$row->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
								@if($errors->has('semesterID'))
									<ul>
										<li style="color:red;">{{$errors->first('semesterID')}}</li>
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
	
	<!-- Modal -->
	  <div class="modal fade" id="exampleModalLong1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle1" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle1">Edit Faculty</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form >
					
                    <input type="hidden" name="id">
                     <div class="modal-body">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group input-group-sm mb-2">
                                    <label for="course">Course Name</label>
                                    <input id="course" type="text" placeholder="Course Name" name="name" class="form-control" >
                                </div>
                                <div class="form-group input-group-sm mb-2">
                                    <label for="course_code">Course Code</label>
                                    <input id="course_code" type="text" placeholder="Course Code" name="course_code" class="form-control" >
                                </div>
                                <div class="form-group input-group-sm mb-2">
                                    <label for="course_credit">Course Credit</label>
                                    <input id="course_credit" type="text" placeholder="Course Credit" name="course_credit" class="form-control" >
                                </div>
								<div class="form-group input-group-sm mb-2">
                                    <label for="dept">Department</label>
                                    <select class="form-control" name="deptID">
                                        <option>select department</option>
                                        @foreach($department as $row)
                                            <option value="{{$row->id}}">{{$row->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
								<div class="form-group input-group-sm mb-2">
                                    <label for="semester">Semester</label>
                                    <select class="form-control" name="semesterID">
                                        <option>select semester</option>
                                        @foreach($semester as $row)
                                        <option value="{{$row->id}}">{{$row->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
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