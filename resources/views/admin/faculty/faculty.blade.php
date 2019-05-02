@extends('layouts.master_admin')
@extends('box.faculty.faculty')
@section('title')
    Faculty
@endsection
@section('content')			
	<div class="faculty_area">
		<div class="admin_body">
			<div class="add_faculty">
				<!-- Button trigger modal -->
				<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#createModal">
					<i class="fa fa-plus-circle"></i>&nbsp;Add faculty
				</button>
				
			</div>		
			<div class="faculty_list">
				<table class="table table-striped" id="dataTable">
					<thead class="thead-dark">
						<tr>
						  <th scope="col">s/n</th>
                          <th scope="col">image</th>
						  <th scope="col">name</th>
						  <th scope="col">email</th>
						  <th scope="col">gender</th>
						  <th scope="col">Phone</th>
						  <th scope="col">designation</th>
						  <th scope="col">department</th>
						  <th class="text-right">Action</th>
						</tr>
					</thead>
					<tbody>
                    @php
                        $i = 1;
                    @endphp
                    @foreach($table as $row)
						<tr>
							<th scope="row">{{$i++}}</th>
                            <td><img style="width: 100px; height: 40px;" src="{{asset('public/uploads/faculty/'.$row->image)}}" alt=""></td>
							<td>{{$row->name}}</td>
							<td>{{$row->email}}</td>
							<td>{{$row->gender}}</td>
							<td>{{$row->phone_no}}</td>
							<td>{{$row->designation}}</td>
							<td>{{$row->dept['name']}}</td>
                            <td class="text-right">
                                <!-- Button trigger modal -->
                                <button type="button" class="btn btn-sm btn-info" data-toggle="modal" data-target="#view">
                                    <i class="fa fa-eye"></i>
                                </button>
                                <a data-id="{{$row->id}}" data-name="{{$row->name}}"
                                    data-email="{{$row->email}}" data-gender="{{$row->gender}}" data-phone_no="{{$row->phone_no}}" data-designation="{{$row->designation}}" data-dept="{{$row->departmentID}}" data-image="{{asset('public/uploads/faculty/'.$row->image)}}" type="button" class="btn btn-sm btn-success editModal" data-toggle="modal" data-target="#edit1">
                                <i class="fa fa-edit"></i>
								</a>
                                <!-- Modal -->
                                <a href="{{action('Admin\Faculty\FacultyController@del',['id' => $row->id])}}" type="button"  class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></a>
                            </td>
						</tr>
                    @endforeach

					</tbody>
				</table>
			</div>
		</div>
	</div>
	@endsection
	@section('script')
   <script type="text/javascript">
       $(function () {
           $('.editModal').click(function () {
               var id = $(this).data('id');
               var name = $(this).data('name');
               var email = $(this).data('email');
               var gender = $(this).data('gender');
               var phone_no = $(this).data('phone_no');
               var designation = $(this).data('designation');
               var dept = $(this).data('dept');
               var img = $(this).data('image');

               $('#editFacultyForm [name=id]').val(id);
               $('#editFacultyForm [name=name]').val(name);
               $('#editFacultyForm [name=email]').val(email);
               $('#editFacultyForm [name=gender]').val(gender);
               $('#editFacultyForm [name=phone_no]').val(phone_no);
               $('#editFacultyForm [name=designation]').val(designation);
               $('#editFacultyForm [name=departmentID]').val(dept);
               $("#facultyID1").attr("src",img);

           });
       });
	   $(function () {
		   $('#dataTable').DataTable({
			   "order": [[ 0, "DESC" ]],
			   "iDisplayLength": 10,
			   "columnDefs": [
				   { "orderable": false, "targets": 5 }
			   ]
		   });
	   });
   </script>
@endsection