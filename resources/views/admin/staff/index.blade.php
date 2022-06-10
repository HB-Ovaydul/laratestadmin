@extends('admin.layouts.app')
@section('main-content')
    	<!-- Main Wrapper -->
        <div class="main-wrapper">
	
			<!-- Page Wrapper -->
            <div class="page-wrapper">
			
                <div class="content container-fluid">
					
					<!-- Page Header -->
					<div class="page-header">
						<div class="row">
							<div class="col-sm-12">
								<h3 class="page-title">Welcome Staff!</h3>
								<ul class="breadcrumb">
									<li class="breadcrumb-item active">Staff</li>
								</ul>
							</div>
						</div>
					</div>
                    <!-- /Page Header -->

                    <!--Account Create button-->
                    <div class="user-btn">
                        <a class="btn btn-primary shadow" href="{{ route('staff.create') }}">Create A New Account</a>
                    </div>
                    <br>
                    <!--Account Create button-->

                    <!--All Student Table-->
                    <div class="row">
                        <div class="col-md-12">
                        
                            <!-- Recent Orders -->
                            <div class="card card-table">
                                <div class="card-header">
                                    <h4 class="card-title">All Staff Data 
                                    </h4>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-hover table-center mb-0">
                                            <thead>
                                                <tr>
                                                    <th>Name</th>
                                                    <th>Email</th>
                                                    <th>Cell</th>
                                                    <th>Department</th>
                                                    <th>gender</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <h2 class="table-avatar">
                                                            <a href="profile.html" class="avatar avatar-sm mr-2"><img class="avatar-img rounded-circle" src="{{ asset('admin/assets/img/doctors/doctor-thumb-01.jpg') }}" alt="User Image"></a>
                                                            <a href="profile.html">Dr. Ruby Perrin</a>
                                                        </h2>
                                                    </td>
                                                    <td>bhuiyan@gmail.com</td>
                                                    <td>07510886524</td>
                                                    <td>Department</td>
                                                    <td>Male</td>
                                                    <td>
                                                        <a class="btn btn-sm btn-info" href="{{ route('staff.show', 11) }}"><i class="fa fa-eye"></i></a>
                                                        <a class="btn btn-sm btn-danger" href="{{ route('staff.edit', 22) }}"><i class="fa fa-edit"></i></a>
                                                        <a class="btn btn-sm btn-warning" href="#"><i class="fa fa-trash"></i></a>
                                                    </td>

                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <!-- /Recent Orders -->
                            
                        </div>
                    </div>

                    <!--All Student Table-->

				</div>			
			</div>
			<!-- /Page Wrapper -->
		
        </div>
		<!-- /Main Wrapper -->
@endsection