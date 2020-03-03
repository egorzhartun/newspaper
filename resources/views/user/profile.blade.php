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