@extends('layouts.master_admin')
@extends('box.course.course')
@section('title')
    Course
@endsection
@section('content')
				<div class="faculty_area">
					<div class="admin_body">
						<div class="add_faculty">
							<!-- Button trigger modal -->
							<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#createModal">
								<i class="fa fa-plus-circle"></i>&nbsp;Add Course
							</button>
						</div>		
						<div class="faculty_list">
							<table class="table table-striped" id="dataTable">
								<thead class="thead-dark">
								<tr>
									<th scope="col">id</th>
									<th scope="col">Course Name</th>
									<th scope="col">Course Code</th>
									<th scope="col">Course Credit</th>
									<th scope="col">DepartmentName</th>
									<th scope="col">SemesterName</th>
									<th class="text-right" scope="col">Action</th>
								</tr>
								</thead>
								<tbody>
								 @php
									$i = 1;
								@endphp
								@foreach($table as $row)
								<tr>
									<th scope="row">{{$row->id}}</th>
									<td>{{$row->name}}</td>
									<td>{{$row->course_code}}</td>
									<td>{{$row->course_credit}}</td>
									<td>{{$row->dept['name']}}</td>
									<td>{{$row->semester['name']}}</td>
									<td class="text-right">
										<!-- Button trigger modal -->
										<a data-id="{{$row->id}}" data-name="{{$row->name}}"
											data-course_code="{{$row->course_code}}" data-course_credit="{{$row->course_credit}}" data-dept="{{$row->deptID}}" data-semester="{{$row->semesterID}}" type="button" class="btn btn-sm btn-success editModal" data-toggle="modal" data-target="#exampleModalLong1">
											<i class="fa fa-edit"></i>
										</a>
										<a href="{{action('Admin\Course\CourseController@del',['id' => $row->id])}}" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></a>
									</td>
								</tr>
									@endforeach
								</tbody>
							</table>
						</div>
					</div>
				</div>
@endsection('content')
@section('script')
    <script type="text/javascript">
	
	$(function () {
           $('.editModal').click(function () {
               var id = $(this).data('id');
               var name = $(this).data('name');
               var course_code = $(this).data('course_code');
               var course_credit = $(this).data('course_credit');
               var dept = $(this).data('dept');
               var semester = $(this).data('semester');

               $('#editCourse [name=id]').val(id);
               $('#editCourse [name=name]').val(name);
               $('#editCourse [name=course_code]').val(course_code);
               $('#editCourse [name=course_credit]').val(course_credit);
               $('#editCourse [name=deptID]').val(dept);
               $('#editCourse [name=semesterID]').val(semester);

           });
       });
		
        $(function () {
            $('#dataTable').DataTable({
                "order": [[ 0, "DESC" ]],
                "iDisplayLength": 25,
                "columnDefs": [
                    { "orderable": false, "targets": 5 }
                ]
            });
        });
    </script>
@endsection