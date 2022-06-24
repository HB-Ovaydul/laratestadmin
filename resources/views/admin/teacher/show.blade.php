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
                                        <li class="breadcrumb-item active">profile</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- /Page Header -->
    
                        <!--Back button-->
                        <div class="user-btn">
                            <a  class="btn btn-primary shadow mx-auto" href="{{ route('teacher.index', $teacher_data -> id) }}">Back</a>
                        </div>
                        <br>
                        <!--back button-->
    
    <!--Profile-->
    1 <div class="user profile">
        <div class="card w-50 mx-auto shadow">
            <div class="card-body">
                <div class="card-avater">
                    <img style="max-height: 100%; max-width:100%; object-fit:cover;"  class="avatar-xxl rounded-circle shadow border-10 border border-primary" src="{{ url('admin/assets/img/profiles/hb_ovaydul.jpg') }}" alt="">
                </div>
                <div class="card-user">
                    <h2>{{ $teacher_data -> name }}</h2>
                    <h4>{{ $teacher_data -> cell }}</h4>
                    <h4>{{ $teacher_data -> email }}</h4>
                    <h4>{{ $teacher_data -> username }}</h4>
                    <h4>{{ $teacher_data -> department }}</h4>
                    <h4>{{ $teacher_data -> gender }}</h4>
                    @forelse (json_decode($teacher_data -> courses) as $teachers)
                        <li>{{ $teachers }}</li>
                    @empty
                        <li>empty!</li>
                    @endforelse
                </div>
            </div>
        </div>
     </div>
 <!--Profile-->
</div>			
</div>

<!-- /Page Wrapper -->
            
</div>
 <!-- /Main Wrapper -->
@endsection