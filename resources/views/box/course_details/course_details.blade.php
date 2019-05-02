@section('box')
	<div class="modal modal_zindex fade" id="createModal">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle"><i class="fa fa-plus-square"></i> Add Course Component</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                  <form action="{{action('Admin\Course_details\Course_detailsController@save')}}" method="post" enctype="multipart/form-data">

                    {{csrf_field()}}
                 

                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-12">
								 <div class="form-group input-group-sm mb-2">
                                    <label for="dept">Course Name</label>
                                    <select class="form-control" name="course_name">
                                        <option>select course</option>
                                        @foreach($course as $row)
                                            <option value="{{$row->id}}">{{$row->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group input-group-sm mb-2">
                                    <label for="dept">Department Name</label>
                                    <select class="form-control" name="deptID">
                                        <option>select Department</option>
                                        @foreach($department as $row)
                                            <option value="{{$row->id}}">{{$row->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group input-group-sm mb-2">
                                    <label for="dept">Semester</label>
                                    <select class="form-control" name="semester">
                                        <option>Semester</option>
                                        @foreach($semester as $row)
                                            <option value="{{$row->id}}">{{$row->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group input-group-sm mb-2">
                                    <label for="book_name">Book Name</label>
                                    <input id="book_name" type="text" placeholder="Book Name" name="book_name" class="form-control" >
                                </div>
								<div class="form-group input-group-sm mb-2">
                                    <label for="pdf">Pdf Link</label>
                                    <input id="pdf" type="text" placeholder="Pdf Link" name="pdf" class="form-control" >
                                </div>
								<div class="form-group input-group-sm mb-2">
                                    <label for="software">Software Name</label>
                                    <input id="software" type="text" placeholder="Software Name" name="software" class="form-control" >
                                </div>

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
	<!-- edit -->
	<!-- Modal -->
	<div class="modal fade" id="edit1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle1" aria-hidden="true">
	  <div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLongTitle1">Edit SEMESTER COMPONENT</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
				  <span aria-hidden="true">&times;</span>
				</button>
			</div>
			<form action="{{action('Admin\Course_details\Course_detailsController@edit')}}" id="editCourseDetails" method="post" enctype="multipart/form-data">

                    {{csrf_field()}}
                 
					<input type="hidden" name="id">
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-12">
								 <div class="form-group input-group-sm mb-2">
                                    <label for="dept">Course Name</label>
                                    <select class="form-control" name="course_name">
                                        <option>select course</option>
                                        @foreach($course as $row)
                                            <option value="{{$row->id}}">{{$row->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group input-group-sm mb-2">
                                    <label for="dept">Department Name</label>
                                    <select class="form-control" name="deptID">
                                        <option>select Department</option>
                                        @foreach($department as $row)
                                            <option value="{{$row->id}}">{{$row->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group input-group-sm mb-2">
                                    <label for="dept">Semester</label>
                                    <select class="form-control" name="semester">
                                        <option>Semester</option>
                                        @foreach($semester as $row)
                                            <option value="{{$row->id}}">{{$row->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group input-group-sm mb-2">
                                    <label for="book_name">Book Name</label>
                                    <input id="book_name" type="text" placeholder="Book Name" name="book_name" class="form-control" >
                                </div>
								<div class="form-group input-group-sm mb-2">
                                    <label for="pdf">Pdf Link</label>
                                    <input id="pdf" type="text" placeholder="Pdf Link" name="pdf" class="form-control" >
                                </div>
								<div class="form-group input-group-sm mb-2">
                                    <label for="software">Software Name</label>
                                    <input id="software" type="text" placeholder="Software Name" name="software" class="form-control" >
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-sm btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-sm btn-primary">Save changes</button>
                    </div>
                </form>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
			</div>
		</div>
	  </div>
	</div>
@endsection