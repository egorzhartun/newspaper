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
		<a class="btn btn-secondary float-right btn-sm" href="{{route('settings')}}">edit</a>
	</div>
</div>