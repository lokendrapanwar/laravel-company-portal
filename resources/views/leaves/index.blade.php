@extends('layouts.app')

@section('content')			

<!-- Page Content -->
<div class="content container-fluid">

    <!-- Page Header -->
    <div class="page-header">
        <div class="row align-items-center">
            <div class="col">
                <h3 class="page-title">Leaves</h3>
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                    <li class="breadcrumb-item active">Leaves</li>
                </ul>
            </div>
            <div class="col-auto float-right ml-auto">
                <a href="{{url('leaves/create')}}" class="btn add-btn"><i class="fa fa-plus"></i> Add Leave</a>
            </div>
        </div>
    </div>
    <!-- /Page Header -->

    <div class="row">
        <div class="col-md-12">
			<div class="table-responsive"> 
				<table class="table table-striped custom-table mb-0 datatable">
                    <thead>
                        <tr>
                            <th>Leave Type</th>
                            <th>From</th>
                            <th>To</th>
                            <th>No of Days</th>
                            <th>Reason</th>
                            <th class="text-center">Status</th>
                            <th>Approved by</th>
                            <th class="text-right">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($leaves as $leave)
                        <tr>
                            <td>{{$leave->leave_type}}</td>
                            <td>{{$leave->from_date}}</td>
                            <td>{{$leave->to_date}}</td>
                            <td>{{$leave->number_of_days}}</td>
                            <td>{{$leave->leave_reason}}</td>
                            <td class="text-center">
                                <div class="action-label">
                                    <a class="btn btn-white btn-sm btn-rounded" href="javascript:void(0);">
                                        <i class="fa fa-dot-circle-o text-purple"></i> New
                                    </a>
                                </div>
                            </td>
                            <td>
                                <h2 class="table-avatar">
                                    <a href="profile.html" class="avatar avatar-xs"><img src="assets/img/profiles/avatar-09.jpg" alt=""></a>
                                    <a href="#">Richard Miles</a>
                                </h2>
                            </td>
                            <td class="text-right">
                                <div class="dropdown dropdown-action">
                                    <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a class="dropdown-item" href="#" data-toggle="modal" data-target="#edit_leave"><i class="fa fa-pencil m-r-5"></i> Edit</a>
                                        <a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete_approve"><i class="fa fa-trash-o m-r-5"></i> Delete</a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<!-- /Page Content -->
@endsection