@extends('layouts.app')

@section('content')
 <!-- Page Heading -->
 <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Employers</h1>
    <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
            class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
</div>

<!-- Content Row -->
<div class="row">
    <div class="card shadow mb-4 col-12">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Employers List</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Employeer #</th>
                            <th>Name</th>
                            <th>Is Manager</th>
                            <th>Branch</th>
                            <th>Designation</th>
                            <th>Contact Number</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>Employeer #</th>
                            <th>Name</th>
                            <th>Is Manager</th>
                            <th>Branch</th>
                            <th>Designation</th>
                            <th>Contact Number</th>
                            <th>Action</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        @foreach ($employers as $employer)
                        <tr>
                            <td>{{$employer->employee_no ?: 'N/A'}}</td>
                            <td>{{$employer->user}}</td>
                            <td>{{$employer->is_manager ? 'YES' : 'NO'}}</td>
                            <td>{{$employer->branch}}</td>
                            <td>{{$employer->designation}}</td>
                            <td>{{$employer->contact_no ?: 'N/A'}}</td>
                            <td>
                                <a href="" class="btn btn-primary btn-sm">Edit </a> |
                                <a href="" class="btn btn-danger btn-sm">Delete</a>
                            </td>
                        </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection

@section('script')
    <script>
        $(document).ready(function() {
            $('#dataTable').DataTable();
        });
    </script>
@endsection
