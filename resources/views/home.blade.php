@extends('layouts.app')

@section('title', 'Newspaper')

@section('sidebar')
    @parent
@endsection

@section('content')
	<div class="jumbotron">
		<h1 class="display-4">Newspaper</h1>
		<p class="lead">The New York Times, morning daily newspaper published in New York City, long the newspaper of record in the United States and one of the world's great newspapers. Its strength is in its editorial excellence; it has never been the largest newspaper in terms of circulation.</p>
		<hr class="my-4">
		<p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
		<a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a>
@if (\Session::has('success'))
    <div class="alert alert-success">
        <ul>
            <li>{!! \Session::get('success') !!}</li>
        </ul>
    </div>
@endif

	</div>

	<div class="row">
		<div class="col-md-4">
			<div class="card bg-light mb-3">
				<div class="card-header">Header</div>
				<div class="card-body">
					<h5 class="card-title">Light card title</h5>
					<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
				</div>
			</div>
		</div>

		<div class="col-md-4">
			<div class="card bg-light mb-3">
				<div class="card-header">Header</div>
				<div class="card-body">
					<h5 class="card-title">Light card title</h5>
					<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
				</div>
			</div>
		</div>

		<div class="col-md-4">
			<div class="card bg-light mb-3">
				<div class="card-header">Header</div>
				<div class="card-body">
					<h5 class="card-title">Light card title</h5>
					<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
				</div>
			</div>
		</div>
	</div>


@endsection

@section('footer')
    @parent
@endsection