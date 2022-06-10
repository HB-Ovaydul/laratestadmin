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
         <div class="col-sm-4">
            <h3 class="page-title">Welcome Student!</h3>
            <ul class="breadcrumb">
                <li class="breadcrumb-item active">profile</li>
         </ul>
         <br>
         <br>
         <div class="user-btn">
            <a class="btn btn-primary shadow" href="{{ route('student.index') }}">Back</a>
        </div>
        </div>

            <div class="col-md-8">
        <!--Profile-->
                <div class="user profile">
                    <div class="card w-50 mx-auto shadow">
                        <div class="card-body">
                            <div class="card-avater">
                                <img style="max-height: 100%; max-width:100%; object-fit:cover;"  class="avatar-xxl rounded-circle shadow border-10 border border-primary" src="{{ url('storage/student_photos/', $single_student -> photo) }}" alt="">
                            </div>
                            <br>
                            <div class="card-user">
                                <h6>Name:</h6> <span>{{ $single_student -> name }}</span>
                                <h6>Email:</h6> <span>{{ $single_student -> email }}</span>
                                <h6>Cell:</h6> <span>{{ $single_student -> cell }}</span>
                                <h6>Username:</h6> <span>{{ $single_student -> username }}</span>
                                <h6>Department:</h6> <span>{{ $single_student -> department }}</span>
                                <h6>Gender:</h6> <span>{{ $single_student -> gender }}</span>
                                
                                <h6>Courses:</h6> 
                                <span><ol>
                                    @forelse (json_decode($single_student -> courses) as $single)
                                        <li>{{ $single }}</li>
                                    @empty
                                        <li>No Course</li>
                                    @endforelse
                                </ol></span>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
 <!--Profile-->
</div>
</div>
</div>
<!-- /Page Header -->
    
</div>			
</div>

<!-- /Page Wrapper -->
            
</div>
 <!-- /Main Wrapper -->
@endsection