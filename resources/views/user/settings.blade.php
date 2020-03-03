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
				<div class="card" style="margin-top: 10px;">
					<div class="card-body">
						<h5 class="card-title">Your settings</h5>
						<p class="card-text">We recommend that you provide genuine data for future use of the service. In case of any problems, the data is not restored.</p>

						<form>
							<div class="form-group">
								<label for="exampleFormControlInput1">Email address</label>
								<input type="email" class="form-control" id="exampleFormControlInput1" value="{{$user->email}}">
							</div>

							<div class="form-group">
								<label for="exampleFormControlTextarea1">About me</label>
								<textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
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