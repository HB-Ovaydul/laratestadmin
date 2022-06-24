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
									<li class="breadcrumb-item active">Sign Up</li>
								</ul>
							</div>
						</div>
					</div>
                    <!-- /Page Header -->
                    <!--Back button-->
                    <div class="user-btn">
                        <a class="btn btn-primary shadow" href="{{ route('teacher.index') }}">Back</a>
                    </div>
                    <br>
                    <!--Back button-->
                    
                    <!-- Student Form-->
                    <div class="row">
						<div class="col-xl-6 d-flex">
							<div class="card flex-fill">
								<div class="card-header">
									<h4 class="card-title">Register Now</h4>
								</div>
								<div class="card-body">
									@if ($errors -> any())
										<p class="alert alert-warning">{{ $errors -> first() }} <button class="close" data-dismiss="alert">&times;</button> </p>
									@endif

							 	@if ($errors -> any())
									     @foreach ($errors -> all() as $err)
										     <p class="alert alert-warning">{{ $err }} <button class="close" data-dismiss="alert">&times;</button> </p>
									     @endforeach
									@endif

									<!--Account Success Alert-->

									@if (Session::has('success'))
									   <p class="alert alert-warning">{{ Session::get('success') }} <button class="close" data-dismiss="alert">&times;</button> </p>
									@endif


									<form action="{{ route('teacher.store') }}" method="POST" enctype="multipart/form-data">
                                        @csrf
										<div class="form-group row">
											<label class="col-lg-3 col-form-label">Name</label>
											<div class="col-lg-9">
												<input  name="name" type="text" {{ old('name')}} class="form-control">
												@error('name')
													<p class="text-danger">* Required!</p>
												@enderror
											</div>
										</div>
										<div class="form-group row">
											<label class="col-lg-3 col-form-label">Email</label>
											<div class="col-lg-9">
												<input name="email" type="text" {{ old('email')}} 
												class="form-control">
												@error('email')
												<p class="text-danger">* Required!</p>
											   @enderror
											</div>
										</div>
										<div class="form-group row">
											<label class="col-lg-3 col-form-label">Cell</label>
											<div class="col-lg-9">
												<input name="cell" type="text" {{ old('cell')}} class="form-control">
												@error('cell')
												<p class="text-danger">* Required!</p>
											   @enderror
											</div>
										</div>
										<div class="form-group row">
											<label class="col-lg-3 col-form-label">Username</label>
											<div class="col-lg-9">
												<input name="username" type="text" {{ old('username')}} class="form-control">
											</div>
										</div>
										<div class="form-group row">
											<label class="col-lg-3 col-form-label">Department</label>
											<div class="col-lg-9">
												<select name="department" id="" class="form-select form-control">
                                                    <option value="">-Select-</option>
                                                    <option value="Dep-2">Dep-2</option>
                                                    <option value="Dep-3">Dep-3</option>
                                                    <option value="Dep-4">Dep-4</option>
                                                    <option value="Dep-5">Dep-5</option>
                                                </select>
											</div>
										</div>
                                        <div class="form-group row">
                                            <label class="col-lg-3 col-form-label">Gender</label>
                                            <div class="col-lg-9">
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="gender" id="gender_male" value="Male" checked="">
                                                    <label class="form-check-label" for="gender_male">
                                                    Male
                                                    </label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="gender" id="gender_female" value="Female">
                                                    <label class="form-check-label" for="gender_female">
                                                    Female
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
										<div class="form-group row">
											<label class="col-lg-3 col-form-label">Photo</label>
											<div class="col-lg-9">
												<input name="photo" type="file" class="form-control">
											</div>
										</div>
										<div class="form-group row">
											<label class="col-lg-3 col-form-label">Courses</label>
											<div class="col-lg-9">
												<input name="courses[]" value="php" type="checkbox">php <br>
												<input name="courses[]" value="phython" type="checkbox">phython <br>
												<input name="courses[]" value="java" type="checkbox">java <br>
												<input name="courses[]" value="laravel" type="checkbox">laravel <br>
												<input name="courses[]" value="rect" type="checkbox">rect <br>
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