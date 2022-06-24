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
									<li class="breadcrumb-item active">Update Your Profile</li>
								</ul>
							</div>
						</div>
					</div>
                    <!-- /Page Header -->
                    <!--Back button-->
                    <div class="user-btn">
                        <a class="btn btn-primary shadow" href="{{ route('student.index') }}">Back</a>
                    </div>
                    <br>
                    <!--Back button-->
                    
                    <!-- Student Form-->
                    <div class="row">
						<div class="col-xl-6 d-flex">
							<div class="card flex-fill">
								<div class="card-header">
									<h4 class="card-title">Update Now</h4>
								</div>

							{{-- @if ($errors -> any())
							     @foreach ($errors -> all() as $err)
								 <p class="alert alert-warning">{{ $err }} <button class="close" data-dismiss="alert">&times;</button>
								</p>
							     @endforeach
							@endif --}}


								@if (Session::has('success'))
									<p class="alert alert-success">{{ Session::get('success') }}<button class="close" data-dismiss="alert">&times;</button></p>
								@endif


								<div class="card-body">
									<form action="{{ route('student.update', $student_edit -> id) }}" method="POST" enctype="multipart/form-data">
                                        @csrf
										<div class="form-group row">
											<label class="col-lg-3 col-form-label">Name</label>
											<div class="col-lg-9">
												<input name="name" type="text" value="{{ $student_edit -> name }}" class="form-control">
											</div>
										</div>
										<div class="form-group row">
											<label class="col-lg-3 col-form-label">Email</label>
											<div class="col-lg-9">
												<input name="email" type="text" value="{{ $student_edit -> email }}" class="form-control">
											</div>
										</div>
										<div class="form-group row">
											<label class="col-lg-3 col-form-label">Cell</label>
											<div class="col-lg-9">
												<input name="cell" type="text" value="{{ $student_edit -> cell }}" class="form-control">
											</div>
										</div>
										<div class="form-group row">
											<label class="col-lg-3 col-form-label">Username</label>
											<div class="col-lg-9">
												<input name="username" type="text" value="{{ $student_edit -> username }}" class="form-control">
											</div>
										</div>
										<div class="form-group row">
											<label class="col-lg-3 col-form-label">Department</label>
											<div class="col-lg-9">
												<select name="department" id="" class="form-select form-control">
                                                
                                                    <option @if ($student_edit -> department == 'Dep-2') selected @endif  value="Dep-2">Dep-2</option>
                                                    <option @if ($student_edit -> department == 'Dep-3') selected @endif value="Dep-3">Dep-3</option>
                                                    <option @if ($student_edit -> department == 'Dep-4') selected @endif value="Dep-4">Dep-4</option>
                                                    <option @if ($student_edit -> department == 'Dep-5') selected @endif value="Dep-5">Dep-5</option>
                                                </select>
											</div>
										</div>
                                        <div class="form-group row">
                                            <label class="col-lg-3 col-form-label">Gender</label>
                                            <div class="col-lg-9">
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="gender" id="gender_male" @if ($student_edit -> gender == 'Male') checked @endif value="Male" checked="">
                                                    <label class="form-check-label" for="gender_male">
                                                    Male
                                                    </label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="gender" id="gender_female" @if($student_edit -> gender == 'Female') checked @endif value="Female">
                                                    <label class="form-check-label" for="gender_female">
                                                    Female
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
										<div class="form-group row">
											<label class="col-lg-3 col-form-label">Courses</label>
											<div class="col-lg-9">

												@foreach ($edit_coures as $courses)
												  <input name="courses[]" @if ( in_array( $courses , json_decode( $student_edit -> courses )) ) checked @endif value="{{ $courses }}" type="checkbox">{{ $courses }}<br>
												@endforeach
											</div>
										</div>
										<div class="form-group row">
											<label class="col-lg-3 col-form-label">Photo</label>
											<div class="col-lg-9">
												<input name="new_photo" type="file" class="form-control">
												<input name="old_photo" value="{{ $student_edit -> photo }}" type="hidden" class="form-control">
												<br>
												<img class="w-100" src="{{ url('storage/student_photos', $student_edit -> photo) }}" alt="">
											</div>
										</div>
										<div class="text-right">
											<button name="submit" type="submit" class="btn btn-primary">Submit</button>
										</div>
									</form>
								</div>
							</div>
						</div>
					</div>
                    <!-- Student form-->

				</div>			
			</div>
			<!-- /Page Wrapper -->
		
        </div>
		<!-- /Main Wrapper -->
@endsection