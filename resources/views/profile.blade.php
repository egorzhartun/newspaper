@extends('layouts.app')

@section('title', 'Newspaper')

@section('sidebar')
    @parent
@endsection

@section('content')

	<div class="container">
		<div class="row">
			<div class="col-md-9">
				<nav class="navbar navbar-expand-lg navbar-light bg-light">
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
							
							<li class="nav-item dropdown">
								<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								Dropdown
								</a>
								<div class="dropdown-menu" aria-labelledby="navbarDropdown">
									<a class="dropdown-item" href="#">Action</a>
									<a class="dropdown-item" href="#">Another action</a>
									<div class="dropdown-divider"></div>
									<a class="dropdown-item" href="#">Something else here</a>
								</div>
							</li>
						<li class="nav-item">
						<a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
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
						<a>Friends</a>
						</div>

						<div class="card-text">
						Tawshif is a web designer living in Bangladesh.
						</div>
					</div>

					<div class="card-footer">
						<small>Last updated 3 mins ago</small>
						<button class="btn btn-secondary float-right btn-sm">show</button>
					</div>
				</div>
			</div>
		</div>
	</div>

@endsection

@section('footer')
    @parent
@endsection