Current:
@if ($viewModel->isLogin())
Login
@else
Logout
@endif

<br>

@if ($viewModel->isLogin())
<a href="{{action('AuthController@logout')}}">Logout</a>
@else
<a href="{{action('AuthController@login')}}">Login</a>
@endif
