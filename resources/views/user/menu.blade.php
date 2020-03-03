<nav class="navbar navbar-expand-lg navbar-light" style="background-color: #e3f2fd;">
	<a class="navbar-brand" href="#">Menu</a>

	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
	<span class="navbar-toggler-icon"></span>
	</button>

	<div class="collapse navbar-collapse" id="navbarSupportedContent">
		<ul class="navbar-nav mr-auto">
			<li class="nav-item">
				<a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
			</li>

			<li class="nav-item">
				<a class="nav-link" href="#">Messages <span class="sr-only">(current)</span></a>
			</li>
		</ul>

        <ul class="navbar-nav">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Your profile
                </a>

                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="{{ route('profile') }}">Profile</a>
                    <a class="dropdown-item" href="{{ route('settings') }}">Settings</a>
                    <div class="dropdown-divider"></div>
                    <form style="margin: 0 !important;" method="post" action="{{ action('ProfileUser@logoutProfile') }}">
                        {{ csrf_field() }}
                        <button class="btn btn-link dropdown-item" type="submit" name="logout">Exit</button>
                    </form>
                </div>
            </li>
        </ul>
	</div>
</nav>