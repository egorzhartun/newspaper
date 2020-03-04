@extends('user.index')

@section('title', $user->name)


@section('content')


	<div style="margin-top: 10px;" class="container">
		@if (\Session::has('success'))
			<div class="alert alert-warning alert-dismissible fade show" role="alert">
				<strong>You have successfully registered!</strong> {!! \Session::get('success') !!}
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
		@endif
		<div class="row">
			<div class="col-md-9">

				@include('user.menu')

				<!--FORM SETTINGS -->
				<div class="card" style="margin: 1rem 0rem;">
					<div class="card-body">
						<h5 class="card-title">Your settings</h5>
						<p class="card-text">We recommend that you provide genuine data for future use of the service. In case of any problems, the data is not restored.</p>

						<form>
							<div class="form-group">
								<label for="exampleFormControlInput1">Email address</label>
								<input type="email" class="form-control" id="exampleFormControlInput1" value="{{$user->email}}">
							</div>

							<div class="form-group">
								<label for="validationCustom04">Activities</label>

								<select class="custom-select" id="validationCustom04" required>
									<option selected disabled value="">Choose...</option>
									<option>Journalist</option>
									<option>Blogger</option>
									<option>Correspondent</option>
									<option>Writer</option>
									<option>Musician</option>
									<option>Scientist</option>
								</select>

								<div class="invalid-feedback">
								Please select a valid activity.
								</div>
							</div>

							<div class="form-group">
								<label for="exampleFormControlTextarea1">About me</label>
								<textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
							</div>

							<div class="form-row">
								<div class="form-group col-md-6">
									<label for="inputCity">City</label>

									<input type="text" class="form-control" id="inputCity">
								</div>

								<div class="form-group col-md-6">
									<label for="inputState">State</label>
										<select id="inputState" class="form-control">
											<option selected>Choose...</option>
											<option>...</option>
										</select>
								</div>

							</div>

							<div class="form-group">
								<label for="exampleFormControlFile1">Add your photo</label>
								<input type="file" class="form-control-file" id="exampleFormControlFile1">
							</div>

							<div class="form-group">
								<div class="form-check">
									<input class="form-check-input" type="checkbox" id="gridCheck">

										<label class="form-check-label" for="gridCheck">
											Close profile
										</label>

										<small id="passwordHelpInline" class="text-muted">
											(other users will not be able to view your profile)
										</small>
								</div>
							</div>

							<button type="button" class="btn btn-light">Save</button>
						</form>

					</div>
				</div>


			</div>
			<div class="col-md-3">
				@include('user.usercard')
			</div>
		</div>
	</div>


@endsection

@section('footer')
    @parent
@endsection