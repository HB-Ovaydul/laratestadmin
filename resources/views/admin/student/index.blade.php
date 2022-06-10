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
								<h3 class="page-title">Welcome Student!</h3>
								<ul class="breadcrumb">
									<li class="breadcrumb-item active">Student</li>
								</ul>
							</div>
						</div>
					</div>
                    <!-- /Page Header -->

                    <!--Account Create button-->
                    <div class="user-btn">
                        <a class="btn btn-primary shadow" href="{{ route('student.create') }}">Create A New Account</a>
                    </div>
                    <br>
                    <!--Account Create button-->

                    <!--All Student Table-->
                    <div class="row">
                        <div class="col-md-12">
                        
                            <!-- Recent Orders -->
                            <div class="card card-table">
                                <div class="card-header">
                                    <h4 class="card-title">All Student Data 
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
                                                @forelse ($all_student as $student)
                                                <tr>
                                                    <td>
                                                        <h2 class="table-avatar">
                                                            <a href="{{ route('student.show', $student -> id) }}" class="avatar avatar-sm mr-2"><img style="max-width: 100%; max-height:100%; object-fit:cover" class="avatar-img rounded-circle" src="{{ url('storage/student_photos/', $student -> photo) }}" alt="User Image"></a>
                                                            <a href="{{ route('student.show', $student -> id) }}">{{ $student -> name }}</a>
                                                        </h2>
                                                    </td>
                                                    <td>{{ $student -> email }}</td>
                                                    <td>{{ $student -> cell }}</td>
                                                    <td>{{ $student -> username }}</td>
                                                    <td>{{ $student -> department }}</td>
                                                    <td>{{ $student -> gender }}</td>
                                                    <td>
                                                        <ol>
                                                            @forelse ( json_decode($student -> courses) as $students)
                                                                <li>{{ $students }}</li>
                                                            @empty
                                                                <li>No Coures found</li>
                                                            @endforelse
                                                        </ol>
                                                    </td>
                                                    <td>
                                                        <a class="btn btn-sm btn-info" href="{{ route('student.show', $student -> id) }}"><i class="fa fa-eye"></i></a>
                                                        <a class="btn btn-sm btn-danger" href="{{ route('student.edit', $student -> id) }}"><i class="fa fa-edit"></i></a>
                                                        <a class="btn btn-sm btn-warning delete-btn" href="{{ route('student.destroy', $student -> id ) }}"><i class="fa fa-trash"></i></a>
                                                    </td>
                                                </tr>
                                                @empty
                                                    <tr>
                                                        <td colspan="9" class="text-center bg-dark text-light">Empty</td>
                                                    </tr>
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