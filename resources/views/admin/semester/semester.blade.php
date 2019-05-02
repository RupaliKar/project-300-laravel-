@extends('layouts.master_admin')
@extends('box.semester.semester')
@section('title')
    Semester
@endsection
@section('content')
<div class="faculty_area">
	<div class="admin_body">
		<div class="add_faculty">
			<!-- Button trigger modal -->
			<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#createModal">
				<i class="fa fa-plus-circle"></i>&nbsp; Add Semester
			</button>
			
		</div>		
		<div class="faculty_list">
			<table class="table table-striped" id="dataTable">
				<thead class="thead-dark">
					<tr>
					  <th scope="col">id</th>
					  <th scope="col">Name</th>
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
						<td>{{$row->name}}</td>
						<td class="text-right">
							<!-- Button trigger modal -->
							<a data-id="{{$row->id}}" data-name="{{$row->name}}" type="button" class="btn btn-sm btn-success editModal" data-toggle="modal" data-target="#editModal">
                                <i class="fa fa-edit"></i>
							</a>
							<a href="{{action('Admin\Semester\SemesterController@del',['id' => $row->id])}}" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></a>
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

               $('#editFacultyForm [name=id]').val(id);
               $('#editFacultyForm [name=name]').val(name);
               $('#editFacultyForm [name=deptID]').val(dept);

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