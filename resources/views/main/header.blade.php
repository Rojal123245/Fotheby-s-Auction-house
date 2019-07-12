<?php 


if(!$_SESSION['useremail']){
	return redirect('/');
}

?>
<div id="preloder">
	<div class="loader">
		<img src="lib/img/logo.svg" alt="">
		<h2><i class="fa fa-gavel"></i>&nbsp;Loading.....</h2>
	</div>
</div>

<header class="header-section">
	<div class="logo">
		<img src="lib/img/logo.svg" alt=""><!-- Logo -->
	</div>
	<!-- Navigation -->

	<nav>
		<ul class="menu-list">
			<li class="active"><a href="">Home</a></li>
			@if(!$_SESSION['useremail'])
			<li><a href="{{ route('userlogin')}}">login</a></li>
			<li><a href="{{ route('userRegistration')}}">Register</a></li>
			@else
			<li><a href="{{route('gallery')}}"><i class="fa fa-camera"></i> Gallery</a></li>
			<li><i class="fa fa-user"></i>&nbsp;<?php echo $_SESSION['useremail']; ?></li>
			<li><a href="{{ route('logout') }}">Logout<i class="fa fa-sign-out"></i></a></li>
			<li>
				{{ Form::open(['route'=>'search', 'name' => 'frmsearch', 'style' => 'display: inline']) }}
				<input type="text" name="search"  class="form-control search" style="display: inherit;" placeholder="Search..">
				{{ Form::submit(__('Submit'), ['class' => 'btn btn-primary']) }}
				{{ Form::close() }}
				
			
		</li>

		@endif
	</ul>
</nav>
</header>