@extends('layouts.master_admin')
@extends('box.course_details.course_details')
@section('title')
    Course Details
@endsection
@section('content')
				<div class="faculty_area">
					<div class="admin_body">
						<div class="add_faculty">
							<!-- Button trigger modal -->
							<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#createModal">
								Add Semester Component
							</button>
							
						</div>		
						<div class="faculty_list">
							<table class="table" id="dataTable">
								<thead class="thead-dark">
									<tr>
									  <th scope="col">id</th>
									  <th scope="col">Course Name</th>
									  <th scope="col">Book Name</th>
									  <th scope="col">pdf</th>
									  <th scope="col">slide</th>
									  <th scope="col">software Download</th>
									  <th scope="col">DepartmentName</th>
									  <th scope="col">SemesterName</th>
									  <th scope="col">Action</th>
									</tr>
								</thead>
								<tbody>
								 @php
									$i = 1;
								@endphp
								@foreach($table as $row)
									<tr>
										<th scope="row">{{$i++}}</th>
										<td>{{$row->course['name']}}</td>
										<td>{{$row->book_name}}</td>
										<td><a href="">{{$row->pdf}}</a></td>
										<td><a href="">{{$row->slide}}</a></td>
										<td><a href="">{{$row->software}}</a></td>
										<td>{{$row->dept['name']}}</td>
										<td>{{$row->semester['name']}}</td>
										
										
										<td>
											<a data-id="{{$row->id}}" data-name="{{$row->course_name}}"
												data-dept="{{$row->deptID}}" data-semest="{{$row->semester}}"  data-book_name="{{$row->book_name}}" data-pdf="{{$row->pdf}}" data-software="{{$row->software}}" type="button" class="btn btn-sm btn-success editModal" data-toggle="modal" data-target="#edit1">
											<i class="fa fa-edit"></i>
											</a>
											
											<a href="{{action('Admin\Course_details\Course_detailsController@del',['id' => $row->id])}}" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></a>
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
               var dept = $(this).data('dept');
               var semest = $(this).data('semest');
               var book_name = $(this).data('book_name');
               var pdf = $(this).data('pdf');
               var software = $(this).data('software');

               $('#editCourseDetails [name=id]').val(id);
               $('#editCourseDetails [name=course_name]').val(name);
               $('#editCourseDetails [name=deptID]').val(dept);
               $('#editCourseDetails [name=semester]').val(semest);
               $('#editCourseDetails [name=book_name]').val(book_name);
               $('#editCourseDetails [name=pdf]').val(pdf);
               $('#editCourseDetails [name=software]').val(software);
              

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