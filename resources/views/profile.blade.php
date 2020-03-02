@extends('layouts.app')

@section('title', 'Newspaper')

@section('sidebar')
    @parent
@endsection

@section('content')

	<div class="container">
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
				<nav class="navbar navbar-expand-lg navbar-light" style="background-color: #e3f2fd;">
					<a class="navbar-brand" href="#">Menu</a>

					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
					</button>

					<div class="collapse navbar-collapse" id="navbarSupportedContent">
						<ul class="navbar-nav mr-auto">
							<li class="nav-item active">
								<a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
							</li>

							<li class="nav-item">
								<a class="nav-link" href="#">Link</a>
							</li>
						</ul>

					</div>
				</nav>

			</div>
			<div class="col-md-3">
				<div class="card">
					<img class="card-img-top" src="https://picsum.photos/200/150/?random">
					<div class="card-block">

						<figure class="profile">
							<img src="https://picsum.photos/200/150/?random" class="profile-avatar" alt="">
						</figure>

						<h4 class="card-title mt-3">{{$user->name}}</h4>

						<div class="meta">
						<a>Journalist</a>
						</div>

						<div class="card-text">
						add a description to your profile
						</div>
					</div>

					<div class="card-footer">
						<button class="btn btn-secondary float-right btn-sm">edit</button>
					</div>
				</div>
			</div>
		</div>
	</div>

@endsection

@section('footer')
    @parent
@endsection