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
									<li class="breadcrumb-item active">Sign Up</li>
								</ul>
							</div>
						</div>
					</div>
                    <!-- /Page Header -->
                    <!--Back button-->
                    <div class="user-btn">
                        <a class="btn btn-primary shadow" href="{{ route('staff.index') }}">Back</a>
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
									<form action="{{ route('staff.store') }}" method="POST" enctype="multipart/form-data">
                                        @csrf
										<div class="form-group row">
											<label class="col-lg-3 col-form-label">Name</label>
											<div class="col-lg-9">
												<input name="name" type="text" {{ old('name')}} class="form-control">
											</div>
										</div>
										<div class="form-group row">
											<label class="col-lg-3 col-form-label">Email</label>
											<div class="col-lg-9">
												<input name="email" type="text" {{ old('email')}} class="form-control">
											</div>
										</div>
										<div class="form-group row">
											<label class="col-lg-3 col-form-label">Cell</label>
											<div class="col-lg-9">
												<input name="cell" type="text" {{ old('cell')}} class="form-control">
											</div>
										</div>
										<div class="form-group row">
											<label class="col-lg-3 col-form-label">Department</label>
											<div class="col-lg-9">
												<select name="dep" id="" class="form-select form-control">
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
                                                    <input class="form-check-input" type="radio" name="gender" id="gender_male" value="option1" checked="">
                                                    <label class="form-check-label" for="gender_male">
                                                    Male
                                                    </label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="gender" id="gender_female" value="option2">
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