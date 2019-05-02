@section('box')
    <!-- Modal -->
    <div class="modal modal_zindex fade" id="createModal">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle"><i class="fa fa-plus-square"></i> Add Department</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="{{action('Admin\Department\DepartmentController@save')}}" method="post" enctype="multipart/form-data">
                    {{csrf_field()}}
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group input-group-sm mb-2">
                                    <label for="dept">Department</label>
                                    <input id="dept" type="text" placeholder="Department Name" name="name" class="form-control" >
                                </div>
								@if($errors->has('name'))
									<ul>
										<li style="color:red;">{{$errors->first('name')}}</li>
									</ul>
								@endif
                                <div class="form-group input-group-sm mb-2">
                                    <label for="duration">Duration</label>
                                    <input id="duration" type="text" placeholder="Duration" name="duration" class="form-control" >
                                </div>
								@if($errors->has('duration'))
									<ul>
										<li style="color:red;">{{$errors->first('duration')}}</li>
									</ul>
								@endif
                                <div class="form-group input-group-sm mb-2">
                                    <label for="duration">Total Credit</label>
                                    <input id="credit" type="text" placeholder="Credit" name="credit" class="form-control" >
                                </div>
                                <div class="form-group input-group-sm mb-2">
                                    <label for="image">Image</label>
                                    <input onchange="document.getElementById('deptImage').src = window.URL.createObjectURL(this.files[0])" type="file" placeholder="Image" name="image" class="form-control" >
                                </div>
                                <img style="height: 200px; width: 400px; margin-top: 10px" id="deptImage" alt="your image" />
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


    <!--Edit Modal -->
    <div class="modal fade" id="ediModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle1" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle1">Edit department</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="{{action('Admin\Department\DepartmentController@edit')}}" id="ediForm" method="post" enctype="multipart/form-data">
                    {{csrf_field()}}
                    <input type="hidden" name="id">
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group input-group-sm mb-2">
                                    <label for="dept">Department</label>
                                    <input id="dept" type="text" placeholder="Department Name" name="name" class="form-control" >
                                </div>
                                <div class="form-group input-group-sm mb-2">
                                    <label for="duration1">Duration</label>
                                    <input id="duration1" type="text" placeholder="Duration" name="duration" class="form-control" >
                                </div>
                                <div class="form-group input-group-sm mb-2">
                                    <label for="credit1">Total Credit</label>
                                    <input id="credit1" type="text" placeholder="Credit" name="credit" class="form-control" >
                                </div>
                                <div class="form-group input-group-sm mb-2">
                                    <label for="image">Image</label>
                                    <input onchange="document.getElementById('deptImage1').src = window.URL.createObjectURL(this.files[0])" type="file" placeholder="Image" name="image" class="form-control" >
                                </div>
                                    <img id="deptImage1" alt="your image" width="300" height="200" />
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