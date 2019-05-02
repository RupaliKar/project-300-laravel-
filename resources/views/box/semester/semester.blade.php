@section('box')
<!-- Create Semester Modal -->
	 <div class="modal modal_zindex fade" id="createModal">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle"><i class="fa fa-edit"></i> Add Semester</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="{{action('Admin\Semester\SemesterController@save')}}" method="post" enctype="multipart/form-data">
						 {{csrf_field()}}

                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group input-group-sm mb-2">
									<label for="name">Semester Name</label>
									<input type="text" class="form-control" id="name" name="name" placeholder="Semester Name">
								</div>
								@if($errors->has('name'))
									<ul>
										<li style="color:red;">{{$errors->first('name')}}</li>
									</ul>
								@endif
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-sm btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-sm btn-primary">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

	
	<!-- Edit Modal -->
	<div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle1" aria-hidden="true">
	  <div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLongTitle1">EDIT SEMESTER</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
				  <span aria-hidden="true">&times;</span>
				</button>
			</div>
			<form action="{{action('Admin\Semester\SemesterController@edit')}}" id="editFacultyForm" method="post" enctype="multipart/form-data">
				{!! csrf_field() !!}
				<input type="hidden" name="id">

			<div class="modal-body">
				<div class="faculty_area">
					<div class="faculty_body">
							<div class="form-group input-group-sm mb-2">
								<label for="name">Name</label>
								<input type="text" class="form-control" id="name" name="name" placeholder="Semester Name">
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