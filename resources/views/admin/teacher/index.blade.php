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
								<h3 class="page-title">Welcome Teacher!</h3>
								<ul class="breadcrumb">
									<li class="breadcrumb-item active">Register</li>
								</ul>
							</div>
						</div>
					</div>
                    <!-- /Page Header -->

                    <!--Account Create button-->
                    <div class="user-btn">
                        <a class="btn btn-primary shadow" href="{{ route('teacher.create') }}">Create A New Account</a>
                    </div>
                    <br>
                    <!--Account Create button-->

                    <!--All Student Table-->
                    <div class="row">
                        <div class="col-md-12">
                        
                            <!-- Recent Orders -->
                            <div class="card card-table">
                                <div class="card-header">
                                    <h4 class="card-title">All Teacher Data 
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
                                                    <th>Username</th>
                                                    <th>Department</th>
                                                    <th>gender</th>
                                                    <th>Courses</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            @forelse ($all_teacher as $teacher)
                                            <tr>
                                                <td>
                                                    <h2 class="table-avatar">
                                                        <a href="profile.html" class="avatar avatar-sm mr-2"><img style="max-width: 100%;max-height:100%;object-fit:cover" class="avatar-img rounded-circle" src="{{ url('storage/teacher_img/', $teacher -> photo) }}" alt="User Image"></a>
                                                        <a href="profile.html">{{ $teacher -> name }}</a>
                                                    </h2>
                                                </td>
                                                <td>{{ $teacher -> email }}m</td>
                                                <td>{{ $teacher -> cell }}</td>
                                                <td>{{ $teacher -> username }}</td>
                                                <td>{{ $teacher -> department }}</td>
                                                <td>{{ $teacher -> gender }}</td>
                                                <td>
                                                    <ul>
                                                       @forelse ( json_decode($teacher -> courses) as $teachers)
                                                           <li>{{ $teachers }}</li>
                                                       @empty
                                                           <li>Empty</li>
                                                       @endforelse
                                                    </ul>
                                                </td>
                                                <td>
                                                    <a class="btn btn-sm btn-info" href="{{ route('teacher.show',  $teacher -> id ) }}"><i class="fa fa-eye"></i></a>
                                                    <a class="btn btn-sm btn-danger" href="{{ route('teacher.edit', 22) }}"><i class="fa fa-edit"></i></a>
                                                    <a class="btn btn-sm btn-warning" href="#"><i class="fa fa-trash"></i></a>
                                                </td>
                                            </tr>
                                            @empty
                                                
                                            @endforelse
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