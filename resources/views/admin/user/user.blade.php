@extends('layouts.master_admin')
@extends('box.user.user')
@section('title')
    User List
@endsection
@section('content')
    <div class="faculty_area">
        <div class="admin_body">
            <div class="search_area">
                <h2>All User List</h2>
            </div>
            <div class="faculty_list">
                <table class="table table-striped" id="dataTable">
                    <thead class="thead-dark">
                    <tr>
                        <th scope="col">S/N</th>
                        <th scope="col">Name</th>
                        <th scope="col">User Roll</th>
                        <th class="text-right" scope="col">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($table as $row)
                        <tr>
                            <th scope="row">{{$row->id}}</th>
                            <td>{{$row->name}}</td>
                            <td>{{$row->userType}}</td>
                            <td class="text-right">
                                <!-- Button trigger modal -->
                                <a type="button" class="btn btn-sm btn-success ediBtn" data-id="{{$row->id}}" data-roll="{{$row->userType}}" data-toggle="modal" data-target="#ediModal">
                                    <i class="fa fa-edit"></i>
                                </a>
                                <a href="{{action('Admin\User\UserController@del',['id' => $row->id])}}" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></a>
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
                var roll = $(this).data('roll');

                $('#ediForm [name=id]').val(id);
                $('#ediForm [name=userType]').val(roll);

            });
        });
		
        $(function () {
            $('#dataTable').DataTable({
                "order": [[ 0, "DESC" ]],
                "iDisplayLength": 25,
                "columnDefs": [
                    { "orderable": false, "targets": [4]}//For Column Order
                ]
            });
        });

    </script>
@endsection