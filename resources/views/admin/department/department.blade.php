@extends('layouts.master_admin')
@extends('box.department.department')
@section('title')
    Department
@endsection
@section('content')
    <div class="faculty_area">
        <div class="admin_body">
            <div class="add_faculty">
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#createModal">
                    <i class="fa fa-plus-circle"></i>&nbsp;Add department
                </button>
            </div>
            <div class="faculty_list">
                <table class="table table-striped" id="dataTable">
                    <thead class="thead-dark">
                    <tr>
                        <th scope="col">S/N</th>
                        <th scope="col">Image</th>
                        <th scope="col">Name</th>
                        <th scope="col">Total Credit</th>
                        <th scope="col">Duration</th>
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
                        <td><img style="width: 50px; height: 30px" src="{{asset('public/uploads/department/'.$row->image)}}" alt=""></td>
                        <td>{{$row->name}}</td>
                        <td>{{$row->total_credit}}</td>
                        <td>{{$row->duration}} years</td>
                        <td class="text-right">
                            <!-- Button trigger modal -->
                            <a type="button" class="btn btn-sm btn-success ediBtn" data-id="{{$row->id}}" data-credit="{{$row->total_credit}}" data-duration="{{$row->duration}}" data-name="{{$row->name}}" data-image="{{asset('public/uploads/department/'.$row->image)}}" data-toggle="modal" data-target="#ediModal">
                                <i class="fa fa-edit"></i>
                            </a>
                            <a href="{{action('Admin\Department\DepartmentController@del',['id' => $row->id])}}"  class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></a>
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
            $('.ediBtn').click(function () {
                var id = $(this).data('id');
                var name = $(this).data('name');
                var duration = $(this).data('duration');
                var credit = $(this).data('credit');
                var img = $(this).data('image');

                $('#ediForm [name=id]').val(id);
                $('#ediForm [name=name]').val(name);
                $('#ediForm [name=duration]').val(duration);
                $('#ediForm [name=credit]').val(credit);
                $("#deptImage1").attr("src", img);

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