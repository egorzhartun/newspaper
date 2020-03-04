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

					@if (count($articles) === 0)

						<div style="margin-top: 10px;" class="jumbotron">
							<h1 class="display-4">Hello, {{ $user->name }}</h1>
								<p class="lead">Now you can interact with other users, but initially we recommend that you fill out information about yourself.</p>
								<hr class="my-4">
								<p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
								<a class="btn btn-primary btn-lg" href="{{ route('article') }}" role="button">Add article</a>
						</div>

					@elseif (count($articles) > 0)

						@foreach ($articles as $myArticle)
							<div class="card" style="margin: 1rem 0rem;">
								<div class="card-body">
									<h5 class="card-title">{{ $myArticle->title }} </h5>
									<h6 class="card-subtitle mb-2 text-muted">
										{{ Carbon\Carbon::parse($myArticle->created_at)->diffForHumans()}}
									</h6>
									<p class="card-text">
										{!! str_limit($myArticle->description, $limit = 500, $end = '...') !!}
									</p>
									<a href="{{route('articleOnID', $myArticle->id)}}" class="card-link">Show more</a>
									<a href="{{ route('articleOnIDs', $myArticle->id)}}" class="card-link">
										<i class="fas fa-heart"></i>
									</a>
								</div>
							</div>
						@endforeach
					@endif
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