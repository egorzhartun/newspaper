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
						<h5 class="card-title">Create article</h5>

						<form method="post" action="{{ route('createarticle') }}">
							{{ csrf_field() }}

							<div class="form-group">
								<input type="text" class="form-control" name="title" placeholder="Title">
							</div>

							<div class="form-group">
								<textarea class="form-control" id="description" name="description"></textarea>
							</div>

							<button type="submit" class="btn btn-light">Save</button>
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