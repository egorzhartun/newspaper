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
						<h5 class="card-title">{{ $articleOnID->title }} </h5>
						<h6 class="card-subtitle mb-2 text-muted">
							{{ Carbon\Carbon::parse($articleOnID->created_at)->diffForHumans()}}
						</h6>
						<p class="card-text">
							{!! $articleOnID->description !!}
						</p>

						<hr>

						<h5 class="card-title">Comments: </h5>

						<form method="post" action="{{ route('createarticle') }}">
							{{ csrf_field() }}

							<div class="form-group">
								<textarea class="form-control" id="description" name="description"></textarea>
							</div>

							<button type="submit" class="btn btn-light">Save</button>
						</form>

						<div class="media">
							<img src="https://picsum.photos/50/50/?random" class="mr-3" alt="...">

							<div class="media-body">
								<h5 class="mt-0">Media heading</h5>
								Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
							</div>
						</div>
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