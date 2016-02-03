<!DOCTYPE html>
<html>
<head>
	<title></title>
	{!! Html::style("login/css/bootstrap.min.css") !!}
	{!! Html::style("login/css/forget.css") !!}

    {!! Html::style("login/assets/ico/favicon.png") !!}
    {!! Html::style("login/assets/font-awesome/css/font-awesome.min.css") !!}
</head>
<body>
	<div class = "container">
		{!! Form::open(["url" => "/password/reset"]) !!}
		{!! Form::hidden("token", $token) !!}

		<table class = "table" style= "width: 50%; margin: 0 auto;">
			@if (count($errors) > 0)
			<tr>
				<td colspan = "2">
					<div class = "alert alert-danger">
						<ul>
							@foreach($errors->all() as $error)
							<li>{{ $error }}</li>
							@endforeach
						</ul>
					</div>
				</td>
			</tr>
			@endif
			<tr>
				<td colspan = "2">
					<h1 class = "well text-center">Send password reset link </h1>
				</td>
			</tr>
			<tr>
				<td>Enter your email address :</td>
				<td> {!! Form::email("email") !!} </td>
			</tr>
			<tr>
				<td>Enter your new password :</td>
				<td> {!! Form::password("password") !!} </td>
			</tr>
			<tr>
				<td>Confirm your password :</td>
				<td> {!! Form::password("password_confirmation") !!} </td>
			</tr>
			<tr>
				<td colspan = "2">
					{!! Form::submit("Reset password") !!}
				</td>
			</tr>

		</table>
		{!! Form::close() !!}
	</div>
</body>
</html>


<!-- resources/views/auth/reset.blade.php -->
<!--
<form method="POST" action="/password/reset">
    {!! csrf_field() !!}
    <input type="hidden" name="token" value="{{ $token }}">

    <div>
        Email
        <input type="email" name="email" value="{{ old('email') }}">
    </div>

    <div>
        Password
        <input type="password" name="password">
    </div>

    <div>
        Confirm Password
        <input type="password" name="password_confirmation">
    </div>

    <div>
        <button type="submit">
            Reset Password
        </button>
    </div>
</form>
-->